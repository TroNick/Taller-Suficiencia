@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Resultados</h2>
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
            <h3 class="panel-title">Cam 83</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('test') }}" class="btn btn-default btn-sm" id="btnNuevo"><i class="fa fa-users"></i>Volver a realizar el test</a>
                    <a href="https://ucontinental.edu.pe" class="btn btn-warning btn-sm" id="btnNuevo"><i class="fa fa-users"></i>Visita Ucci</a>

                    <button class="btn btn-linkedin btn-sm" onclick="VerResultado(); Imprime();"><i class="fa fa-dashboard"></i>Ver resultado</button>
                     <br> <br>

                    {!!Form::open(['route'=>'iregistro.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Carrera elegida</label>
                        <div class="col-lg-10">
                            <input type="text" name="carreraini" id="carreraini" class="form-control" hidden readonly>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Carrera Final</label>
                        <div class="col-lg-10">
                            <input type="input" name="carrerafin" id="carrerafin" class="form-control" hidden readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Estado del test</label>
                        <div class="col-lg-10">
                            <input type="text" name="estado" id="estado" class="form-control" hidden readonly>
                        </div>
                    </div>


                    <input type="text" name="estudiante" value="{{Auth::user()->id}}" hidden>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-3">
                            <button class="btn btn-primary btn-sm" style="display: none;" type="submit" id="btnRegistrar"><i class="fa fa-pencil-square-o"></i> Guardar Resultados</button>
                            <a href="{{route('carrera.principal')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>
                            <br>
                            <br>
                            <p>Puedes ver e Imprimir El Certificado del Test que Rendiste</p>
                            
                        </div>
                    </div>

                    {!!Form::close()!!}






                </div>
            </div>
        </div>
    </div>

@stop
