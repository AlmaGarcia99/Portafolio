@extends('layouts.admin')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Enfermedad</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/enfermedades">Listado de enfermedades</a></li>
            <li class="breadcrumb-item active">Registrar enfermedades</li>
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
                <h3 class="card-title">Editar enfermedades</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/enfermedades/{{$enfermedad->slug}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" required id="nombre" name="nombre" value="{{$enfermedad->nombre}}">
                  </div>

               <div class="form-group">
                    <label for="exampleInputEmail1">Selecciona estatus</label>
                     <select class="form-control" id="estatus" required name="estatus" value="{{$enfermedad->status}}">
                 <option value="ACTIVO">ACTIVO</option>
                <option value="DESACTIVADO" >DESACTIVADO</option>

                 </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Observaciones</label>
                      <textarea id="" cols="30" rows="10" class="form-control" name="observaciones"></textarea>
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