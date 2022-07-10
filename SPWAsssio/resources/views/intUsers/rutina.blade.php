@extends('layouts.dashtreme')
@section('styles')
<link rel="stylesheet" href="{{asset('/css/timer.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12 d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$rutina->name_rutina}}</h3>
                <p>{{$rutina->instruction_rutina}}</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Basic modal</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Evalua tu rutina</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div style="text-align: center;">
                            <input type="image" src="{{asset('img/Excelente.png')}}" style="border: double;" height="170" width="170"/><br/>
                            Excelente
                            </div>
                        </form>
                        <form>
                            <div style="text-align: center;">
                            <input type="image" src="{{asset('img/Bueno.png')}}" style="border: double;" height="170" width="170"/><br/>
                            Bueno
                            </div>
                        </form>
                        <form>
                            <div style="text-align: center;">
                            <input type="image" src="{{asset('img/Regular.png')}}" style="border: double;" height="170" width="170"/><br/>
                            Regular
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="mb-4" style="background-color: green;" v-if="calentamiento">
                <div class="child-header">
                    <img src="{{asset('img/logo.png')}}" alt="" width="200">
                </div>
                <div class="child exercise">
                    <h2>CALENTAMIENTO</h2>
                </div>
                <div class="child gif">

                </div>
                <div class="child timer">
                </div>
                <div class="child-footer">
                    <button class="btn btn-primary" v-on:click="buttonStart()">Iniciar rutina</button>
                </div>
            </div>
            <div class="contenedor mb-4" id="contenedor" v-if="start">
                <div class="child-header">
                    <img src="{{asset('img/logo.png')}}" alt="" width="200">
                </div>
                <div class="child exercise">
                    <h2>EJERCICIO</h2>
                    <h1 id="num"></h1>
                </div>
                <div class="child gif">
                    <img src="{{asset('imgejercicios/1634263171yamato.webp')}}" alt="" id="gif">
                </div>
                <div class="child timer">
                    <h1 id="times">@{{tiempos}}</h1>
                    <h2>TIEMPOS</h2>
                </div>
                <div class="child-footer">
                    <div id="timer">
                        0:00
                    </div>
                </div>
                <div class="end">
                    <h2 id="intensidad"></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/rutina.js')}}"></script>
@endsection