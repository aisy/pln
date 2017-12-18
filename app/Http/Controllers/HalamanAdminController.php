<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita as Berita;
use App\Pengaduan as Pengaduan;
use App\Pengajuan_daya as Pengajuan;
use App\ubah_daya as UbahDaya;

use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HalamanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        
        $data1 = Pengaduan::where('kategori_id','1')->get();
        $data2 = Pengaduan::where('kategori_id','2')->get();
        $data3 = Pengaduan::where('kategori_id','3')->get();
        $data4 = Pengaduan::where('kategori_id','4')->get();
        $data5 = Pengaduan::where('kategori_id','5')->get();
        $data6 = Pengaduan::where('kategori_id','6')->get();

        return View::make('admin/halaman_utama', compact('data1','data2','data3','data4','data5','data6'));
        // return View::make('admin/login');
        // retrun view('admin/halaman');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
