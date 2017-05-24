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
            'nama_kategori' 		  => "Tambah daya "
          ]);

          Kategori::create([
            'nama_kategori' 		  => "Ubah daya "
          ]);

          Kategori::create([
            'nama_kategori' 		  => "Hapus daya "
          ]);

    }
}
