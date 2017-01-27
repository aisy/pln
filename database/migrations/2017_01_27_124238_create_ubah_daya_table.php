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
        Schema::create('ubah_daya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user');
            $table->string('peruntukan');
            $table->string('daya');
            $table->rememberToken();
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
