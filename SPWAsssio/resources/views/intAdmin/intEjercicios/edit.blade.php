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
            <li class="breadcrumb-item active">Registrar ejercicio</li>
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
                <h3 class="card-title">Editar ejercicio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/exercises/{{$ejercicio->slug}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" required id="nombre" name="nombre" value="{{$ejercicio->nombre_ejercicio}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" required cols="30" rows="10" class="form-control">{{$ejercicio->descripcion_ejercicio}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">GIF</label>
                    <hr>
                    <img src="/imgejercicios/{{$ejercicio->imagen_ejercicio}}" alt="" class="img-fluid mx-auto">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">GIF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" accept="image/gif" value="/imgejercicios/{{$ejercicio->imagen_ejercicio}}" class="custom-file-input" id="exampleInputFile" name="gif">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Clasificacion</label>
                    <select class="custom-select my-1 mr-sm-2" id="grupo" name="id_clasificacion">
                      <option value="{{$ejercicio->CLASIFICA_ID}}">Conservar o editar...</option>
                      @foreach($clasificaciones as $clas)
                        <option value="{{$clas->CLASIFICA_ID}}">{{$clas->CLASIFICA_NOMBRE}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection