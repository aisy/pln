<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Redirect;
use App\Admin as Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $data = Admin::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        //

        $input = $request->all();
        Admin::create($input);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //

    }

    public function log(Request $request){

      $username = $request->input('username');
      $password = $request->input('password');

      $log = Admin::where('username',$username)->where('password',$password)->first();

      Session::set("session", $log);

      return Redirect::to('administrator');
    }

    public function logout(){
      Session::flush();
      return Redirect::to('auth/login');
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
        $data = Admin::find($id);
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
        $data = Admin::findOrFail($id);
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
        $patch   = $request->all();

        $find     = Admin::find($id);
        $update  = $find->update($patch);
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
        $find   = Admin::find($id);
        $delete = $find->delete();

    }
}
