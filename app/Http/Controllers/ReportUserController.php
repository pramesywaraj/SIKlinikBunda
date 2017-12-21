<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
use App\obats;
use App\User;
use App\Role;

class ReportUserController extends Controller
{
  public function index()
  {
      $users = User::all();
      $roles = Role::all();
      return view('templates.reportUser', ['roles' => $roles], ['users' => $users]);
  }



}
