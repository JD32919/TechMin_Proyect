<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function showDashboard()
    {
        $user = Auth::user();

        if ($user->username === 'Admin74') {
            return view('home.admin-dashboard');
        }

        return view('home.usuario-dashboard');
    }

 
    public function index()
    {
        return view('stock.graficas');
    }
}
