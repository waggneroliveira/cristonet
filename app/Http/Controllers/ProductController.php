<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class ProductController extends Controller
{
    protected $pathUpload = 'admin/uploads/images/product/';
    public function index()
    {
        $products = Product::sorting()->get();
        $productSection = ProductSection::first();

        return view('admin.blades.product.index', compact('products', 'productSection'));
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

        // Formata o campo 'price'
        $valorFormatado = $request->price;
        $valorNumerico = str_replace(['R$', ' ', ' ', "\u{A0}"], '', $valorFormatado);
        $valorNumerico = str_replace(',', '.', $valorNumerico);
        $data['price'] = floatval($valorNumerico);
        $data['active'] = $request->active ? 1 : 0;

        try {
            DB::beginTransaction();
            Product::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }

        return redirect()->back();
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        $manager = new ImageManager(GdDriver::class);

        // product desktop
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

            Storage::delete(isset($product->path_image)??$product->path_image);
            $data['path_image'] = $this->pathUpload . $filename;
        }

        if (isset($request->delete_path_image)) {
            Storage::delete(isset($product->path_image)??$product->path_image);
            $data['path_image'] = null;
        }

        // Formata o campo 'price'
        $valorFormatado = $request->price;
        $valorNumerico = str_replace(['R$', ' ', ' ', "\u{A0}"], '', $valorFormatado);
        $valorNumerico = str_replace(',', '.', $valorNumerico);
        $data['price'] = floatval($valorNumerico);
        $data['active'] = $request->active ? 1 : 0;

        try {
            DB::beginTransaction();
            $product->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Erro', __('dashboard.response_item_error_update'));
        }

        return redirect()->back();
    }


    public function destroy(Product $product)
    {
        Storage::delete(isset($product->path_image)??$product->path_image);
        $product->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $productId) {
            $product = Product::find($productId);
    
            if ($product) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($product)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $productId,
                            'title' => $product->title,
                            'text' => $product->text,
                            'path_image' => $product->path_image,
                            'price' => $product->price,
                            'sorting' => $product->sorting,
                            'active' => $product->active,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $productId não encontrado.");
            }
        }
    
        $deleted = Product::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $product = Product::find($id);
    
            if ($product) {
                $product->sorting = $sorting;
                $product->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($product) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($product)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'title' => $product->title,
                            'text' => $product->text,
                            'path_image' => $product->path_image,
                            'price' => $product->price,
                            'sorting' => $product->sorting,
                            'active' => $product->active,
                            'event' => 'order_updated',
                        ]
                    ])
                    ->log('order_updated');
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }
        }
    
        return Response::json(['status' => 'success']);
    }
}
