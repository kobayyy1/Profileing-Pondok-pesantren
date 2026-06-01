<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahfizReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'ustadz_id',
        'pekan',
        'surat_akhir',
        'jumlah_hafalan_juz',
        'total_ziyadah_halaman',
        'murojaah_fardiyyah_juz',
        'murojaah_tsunaiyyah_halaman',
        'absensi',
        'catatan'
    ];

    public function ustadz()
    {
        return $this->belongsTo(User::class, 'ustadz_id');
    }
}
