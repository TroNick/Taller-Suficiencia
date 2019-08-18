<?php

namespace App\Http\Controllers;

use App\preguntas;
use App\tpreguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TipoPreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('BPreguntas\principal');
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
        $corden = new tpreguntas();
        $corden ->descripcion    = $request->descripcion;
        $corden ->acronimo    = $request->acronimo;
        $corden ->estado    = $request->estado;
        $corden -> save();
        Session::flash('message', 'Tipo de pregunta registrado correctamente.');
        return Redirect::route('bpregunta.principal');
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
        $eorden = tpreguntas::find($id);
        $eorden ->descripcion    = $request->descripcion;
        $eorden ->acronimo    = $request->acronimo;
        $eorden ->estado    = $request->estado;
        $eorden -> save();
        Session::flash('message', 'Tipo de pregunta actualizada correctamente.');
        return Redirect::route('bpregunta.principal');
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
