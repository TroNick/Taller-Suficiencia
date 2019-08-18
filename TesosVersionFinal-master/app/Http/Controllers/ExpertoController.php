<?php

namespace App\Http\Controllers;

use App\carreras;
use App\expertos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ExpertoController extends Controller
{
    public function store(Request $request)
    {
        $cexperto = new expertos();
        $cexperto ->nombre    = $request->nombre;
        $cexperto ->apellidos    = $request->apellidos;
        $cexperto ->profesion    = $request->profesion;
        $cexperto ->expecialidad    = $request->expecialidad;
        $cexperto ->trabajoact    = $request->trabajoact;
        $cexperto ->descripcion    = $request->descripcion;
        $cexperto ->imagen    = $request->imagen;
        $cexperto -> save();
        Session::flash('message', 'Experto registrado correctamente.');
        return Redirect::route('experto.principal');
    }
    public function update(Request $request, $id)
    {
        $eexperto = expertos::find($id);
        $eexperto ->nombre    = $request->nombre;
        $eexperto ->apellidos    = $request->apellidos;
        $eexperto ->profesion    = $request->profesion;
        $eexperto ->expecialidad    = $request->expecialidad;
        $eexperto ->trabajoact    = $request->trabajoact;
        $eexperto ->descripcion    = $request->descripcion;
        if (!$request->imagen ==null)
        {
            $eexperto ->imagen    = $request->imagen;
        }

        $eexperto -> save();
        Session::flash('message', 'Experto actualizada correctamente.');
        return Redirect::route('experto.principal');
    }
}
