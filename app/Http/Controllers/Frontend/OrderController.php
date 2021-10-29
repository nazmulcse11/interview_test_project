<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Extraservice;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //order page
    public function order(){
        $extraservices = Extraservice::all();
        return view('frontend.order.order',compact('extraservices'));
    }
    //add order
    public function addOrder(Request $request){
        if($request->isMethod('post')){
          return 'ok';
        }
    }
}
