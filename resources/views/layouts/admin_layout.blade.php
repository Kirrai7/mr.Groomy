<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 </title>
  <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/public/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/admin/dist/css/adminlte.min.css">
 <!--  overlayScrollbars -->
  <link rel="stylesheet" href="/public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/public/admin/plugins/daterangepicker/daterangepicker.css">
 <!--  summernote -->
  <link rel="stylesheet" href="/public/admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="/public/admin/dist/img/AdminLTELogo.png" alt="" height="60" width="60">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{route('index2')}}" class="nav-link">Главная</a>
    </li>
    
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('index2')}}" class="brand-link">
    <img src="/public/admin/dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Админ-панель</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/public/admin/dist/img/house.png" class="img-circle elevation-2" alt="User Image">
    </div>

    <div class="info">
        <a href="{{route('index')}}" class="d-block">Вернуться на сайт</a>
    </div>
</div>

    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          
          <ul class="nav nav-treeview">
            
          <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                  <i class="nav-icon far fa-newspaper"></i>
                  <p>Все таблицы
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('about.index')}}" class="nav-link">
                          <p>О нас</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('contact.index')}}" class="nav-link">
                          <p>Контакты</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('gallery.index')}}" class="nav-link">
                          <p>Галерея</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('masters.index')}}" class="nav-link">
                          <p>Мастера</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('servicesCat.index')}}" class="nav-link">
                          <p>Услуги для котов</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('servicesDog.index')}}" class="nav-link">
                          <p>Услуги для собак</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('stock.index')}}" class="nav-link">
                          <p>Акции</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('rec.index')}}" class="nav-link">
                          <p>Записи в салон</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{route('booking.index')}}" class="nav-link">
                          <p>Бронирование комнат</p>
                      </a>
                  </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @yield('content')
</div>
<footer class="main-footer">
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
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
<script src="/public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/public/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/public/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/public/admin/plugins/moment/moment.min.js"></script>
<script src="/public/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/public/admin/dist/js/pages/dashboard.js"></script>
</body>
</html>
