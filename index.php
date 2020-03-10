<?php 
session_start();

include('database.php');

// exit;
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
  <link rel="shortcut icon" href="dist/img/web.jpg" type="image/x-icon">
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
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/web.jpg" alt="travelmates logo" height="50px" width="50px"> Travelmates 
      
      
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          
          
         <li class="nav-item">
            <a href="#" class="nav-link">     
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
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner" >
              <p style="text-align:center;">Total Users</p>
                <h3 style="text-align:center;"><?php 
                $reference = $database->getReference('Users')
                ->getSnapshot()
                ->numChildren();
                echo $reference;
                ?></h3>
                
               
                <p>Male: <?php 
                $ref=$database->getReference('Users')
                            ->orderByChild('Gender')
                            ->equalTo('Male')
                            ->getSnapshot()
                            ->numChildren();
                    echo $ref;?></p>
                <p>Female: <?php 
                $ref=$database->getReference('Users') 
                            ->orderByChild('Gender')
                            ->equalTo('Female')
                            ->getSnapshot()
                            ->numChildren();
                    echo $ref;?></p>
              </div>
             
              <div class="icon">
              <!-- <i class="fas fa-list"></i> -->
              </div>
              
              <a href="list_user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              
            </div>

          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-success"> -->
              <!-- <div class="inner"> -->
              <!-- <p style="text-align:center;">Online Users</p> -->
                <!-- <h3 style="text-align:center;">495</h3> -->

               
                <!-- <p>Male: </p> -->
                <!-- <p>Female:</p> -->
              <!-- </div> -->
              <!-- <div class="icon"> -->
                
                <!-- <i class="fas fa-signal"></i> -->
              <!-- </div> -->
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            <!-- </div> -->
          <!-- </div> -->
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <p style="text-align:center;">New Users</p>
                <h3 style="text-align:center;"><?php 
                  $data=date("Y/m/d") ;
                    //  var_dump($data);
                   $new_user = $database->getReference('Users')
                      ->orderByChild('DataRegistration')
                       ->startAt($data)
                       ->getValue();
                      // ->endAt('2020/01/07')
                      // ->getSnapshot()
                      //  ->numChildren();
                       echo count($new_user);
                       $Male_count=0;
                       $Female_count=0;
                       foreach($new_user as $key =>$value){
                           // echo $value['Gender']. "\n";
                           if($value['Gender']=='Male'){
                              $Male_count++;
                              }
                              else{
                               $Female_count++;
                              }
                    }
                        ?>
                  </h3>

                <p>Male: <?php echo $Male_count;?></p>
                <p>Female: <?php echo $Female_count;?></p>
              </div>
              <div class="icon">
                <!-- <i class="ion ion-person-add"></i> -->
              </div>
              <a href="newusers.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <p style="text-align:center;">Total Premium Users</p>
                <h3 style="text-align:center;"><?php 
                $reference = $database->getReference('Users')
                ->orderByChild('UserStatus')
                ->equalTo("1_1_1_1_0")
                ->getSnapshot()
                ->numChildren();
                // var_dump($reference);
           
                $reference1 = $database->getReference('Users')
                ->orderByChild('UserStatus')
                ->equalTo("1_1_1_0_0")
                ->getSnapshot()
                ->numChildren();
            
                $reference2 = $database->getReference('Users')
                ->orderByChild('UserStatus')
                ->equalTo("0_1_1_1_0")
                ->getSnapshot()
                ->numChildren();
            
                $reference3 = $database->getReference('Users')
                ->orderByChild('UserStatus')
                ->equalTo("0_1_1_0_0")
                ->getSnapshot()
                ->numChildren();
              
                $Total_premium_users=$reference+$reference1+$reference2+$reference3;
                
                echo "$Total_premium_users";
                
                ?></h3>

                <p>Male: <?php 
                 $male_online = $database->getReference('Users')
                 ->orderByChild('UserStatus')
                 ->equalTo("1_1_1_1_0")
                 ->getSnapshot()
                 ->numChildren();
                 
                 $male_offline = $database->getReference('Users')
                 ->orderByChild('UserStatus')
                 ->equalTo("1_1_1_0_0")
                 ->getSnapshot()
                 ->numChildren();

                 $male_count= $male_online+$male_offline;

                 echo "$male_count";
                ?></p>

                <p>Female: <?php 
                  $female_online = $database->getReference('Users')
                  ->orderByChild('UserStatus')
                  ->equalTo("0_1_1_1_0")
                  ->getSnapshot()
                  ->numChildren();
                  // var_dump($reference);
              
                  $Female_offline = $database->getReference('Users')
                  ->orderByChild('UserStatus')
                  ->equalTo("0_1_1_0_0")
                  ->getSnapshot()
                  ->numChildren();

                  $female_count= $female_online+$Female_offline;

                  echo "$female_count";

                ?></p></p>
              </div>
              <div class="icon">
                

              </div>
              <a href="premiumUsers.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
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
</script>
</body>
</html>

