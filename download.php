<?php
require_once './vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use kreait\firebase\Auth;

// // $storage = (new Factory())
// //     ->withDefaultStorageBucket('gs://socialapptest1-4f4d3.appspot.com')
// //     ->createStorage();
// $storage = new StorageClient();
// $bucket = $storage->bucket('gs://socialapptest1-4f4d3.appspot.com');
// $object = $bucket->object('UsersData');
// $acl = $object->acl();
// $stream = $object->downloadAsString($acl);
// // print_r($stream->getContents()) ;
// echo $string;
// // var_dump($url);

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$factory = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://socialapptest1-4f4d3.firebaseio.com/');

$storage = new StorageClient([
    'projectId' => '6EGY4iFscBPjs38CJfwDWPg6NrB2'
]);
$bucket = $storage->bucket('gs://socialapptest1-4f4d3.appspot.com/UsersData');
// $bucket->upload(
//     fopen('photos/Image_Origin.jpg', 'r')
// );
$object = $bucket->object('Image_Origin.jpg');
    $object->downloadToFile('photos/Image_Origin.jpg');
    
    var_Dump($object);

?>