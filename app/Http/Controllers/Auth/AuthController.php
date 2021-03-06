<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    //membuat variabel pada username dengan nama ='name'
    protected $username   = 'username';
    protected $redirectTo = '/auth/login';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_lengkap' => 'required|max:255',
            'username'     => 'required|max:255',
            // 'email' => 'required|email|max:255|unique:users',
            'password'     => 'required|confirmed|min:6',
            'level'        => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'nama_lengkap' => $data['nama_lengkap'],
            'username'     => $data['username'],
            // 'email'    => $data['email'],
            // 'password'     => bcrypt($data['password']),
            'password'     => $data['password'],
            'level'        => $data['level']
        ]);
    }
}
