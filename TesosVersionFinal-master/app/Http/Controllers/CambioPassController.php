<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CambioPassController extends Controller
{
    public function update(Request $request, $id){
        $usuario = User::find($id);

        $usuario->password= Hash::make($request->nuevopass);

        $usuario->save();
        Session::flash('message', 'Contraseña cambiada correctamente.');
        return Redirect::route('home');
    }
}
