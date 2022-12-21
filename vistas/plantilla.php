<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comercial Gerardo</title>

  <link rel="shortcut icon" href="vistas/assets/dist/img/Logo.png" type="image/x-icon">


  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Jquery CSS -->
  <link rel="stylesheet" href="vistas/assets/plugins/jquery-ui/css/jquery-ui.css">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- summernote -->
  <script src="vistas/assets/plugins/chart.js/Chart.min.js "></script>
  <link rel="stylesheet" href="assets/dist/css/plantilla2.css">
  <!--ESTILOS FORZADOS-->
  <style>
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
      color: white !important;
      background: #007bff !important;
      font-weight: bold !important;
    }

    table.dataTable tbody td {
      white-space: nowrap !important;
      font-size: 13px !important;
    }

    #tbl_productos thead th {
      white-space: nowrap !important;
    }

    .addNewRecord {
      background-color: #198754 !important;
      color: white !important;
    }

    .buttons-excel {
      background-color: #0d6efd !important;
      color: white !important;
    }

    .buttons-print {
      background-color: #ffc107 !important;
      color: white !important;
    }

    .dt-button {
      padding-top: 5px !important;
      padding-bottom: 5px !important;
    }
  </style>
  <!--FIN ESTILOS FORZADOS-->
</head>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">

<!-- REQUIRED SCRIPTS -->
<!-- SweetAlert2 -->
<script src="vistas/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- JQUERY UI -->
<script src="vistas/assets/plugins/jquery-ui/js/jquery-ui.js"></script>

<!-- JS Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
<!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


<!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/assets/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php

    require_once "vistas/modulos/navbar.php";
    require_once "vistas/modulos/aside.php";

    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <?php

      include "vistas/dashboard.php"

      ?>

    </div>
    <!-- /.content-wrapper -->

    <?php

    require_once "vistas/modulos/footer.php";

    ?>

  </div>
  <!-- ./wrapper -->

  <script>
    function CargarContenido(pagina_php, contenedor) {
      $("." + contenedor).load(pagina_php);
    }
  </script>

</body>

</html>