<?php

use Illuminate\Database\Seeder;
use App\Kategori_layanan as Kategori;

class KategoriLayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        // Eloquent::unguard();

          Kategori::create([
            'nama_kategori' 		  => "1.1 Pasang Baru"
          ]);

          Kategori::create([
            'nama_kategori' 		  => "1.2 Penambahan Daya"
          ]);

          Kategori::create([
            'nama_kategori' 		  => "1.3 LPB (Listrik Pulsa Prabayar) "
          ]);

          Kategori::create([
            'nama_kategori' 		  => "1.4 Baca Meter"
          ]);

          Kategori::create([
            'nama_kategori' 		  => "1.5 P2TL (Penerbitan Pemakaian Tunggakan Listrik)"
          ]);

          Kategori::create([
            'nama_kategori' 		  => "1.6 Tunggakan"
          ]);

    }
}
