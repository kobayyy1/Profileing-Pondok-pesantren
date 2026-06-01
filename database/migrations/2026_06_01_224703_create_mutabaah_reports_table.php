<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mutabaah_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
            $table->foreignId('ustadz_id')->constrained('users')->onDelete('cascade'); // Ustadz Wali Kamar
            $table->string('pekan'); 

            $table->enum('ql', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('qs', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('zp', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('dh', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('qz', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('bz', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('zs', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('bm', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('bi', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');
            $table->enum('sj', ['Sangat Bagus', 'Bagus', 'Perlu Ditingkatkan'])->default('Bagus');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mutabaah_reports');
    }
};
