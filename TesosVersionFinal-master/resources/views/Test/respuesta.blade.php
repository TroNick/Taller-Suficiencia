@extends('layouts.dashboard')
@section('content')

    <div class="row">
        <div class="col-md-12">
        <br>
        <br><br><br>
            <h2 class="page-title">{{$pregunta->pregunta}}</h2>
                @foreach ($tpregunta as $preg)
                    @if($pregunta->bpregunta == $preg->id)
                    <input name = "codPreg" value="{{ $preg->acronimo }}" readonly hidden>
                    @endif
                @endforeach
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
    @if(Session::has('messagerec'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('messagerec')}}</center>
        </div>
    @endif


    <div class="panel panel-default" >
        <div class="panel-heading">
            <h3 class="panel-title">Alternativas</h3>

        </div>
        <div class="panel-body">
            <center><label for="">Avance :</label> {{($pregunta->id/$preguntaCount)*100}} %</center>
            <div class="row">
                <div class="form-group">
                    <form name="frmRadio">
                    <div class="col-md-12">
                        {{ Form::radio('respuesta', 'Si' , true) }}Si
                        {{ Form::radio('respuesta', 'No' , false) }}No
                    </div>
                    </form>
                </div>
                <input type="text" id="numpreg" name="numpreg" value="{{$pregunta->id}}" hidden>
                <div class="hr-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2">
                        <a href="{{route('pregunta.Test', $parameters = Crypt::encrypt($pregunta->id-1 ) )}}" id ="EventoHandl" onclick="valorRadio();PregAnt();EntregaVariable()" class="btn btn-default btn-sm"> Anterior <i class=" fa fa-fast-forward"></i> </a>
                        <a href="{{route('pregunta.Test', $parameters = Crypt::encrypt($pregunta->id+1 ) )}}" id ="EventoHandl" onclick="valorRadio();EntregaVariable()" class="btn btn-info btn-sm"> Siguiente <i class=" fa fa-fast-forward"></i> </a>

                    </div>
                </div>

            </div>

        </div>
    </div>

@stop




