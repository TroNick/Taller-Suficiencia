@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Expertos</h2>
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
            <h3 class="panel-title">Expertos</h3>
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
                            <a href="{{ route('experto.create') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Nuevo Experto</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Profesion</th>
                            <th>Expecialidad</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($experto as $exp):?>
                        <tr>
                            <td>{{$exp->id}}</td>
                            <td>{{$exp->apellidos}}, {{$exp->nombre}}</td>
                            <td>{{$exp->profesion}}</td>
                            <td>{{$exp->expecialidad}}</td>
                            <td>
                                {!!link_to_route('experto.Edit', $title = 'Editar', $parameters = $exp->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                               <a href="{{ route('experto.Delete' ,$parameters = $exp->id)}}" onclick="return confirm('Esta seguro de eliminar al experto.')" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close">X</i> </a>
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
