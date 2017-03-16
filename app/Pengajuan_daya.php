<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan_daya extends Model
{
    //
    // nama tabel
    protected $table = 'pengajuan_daya';
    //field yang bisa di isi
    protected $fillable = ['nama_lengkap', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan', 'no_ktp', 'no_telp', 'layanan', 'peruntukan', 'daya'];


}
