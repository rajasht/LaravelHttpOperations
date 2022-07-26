<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FlasSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('login',[LoginController::class,'userLogin']);
Route::view('profile','profile');


// to Start the session of profile page if clicked on login
Route::get('/login', function () {
    if(!session()){
        return view('loginpage');
    }
    else if(session()->has('user')){
        return redirect('profile');
    }
    else{
        return view('loginpage');
    }
});

// to end session alloted to profile page if clicked on logout
Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect("login");
});

// prevents direct access to profile page
Route::get('/profile',function(){
    if(!session()->has('user')){
        return redirect('login');
    }
    return view('profile');
});


// Flash session Operation in register page
Route::view('register','registerpage');
Route::post('register',[LoginController::class,'registerUser']);
