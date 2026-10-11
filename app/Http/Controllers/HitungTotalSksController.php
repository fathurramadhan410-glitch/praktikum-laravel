<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungTotalSksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
         $totalSks = \App\Models\Matakuliah::sum('sks');
        return "Total SKS seluruh mata kuliah: {$totalSks}";
    }
}
