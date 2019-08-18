<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PerfilController extends Controller
{
    public function update(Request $request,$id)
    {
        $nuser = User::find($id);

        $nuser ->name    = $request->name;
        $nuser ->apellidos    = $request->apellidos;
        if(!$nuser->rol ==3) {

            $nuser ->documento    = $request->documento;
            $nuser ->celular    = $request->celular;
            $nuser ->rol    = $request->rol;
            $nuser ->email    = $request->email;
        }
        $nuser -> save();
        Session::flash('message', 'Perfil editado correctamente.');
        return Redirect::route('usuario.principal');
    }

    public function store(Request $request, $id){
        $usuario = User::find($id);
        if($usuario ->password  == Hash::make($request->anteriorpass))
        {
            $usuario ->password    = Hash::make($request->nuevopass);
        }
        $usuario -> save();
        Session::flash('message', 'Contraseña cambiada correctamente.');
        return Redirect::route('home');
    }
}
