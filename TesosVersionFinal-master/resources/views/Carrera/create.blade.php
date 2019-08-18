@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Registro Carrera</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'icarrera.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal','files' => true])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Facultad</label>
                        <div class="col-lg-10">
                            {!!Form::text('facultad',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Grado Profesional</label>
                        <div class="col-lg-10">
                            {!!Form::text('grado',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Titulo Profesional</label>
                        <div class="col-lg-10">
                            {!!Form::text('titulo',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nombre Profesional</label>
                        <div class="col-lg-10">
                            {!!Form::text('nombre',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Descripción </label>
                        <div class="col-lg-10">
                            {!!Form::textarea('descripcion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Imagen </label>
                        <div class="col-lg-10">
                            {!!Form::file('imagen',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion ','class'=>'form-control'])!!}
                        </div>

                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>
                            <a href="{{route('carrera.principal')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>

                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>

        </div>
    </div>

@stop
