<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
use Carbon\Carbon;


class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_products = Products::all()->where('status', '=', '1');
        return view('products.index', [
            'product' => $all_products,
        ]);
    }

    public function newProduct()
    {
        return view('products.new');
    }

    public function storeNewProduct(Request $request)
    {
        if ($request->hasFile('customFile')) {
            $file = $request->file('customFile');
            $extension = $file->getClientOriginalExtension();
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $newImageProduct =  'product-' . substr(str_shuffle($permitted_chars), 2, 16) . '.' . $extension;
            $file->move(public_path("assets/products/"), $newImageProduct);
        }
        // IMAGEN MINIATURA DE PRODUCTO
        if ($request->hasFile('thumbnailImage')) {
            $filethumb = $request->file('thumbnailImage');
            $filethumb->move(public_path("assets/products/thumbnails/"), $newImageProduct);
        }
        // IMAGEN TABLA NUTRIMENTAL DE PRODUCTO
        if ($request->hasFile('tableImage')) {
            $file = $request->file('tableImage');
            $extension = $file->getClientOriginalExtension();
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $newTableProduct =  'table-' . substr(str_shuffle($permitted_chars), 2, 16) . '.' . $extension;
            $file->move(public_path("assets/products/tablas/"), $newTableProduct);
        }

        $newProd = new Products;
        $newProd->name     = $request->name;
        $newProd->description    = $request->desc;
        $newProd->content    = $request->contentProd . ' CÁPSULAS';
        $newProd->m_info    = $request->mInfo;
        $newProd->recomend    = $request->recommend;
        $newProd->warning    = $request->warning;
        $newProd->image    =  $newImageProduct;
        $newProd->nutrition_table_image = $newTableProduct;
        $newProd->status    = '1';
        $newProd->best_seller    = '0';
        $newProd->created_at    = Carbon::now();
        $newProd->updated_at    = Carbon::now();
        $newProd->save();

        return redirect('admin/products')->with('message', 'success');
    }


    public function updateProduct(Request $request)
    {
        $item = Products::where('id', $request->id)->get();


        return view('products.edit', [
            'item' => $item,
        ]);
    }

    public function storeUpdateProduct(Request $request)
    {
        $originalProductData = Products::where('id', '=', $request->id)->first();

        // IMAGEN COMPLETA DE PRODUCTO
        $newImageProduct = '';
        $newTableProduct = '';

        if ($request->hasFile('customFile')) {
            $file = $request->file('customFile');
            $extension = $file->getClientOriginalExtension();
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $newImageProduct =  'product-' . substr(str_shuffle($permitted_chars), 2, 16) . '.' . $extension;
            $file->move(public_path("assets/products/"), $newImageProduct);
        }
        // IMAGEN MINIATURA DE PRODUCTO
        if ($request->hasFile('thumbnailImage')) {
            $filethumb = $request->file('thumbnailImage');
            $filethumb->move(public_path("assets/products/thumbnails/"), $newImageProduct);
        }
        // IMAGEN TABLA NUTRIMENTAL DE PRODUCTO
        if ($request->hasFile('tableImage')) {
            $file = $request->file('tableImage');
            $extension = $file->getClientOriginalExtension();
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $newTableProduct =  'table-' . substr(str_shuffle($permitted_chars), 2, 16) . '.' . $extension;
            $file->move(public_path("assets/products/tablas/"), $newTableProduct);
        }

        if( $newImageProduct != ''){
            $imageUpdate =  $newImageProduct;
        }else{
            $imageUpdate = $originalProductData['image'];
        }
        if( $newTableProduct != ''){
            $tableUpdate = $newTableProduct;
        }else{
            $tableUpdate = $originalProductData['nutrition_table_image'];
        }

        Products::where('id', $request->id)->update([
            'name'                  => $request->name,
            'description'           => $request->desc,
            'content'               => $request->contentProd,
            'm_info'                => $request->mInfo,
            'recomend'              => $request->recommend,
            'warning'               => $request->warning,
            'image'                 => $imageUpdate,
            'nutrition_table_image' => $tableUpdate,
            'status'                => '1',
            'best_seller'           => '1',
            'updated_at'            => Carbon::now()
        ]);

        return redirect('admin/products')->with('message', 'success');
    }

    public function destroyProduct(Request $request)
    {
        Products::where('id', $request->id)->update([
            'status' => '0',
        ]);
        return redirect('admin/products')->with('message', 'success');
    }
}
