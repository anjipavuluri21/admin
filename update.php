<?php 

include("retrive.php");


//defining base url
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
  <title>Travel Mates | Update</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/web.jpg" alt="travelmates logo" height="50px" width="50px">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          
          
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
            <a href="<?php echo PROJECT_BASEPATH;?>login.php" class="nav-link">
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
            <h1 class="m-0 text-dark">Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

   <section class="content">
       <div class="container-fluid">
    <?php 
    
    // echo $_GET['userid'];
    $reference = $database->getReference('Users');
    $snapshot = $reference->getSnapshot();
    $first_name = $snapshot->getChild($_GET['userid'])->getChild('FirstName')->getValue();
    $age = $snapshot->getChild($_GET['userid'])->getChild('Age')->getValue();
    $country = $snapshot->getChild($_GET['userid'])->getChild('Country')->getValue();
    $email = $snapshot->getChild($_GET['userid'])->getChild('Email')->getValue();
    
    ?>   
  <form action="user_update.php" method="post">
    <h2>Update User</h2>
    <div class="row">
      <div class=col-md-3>
      
        <div class="form-group">
          <label for="first">Name</label>
          <!-- <input type="text" name="uid" class="form-control" placeholder="" id="first" value="<?php echo $_GET['userid'];?>"> -->
          <input type="text" name="name" class="form-control" placeholder="" id="first" value="<?php echo $first_name;?>">
  
      </div>
        
        <div class="form-group">
          <label for="last">Age</label>
          <input type="text" name="age" class="form-control" placeholder="" id="last" value="<?php echo $age;?>">
     
      </div>
    
        <div class="form-group">
          <label for="company">Country</label>
          <input type="text" name="country" class="form-control" placeholder="" id="company" value="<?php echo $country;?>">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="tel" name="email" class="form-control" id="phone" placeholder="" value="<?php echo $email;?>">
        </div>

        <div class="form-group">
          <label for="about">AboutMe</label>
          <input type="tel" name="about" class="form-control" id="phone" placeholder="" value="<?php echo $snapshot->getChild($_GET['userid'])->getChild('AboutMe')->getValue();?>">
        </div>

        <div class="form-group">
          <label for="smoke">Smoke</label>
          <input type="tel" name="smokes" class="form-control" id="phone" placeholder="" value="<?php echo $snapshot->getChild($_GET['userid'])->getChild('Smokes')->getValue();?>">
        </div>
        <div class="form-group">
          <label for="countryvistedlist">Country Visited List</label>
          <input type="tel" name="countryvistedlist" class="form-control" id="phone" placeholder="" value="<?php echo $snapshot->getChild($_GET['userid'])->getChild('CountriesVisitList')->getValue();?>">
        </div>
       
        <div class="form-group">
         
          <input type="hidden" name="uid" class="form-control" id="hidden" placeholder="hidden" value="<?php echo $_GET['userid'];?>">
        </div>
   
    </div>
  </div>
    <!--  row   -->

    <button type="update" name="update" class="btn btn-primary">Submit</button>
  </form>
</div>
  </section>

    
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
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
</script>
</body>
</html>

