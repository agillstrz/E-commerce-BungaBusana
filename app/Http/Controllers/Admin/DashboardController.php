<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
       
        $user = User::all();
        return view('dashboard.user.index', compact('user'));
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('dashboard.user.view' , compact('user'));
    }

    
}