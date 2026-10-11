@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah')

@section('konten')
<h1>Detail Mata Kuliah</h1>

<p><strong>Kode:</strong> {{ $matakuliah->kode_mk }}</p>
<p><strong>Nama:</strong> {{ $matakuliah->nama_mk }}</p>
<p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>
<p><strong>Semester:</strong> {{ $matakuliah->semester }}</p>

<a class="btn" href="{{ route('matakuliah.index') }}">Kembali</a>

<h3>Daftar Mahasiswa Pengambil ({{ $matakuliah->nilai->count() }} mahasiswa)</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($matakuliah->nilai as $n)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $n->mahasiswa->nim ?? '-' }}</td>
                <td>{{ $n->mahasiswa->nama ?? '-' }}</td>
                <td>{{ $n->mahasiswa->prodi ?? '-' }}</td>
                <td>{{ $n->nilai }}</td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada mahasiswa yang mengambil mata kuliah ini.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection