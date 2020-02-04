<?php 
include('database.php');
include('retrive.php');

    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $country=$_POST['country'];
        $uid=$_POST['uid'];

        $update_query= $database->getReference('Users')
            ->getChild($uid)
            ->update([
                 'FirstName'=> $name,
                'Email' => $email,
                'Age' =>$age,
                'Country'=>$country
            ]);
        
        // Create a key for a new post
        $newPostKey = $database->getReference('Users')->push()->getKey();
        
        $updates = [
         //    'Users/'.$newPostKey => $postData,
            'Users/'.$uid.'/'.$newPostKey => $postData,
        ];
        
       $ddd= $database->getReference() // this is the root reference
           ->update($updates);
           header('location:list_user.php');



    }
    

       
?>
