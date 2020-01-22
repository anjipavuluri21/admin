<?php 
       include_once('database.php');

       $uid = '28q1MCNkHOefxMATlMawg02pTRt1';
       $postData = [
           'FirstName' => 'Anji',
           'Email' => 'anji.naga1@gmail.com',
       ];
       
       // Create a key for a new post
       $newPostKey = $database->getReference('Users')->push()->getKey();
       
       $updates = [
           'posts/'.$newPostKey => $postData,
           'user-posts/'.$uid.'/'.$newPostKey => $postData,
       ];
       
      $ddd= $database->getReference() // this is the root reference
          ->update($updates);
        

?>
       