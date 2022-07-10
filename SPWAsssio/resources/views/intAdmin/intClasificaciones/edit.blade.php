@extends('layouts.admin')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Grupos de trabajo</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/clasificaciones">Listado de grupos de trabajo</a></li>
            <li class="breadcrumb-item active">Registrar grupo</li>
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
                <h3 class="card-title">Editar grupos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/clasificaciones/{{$clasificacion->GRUPO_ID}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required name="nombre" value="{{$clasificacion->GRUPO_NOMBRE}}">
                  </div>


                   <div class="form-group">
                    <label for="exampleInputEmail1">Selecciona estatus</label>
                     <select class="form-control" id="estatus" required name="estatus" value="{{$clasificacion->GRUPO_ESTATUS}}">
                 <option value="ACTIVO">ACTIVO</option>
                <option value="DESACTIVADO" >DESACTIVADO</option>

                 </select>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Observaciones</label>
                      <textarea id="" cols="30" rows="10" class="form-control" name="observaciones">{{$clasificacion->observaciones}}</textarea>
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