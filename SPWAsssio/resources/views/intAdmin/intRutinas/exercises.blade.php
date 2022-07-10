@extends('layouts.admin')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Asignar ejercicios a la rutina: {{$rutina->name_rutina}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Asignar ejercicios</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="app" id="app">
    <section class="content">
      <div class="container-fluid">
        <!--NOTIFICACIONES-->
        <div v-if="loading" class="alert alert-primary" role="alert">
          <div class="spinner-grow" style="width: 2rem; height: 2rem;" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          @{{message}}
        </div>
        <!--/NOTIFICACIONES-->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Asignar ejercicios a la rutina</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputPassword1">Filtrar por categoría.</label>
                  <select class="custom-select my-1 mr-sm-2" id="id_c" name="id_c" v-model="tipo" v-on:change="obtenerEjercicios()">
                    <option  disabled="">Seleccione...</option>
                    <option v-for="tipo in tipos"  :value="tipo.CLASIFICA_ID">@{{tipo.CLASIFICA_NOMBRE}}</option>
                  </select>
                </div>
                <div v-if="tipo" class="row">
                  <div class="col-12">
                    <label for="exampleInputPassword1">Seleccione ejercicio.</label>
                    <select class="custom-select my-1 mr-sm-2" id="id_c" name="id_c" v-model="id_ejercicio" v-on:change="ejercicioSeleccionado()">
                    <option  disabled="">Seleccione...</option>
                    <option v-for="ej in ejercicios" :value="ej.id_ejercicio">@{{ej.nombre_ejercicio}}</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="col">
                <img src="https://cdn.dribbble.com/users/2693778/screenshots/5986999/spinner-sm.gif" alt="" class="img-fluid" v-if="exerciseLoad">
                <div class="card" v-if="id_ejercicio">
                  <div class="card-header">
                    <h3 class="card-title">Ejercicio: @{{ejercicio.nombre_ejercicio}}</h3>
                  </div>
                  <div class="card-body">
                    <img :src="`/imgejercicios/${ejercicio.imagen_ejercicio}`" alt="">
                    <hr>
                    <p class="text-center">
                      @{{ejercicio.descripcion_ejercicio}}
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-block btn-secondary">Borrar</button>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-block btn-primary" v-on:click="asignarEjercicio()">Asignar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <h3>Rutina: {{$rutina->name_rutina}}</h3>
                <hr>
                <h4>Ejercicios</h4>
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center" v-for="(exercise,index) in ejerciciosRutina" v-if="ejerciciosRutina">
                    @{{exercise.nombre_ejercicio}}
                    <button class="badge badge-primary badge-pill" v-on:click="retirarEjercicio(exercise.id)">X</button>
                  </li>
                </ul>
                <button class="btn btn-block btn-primary mt-3" v-if="ejerciciosRutina" v-on:click="insertRutinaEjercicio()">Registrar rutina</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  <script src="{{asset('js/asignar-ejercicios.js')}}"></script>
@endsection