@extends('layouts.admin')
@section('content')
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detalles del usuario {{$user->name}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/users">Listado de usuarios</a></li>
              <li class="breadcrumb-item active">Detalles del usuario {{$user->name}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    	<div id="app">
    		<div class="container-fluid">
    			<!--NOTIFICACIONES-->
		        <div v-if="loading" class="alert alert-primary" role="alert">
		          <div class="spinner-grow" style="width: 2rem; height: 2rem;" role="status">
		            <span class="sr-only">Loading...</span>
		          </div>
		          @{{message}}
		        </div>
		        <!--/NOTIFICACIONES-->
		      	<div class="row">
		          <div class="col-md-3">
		          	<!-- Profile Image -->
		            <div class="card card-primary card-outline">
		              <div class="card-body box-profile">
		                <div class="text-center">
		                	@if($user->profile->foto)
		                		<img class="profile-user-img img-fluid img-circle" src="/imgusers/{{$user->profile->foto}}" alt="User profile picture">
		                	@else
		                		<img class="profile-user-img img-fluid img-circle" src="/imgusers/default.jpg" alt="User profile picture">
		                	@endif
		                </div>
		                <h3 class="profile-username text-center">{{$user->name}}</h3>
		                <p class="text-muted text-center">{{$user->profile->nombre_usu}} {{$user->profile->apellidos_usu}}</p>
		                <ul class="list-group list-group-unbordered mb-3">
		                  <li class="list-group-item">
		                    <b>Miembro desde</b> <a class="float-right">{{$user->created_at->diffForHumans()}}</a>
		                  </li>
		                  <li class="list-group-item">
		                    <b>Telefono</b> <a class="float-right">{{$user->profile->numero}}</a>
		                  </li>
		                  <li class="list-group-item">
		                    <b>Tipo membresia</b> <a class="float-right">{{$user->profile->tipo_membresia}}</a>
		                  </li>
		                  <li class="list-group-item">
		                    <b>Grupo de trabajo</b> <a class="float-right">{{$user->grupo->GRUPO_NOMBRE}}</a>
		                  </li>
		                  <li class="list-group-item">
		                    <b>Salud</b> <a class="float-right">{{$user->enfermedad->nombre}}</a>
		                  </li>
		                </ul>
		              </div>
		              <!-- /.card-body -->
		            </div>
		            <!-- /.card -->
		          </div>
		          <div class="col-md-9">
		          	<div class="card">
		              <div class="card-header p-2">
		                <ul class="nav nav-pills">
		                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Rutinas</a></li>
		                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Dieta</a></li>
		                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"></a></li>
		                </ul>
		              </div><!-- /.card-header -->
		              <div class="card-body">
		                <div class="tab-content">
		                  <div class="active tab-pane" id="activity">
		                  	<ul class="list-group">
							  <li class="list-group-item d-flex justify-content-between align-items-center" v-for="rutina in rutinas" :key="rutina.id_rutina">
							  		@{{rutina.name_rutina}}

							  		<button class="badge badge-primary badge-pill" v-on:click="obtenerEjercicios(rutina.id_rutina)"><i class="fa fa-eye" aria-hidden="true"></i></button>
							  		<button class="badge badge-danger badge-pill" v-on:click="quitarRutina(rutina.id_rutina)"><i class="fa fa-times" aria-hidden="true"></i></button>
							  </li>
							</ul>
		                  </div>
		                  <!-- /.tab-pane -->
		                  <div class="tab-pane" id="timeline">

		                  </div>
		                  <!-- /.tab-pane -->
		                  <div class="tab-pane" id="settings">
		                  </div>
		                  <!-- /.tab-pane -->
		                </div>
		                <!-- /.tab-content -->
		              </div><!-- /.card-body -->
		            </div>
		          </div>
		        </div>
		        <div class="row" >
		        	<div class="col-12">
			        	<div class="card" v-if="isOpenPanel">
			        		<div class="card-body" >
			                  <h3>Ejercicios que componen esta rutina:</h3>
			                  <hr>
			                  <div class="row">
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2" v-for="ejercicio in ejercicios">
			                      <div class="card">
			                          <div class="card-header">
			                              <div class="card-title">
			                                  @{{ejercicio.nombre_ejercicio}}
			                              </div>
			                          </div>
			                          <div class="card-body">
			                              <img :src="`/imgejercicios/${ejercicio.imagen_ejercicio}`" alt="" class="img-fluid">
			                          </div>
			                          <div class="card-footer">
			                          	<button class="btn btn-outline-secondary btn-block" v-on:click="retirarEjercicio(ejercicio.id_ejercicio)">Eliminar ejercicio</button>
			                          </div>
			                      </div>
			                    </div>
			                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
			                    	<button class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#exampleModal" v-if="ejercicios.length < 5">Agregar nuevo ejercicio</button>
			                    	<hr>
			                    	<button class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#exampleModalLabelRutina" v-if="edited">Generar nueva rutina a partir de la selccionada</button>
			                      <hr>
			                    </div>
			                  </div>
			                </div>
			        	</div>
		        	</div>
		        </div>
		        <!--Modal ejercicios-->
		        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Agrega un nuevo ejercicio</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form>
				          <div class="form-group">
				          	<label for="">Filtrar por categoría</label>
				            <select class="custom-select my-1 mr-sm-2" id="id_c" name="id_c" v-model="tipo" v-on:change="obtenerEjerciciosDB()">
			                    <option  disabled="">Seleccione...</option>
			                    <option v-for="tipo in tipos"  :value="tipo.CLASIFICA_ID">@{{tipo.CLASIFICA_NOMBRE}}</option>
			                </select>
				          </div>
				          <div class="form-group">
				            <label for="exampleInputPassword1">Seleccione ejercicio.</label>
                    		<select class="custom-select my-1 mr-sm-2" id="id_ejercicioNuevo" name="id_ejercicioNuevo" v-model="id_ejercicioNuevo" v-on:change="ejercicioSeleccionado()">
	                    		<option  disabled="">Seleccione...</option>
	                    		<option v-for="ej in ejerciciosDB" :value="ej.id_ejercicio">@{{ej.nombre_ejercicio}}</option>
                    		</select>
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" v-on:click="asignarEjercicio()">Asignar ejercicio</button>
				      </div>
				    </div>
				  </div>
				</div>
		        <!--Modal-->
		        <!--Modal rutina-->
		        <div class="modal fade" id="exampleModalLabelRutina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelRutina" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabelRutina">Agrega un nuevo ejercicio</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form>
				          <div class="form-group">
				          	<label for="exampleInputEmail1">Nombre</label>
                    		<input type="text" class="form-control" id="nombre" required name="nombre" placeholder="Escriba nombre de rutina" v-model="nombre_rutina">
				          </div>
				          <div class="form-group">
				            <label for="exampleInputPassword1">Instrucción</label>
                    		<textarea name="descripcion" id="descripcion" required cols="30" rows="10" class="form-control" v-model="instruccion_rutina"></textarea>
				          </div>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" v-on:click="generarRutinaNueva()">Editar rutina para este usuario</button>
				      </div>
				    </div>
				  </div>
				</div>
		        <!--Modal-->
		    </div>
    	</div>
    </section>
@endsection
@section('scripts')
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{asset('js/profiles.js')}}"></script>
@endsection