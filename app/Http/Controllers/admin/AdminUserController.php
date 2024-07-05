<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function manageusers(){
        
        $manageusers = DB::select('SELECT * FROM users WHERE type !=?', [2]);
        return view('admin.manage_users.users', compact('manageusers'));
    }
}
