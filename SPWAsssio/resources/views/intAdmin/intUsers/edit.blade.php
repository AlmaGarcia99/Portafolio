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
            <li class="breadcrumb-item active">Editar usuario {{$user->name}}</li>
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
                <h3 class="card-title">Editar datos de usuario <small>  El usuario podrá cambiarlos después</small> </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/users/{{$user->slug}}" method="POST" enctype="multipart/form-data" id="registerUser">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nickname</label>
                    <input type="text" class="form-control" required id="nombre" name="nombre" placeholder="Nombre del usuario" value="{{$user->name}}" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" required id="nombre" name="email" placeholder="Email del usuario" value="{{$user->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Teléfono</label>
                    <input type="number" class="form-control" value="{{$user->profile->numero}}" required id="tel" name="tel" placeholder="Teléfono del usuario">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Sexo</label>
                      <select class="custom-select my-1 mr-sm-2" required id="sexo" name="sexo">
                         <option value="H" {{$user->profile->sexo == "H" ? 'selected':' '}}>Hombre</option>
                         <option value="M" {{$user->profile->sexo == "M" ? 'selected':' '}}>Mujer</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="nombre" name="pass" placeholder="Contraseña del usuario">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Rutina</label>
                    <input type="text" class="form-control" required id="rutina" name="rutina" value="{{$user->profile->rutina}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Asignar grupo de trabajo <small>*No es obligatorio</small></label>
                    <select class="custom-select my-1 mr-sm-2" required id="grupo" name="grupo">
                      <option value="{{$user->grupo_id}}">No cambiar de grupo</option>
                      @foreach($grupos as $grupo)
                        <option value="{{$grupo->GRUPO_ID}}">{{$grupo->GRUPO_NOMBRE}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">¿Tiene alguna enfermedad?</label>
                    <select class="custom-select my-1 mr-sm-2" id="grupo" name="enf">
                      <option value="{{$user->enfermedad_id}}">No cambiar estado de salud...</option>
                      @foreach($enfermedades as $enf)
                        <option value="{{$enf->id}}">{{$enf->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                      <label for="exampleInputPassword1">Membresia</label>
                      <select class="custom-select my-1 mr-sm-2" required id="membresia" name="membresia">
                          <option value="">Seleccione...</option>
                          <option value="Básico" {{$user->profile->tipo_membresia == "Prueba" ? 'selected':' '}}>Prueba</option>
                         <option value="Básico" {{$user->profile->tipo_membresia == "Básico" ? 'selected':' '}}>Básico</option>
                         <option value="Premium" {{$user->profile->tipo_membresia == "Premium" ? 'selected':' '}}>Premium</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Periodo</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo4" value="15 Días"
                        {{$user->profile->periodo == '15 Días' ? 'checked':' '}}>
                        <label class="form-check-label" for="inlineRadio1">15 Días</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" id="periodo5" value="1 Mes"
                        {{$user->profile->periodo == '1 Mes' ? 'checked':' '}}>
                        <label class="form-check-label" for="inlineRadio1">1 Mes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" value="Trimestral"
                          {{$user->profile->periodo == 'Trimestral' ? 'checked':' '}}>
                        <label class="form-check-label" for="inlineRadio1">Trimestral</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" value="Semestral"
                          {{$user->profile->periodo == 'Semestral' ? 'checked':' '}}>
                        <label class="form-check-label" for="inlineRadio2">Semestral</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="periodo" value="Anual"
                          {{$user->profile->periodo == 'Anual' ? 'checked':' '}}>
                        <label class="form-check-label" for="inlineRadio3">Anual</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Observaciones</label>
                      <textarea id="" cols="30" rows="10" class="form-control" name="observaciones">{{$user->profile->observaciones}}</textarea>
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