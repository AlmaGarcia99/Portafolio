@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Usuarios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/users">Listado de usuarios</a></li>
            <li class="breadcrumb-item active">Registrar usuario</li>
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
                <h3 class="card-title">Registro de usuario <small>  El usuario podrá cambiarlos después</small> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/users" method="POST" name="f1" enctype="multipart/form-data" id="registerUser">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nickname</label>
                    <input type="text" class="form-control" required id="nombre" name="nombre" value="{{$newnickname}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">email</label>
                    <input type="email" class="form-control" required id="email" name="email" placeholder="Email del usuario">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Teléfono celular</label>
                    <input type="number" class="form-control" required id="tel" name="tel" placeholder="Teléfono del usuario">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Sexo</label>
                      <select class="custom-select my-1 mr-sm-2" required id="sexo" name="sexo">
                        <option value="">Seleccione...</option>
                        <option value="H">Hombre</option>
                        <option value="M">Mujer</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña del usuario">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Repite el Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmación de contraseña del usuario">
                  </div>
                  <div id="mensaje">
                   <p style="color:red;"></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rutina</label>
                    <input type="text" class="form-control" required id="rutina" name="rutina" placeholder="Nombre rutina">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Asignar grupo de trabajo <small>*No es obligatorio</small></label>
                    <select class="custom-select my-1 mr-sm-2" id="grupo" name="grupo">
                      <option value="">Seleccione...</option>
                      @foreach($grupos as $grupo)
                        <option value="{{$grupo->GRUPO_ID}}">{{$grupo->GRUPO_NOMBRE}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">¿Tiene alguna enfermedad?</label>
                    <select class="custom-select my-1 mr-sm-2" id="enf" name="enf">
                      <option value="">Seleccione...</option>
                      @foreach($enfermedades as $enf)
                        <option value="{{$enf->id }}">{{$enf->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Membresia</label>
                      <select class="custom-select my-1 mr-sm-2" required id="membresia" name="membresia">
                        <option value="">Seleccione...</option>
                        <option value="Prueba">Prueba</option>
                        <option value="Básico">Básico</option>
                        <option value="Premium">Premium</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Periodo</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo4" value="15 Días">
                        <label class="form-check-label" for="inlineRadio1">15 Días</label>
                      </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo5" value="1 Mes">
                        <label class="form-check-label" for="inlineRadio1">1 Mes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo1" value="Trimestral">
                        <label class="form-check-label" for="inlineRadio1">Trimestral</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo2" value="Semestral">
                        <label class="form-check-label" for="inlineRadio2">Semestral</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo3" value="Anual">
                        <label class="form-check-label" for="inlineRadio3">Anual</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Observaciones</label>
                      <textarea id="" cols="30" rows="10" class="form-control" name="observaciones"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div id="boton" class="card-footer">
                  <button type="submit"   class="btn btn-primary btn-block">Registrar</button>
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
      $( "#registerUser" ).validate( {
        rules: {
          nombre: {
            required: true,
            minlength: 2
          },
          password: {
            required: true,
            minlength: 8
          },
          confirm_password: {
            required: true,
            minlength: 8,
            equalTo: "#password"
          },
          email: {
            required: true,
            email: true
          },
          tel:{
            required: true,
            minlength:10,
            maxlength:10
          },
          sexo: "required",
          enf: "required",
          rutina: "required",
          membresia: "required",
          periodo: "required"
        },
        messages: {
          password: {
            required: "Por favor proporcione una contraseña",
            minlength: "La contraseña debe tener al menos 8 caracteres"
          },
          confirm_password: {
            required: "Por favor proporcione una contraseña",
            minlength: "La contraseña debe tener al menos 8 caracteres",
            equalTo: "Por favor ingrese la misma contraseña que arriba"
          },
          tel:{
            required: "Por favor proporcione un número celular valido",
            minlength: "Los numeros de celular deben ser de 10 digitos",
            maxlength: "Unicamente 10 digitos"
          },
          email: "Por favor, introduce una dirección de correo electrónico válida",
          sexo: "Por favor seleccione el sexo del usuario",
          enf: "Por favor seleccione el estado de salud del usuario",
          rutina: "Ingrese una rutina (texto estatico)",
          membresia: "Por favor seleccione el tipo de membresia del usuario",
          periodo: "Por favor seleccione el periodo de la membresia"
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