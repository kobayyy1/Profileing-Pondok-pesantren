<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUstadzController extends Controller
{
    public function index()
    {
        $ustadzs = User::where('role', 'ustadz')->latest()->get();
        return view('admin.ustadz.index', compact('ustadzs'));
    }

    public function create()
    {
        return view('admin.ustadz.create');
    }

    // Simpan ustadz baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'ustadz', // Kunci role sebagai ustadz
        ]);

        return redirect()->route('admin.ustadz.index')->with('success', 'Akun Ustadz pengajar berhasil didaftarkan!');
    }

    public function destroy($id)
    {
        $user = User::where('role', 'ustadz')->findOrFail($id);
        $user->delete();

        return redirect()->route('admin.ustadz.index')->with('success', 'Akun Ustadz berhasil dihapus!');
    }
}
