@extends('layouts.user')
@section('styles')
	<link rel="stylesheet" href="{{asset('timers/8tiempos/timer8.css')}}">
@endsection
@section('content')
	<div id="preloader"></div>
	<div class="container" id="ejercicio-1">
		<div class="row">
			<div class="col-sm-12">
				<div class="contenedor">
					<div class="cabecera">
						<p>Sentadillas</p>
					</div>
					<div class="cuerpo">
						<img src="{{asset('imgejercicios/Ejercicio.gif')}}" alt="">
					</div>
					<div class="instrucciones">
						<p>Realiza el ejercicio siguiendo los pasos que te asigno el entrenador</p>
					</div>
					<div class="buttons">
						<div class="caja">
							<button>Ayuda</button>
						</div>
						<div class="caja">
							<button onclick="siguiente()">Siguiente</button>
						</div>
					</div>
					<div class="timer">
						<div class="caja">
							<div class="calentamiento"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="ejercicio-2">
		<div class="row">
			<div class="col-sm-12">
				<div class="contenedor">
					<div class="cabecera">
						<p>Otro ejercicio</p>
					</div>
					<div class="cuerpo">
						<img src="{{asset('imgejercicios/1634263171yamato.webp')}}" alt="">
					</div>
					<div class="instrucciones">
						<p>Realiza el ejercicio siguiendo los pasos que te asigno el entrenador</p>
					</div>
					<div class="buttons">
						<div class="caja">
							<button>Ayuda</button>
						</div>
						<div class="caja">
							<button onclick="siguiente()">Siguiente</button>
						</div>
					</div>
					<div class="timer">
						<div class="caja">
							<div class="calentamiento"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<script defer src="{{asset('timers/8tiempos/timer8.js')}}"></script>
	<script src="{{asset('js/rutina.js')}}"></script>
@endsection