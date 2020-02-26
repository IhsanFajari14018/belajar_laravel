<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AnggotaHadiahSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    //FAKER
    $faker = FAKER::create('id_ID');

    for ($i=1; $i <= 15 ; $i++) {
      // insert data to table pegawai using Faker
      DB::table('anggota_hadiah')->insert([
        'anggota_id'  => $faker->numberBetween(1,6),
        'hadiah_id'   => $faker->numberBetween(1,11)
      ]);
    }
  }
}
