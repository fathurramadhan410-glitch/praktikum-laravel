<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    //  public function show($kode)
    // {
    //     return "Halaman detail mata kuliah dengan kode: {$kode}";
    // }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function show(Matakuliah $matakuliah)   
    {
        return view('matakuliah.show', compact('matakuliah'));
    }
}