<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\MutabaahReport;
use App\Models\TahfizReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanUstadzController extends Controller
{
    public function index()
    {
        $santris = Santri::orderBy('nama_santri', 'asc')->get();
        return view('ustadz.index', compact('santris'));
    }

    public function createMutabaah($santri_id)
    {
        $santri = Santri::findOrFail($santri_id);
        return view('ustadz.mutabaah_create', compact('santri'));
    }

    // 1. PERBAIKAN METHOD STORE MUTABAAH
    public function storeMutabaah(Request $request, $santri_id)
    {
        // Masukkan hasil validasi ke variabel $validated
        $validated = $request->validate([
            'pekan' => 'required|string',
            'ql' => 'required',
            'qs' => 'required',
            'zp' => 'required',
            'dh' => 'required',
            'qz' => 'required',
            'bz' => 'required',
            'zs' => 'required',
            'bm' => 'required',
            'bi' => 'required',
            'sj' => 'required',
        ]);

        // Gunakan $validated (bukan $request->all())
        MutabaahReport::create(array_merge($validated, [
            'santri_id' => $santri_id,
            'ustadz_id' => Auth::id()
        ]));

        return redirect()->route('ustadz.index')->with('success', 'Mutabaah harian santri berhasil diperbarui!');
    }

    public function createTahfiz($santri_id)
    {
        $santri = Santri::findOrFail($santri_id);
        return view('ustadz.tahfiz_create', compact('santri'));
    }

    // 2. PERBAIKAN METHOD STORE TAHFIZ
    public function storeTahfiz(Request $request, $santri_id)
    {
        // Masukkan hasil validasi ke variabel $validated
        $validated = $request->validate([
            'pekan' => 'required|string',
            'surat_akhir' => 'required|string',
            'jumlah_hafalan_juz' => 'required|integer',
            'total_ziyadah_halaman' => 'required|integer',
            'murojaah_fardiyyah_juz' => 'required|integer',
            'murojaah_tsunaiyyah_halaman' => 'required|integer',
            'absensi' => 'required|string',
            'catatan' => 'nullable|string',
        ]);

        // Gunakan $validated (bukan $request->all())
        TahfizReport::create(array_merge($validated, [
            'santri_id' => $santri_id,
            'ustadz_id' => Auth::id()
        ]));

        return redirect()->route('ustadz.index')->with('success', 'Progress hafalan quran santri berhasil disimpan!');
    }
}
