@extends('layouts.app')

@section('content')
    <div class="tm-content-box tm-content-box-home">
        <img src="img/1200x800-01.jpg" alt="Image 1" class="img-fluid tm-welcome-img">
        <div class="tm-welcome-boxes-container">
            <div class="tm-welcome-box">
                <div class="tm-welcome-text">
                    <h2 class="tm-section-title">Aliquam ante sapien</h2>
                    <p>Duis vel elit eu eros dapibus vestibulum vel vel nibh. Nulla id ornare eros, at efficitur risus.</p>
                </div>
                <a href="#" class="tm-welcome-link tm-button">Aprende</a>
            </div>
            <div class="tm-welcome-box">
                <div class="tm-welcome-text">
                    <h2 class="tm-section-title">Lorem ipsum dolor</h2>
                    <p>Vivamus eleifend ac turpis sit amet maximus. Nulla in faucibus nisl, ut ultrices magna.</p>
                </div>
                <a href="#" class="tm-welcome-link tm-button">Detalles</a>
            </div>
        </div>
    </div>
<!-- slider -->
<div id="about" class="tm-content-box">
        <div class="tm-box-pad tm-bordered-box">
            <h2 class="tm-section-title">Mauris sollicitudin a nibh ut sollicitudin</h2>
            <p>Pellentesque quam libero, hendrerit pretium feugiat sed, rhoncus ac nunc. Etiam eget dui vel ex eleifend mattis eget vitae risus. Nullam eu libero sit amet quam finibus condimentum. Aenean vulputate dictum suscipit. Morbi efficitur erat nulla, id tempor mi accumsan sed.</p>
            <a href="{{ url('/login') }}" class="tm-button tm-button-normal">Iniciar Sesion</a>

        </div>
        <div class="tm-flex">
            <div class="tm-purple-bg tm-box-pad tm-bordered-box tm-no-border-top">
                <h2 class="tm-section-title">Cras volutpat fermentum</h2>
                <p>Aliquam ante sapien, tincidunt sed varius et, luctus condimentum sapien. Duis vel elit eu eros dapibus vestibulum vel vel nibh. Nulla id ornare eros.</p>
            </div>
            <div class="tm-gray-bg tm-box-pad tm-bordered-box tm-no-border-top">
                <h2 class="tm-section-title">Aenean vulputate dictum</h2>
                <p>Suspendisse ultricies egestas nulla, non vestibulum quam suscipit et. Sed sit amet enim ultricies, auctor nisl eu, porta augue. Cras et tristique augue.</p>
                <a href="{{ url('/register') }}" class="tm-button tm-button-normal">Registrate</a>
            </div>
        </div>
    </div>
    <div id="gallery" class="tm-content-box">
        <div class="grid tm-gallery">
            <figure class="effect-bubba">
                <img src="img/img-11-08.jpg" alt="Image 8" class="img-fluid">
                <figcaption>
                    <h2>Ingeniería <span>Ambiental</span></h2>
                    <p>Fusce faucibus metus in augue</p>
                    <a href="img/img-11-08.jpg">Mas Detalles</a>
                </figcaption>
            </figure>

            
            <figure class="effect-bubba">
                
                <img src="img/img-11-07.jpg" alt="Image 7" class="img-fluid">
                <figcaption>
                
                    <h2>Ingeniería <span>Civil</span></h2>
                    <p>Sed ut ipsum eu purus ullamcorper</p>
                    <a href="img/img-11-07.jpg">Mas Detalles</a>
                </figcaption>
            
            </figure>

            <figure class="effect-bubba">
                <img src="img/img-11-05.jpg" alt="Image 5" class="img-fluid">
                <figcaption>
                    <h2>Ingeniería <span>Electrónica</span></h2>
                    <p>Morbi fermentum eget libero sed</p>
                    <a href="img/img-11-05.jpg">Mas Detalles</a>
                </figcaption>
            </figure>

            <figure class="effect-bubba">
                <img src="img/img-11-03.jpg" alt="Image 3" class="img-fluid">
                <figcaption>
                    <h2>Ingeniería <span>Industrial</span></h2>
                    <p>Aenean rutrum enim a tellus suscipit</p>
                    <a href="img/img-11-03.jpg">Mas Detalles</a>
                </figcaption>
            </figure>

            <figure class="effect-bubba">
                <img src="img/img-11-02.jpg" alt="Image 2" class="img-fluid">
                <figcaption>
                    <h2>Ingeniería <span>Minas</span></h2>
                    <p>Curabitur a ipsum eget eros sodales</p>
                    <a href="img/img-11-02.jpg">Mas Detalles</a>
                </figcaption>
            </figure>

            <figure class="effect-bubba">
                <img src="img/img-11-04.jpg" alt="Image 4" class="img-fluid">
                <figcaption>
                    <h2>Ingeniería <span>Sistemas</span></h2>
                    <p>Duis eget tortor et mauris tempus</p>
                    <a href="img/img-11-04.jpg">Mas Detalles</a>
                </figcaption>
            </figure>
        </div>
    </div>

    <div id="services" class="tm-content-box tm-gray-bg tm-services">

        <div class="tm-services-img-container">
            <img src="img/450x900-01.jpg" alt="Green Field" class="img-fluid tm-services-img">
        </div>

        <div class="tm-box-pad tm-services-description-container">
            <h2 class="tm-section-title">Historial de tus Evaluaciones</h2>
            <p class="tm-section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quae accusamus, dolore quo corporis tenetur excepturi ducimus commodi sint eligendi ullam consequatur maxime porro sit impedit, sunt perferendis laboriosam repellat. <a href="#">Historial de tus Evaluaciones</a> .</p>
            <p class="tm-section-description">Pellentesque quam libero, hendrerit pretium feugiat sed, rhoncus ac nunc. Etiam eget dui vel ex eleifend mattis eget vitae risus. Nullam eu libero sit amet quam finibus condimentum. Aenean vulputate dictum suscipit. Morbi efficitur erat nulla, id tempor mi accumsan sed.</p>
            <p class="tm-section-description">Nulla id ornare eros, at efficitur risus. Fusce sodales lorem magna, id tempor justo mattis eget. Aenean accumsan semper commodo. Aliquam ante sapien, tincidunt sed vaius et, luctus condimentum sapien.</p>
        </div>

    </div>

    <!-- slider -->
    <div id="about" class="tm-content-box">
        <div class="tm-box-pad tm-bordered-box">
            <h2 class="tm-section-title">Mauris sollicitudin a nibh ut sollicitudin</h2>
            <p>Pellentesque quam libero, hendrerit pretium feugiat sed, rhoncus ac nunc. Etiam eget dui vel ex eleifend mattis eget vitae risus. Nullam eu libero sit amet quam finibus condimentum. Aenean vulputate dictum suscipit. Morbi efficitur erat nulla, id tempor mi accumsan sed.</p>
            <a href="{{ url('/login') }}" class="tm-button tm-button-normal">Iniciar Sesion</a>

        </div>
        <div class="tm-flex">
            <div class="tm-purple-bg tm-box-pad tm-bordered-box tm-no-border-top">
                <h2 class="tm-section-title">Cras volutpat fermentum</h2>
                <p>Aliquam ante sapien, tincidunt sed varius et, luctus condimentum sapien. Duis vel elit eu eros dapibus vestibulum vel vel nibh. Nulla id ornare eros.</p>
            </div>
            <div class="tm-gray-bg tm-box-pad tm-bordered-box tm-no-border-top">
                <h2 class="tm-section-title">Aenean vulputate dictum</h2>
                <p>Suspendisse ultricies egestas nulla, non vestibulum quam suscipit et. Sed sit amet enim ultricies, auctor nisl eu, porta augue. Cras et tristique augue.</p>
                <a href="{{ url('/register') }}" class="tm-button tm-button-normal">Registrate</a>
            </div>
        </div>
    </div>

    <section id="contact" class="tm-content-box">

        <div class="tm-flex">
            <div class="tm-contact-left-half tm-gray-bg">
                <div class="tm-contact-inner-pad">
                    <h2 class="tm-section-title">Envianos un Mensaje</h2>
                    <form action="#contact" method="post" class="contact-form">

                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nombre"  required/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Correo Electrónico"  required/>
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Mensaje" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary pull-xs-right tm-button tm-button-normal">Enviar</button>

                    </form>
                </div>
            </div>

            <div class="tm-contact-right-half tm-purple-bg">
                <div class="tm-address-box">
                    <h2 class="tm-section-title">Nuestra Ubiacion</h2>
                    <address>Av San Carlos 1980<br>
                        Huancayo<br>
                        Peru
                    </address>  
                </div>
                <div id="google-map"></div>
            </div>
        </div>

    </section>

@endsection
