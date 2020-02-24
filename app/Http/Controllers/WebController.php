<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

/*
* It should be named as ArticleController, but the tutorial named this as WebController
*/
class WebController extends Controller
{
  public function index(){
    $artikel = Article::all();
    return view('article', ['artikel' => $artikel]);
  }
}
