<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SantriController extends Controller
{
    // 1. TAMBAHKAN METHOD INDEX INI
    public function index()
    {
        // Mengambil semua data santri beserta data orang tuanya, diurutkan dari yang terbaru
        $santris = Santri::with('orangTua')->latest()->get();

        return view('admin.santri.index', compact('santris'));
    }

    // Method create yang kemarin
    public function create()
    {
        return view('admin.santri.create');
    }

    // Method store yang kemarin
    public function store(Request $request)
    {
        $request->validate([
            'nama_santri'   => 'required|string|max:100',
            'nisn'          => 'required|string|unique:santris,nisn',
            'kelas'         => 'required|string',
            'nama_ortu'     => 'required|string|max:100',
            'email_ortu'    => 'required|email',
        ]);

        $ortu = User::firstOrCreate(
            ['email' => $request->email_ortu],
            [
                'name'     => $request->nama_ortu,
                'password' => Hash::make('daarlilmi123'),
                'role'     => 'ortu'
            ]
        );

        Santri::create([
            'ortu_id'     => $ortu->id,
            'nama_santri' => $request->nama_santri,
            'nisn'        => $request->nisn,
            'kelas'       => $request->kelas,
        ]);

        return redirect()->route('admin.santri.index')->with('success', 'Data santri berhasil ditambahkan dan akun orang tua otomatis aktif!');
    }
    public function edit($id)
    {
        $santri = Santri::with('orangTua')->findOrFail($id);
        return view('admin.santri.edit', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        $santri = Santri::findOrFail($id);

        $request->validate([
            'nama_santri'   => 'required|string|max:100',
            'nisn'          => 'required|string|unique:santris,nisn,' . $id, 
            'kelas'         => 'required|string',
            'nama_ortu'     => 'required|string|max:100',
            'email_ortu'    => 'required|email|unique:users,email,' . $santri->ortu_id, 
        ]);
        DB::transaction(function () use ($request, $santri) {
            $santri->orangTua()->update([
                'name'  => $request->nama_ortu,
                'email' => $request->email_ortu,
            ]);

            // Update data santri
            $santri->update([
                'nama_santri' => $request->nama_santri,
                'nisn'        => $request->nisn,
                'kelas'       => $request->kelas,
            ]);
        });

        return redirect()->route('admin.santri.index')->with('success', 'Data santri dan akun orang tua berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();

        return redirect()->route('admin.santri.index')->with('success', 'Data santri berhasil dihapus dari sistem!');
    }
}
