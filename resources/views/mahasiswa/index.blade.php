@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
<h1>Daftar Mahasiswa</h1>

@if(session('pesan'))
    <p class="pesan">{{ session('pesan') }}</p>
@endif

<a class="btn" href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>

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
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->semester }}</td>
                <td>
                    @switch(true)
                        @case($mhs->semester <= 2)
                            <strong>Mahasiswa Baru</strong>
                            @break
                        @case($mhs->semester >= 7)
                            <strong>Tingkat Akhir</strong>
                            @break
                        @default
                            Mahasiswa Aktif
                    @endswitch
                </td>
                <td>
                    <a class="btn" href="{{ route('mahasiswa.show', $mhs->id) }}">Detail</a>
                    <a class="btn" href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline"
                          onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7">Belum ada data mahasiswa.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection