<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller{

  public function input(){
    return view('input');
  }

  public function proses(Request $request){
    $messages = [
      'required' => 'EUSIAN ATUH EUY!',
      'min'      => 'TONG KORET NGETIK!',
      'max'      => 'MENI HAWEK LOBA-LOBA TEUING!',
      'numeric'  => 'BISA BEDAKEUN TEU ANGKA JEUNG HURUF?!',
      'same'     => 'PASSWORDNA SARUAKEUN COY!'
    ];

    $this->validate($request,[
      'nama'        => 'required|min:5|max:10',
      'pekerjaan'   => 'required',
      'usia'        => 'required|numeric',
      'passworduser'    => 'min:6|required_with:passwordconfirmation|same:passwordconfirmation',
      'passwordconfirmation'  => 'min:6'
    ], $messages);

    return view('proses', ['data' => $request]);
  }
}
