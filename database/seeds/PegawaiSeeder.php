<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //SEEDER
    //insert data ke table pegawai
    // DB::table('pegawai')->insert([
    //   'nama'      => 'Joni',
    //   'jabatan'   => 'Web Designer',
    //   'umur'      => 25,
    //   'alamat'    => 'Jl. Panglateh'
    // ]);

    //FAKER
    $faker = FAKER::create('id_ID');

    for ($i=0; $i < 10 ; $i++) {
      // insert data to table pegawai using Faker
      DB::table('pegawai')->insert([
          'nama'      => $faker->name,
          // 'jabatan'   => $faker->jobTitle,
          // 'umur'      => $faker->numberBetween(20,35),
          'alamat'    => $faker->address
      ]);
    }
  }

}
