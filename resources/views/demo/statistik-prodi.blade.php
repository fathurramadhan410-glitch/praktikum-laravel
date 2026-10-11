<h1>Statistik Mahasiswa per Program Studi</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Program Studi</th>
        <th>Jumlah Mahasiswa</th>
    </tr>
    @forelse ($rekap as $r)
        <tr>
            <td>{{ $r->prodi }}</td>
            <td>{{ $r->jumlah }}</td>
        </tr>
    @empty
        <tr><td colspan="2">Belum ada data.</td></tr>
    @endforelse
</table>