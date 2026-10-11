<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['kode_mk', 'nama_mk', 'sks', 'semester', 'dosen_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }

    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }

    public function nilai()
{
    return $this->hasMany(NilaiMatakuliah::class);
}

public function index()
{
    $matakuliah = Matakuliah::all();
    return view('matakuliah.index', compact('matakuliah'));
}

}
