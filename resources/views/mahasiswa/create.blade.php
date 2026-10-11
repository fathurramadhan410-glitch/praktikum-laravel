@extends('layouts.app')

@section('konten')
<h1>Tambah Mahasiswa</h1>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <p><input type="text" name="nim" placeholder="NIM"></p>
    <p><input type="text" name="nama" placeholder="Nama"></p>
    <p><input type="email" name="email" placeholder="Email"></p>
    <p><input type="text" name="prodi" placeholder="Prodi"></p>
    <p><input type="number" name="semester" placeholder="Semester"></p>
    <button type="submit">Simpan</button>
</form>
@endsection