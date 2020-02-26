<?php

use Illuminate\Database\Seeder;

class HadiahSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //SEEDER
    //Customize Seeding
    $data = array("Kulkas", "Lemari", "Rumah", "Mobil", "Sepeda Motor", "Pulpen", "Tas",
    "Sepatu", "Voucher", "Mouse", "Laptop");

    date_default_timezone_set('Asia/Jakarta');

    for ($i=0; $i < 11 ; $i++) {
      $datetime = date('Y-m-d H:i:s');
      DB::table('hadiah')->insert([
        'nama_hadiah'  => $data[$i],
        'created_at'   => $datetime
      ]);
    }
    
  }

}
