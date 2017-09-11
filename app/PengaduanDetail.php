<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengaduanDetail extends Model{
    
    //
    protected $table = 'pengaduan_detail';
    protected $fillable = ['id_pengaduan','bulan','status_kwh','status_app','status_mutasi','pilihan_mutasi','status_bayar','pilihan'];
}
