<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    
    public function managenewscategory(){
        
        return view('admin.manage_news_category.news_category');
    }
}
