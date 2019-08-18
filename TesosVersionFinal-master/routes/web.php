<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/evaluacion', 'OtrasPaginasController@evaluacion')->name('evaluacion');
Route::get('/test', 'AdminDashController@test')->name('test');
Route::get('/login1', 'OtrasPaginasController@index')->name('Login');
Route::get('/matenimiento', 'OtrasPaginasController@mantenimiento')->name('Mantenimiento');
Route::get('/perfilUsuario/{id}', 'AdminDashController@Perfil')->name('Perfil');
Route::get('/changepass/{id}', 'AdminDashController@CambioPass')->name('CambioPass');
Route::resource('/iperfil','PerfilController');
Route::resource('/icambio','CambioPassController');

Route::get('/carrera','AdminDashController@homeCarrera')->name('carrera.principal');
Route::get('/carrera/crear','AdminDashController@crearCarrera')->name('carrera.create');
Route::get('/carrera/edit/{id}','AdminDashController@updateCarrera')->name('carrera.Edit');
Route::get('/carrera/eliminar/{id}','AdminDashController@deleteCarrera')->name('carrera.Delete');
Route::get('/carreraperfil','AdminDashController@perfilCarrera')->name('carrera.Perfil');
Route::resource('/icarrera','CarreraController');

Route::get('/pregunta','AdminDashController@homePregunta')->name('pregunta.principal');
Route::get('/pregunta/crear','AdminDashController@crearPregunta')->name('pregunta.create');
Route::get('/pregunta/edit/{id}','AdminDashController@updatePregunta')->name('pregunta.Edit');
Route::get('/pregunta/eliminar/{id}','AdminDashController@deletePregunta')->name('pregunta.Delete');
Route::resource('/ipregunta','PreguntaController');


Route::get('/mensaje','AdminDashController@homeMensaje')->name('mensaje.principal');
Route::get('/mensaje/crear','AdminDashController@crearMensaje')->name('mensaje.create');
Route::get('/mensaje/edit/{id}','AdminDashController@updateMensaje')->name('mensaje.Edit');
Route::get('/mensaje/eliminar/{id}','AdminDashController@deleteMensaje')->name('mensaje.Delete');
Route::resource('/imensaje','MensajeController');


Route::get('/pdf/{nombre}/{carrera}/{carrerafin}/{estado}', function ($nombre, $carrera, $carrefin, $estado){

    $pdf=PDF::loadHTML('<h1>Test  de  '.$nombre.'</h1>

                    <br>
                    <br>
                    <label for="">Carrera Elegida : </label> '.$carrera.' <br>
                    <label for="">Carrera Final : </label> '.$carrefin.' <br>
                    <label for="">Estado : </label> '.$estado.' <br>
');
    return $pdf->stream();
})->name('pdf');

Route::get('/claim/{nombre}/{carrera}/{carrerafin}/{estado}', function ($nombre, $carrera, $carrefin, $estado){
    if ($carrera==$carrefin)
    {
        return view('Certificados\Apto', ['nombre'=>$nombre, 'carrera'=>$carrera, 'carrerafin'=>$carrefin]);
    }
    else
    {
        return view('Certificados\NoApto', ['nombre'=>$nombre, 'carrera'=>$carrera, 'carrerafin'=>$carrefin]);
    }


})->name('certificado');


Route::get('/pdf/{param1}/{param2}/{param3}/{param4}/{param5}/{param6}/{parama}/{paramb}/{paramc}/{paramd}/{parame}/{paramf}',
    function ($platinum1, $platinum2, $platinum3, $platinum4,$platinum5,$platinum6,$platinuma,$platinumb,$platinumc,$platinumd,$platinume,$platinumf){

    $pdf=PDF::loadHTML('<h1>Imprimir Raking de Carreras</h1>

         <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>CARRERA PROFESIONAL</th>
                            <th>CANTIDAD DE ELECCIONES</th>
                            <th>CANTIDAD DE ELECCIONES</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>INGENIERIA DE SISTEMAS E INFORMATICA</td>
                            <td>'.$platinum1.'</td>
                            <th>'.$platinuma.'</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS CIVIL</td>
                            <td>'.$platinum2.'</td>
                            <th>'.$platinumb.'</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS ELECTRICA</td>
                            <td>'.$platinum3.'</td>
                            <th>'.$platinumc.'</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS INDUSTRIAL</td>
                            <td>'.$platinum4.'</td>
                            <th>'.$platinumd.'</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS MINAS</td>
                            <td>'.$platinum5.'</td>
                            <th>'.$platinume.'</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS AMBIENTAL</td>
                            <td>'.$platinum6.'</td>
                            <th>'.$platinumf.'</th>
                        </tr>

                        </tbody>
                    </table>
');
    return $pdf->stream();
})->name('pdfCarreras');


Route::get('/registro','AdminDashController@homeRegistro')->name('registro.principal');
Route::get('/rankingcarreras','AdminDashController@homeRankingCarreras')->name('rankingcarreras.principal');
Route::get('/mytest/{id}','AdminDashController@MyTests')->name('mytest.principal');
Route::resource('/iregistro','RegistroTestController');


Route::get('/experto','AdminDashController@homeExperto')->name('experto.principal');
Route::get('/experto/crear','AdminDashController@crearExperto')->name('experto.create');
Route::get('/experto/edit/{id}','AdminDashController@updateExperto')->name('experto.Edit');
Route::get('/experto/eliminar/{id}','AdminDashController@deleteExperto')->name('experto.Delete');
Route::get('/expertoperfil','AdminDashController@perfilExperto')->name('experto.Perfil');
Route::resource('/iexperto','ExpertoController');

Route::get('/ordenpregunta','AdminDashController@homeOrdenPregunta')->name('bpregunta.principal');
Route::get('/ordenpregunta/crear','AdminDashController@crearOrdenPregunta')->name('bpregunta.create');
Route::get('/ordenpregunta/edit/{id}','AdminDashController@updateOrdenPregunta')->name('bpregunta.Edit');
Route::get('/ordenpregunta/eliminar/{id}','AdminDashController@deleteOrdenPregunta')->name('bpregunta.Delete');
Route::resource('/iordenpregunta','TipoPreguntaController');


Route::get('/usercontrol','AdminDashController@homeUser')->name('usuario.principal');
Route::get('/usercontrol/crear','AdminDashController@crearUser')->name('usuario.create');
Route::get('/usercontrol/edit/{id}','AdminDashController@updateUser')->name('usuario.Edit');
Route::get('/usercontrol/eliminar/{id}','AdminDashController@deleteUser')->name('usuario.Delete');
Route::resource('/iusercontrol','UserController');

Route::get('/test/pregunta/{id}','AdminDashController@preguntaTest')->name('pregunta.Test');
Route::get('/resultados','AdminDashController@resultadoTest')->name('resultado.Test');


Route::resource('/itest','TestController');

