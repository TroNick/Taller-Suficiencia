<?php

namespace App\Http\Controllers;

use App\carreras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Carreras\principal');
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
        $ccarrera = new carreras();
        $ccarrera ->facultad    = $request->facultad;
        $ccarrera ->grado    = $request->grado;
        $ccarrera ->titulo    = $request->titulo;
        $ccarrera ->nombre    = $request->nombre;
        $ccarrera ->descripcion    = $request->descripcion;
        $ccarrera ->imagen    = $request->imagen;
        $ccarrera -> save();
        Session::flash('message', 'Carrera Profesional registrado correctamente.');
        return Redirect::route('carrera.principal');
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
        $ecarrera = carreras::find($id);
        $ecarrera ->facultad    = $request->facultad;
        $ecarrera ->grado    = $request->grado;
        $ecarrera ->titulo    = $request->titulo;
        $ecarrera ->nombre    = $request->nombre;
        $ecarrera ->descripcion    = $request->descripcion;

        if (!$request->imagen ==null)
        {
            $ecarrera ->imagen    = $request->imagen;
        }

        $ecarrera -> save();
        Session::flash('message', 'Carrera Profesional actualizada correctamente.');
        return Redirect::route('carrera.principal');
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
