<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        echo "Halo, selamat datang";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'><< Logout</a>";
    }

    public function operator()
    {
        echo "Halo, selamat datang Operator";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'><< Logout</a>";
    }

    public function bendahara()
    {
        echo "Halo, selamat datang Bendahara";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'><< Logout</a>";
    }

    public function marketing()
    {
        echo "Halo, selamat datang Marketing";
        echo "<h1>" . Auth::user()->name . "</h1>";
        echo "<a href='/logout'><< Logout</a>";
    }
}
