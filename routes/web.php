<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SchoolController;

// Route::get('/dashboard', function () {
//     return view('dasboard');
// });
Route::get('/', function () {
    return view('index');
});


Route::get('/user/create/', [UsersController::class, 'create'])->name('user.create');
Route::post('/user/store/', [UsersController::class, 'store'])->name('user.store');
Route::get('/user/ProfileUpdate/{user}',[UsersController::class,'ProfileUpdate'])->name('profile.update');
Route::post('/user/ProfileStore/{id}',[UsersController::class,'ProfileStore'])->name('profile.store');



Route::get('user/verification/{token}',[AuthController::class,'userVerification'])->name('user.verification');
Route::get('/user/login/create',[AuthController::class,'create'])->name('login.create');
Route::post('/user/login/match',[AuthController::class,'loginMatch'])->name('login.match');
Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');

//Forgot Password
Route::get('user/forgot/',[AuthController::class,'forgotPassword'])->name('forgot.create');
Route::post('user/forgot/',[AuthController::class,'forgotPasswordStore'])->name('forgot.store');

// Route::get('/user/password/reset/{token}',[AuthController::class,'passwordResetCreate'])->name('password.reset.ve');
Route::get('/user/password/reset/{token}',[AuthController::class,'passwordReset'])->name('password.reset');
Route::post('/user/password/reset/{token}',[AuthController::class,'passwordStore'])->name('password.store');


Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard')->middleware('authmiddleware');


Route::get('/school/create/',[SchoolController::class,'create'])->name('school.create');
Route::post('/school/store/',[SchoolController::class,'store'])->name('school.store');
Route::get('/school/view',[SchoolController::class,'index'])->name('school.view');



Route::get('/jobs/create/{id}',[JobsController::class,'create'])->name('jobs.create');
Route::post('/jobs/store',[JobsController::class,'store'])->name('jobs.store');
Route::get('/jobs/view',[JobsController::class,'index'])->name('jobs.view');


