<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    //
    protected $table    = 'layanan';
    protected $fillable = ['kategori_id','nama_lengkap','alamat','rt','rw','kelurahan','kecamatan','no_ktp','no_telp','layanan','peruntukan','daya'];
}
