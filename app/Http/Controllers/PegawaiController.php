<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller{

  /* Previous tutorial - sending parameter from URI */
  // public function index($nama){
  //   return $nama;
  // }

  public function index(){
    // mengambil data dari table pegawai
    $pegawai = DB::table('pegawai')->get();

    // mengirim data pegawai ke view index
    return view('index', ['pegawai' => $pegawai]);
  }

  /* */
  public function formulir(){
    return view('formulir');
  }

  public function proses(Request $request){
    $nama = $request->input('nama');
    $alamat = $request->input('alamat');
    return "Nama: ".$nama." | Alamat: ".$alamat;
  }



}
