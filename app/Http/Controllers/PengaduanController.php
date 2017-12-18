<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan as Pengaduan;
use App\Antrian as Antrian;
// use App\Kategori_masalah as Kategori;
use App\Kategori_layanan as Kategori;
use App\PengaduanDetail as Detail;

use View;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
      $kategori = Kategori::all();
      return View::make('pengaduan/menuPengaduan', compact('kategori'));

    }

    public function form($id){
        //
      $kategori = Kategori::where('id', $id)->first();
      return View::make('pengaduan/1_1', compact('id','kategori'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

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
        $data = $request->all();
        Pengaduan::create($data);
    
        // return redirect('pengaduan');

        // $data =  $request->all();
        // Layanan::create($data);

        $data_antrian = count(Antrian::where('tgl_antrian',date('Y-m-d'))->get());
        $no = $data_antrian+1;
        Antrian::create([
            "nomor_antrian" => $data_antrian+1,
            "tgl_antrian"   => date('Y-m-d')
        ]);


        \Session::flash('flash_message','Nomor Antrian Anda Adalah '.$no);

        return redirect('pengaduan/');
    }

    public function tunggakan(Request $request)
    {
        //
        $data = $request->all();
        print_r($data);
        // Pengaduan::create($data);

        $id= $request->input('id_pengaduan');

        $patch  = $request->all();
        $update = Pengaduan::find($id)->update($patch);
        Detail::create(array(
          'pengaduan_id'   => $request->input('id_pengaduan'),
          'bulan'          => $request->input('bulan'),
          'status_mutasi'  => $request->input('pilihan'),
          'pilihan_mutasi' => $request->input('mutasin'),
          'lain_lain'      => $request->input('lain_lain'),
          'status_bayar'   => $request->input('status'),  
          'pilihan'        => $request->input('pilihan3')
        ));
    
        // return redirect('pengaduan');

        // $data =  $request->all();
        // Layanan::create($data);

        $data_antrian = count(Antrian::where('tgl_antrian',date('Y-m-d'))->get());
        $no = $data_antrian+1;
        Antrian::create([
            "nomor_antrian" => $data_antrian+1,
            "tgl_antrian"   => date('Y-m-d')
        ]);


        \Session::flash('flash_message','Nomor Antrian Anda Adalah '.$no);

        return redirect('pengaduan');
    }

    public function summary(){
        $data = Pengaduan::all();
        return View::make("admin/summary", compact('data'));
    }


    public function tunggakan2(Request $request){
        //
        $data = $request->all();
        // Pengaduan::create($data);

        $id= $request->input('id_pengaduan');

        $patch  = $request->all();
        $update = Pengaduan::create($patch);

        Detail::create(array(
          'pengaduan_id'   => $request->input('id_pengaduan'),
          'bulan'          => $request->input('bulan'),
          'status_kwh'     => $request->input('status_kwh'),
          'status_app'     => $request->input('status_app'),
          'status_mutasi'  => $request->input('pilihan'),
          'pilihan_mutasi' => $request->input('mutasin'),
          'status_bayar'   => $request->input('status'),  
          'pilihan'        => $request->input('pilihan3')
        ));
    
        // return redirect('pengaduan');

        // $data =  $request->all();
        // Layanan::create($data);

        $data_antrian = count(Antrian::where('tgl_antrian',date('Y-m-d'))->get());
        $no = $data_antrian+1;
        Antrian::create([
            "nomor_antrian" => $data_antrian+1,
            "tgl_antrian"   => date('Y-m-d')
        ]);


        \Session::flash('flash_message','Nomor Antrian Anda Adalah '.$no);

        return redirect('pengaduan');
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
        Pengaduan::find($id);
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
        $data = Pengaduan::where('id', $id)->first();
        return View::make('pengaduan/pengaduanUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        //
        $id_kategori = $request->input('kategori_id');

        $patch  = $request->all();
        $update = Pengaduan::find($id)->update($patch);
        return redirect('administrator/pengaduan/'.$id_kategori);
        // return Redirect::back();
        
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
        Pengaduan::find($id)->delete();
        // return redirect('administrator/pengaduan/'.$id);
        return Redirect::back();
    }


    // =========================================================================
    // ADMIN
    // =========================================================================

    public function data_pengaduan($id){

      $data = Pengaduan::where('kategori_id', $id)->get();

      return View::make('admin/data_pengaduan', compact('data'));

    }

    public function konfirmasi(Request $request, $id){
        $data = Pengaduan::where('id', $id)->first();
        $detail = Detail::where('pengaduan_id', $id)->first();

        return View::make('pengaduan/menuKonfirmasi', compact('data','id', 'detail'));
    }

    public function kirim_pegawai(){
        # code...
    }

    public function prosesKonf(Request $request){

        $id = $request->input('id_pengaduan');
          // $data = Pengaduan::where('id', $id)->first();

        $patch  = $request->all();
        $update = Pengaduan::find($id)->update($patch);

        // if($request->input('status')=="di proses petugas"){
        //     return Redirect::
        // }
        return Redirect::back();
    }

}
