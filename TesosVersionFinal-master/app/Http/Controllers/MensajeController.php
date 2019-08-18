<?php

namespace App\Http\Controllers;

use App\Mensaje;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class MensajeController extends Controller
{
    public function store(Request $request){
        $mensaje = new Mensaje();
        $mensaje ->titulo    = $request->titulo;
        $mensaje ->asunto    = $request->asunto;
        $mensaje ->receptor    = $request->receptor;
        $mensaje ->emisor    = $request->emisor;
        $mensaje ->mensaje    = $request->mensaje;
        $mensaje ->estado    = 0;

        $mensaje -> save();
        Session::flash('message', 'Mensaje enviado correctamente.');
        return Redirect::route('mensaje.principal');
    }
}
