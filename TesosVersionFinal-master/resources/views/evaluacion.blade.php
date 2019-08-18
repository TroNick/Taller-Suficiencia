@extends('layouts.app')

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">  -></div>
        <div class="panel-body">
            <p>Elegir carrera </p>
            {!!Form::select('carrera',$carrera,null, ['class'=>'form-control'])!!}
            <p> </p>
            <center><a href="{{ url('/test') }}" class="btn btn-info"> <i class="glyphicon-arrow-up"> Realizar Test</i></a></center>

        </div>
    </div>
@endsection
