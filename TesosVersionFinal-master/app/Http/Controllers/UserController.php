<?php

namespace App\Http\Controllers;

use App\carreras;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function store(Request $request)
{
    $nuser = new User();
    $nuser ->name    = $request->name;
    $nuser ->apellidos    = $request->apellidos;
    $nuser ->documento    = $request->documento;
    $nuser ->celular    = $request->celular;
    $nuser ->rol    = $request->rol;
    $nuser ->email    = $request->email;
    $nuser ->password  = Hash::make($request->email);
    $nuser -> save();
    Session::flash('message', 'Usuario registrado correctamente.');
    return Redirect::route('usuario.principal');

}

    public function editar(Request $request)
    {
        $nuser = new User();
        $nuser ->name    = $request->name;
        $nuser ->apellidos    = $request->apellidos;
        $nuser ->documento    = $request->documento;
        $nuser ->celular    = $request->celular;
        $nuser ->rol    = $request->rol;
        $nuser ->email    = $request->email;
        $nuser ->password  = Hash::make($request->email);
        $nuser -> save();
        Session::flash('message', 'Usuario editado correctamente.');
        return Redirect::route('usuario.principal');

    }   public function update(Request $request, $id)
{
    $euser = User::find($id);
    $euser ->name    = $request->name;
    $euser ->apellidos    = $request->apellidos;
    $euser ->rol    = $request->rol;
    $euser -> save();
    Session::flash('message', 'Usuario actualizado correctamente.');
    return Redirect::route('usuario.principal');
}


    public function updateUsuario(Request $request, $id)
    {
        $euser = User::find($id);
        if($euser->rol ==3) {
            $euser ->name    = $request->name;
            $euser ->apellidos    = $request->apellidos;
        }else{
            $euser ->documento    = $request->documento;
            $euser ->celular    = $request->celular;
            $euser ->rol    = $request->rol;
            $euser ->email    = $request->email;
        }
        $euser -> save();
        Session::flash('message', 'Perfil actualizado correctamente.');
        return Redirect::route('usuario.principal');
    }
}
