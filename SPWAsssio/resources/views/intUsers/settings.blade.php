@extends('layouts.dashtreme')
@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">Ajustes del usuario</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
				</li>
				@if(Auth::user()->profile->nombre_usu && Auth::user()->profile->apellidos_usu )
					<li class="breadcrumb-item active" aria-current="page">{{Auth::user()->profile->nombre_usu}} {{Auth::user()->profile->apellidos_usu}}</li>
				@else
					<li class="breadcrumb-item active" aria-current="page">{{Auth::user()->name}}</li>
				@endif

			</ol>
		</nav>
	</div>
</div>
<!--end breadcrumb-->
<div class="container">
	<div class="main-body">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="d-flex flex-column align-items-center text-center">
							@if(Auth::user()->profile->foto)
								<img src="imgusers/{{Auth::user()->profile->foto}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
							@else
								<img src="{{asset('imgusers/default.jpg')}}" class="rounded-circle p-1 bg-primary" width="110">
							@endif

							<div class="mt-3">
								@if(Auth::user()->profile->nombre_usu && Auth::user()->profile->apellidos_usu )
									<h4>{{Auth::user()->profile->nombre_usu}} {{Auth::user()->profile->apellidos_usu}}</h4>
								@else
									<h4>{{Auth::user()->name}}</h4>
								@endif
								<p class="mb-1">{{Auth::user()->grupo->GRUPO_NOMBRE}}</p>
							</div>
						</div>
						<hr class="my-4" />

					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<form action="/actualizarDatos" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nombre</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nombre" />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Apellidos</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="apellidos" />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Foto</h6>
								</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" name="foto" />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="email" value="{{Auth::user()->email}}"/>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Número de celular</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="numero" />
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9">

									<input type="submit" class="btn btn-light px-4" value="Save Changes" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<h3>Cambiar contraseña</h3>
						<hr>
						<form action="	">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Contraseña nueva</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nombre" />
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Confirmar contraseña</h6>
								</div>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="nombre" />
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9">
									<input type="button" class="btn btn-light px-4" value="Save Changes" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection