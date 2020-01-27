<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller{

    public function index(){
      // return "Halo ini adalah method index, dalam controller DosenController";
      $nama = "Ihsan Fajari";
      $pelajaran = ["Management Project", "Web Programming"];
      return view('biodata', ['nama' => $nama, 'daftar_matkul' => $pelajaran]);
    }

}
