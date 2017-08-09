<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan as Pengaduan;
use App\Antrian as Antrian;
// use App\Kategori_masalah as Kategori;
use App\Kategori_layanan as Kategori;

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
      return View::make('pengaduan/1_1', compact('kategori'));

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
        //
        //
        //
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
        $data = Pengaduan::find($id);
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
        $patch  = $request->all();
        $update = Pengaduan::find($id)->update($patch);
        // return redirect('administrator/pengaduan/'.$id);
        
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
}
