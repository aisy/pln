<?php

use Illuminate\Database\Seeder;
use App\Antrian;

class AntrianTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    // $faker = Faker\Factory::create('id_ID');
    // Eloquent::unguard();

    // foreach (range(1,20) as $i) {

    for ($i = 1; $i <= 100; $i++) {
      Antrian::create([
        'id' => $i,
        'nomor_antrian'     => $i,
        'tgl_antrian'     => date('Y-m-d'),
      ]);
    }
    // }
  }
}
