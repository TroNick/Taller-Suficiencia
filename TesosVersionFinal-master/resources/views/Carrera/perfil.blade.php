@extends('layouts.dashboard')

@section('content')

    <h2 class="page-title">Perfil de Carreras</h2>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($carreras as $car):?>
            <div class="panel panel-default">
                <div class="panel-heading"><strong> {{$car->facultad}} </strong></div>
                <div class="panel-body">
                    <div class="col-xs-3">
                        <img src="/imgCargadas/{{$car->imagen}}" alt="..."class="img-thumbnail">
                    </div>
                    <div class="col-xs-9">
                        <strong>Titulo :</strong>  {{$car->titulo}}
                        <br>
                        <strong>Grado :</strong>  {{$car->grado}}
                        <br>
                        <strong>Nombre :</strong>  {{$car->nombre}}
                        <br>
                        <center><p>{{$car->descripcion}} </p></center>
                    </div>
                </div>
                <div class="panel-footer">Ver detalle:<strong> <a href="https://ucontinental.edu.pe/carreras-universitarias/"> Ver mas...</a></strong></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
@stop
