<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique(); // Sesuai NIM 2401010842
            $table->string('nama');           // Sesuai Nama Adriana Klarita
            $table->string('jurusan');        // Sesuai form input
            $table->string('email')->unique(); // Sesuai validasi email
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};