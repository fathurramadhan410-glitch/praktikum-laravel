@extends('layouts.app')

@section('content')
<h1>Edit Mahasiswa</h1>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p><input type="text" name="nim" value="{{ $mahasiswa->nim }}"></p>
    <p><input type="text" name="nama" value="{{ $mahasiswa->nama }}"></p>
    <p><input type="email" name="email" value="{{ $mahasiswa->email }}"></p>
    <p><input type="text" name="prodi" value="{{ $mahasiswa->prodi }}"></p>
    <p><input type="number" name="semester" value="{{ $mahasiswa->semester }}"></p>
    <button type="submit">Perbarui</button>
</form>
@endsection