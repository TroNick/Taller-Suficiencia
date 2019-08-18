
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Resultado Evalución de competencias Universitaras</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
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

    <div class="tm-body">

        <div class="container-fluid">

            <section id="welcome" class="tm-content-box tm-b_result margin-b-10 w">
                <div class="tm-banner-inner">
                    <h1>Universidad Continental</h1>
                    <br>
                    <h3>Sr. {{$nombre}}</h3>
                    <h3>Lo Setimos</h3>
                    <h3>Usted Noesta Apto</h3>
                    <br>
                    <h3>Para la Carrera de </h3>
                    <h2>{{$carrera}}</h3>
                </div>
            </section>
            <section id="welcome" class="tm-content-box tm-b_result-min margin-b-10 w">
                <div class="tm-banner-inner">
                    <P>Segun Nuestra Herramienta, Le sugerimos estudiar la Carrera de {{$carrerafin}} </P>
                </div>
            </section>
            <section id="welcome" class="tm-content-box tm-b_result margin-b-10 w">
                <div class="tm-banner-inner-recom" >

                    <h2>Recomendaciones</h2>
                    <h3>Usted Necesita Mejorar en las siguientes Habiliades</h3>
                    <br>
                        <ul>
                          <li>Tener interés por las áreas de matemáticas, física y materiales de diseño y construcción.</li>
                          <li>Observador y analítico.</li>
                          <li>Vocación por las ciencias exactas.</li>
                          <li>Habilidad manual.</li>
                            <li>Capacidad de abstracción y razonamiento numérico.</li>
                            <li>Poseer creatividad para la innovación de proyectos. </li>
                            <li>Capacidad para comunicarse en equipos de trabajo numerosos de diferentes disciplinas.</li>
                    
                        </ul>
                </div>
            </section>












            <footer class="tm-footer">
            <p class="text-xs-center">NUESTROS CAMPUS : HUANCAYO - Av. San Carlos 1980 Urb. San Antonio | www.continental.edu.pe | Derechos Reservados 2019 </p>
            </footer>


        </div>
    </div>



</body>
</html>
