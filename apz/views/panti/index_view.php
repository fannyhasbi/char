<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | Metaflorist</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/adminlte/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/adminlte/css/skins/skin-blue-light.min.css">

  <!-- Datatable -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/lib/datatables/jquery.dataTables.min.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>M</b>F</span>
      <span class="logo-lg"><b>META</b>FLORIST</span>
    </a>

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="active">
          <a href="<?= site_url('in'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('in/order'); ?>">
            <i class="fa fa-cart-plus"></i> <span>Order</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">4</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?= site_url('in/produk'); ?>">
            <i class="fa fa-shopping-bag"></i> <span>Produk</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $this->session->userdata('nama_panti'); ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <?php $this->load->view('panti/'. $view_name); ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y'); ?> Metaflorist.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- Datatable -->
<script src="<?= base_url(); ?>assets/lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/lib/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/lib/adminlte/js/app.min.js"></script>

<script>
$(function (){
  var x = (window.innerWidth > 768) ? false : true;
  $("#produk").DataTable({
      "scrollX": x,
      "pagingType": "numbers"
  });
});
</script>
</body>
</html>
