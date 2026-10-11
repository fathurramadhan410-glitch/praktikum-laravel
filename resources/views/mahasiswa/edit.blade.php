@extends('layouts.app')

@section('judul', 'Edit Mahasiswa')

@section('konten')
<h1>Edit Mahasiswa</h1>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label><strong>NIM:</strong></label><br>
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}" size="40">
    </p>
    <p>
        <label><strong>Nama:</strong></label><br>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" size="40">
    </p>
    <p>
        <label><strong>Email:</strong></label><br>
        <input type="email" name="email" value="{{ $mahasiswa->email }}" size="40">
    </p>
    <p>
        <label><strong>Prodi:</strong></label><br>
        <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" size="40">
    </p>
    <p>
        <label><strong>Semester:</strong></label><br>
        <input type="number" name="semester" value="{{ $mahasiswa->semester }}" size="40">
    </p>
    <button type="submit">Perbarui</button>
    <a href="{{ route('mahasiswa.index') }}">Batal</a>
</form>
@endsection