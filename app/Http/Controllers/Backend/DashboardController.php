<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard.dashboard');
    }

    public function orders(){
        $orders = Order::latest()->get();
        return view('backend.order.order',compact('orders'));
    }

}
