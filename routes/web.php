<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, ini rute baru saya!';
});

Route::get('/mahasiswa', function () {
    $data = \App\Models\Mahasiswa::with('matakuliahs.user')->get();
    return view('mahasiswa.index', compact('data'));
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

