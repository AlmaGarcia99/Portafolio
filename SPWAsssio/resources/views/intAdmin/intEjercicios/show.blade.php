@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ejercicios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/exercises">Listado de ejercicios</a></li>
            <li class="breadcrumb-item active">Mostrar ejercicio {{$ejercicio->nombre_ejercicio}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 mx-auto">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de ejercicio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$ejercicio->nombre_ejercicio}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control" readonly="">{{$ejercicio->descripcion_ejercicio}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">GIF</label>
                    <hr>
                    <img src="/imgejercicios/{{$ejercicio->imagen_ejercicio}}" alt="" class="img-fluid mx-auto">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="/exercises/{{$ejercicio->slug}}/edit"><button type="submit" class="btn btn-primary btn-block">Editar</button></a>
                </div>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection