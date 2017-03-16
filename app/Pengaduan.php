<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    //
    // nama tabel
    protected $table = 'pengaduan';
    //field yang bisa di isi
    protected $fillable = ['id_kategori', 'isi'];

}
