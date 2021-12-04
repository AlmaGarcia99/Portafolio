@extends('layouts.login')

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('login_estilos/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <center>
                <img src="login_estilos/images/logo.png" width="250" height="120">
            </center>
            <center>El mejor Spasssio para ejercitarte ... tu hogar</center>
            <span class="login100-form-title p-b-49">
                Bienvenidos
            </span>
            <div class="card">
                <div class="card-body login-card-body" style="background-image: url('login_estilos/images/bg-01.jpg');">
                    <p class="login-box-msg">Formulario para Iniciar Sesion clientes</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-right p-t-8 p-b-31">
                            <a href="#" onclick="AbrirModalRestablecer()">
                                Olvidaste la contrase&ntilde;a?
                            </a>
                        </div>
                        <div class="row">
                            <!-- /.col -->

                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>

                            <!-- /.col -->
                        </div>
                        <center>¿A&uacute;n no te has registrado?</center>

                        <center>!Que esperas para tener un mejor estilo de vida¡</center><br>
                       
                        <center>
                       <a href="https://api.whatsapp.com/send?phone=5215512583151&text=Hola%20Buen%20día" class="btn alert-success">Contactanos para tu registro</a>
                        </center>
                    </form>
                </div>



                <div id="dropDownSelect1"></div>


                <div class="modal fade" id="modal_restablecer_contra" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><b>Restablecer contrase&ntilde;a</b></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" style="text-align:left;">
                                <div class="col-lg-12">
                                    <label for=""><b>Ingrese email</b></label>
                                    <input type="text" class="form-control" id="txt_email" placeholder="Ingrese Email"><br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" onclick="Restablecer_Contra()"><i class="fa fa-check"><b>&nbsp;Enviar</b></i></button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"><b>&nbsp;Cerrar</b></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
