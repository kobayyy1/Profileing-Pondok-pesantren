<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tahfiz_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
            $table->foreignId('ustadz_id')->constrained('users')->onDelete('cascade'); // Ustadz Muhaffiz
            $table->string('pekan');
            $table->string('surat_akhir'); 
            $table->integer('jumlah_hafalan_juz'); 
            $table->integer('total_ziyadah_halaman'); 
            $table->integer('murojaah_fardiyyah_juz');
            $table->integer('murojaah_tsunaiyyah_halaman'); 
            $table->string('absensi')->default('Hadir');
            $table->text('catatan')->nullable(); 

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tahfiz_reports');
    }
};
