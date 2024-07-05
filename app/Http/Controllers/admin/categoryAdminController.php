<?php

namespace App\Http\Controllers\admin;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryAdminController extends Controller
{
    public function managecategoryadminusers(){
        
        $categoryadminusers = User::where("type",1)->get();
        return view('admin.manage_categoryadmin.category_admins', compact('categoryadminusers'));
    }
}
