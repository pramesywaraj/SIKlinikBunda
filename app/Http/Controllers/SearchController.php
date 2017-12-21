<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Http\Request;
use App\Http\Controllers\Controller;
use App\pasien;

use DB;

class SearchController extends Controller
{
      public function index(){
          $role = Auth::User()->roles[0];
          if($role->name=="dokter"){
              return view('templates.search');
          }
          else if($role->name=="resepsionis"){
              return view('templates.search2');
          }

      }

      public function search(Request $request)
      {
          if($request->ajax())
          {
            $output="";
            $poli="";
            $status="";
            $pasienss=DB::table('pasiens')->where('namaPasien','LIKE', '%'.$request->search.'%')->get();
            $pasiens=$pasienss->where('pengobatan', !NULL);
            if($pasiens)
            {
            foreach($pasiens as $pasien){
              if($pasien->status==0){
                $status="Umum";
              }else{
                $status="BPJS";
              }

              if($pasien->poli==0){
                $poli="Umum";
              }else if($pasien->poli==1){
                $poli="Gigi";
              }else{
                $poli="KIA";
              }

                $output.='<tr>'.
                        '<td>'.$pasien->namaPasien.'</td>'.
                        '<td>'.$status.'</td>'.
                        '<td>'.$pasien->created_at.'</td>'.
                        '<td>'.$pasien->keluhan.'</td>'.
                        '<td>'.$pasien->pengobatan.'</td>'.
                        '<td>'.'<a href="/templates/detail/'.$pasien->id.'/page" class="btn btn-sm btn-primary">Lihat Detail </a>'.'</td>'.
                        '<td>'.'<a href="/templates/search/'.$pasien->id.'"class="btn btn-danger">Hapus </a>'.'</td>'.
                        '</tr>';
            }
              return Response($output);
            }
          }
      }
}
