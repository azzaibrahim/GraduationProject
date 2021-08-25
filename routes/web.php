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

Route::prefix('Dashbord')->middleware('auth')->group(function (){

    Route::get('/','App\Http\Controllers\Dashbordd\dashbordcontroller@index');
    Route::get('prouduct','App\Http\Controllers\Dashbordd\prouductcontroller@index');
    Route::get('user','App\Http\Controllers\Dashbordd\usercontroller@index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function (){
    return view('frontsite.home');
});

Route::get('tezkar',function (){
    return view('frontsite.tezkar');
});

Route::get('signin',function (){
    return view('frontsite.signin');
});

Route::get('login','App\Http\Controllers\AuthControllers@log')->name('login');
Route::post('authenticate','App\Http\Controllers\AuthControllers@authenticate')->name('authenticate');
Route::post('logout','App\Http\Controllers\AuthControllers@logout')->name('logout');
