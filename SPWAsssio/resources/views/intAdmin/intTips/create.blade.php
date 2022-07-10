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


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de tips</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/tips" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="nombre" required name="nombre" placeholder="Escriba nombre del tip">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Descripción</label>
                                <textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80" required="">
                                ¿Qué quieres contarle al mundo?
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">imagen</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" accept="image/jpg" class="custom-file-input" required id="exampleInputFile" name="jpg">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
<script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
        <script>
        CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token()
                    ])}}",
            filebrowserUploadMethod: 'form'
            });

</script>
@endsection