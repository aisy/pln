<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_masalah extends Model
{
  // nama tabel
  protected $table = 'kategori_permasalahan';
  //field yang bisa di isi
  protected $fillable = ['nama_kategori'];


}
