<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GoweddEmail;
use Illuminate\Support\Facades\Mail;

class GoweddController extends Controller{

  public function index(){
    Mail::to("ihsan.fajari@gmail.com")->send(new GoweddEmail());
    return "Email sent.";
  }

  //
  public function getPage($nama){
    if ($nama == "gowedd" ) {
      return abort(403, 'Error: User are not authorized');
    }else if ($nama == "ihsanfajari") {
      return "Haii ".$nama;
    }else{
      return abort(404);
    }
  }

}
