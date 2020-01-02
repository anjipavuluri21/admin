<?php 
    $conn=include("database.php");
    $reference = $database->getReference('Users');
    
    $snapshot = $reference->getSnapshot();
    $value = $snapshot->getValue();
    // var_dump($value );
       
?>