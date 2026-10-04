<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;


Route::get('/', function () {
    return view('welcome');
});

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


// Route::prefix('akademik')->group(function () {
//     Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
//         ->name('mahasiswa.index');

Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])
        ->name('mahasiswa.show');
   

Route::resource('matakuliah', MatakuliahController::class)
    ->only(['index', 'show', 'create', 'store']);

Route::get('/profil-mahasiswa', function () {
    return view('profil')
        ->with('nama', 'Fathur Ramadhan')
        ->with('nim', 'C050425007')
        ->with('prodi', 'Sistem Informasi Kota Cerdas');
});

Route::get('/statistik', function () {
    return view('akademik.statistik', [
        'totalMahasiswa'  => Mahasiswa::count(),
        'totalMatakuliah' => Matakuliah::count(),
    ]);
});

Route::get('/daftar-mahasiswa', function () {
    $mahasiswa = Mahasiswa::all();

    // Simulasi nilai null HANYA di memori (tanpa ->save())
    // karena kolom nama di database NOT NULL
    $dummy = $mahasiswa->firstWhere('nim', 'UJI00001');
    if ($dummy) {
        $dummy->nama = null;
    }

    $mhsXss = Mahasiswa::where('nim', 'UJI00001')->first();
    return view('daftar-mahasiswa', compact('mahasiswa', 'mhsXss'));
});


// ===== PROYEK AKHIR: 2 modul data dengan Route Resource =====
Route::resource('mahasiswa', MahasiswaController::class)->only(['index', 'show']);

Route::resource('matakuliah', MatakuliahController::class)
    ->only(['index', 'show', 'create', 'store']);

// ===== Fallback (bukti Praktikum 3) =====
Route::fallback(function () {
    return 'Halaman yang Anda cari tidak ditemukan.';
});

Route::get('/', function () {
    return view('home', [
        'totalMahasiswa'  => Mahasiswa::count(),
        'totalMatakuliah' => Matakuliah::count(),
    ]);
})->name('home');

// Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
    //     ->where('nim', '[0-9]+')
    //     ->name('mahasiswa.show');
    
    // Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    //     ->name('matakuliah.index');

    // Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])
    //     ->name('matakuliah.show');


// Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('/sapa', function () {
// return view('sapa', ['nama' => 'Fathur Ramadhan']);
// });

// Route::prefix('admin')->name('admin.')->group(function () {
// Route::get('/dashboard', function () {
// return 'Dashboard Admin';
// })->name('dashboard');
// });

// Route::get('/mahasiswa', function () {
//     $data = \App\Models\Mahasiswa::with('matakuliahs.user')->get();
//     return view('mahasiswa.index', compact('data'));
// });

// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
// Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);