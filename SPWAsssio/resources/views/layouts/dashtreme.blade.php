<!DOCTYPE html>
<html lang="es">
<head>
		<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('img/64x64_logo.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{asset('usersui/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('usersui/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('usersui/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('usersui/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('usersui/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('usersui/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('usersui/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/icons.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('styles')
	<title>SPASSSIO - PWA</title>
</head>
<body class="bg-theme bg-theme1">
	<div class="wrapper">
		@include('intUsers.general.sidemenu')
		@include('intUsers.general.header')
		<div id="app">
			<div class="page-wrapper">
				<div class="page-content">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	<footer class="bg-dark shadow-sm p-2 text-center fixed-bottom">
		<p class="mb-0">Copyright © 2021. All right reserved.</p>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('usersui/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('usersui/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('usersui/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/jquery-knob/excanvas.js')}}"></script>
	<script src="{{asset('usersui/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	<!--<script src="{{asset('usersui/assets/js/index.js')}}"></script>-->
	<!--app JS-->
	<script src="{{asset('usersui/assets/js/app.js')}}"></script>
	@yield('scripts')
</body>
</html>