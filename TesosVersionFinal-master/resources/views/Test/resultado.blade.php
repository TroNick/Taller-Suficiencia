@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Resultados :</h2>
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
                    <p>Elegir carrera </p>
                    {!!Form::select('carrera',$carrera,null, ['class'=>'form-control'])!!}
                    <p> </p>

                    <center>
                        <div class="col-lg-2">
                            <a href=""  class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Ver Resultado</a>
                        </div>
                    </center>


                </div>
            </div>
        </div>
    </div>

@stop
