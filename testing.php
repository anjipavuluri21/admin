<?php 
$conn=include("database.php");
$reference = $database->getReference('Users')
    
                ->orderByKey('UserID')
                ->equalTo('0BMIN0RkGWZuGVh7dkU6UjRZ0zz2')
                
                ->getSnapshot();

             var_dump($reference);
    
?>