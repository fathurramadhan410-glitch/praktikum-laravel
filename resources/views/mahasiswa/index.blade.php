@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $mhs)
                <tr style="background-color: {{ $loop->even ? '#cfe2ff' : '#ffffff' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama ?? 'Tanpa Nama' }}</td>
                    <td>{{ $mhs->prodi ?? '-' }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>
                        @switch(true)
                            @case($mhs->semester <= 2)
                                <span><strong>Mahasiswa Baru</strong></span>
                                @break
                            @case($mhs->semester >= 7)
                                <span><strong>Tingkat Akhir</strong></span>
                                @break
                            @default
                                <span>Mahasiswa Aktif</span>
                        @endswitch
                    </td>
                    <td><a href="{{ route('mahasiswa.show', $mhs->id) }}">Lihat Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="7">Belum ada data mahasiswa.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection