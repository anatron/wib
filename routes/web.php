<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/expenses',function (){
    return view('expense');
});

Route::get('/networking', function (){
    return view('networking');
});

Route::get('/investors', function(){
    return view('investors');
});

Route::get('/editprofile', function(){
    return view('editprofile');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
