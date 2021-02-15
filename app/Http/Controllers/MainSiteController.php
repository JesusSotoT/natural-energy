<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
use App\Articles;
use DB;


class MainSiteController extends Controller
{
    public function index(){

        //Best Seññ ``rpducts requeat
        $best_products = Products::where('best_seller', '=', '1')->where('status', '=', '1')->take(4)->get();



        //return view
        return view('mainsite.pages.inicio',[
            'best_products' => $best_products,
        ]);
    }


    public function productsPage(Request $request, $filter){


            if($request->filter == 'all'){
                $categories = Categories::all();
                $items = Products::where('status', '=', '1')->orderBy('name')->get();
                return view('mainsite.pages.productos', [
                    'items' => $items,
                    'categories' => $categories
                ]);
            }else{
                $categories = Categories::all();
                $items = Products::where('status', '=', '1')->where('id_category', '=', $request->filter)->orderBy('name')->get();
                return view('mainsite.pages.productos', [
                    'items' => $items,
                    'categories' => $categories
                ]);
            }

        return view('mainsite.pages.productos');

    }

    public function detailProduct(Request $request)
    {
        $item = Products::where('id', '=', $request->id )->take(1)->get();

        return $item;
    }


    public function blogPage(Request $request){

        $lastArticlePublished =  DB::table('articles')->latest('id')->take(1)->get();
        $idLastArticle =  DB::table('articles')->latest('id')->first();
        $lastId = $idLastArticle->id;

        $secondId = $lastId - 1;
        $secondArticle =  Articles::where('id', '=', $secondId)->get();

        $thirdId = $lastId - 2;
        $thirdArticle =  Articles::where('id', '=', $thirdId)->get();

        $allArticles =  DB::table('articles')->where('id', '<', $thirdId)->orderBy('id', 'desc')->get();



        return view('mainsite.pages.blog', [
            'lastArticlePublished' => $lastArticlePublished,
            'secondArticle' => $secondArticle,
            'thirdArticle' => $thirdArticle,
            'allArticles' => $allArticles
        ]);
    }

    public function articlePage(Request $request){
        $article = Articles::where('id', '=', $request->id)->get();

        return view('mainsite.pages.articulo', [
            'article' => $article
        ]);
    }

    public function contactPage(){
        return view('mainsite.pages.contacto');
    }
}
