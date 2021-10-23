<?php

use App\Http\Controllers\customercontroller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;

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

 Route::get('home',function(){
    return view('home');
 });

Route::get('contact',function(){
    return view('Contact');
});


  Route::GET('customer',[customercontroller::class ,'index']);
  Route::POST('custcreate',[customercontroller::class ,'save']);
  Route::GET('customer/create',[customercontroller::class ,'create']);
  Route::POST('customer/custcreate',[customercontroller::class ,'save']);
  
  Route::GET('customer/{customer}',[customercontroller::class ,'show']);
  Route::GET('customer/{customer}/edit',[customercontroller::class,'edit']);
  //we use @meathod('PATCH')in a for with type post in submit form
  Route::POST('customer/{customer}',[customercontroller::class,'update']);
  Route::GET('customer/{customer}/delete',[customercontroller::class,'delete']);
  Route::delete('customer/{customer}',[customercontroller::class,'delete']);