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
                <h3 class="card-title">Registro de ejercicio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/exercises" id="registerejercicios" name="f6" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required name="nombre" placeholder="Escriba nombre del ejercicio">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" required cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">GIF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" accept="image/gif" id="gif" class="custom-file-input" required id="exampleInputFile" name="gif">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Clasificacion</label>
                    <select class="custom-select my-1 mr-sm-2" id="grupo" name="id_clasificacion">
                      <option value="1">Seleccione...</option>
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
@section('scripts')
<script src="{{asset('validators/jquery-1.11.1.js')}}"></script>
<script src="{{asset('validators/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
    $( document ).ready( function () {
      $( "#registerejercicios" ).validate( {
        rules: {
          nombre: {
            required: true,
            minlength: 4
          },
          descripcion: {
            required: true,
            minlength: 10
          },
          gif: {
            required: true

          },

        },
        messages: {

          nombre: "Por favor, introduce un nombre de Ejercicio válido de al menos 4 carácteres",
          gif: "Por favor carga un archivo en formato Gif",
          descripcion: "Por favor, introduce una descripción válida de al menos 10 carácteres"

        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );
          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      } );
    } );
  </script>
@endsection