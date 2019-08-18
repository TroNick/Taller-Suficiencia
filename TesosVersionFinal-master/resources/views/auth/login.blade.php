<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evalución de competencias Universitaras</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<div class="container-fluid">

    <section id="welcome" class="tm-content-box tm-banner margin-b-10">
        <div class="tm-banner-inner">
            <h1 class="tm-banner-title">Evaluación de competencias Universitaras</h1>
        </div>
    </section>
    <section id="from" class="tm-content-box  margin-b-5">
        <div class="tm-banner-inner">
            <h2>INICIAR SESION</h2>
                <form method="POST" action="{{ route('login') }}" class="contact-form">
                    @csrf
                <div class="form-group">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordar Cuenta!') }}
                                </label>
                            </div>
                        </div>
                    </div>


                <a href="{{ url('/register') }}" class="tm-button tm-button-normal">Crear una Cuenta</a>
                &nbsp;

                <button type="submit" class="btn btn-primary pull-xs-right tm-button tm-button-normal"> {{ __('Iniciar Sesión') }}</button>

                <br>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Necesito Ayuda') }}
                        </a>
                    @endif
            </form>

        </div>
    </section>



</div>
</div>
</div>
</body>
</html>
