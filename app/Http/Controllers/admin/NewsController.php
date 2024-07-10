<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function managenews(){
        $newslist = News::all();
        return view('admin.manage_news.news', compact('newslist'));
    }

    public function storenews(Request $request){

        $news = new News();
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->author = $request->input('author');
        if ($news->save()) {
            session()->flash('success', 'News created successfully');
        } else {
            session()->flash('error', 'Something went wrong.');
        }
        return redirect() -> route('manage.news');

    }

}
