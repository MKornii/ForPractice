<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/plugins/summernote/summernote-bs4.min.css"') }}">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{ url('admin/images/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
             width="60">
    </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('page_title')</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        @include('admin.layout.header')
        @include('admin.layout.sidebar')
        @yield('content')


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        @include('admin.layout.footer')

        <!-- ./wrapper -->
    </div>
</div>

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ url('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ url('admin plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('admin/js/adminlte.js') }}"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="{{ url('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ url('admin/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ url('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ url('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
        <script src="{{ url('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <!-- ChartJS -->

        <script src="{{ url('admin/plugins/chart.js/Chart.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#summernote').summernote();
            });
        </script>
        <script>
            $(function () {
                bsCustomFileInput.init();
            });
        </script>
</body>
</html>
