<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    //
    // nama tabel
    protected $table = 'pengaduan';
    //field yang bisa di isi
    // protected $fillable = ['id_kategori', 'isi'];
    // protected $fillable = ['kategori_id','nama_lengkap','alamat','rt','rw','kelurahan','kecamatan','no_ktp','no_telp','layanan','peruntukan','daya'];
    protected $fillable = ['kategori_id','nama_lengkap','user_id','alamat','keluhan','verifikasi','status','tindak_lanjut'];
}
