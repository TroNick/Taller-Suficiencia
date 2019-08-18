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

    <div class="tm-body">
        <div class="tm-sidebar">
            <nav class="tm-main-nav">
                <ul class="tm-main-nav-ul">
                    <li class="tm-nav-item"><a href="#welcome" class="tm-nav-item-link tm-button">
                            <i class="fa fa-smile-o tm-nav-fa"></i>Bienvenida</a>
                    </li>
                    <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link tm-button">
                            <i class="fa fa-sitemap tm-nav-fa"></i> Usuario </a>
                    </li>
                    
                    <li class="tm-nav-item"><a href="#gallery" class="tm-nav-item-link tm-button">
                            <i class="fa fa-image tm-nav-fa"></i>Carreras Para Nuestro Test</a>
                    </li>
                    <li class="tm-nav-item"><a href="#services" class="tm-nav-item-link tm-button">
                            <i class="fa fa-tasks tm-nav-fa"></i>Historial de tus Evaluaciones</a>
                    </li>
                    
                    <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link tm-button">
                            <i class="fa fa-envelope-o tm-nav-fa"></i>Universidad Continental</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="tm-main-content">
            @yield('content')
        </div>
    </div>
</div>

<footer>

    </div>
    <div class="container" id="footer-second-menu">
        <div class="row">
            <div class="col-lg-3">
                <img src="img/iso-ucontinental.png" alt="">

            </div>
            <div class="col-lg-3">
                <a href="https://ucontinental.edu.pe/informacion-institucional/">Informacion Institucional</a>
            </div>
            <div class="col-lg-3">
                <a href="https://www.continental.edu.pe/politica-de-privacidad/"> Política y  Privacidad </a>
            </div>
            <div class="col-lg-3">
                <a href="">Equipo N° | Copyright © 2018</a>
            </div>
        </div>
    </div>
</footer>
<!-- load JS files -->

<script src="js/jquery-1.11.3.min.js"></script>
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script>

    /* Mapa de Google*/
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(-12.047625, -75.200854),
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }

    function setNavbar() {
        if ($(document).scrollTop() > 160) {
            $('.tm-sidebar').addClass('sticky');
        } else {
            $('.tm-sidebar').removeClass('sticky');
        }
    }

    $(document).ready(function(){

        // Single page nav
        $('.tm-main-nav').singlePageNav({
            'currentClass' : "active",
            offset : 20
        });

        // Detect window scroll and change navbar
        setNavbar();

        $(window).scroll(function() {
            setNavbar();
        });

        // Magnific pop up
        $('.tm-gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {enabled:true}
            // other options
        });

        // Google Map
        loadGoogleMap();
    });

</script>

</body>
</html>
