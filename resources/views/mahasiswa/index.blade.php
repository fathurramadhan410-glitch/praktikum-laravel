<h1>Data Mahasiswa dan Mata Kuliah yang Diambil</h1>
<table border="1" cellpadding="8">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Semester</th>
        <th>Kode MK</th>
        <th>Mata Kuliah</th>
        <th>Dosen Pengampu</th>
    </tr>
    @foreach ($data as $mhs)
        @foreach ($mhs->matakuliahs as $mk)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>{{ $mhs->semester }}</td>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->user->name ?? '-' }}</td>
        </tr>
        @endforeach
    @endforeach
</table>