<?php

use Illuminate\Support\Facades\Route;

//frontend route
Route::get('/',[App\Http\Controllers\Frontend\BookingController::class,'booking']);


//backend route

Route::group(['prefix'=>'admin'],function(){

   //login
   Route::match(['get','post'],'/',[App\Http\Controllers\Backend\AdminController::class,'login']);
  
   Route::group(['middleware'=>'admin'],function(){
   //show all bookings in dashboard
   Route::get('/dashboard',[App\Http\Controllers\Backend\DashboardController::class,'dashboard']);
   //logout
   Route::get('/logout',[App\Http\Controllers\Backend\AdminController::class,'logout']);
   
  });
  
});

//backend route end


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
