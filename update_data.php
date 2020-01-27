<?php 
    include('database.php');

    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $ref=$_post['ref'];

        $data=[
            'FirstName'=>$name,
            'Age'=>$age,
            'Email'=>$email
        ];
        
        $pushData=$database->getrefer
    }


?>