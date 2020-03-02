<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;
use File;

class UploadController extends Controller{

  /*
  * Load upload page
  */
  public function upload(){
    $gambar = Gambar::get();
    return view('upload', ['gambar' => $gambar]);
  }

  /*
  * Upload with storing file name to DB
  */
  public function proses_upload(Request $request){
    $this->validate($request, [
      'file'        => 'required|file|image|mimes:jpeg,jpg,png,PNG|max:2048',
      'keterangan'  => 'required'
    ]);

    //menyimpan data file yang diupload ke variable $file
    $file = $request->file('file');

    $nama_file = time()."_".$file->getClientOriginalName();

    //isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'file';
    $file->move($tujuan_upload, $nama_file);

    Gambar::create([
      'file'        => $nama_file,
      'keterangan'  => $request->keterangan
    ]);

    return redirect()->back();
  }

  /*
  * Remove the data from DB and the file from server
  */
  public function hapus($id){
    //hapus file
    $gambar = Gambar::where('id',$id)->first();
    File::delete('file/'.$gambar->file); //where is the file location and file name

    //hapus gambar
    Gambar::where('id', $id)->delete();

    return redirect()->back();
  }

  /*
  * Previous simple upload method
  */
  public function proses_upload_simple(Request $request){
    $this->validate($request, [
      'file'        =>  'required',
      'keterangan'  => 'required'
    ]);

    //menyimpan data file yg diupload ke variable $file
    $file = $request->file('file');

    //nama file
    echo 'File Name: '.$file->getClientOriginalName();
    echo '<br>';

    //ekstensi file
    echo 'File Extension: '.$file->getClientOriginalExtension();
    echo '<br>';

    //real path
    echo 'File Real Path'.$file->getRealPath();
    echo '<br>';

    //ukuran file
    echo 'File Size: '.$file->getSize();
    echo '<br>';

    //tipe mime
    echo 'File Mime Type: '.$file->getMimeType();

    //isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'file/';

    //upload file
    //move( 'upload file path', 'file name')
    $file->move($tujuan_upload, $file->getClientOriginalName());

  }
}
