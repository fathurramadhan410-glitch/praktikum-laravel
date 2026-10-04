<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    // public function index()
    // {
    //     return 'index: Halaman daftar seleuruh mahasiswa';
    // }
    // public function show($nim)
    // {
    //     return "show: Halaman detail mahasiswa dengan NIM: $nim";
    // }
    public function create()
    { 
        return 'create: form tambah mahasiswa';
    }
    public function store(Request $request)
    { 
        return 'store: simpan data baru'; 
    }
    public function edit($id)
    { 
        return "edit: form edit mahasiswa id {$id}";
    }
    public function update(Request $request, $id)
    {
    return "update: perbarui data id {$id}";
    }
    public function destroy($id) 
    { 
        return "destroy: hapus data id {$id}";
    }
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

// public function index()
// // {
// //     // $mahasiswa = Mahasiswa::all();                       // versi normal
// //     $mahasiswa = Mahasiswa::where('id', 0)->get();          // SIMULASI kosong (Langkah 2 modul)
// //     return view('mahasiswa.index', compact('mahasiswa'));
// // }

}


