<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;

class FrontendController extends Controller
{
    public function index(){
        $jumlahuser = User::all();
        $jumlahproduk = Product::all();
        $jumlahorder = Order::where('status','0')->get();
        $jumlahorderselesai = Order::where('status','1')->get();
        $pendapatan = Order::all();
        return view('dashboard.dashboard', compact('jumlahuser','jumlahorder','jumlahorderselesai','jumlahproduk','pendapatan'));
    }
}
