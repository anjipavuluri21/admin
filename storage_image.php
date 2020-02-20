<?php 
session_start();
include('database.php');
$url_details=$_SERVER['HTTP_HOST'];
$url_details.=str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);/*For Getting the project(Hosting Name)*/
 $final_url='http://'.$url_details;
 define('PROJECT_BASEPATH',$final_url);

// echo $_SESSION["email"];
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
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Content Wrapper. Contains page content -->
  
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use-->
     <script src="https://firebase.google.com/docs/web/setup#available-libraries"></script> 
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script> 
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-analytics.js"></script> 

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBWMk06jEJkgLx4FGFgLk0L10WHWb9GmAU",
    authDomain: "socialapptest1-4f4d3.firebaseapp.com",
    databaseURL: "https://socialapptest1-4f4d3.firebaseio.com",
    projectId: "socialapptest1-4f4d3",
    storageBucket: "socialapptest1-4f4d3.appspot.com",
    messagingSenderId: "468383950929",
    appId: "1:468383950929:web:9c950e832533fe19fdb070",
    measurementId: "G-6H06NFNH5Y"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  var storage = firebase.storage();
</script>
<?php 
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Google\Cloud\Storage\Storage;
use Google\Cloud\Storage\StorageClient;
$storage = new StorageClient([
    'projectId' => 'socialapptest1-4f4d3.appspot.com'
]);
// print_r($storage);
?>

</body>
</html>

