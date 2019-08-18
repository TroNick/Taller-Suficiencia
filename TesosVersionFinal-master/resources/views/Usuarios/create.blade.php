@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">Registro de Usuarios</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'iusercontrol.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            {!!Form::text('name',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombre ','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Apellidos</label>
                        <div class="col-lg-10">
                            {!!Form::text('apellidos',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellidos ','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Documento</label>
                        <div class="col-lg-10">
                            {!!Form::text('documento',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Documento ','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Celular</label>
                        <div class="col-lg-10">
                            {!!Form::text('celular',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Celular ','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            {!!Form::text('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Email ','class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label from-control">Roles de usuario</label>
                        <div class="col-lg-10">
                            {!!Form::select('rol',$rol,null, ['class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>
                            <a href="{{route('usuario.principal')}}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>

                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>

        </div>
    </div>

@stop
