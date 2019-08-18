<?php

namespace App\Http\Controllers;

use App\preguntas;
use App\registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RegistroTestController extends Controller
{
    public function store(Request $request)
    {

        $cregistro = new registro();
        $cregistro ->estudiante    = $request->estudiante;
        $cregistro ->carrera_elegida    = $request->carreraini;
        $cregistro ->carrera_seleccionada    = $request->carrerafin;
        $cregistro ->estado    = $request->estado;
        $cregistro -> save();
        Session::flash('message', 'Resultado de test guardado exitosamente.');
        return Redirect::route('home');
    }
}
