<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class MainSiteController extends Controller
{
    public function index(){

        $best_products = Products::where('best_seller', '=', '1')->where('status', '=', '1')->take(5)->get();
        return view('mainsite.pages.inicio',[
            'best_products' => $best_products,
        ]);
    }
}
