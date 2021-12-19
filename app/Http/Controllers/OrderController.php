<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        return view('index');
    }

    public function order(){
        return view('order');
    }

    public function order_check(Request $request){
        $valid = $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'by_what_time' => 'required',
            'street' => 'required',
            'building' => 'required',
            'flat' => 'required'
        ]);

        $order = new Order();
        $order->customer_name = $request->input('customer_name');
        $order->customer_phone = $request->input('customer_phone');
        $order->by_what_time = $request->input('by_what_time');
        $order->comment = $request->input('comment');
        $order->street = $request->input('street');
        $order->building = $request->input('building');
        $order->flat = $request->input('flat');

        $order->save();
    }
}
