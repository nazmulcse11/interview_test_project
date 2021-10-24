<?php

use Illuminate\Support\Facades\Route;

//frontend route
Route::get('/',[App\Http\Controllers\Frontend\BookingController::class,'booking']);

//backend route
Route::get('/admin/dashboard',[App\Http\Controllers\Backend\DashboardController::class,'dashboard']);


