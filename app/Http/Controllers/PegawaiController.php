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

  /* method untuk menampilkan view form tambah pegawai */
  public function tambah(){
    return view('tambah');
  }

  /* model method - with query builder */
  public function store(Request $request){
    // insert data to pegawai table
    DB::table('pegawai')->insert([
      'nama'    => $request->nama,
      'jabatan' => $request->jabatan,
      'umur'    => $request->umur,
      'alamat'  => $request->alamat
    ]);

    return redirect('/pegawai');
  }

  public function edit($id){
    $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first(); //retrieve one
    // $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get(); //can retrieve more than one

    return view('edit', ['pegawai' => $pegawai]);
  }

  /* model method - update pegawai by id */
  public function update(Request $request){

    //query to update data pegawai:
    DB::table('pegawai')->where('pegawai_id', $request->id)->update([
      'nama'    => $request->nama,
      'jabatan' => $request->jabatan,
      'umur'    => $request->umur,
      'alamat'  => $request->alamat
    ]);

    //alihkan halaman ke pegawai
    return redirect('/pegawai');
  }
  
  /* model method - delete pegawai by id */
  public function delete($id){
    DB::table('pegawai')->where('pegawai_id', $id)->delete();
    return redirect('/pegawai');
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
