<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;


class pasiensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = pasien::all()->where('pengobatan', NULL);
        return view('templates.antrian', ['pasiens' => $pasiens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.forms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
      'namaPasien' => 'required',
      'noAntrian' => 'required',
      'alamatPasien' => 'required',
      'jeniskelamin' => 'required',
      'status' => 'required',
      'tempatlahir' => 'required',
      'tanggallahir' => 'required',
      'phone' => 'required',
      'keluhan' => 'required',
      'poli' => 'required',
      ]);
      $pasien = new pasien;
      $pasien->namaPasien = $request->namaPasien;
      $pasien->noAntrian = $request->noAntrian;
      $pasien->status = $request->status;
      $pasien->jeniskelamin = $request->jeniskelamin;
      $pasien->alamatPasien = $request->alamatPasien;
      $pasien->tempatlahir = $request->tempatlahir;
      $pasien->tanggallahir = $request->tanggallahir;
      $pasien->phone = $request->phone;
      $pasien->keluhan = $request->keluhan;
      $pasien->poli = $request->poli;
      $pasien->save();
      return redirect('templates/forms/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pasiens = pasien::find($id);
      return view('templates.record', ['pasiens' => $pasiens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idPasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasiens = pasien::find($id);
        return view('templates.periksa', ['pasiens' => $pasiens]);
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
        $pasiens = pasien::find($id);
        $pasiens->kesadaran = $request->kesadaran;
        $pasiens->tinggibadan = $request->tinggibadan;
        $pasiens->beratbadan = $request->beratbadan;
        $pasiens->sistole = $request->sistole;
        $pasiens->diastole = $request->diastole;
        $pasiens->resprate = $request->resprate;
        $pasiens->heartrate = $request->heartrate;
        $pasiens->anamnesa = $request->anamnesa;
        $pasiens->diagnosa = $request->diagnosa;
        $pasiens->pengobatan = $request->pengobatan;

        $pasiens->save();
        return redirect('templates/antrian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasiens = pasien::find($id);
        $pasiens->delete();
        return redirect('templates/search');
    }
}
