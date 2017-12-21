<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Charts;
use App\pasien;
use App\ObatMasuk;
use App\ObatKeluar;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = pasien::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    				->get();
        $chart = Charts::database($pasien, 'line', 'highcharts')
			      ->title("Pasien")
			      ->elementLabel("Total Pasien")
			      ->dimensions(700, 500)
			      ->responsive(false)
			      ->groupByMonth(date('Y'), true);

        // $obatm = ObatMasuk::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    	// 			->get();
        // $obatk = ObatKeluar::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
    	// 			->get();
        // $chartobat = Charts::multiDatabase('line', 'highcharts')
		// 	      ->dataset('Obat Masuk', ObatMasuk::all())
        //           ->dataset('Obat Keluar', ObatKeluar::all())
        //           ->title("Obat")
		// 	      ->elementLabel("Total Transaksi")
		// 	      ->dimensions(700, 500)
		// 	      ->responsive(false)
		// 	      ->groupByMonth(date('Y'), true);

        return view('templates.index3',['chart' => $chart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
