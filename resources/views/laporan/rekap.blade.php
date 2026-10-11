@extends('layouts.app')

@section('judul', 'Laporan Akademik')

@section('konten')
<h1>Laporan Akademik</h1>
<p><em>Halaman ini dibangun sepenuhnya menggunakan Database Query Builder (DB::table()).</em></p>

<table border="1" cellpadding="10" cellspacing="0" style="margin-bottom:20px;">
    <tr style="background:#eee;">
        <th>Total Mahasiswa</th><th>Total Mata Kuliah</th><th>Total SKS</th>
    </tr>
    <tr>
        <td align="center"><strong>{{ $totalMahasiswa }}</strong></td>
        <td align="center"><strong>{{ $totalMatakuliah }}</strong></td>
        <td align="center"><strong>{{ $totalSks }}</strong></td>
    </tr>
</table>

<h3>Rekap Mahasiswa per Program Studi</h3>
<table border="1" cellpadding="8" cellspacing="0" style="margin-bottom:20px;">
    <tr style="background:#eee;"><th>Program Studi</th><th>Jumlah</th></tr>
    @forelse ($rekapProdi as $r)
        <tr><td>{{ $r->prodi }}</td><td>{{ $r->jumlah }}</td></tr>
    @empty
        <tr><td colspan="2">Belum ada data.</td></tr>
    @endforelse
</table>

<h3>Rekap Mahasiswa per Semester</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr style="background:#eee;"><th>Semester</th><th>Jumlah</th></tr>
    @forelse ($rekapSemester as $r)
        <tr><td>Semester {{ $r->semester }}</td><td>{{ $r->jumlah }}</td></tr>
    @empty
        <tr><td colspan="2">Belum ada data.</td></tr>
    @endforelse
</table>
@endsection