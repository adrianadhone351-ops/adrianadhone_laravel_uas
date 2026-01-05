<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan (opsional jika nama tabel sudah 'mahasiswas')
    protected $table = 'mahasiswas';

    // Kolom yang boleh diisi secara massal
    protected $fillable = ['nim', 'nama', 'jurusan', 'email'];
}