@extends('layouts.user')
@section('content')

<section id="portfolio">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Orientación nutricional</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Te comento que en el programa que estas llevando a cabo actualmente no se maneja una dieta como tal, sino orientaciones nutricionales, ya que puedes comer de todo pero algunos alimentos debes de consumirlos con moderación. 
                    Una dieta es un régimen donde se establecen cantidades de determinados alimentos, muchos de los cuales tal vez no los tengas al alcance o tampoco cuentes con una báscula con que pesarlo, siendo además importante que tú quieras cambiar esos malos hábitos alimenticios que tienes.
                    Te vamos a ir dando tips que puedan adaptarse a tus necesidades y posibilidades con la intención de que logres resultados visibles, pero recuerda, lo más importante es tu salud y no hagas nada fuera de lo normal para lograr resultados más rápidos, como las dietas sin control médico,
                    uso de plásticos y cremas al hacer ejercicio, provocar vómitos, etc., ya que todo esto puede perjudicar tu salud.
                </p>
            </div>
        </div>



        <div class="row">

            @forelse(Auth::user()->dietas as $dieta)
            <div class="col-md-3">
                <a class="portfolio-item" style="background-image: url(template_user/img/botanas.jpg);">
                    <div class="details">
                        <h4>{{$dieta->titu_dieta}}</h4>
                       <span>{{$dieta->descrip_dieta}}</p></span>
                    </div>
                </a>
            </div>
            @empty
            <h1>No hay dietas asignadas</h1>
            @endforelse
        </div>
        <p>
            No te desesperes ni te des por vencido si no observas resultados en forma inmediata, ya que los primeros resultados se comienzan a observar después de 3 meses de ejercicio continuo y posteriormente es más factible lograr resultados más rápidamente.
        </p>
        RECUERDA QUE PARA CREAR UN NUEVO HÁBITO SE REQUIERE MÍNIMO DE 6 A 8 SEMANAS DE VOLUNTAD, PERSEVERANCIA Y DISCIPLINA, EL CUAL, PASADO DICHO PERIODO, SERÁ MAS FÁCIL QUE FORME PARTE DE NUESTRA VIDA DIARIA
    </div>

</section>

@endsection