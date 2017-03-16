<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanDayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //perintah membuat tabel dengan berbagai macam field
        Schema::create('pengajuan_daya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->smallInteger('rt');
            $table->smallInteger('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->BigInteger('no_ktp');
            $table->BigInteger('no_telp');
            $table->string('layanan');
            $table->string('peruntukan');
            $table->mediumInteger('daya');
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
