<?php

namespace App\Http\Controllers;

use App\carreras;
use App\preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Preguntas\principal');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordenActual =1;
        $ultimoreg = preguntas::all() -> last();
        if ($ultimoreg==null)
        {
            $ordenActual =1;
        }
        else{
            $ordenActual = $ultimoreg->orden +1;
        }



        $cpregunta = new preguntas();
        $cpregunta ->pregunta    = $request->pregunta;
        $cpregunta ->calificacion    = $request->calificacion;
        $cpregunta ->estado    = $request->estado;
        $cpregunta ->bpregunta    = $request->bpregunta;
        $cpregunta ->orden    = $ordenActual;
        $cpregunta -> save();
        Session::flash('message', 'Pregunta registrado correctamente.');
        return Redirect::route('pregunta.principal');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $epregunta = preguntas::find($id);
        $epregunta ->pregunta    = $request->pregunta;
        $epregunta ->calificacion    = $request->calificacion;
        $epregunta ->estado    = $request->estado;
        $epregunta ->bpregunta    = $request->bpregunta;
        $epregunta -> save();
        Session::flash('message', 'Pregunta actualizada correctamente.');
        return Redirect::route('pregunta.principal');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
