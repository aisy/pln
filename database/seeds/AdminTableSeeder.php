<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
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
          Admin::create(
            [
              'nama_lengkap' => "Admin1",
              'username'     => "admin1",
              // 'email'    => $data['email'],
              // 'password'     => bcrypt($data['password']),
              'password'     => "123456",
              'level'        => "admin"
            ]
          );

          Admin::create(
            [
              'nama_lengkap' => "Admin2",
              'username'     => "admin2",
              // 'email'    => $data['email'],
              // 'password'     => bcrypt($data['password']),
              'password'     => "123456",
              'level'        => "pelayanan pelanggan"
            ]
          );

          Admin::create(
            [
              'nama_lengkap' => "Admin3",
              'username'     => "admin3",
              // 'email'    => $data['email'],
              // 'password'     => bcrypt($data['password']),
              'password'     => "123456",
              'level'        => "transaksi energi"
            ]
          );
        // }
    }
}
