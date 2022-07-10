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
                <h3 class="card-title">Registro de rutinas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/routines" id="registerrutina" name="f7" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required name="nombre" placeholder="Escriba nombre de rutina">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instrucción</label>
                    <textarea name="descripcion" id="descripcion" required cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Audio</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" accept="audio/*" class="custom-file-input" id="exampleInputFile" name="audio">
                        <label class="custom-file-label" for="exampleInputFile">Agrega el audio</label>
                      </div>
                    </div>
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
      $( "#registerrutina" ).validate( {
        rules: {
          nombre: {
            required: true,
            minlength: 4
          },
          descripcion: {
            required: true,
            minlength: 10
          },
          audio: {
            required: true

          },

        },
        messages: {

          nombre: "Por favor, introduce un nombre de Rutina válido de al menos 4 carácteres",
          audio: "Por favor carga un archivo de audio",
          descripcion: "Por favor, introduce una Instrucción válida de al menos 10 carácteres"

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