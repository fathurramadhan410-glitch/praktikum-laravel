<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Mandiri Praktikum 5</title>
</head>
<body>
    <h1>Daftar Mahasiswa ({{ $mahasiswa->count() }} data)</h1>

    {{-- ===== SOAL 1: tampil dengan {{ }} + penanganan null ?? ===== --}}
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nim ?? '-' }}</td>
                    <td>{{ $mhs->nama ?? 'Tanpa Nama' }}</td>
                    <td>{{ $mhs->email ?? '-' }}</td>
                    <td>{{ $mhs->prodi ?? 'Belum ada prodi' }}</td>
                    <td>{{ $mhs->semester ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- ===== SOAL 2: perbandingan {{ }} vs {!! !!} ===== --}}
    @if ($mhsXss)
        <h2>Perbandingan Escaping (data uji: UJI00001)</h2>
        <p>
            Escaped <code>&#123;&#123; ... &#125;&#125;</code>:
            {{ $mhsXss->nama }}
        </p>
        <p>
            Tidak di-escape <code>&#123;!! ... !!&#125;</code>:
            {!! $mhsXss->nama !!}
        </p>
    @endif

    <hr>
    <p><em>Catatan: bagian perbandingan escaping hanya muncul saat data uji (nim UJI00001) tersedia.</em></p>
</body>
</html>