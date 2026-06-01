<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    public function dashboard()
    {
        /** @var \App\Models\User $ortu */
        $ortu = Auth::user();
        $anakAnak = $ortu->santris()->with([
            'mutabaahReports' => function ($query) {
                $query->latest()->with('ustadz'); // Diperbaiki: Mengurutkan berdasar tanggal (kosong) + panggil relasi ustadz
            },
            'tahfizReports' => function ($query) {
                $query->latest()->with('ustadz'); // Diperbaiki: Mengurutkan berdasar tanggal (kosong) + panggil relasi ustadz
            },
        ])->get();

        return view('ortu.dashboard', compact('ortu', 'anakAnak'));
    }
}
