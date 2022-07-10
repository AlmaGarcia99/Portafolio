@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Clasificaciones</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/clasificaciones">Listado de clasificaciones</a></li>
            <li class="breadcrumb-item active">Mostrar clasificacion {{$clasificacion->clasifica_nombre}}</li>
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
                <h3 class="card-title">Registro de clasificación</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$clasificacion->GRUPO_NOMBRE}}" readonly="">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Estatus</label>
                    <input type="text" class="form-control" id="estatus" name="estatus" value="{{$clasificacion->GRUPO_ESTATUS}}" readonly="">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="/clasificaciones/{{$clasificacion->GRUPO_ID}}/edit"><button type="submit" class="btn btn-primary btn-block">Editar</button></a>
                </div>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection