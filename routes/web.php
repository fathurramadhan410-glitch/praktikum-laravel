<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/sapa', function () {
return view('sapa', ['nama' => 'Fathur Ramadhan']);
});

// Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
//     ->name('mahasiswa.index');

// Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
//     ->where('nim', '[0-9]+')
//     ->name('mahasiswa.show');

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