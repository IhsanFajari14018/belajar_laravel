<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run(){
    //FAKER
    $faker = FAKER::create('id_ID');

    for ($i=1; $i <= 30 ; $i++) {
      // insert data to table pegawai using Faker
      DB::table('tags')->insert([
        'tag'        => $faker->word,
        'article_id' => $faker->numberBetween(1,10)
      ]);
    }
  }
}
