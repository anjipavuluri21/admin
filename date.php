<?php 
    include('database.php');
    // $data=date("Y/m/d") ;
    // $seconds = $data / 1000;
    // echo date("d-m-Y", $seconds);

    
 //  var_dump($data);
    $new_user = $database->getReference('Users')
                        ->orderByChild('LastActivity')
                       
                         ->getValue();

    var_dump($new_user);
      
?>