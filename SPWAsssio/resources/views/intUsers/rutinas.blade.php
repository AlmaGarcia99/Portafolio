@extends('layouts.dashtreme')
@section('styles')
<link rel="stylesheet" href="{{asset('/css/spasssio.css')}}">
<link rel="stylesheet" type="text/css" href="../../../public/css/app.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section('content')
<div id="preloader"></div>
<div class="titulo">
    <h3>Tú Spasssio para ponerte en forma</h3>
</div>

<!-- Inician tarjetas-->

<h6 class="mb-0 text-uppercase ">Progreso Mensual de tus rutinas</h6><hr>
<h6 class="mb-0 text-uppercase" align="center">Coronas Acumuladas: &#9819; 8</h6>

                <hr/>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                    
<!-- Inicio tarjeta 1-->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">05/05/2022 - 05/06/2022</h6>
                                <p class="card-text"> 
      <!-- Texto de la tarjeta 1-->

        <div class="row">
            @forelse(Auth::user()->rutinas as $rutina)
                <div class="col-xs-6 col-sm-6 justify-content-center">
                    <a href="/rutina/{{$rutina->slug}}">
                        <div class="ejercicio">
                            <img src="{{asset('img/icon-cardio.png')}}" alt="">
                        </div>
                    </a>
                    <div class="titulo-ejercicio justify-content-center" >
                        {{$rutina->name_rutina}}
                    </div>
                </div>
            @empty
            <div class="col-xs-12 col-sm-12 justify-content-center mt-4">
                <h2>Aún no te asignan rutina</h2>
            </div>
            @endforelse
        </div>
        <!-- Fin Texto de la tarjeta-->
              
              <!-- ICoronas -->
              <div class="col-xs-12">
                     <form>
                      <p class="clasificacion">
                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                        --><h2><label for="radio1">&#9819;</label><!--
                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                        --><label for="radio2">&#9819;</label><!--
                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                        --><label for="radio3">&#9819;</label><!--
                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                        --><label for="radio4">&#9819;</label><!--
                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                        --><label for="radio5">&#9819;</label></h2>
                      </p>
                    </form>
                    
                </div>
                  <!-- FINICoronas -->

               <!-- grafico-->

                <div class="eje">
                        <div style="height: 290px;">
                            <canvas id="myChart" ></canvas>
                        </div>
                    </div>

                <!-- Fin gráfico-->
                     </p> 

                            </div>
                        </div>
                    </div>

<!-- Fin tarjeta 1-->





                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">15/06/2022-15/07/2022</h6>
                                <p class="card-text">
                                    

         <div class="row">
            @forelse(Auth::user()->rutinas as $rutina)
                <div class="col-xs-6 col-sm-6 justify-content-center">
                    <a href="/rutina/{{$rutina->slug}}">
                        <div class="ejercicio">
                            <img src="{{asset('img/icon-cardio.png')}}" alt="">
                        </div>
                    </a>
                    <div class="titulo-ejercicio justify-content-center" >
                        {{$rutina->name_rutina}}
                    </div>
                </div>
            @empty
            <div class="col-xs-12 col-sm-12 justify-content-center mt-4">
                <h2>Aún no te asignan rutina</h2>
            </div>
            @endforelse
        </div>
              

              <div class="col-xs-12">
                     <form>
                      <p class="clasificacion">
                        <input id="radio1" type="radio" name="estrellas" value="5"><!--
                        --><h2><label for="radio1">&#9819;</label><!--
                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                        --><label for="radio2">&#9819;</label><!--
                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                        --><label for="radio3">&#9819;</label><!--
                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                        -->
                      </p>
                    </form>
                    
                </div>


                <div class="eje">
                        <div style="height: 290px;">
                            <canvas id="myChart1" ></canvas>
                        </div>
                    </div>

                                </p> 
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
 <!--Terminan tarjetas-->
                

<!--  -->




@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/rutinaUser.js')}}"></script>

<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
        datasets: [{
            label: 'Progreso',
            data: [3, 8, 10, 5],
            backgroundColor: [
                'orange',
                'green',
                'blue',
                'yellow'

            ],
            borderColor: [
                'black',
                'black',
                'black',
                'black'

            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false

    }
});

const ctx1 = document.getElementById('myChart1').getContext('2d');
const myChart1 = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
        datasets: [{
            label: 'Progreso',
            data: [6, 8, 9, 0],
            backgroundColor: [

                'yellow',
                'green',
                'blue',
                'yellow'



            ],
            borderColor: [
                'black',
                'black',
                'black',
                'black'

            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false

    }
});

</script>
<style type="text/css">

    #form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}



.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
</style>
@endsection