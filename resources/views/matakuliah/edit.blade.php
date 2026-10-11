@extends('layouts.app')

@section('judul', 'Edit Mata Kuliah')

@section('konten')
<h1>Edit Mata Kuliah</h1>

<form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label><strong>Kode MK:</strong></label><br>
        <input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}" size="40">
    </p>
    <p>
        <label><strong>Nama Mata Kuliah:</strong></label><br>
        <input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}" size="40">
    </p>
    <p>
        <label><strong>SKS:</strong></label><br>
        <input type="number" name="sks" value="{{ $matakuliah->sks }}" size="40">
    </p>
    <p>
        <label><strong>Semester:</strong></label><br>
        <input type="number" name="semester" value="{{ $matakuliah->semester }}" size="40">
    </p>
    <p>
        <label><strong>ID Dosen:</strong></label><br>
        <input type="number" name="dosen_id" value="{{ $matakuliah->dosen_id }}" size="40">
    </p>
    <button type="submit">Perbarui</button>
    <a href="{{ route('matakuliah.index') }}">Batal</a>
</form>
@endsection