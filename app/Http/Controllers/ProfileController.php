<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function adminprofileview()
    {
        return view('admin.profile.profile');
    }

    public function adminchangepasswordview()
    {
        return view('admin.profile.change-password');
    }

    public function categoryadminprofileview()
    {
        return view('categoryadmin.profile.profile');
    }

    public function categoryadminchangepasswordview()
    {
        return view('categoryadmin.profile.change-password');
    }
    
    public function normaluserprofileview()
    {
        return view('normaluser.profile.profile');
    }

    public function normaluserchangepasswordview()
    {
        return view('normaluser.profile.change-password');
    }

    public function normaluserprofileviewupdate(Request $request)
    {    
        $user = User::findOrFail($request->id);
        
        // Update the fields
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request-> hasFile('profile_photo_path')) {
            $profilephoto = $request->file('profile_photo_path');
            $profilephotoName = $user->id . time() . '_profile.' . $profilephoto->getClientOriginalExtension();
            $profilephoto->move(public_path('storage/users_profile_photo/'), $profilephotoName);
            $user->profile_photo_path = $profilephotoName;
        } else {
            $user-> profile_photo_path = $user->getOriginal('profile_photo_path');
        }
        
        // Save the updated data
        $user->save();

    return redirect()->route('normaluser.profile')->with('success', 'Profile updated successfully');

    } 


    
    public function adminprofileviewupdate(Request $request)
    {    
        $user = User::findOrFail($request->id);
        
        // Update the fields
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request-> hasFile('profile_photo_path')) {
            $profilephoto = $request->file('profile_photo_path');
            $profilephotoName = $user->id . time() . '_profile.' . $profilephoto->getClientOriginalExtension();
            $profilephoto->move(public_path('storage/users_profile_photo/'), $profilephotoName);
            $user->profile_photo_path = $profilephotoName;
        } else {
            $user-> profile_photo_path = $user->getOriginal('profile_photo_path');
        }

        // Save the updated data
        $user->save();

    return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');

    } 


    
    public function categoryadminprofileviewupdate(Request $request)
    {    
        $user = User::findOrFail($request->id);
        
        // Update the fields
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request-> hasFile('profile_photo_path')) {
            $profilephoto = $request->file('profile_photo_path');
            $profilephotoName = $user->id . time() . '_profile.' . $profilephoto->getClientOriginalExtension();
            $profilephoto->move(public_path('storage/users_profile_photo/'), $profilephotoName);
            $user->profile_photo_path = $profilephotoName;
        } else {
            $user-> profile_photo_path = $user->getOriginal('profile_photo_path');
        }

        // Save the updated data
        $user->save();

    return redirect()->route('categoryadmin.profile')->with('success', 'Profile updated successfully');

    } 

    
    public function normaluserchangepasswordviewupdate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:5',
            'renewpassword' => 'required|same:newpassword',
        ]);

        $user = Auth::user();

        // Check if the current password matches
        if (!Hash::check($request->input('password'), $user->password)) {

            return redirect()->route('normaluser.change-password')->with('error', 'Current password is incorrect');
        
        } else {

            // Update the password
            $user->password = Hash::make($request->input('newpassword'));
            $user->save();
            return redirect()->route('normaluser.change-password')->with('success', 'Password changed successfully');
        
        }

    }

    
    public function adminchangepasswordviewupdate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:5',
            'renewpassword' => 'required|same:newpassword',
        ]);

        $user = Auth::user();

        // Check if the current password matches
        if (!Hash::check($request->input('password'), $user->password)) {

            return redirect()->route('admin.change-password')->with('error', 'Current password is incorrect');
        
        } else {

            // Update the password
            $user->password = Hash::make($request->input('newpassword'));
            $user->save();
            return redirect()->route('admin.change-password')->with('success', 'Password changed successfully');
        
        }

    }

    
    public function categoryadminchangepasswordviewupdate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required',
            'newpassword' => 'required|min:5',
            'renewpassword' => 'required|same:newpassword',
        ]);

        $user = Auth::user();

        // Check if the current password matches
        if (!Hash::check($request->input('password'), $user->password)) {

            return redirect()->route('categoryadmin.change-password')->with('error', 'Current password is incorrect');
        
        } else {

            // Update the password
            $user->password = Hash::make($request->input('newpassword'));
            $user->save();
            return redirect()->route('categoryadmin.change-password')->with('success', 'Password changed successfully');
        
        }

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
