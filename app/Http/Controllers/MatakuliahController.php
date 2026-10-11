<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = Matakuliah::all();
    return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Matakuliah::create($request->only(['kode_mk', 'nama_mk', 'sks', 'semester', 'dosen_id']));
        return redirect()->route('matakuliah.index')->with('pesan', 'Mata kuliah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matakuliah $matakuliah)
    {
         $matakuliah = Matakuliah::with('nilai.mahasiswa')->findOrFail($matakuliah->id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliah $matakuliah)
    {
         return view('matakuliah.edit', compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
         $matakuliah->update($request->only(['kode_mk', 'nama_mk', 'sks', 'semester', 'dosen_id']));
        return redirect()->route('matakuliah.index')->with('pesan', 'Mata kuliah berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliah $matakuliah)
    {
         $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('pesan', 'Mata kuliah berhasil dihapus');
    }
}
