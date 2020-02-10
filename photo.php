<?php 
require_once './vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Storage;
use Google\Cloud\Storage\StorageClient;


$storage = (new Factory())
    ->withDefaultStorageBucket('gs://socialapptest1-4f4d3.appspot.com')
    ->createStorage();
    $bucket = $storage->getBucket('UsersData/6EGY4iFscBPjs38CJfwDWPg6NrB2/Avatar'); 
    // $bucket->upload(
    //     fopen('photos/Image_Origin.jpg', 'r')
    // );
    $object = $bucket->object('Image_Size_1024.jpg');
    $object->downloadToFile('photos/Image_Size_1024.jpg');
        
        echo $object;

?>