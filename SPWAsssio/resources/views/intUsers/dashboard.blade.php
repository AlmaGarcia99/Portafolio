@extends('layouts.dashtreme')
@section('content')
<div class="row">
    <div class="col col-lg-12 mx-auto">
        <div class="alert border-0 alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-white"><i class='bx bx-bell'></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Bienvenido</h6>
                    <div class="text-white">Quiero darte las gracias por integrarte a nuestro programa personalizado de acondicionamiento físico SPASSSIO, el cual se adapta a nuestras necesidades y posibilidades reales.</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
<hr>
<div class="row mt-4">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="card radius-10">
            <a href="/misRutinas">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto mb-3"><i class="lni lni-dumbbell"></i>
                        </div>
                        <h4 class="my-1">Rutinas</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="card radius-10">
            <a href="/Dietas">
                <div class="card-body">
                    <div class="text-center">
                        <div class="widgets-icons rounded-circle mx-auto mb-3"><i class="fa fa-cutlery" aria-hidden="true"></i>
                        </div>
                        <h4 class="my-1">Orientación nutricional</h4>
                    </div>
                </div>

            </a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="card radius-10">
            <div class="card-body">
                <div class="text-center">
                    <div class="widgets-icons rounded-circle mx-auto mb-3"><i class="fa fa-heartbeat" aria-hidden="true"></i>
                    </div>
                    <h4 class="my-1">Cuestionario de salud</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="card radius-10">
            <div class="card-body">
                <div class="text-center">
                    <div class="widgets-icons rounded-circle mx-auto mb-3"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                    </div>
                    <h4 class="my-1">Bitácora mensual</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4  mb-4">
    @forelse($tips as $tip)
    <div class="col d-flex align-items-stretch" >
        <div class="card">
            <img src="ImgTips/{{$tip->imagen}}" width="350" heigth="350" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text" >  {{($tip->titulo)}}</p>
                {!!html_entity_decode($tip->descripcion)!!}
            </div>
        </div>
    </div>
    @empty
    <h1>No hay dietas asignadas</h1>
    @endforelse
</div>
@endsection