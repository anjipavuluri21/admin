<?php 

include_once('database.php');
       
       $uid = '0BMIN0RkGWZuGVh7dkU6UjRZ0zz2';
        
       $postData= $database->getReference('Users')->getChild('OnlineStatus')->getValue();
       echo $postData;
?>