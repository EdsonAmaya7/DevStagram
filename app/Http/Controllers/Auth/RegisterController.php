<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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

        // modificar el request
        /* como opcion alternativa reescribir el request para
        no aceptar usuarios duplicados */

        // $request->request->add(['username'=>Str::slug( $request->username)]);

        $this->validate( $request ,
        [
            'name' => 'required|min:3',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|max:60',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([

            'name' => $request->name,
            'username' => Str::slug( $request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // autenticar el usuario
        auth()->attempt($request->only('email','password'));

        // return redirect()->route('posts.index');
        return redirect()->route('posts.index', auth()->user()->username );
    }
}
