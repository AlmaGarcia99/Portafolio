@extends('layouts.admin')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .list-group{
        max-height: 300px;
        margin-bottom: 10px;
        overflow:scroll;
        -webkit-overflow-scrolling: touch;
    }
</style>
@endsection
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
                    <li class="breadcrumb-item active">Asignar rutina</li>
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
            <!--Rutinas-->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Asignar ejercicios a algún usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="porGrupo" v-model="tipo" v-on:click="seleccionarTipo()">
                                <label class="custom-control-label" for="customRadioInline1">Por grupo de trabajo</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="porUsuario" v-model="tipo" v-on:click="seleccionarTipo()">
                                <label class="custom-control-label" for="customRadioInline2">Por usuario</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="card card-info" v-if="porGrupo">
                                <div class="card-header">
                                    <h3 class="card-title">Asignar por grupo de trabajo</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Filtrar por grupo.</label>
                                        <select class="custom-select my-1 mr-sm-2" id="id_g" name="id_g" v-model="id_grupo" v-on:change="obtenerUsuarios()">
                                            <option  disabled="">Seleccione grupo...</option>
                                            <option v-for="grupo in grupos"  :value="grupo.GRUPO_ID">@{{grupo.GRUPO_NOMBRE}}</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="form-group d-none" v-if="usuarios.length>1">
                                        <label for="exampleInputPassword1">Seleccionar usuario</label>
                                        <select class="custom-select my-1 mr-sm-2" id="id_g" name="id_g" v-model="id_user">
                                            <option  disabled="">Seleccione usuario...</option>
                                            <option v-for="user in usuarios" :value="user.id">@{{user.name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-purple" v-if="porUsuario">
                                <div class="card-header">
                                    <h3 class="card-title">Asignar por usuario</h3>
                                </div>
                                <div class="card-body">
                                    <select class="custom-select my-1 mr-sm-2 js-example-basic-single" id="id_u" name="id_u" v-model="id_user">
                                        <option  disabled="">Seleccione usuario...</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">           
                            <div class="card card-purple">
                                <div class="card-header">
                                    <h3 class="card-title">Seleccionar Rutina</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">


                                        <input class="form-control form-control-sidebar" id="formulario" type="search" placeholder="Search" aria-label="Search">

                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                        <textarea class="resultado" id="resultado"></textarea>
                                </div>
                                <br>

                                <div class="list-group radio-list-group">
                                    <div class="list-group-item" v-for="rutina in rutinas">&nbsp;
                                        <label><input type="radio" name="ra" :value="rutina.id_rutina" v-model="id_rutina"><span class="list-group-item-text"><i class="fa fa-fw"></i> @{{rutina.name_rutina}}</span></label>
                                    </div>
                                </div>
                                </ul>
                            </div>
                        </div>    
                    </div>
                </div>
                <button class="btn btn-block btn-primary" v-if="id_rutina && id_user" v-on:click="asignarRutina()">Asignar rutina</button>
                <button class="btn btn-block btn-primary" v-if="id_rutina && masiva" v-on:click="asignacionMasiva()">Asignar rutina al grupo de trabajo</button>
            </div>




            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Asignar dietas a algún usuario</h3>
                </div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="card card-purple">
                                <div class="card-header">
                                    <h3 class="card-title">Seleccionar Dietas</h3>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">


                                        <input class="form-control form-control-sidebar" id="formulario" type="search" placeholder="Search" aria-label="Search">

                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                        <textarea class="resultado" id="resultado"></textarea>
                                </div>
                                <br>

                                <div class="list-group radio-list-group">
                                    <div class="list-group-item" v-for="dieta in dietas">&nbsp;
                                        <label><input type="radio" name="Dts" :value="dieta.id_dieta" v-model="dieta_id"><span class="list-group-item-text"><i class="fa fa-fw"></i> @{{dieta.titu_dieta}}</span></label>
                                    </div>
                                </div>  
                                </ul>    
                            </div>
                        </div> 
                    </div>
                </div>
                <button class="btn btn-block btn-primary" v-if="dieta_id && id_user" v-on:click="asignarDietas()">Asignar Dieta</button>
            </div>
        </div>
</div>
</section>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/asignar-rutina.js')}}"></script>
<script>
$(document).ready(function () {
    $('.js-example-basic-single').select2();
});
</script>
@endsection