@extends('layouts.app')

@section('judul', 'Beranda - Sistem Informasi Akademik')

@section('konten')
    <h1>Selamat Datang di Sistem Informasi Akademik</h1>
    <p>Mini aplikasi Proyek Akhir — Praktikum 4: Routing, View &amp; Blade Templating Engine pada Laravel 13.</p>

    <p>Total mahasiswa: <strong>{{ $totalMahasiswa }}</strong> |
       Total mata kuliah: <strong>{{ $totalMatakuliah }}</strong></p>

    <ul>
        <li><a href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a></li>
        <li><a href="{{ route('matakuliah.index') }}">Daftar Mata Kuliah</a></li>
    </ul>
@endsection