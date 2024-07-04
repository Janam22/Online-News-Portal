<?php

namespace App\Http\Controllers\admin\news;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    
    public function managenews(){
        return view('admin.manage_news.news');
    }
}
