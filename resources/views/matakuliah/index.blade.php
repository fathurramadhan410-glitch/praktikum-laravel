@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
<h1>Daftar Mata Kuliah</h1>

@if(session('pesan'))
    <p class="pesan">{{ session('pesan') }}</p>
@endif

<a class="btn" href="{{ route('matakuliah.create') }}">+ Tambah Mata Kuliah</a>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th><th>Kode</th><th>Nama MK</th><th>SKS</th>
            <th>Semester</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($matakuliah as $mk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>
                    <a class="btn" href="{{ route('matakuliah.show', $mk->id) }}">Detail</a>
                    <a class="btn" href="{{ route('matakuliah.edit', $mk->id) }}">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline"
                          onsubmit="return confirm('Yakin hapus mata kuliah ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">Belum ada data.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection