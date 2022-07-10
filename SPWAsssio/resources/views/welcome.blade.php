@extends('layouts.pagina')
@section('content')
    <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">

        <div class="container">

            <div class="row">

                <div class="col-14">

                    <nav class="main-nav">

                        <ul class="nav">
                            <img style="margin-left: -25%;" src="logo.png" width="10%">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class="scroll-to-section"><a href="#inicio" class="menu-item">Inicio</a></li>
                            <li class="scroll-to-section"><a href="#servicios" class="menu-item">Servicios</a></li>
                            <li class="scroll-to-section"><a href="#conocete" class="menu-item">Conócete</a>
                            <li class="scroll-to-section"><a href="#testimonios" class="menu-item">Blog</a>
                            <li class="scroll-to-section"><a type="button"  data-toggle="modal" data-target="#tienda">
                              Tienda
                            </a>
                            </li>

                            <li class="scroll-to-section"><a href="#contactanos" class="menu-item">Contactanos</a></li>
                            <li class="scroll-to-section"><a href="/login" class="">Inicio de sesión</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <br>

    <script>
        var DEBUG = false; if(DEBUG){ if(window.console) window.console = {}; var methods = [""]; for(var i=0;i<methods.length;i++){ console[methods[i]] = function(){}; } }
    </script>

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="inicio">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
                    <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-14"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="">
                         <div class="left-text col-lg-8 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Bienvenido a <em>SPASSSIO</em></h1>
                        <p>SPASSSIO es el primer centro personalizado de ejercicio en línea donde,
                             a través de nuestra web app, interactúas de manera directa con profesionales de Cultura Física para individualizarte tu programa de ejercicio, el cual podrás llevar
                             a cabo donde quieras y cuando quieras, además de que cambiaremos tu rutina mes a mes para el logro de tus objetivos de salud.</p>
                        <a href="#about" class="main-button-slider">Conóce más</a>

                    </div>

                    </div>

                </div>

            <div class="col-lg-5 col-md-7 col-sm-12 col-xs-14"
            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
            <div class="header-text">
                <div class="features-icon">
                    <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                            <img src="assets/images/an1.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                           <img src="assets/images/des1.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                            <img src="assets/images/an2.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                           <img src="assets/images/des2.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                            <img src="assets/images/an3.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                           <img src="assets/images/des3.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                            <img src="assets/images/an4.jpeg" width="100%" height="100%">
                    </div>

                    <div class="item service-item">
                           <img src="assets/images/des4.jpeg" width="100%" height="100%">
                    </div>


                </div>
                <img src="assets/images/flechas.png" width="5%">
                 <i style="text-align:center;">Recuerda puedes cambiar las imagenes al mover a la izquierda o derecha</i>
                <b><h4 style="color:#6BFBBA; font-weight: 900;">!!!CONÓCE EL SPASSSIO DE NUESTROS USUARIOS¡¡¡</h4></b>
            </div>


        </div>


                        </div>
                        <div class="col-lg-5 col-md-9 col-sm-12 col-xs-14"><br><br>
                        <b><h3>BENEFÍCIOS</h3></b>
                <ol type=”A” style="font-size: 18px;">
                  <li>-Adaptabilidad física y estilo de vida de los usuarios.</li>
                  <li>-Rutinas elaboradas por expertos.</li>
                  <li>-Disponibilidad a cualquier hora del día desde la comodidad de tu hogar.</li>
                  <li>-Efectivo, breve, fácil y accesible.</li>
                </ol>

                <b><p style="font-size: 18px; color: black;">Checa más de los servicios que ofrecemos y convéncete !!Te esperamos¡¡</p></b>

                    </div>
                    <div style=" text-align: center;">
                        <b><p style="font-size: 20px;">También contamos con un plan especifico para empresas.</p></b>
                        <a href="#" class="main-button-slider">Conóce más</a>
                    </div>

                    </div>


                </div>
                <br>


            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
