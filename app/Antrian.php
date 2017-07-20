<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    //
    // nama tabel
    protected $table = 'antrian';
    //field yang bisa di isi
    protected $fillable = ['nomor_antrian', 'tgl_antrian'];
}
