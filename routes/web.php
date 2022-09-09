<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;


//  Route::get('/{path?}', function () {
//      return view('index');
//  })->where('path','.*');

 Route::get('/', function () {
    return view('index');
});
Route::view('/index', 'index');
 Route::view('/Registration', 'registration');
// Route::get('Footer', [loginController::class,'show']);
// Route::view('/add','add');
Route::post('/add', [loginController::class,'addData']);
Route::view('/Login', 'Login');
Route::post('/Login', [loginController::class,'userLogin']);
Route::view('/Navbar', 'Navbar');
Route::get('/ {user}', [loginController::class,'profileShow']);
