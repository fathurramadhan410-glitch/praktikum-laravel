@extends('layouts.app')

@section('judul', 'Edit Mata Kuliah')

@section('konten')
<h1>Edit Mata Kuliah</h1>

<form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p><input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}"></p>
    <p><input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}"></p>
    <p><input type="number" name="sks" value="{{ $matakuliah->sks }}"></p>
    <p><input type="number" name="semester" value="{{ $matakuliah->semester }}"></p>
    <p><input type="number" name="dosen_id" value="{{ $matakuliah->dosen_id }}"></p>
    <button type="submit">Perbarui</button>
</form>
@endsection