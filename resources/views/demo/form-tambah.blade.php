<h1>Tambah Data Mahasiswa</h1>
<form action="/demo/simpan" method="POST">
    @csrf
    <input type="text" name="nim" placeholder="NIM"><br><br>
    <input type="text" name="nama" placeholder="Nama"><br><br>
    <input type="text" name="prodi" placeholder="Prodi"><br><br>
    <input type="number" name="semester" placeholder="Semester"><br><br>
    <button type="submit">Simpan</button>
</form>