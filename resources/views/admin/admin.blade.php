<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>
@php
    $routeName = Route::currentRouteName();
    $routeName = explode('.', $routeName)[0];
@endphp

<body class="hold-transition sidebar-mini layout-fixed" id="app">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            {{-- <img class="animation__shake"
                src="{{ asset('adminlte/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="') }}60"> --}}
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">На сайт</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="{{ asset('assets/img/logo.png') }}" width="100">
                {{-- <span class="brand-text font-weight-light">TUTSHOP</span> --}}
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{-- <img
                            src="{{ asset('adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User ') }}Image"> --}}
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">ADMIN</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ $routeName === 'product' ? 'nav-item menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ $routeName === 'product' ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-house"></i>
                                <p>
                                    Товары
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('product.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Все товары</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Добавить товар</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ $routeName === 'category' ? 'nav-item menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ $routeName === 'category' ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-bag-shopping"></i>
                                <p>
                                    Категории
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('category.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Категории</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('category.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Добавить категорию</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ $routeName === 'color' ? 'nav-item menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ $routeName === 'color' ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-bag-shopping"></i>
                                <p>
                                    Цвета
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('color.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Цвета</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('color.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Добавить цвет</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ $routeName === 'size' ? 'nav-item menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ $routeName === 'size' ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-bag-shopping"></i>
                                <p>
                                    Размеры
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('size.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Размеры</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('size.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Добавить размер</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ $routeName === 'slider' ? 'nav-item menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ $routeName === 'slider' ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-bag-shopping"></i>
                                <p>
                                    Слайдер
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('slider.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Слайдеры</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('slider.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Добавить слайд</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('color.index') }}" class="nav-link">
                                <i class="nav-icon fa-solid fa-bag-shopping"></i>
                                <p>
                                    Пользователи
                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    {{-- <script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(function() {

            if ($('.select2')) {
                //Initialize Select2 Elements
                $('.select2').select2()
            }

            if ($('.select2bs4')) {
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            }

            if ($('.summernote')) {
                $('.summernote').summernote({
                    height: 200,
                });
            }

        })
    </script>

    <style>
        [class*=sidebar-dark-] {
            background: #000 !important;
        }
    </style>
</body>

</html>
