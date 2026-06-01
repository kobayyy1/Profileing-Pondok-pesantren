<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Nanti di sini kita bisa mengambil data total santri, ustadz, dll dari DB
        $stats = [
            'total_santri' => 0, // Sementara hardcode dulu
            'total_ustadz' => 0,
            'total_mapel'  => 0,
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
