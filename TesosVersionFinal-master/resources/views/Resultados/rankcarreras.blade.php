@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Registro de Test</h2>
        </div>
    </div>


    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('message')}}</center>
        </div>
    @endif

    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">Registros Test</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <a href="{{ route('rankingcarreras.principal') }}" class="btn btn-dark btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Imprimir</a>
                        <a href="{{ route('pdfCarreras',$parameters = [$platinum1,$platinum2,$platinum3,$platinum4,$platinum5,$platinum6,$platinuma,$platinumb,$platinumc,$platinumd,$platinume,$platinumf ]) }}"  target="_blank" class="btn btn-dark btn-sm" id="btnNuevo"><i class="fa fa-users"></i>Imprimir Resultado</a>

                    </center>  <br>

                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>CARRERA PROFESIONAL</th>
                            <th>CANTIDAD DE ELECCIONES</th>
                            <th>CANTIDAD DE TEST APROBADOS</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>INGENIERIA DE SISTEMAS E INFORMATICA</td>
                            <td>{{$platinum1}}</td>
                            <th>{{$platinuma}}</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS CIVIL'</td>
                            <td>{{$platinum2}}</td>
                            <th>{{$platinumb}}</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS ELECTRICA</td>
                            <td>{{$platinum3}}</td>
                            <th>{{$platinumc}}</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS INDUSTRIAL</td>
                            <td>{{$platinum4}}</td>
                            <th>{{$platinumd}}</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS MINAS</td>
                            <td>{{$platinum5}}</td>
                            <th>{{$platinume}}</th>
                        </tr>
                        <tr>
                            <td>INGENIERIAS AMBIENTAL</td>
                            <td>{{$platinum6}}</td>
                            <th>{{$platinumf}}</th>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop
