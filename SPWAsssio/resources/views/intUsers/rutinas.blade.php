@extends('layouts.user')
@section('content')
<div id="preloader"></div>
<div class="titulo">
	<h3>Tú Spasssio para ponerte en forma</h3>
</div>
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-sm-6 justify-content-center">
			<a href="/rutina">
				<div class="ejercicio">
					<img src="{{asset('img/icon-cardio.png')}}" alt="">
				</div>
			</a>
			<div class="titulo-ejercicio">
				Cardio
			</div>
		</div>
		<div class="col-xs-6 col-sm-6">
			<div class="ejercicio">
				<img src="{{asset('img/icon-cardio.png')}}" alt="">
			</div>
			<div class="titulo-ejercicio">
				Tono muscular
			</div>
		</div>
	</div>
	<div class="divisor">
		<div class="row mt-4">
			<div class="col-xs-6 col-sm-6">
				<div class="ejercicio-bloqueado">
					<p>Bloqueado</p>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6">
				<div class="ejercicio-bloqueado">
					<p>Bloqueado</p>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="#" class="btn-flotante">Llamada a la acción</a>
@endsection