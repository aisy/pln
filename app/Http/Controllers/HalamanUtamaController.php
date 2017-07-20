<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antrian as Antrian;
use App\Berita as Berita;

use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HalamanUtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $carousel      = Berita::paginate(3);
        $more_news     = Berita::paginate(5);
        $antri         = Antrian::where('tgl_antrian',date('Y-m-d'))->orderBy('id', 'desc')->first();
        // return View::make('pemasangan', compact('more_news'));

        // echo $antri;

        return View::make('halaman_awal/index2', compact('more_news','carousel','antri'));
        // return View::make('index2');
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
