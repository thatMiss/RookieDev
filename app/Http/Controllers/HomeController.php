<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;

class HomeController extends Controller
{
    public function getDashboard()
    {
        return view('dashboard');
    }

    public function getAdminProfile()
    {
        return view('profile.show');
    }
}
