<?php

use App\Http\Controllers\Backend\ExtraserviceController;
use Illuminate\Support\Facades\Route;

//frontend route
Route::get('/',[App\Http\Controllers\Frontend\OrderController::class,'order']);
Route::post('/add-order',[App\Http\Controllers\Frontend\OrderController::class,'addOrder']);


//backend route

Route::group(['prefix'=>'admin'],function(){

   //login
   Route::match(['get','post'],'/',[App\Http\Controllers\Backend\AdminController::class,'login']);
  
   Route::group(['middleware'=>'admin'],function(){
   //show all bookings order in dashboard
   Route::get('/dashboard',[App\Http\Controllers\Backend\DashboardController::class,'dashboard']);
   //extra service
   Route::get('extraservice',[ExtraserviceController::class,'extraservice']);
   Route::match(['get','post'],'add-edit-extraservice/{id?}',[App\Http\Controllers\Backend\ExtraserviceController::class,'addEditExtService']);
   //logout
   Route::get('/logout',[App\Http\Controllers\Backend\AdminController::class,'logout']);
   
  });
  
});

//backend route end


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
