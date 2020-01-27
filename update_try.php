<?php 
       include_once('database.php');
       
       $uid = '3DNSopAHmYZKAJJatMPPOtXZ2xj2';

       $postData= $database->getReference('Users')
           ->getChild($uid)
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
        

?>
       