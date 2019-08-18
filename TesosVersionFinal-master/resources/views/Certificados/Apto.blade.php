
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado Apto</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="font-awesome-4.6.2/css/font-awesome.min.css">
    {!!Html::style('font-awesome-4.6.2/css/font-awesome.min.css')!!}
    {!!Html::style('css/bootstrap.min.css')!!}

    {!!Html::style('css/magnific-popup.css')!!}
    {!!Html::style('css/stylePL.css')!!}
</head>
<body>
<div class="container-fluid">
    <section id="welcome" class="tm-content-box tm-banner margin-b-10">
        <div class="tm-banner-inner">
            <h1 class="tm-banner-title">Evaluación de competencias Universitaras</h1>
        </div>
    </section>
    <section id="welcome" class="tm-content-box tm-result margin-b-10">
        <div class="tm-banner-inner">
            <h1>Universidad Continental</h1>
            <br>
            <h2>Evaluacion de Competencias Universitaras</h2>
            <br>
            <h3>Sr. {{ $nombre }}</h3>
            <br>
            <h2>Usted esta Apto</h2>
            <br>
            <h3>Para la Carrera de </h3>
            <h2> {{ $carrerafin }}</h2>

            <img src="/img/Firma.png" alt="Firma" class="img-fluid">
            <br>
        </div>
    </section>

    <footer class="tm-footer">
    <p class="text-xs-center">NUESTROS CAMPUS : HUANCAYO - Av. San Carlos 1980 Urb. San Antonio | www.continental.edu.pe | Derechos Reservados 2019 </p>    </footer>

</body>
</html>
