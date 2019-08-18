<?php

namespace App\Http\Controllers;

use App\carreras;
use App\preguntas;
use App\tpreguntas;
use Illuminate\Http\Request;

class OtrasPaginasController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function mantenimiento(){
        return view ('mantenimiento');
    }

    public function evaluacion(){
        $carrera = carreras::pluck('descripcion','id');
        return view ('evaluacion', compact('carrera'));
    }

}
