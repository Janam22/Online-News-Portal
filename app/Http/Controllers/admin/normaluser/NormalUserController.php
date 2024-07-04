<?php

namespace App\Http\Controllers\admin\normaluser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NormalUserController extends Controller
{
    
    public function managenormalusers(){
        return view('admin.manage_normaluser.normal_users');
    }
}
