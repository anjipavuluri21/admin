<?php 
include('database.php');
include('retrive.php');

    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $country=$_POST['country'];
        $ref=$_POST['ref'];

        // $data=[
        //     'FirstName'=>$name,
        //     'Age'=>$age,
        //     'Email'=>$email,
        //     'Country'=>$country
        //     ];
            
        // $pushData=$database->getReference('Users')->update($data);
       
        // header("location:list_user.php");
        $postData= $database->getReference('Users')
        ->getChild($_GET['userid'])
        ->update([
            'FirstName' =>'naga',
            'Email' => 'Srikanth.g4@gmail.com',
        ]);
    
    // Create a key for a new post
    $newPostKey = $database->getReference('Users')->push()->getKey();
    
    $updates = [
     //    'Users/'.$newPostKey => $postData,
        'Users/'.$uid.'/'.$newPostKey => $postData,
    ];
    
   $ddd= $database->getReference() // this is the root reference
       ->update($updates);
       header("location:list_user.php");


    }
    

       
?>
