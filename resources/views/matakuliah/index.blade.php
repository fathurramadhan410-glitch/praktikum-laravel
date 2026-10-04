@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h1>Daftar Mata Kuliah</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $mk)
                <tr style="background-color: {{ $loop->even ? '#cfe2ff' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->kode_mk }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>
                        @if ($mk->sks > 3)
                            <span><strong>SKS Besar</strong></span>
                        @else
                            <span>SKS Normal</span>
                        @endif
                    </td>
                    <td><a href="{{ route('matakuliah.show', $mk->id) }}">Lihat Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="6">Belum ada data mata kuliah.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection