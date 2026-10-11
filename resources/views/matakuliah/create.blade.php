@extends('layouts.app')

@section('judul', 'Tambah Mata Kuliah')

@section('konten')
<h1>Tambah Mata Kuliah</h1>

@if(session('pesan'))
    <p class="pesan">{{ session('pesan') }}</p>
@endif

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf
    <p><input type="text" name="kode_mk" placeholder="Kode MK" value="{{ old('kode_mk') }}"></p>
    <p><input type="text" name="nama_mk" placeholder="Nama MK" value="{{ old('nama_mk') }}"></p>
    <p><input type="number" name="sks" placeholder="SKS" value="{{ old('sks') }}"></p>
    <p><input type="number" name="semester" placeholder="Semester" value="{{ old('semester') }}"></p>
    <p><input type="number" name="dosen_id" placeholder="ID Dosen" value="{{ old('dosen_id') }}"></p>
    <button type="submit">Simpan</button>
</form>
@endsection

<!-- <h1>Tambah Mata Kuliah</h1>
<form action="/matakuliah" method="POST">
    @csrf
    <p><label>Kode MK</label><br>
        <input type="text" name="kode_mk"></p>
    <p><label>Nama MK</label><br>
        <input type="text" name="nama_mk"></p>
    <p><label>SKS</label><br>
        <input type="number" name="sks" min="1" max="4"></p>
    <p><label>Semester</label><br>
        <input type="number" name="semester" min="1" max="8"></p>
    <p><label>Dosen Pengampu</label><br>
        <select name="dosen_id">
            @foreach (\App\Models\User::all() as $dsn)
            <option value="{{ $dsn->id }}">{{ $dsn->name }}</option>
            @endforeach
        </select></p>
    <p><button type="submit">Simpan</button></p>
</form> -->