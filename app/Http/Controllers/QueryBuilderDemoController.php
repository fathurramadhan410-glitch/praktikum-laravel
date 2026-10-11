<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
{
    $data = DB::table('mahasiswas')->get();
    return view('demo.query-builder', compact('data'));
}

public function tampilkanFilter()
{
    $data = DB::table('mahasiswas')
                ->where('semester', '>=', 3)
                ->orderBy('nama')
                ->get();
    return view('demo.query-builder', compact('data'));
}

public function statistikProdi()
{
    $rekap = DB::table('mahasiswas')
                ->select('prodi', DB::raw('count(*) as jumlah'))
                ->groupBy('prodi')
                ->get();

    return view('demo.statistik-prodi', compact('rekap'));
}

public function formTambah()
{
    return view('demo.form-tambah');
}

public function simpan(Request $request)
{
    DB::table('mahasiswas')->insert([
        'nim'      => $request->input('nim'),
        'nama'     => $request->input('nama'),
        'prodi'    => $request->input('prodi'),
        'semester' => $request->input('semester'),
    ]);

    return redirect('/demo/mahasiswa')->with('pesan', 'Data berhasil ditambahkan');
}

public function perbarui($id)
{
    DB::table('mahasiswas')->where('id', $id)->update(['semester' => '3']);
    return redirect('/demo/mahasiswa')->with('pesan', 'Data berhasil diperbarui');
}

public function hapus($id)
{
    DB::table('mahasiswas')->where('id', $id)->delete();
    return redirect('/demo/mahasiswa')->with('pesan', 'Data berhasil dihapus');
}

public function filterTiSemester()
{
    $data = DB::table('mahasiswas')
                ->where('prodi', 'Teknik Informatika')   
                ->whereBetween('semester', [3, 6])       
                ->orderBy('nama', 'asc')                 
                ->get();

    return view('demo.query-builder', compact('data'));
}

public function rekapProdi()
{
    $rekap = DB::table('mahasiswas')
                ->select('prodi', DB::raw('count(*) as jumlah'))
                ->groupBy('prodi')
                ->get();

    return view('demo.statistik-prodi', compact('rekap'));
}

public function daftarPaginasi()
{
    $data = DB::table('mahasiswas')->orderBy('nama')->paginate(10);

    return view('demo.paginasi', compact('data'));
}

}
