<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\NewsController;


Route::get('/', function () {
    return view('auth.login');
});

/**Normal User routes **/
Route::middleware('normaluserAuth')->prefix('normaluser')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'normaluserdashboard'])->name('normaluser.dashboard');
     
    //profile and change password
    Route::get('/profile', [ProfileController::class, 'normaluserprofileview'])->name('normaluser.profile');
    Route::post('/profile/update', [ProfileController::class, 'normaluserprofileviewupdate'])->name('normaluser.profile.update');
    Route::get('/change-password', [ProfileController::class, 'normaluserchangepasswordview'])->name('normaluser.change-password');
    Route::post('/change-password/update', [ProfileController::class, 'normaluserchangepasswordviewupdate'])->name('normaluser.profile.change-password');

});

/**Category Admin routes **/
Route::middleware('categoryadminAuth')->prefix('categoryadmin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'categoryadmindashboard'])->name('categoryadmin.dashboard');
     
    //profile and change password
    Route::get('/profile', [ProfileController::class, 'categoryadminprofileview'])->name('categoryadmin.profile');
    Route::post('/profile/update', [ProfileController::class, 'categoryadminprofileviewupdate'])->name('categoryadmin.profile.update');
    Route::get('/change-password', [ProfileController::class, 'categoryadminchangepasswordview'])->name('categoryadmin.change-password');
    Route::post('/change-password/update', [ProfileController::class, 'categoryadminchangepasswordviewupdate'])->name('categoryadmin.profile.change-password');

});

/**Admin routes **/
Route::middleware('adminAuth')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'admindashboard'])->name('dashboard');
    
    //profile and change password
    Route::get('/profile', [ProfileController::class, 'adminprofileview'])->name('admin.profile');
    Route::post('/profile/update', [ProfileController::class, 'adminprofileviewupdate'])->name('admin.profile.update');
    Route::get('/change-password', [ProfileController::class, 'adminchangepasswordview'])->name('admin.change-password');
    Route::post('/change-password/update', [ProfileController::class, 'adminchangepasswordviewupdate'])->name('admin.profile.change-password');

    //manage users
    Route::get('/manage-users', [AdminUserController::class, 'manageusers'])->name('manage.users');
    
    //manage news
    Route::get('/manage-news', [NewsController::class, 'managenews'])->name('manage.news');

});

require __DIR__.'/auth.php';
