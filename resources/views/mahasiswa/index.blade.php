@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Mahasiswa</h2>
    <div>
        <a href="/mahasiswa/cetak" class="btn btn-danger shadow-sm" target="_blank">📄 Cetak Laporan PDF</a>
        <a href="/mahasiswa/create" class="btn btn-primary shadow-sm">+ Tambah Mahasiswa Baru</a>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <form action="/mahasiswa" method="GET" class="row g-2">
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Cari Nama atau NIM..." value="{{ request('search') }}">
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-secondary">Cari</button>
            </div>
        </form>
    </div>
</div>

<table class="table table-bordered table-striped bg-white shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>No</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $index => $mhs)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/mahasiswa/{{ $mhs->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection