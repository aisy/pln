<?php

use Illuminate\Database\Seeder;
use App\Berita;

class BeritaTableSeeder extends Seeder{

  /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run(){

    $faker = Faker\Factory::create('id_ID');
    // Eloquent::unguard();

    foreach (range(1,20) as $i) {
      Berita::create([
        'judul' 		  => "Berita ".$i,
        'isi'		      => $faker->Paragraph
      ]);
    }

  }
}
