<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // nama tabel
    protected $table = 'admin';
    //field yang bisa di isi
    protected $fillable = ['nama_lengkap', 'username', 'password'];
}
