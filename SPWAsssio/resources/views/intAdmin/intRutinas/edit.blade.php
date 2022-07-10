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
            <li class="breadcrumb-item active">Registrar rutina</li>
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
                <h3 class="card-title">Editar rutina</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/routines/{{$rutina->slug}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de rutina</label>
                    <input type="text" class="form-control" required id="nombre" name="nombre" value="{{$rutina->name_rutina}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instrucción</label>
                    <textarea name="descripcion" id="descripcion" required cols="30" rows="10" class="form-control">{{$rutina->instruction_rutina}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Audio</label>
                    <hr>
                    <img src="/audiorutinas/{{$rutina->audio}}" alt="" class="img-fluid mx-auto">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Audio</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" accept="audio/*" class="custom-file-input" id="exampleInputFile" name="audio">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Actuzaliar Datos</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection