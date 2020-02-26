<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder
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

    for ($i=1; $i <= 6 ; $i++) {
      // insert data to table pegawai using Faker
      DB::table('anggota')->insert([
        'nama'  => $faker->name
      ]);
    }
  }
}
