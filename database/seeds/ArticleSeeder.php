<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
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
      DB::table('articles')->insert([
        'judul'       => $faker->sentence($nbWords = 3, $variableNbWords = true)
      ]);
    }
  }
}
