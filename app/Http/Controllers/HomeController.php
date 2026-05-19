<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('homepage');
    }

    public function about()
    {
        return view ('layouts.Tentangkami.index');
    }
    
    // public function layanan()
    // {
    //     return view ('layouts.Layanan.index');
    // }
}
