<?php 
       include_once('database.php');
       
       $uid = '0BMIN0RkGWZuGVh7dkU6UjRZ0zz2';
        
       $postData= $database->getReference('Users')
           ->getChild($uid)
           ->update([
                
               'online_status' => '100',
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
       