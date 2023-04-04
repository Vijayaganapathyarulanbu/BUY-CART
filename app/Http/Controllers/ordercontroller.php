<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ordercontroller extends Controller
{

    public function orderform ($id){
        $product = product::find($id);
        return view('UserHome',compact('product'));
    }
   public function store(Request $request)
{

    $order = new Order();
    $order->cust_name = $request->cust_name;
    $order->cust_addr = $request->cust_addr;
    $order->cust_phone = $request->cust_phone;
    $order->product_name = $request->product_name;
    $order->product_price = $request->product_price;
    $order->save();
    
    return redirect('confirm');
}

function order() {
    $data=order::all();
    return view('orders.order', ['order'=>$data]);
 }

}


