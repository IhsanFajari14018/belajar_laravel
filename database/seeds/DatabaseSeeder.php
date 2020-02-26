<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    $this->call([
      ArticleSeeder::class,
      GuruSeeder::class,
      PegawaiSeeder::class,
      PenggunaSeeder::class,
      TagSeeder::class,
      TeleponSeeder::class,
      HadiahSeeder::class
    ]);
  }
}
