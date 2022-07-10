<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Spasssio</title>
	 <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{asset('template_user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="{{asset('template_user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('template_user/lib/animate-css/animate.min.css')}}" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{asset('template_user/css/style.css')}}" rel="stylesheet">
    <!-- boton whats -->
    <link rel="stylesheet" href="{{asset('template_user/css/btw.css')}}">
    <link rel="stylesheet" href="{{asset('/css/spasssio.css')}}">
    @yield('styles')
</head>

<body>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="#hero"><img src="{{asset('template_user/img/logo.png')}}" alt="" title="" /></img></a>
                <!-- Descomenta abajo si prefieres usar una imagen de texto -->
                <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/home">Inicio</a></li>
                    <li><a href="#">Recordatorios</a><i class=""></i></li>
                    <li><a href="/misAjustes">Ajustes</a></li>
                    <li><a href="#">Mi progreso</a></li>
                    <li><a href="#">Mis logros</a></li>

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://i.pinimg.com/236x/c0/81/55/c0815525a49a883a858c62ee022f07d1.jpg" width="50" height="50">
                            <span class="hidden-xs">{{Auth::user()->name}} </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                            <center> <img src="https://i.pinimg.com/236x/c0/81/55/c0815525a49a883a858c62ee022f07d1.jpg" width="200" height="200"></center>
                                <p>
                                    {{Auth::user()->name}}
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" onclick="" class="btn btn-default btn-flat">Cambiar Contrase&ntilde;a</a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Salir
                    </a>
                    <a href="#" onclick="" class="btn btn-default btn-flat">Cambiar Contrase&ntilde;a</a>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <div id="app">
        @yield('content')
    </div>
    <!-- Required JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('template_user/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template_user/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template_user/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('template_user/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{asset('template_user/lib/morphext/morphext.min.js')}}"></script>
    <script src="{{asset('template_user/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('template_user/lib/stickyjs/sticky.js')}}"></script>
    <script src="{{asset('template_user/lib/easing/easing.js')}}"></script>
    <script src="{{asset('template_user/js/custom.js')}}"></script>
    <script src="{{asset('js/controles-generales.js')}}"></script>
    <script src="{{asset('js/pwa.js')}}"></script>
    <script defer src="{{asset('template_user/Carrusel/main.js')}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js'></script>
    @yield('scripts')
</body>
</html>