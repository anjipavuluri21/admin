<?php
include("database.php");

    
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $auth = $factory->getAuth();
    $user = $auth->getUserWithEmailAndPassword($email,$pass);
    if($user){
        session_start();
        $_SESSION['user'] = true;
        header("Location:index.php");
    }   
    
}