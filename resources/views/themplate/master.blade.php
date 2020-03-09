<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  @section('js')

  @show

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/fontawesome-free/css/all.min.css') !!}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') !!}">

  <script data-ad-client="ca-pub-5668235440633694" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/jqvmap/jqvmap.min.css') !!}"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/dist/css/adminlte.min.css') !!}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') !!}">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/daterangepicker/daterangepicker.css') !!}"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/summernote/summernote-bs4.css') !!}"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



@include('themplate.sidebarfix')

<div class="content-wrapper">
        <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>@yield('menu')</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="/">Home</a></li>
                      <li class="breadcrumb-item active">@yield('menu')</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
        <!-- Content Wrapper. Contains page content -->
<section class="content">

<div class="row">
    @yield('content')
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->

</div>
<!-- End Content Wrapper. Contains page content -->


@include('themplate.footer')



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{!! asset('assets/adminlte/plugins/jquery/jquery.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="{!! asset('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js') !!}"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="{!! asset('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- ChartJS
<script src="{!! asset('assets/adminlte/plugins/chart.js/Chart.min.js') !!}"></script> -->
<!-- Sparkline
<script src="{!! asset('assets/adminlte/plugins/sparklines/sparkline.js') !!}"></script> -->
<!-- JQVMap
<script src="{!! asset('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js') !!}"></script> -->
<!-- <script src="{!! asset('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="{!! asset('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js') !!}"></script> -->
<!-- daterangepicker -->
<!-- <script src="{!! asset('assets/adminlte/plugins/moment/moment.min.js') !!}"></script>
<script src="{!! asset('assets/adminlte/plugins/daterangepicker/daterangepicker.js') !!}"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="{!! asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
<!-- Summernote
<script src="{!! asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js') !!}"></script> -->
<!-- overlayScrollbars -->
<script src="{!! asset('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
<!-- assets/adminlte App -->
<script src="{!! asset('assets/adminlte/dist/js/adminlte.js') !!}"></script>
<!-- assets/adminlte dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('assets/adminlte/dist/js/pages/dashboard.js') !!}"></script>
<!-- assets/adminlte for demo purposes -->
<script src="{!! asset('assets/adminlte/dist/js/demo.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('assets/adminlte/dist/js/adminlte.min.js') !!}"></script>

@section('js2')

@show


</script>
</body>
</html>
