@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Rutinas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/routines">Listado de rutinas</a></li>
            <li class="breadcrumb-item active">Mostrar rutinas {{$rutina->name_rutina}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mx-auto">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Rutina: {{$rutina->name_rutina}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <p>{{$rutina->instruction_rutina}}</p>
                  <h3>Ejercicios que componen esta rutina:</h3>
                  <hr>  
                  <div class="row">
                  @foreach($rutina->ejercicios as $ejercicio) 
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                      <div class="card">  
                          <div class="card-header"> 
                              <div class="card-title">  
                                  {{$ejercicio->nombre_ejercicio}}
                              </div>
                          </div>
                          <div class="card-body"> 
                              <img src="/imgejercicios/{{$ejercicio->imagen_ejercicio}}" alt="" class="img-fluid">
                          </div>  
                      </div>                       
                    </div>
                  @endforeach  
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                      <a href="/routines/{{$rutina->slug}}/edit"><button class="btn btn-outline-primary btn-block">Editar Rutina</button></a>
                      <hr>
                      <a href="/ClassifyE" class="nav-link active"><button class="btn btn-outline-secondary btn-block">Editar ejercicios</button></a>
                    </div>
                  </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  SPAsssio
                </div>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection