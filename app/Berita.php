<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //

    // nama tabel
    protected $table = 'berita';
    //field yang bisa di isi
    protected $fillable = ['judul', 'isi'];

}
