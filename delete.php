<?php 

include('database.php');
$reference = $database->getReference('Users');
if(isset($_GET['userid']))
{
    $database->getReference('Users/'.$_GET['userid'])->remove();
    header("location:list_user.php");
}

?>