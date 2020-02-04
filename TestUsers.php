<?php 
include('database.php');
$data=date("Y/m/d") ;
 //  var_dump($data);
    $new_user = $database->getReference('Users')
                        ->orderByChild('DataRegistration')
                        ->startAt($data)
                      // ->endAt('2020/01/07')
                      
                      ->getSnapshot()
                      
                     ->numChildren();
                       echo $new_user;

        
?>