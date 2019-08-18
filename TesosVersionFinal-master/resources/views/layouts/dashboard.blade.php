<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <link rel="shortcut icon" href="{{ URL::asset('img/icon.png') }}">

    <title>Panel de Administracion</title>

    <!-- Font awesome -->

<!-- Sandstone Bootstrap CSS -->
{!!Html::style('css/bootstrap.min.css')!!}
<!-- Bootstrap Datatables -->
{!!Html::style('css/dataTables.bootstrap.min.css')!!}
<!-- Bootstrap social button library -->
{!!Html::style('css/bootstrap-social.css')!!}
<!-- Bootstrap select -->
{!!Html::style('css/bootstrap-select.css')!!}
<!-- Bootstrap file input -->
{!!Html::style('css/fileinput.min.css')!!}
<!-- Awesome Bootstrap checkbox -->
{!!Html::style('css/awesome-bootstrap-checkbox.css')!!}
<!-- Admin Stye -->
{!!Html::style('css/styles.css')!!}
{!!Html::style('css/sweetalert.css')!!}

</head>

<body>
<div class="brand clearfix">
    <a href="#" class="logo"><img src="{{ URL::asset('img/logo.jpg') }}" class="img-responsive" alt=""></a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">
        <li><a href="{{ route('mensaje.principal') }}"><i class="fa fa-mail-forward"</i> Mensajes</a></li>
        <li><a href="{{ route('CambioPass', $parameters = Auth::user()->id ) }}"><i class="fa fa-commenting-o"></i> Cambiar Contraseña</a></li>

        <li class="ts-account">
            <a href="#"><img src="{{ URL::asset('img/ts-avatar.jpg') }}" class="ts-avatar hidden-side" alt=""> <i class="fa fa-angle-down hidden-side">{{ Auth::user()->name }}</i></a>

                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            </ul>
        </li>
    </ul>
</div>

<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">

            <li class="ts-label">Principal</li>
            <li class="open"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            @if(Auth::user()->rol ==1)<li><a href="{{ route('carrera.principal') }}"><i class="fa fa-user"></i>Carreras</a></li>
            @endif
            @if(Auth::user()->rol ==1)
            <li><a href="{{ route('bpregunta.principal') }}"><i class="fa fa-user-md"></i>Banco Preguntas</a></li>
            @endif
            @if(Auth::user()->rol ==1)
            <li><a href="{{ route('pregunta.principal') }}"><i class="fa fa-institution"></i>Preguntas</a></li>
            @endif
            @if(Auth::user()->rol ==1)
            <li><a href="{{ route('usuario.principal') }}"><i class="fa fa-institution"></i>Usuarios</a></li>
            @endif
            @if(Auth::user()->rol ==1)
            <li><a href="{{ route('experto.principal') }}"><i class="fa fa-institution"></i>Expertos</a></li>
            @endif
      

                <li><a href="{{ route('experto.Perfil') }}"><i class="fa fa-institution"></i>Perfil Expertos</a></li>
                <li><a href="{{ route('carrera.Perfil') }}"><i class="fa fa-institution"></i>Perfil Carreras</a></li>


            @if(Auth::user()->rol ==3)
                <li><a href="{{ route('test') }}"><i class="fa fa-users"></i>Realizar Test</a></li>
            @endif
            @if(Auth::user()->rol ==3)
                <li><a href="{{ route('registro.principal') }}"><i class="fa fa-users"></i>Resultados de Test</a></li>
            @endif
        
                <li><a href="{{ route('rankingcarreras.principal') }}"><i class="fa fa-users"></i>Ranking de Carreras</a></li>
     
     
            @if(Auth::user()->rol ==3)
                <li><a href="{{ route('mytest.principal',$parameters = Auth::user()->id ) }}"><i class="fa fa-users"></i>Mis Test</a></li>
            @endif
            @if(Auth::user()->rol ==1)
                <li><a href="{{ route('Perfil',$parameters = Auth::user()->id ) }}"><i class="fa fa-user-secret"></i>Mi Perfil</a></li>
            @endif
        </ul>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>
</div>

<!-- Loading Scripts -->
{!!Html::script('js/app.js')!!}
{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap-select.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/jquery.dataTables.min.js')!!}
{!!Html::script('js/dataTables.bootstrap.min.js')!!}
{!!Html::script('js/Chart.min.js')!!}
{!!Html::script('js/fileinput.js')!!}
{!!Html::script('js/chartData.js')!!}
{!!Html::script('js/main.js')!!}
{!!Html::script('js/sweetalert.min.js')!!}
{!!Html::script('js/myscript.js')!!}


</body>

</html>
