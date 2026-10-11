<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create($request->only(['nim', 'nama', 'email', 'prodi', 'semester']));
        return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Mahasiswa $mahasiswa)
    // {
    //     return view('mahasiswa.show', compact('mahasiswa'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
         return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
         $mahasiswa->update($request->only(['nim', 'nama', 'email', 'prodi', 'semester']));
        return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('pesan', 'Data berhasil dihapus');
    }

    public function cariMahasiswa(Request $request)
    {
        $kataKunci = $request->query('nama');
        return "Mencari mahasiswa dengan kata kunci: {$kataKunci}";
    }

    public function storeUji(Request $request)
{
    $nama = $request->input('nama');
    $nim  = $request->input('nim');
    return "Data yang diterima -> NIM: {$nim}, Nama: {$nama}";
}

public function show(Mahasiswa $mahasiswa)
{
     
    $mahasiswa = Mahasiswa::with('nilai.matakuliah')->findOrFail($mahasiswa->id);
    return view('mahasiswa.show', compact('mahasiswa'));
}
    
}
