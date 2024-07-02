<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admindashboard(){
        return view('admin.dashboard');
    }

    public function categoryadmindashboard(){
        return view('categoryadmin.dashboard');
    }

    public function normaluserdashboard(){
        return view('normaluser.dashboard');
    }
}
