<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubah_daya extends Model
{
    //
    // nama tabel
    protected $table = 'ubah_daya';
    //field yang bisa di isi
    protected $fillable = ['peruntukan', 'daya'];


}
