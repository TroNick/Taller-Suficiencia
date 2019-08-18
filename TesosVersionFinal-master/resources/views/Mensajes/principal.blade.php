@extends('layouts.dashboard')

@section('content')

    <h2 class="page-title">Panel de Mis Mensajes</h2>
    <div class="col-lg-2">

        <a href="{{ route('mensaje.create') }}" class="btn btn-linkedin btn-sm" id="btnNuevo"><i class="fa fa-users"></i> Nuevo Mensaje</a>


    </div>

    <div class="row">
        <div class="col-md-12">
                 <div class="panel panel-default">
                    <div class="panel-heading">Personalizado</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Asunto</th>
                                <th>Remitente</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mensajes as $msj):?>
                                @if($msj->receptor  ==Auth::user()->email)

                                <tr>
                                    <th scope="row">{{$msj->id}}</th>
                                    <td>{{$msj->titulo}}</td>
                                    <td>{{$msj->asunto}}</td>
                                    <td>{{$msj->emisor}}</td>
                                    <td>@if($msj->estado ==0) <button class="btn btn-google">No Revisado</button>
                                        @endif
                                        @if($msj->estado ==1) <button class="btn btn-dark">Revisado</button>
                                        @endif
                                    </td>
                                    <td>
                                        {!!link_to_route('mensaje.Edit', $title = 'Ver Mensaje', $parameters = $msj->id, $attributes = ['class'=>'btn btn-default btn-sm '])!!}
                                        <a href="{{ route('experto.Delete' ,$parameters = $msj->id)}}" onclick="return confirm('Esta seguro de eliminar al experto.')" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close">X</i> </a>

                                    </td>
                                </tr>
                                @endif
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
@stop
