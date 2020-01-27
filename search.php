<?php
$url_details=$_SERVER['HTTP_HOST'];
$url_details.=str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);/*For Getting the project(Hosting Name)*/
 $final_url='http://'.$url_details;
 define('PROJECT_BASEPATH',$final_url);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Travel Mates | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="dist/img/travelmates.png" alt="travelmates logo" 
           style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         <li class="nav-item">
            <a href="<?php echo PROJECT_BASEPATH;?>index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo PROJECT_BASEPATH;?>list_user.php" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                List User
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo PROJECT_BASEPATH;?>search.php" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>Search User</p>
            </a>
          </li>
         
         
          <li class="nav-item">
            <a href="<?php echo PROJECT_BASEPATH;?>country.php" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>CountryWise</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo PROJECT_BASEPATH;?>logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Search User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
 <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-12">


                            <div class="card">
                                <div class="card-header">

                                    <h3 class="card-title">Search User</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Country</th>
                                                <th>Email</th>
                                                <th>Registration Date</th>
                                                <th>Premium User</th>
                                                <th>View Profile</th>
                                                <th>Edit Profile</th>
                                                <th>Block Profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                             <tr>
                                                <td>1</td>
                                                <td>2546</td>
                                                <td>Sara</td>
                                                <td>female</td>
                                                <td>20</td>
                                                <td>india</td>
                                                <td>abce@gmail.com</td>
                                                <td>15-11-2019</td>
                                                <td>NA</td>
                                                <td><a href="#">View</a></td>
                                                
                                                <td><a href="#">Edit</a></td>
                                                <td><select style="border-radius: 20px;">
                                                      <option value="block">Block</option>
                                                      <option value="unblock">Unblock</option>
                                                    </select></td>
                                            </tr>
                                           
                                           
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
      
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Timuz Solutions</a>.</strong>
    All rights reserved. 
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
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
<script src="<?php echo PROJECT_BASEPATH;?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo PROJECT_BASEPATH;?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/moment/moment.min.js"></script>
<script src="<?php echo PROJECT_BASEPATH;?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo PROJECT_BASEPATH;?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo PROJECT_BASEPATH;?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo PROJECT_BASEPATH;?>dist/js/demo.js"></script>
<script src="<?php echo PROJECT_BASEPATH;?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo PROJECT_BASEPATH;?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo PROJECT_BASEPATH;?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo PROJECT_BASEPATH;?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo PROJECT_BASEPATH;?>dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</body>
</html>
