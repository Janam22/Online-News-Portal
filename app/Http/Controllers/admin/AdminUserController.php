<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function storeuser(Request $request){
        $user = new User();
        $user -> name = $request -> input('name');
        $user -> email = $request -> input('email');
        $user -> type = $request -> input('user_type');
        $user -> password = Hash::make($request -> input('password'));
        
        if ($request-> hasFile('profile_photo_path')) {
            $profilephoto = $request->file('profile_photo_path');
            $profilephotoName = $request->email . time() . '_profile.' . $profilephoto->getClientOriginalExtension();
            $profilephoto->move(public_path('storage/users_profile_photo/'), $profilephotoName);
            $user->profile_photo_path = $profilephotoName;
        } else {
            $user-> profile_photo_path = $user->getOriginal('profile_photo_path');
        }
        
        if ($user->save()) {
            session()->flash('success-msg', 'User Added Successfully !');
        } else {
            session()->flash('error-msg', 'Error !');
        }
        return redirect()->route('manage.users');
    }
}
