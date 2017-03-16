<?php

use Illuminate\Database\Seeder;
use App\Kategori_masalah as Kategori;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        $faker = Faker\Factory::create();
        // Eloquent::unguard();

        foreach (range(1,5) as $i) {
          Kategori::create([
            'nama_kategori'		      => $faker->Text
          ]);
        }
    }
}
