<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryAdminController extends Controller
{
    public function managecategoryadminusers(){
        return view('admin.manage_categoryadmin.category_admins');
    }
}
