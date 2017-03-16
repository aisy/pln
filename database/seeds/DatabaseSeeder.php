<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Eloquent::unguard();

        // $this->call('UserTableSeeder');
        $this->call('BeritaTableSeeder');
        $this->call('PengaduanTableSeeder');
        $this->call('KategoriTableSeeder');

        // Model::reguard();
    }
}
