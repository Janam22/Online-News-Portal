<?php

namespace App\Http\Controllers\admin;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function manageusers(){
        
        $manageusers = User::all();
        return view('admin.manage_users.users', compact('manageusers'));
    }
}
