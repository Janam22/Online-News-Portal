<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function manageusers(){
        $authenticateduser = Auth::user()->id;
        $manageusers = DB::select('SELECT users.*, user_type.user_type as type_name FROM users join user_type WHERE users.type=user_type.id AND users.id !=?', [$authenticateduser] );
        return view('admin.manage_users.users', compact('manageusers'));
    }

    public function adduser(){
        $usertype = UserType::all();
        return view('admin.manage_users.add_user', compact('usertype'));
    }
}
