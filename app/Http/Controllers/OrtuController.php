<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    public function dashboard()
    {
        $ortu = Auth::user();

        $anakAnak = $ortu->santris;

        return view('ortu.dashboard', compact('ortu', 'anakAnak'));
    }
}
