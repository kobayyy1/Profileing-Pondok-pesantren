<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $fillable = [
        'ortu_id',
        'nama_santri',
        'nisn',
        'kelas',
    ];

    public function orangTua()
    {
        return $this->belongsTo(User::class, 'ortu_id');
    }
}
