<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
{
    $nama  = 'Fathur Ramadhan';        // sesuaikan
    $nim   = 'C050425007';         // sesuaikan
    $prodi = 'Sistem Informasi Kota Cerdas'; // sesuaikan
    return "Halo, saya {$nama} (NIM: {$nim}), mahasiswa Program Studi {$prodi}.";
}

}
