<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
  /*
  * Creating session
  */
  public function tampilkanSession(Request $request){
    if ($request->session()->get('nama')) {
      echo $request->session()->get('nama');
    }else{
      echo "Tidak ada data dalam session.";
    }
  }

  public function buatSession(Request $request){
    $request->session()->put('nama', 'Ihsan Fajari');
    echo "Data telah ditambahkan ke session.";
  }

  public function hapusSession(Request $request){
    $request->session()->forget('nama');
    echo "Data telah dihapus dari session.";
  }
}
