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
        <div class="col-xs-12 col-sm-12 col-md-9 mx-auto">
          <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de rutina</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de rutina</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$rutina->name_rutina}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instrucción</label>
                    <textarea name="instruccion" id="instruccion" cols="30" rows="10" class="form-control" readonly="">{{$rutina->instruction_rutina}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Audio</label>
                    <hr>
                    <audio src="/audiorutinas/{{$rutina->audio}}" alt="" class=" mx-auto">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="/routines/{{$rutina->slug}}/edit"><button type="submit" class="btn btn-primary btn-block">Editar</button></a>
                </div>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection