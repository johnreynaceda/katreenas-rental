<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KATREENAS-RENTAL</title>
        <link rel="shortcut icon" href="{{asset('images/icon.jpg')}}" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('adminlte3/dist/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/summernote/summernote-bs4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
        {{-- <link rel="stylesheet" href="{{ asset('adminlte3/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}"> --}}
        
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
        
          <!-- Navbar -->
          @include('layouts.partials.navbar')
        
          @include('layouts.partials.sidebar')
        
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
              
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="https://adminlte.io">KATREENA'S RENTAL</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
             
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
        <script src="{{ asset('adminlte3/plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('adminlte3/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('adminlte3/plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('adminlte3/plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('adminlte3/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('adminlte3/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('adminlte3/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('adminlte3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('adminlte3/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('adminlte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte3/dist/js/adminlte.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('adminlte3/dist/js/demo.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('adinlte3/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('adminlte3/plugins/jquery-validation/additional-methods.min.js') }}"></script>
        {{-- <script src="{{ asset('adminlte3/plugins/sweetalert2/sweetalert2.min.js') }}"></script> --}}
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('adminlte3/dist/js/pages/dashboard.js') }}"></script>
       <script src=" https://printjs-4de6.kxcdn.com/print.min.js"></script>
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
        </script>
       
        <x-livewire-alert::scripts />
        </body>
</html>
