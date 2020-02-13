<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

//panggil model pegawai:
use App\Pegawai;

class PegawaiController extends Controller{

  public function index(){
    // $pegawai = Pegawai::all();
    // $pegawai = Pegawai::first();
    // $pegawai = Pegawai::where('id', '1')->get();
    // $pegawai = Pegawai::where('id', '<=','10')->get();
    // $pegawai = Pegawai::where('nama', 'like', '%y%')->get();
    $pegawai = Pegawai::paginate(4);

    return view('index_2', ['pegawai' => $pegawai]);
    // return $pegawai;
  }























  public function index_old(){
    // NORMAL
    // mengambil data dari table pegawai
    // $pegawai = DB::table('pegawai')->get();

    // WITH PAGINATION
    // mengambil data dari table pegawai
    // $pegawai = DB::table('pegawai')->paginate(10);
    $pegawai = Pegawai::all();

    // mengirim data pegawai ke view index
    // return view('index', ['pegawai' => $pegawai]);
    return view('index_2', ['pegawai' => $pegawai]);
    // return $pegawai;
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

  /* Process search and display the result */
  public function cari(Request $request){
    // this flash required to use the old() laravel function
    $request->flash();

    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari table pegawai sesuai pencarian data
    $pegawai = DB::table('pegawai')->where('nama','like','%'.$cari."%")->paginate();

    //mengirim data pegawai ke view index
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
