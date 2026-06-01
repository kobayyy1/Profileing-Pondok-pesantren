<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutabaahReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'santri_id',
        'ustadz_id',
        'pekan',
        'ql',
        'qs',
        'zp',
        'dh',
        'qz',
        'bz',
        'zs',
        'bm',
        'bi',
        'sj'
    ];

    public function ustadz()
    {
        return $this->belongsTo(User::class, 'ustadz_id');
    }
}
