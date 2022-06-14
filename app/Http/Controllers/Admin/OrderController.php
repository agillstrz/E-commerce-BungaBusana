<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {   
        $orders = Order::where('status', '0')->get();
        return view('dashboard.orders.index' , compact('orders'));
    }
    
    public function view($id)
    {

        $orders = Order::where('id', $id)->first();
        return view('dashboard.orders.view', compact('orders'));
    }

    public function updateorder(Request $request , $id)
    {
        $orders =  Order::find($id);
        $orders->status= $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status','berhasil diperbarui');
    }

    public function history()
    {   
        $orders = Order::where('status', '1')->get(); 
        return view('dashboard.orders.history' , compact('orders'));


       
    }

   
}