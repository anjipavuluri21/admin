<?php 
include('database.php');


    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $country=$_POST['country'];
        $ref=$_POST['ref'];

        $data=[
            'FirstName'=>$name,
            'Age'=>$age,
            'Email'=>$email,
            'Country'=>$country
            ];

        $pushData=$database->getReference($ref)->update($data);
        header("location:list_user.php");


    }

?>