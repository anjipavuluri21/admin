<?php 
    $conn=include("database.php");
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
    
    var_dump($Total_premium_users);
  


  

   



?>