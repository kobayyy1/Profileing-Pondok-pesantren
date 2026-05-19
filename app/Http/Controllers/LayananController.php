<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view ('layouts.Layanan.index');
    }

    public function paketA()
    {
        return view ('layouts.Layanan.paketA');
    }

    public function paketB()
    {
        return view ('layouts.Layanan.paketB');
    }

    public function paketC()
    {
        return view ('layouts.Layanan.paketC');
    }

    
}
