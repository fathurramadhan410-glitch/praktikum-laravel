<h1>Daftar Mahasiswa (Halaman {{ $data->currentPage() }} dari {{ $data->lastPage() }})</h1>

<table border="1" cellpadding="6" cellspacing="0">
    <tr><th>NIM</th><th>Nama</th><th>Prodi</th><th>Semester</th></tr>
    @forelse ($data as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->prodi }}</td>
            <td>{{ $m->semester }}</td>
        </tr>
    @empty
        <tr><td colspan="4">Belum ada data.</td></tr>
    @endforelse
</table>

<br>
{{ $data->links() }}