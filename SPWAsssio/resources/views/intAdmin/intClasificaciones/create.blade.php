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
            <li class="breadcrumb-item"><a href="/exercises">Listado de grupos de trabajo</a></li>
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
                <h3 class="card-title">Registro de grupo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="f2" id="registerGroups" action="/clasificaciones" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Escriba nombre del grupo de trabajo">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Selecciona estatus</label>
                     <select class="form-control" id="estatus" required name="estatus">
                     <option value="ACTIVO">ACTIVO</option>
                     <option value="DESACTIVADO" >DESACTIVADO</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Observaciones</label>
                      <textarea id="" cols="30" rows="10" class="form-control" name="observaciones"></textarea>
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
      $( "#registerGroups" ).validate( {
        rules: {
          nombre: {
            required: true,
            minlength: 4
          },

        },
        messages: {

          nombre: "Por favor, introduce un nombre de grupo válido de al menos 4 carácteres"

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