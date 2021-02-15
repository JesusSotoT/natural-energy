<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Carbon\Carbon;


class ArticleController extends Controller
{
    public function index()
    {

        $allArticles = Articles::where('status', '=', '1')->get();

        return view('blog.index', [
            'allArticles' => $allArticles
        ]);
    }

    public function newArticle()
    {

        return view('blog.create');
    }

    public function storeNewArticle(Request $request)
    {
        $nameFileCover = '';
        $nameFilethumbnail = '';

        if ($request->hasFile('coverFile')) {
            $coverImage = $request->file('coverFile');
            $extension = $coverImage->getClientOriginalExtension();

            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $nameFileCover =  'coverDetail-' . substr(str_shuffle($permitted_chars), 2, 16) . '.' . $extension;
            $coverImage->move(public_path("assets/img/mainsite/blog/covers-detail/"), $nameFileCover);
        } else {
            $nameFileCover = 'coverDetailGeneric.jpg';
        }

        if ($request->hasFile('thumbnailFile')) {
            $thumbnailFile = $request->file('thumbnailFile');
            $extension = $thumbnailFile->getClientOriginalExtension();

            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $nameFilethumbnail =  'thumbnailCover-' . substr(str_shuffle($permitted_chars), 2, 16) . '.' . $extension;
            $thumbnailFile->move(public_path("assets/img/mainsite/blog/covers/"), $nameFilethumbnail);
        } else {
            $nameFilethumbnail = 'genericCover.png';
        }

        $newArticle = new Articles;
        $newArticle->title                  = $request->name;
        $newArticle->subheading             = $request->descArticle;
        $newArticle->content                = $request->contentArticle;
        $newArticle->cover_image            = $nameFilethumbnail;
        $newArticle->cover_image_detail     = $nameFileCover;
        $newArticle->status                 = '1';
        $newArticle->created_at             = Carbon::now();
        $newArticle->save();

        return redirect('admin/articles')->with('message', 'success');
    }
}
