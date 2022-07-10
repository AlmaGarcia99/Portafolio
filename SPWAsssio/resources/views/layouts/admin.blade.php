<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SPAsssio | Panel de control</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('template_adm/dist/css/adminlte.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/daterangepicker/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/summernote/summernote-bs4.min.css')}}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('template_adm/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('img/256x256_logo.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark navbar-purple">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/home" class="nav-link">Panel de control</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Soporte</a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar elevation-4 sidebar-light-fuchsia">
                <!-- Brand Logo -->
                <a href="/home" class="brand-link">
                    <img src="{{asset('img/256x256_logo.png')}}" alt="SPASSSio" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">SPAsssio</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{asset('img/256x256_logo.png')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Admin</a>
                        </div>
                    </div>
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--AQUÍ AGREGUEN SUS ACCESOS-->
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <!--COPIEN DESDE AQUI-->
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <p>
                                        Usuarios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/users" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="/inactive-users" class="nav-link">
                                      <i class="fa fa-plus" aria-hidden="true"></i>
                                      <p>Usuarios dados de baja</p>
                                    </a>
                                  </li>
                                    <li class="nav-item">
                                        <a href="/users/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar nuevo usuarios</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <p>
                                        Grupos de trabajo
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/clasificaciones" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de grupos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/clasificaciones/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar nuevo grupo</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                    <p>
                                        Enfermedades
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/enfermedades" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de enfermedades</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/enfermedades/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar nueva enfermedad</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--COPIEN DESDE AQUI-->
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                    <p>
                                        Clasificación de Ejercicios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/ClassifyE" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de Clasificaciones</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/ClassifyE/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar nueva clasificación</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-grav" aria-hidden="true"></i>
                                    <p>
                                        Ejercicios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/exercises" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de ejercicios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/exercises/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar nuevo ejercicio</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--HASTA AQUÍ-->
                            <!--COPIEN DESDE AQUI-->
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 5C10.89 5 10 5.89 10 7S10.89 9 12 9 14 8.11 14 7 13.11 5 12 5M22 1V6H20V4H4V6H2V1H4V3H20V1H22M15 11.26V23H13V18H11V23H9V11.26C6.93 10.17 5.5 8 5.5 5.5L5.5 5H7.5L7.5 5.5C7.5 8 9.5 10 12 10S16.5 8 16.5 5.5L16.5 5H18.5L18.5 5.5C18.5 8 17.07 10.17 15 11.26Z" />
                                    </svg>
                                    <p>
                                        Rutinas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/routines" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de rutinas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/routines/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar nueva rutina</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/asignar-rutinas" class="nav-link">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            <p>Asignar Rutinas</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--COPIEN DESDE AQUI-->
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    <p>
                                        Dietas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/diets" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de Dietas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/diets/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar una nueva Dieta</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--COPIEN DESDE AQUI-->
                            <li class="nav-item menu-close">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                    <p>
                                        Tips
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/tips" class="nav-link active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                            <p>Listado de Tips</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/tips/create" class="nav-link">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <p>Registrar un nuevo tip</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!--Content-->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!--/.Content-->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>{{ auth()->user()->name }}</h5>
                    <p>¿Desea cerrar sesión?</p>
                    <ul class="nav nav-pills nav-sidebar flex-column">
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <button class="btn btn-block btn-primary"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2021 Spasssio.</strong> Todos los derechos reservados.
            </footer>
        </div>
        <!-- jQuery -->
        <script src="{{asset('template_adm/plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('template_adm/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
                                      $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('template_adm/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('template_adm/plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('template_adm/plugins/sparklines/sparkline.js')}}"></script>
        <!-- JQVMap -->
        @include('sweetalert::alert')
        <!-- jQuery Knob Chart -->
        <script src="{{asset('template_adm/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('template_adm/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('template_adm/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('template_adm/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('template_adm/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('template_adm/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('template_adm/dist/js/adminlte.js')}}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{asset('template_adm/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('template_adm/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        @yield('scripts')
    </body>
</html>