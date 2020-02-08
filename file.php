<?php 
require_once './vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\Storage;
use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Storage\Filesystem\Filesystem;

$storage = new StorageClient([
    'projectId' => 'gs://socialapptest1-4f4d3.appspot.com'
]);
$bucket = $storage->bucket('gs://socialapptest1-4f4d3.appspot.com/UsersData/0SDLvbcygvbFDkyjBTNgimPHMHf2/Avatar');
$bucket->upload(
    fopen('photos/Image_Origin.jpg', 'r')
);
$object = $bucket->object('Image_Origin.jpg');
    $object->downloadToFile('photos/Image_Origin.jpg');
    
?>