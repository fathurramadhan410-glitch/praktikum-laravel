<h1>Daftar Mata Kuliah</h1>
<a href="/matakuliah/create">+ Tambah Mata Kuliah</a>
<table border="1" cellpadding="8">
    <tr><th>Kode MK</th><th>Nama MK</th><th>SKS</th><th>Semester</th><th>Dosen Pengampu</th></tr>
    @foreach ($data as $mk)
    <tr>
        <td>{{ $mk->kode_mk }}</td>
        <td>{{ $mk->nama_mk }}</td>
        <td>{{ $mk->sks }}</td>
        <td>{{ $mk->semester }}</td>
        <td>{{ $mk->user->name ?? '-' }}</td>
    </tr>
    @endforeach
</table>