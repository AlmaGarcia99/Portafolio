<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('img/64x64_logo.png')}}" type="image/png" />
	<!-- loader-->
	<link href="{{asset('usersui/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('usersui/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('usersui/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('usersui/assets/css/icons.css')}}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SPASSSIO - AUTENTICACIÓN</title>
</head>
<body class="bg-theme bg-theme1">
	@yield('content')
	<!--plugins-->
	<script src="{{asset('usersui/assets/js/jquery.min.js')}}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>
</html>