<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request);

        $this->validate( $request ,
        [
            'name' => 'required|min:3',
            'username' => 'required|unique:users|min:3|max:25',
            'email' => 'required|unique:users|max:60',
            'password' => 'required|confirmed|min:6'
        ]);
    }
}
