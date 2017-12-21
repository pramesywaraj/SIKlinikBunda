<?php

namespace App\Http\Controllers;

use App\obats;
use App\pasien;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;

class ObatController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:apoteker');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {
        $obats=obats::get();
        //dd($obats);//buat liat isi
        $obats = obats::paginate(10);
        $pasienss = pasien::all()->where('cekobat', '0');
        $pasiens = $pasienss->where('pengobatan', !NULL)->sortByDesc('noAntrian');
        return view('apoteker', ['obats'=>$obats], ['pasiens'=>$pasiens]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('obat.tambahObat');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request)
    {
        //validate
        $this->validate($request, array(
            'namaObat' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'stock' => 'required|integer|max:255',
        ));

        //isi database
        $obat=new obats;
        $obat->namaObat = $request->namaObat;
        $obat->harga = $request->harga;
        $obat->stock = $request->stock;

        $obat->save();

        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function edit($id)
    {
        //$idObat = $id;
        $obats = obats::find($id);
        return view('obat.editObat', ['obats'=>$obats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function update(Request $request, $id)
    {
        $obat = obats::findOrFail($id);
        $obat->namaObat = $request->namaObat;
        $obat->harga = $request->harga;
        $obat->save();

        return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function destroy($id)
    {
        //$idObat=$id;
        $obat=obats::findOrfail($id);
        $obat->delete();
        return redirect()->route('obat.index');
    }

    protected function cek($id)
    {
        //$idObat=$id;
        $pasiens = pasien::findOrfail($id);
        $pasiens->cekobat='1';
        $pasiens->save();
        return redirect()->route('obat.index');
    }


}
