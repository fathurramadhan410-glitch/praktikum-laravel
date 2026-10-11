<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikMahasiswaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $total = \App\Models\Mahasiswa::count();
        $perProdi = \App\Models\Mahasiswa::selectRaw('prodi, count(*) as jumlah')
        ->groupBy('prodi')->get();
        
        return view('statistik', compact('total', 'perProdi'));
    }
}
