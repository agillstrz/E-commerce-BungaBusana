<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Foundation\Auth\User;

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