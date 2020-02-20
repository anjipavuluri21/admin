<?php 
require_once './vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Storage\Bucket;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$factory = (new Factory())->withServiceAccount($serviceAccount);

$storage = $factory->createStorage();
$bucket = $storage->getBucket('socialapptest1-4f4d3.appspot.com');

foreach ($bucket->objects() as $object) {
    var_dump($object->name() ."\n");
    // var_dump($object);
}


    
?>


   
