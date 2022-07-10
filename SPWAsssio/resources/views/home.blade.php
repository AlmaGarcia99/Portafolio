@extends('layouts.admin')

@section('content')
 
<section class="content">
    <div class="container-fluid">   
        <!-- Small boxes (Stat box) -->
        <div class="row mt-4">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Nuevas ordenes</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Porcentaje</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Usuarios registrados</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Visitantes</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-o" aria-hidden="true"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row mt-3">
          <div class="col-xs-12 col-sm-12 col-md-3">
            
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="callout callout-info">
                <h5>Asistente para registro de rutinas</h5>

                <a href="/routines/create"><p>Haz click aquí</p></a>
              </div>
          </div>
        </div>
    </div>
</section>
@endsection
