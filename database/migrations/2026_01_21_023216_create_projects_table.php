<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('nama_alat');
            $table->enum('tipe_layanan', ['Soil Investigation', 'Survey', 'Engineering']);
            $table->enum('status', ['menunggu', 'diperiksa', 'diperbaiki','selesai']);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
