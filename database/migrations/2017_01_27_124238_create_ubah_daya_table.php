<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUbahDayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //perintah membuat tabel dengan berbagai macam field
        Schema::create('pengaduan_detail', function (Blueprint $table) {
            $table->integer('id_pengaduan');
            $table->string('bulan');
            $table->string('status_mutasi');
            $table->string('pilihan_mutasi');
            $table->string('status_bayar');
            $table->string('pilihan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
