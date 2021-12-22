<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;


class OrderController extends Controller
{
    public function index(){
        return view('index');
    }

    public function successfulOrder(){
        return view('successfulOrder');
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

        $time  = $request->get('by_what_time');
        

        $order = new Order();
        $order->customer_name = request()->get('customer_name');
        $order->customer_phone = $request->get('customer_phone');
        $order->by_what_time = $request->get('by_what_time').data("Y-m-d");
        $order->comment = $request->get('comment');
        $order->street = $request->get('street');
        $order->building = $request->get('building');
        $order->flat = $request->get('flat');
        $order->save();
        
        return redirect()->route('successfulOrder');
    }
}
