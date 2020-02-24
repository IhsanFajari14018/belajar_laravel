<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //FAKER
    $faker = FAKER::create('id_ID');

    for ($i=1; $i <= 10 ; $i++) {
      // insert data to table pegawai using Faker
      DB::table('telepon')->insert([
        'nomor_telepon'   => "08".$faker->numberBetween($min = 1300200300, $max = 9999999999),
        'pengguna_id'     => $i
      ]);
    }
  }
}
