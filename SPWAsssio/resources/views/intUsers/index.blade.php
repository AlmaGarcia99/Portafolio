@extends('layouts.user')
@section('content')
<div id="preloader"></div>
 <!--==========================
Sección de encabezado
============================-->

<section id="services">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Servicios</h3>
                <div class="section-title-divider"></div>
            </div>
        </div>

        <div class="row" align="center">

            <div aling="left">
                <a href="/misRutinas"><img src="{{asset('template_user/img/Rutinas.PNG')}}" HSPACE="10" VSPACE="10" width="100" height="100"></a>
                <br>Rutinas
            </div>

            <div aling="right">
                <a href="vistas/OrientacionNutUsuario.php"><img src="{{asset('template_user/img/OrientaciónNutricional.PNG')}}" HSPACE="10" VSPACE="10" width="100" height="100"></a>
                <br>Orientación nutricional
            </div>

            <br>

            <div>
                <a href="https://docs.google.com/forms/d/1nG_mt4THAdAq5SIWcDtP8bCW7Z-T73p86hHEDsxNtzk/viewform?edit_requested=true"><img src="{{asset('template_user/img/Cuestionario.PNG')}}" HSPACE="10" VSPACE="10" width="100" height="100"></a> 
                <br>Cuestionario de salud
            </div>

            <div>
                <a href="https://docs.google.com/forms/d/1ZDpxVVPZMSzbtPKcSBVMjWtzAw2Pa_YxWwYANA8C95c/viewform?edit_requested=true"><img src="{{asset('template_user/img/Bitacora.PNG')}}" HSPACE="10" VSPACE="10" width="100" height="100"></a>
                <br>Bitacora Mensual
            </div>
        </div> 

        <a href="https://api.whatsapp.com/send?phone=5215512583151&text=Hola%20Buen%20día" class="btn-wsp" target="_blank" ><img src="{{asset('template_user/img/whats.png')}}"></a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</section>
<section>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>Spasssio</strong>. Todos los derechos reservados
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- #footer -->
@endsection