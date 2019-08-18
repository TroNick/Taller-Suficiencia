@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Registro de Test</h2>
        </div>
    </div>

    <center>
       <a href="{{ route('rankingcarreras.principal') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Ranking de Carreras</a>
    </center>  <br>
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

                        </div>
                    </div>

                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Estudiante</th>
                            <th>Elegida</th>
                            <th>Resultado</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($registros as $reg):?>
                        <tr>
                            <td>{{$reg->id}}

                            </td>
                            <td>
                                @foreach ($usuario as $user)
                                    @if($reg->estudiante == $user->id)
                                        {{ $user->name }} {{$user->apellidos}}
                                    @endif
                                @endforeach
                            </td>
                            <th>{{$reg->carrera_elegida}}</th>
                            <th>{{$reg->carrera_seleccionada}}</th>
                            <th>
                                {{$reg->estado}}
                            </th>
                            <th>
                            </th>

                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop
