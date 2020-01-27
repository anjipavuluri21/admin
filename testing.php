<?php 
$conn=include("database.php");

$reference = $database->getReference('Users');
    
    $snapshot = $reference->getSnapshot();
    $value = $snapshot->getChild('iVfaAXU6i7TFbRUXv8DG3Sd67yy1')->getChild('FirstName')->getValue();
    var_dump($value);
    
?>