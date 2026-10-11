<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HitungTotalSksController;
use App\Http\Controllers\Laporan\RekapController;
use App\Http\Controllers\QueryBuilderDemoController;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;

/*
|--------------------------------------------------------------------------
| MODUL SEBELUMNYA (Routing & Blade Templating)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home', [
        'totalMahasiswa'  => Mahasiswa::count(),
        'totalMatakuliah' => Matakuliah::count(),
    ]);
})->name('home');

Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

Route::get('/sapa', function () {
    return view('sapa', [
        'nama' => 'Fathur Ramadhan',
        'kontenHtml' => '<strong>Teks Tebal</strong>',
    ]);
});

Route::get('/profil', function () {
    return 'Profil Saya: [Fathur Ramadhan] | NIM: [C050425007]';
});

Route::get('/kontak', function () {
    return 'Email: [fathurramadhan410@gmail.com] | Instagram: @[ramafthurr]';
});

Route::get('/tentang', function () {
    return 'Halaman ini dibuat untuk memenuhi tugas Praktikum 4 - Pemrograman Web.';
});

Route::get('/profil-mahasiswa', function () {
    return view('profil')
        ->with('nama', 'Fathur Ramadhan')
        ->with('nim', 'C050425007')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});

Route::get('/daftar-mahasiswa', function () {
    $mahasiswa = Mahasiswa::all();
    $mhsXss = Mahasiswa::where('nim', 'UJI00001')->first();
    return view('daftar-mahasiswa', compact('mahasiswa', 'mhsXss'));
});

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 1 & 2: KONSEP & PENULISAN CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/sapa-closure', function () {
    $nama  = 'Fathur Ramadhan';
    $pesan = "Halo, {$nama}! Ini ditulis langsung di route.";
    return $pesan;
});

Route::get('/sapa-controller', [SapaController::class, 'index']);

Route::get('/perkenalan', [LatihanController::class, 'index']);

Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});

Route::post('/mahasiswa-uji', [MahasiswaController::class, 'storeUji']);

Route::get('/mahasiswa-api', [MahasiswaController::class, 'apiIndex']);

Route::get('/mahasiswa-form-cari', function () {
    return view('mahasiswa.form-cari');
});

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 3: PEMBUATAN CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/statistik', StatistikMahasiswaController::class);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/total-sks', HitungTotalSksController::class);

Route::get('/laporan/rekap', [RekapController::class, 'index']);

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 5: QUERY BUILDER
|--------------------------------------------------------------------------
*/

Route::get('/demo/mahasiswa',        [QueryBuilderDemoController::class, 'tampilkanSemua']);
Route::get('/demo/filter',           [QueryBuilderDemoController::class, 'tampilkanFilter']);
Route::get('/demo/statistik-prodi',  [QueryBuilderDemoController::class, 'statistikProdi']);
Route::get('/demo/tambah',           [QueryBuilderDemoController::class, 'formTambah']);
Route::post('/demo/simpan',          [QueryBuilderDemoController::class, 'simpan']);
Route::get('/demo/ubah/{id}',        [QueryBuilderDemoController::class, 'perbarui']);
Route::get('/demo/hapus/{id}',       [QueryBuilderDemoController::class, 'hapus']);
Route::get('/demo/filter-ti',        [QueryBuilderDemoController::class, 'filterTiSemester']);
Route::get('/demo/rekap-prodi',      [QueryBuilderDemoController::class, 'rekapProdi']);
Route::get('/demo/paginasi',         [QueryBuilderDemoController::class, 'daftarPaginasi']);

/*
|--------------------------------------------------------------------------
| PRAKTIKUM 7: RESOURCE CRUD ELOQUENT (satu definisi, lengkap)
|--------------------------------------------------------------------------
*/

Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('matakuliah', MatakuliahController::class);

/*
|--------------------------------------------------------------------------
| FALLBACK (bukti Praktikum 3)
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return 'Halaman yang Anda cari tidak ditemukan.';
});