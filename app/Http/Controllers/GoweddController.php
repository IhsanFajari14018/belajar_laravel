<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoweddController extends Controller
{
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
