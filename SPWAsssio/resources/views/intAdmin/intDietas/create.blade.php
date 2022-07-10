@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dietas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/diets">Listado de dietas</a></li>
            <li class="breadcrumb-item active">Registrar dieta</li>
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
                <h3 class="card-title">Registro de dieta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/diets" method="POST" id="registerDiets" name="f8" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required name="nombre" placeholder="Escriba nombre de la dieta">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" required rows="10" required placeholder="Describa la dieta" class="form-control"></textarea>
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
      $( "#registerDiets" ).validate( {
        rules: {
          nombre: {
            required: true,
            minlength: 4
          },
          descripcion: {
            required: true,
            minlength: 10
          },
          exampleFormControlSelect1: {
            required: true

          },

        },
        messages: {

          nombre: "Por favor, introduce un nombre de Dieta válido de al menos 4 carácteres",
          exampleFormControlSelect1: "Por favor selecciona una opción",
          descripcion: "Por favor, introduce una Descripción válida de al menos 10 carácteres"

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