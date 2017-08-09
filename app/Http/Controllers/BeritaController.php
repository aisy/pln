<?php

namespace App\Http\Controllers;

use App\Berita as Berita;
use Illuminate\Http\Request;

use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(){
    //
    $berita = Berita::paginate(10,['judul','isi','gambar']);
    return View::make('berita/berita', compact('berita'));
  }

  public function admin(){
    $berita = Berita::all();
    return View::make('admin/berita', compact('berita'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(Request $request){
    //
    $file          = $request->file('file_gambar'); //mangambil data file dari input type file

    if($file==NULL){
      $name_file = " ";
    }else{
      $name_file      = $file->getClientOriginalName(); //dapat nama file dari $file
      $destination    = public_path().'/news'; //lokasi folder yang akan di upload

      $file->move($destination, $name_file);
    }

    $data = $request->all();
    Berita::create($data);

    return redirect('administrator/berita');
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
    $data = Berita::where('id',$id)->first();
    return View::make('berita/update_berita', compact('data','id'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id){
    //
    $data = Berita::find($id);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id){

    $patch    = $request->all();
    $update   = Berita::find($id)->update($patch);

    print_r($patch);

    echo $request->input('gambar');

    $file          = $request->file('file_gambar'); //mangambil data file dari input type file

    if($file==NULL){
      $name_file    = " ";

    }else{
      $name_file    = $file->getClientOriginalName(); //dapat nama file dari $file
      $destination  = public_path().'/news'; //lokasi folder yang akan di upload

      $file->move($destination, $name_file);

    }

      return redirect('administrator/berita');

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
    Berita::find($id)->delete();
    return redirect('administrator/berita');
  }

  public function detailBerita($id){
    $data = Berita::where('id', $id)->first();

    return View::make('berita/detailBerita', compact('data'));
  }
}
