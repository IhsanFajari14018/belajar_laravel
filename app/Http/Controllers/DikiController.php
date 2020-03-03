<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

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

  public function hash(){
    $hashed_password = Hash::make('Ihsan Fajari');
    echo $hashed_password;
  }

  public function verify(){
    $password_from_db = '$2y$10$ELWdxNdNmv80bbJTg8adF.jaZkuT8W.hvuU/HgzSRNhnCJGL.cgEO';
    $password_input = 'sandev137';

    $result = Hash::check($password_input, $password_from_db);
    if ($result) {
      echo "Correct Password!";
    }else{
      echo "Wrong Password!";
    }

  }

}
