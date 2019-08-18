@extends('layouts.dashboard')

@section('content')

    <h2 class="page-title">Panel de Expertos</h2>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($expertos as $exp):?>
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>{{$exp->apellidos}}, {{$exp->nombre}} </strong> ||  {{$exp->expecialidad}}</div>
                    <div class="panel-body">
                        <div class="col-xs-3">
                                <img src="/imgCargadas/{{$exp->imagen}}" alt="..."class="img-thumbnail">
                        </div>
                        <div class="col-xs-9">
                                <strong>Expecialidad :</strong>  {{$exp->expecialidad}}
                            <br>
                            <center><p>{{$exp->descripcion}} </p></center>
                        </div>
                    </div>
                    <div class="panel-footer">Centro de Labor Actual:<strong> {{$exp->trabajoact}}</strong></div>
                </div>
             <?php endforeach; ?>
        </div>
    </div>
@stop
