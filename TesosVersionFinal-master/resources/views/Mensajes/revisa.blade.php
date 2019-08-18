@extends('layouts.dashboard')

@section('content')

    <h2 class="page-title">{{ $mensaje->titulo }}</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Remitente: </strong> {{$mensaje->emisor}}</div>
                <div class="panel-heading"><strong>Asunto: </strong> {{$mensaje->asunto}}</div>
                <div class="panel-body">
                    <div class="col-xs-9">
                        <strong>{{$mensaje->mensaje}}</strong>
                    </div>
                </div>

            </div>
            <a href="{{route('mensaje.principal')}}" class="btn btn-warning btn-sm"> Regresar a la bandeja <i class=" fa fa-fast-forward"></i> </a>
        </div>
    </div>
@stop
