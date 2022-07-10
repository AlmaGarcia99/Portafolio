<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Spasssio</title>
    <!--PWA NO BORRAR-->
    @laravelPWA
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-lava.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
</head>
<body>
	<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- ***** Contenido de la página***** -->
    @yield('content')
    <!-- ***** Contenido de la página ***** -->
    <!-- ***** Footer Start ***** -->
     <!-- ***** Footer Start ***** -->
    <div class="contactanos" id="contactanos">

        <div style=" margin-left: 10%; margin-right: 5%; ">
                    <h4 style="text-align: center ;">Contamos con diferentes paquetes accesibles a la medida de tus necesidades. Descubre los beneficios que tenemos para ti. </h4>
                        <p>SPASSSIO cuenta con 3 paquetes diferentes:</p>
<b>1: Básico.</b> <br>
<b>2: Premium.</b> <br>
<b>3: Empresarial.</b><br>

<p>Estos paquetes se adaptan a tu presupuesto, y mientras mayor sea tu compromiso e integres a más personas al programa te daremos un descuento. Te pedimos que nos envíes un mensaje al siguiente WhatsApp Entra a este link 📞 .<a href="https://api.whatsapp.com/send/?phone=5255%201258%203151&text&app_absent=0" target="_blank"> WhatsApp Entra a este link  </a>  o al siguiente correo: <b>spasssio@gmail.com</b> con la leyenda <b>"Quiero saber precios"</b> para responderte a la brevedad.
</p>
<br><br>

        <h2 style="text-align: center ;">Beneficios que podrían incluir en cada paquete:</h2>
        <br><br>
        <b>
<ol>
<li>1: Encuesta inicial de salud (opcional).</li>
<li>2: Programa personalizado de ejercicio cardiovascular.</li>
<li>3: Orientación nutricional.</li>
<li>4: Cambio de rutina mensual.</li>
<li>5: Programa de tono muscular.</li>
<li>6: Requerimiento calórico personalizado. </li>
<li>7: Platicas de sensibilización.</li>
</ol>
        </b>    
        <br><br><br>

                </div>

               
        <div style="text-align: ; margin-left: 10%; margin-right: 5%; ">
                    <h3>¿QUÉ HACEMOS?</h3>
                        <p>Desarrollamos programas y realizamos investigación de campo con la intención de ofrecerte las propuestas idóneas de acondicionamiento físico para ti. </p>
                         <br><br>
                        <h3>MISIÓN</h3>
                        <p>Brindar a nuestros clientes un sistema de entrenamiento físico único y personal conforme a sus intereses y posibilidades, ofreciendo herramientas que les permitan reforzar dicha experiencia y lograr así una adecuada calidad de vida.</p>
                         <br><br>
                        <h3>VISIÓN</h3>
                        <p>Consolidarnos como la mejor opción en programas personales de acondicionamiento físico para todas las personas que buscan mejorar su calidad de vida a través del ejercicio.</p>
                </div>
                 <br><br>
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Nombre completo" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="text" placeholder="Correo electronico o telefono"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Mensaje"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Enviar mensaje</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>¿Quieres saber más? Contactanos <em></em></h2>
                        <p>Puedes comunicarte con nostros, dejanos tus datos y nos comunicaremos en breve contigo.</p>
                        <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2022 Spassio</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<!-- jQuery -->
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugins -->
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/imgfix.min.js')}}"></script>
    <!-- Global Init -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
	<!-- Linea del chatbot -->
  	<script src="https://account.snatchbot.me/script.js">
 	</script><script>window.sntchChat.Init(235118)</script>
</body>
</html>