@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Preguntas</h2>
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
            <h3 class="panel-title">Preguntas</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="left">

                        {{--{!!Form::open(['route'=>'admin.cread','method'=>'GET','role'=>'form','enctype'=>'multipart/form-data','files' => true])!!}
--}}
                        <div class="col-lg-4">
                            <input type="text" id="txtBuscar" name="nombre" class="form-control" placeholder="Buscar ..." autocomplete="off">
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-tumblr btn-sm" id="btnBuscar" type="submit"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                        <div class="col-lg-3">

                        </div>
                      {{--  //{!!Form::close()!!}--}}
                        <div class="col-lg-2">
                            <a href="{{ route('pregunta.create') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Nueva Pregunta</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Pregunta</th>
                            <th>Calificacion</th>
                            <th>Estado</th>
                            <th>Tipo Pregunta</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pregunta as $preguntas):?>
                        <tr>
                            <td>{{$preguntas->id}}</td>
                            <td>{{$preguntas->pregunta}}</td>
                            <th>{{$preguntas->calificacion}}</th>
                            <th>
                                @if($preguntas->estado==1)Activo
                                @else Inactivo
                                @endif
                            </th>
                            <th>
                                @foreach ($tpregunta as $preg)
                                    @if($preguntas->bpregunta == $preg->id)
                                       {{ $preg->acronimo }}
                                    @endif
                                @endforeach
                            </th>
                            <td>
                                {!!link_to_route('pregunta.Edit', $title = 'Editar', $parameters = $preguntas->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                               <a href="{{ route('pregunta.Delete' ,$parameters = $preguntas->id)}}" onclick="return confirm('Esta seguro de eliminar la carrera profesional')" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close">X</i> </a>
                         </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop
