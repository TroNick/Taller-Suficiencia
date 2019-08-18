@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Panel de administracion: Usuarios</h2>
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
            <h3 class="panel-title">Usuarios</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="left">

                        {!!Form::open(['route'=>'usuario.principal','method'=>'GET','role'=>'form','enctype'=>'multipart/form-data','files' => true])!!}

                        <div class="col-lg-4">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Buscar ..." autocomplete="off">
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-tumblr btn-sm" id="btnBuscar" type="submit"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                        <div class="col-lg-3">

                        </div>
                        {!!Form::close()!!}
                        <div class="col-lg-2">
                            <a href="{{ route('usuario.create') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Nuevo Usuarios</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Apellidos y Nombres</th>
                            <th>Celular</th>
                            <th>Permisos</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($usuario as $user):?>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->apellidos}}, {{$user->name}}</td>
                            <td>{{$user->celular}}</td>
                            <td>
                                @foreach ($rol as $roles)
                                    @if($roles->id == $user->rol)
                                        {{ $roles->descripcion }}
                                    @endif
                                @endforeach

                            </td>
                            <td>
                                {!!link_to_route('usuario.Edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}
                               <a href="{{ route('usuario.Delete' ,$parameters = $user->id)}}" onclick="return confirm('Esta seguro de eliminar el usuario)" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close">X</i> </a>
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
