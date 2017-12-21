<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
use App\obats;
use App\User;
use App\Role;

class ReportController extends Controller
{
  public function index()
  {
      $obats = obats::all();
      return view('templates.reportObat', ['obats' => $obats]);
  }


}