<!-- ***** servicios ***** -->
<div class="servicios" id="servicios">
<section class="section" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div  class="center-heading">
                    <h2>Conóce nuestros <em>servicios</em></h2>
                    <p>¡DALE MAS VIDA A TUS AÑOS Y MAS AÑOS A TU VIDA!</p>
                </div>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Personalización</h4>
                            <p>Programas personalizados que se adaptan a ti y a tus objetivos de salud</p>

                        </div>
                    </div>
                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-2.png" alt="Second Author"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Accesibilidad</h4>
                            <p>Acceso a tu rutina de ejercicio en cualquier momento y en cualquier lugar.</p>

                        </div>
                    </div>
                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-3.png" alt="Author Third"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Atención</h4>
                            <p>Atención personal buscando que el programa se adapte a ti y no tú a él.</p>

                        </div>
                    </div>
                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-4.png" alt="Fourth Author"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Rutinas dinamicas</h4>
                            <p>Cambio de rutina mensual y seguimiento constante en base al avance de tus objetivos planteados.</p>

                        </div>
                    </div>
                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-5.png" alt="Fourth Author"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Valoración fisica</h4>
                            <p>Pruebas de valoración física y antropométrica que nos permitan conocer tu situación actual (opcional)</p>

                        </div>
                    </div>

                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-6.png" alt="Fourth Author"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Orientación nutricional</h4>
                            <p>Orientación nutricional para complementar el logro de tus objetivos.</p>

                        </div>
                    </div>

                    <div class="item service-item">
                        <div class="author">
                            <i><img src="assets/images/testimonial-author-7.png" alt="Fourth Author"></i>
                        </div>
                        <div class="testimonial-content">

                            <h4>Nos apoyamos todos</h4>
                            <p>Grupos de WHATSAPP  y TELEGRAM, únicamente para usuarios en donde podrás compartir experiencia con otros usuarios.
</p>

                        </div>

                    </div>

                 </div>
                 <img src="assets/images/flechas.png" width="5%">
                 <i style="text-align:center;">Recuerda puedes cambiar las imagenes al mover a la izquierda o derecha</i>

                 <br><br>
                 <h3 style="text-align: center;  ">Conóce más</h3><br>



                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-14"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">


                            <h4>Video promocional</h4>
                            <iframe  width="100%" height="500" src="https://www.youtube.com/embed/uCO7Wc_i774" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                        </div>
                    </div>
                </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>



    </section>
    </div>
<!-- ***** Testimonials Ends ***** -->



    <!-- ***** Features Big Item Start ***** -->
    <div class="conocete" id="conocete">
    <section class="section" id="about">
        <div class="container">
            <h3 style="text-align:center;">TEST DE CAPACIDADES FISICAS</h3>
            <br>
            <h4>Como parte de nuestros servicios ponemos a tu disposición una serie de valoraciones físicas que tu mismo puedes realizar en casa."</h4>
            <h4 style="color: red;">Es importante que antes realices un calentamiento previo, pero no debes llevarlos a cabo si tienes alguna molestia o problema de salud</h4>
            <br><br>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="assets/images/features-icon-1.png" height="60%" width="47%" alt="">
                            <h4>Test de resistencía</h4>

              <!-- Button trigger modal -->
                    <button type="button" class="main-button" data-toggle="modal" data-target="#exampleModalLong">
                      Hacer test
                    </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="assets/images/features-icon-2.png" height="10%" width="37%" alt="">
                            <h4>Test de flexibilidad</h4>

                            <button type="button" class="main-button" data-toggle="modal" data-target="#exampleModalLong2">
                              Hacer test
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="assets/images/features-icon-3.png" height="60%" width="53%" alt="">
                            <h4>Test de fuerza</h4>

                            <button type="button" class="main-button" data-toggle="modal" data-target="#exampleModalLong3">
                              Hacer test
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>04</h2>
                            <img src="assets/images/features-icon-4.png" height="60%" width="53%" alt="">
                            <h4>Test de equilibrio</h4>

                            <button type="button" class="main-button" data-toggle="modal" data-target="#exampleModalLong4">
                              Hacer test
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->

    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <div class="testimonios" id="testimonios">
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2><em>Testimonios</em></h2>
                        <h5>Si todavía no estas convencido, escucha a algunos de nuestros usuarios y checa lo que SPASSSIO puede hacer por ti.
</h5>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-8 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Author One"></i>

                            </div>
                            <div class="testimonial-content">
                                <h3><b>1</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>

                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <h3><b>2</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <h3><b>3</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <h3><b>4</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <h3><b>5</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <h3><b>6</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="item service-item">
                            <div class="author">
                                <i><img src="assets/images/video.png" alt="Fourth Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <h3><b>7</b></h3>
                                <video width="90%" height="240" controls>
                                  <source src="" type="video/mp4">
                                </video>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <img src="assets/images/flechas.png" width="5%">
                 <i style="text-align:center;">Recuerda puedes cambiar las imagenes al mover a la izquierda o derecha</i>
                 <br><br>
        </div>
    </section>
</div>


    <!-- ***** Testimonials Ends ***** -->
    <!-- Modales formularios -->
     @include('modals')
    <!--Modales formularios-->
@endsection
