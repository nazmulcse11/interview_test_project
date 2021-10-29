<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Extraservice;
use Illuminate\Http\Request;
use App\Models\Order;
use Validator;

class OrderController extends Controller
{
    //order page
    public function order(){
        $extraservices = Extraservice::all();
        return view('frontend.order.order',compact('extraservices'));
    }
    //add order
    public function addOrder(Request $request){
        if($request->ajax()){
            $data = $request->all();

             $request->validate([
                // validation 
            ]);

            $order = new Order();
            $order->location =   $data['location'];
            $order->available_date =   $data['available_date'];
            $order->available_schedule =   $data['available_schedule'];
            $order->name =   $data['name'];
            $order->email =   $data['email'];
            $order->phone =   $data['phone'];
            $order->city =   $data['city'];
            $order->area =   $data['area'];
            $order->post_code =   $data['post_code'];
            $order->address =   $data['address'];
            $order->order_note =   $data['order_note'];
            $order->bed_rooms =   $data['bed_rooms'];
            $order->bed_rooms_total_price =   $data['bed_rooms_total_price'];
            $order->bed_room_unit_price =   $data['bed_room_unit_price'];
            $order->bath_rooms =   $data['bath_rooms'];
            $order->bath_rooms_total_price =   $data['bath_rooms_total_price'];
            $order->bath_room_unit_price =   $data['bath_room_unit_price'];
            $order->sub_total =   $data['sub_total'];
            $order->vat_tax =   $data['vat_tax'];
            $order->final_total =   $data['final_total'];
            $order->payment_method =   $data['payment_method'];
            $order->save();
            return response()->json(['status'=>'true',]);
        }
    }
}
