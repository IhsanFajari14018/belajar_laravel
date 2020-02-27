<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Anggota;
use App\Hadiah;

class DikiController extends Controller{

    /*
    * From Eloquent Tutorial.
    */
    public function index(){
      $anggota = Anggota::get();
      return view('anggota', ['anggota' => $anggota]);
    }

    public function enkripsi(){
      $encrypted = Crypt::encryptString('Bikin undangan online di go-wedd.com');
      $decrypted = Crypt::decryptString($encrypted);

      echo "Encrypted Text: ".$encrypted;
      echo "<br>";
      echo "Decrypted Text: ".$decrypted;
    }

    public function data(){
      $parameter = [
        'nama'      => 'Ihsan Fajari',
        'pekerjaan' => 'Programmer'
      ];
      $enkripsi = Crypt::encrypt($parameter);
      echo "Encrypted: ".$enkripsi;
      echo "<br> <br>";
      echo "<a href='/data/".$enkripsi."'> Klik </a>";
    }

    public function data_proses($data){
      $data = Crypt::decrypt($data);

      echo "Nama: ".$data['nama'];
      echo "<br>";
      echo "Pekerjaan: ".$data['pekerjaan'];
    }

}
