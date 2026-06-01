<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HubungiController extends Controller
{
    public function index()
    {
        return view('layouts.hubungi.index');
    }

    public function sendEmail(Request $request)
    {
        // 1. Validasi input
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // 2. Gunakan Mail::html (Solusi untuk Laravel 12)
        Mail::html($data['message'], function ($message) use ($data) {
            $message->to('bayuu.adi9@gmail.com') // Email tujuan (pesantren)
                ->from($data['email'], $data['name'])
                ->subject('Pertanyaan Baru dari: ' . $data['name']);
        });

        // 3. Kembali dengan pesan sukses
        return back()->with('success', 'Alhamdulillah, pesan Anda telah berhasil dikirim ke email pesantren!');
    }
}
