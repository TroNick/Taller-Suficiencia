@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Cambio de contraseña</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::model($usuario,['route'=>['icambio.update', $usuario->id],'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nueva contraseña</label>
                        <div class="col-lg-10">
                            {!!Form::text('nuevopass',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>'  ','class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Cambiar</button>
                            <a href="{{route('home')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>
                        </div>
                    </div>
                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>

@stop
