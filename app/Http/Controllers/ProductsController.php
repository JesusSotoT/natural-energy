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

    public function newProduct(){
        return view('products.new');
    }

    public function storeNewProduct(Request $request){
        if($request->hasFile('customFile')){
            $file = $request->file('customFile');
            $extension = $file->getClientOriginalExtension();

            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $nameFile =  'product-'.substr(str_shuffle($permitted_chars), 2, 16).'.'.$extension;
            $file->move(public_path("assets/products/"), $nameFile);

            $newProd = new Products;
            $newProd->name     = $request->name;
            $newProd->description    = $request->desc;
            $newProd->content    = $request->contentProd.' CÁPSULAS';
            $newProd->m_info    = $request->mInfo;
            $newProd->recomend    = $request->recommend;
            $newProd->warning    = $request->warning;
            $newProd->image    =  $nameFile;
            $newProd->status    = '1';
            $newProd->best_seller    = '0';
            $newProd->created_at    = Carbon::now();
            $newProd->updated_at    = Carbon::now();

            $newProd->save();

            return redirect('admin/products')->with('message','success');
        }
    }

    public function destroyProduct(Request $request){
        Products::where('id', $request->id)->update([
            'status' => '0',
        ]);
        return redirect('admin/products')->with('message','success');

    }
}
