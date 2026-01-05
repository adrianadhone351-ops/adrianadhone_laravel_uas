<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
// WAJIB: Pastikan baris ini ada agar tidak error "Class not found"
use Barryvdh\DomPDF\Facade\Pdf; 

class MahasiswaController extends Controller
{
    public function index(Request $request) {
        $search = $request->query('search');
        $mahasiswa = Mahasiswa::when($search, function($query, $search) {
            return $query->where('nama', 'LIKE', "%{$search}%")
                         ->orWhere('nim', 'LIKE', "%{$search}%");
        })->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Fungsi Cetak PDF
    public function cetak_pdf() {
        $mahasiswa = Mahasiswa::all();
        // Memanggil file view yang kita buat di Langkah 1
        $pdf = Pdf::loadView('mahasiswa.laporan_pdf', compact('mahasiswa'));
        return $pdf->stream('laporan-mahasiswa.pdf');
    }

    // Fungsi CRUD lainnya (Create, Store, Edit, Update, Destroy)
    public function create() { return view('mahasiswa.create'); }
    public function store(Request $request) {
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }
}