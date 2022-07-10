@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Enfermedades</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Listado de Enfermedades</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="small-box bg-primary">
                  <div class="inner">
                    <h3>Registrar</h3>

                    <p>Nueva Enfermedad</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                  </div>
                  <a href="/enfermedades/create" class="small-box-footer">Agregar nueva enfermedad  <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="small-box bg-indigo">
                  <div class="inner">
                    <h3>{{$noEnfermedades}}</h3>

                    <p>Registrados</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
              <table class="table table-bordered" id="enfermedades">
              <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Consultar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Modal observaciones-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Observaciones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <textarea class="form-control" id="text-observaciones" rows="3" disabled=""></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('scripts')
<script>
$(document).ready( function () {
    $('#enfermedades').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
        "ajax": "/obtenerEnfermedades",
        "columns": [
            {data:'nombre'},
            {data:'status'},
            {data:'observaciones',orderable:false, searchable:false},
            {data:'show',orderable:false, searchable:false},
            {data:'edit',orderable:false, searchable:false},
            {data:'delete',orderable:false, searchable:false}
        ],
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
          "infoEmpty": "Mostrando 0 to 0 of 0 Documentos",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Registros",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        }
    });
});

$('#exampleModalCenter').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('set') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body textarea').val(recipient)
});
</script>
@endsection