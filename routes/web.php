<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/expensesgraph', function(){
    return view('expensesgraph');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/networking','App\Http\Controllers\ProfileController@index');
Route::get('/investors', 'App\Http\Controllers\InvestorController@index');
Route::get('/editprofile','App\Http\Controllers\ProfileController@edit');
Route::patch('/editprofile','App\Http\Controllers\ProfileController@update')->name('profile.edit');
Route::get('/profile','App\Http\Controllers\ProfileController@show');