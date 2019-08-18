<?php

namespace App\Http\Controllers;

use App\carreras;
use App\expertos;
use App\Mensaje;
use App\preguntas;
use App\registro;
use App\rol;
use App\tpreguntas;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
class AdminDashController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only' => [
            'deleteOrdenPregunta',
            'homeCarrera',
            'crearCarrera',
            'updateCarrera',
            'deleteCarrera',
            'homePregunta',
            'crearPregunta',
            'updatePregunta',
            'deletePregunta',
            'homeOrdenPregunta',
            'crearOrdenPregunta',
            'updateOrdenPregunta',
            'deleteOrdenPregunta',
            'homeUser',
            'crearUser',
            'updateUser',
            'deleteUser',
            'homeExperto',
            'crearExperto',
            'updateExperto',
            'deleteExperto',
            ]]);
        $this->middleware('user', ['only'=> [
            'test',
            'MyTests',
            'homeRegistro'
            ]]);
    }
    public function Perfil($id){
        $perfil =User::find($id);
        $rol = rol::pluck('descripcion','id');
        return view('Auth\perfil', compact('perfil', 'rol'));
    }
    public function CambioPass($id){
        $usuario = User::find($id);
        return view('Auth\cambiopass', compact('usuario'));
    }
    public function homeCarrera(Request $request)
    {
        $carrera = carreras::all();
        return view('Carrera\principal', compact('carrera'));
    }
    public function crearCarrera()
       {
            return view('Carrera\create');
      }
    public function updateCarrera($id)
      {
          $e_carrera =carreras::find($id);
          return view('Carrera.update',['carrera'=>$e_carrera]);
      }
    public  function deleteCarrera($id)
       {
         $delete = carreras::find($id);
           $delete->delete();
           Session::flash('message', 'Carrera eliminada eliminado exitosamente.!');
            return Redirect::route('carrera.principal');
     }
    public function homeMensaje()
    {
        $mensajes = Mensaje::all();
        return view('Mensajes\principal', compact('mensajes'));
    }
    public function crearMensaje()
    {
        return view('Mensajes\nuevomensaje');
    }
    public function updateMensaje($id)
    {
        $umensaje =Mensaje::find($id);
        $umensaje ->estado    = 1;
        $umensaje -> save();
        return view('Mensajes\revisa',['mensaje'=>$umensaje]);
    }
    public  function deleteMensaje($id)
    {
        $delete = carreras::find($id);
        $delete->delete();
        Session::flash('message', 'Carrera eliminada eliminado exitosamente.!');
        return Redirect::route('carrera.principal');
    }
    public  function  perfilCarrera()
    {
        $carreras = carreras::all();
        return view('Carrera\perfil', compact('carreras'));
    }
    public function homePregunta(Request $request)
    {
        $tpregunta = tpreguntas::all();
        $pregunta = preguntas::all();
        return view('Pregunta\principal', compact('pregunta', 'tpregunta'));
    }
    public function crearPregunta()
    {
        $orden = tpreguntas::pluck('acronimo','id');
        return view('Pregunta\create', compact('orden'));
    }
    public function updatePregunta($id)
    {
        $orden = tpreguntas::pluck('descripcion','id');
        $e_pregunta =preguntas::find($id);
        return view('Pregunta.update',['pregunta'=>$e_pregunta], compact('orden'));
    }
    public  function deletePregunta($id)
    {
        $delete = preguntas::find($id);
        $delete->delete();

        Session::flash('message', 'Pregunta eliminada exitosamente.!');
        return Redirect::route('pregunta.principal');
    }
    public function homeOrdenPregunta(Request $request)
    {
        $orden = tpreguntas::all();
        return view('BPregunta\principal', compact('orden'));
    }
    public function crearOrdenPregunta()
    {
        return view('BPregunta\create');
    }
    public function updateOrdenPregunta($id)
    {
        $eorden =tpreguntas::find($id);
        return view('BPregunta.update',['orden'=>$eorden]);
    }
    public  function deleteOrdenPregunta($id)
    {
        $delete = tpreguntas::find($id);
        $delete->delete();
        Session::flash('message', 'Tipo de pregunta eliminado exitosamente.!');
        return Redirect::route('bpregunta.principal');
    }
    public function homeUser(Request $request)
    {
        $usuario = User::ALL();

        $rol = rol::all();
        return view('Usuarios\principal', compact('usuario', 'rol'));
    }
    public function crearUser()
    {
        $rol = rol::pluck('descripcion','id');
        return view('Usuarios\create', compact('rol'));
    }
    public function updateUser($id)
    {
        $eusuario =User::find($id);
        $rol = rol::pluck('descripcion','id');
        return view('Usuarios.update',['eusuario'=>$eusuario], compact('rol'));
    }
    public  function deleteUser($id)
    {
        $delete = User::find($id);
        $delete->delete();
        Session::flash('message', 'Usuario eliminado exitosamente.!');
        return Redirect::route('usuario.principal');
    }
    public function homeExperto(Request $request)
    {
        $experto = expertos::all();
        return view('Expertos\principal', compact('experto'));
    }
    public function crearExperto()
    {
        $rol = rol::pluck('descripcion','id');
        return view('Expertos\create', compact('rol'));
    }
    public function updateExperto($id)
    {
        $experto =expertos::find($id);
        return view('Expertos.update',['experto'=>$experto]);
    }
    public  function deleteExperto($id)
    {
        $delete = expertos::find($id);
        $delete->delete();
        Session::flash('message', 'Experto eliminado exitosamente.!');
        return Redirect::route('experto.principal');
    }
    public  function  perfilExperto()
    {
        $expertos = expertos::all();
        return view('Expertos\perfil', compact('expertos'));
    }
    public function test(){
        $carrera = carreras::pluck('nombre','id');
        $preguntaCount = preguntas::count();
        $pregunta = tpreguntas::all();
        $resp = preguntas::all();


        return view ('Test.test', compact('pregunta', 'resp', 'carrera','preguntaCount'));
    }
    public function preguntaTest($id){

        $id =  Crypt::decrypt($id);


        $preguntaCount = preguntas::count();

        $tpregunta = tpreguntas::all();

        $pregunta = preguntas::find($id);

        if ($pregunta ==null){
            Session::flash('message', 'Ha finalizado.!');
            return view ('Test.resultados', compact('pregunta'));
        }
        return view ('Test.respuesta', compact('pregunta', 'tpregunta', 'preguntaCount'));
    }
    public function homeRegistro(){
        $usuario = User::all();
        $registros = registro::all();
        return view('Resultados\principal', compact('registros', 'usuario'));
    }
    public function MyTests($id){
        $usuario = User::all();
        $registros = registro::where('estudiante', '=', $id)->get();
        return view('Resultados\mytest', compact('registros', 'usuario'));
    }
    public function homeRankingCarreras(){
        $platinum1=registro::where('carrera_elegida', '=', 'INGENIERIA DE SISTEMAS')->count();
        $platinum2=registro::where('carrera_elegida', '=', 'INGENIERIAS CIVIL')->count();
        $platinum3=registro::where('carrera_elegida', '=', 'INGENIERIAS ELECTRICA')->count();
        $platinum4=registro::where('carrera_elegida', '=', 'INGENIERIAS INDUSTRIAL')->count();
        $platinum5=registro::where('carrera_elegida', '=', 'INGENIERIAS MINAS')->count();
        $platinum6=registro::where('carrera_elegida', '=', 'INGENIERIAS AMBIENTAL')->count();

        $platinuma=registro::where('carrera_seleccionada', '=', 'INGENIERIA DE SISTEMAS')->count();
        $platinumb=registro::where('carrera_seleccionada', '=', 'INGENIERIAS CIVIL')->count();
        $platinumc=registro::where('carrera_seleccionada', '=', 'INGENIERIAS ELECTRICA')->count();
        $platinumd=registro::where('carrera_seleccionada', '=', 'INGENIERIAS INDUSTRIAL')->count();
        $platinume=registro::where('carrera_seleccionada', '=', 'INGENIERIAS MINAS')->count();
        $platinumf=registro::where('carrera_elegida', '=', 'INGENIERIAS AMBIENTAL')->count();


        return view('Resultados\rankcarreras', compact(
            'platinum1',
            'platinum2',
            'platinum3',
            'platinum4',
            'platinum5',
            'platinum6',
            'platinuma',
            'platinumb',
            'platinumc',
            'platinumd',
            'platinume',
            'platinumf'));
    }
}

