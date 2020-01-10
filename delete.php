<?php 

include('database.php');

$reference = $database->getReference('Users');

if(isset($_GET['KEY']))
{
    $database->getReference('Users/'.$_GET['key'])->remove();
    header("location:list_user.php");
}

?>