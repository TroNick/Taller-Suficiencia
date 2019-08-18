@extends('layouts.dashboard')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('message')}}</center>
        </div>
    @endif
    @if(Session::has('message-error'))
        <div class="alert alert-danger alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('message-error')}}</center>
        </div>
    @endif


        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <h2 class="page-title">EVALUACION COMPETENCIAS UNIVERSITARAS UCCI</h2>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-primary text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">24</div>
                                                <div class="stat-panel-title text-uppercase">Carreras Universitarias</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-success text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">8</div>
                                                <div class="stat-panel-title text-uppercase">Expertos</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-info text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">58</div>
                                                <div class="stat-panel-title text-uppercase">Usuarios</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-body bk-warning text-light">
                                            <div class="stat-panel text-center">
                                                <div class="stat-panel-number h1 ">18</div>
                                                <div class="stat-panel-title text-uppercase">Coordinadores</div>
                                            </div>
                                        </div>
                                        <a href="#" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Universidad Continental</div>
                                <div class="panel-body">

                                     <div class="container">
                                                    <div class="row">
                                                        <div class="col-xs-5">
                                                             <span>Arequipa</span> <br>
                                                            La Canseco II / Sector: Valle Chili<br>
                                                            José Luis Bustamante y Rivero - Arequipa<br>
                                                            <br>
                                                            Calle Alfonso Ugarte 607<br>
                                                            Yanahuara - Arequipa<br>
                                                            <br>
                                                            Teléfono: 054 412030<br>

                                                            <span>Cusco </span>
                                                            Lt. 13 Mz. B<br>
                                                            Urb. Manuel Prado - Cusco<br>
                                                            <br>
                                                            Jr. Juan Espinoza Medrano N° 358 (Q-13) Cusco<br>
                                                            <br>
                                                            Teléfono: 084 480070<br>
                                                            <br>


                                                        </div>
                                                        <div class="col-xs-7">
                                                             <span>Huancayo</span>
                                                            Av. San Carlos 1980<br>
                                                            Urb. San Antonio - Huancayo<br>

                                                            Teléfono: 064 481430<br>

                                                            <span>Los Olivos - Lima</span>
                                                            Av. Alfredo Mendiola 5210<br>
                                                            Los Olivos - Lima<br>
                                                            <br>
                                                            Teléfono: 01 2132760<br>
                                                            <br>
                                                            <span>Miraflores - Lima </span><br>
                                                            Calle Junín 355<br>
                                                            Miraflores - Lima<br>
                                                            <br>
                                                            Teléfono: 01 2132760<br>
                                                        </div>
                                                    </div>
                                                </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Universidad Continental</div>
                                <div class="panel-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-4">
                                <li><a href="">* Centro preuniversitario</a></li>
                                <li><a href="">* Hub de información</a></li>
                                <li><a href="">* Centro de idiomas</a></li>
                                <li><a href="">* Centro de emprendimiento</a></li>
                                <li><a href="">* Centro de investigación</a></li>
                                <li><a href="">* Campus</a></li>
                                <li><a href="">* Publicaciones</a></li>
                                <li><a href="">* Internacional</a></li>
                                <li><a href="">* Docentes</a></li>
                                <li><a href="">* Vida Universitaria Continental</a></li>
                            </div>
                            <div class="col-xs-8">
                            </div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

        </div>
@endsection
