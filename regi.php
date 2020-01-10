<?php
   $conn=include("database.php");

   $data=date("Y/m/d") ;
 
   //    var_dump($data);
    $new_user = $database->getReference('Users')

    //    ->orderByChild('DataRegistration')
       ->orderByChild("Gender")
           ->equalTo("Male")
        // ->startAt($data)
       // ->endAt('2020/01/07')
    //    ->shallow()
    //    ->getSnapshot()
    //    ->numChildren();
    
    ->getSnapshot();
 var_dump($new_user);
 exit;
$query = $new_user->where('Gender', '=', Male);
// $documents = $query->documents();
var_dump($query);
    // ->getValue();
 
    // $newarray=(array)$new_user;
    
// echo count($newarray);
// print_r($new_user);
// echo "hai";

// foreach($newarray as $data1){
//  foreach((array)$data1 as $row){
//     echo $row["Age"];
//  }

// }


    

       
        

   ?>

