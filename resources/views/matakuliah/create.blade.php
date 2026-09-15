<h1>Tambah Mata Kuliah</h1>
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
</form>