<?php

namespace App\Http\Controllers;

use Log;
use App\Models\User;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\SettingThemeRepository;
use App\Repositories\UserPermissionRepository;
use App\Http\Controllers\Helpers\HelperArchive;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class SlideController extends Controller
{
    protected $pathUpload = 'admin/uploads/images/slide/';
    public function index(UserPermissionRepository $userPermissionRepository)
    {
        $slides = Slide::sorting()->get();
        $settingTheme = (new SettingThemeRepository())->settingTheme();
        $users = User::excludeSuper()->with('roles');
        $filteredUsers = $userPermissionRepository->filterUsersByPermissions($users);

        if ($filteredUsers === 'forbidden') {
            return view('admin.error.403', compact('settingTheme'));
        }
        
        return view('admin.blades.slide.index', compact('slides'));
        
    }

public function store(Request $request)
{
    $data = $request->except(['path_image', 'path_image_mobile']);
    $helper = new HelperArchive();
    $manager = new ImageManager(GdDriver::class);

    $request->validate([
        'path_image' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
        'path_image_mobile' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
    ]);

    // Slide desktop
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

    // Slide mobile
    if ($request->hasFile('path_image_mobile')) {
        $fileMobile = $request->file('path_image_mobile');
        $mimeMobile = $fileMobile->getMimeType();
        $filenameMobile = pathinfo($fileMobile->getClientOriginalName(), PATHINFO_FILENAME) . '_mobile.webp';

        if ($mimeMobile === 'image/svg+xml') {
            Storage::putFileAs($this->pathUpload, $fileMobile, $filenameMobile);
        } else {
            $imageMobile = $manager->read($fileMobile)
                ->resize(null, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->toWebp(quality: 95)
                ->toString();

            Storage::put($this->pathUpload . $filenameMobile, $imageMobile);
        }

        $data['path_image_mobile'] = $this->pathUpload . $filenameMobile;
    }

    $data['active'] = $request->active ? 1 : 0;

    try {
        DB::beginTransaction();
        Slide::create($data);
        DB::commit();
        session()->flash('success', __('dashboard.response_item_create'));
    } catch (\Exception $e) {
        DB::rollback();
        Alert::error('Erro', __('dashboard.response_item_error_create'));
    }

    return redirect()->back();
}


    public function update(Request $request, Slide $slide)
    {
        $data = $request->except(['path_image', 'path_image_mobile']);
        $helper = new HelperArchive();
        $manager = new ImageManager(GdDriver::class);
        
        $request->validate([
            'path_image' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
            'path_image_mobile' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
        ]);
        // ===============================
        // Slide desktop - Remover imagem antiga se solicitado
        // ===============================
        if ($request->filled('delete_path_image')) {
            if (!empty($slide->path_image)) {
                Storage::delete($slide->path_image);
            }
            $data['path_image'] = null;
        }

        // ===============================
        // Slide desktop - Upload de nova imagem
        // ===============================
        if ($request->hasFile('path_image')) {
            // Remove antiga
            if (!empty($slide->path_image)) {
                Storage::delete($slide->path_image);
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

        // ===============================
        // Slide mobile - Remover imagem antiga se solicitado
        // ===============================
        if ($request->filled('delete_path_image_mobile')) {
            if (!empty($slide->path_image_mobile)) {
                Storage::delete($slide->path_image_mobile);
            }
            $data['path_image_mobile'] = null;
        }

        // ===============================
        // Slide mobile - Upload de nova imagem
        // ===============================
        if ($request->hasFile('path_image_mobile')) {
            // Remove antiga
            if (!empty($slide->path_image_mobile)) {
                Storage::delete($slide->path_image_mobile);
            }

            $fileMobile = $request->file('path_image_mobile');
            $mimeMobile = $fileMobile->getMimeType();
            $filenameMobile = pathinfo($fileMobile->getClientOriginalName(), PATHINFO_FILENAME) . '_mobile.webp';

            if ($mimeMobile === 'image/svg+xml') {
                Storage::putFileAs($this->pathUpload, $fileMobile, $filenameMobile);
            } else {
                $imageMobile = $manager->read($fileMobile)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::put($this->pathUpload . $filenameMobile, $imageMobile);
            }

            $data['path_image_mobile'] = $this->pathUpload . $filenameMobile;
        }

        $data['active'] = $request->boolean('active');

        try {
            DB::beginTransaction();
            $slide->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Erro', __('dashboard.response_item_error_update'));
        }

        return redirect()->back();
    }



    public function destroy(Slide $slide)
    {
        Storage::delete(isset($slide->path_image)??$slide->path_image);
        Storage::delete(isset($slide->path_image_mobile)??$slide->path_image_mobile);
        $slide->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $slideId) {
            $slide = Slide::find($slideId);
    
            if ($slide) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($slide)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $slideId,
                            'path_image' => $slide->path_image,
                            'path_image_mobile' => $slide->path_image_mobile,
                            'title' => $slide->title,
                            'description' => $slide->description,
                            'sorting' => $slide->sorting,
                            'active' => $slide->active,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $slideId não encontrado.");
            }
        }
    
        $deleted = Slide::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $slide = Slide::find($id);
    
            if ($slide) {
                $slide->sorting = $sorting;
                $slide->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($slide) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($slide)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'path_image' => $slide->path_image,
                            'path_image_mobile' => $slide->path_image_mobile,
                            'title' => $slide->title,
                            'description' => $slide->description,
                            'sorting' => $slide->sorting,
                            'active' => $slide->active,
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
