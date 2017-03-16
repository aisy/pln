<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    //
    // nama tabel
    protected $table = 'komentar';
    //field yang bisa di isi
    protected $fillable = ['id_berita', 'komentar'];


}
