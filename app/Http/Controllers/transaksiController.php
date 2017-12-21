<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;

class transaksiController extends Controller
{
    public function index()
    {
        $pasienss = pasien::all()->where('cekobat', 0);
        $pasiens = $pasienss->where('pengobatan', !NULL)->sortByDesc('noAntrian');
        return view('templates.transaksiobat', ['pasiens' => $pasiens]);
    }
}
