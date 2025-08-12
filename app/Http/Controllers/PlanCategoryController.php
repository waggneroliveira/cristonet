<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PlanCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class PlanCategoryController extends Controller
{
    protected $pathUpload = 'admin/uploads/images/plan-category/';
    public function index()
    {
        $planCategories = PlanCategory::sorting()->get();
        
        return view('admin.blades.planCategory.index', compact('planCategories'));
    }

    public function store(Request $request)
    {
        $data = $request->except(['path_image']);
        $manager = new ImageManager(GdDriver::class);

        $request->validate([
            'path_image' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
        ]);

        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $mime = $file->getMimeType();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.webp';

            if ($mime === 'image/svg+xml') {
                Storage::putFileAs($this->pathUpload, $file, $filename);
            } else {
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::put($this->pathUpload . $filename, $image);
            }

            $data['path_image'] = $this->pathUpload . $filename;
        }

        $data['active'] = $request->active ? 1 : 0;
        $data['slug'] = Str::slug($request->title);

        try {
            DB::beginTransaction();
            PlanCategory::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }

        return redirect()->back();
    }

    public function update(Request $request, PlanCategory $planCategory)
    {
        $data = $request->all();
        $manager = new ImageManager(GdDriver::class);

        // ===============================
        // Remover imagem antiga
        // ===============================
        if ($request->filled('delete_path_image')) {
            if (!empty($planCategory->path_image)) {
                Storage::delete($planCategory->path_image);
            }
            $data['path_image'] = null;
        }

        // ===============================
        // Upload de nova imagem
        // ===============================
        if ($request->hasFile('path_image')) {
            // Remove a antiga
            if (!empty($planCategory->path_image)) {
                Storage::delete($planCategory->path_image);
            }

            $file = $request->file('path_image');
            $mime = $file->getMimeType();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.webp';

            if ($mime === 'image/svg+xml') {
                Storage::putFileAs($this->pathUpload, $file, $filename);
            } else {
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::put($this->pathUpload . $filename, $image);
            }

            $data['path_image'] = $this->pathUpload . $filename;
        }

        $data['active'] = $request->boolean('active');
        $data['slug'] = Str::slug($request->title);

        try {
            DB::beginTransaction();
            $planCategory->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Erro', __('dashboard.response_item_error_update'));
        }

        return redirect()->back();
    }


    public function destroy(PlanCategory $planCategory)
    {
        Storage::delete(isset($planCategory->path_image)??$planCategory->path_image);
        $planCategory->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $planCategoryId) {
            $planCategory = PlanCategory::find($planCategoryId);
    
            if ($planCategory) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($planCategory)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $planCategoryId,
                            'path_image' => $planCategory->path_image,
                            'link' => $planCategory->link,
                            'sorting' => $planCategory->sorting,
                            'active' => $planCategory->active,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $planCategoryId não encontrado.");
            }
        }
    
        $deleted = PlanCategory::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $planCategory = PlanCategory::find($id);
    
            if ($planCategory) {
                $planCategory->sorting = $sorting;
                $planCategory->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($planCategory) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($planCategory)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'path_image' => $planCategory->path_image,
                            'link' => $planCategory->link,
                            'sorting' => $planCategory->sorting,
                            'active' => $planCategory->active,
                            'event' => 'order_updated',
                        ]
                    ])
                    ->log('order_updated');
            } else {
                \Log::warning("Item com ID $id não encontrado.");
            }
        }
    
        return Response::json(['status' => 'success']);
    }
}
