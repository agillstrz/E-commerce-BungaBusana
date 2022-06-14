<?php

namespace App\Http\Controllers\frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $orders =  Order::where('user_id', Auth::id())->get();
        return view('frontend.order.index', compact('orders'));
    }
    
    public function view($id)
    {
        $orders= Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('frontend.order.view' ,compact('orders'));
    }


}