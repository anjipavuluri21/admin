<?php 

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use kreait\firebase\Auth;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$firebase = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://socialapptest1-4f4d3.firebaseio.com/')
   ->create();

$database = $firebase->getDatabase();
   //  var_dump($database);
   //  $reference = $database->getReference('TestUsers');
   //  $child=$reference->orderByChild('Gender')->getSnapshot();
   //  $key=$reference->getChildKeys();
   //  $snapshot = $reference->getSnapshot();
   //  $value = $snapshot->numChildren();
   //  $key=$snapshot->getChildKeys();
      // print_r($child); 

      // $ref=$database->getReference('Users')
      //  ->orderByChild('FirstName')
      // ->limitToFirst(10);
      //  ->getSnapshot();
      // $snapshot = $ref->getSnapshot();
      //  var_dump($ref);
   
      // ->orderByKey()
  //  ->orderByChild('Gender')
  //  ->equalTo("Male")
    // ->getSnapshot()->numChildren();
// var_dump($ref);

//defining base url
$url_details=$_SERVER['HTTP_HOST'];
$url_details.=str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);/*For Getting the project(Hosting Name)*/
$final_url='http://'.$url_details;
define('PROJECT_BASEPATH',$final_url);

?>
