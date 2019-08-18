@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Crear Nuevo Mensaje</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'imensaje.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal', 'files' => true])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Titulo</label>
                        <div class="col-lg-10">
                            {!!Form::text('titulo',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Asunto</label>
                        <div class="col-lg-10">
                            {!!Form::text('asunto',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Para</label>
                        <div class="col-lg-10">
                            {!!Form::text('receptor',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Remite</label>
                        <div class="col-lg-10">
                            {!!Form::text('emisor',Auth::user()->email,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control', 'readonly'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Mensaje</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('mensaje',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Enviar Mensaje</button>
                            <a href="{{route('mensaje.principal')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>

                        </div>
                    </div>
                    {!!Form::close()!!}

                </div>
            </div>

        </div>
    </div>

@stop
