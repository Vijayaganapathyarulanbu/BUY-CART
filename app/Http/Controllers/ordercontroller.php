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
    // Redirect to success page
    return redirect('use');
}

function order() {
    $data=order::all();
    return view('orders.order', ['order'=>$data]);
 }

}


/*class ordercontroller extends Controller
{

    public function orderform ($id){
        $product = product::find($id);
        return view('UserHome',compact('product'));
    }
   public function store(Request $request)
{
    // Check if user is logged in
    if (!Auth::check()) {
        // Redirect to login page if user is not logged in
        return redirect()->route('login');
    }
    
    // Validate input data
    $validatedData = $request->validate([
        'product_id' => 'required|exists:products,id',
        'customer_name' => 'required|max:255',
        'customer_num' => 'required|numeric',
    ]);
    
    // Get product details
    $product = Product::find($validatedData['product_id']);
    




    // Create order
    $order = new Order();
    $order->cust_name = $validatedData['customer_name'];
    $order->cust_addr = $validatedData['customer_address'];
    $order->cust_phone = $validatedData['customer_num'];
    $order->product_name = $request->product_name;
    $order->product_price = $request->product_price;
    $order->save();
    // Redirect to success page
    return view('order-success')->with('order', $order);
}

}
?>*/