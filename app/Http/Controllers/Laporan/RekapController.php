<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RekapController extends Controller
{
    public function index()
    {
        // Seluruh laporan di halaman ini dibangun dengan QUERY BUILDER
        $totalMahasiswa  = DB::table('mahasiswas')->count();
        $totalMatakuliah = DB::table('matakuliahs')->count();
        $totalSks        = DB::table('matakuliahs')->sum('sks');

        $rekapProdi = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->orderBy('prodi')
            ->get();

        $rekapSemester = DB::table('mahasiswas')
            ->select('semester', DB::raw('count(*) as jumlah'))
            ->groupBy('semester')
            ->orderBy('semester')
            ->get();

        return view('laporan.rekap', compact(
            'totalMahasiswa', 'totalMatakuliah', 'totalSks', 'rekapProdi', 'rekapSemester'
        ));
    }
}