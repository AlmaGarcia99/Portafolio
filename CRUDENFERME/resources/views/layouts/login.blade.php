<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{asset('login_estilos/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login_estilos/css/main.css')}}">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/33b6e2673e.js" crossorigin="anonymous"></script>
</head>
<body>

	<!--Contenido principal-->
	@yield('content')
	<!--Contenido principal-->

	<!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/sweetalert2/sweetalert2.js')}}"></script>
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('/login_estilos/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('/login_estilos/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('/login_estilos/js/main.js')}}"></script>
    <script src="../js/usuario.js"></script>
</body>
</html>