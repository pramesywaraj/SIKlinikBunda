<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['superadmin', 'resepsionis', 'dokter', 'apoteker']);
        // return "Hahah";

        // if($request->user()->authorizeRoles(['resepsionis'])) {
        //     return view('resepsionis');
        // }

        // else if($request->user()->authorizeRoles(['dokter'])) {
        //     return view('dokter');
        // }

        // else if($request->user()->authorizeRoles(['apoteker'])) {
        //     return view('apoteker');
        // } else return view('home');

        $role = Auth::User()->roles[0];
        if($role->name=="apoteker"){
            return redirect('obat');
        }
        else if($role->name=="dokter"){
            return redirect('/templates/antrian');
        }
        else if($role->name=="resepsionis") {
             return redirect('/templates/search');
        }
        else if($role->name="admin") {
             return redirect('admin');
        }
        else return "haha";
    }


    // public function someAdminStuff(Request $request)
    // {
    //     $request->user()->authorizeRoles('superadmin');
    //     return view('home');
    // }
}
