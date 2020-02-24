<?php 
require_once './vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Storage\Bucket;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

include('database.php');
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$factory = (new Factory())->withServiceAccount($serviceAccount);

$storage = $factory->createStorage();
$bucket = $storage->getBucket('socialapptest1-4f4d3.appspot.com');
foreach ($bucket->objects() as $object) {
    $data=  explode(' ',$object->name());
    echo $object->gcsUri()."\n";
    // $info = $object->info();
    // echo $object->identity()['object']."\n";
   
    // print_r($data);
    var_dump($object);
    // echo $info['location'];
    // print_r($info)."\n";
}


    
?>


<html>
<head></head>
<body>
<p><img src="https://storage.googleapis.com/download/storage/v1/b/socialapptest1-4f4d3.appspot.com/o/Screenshot%20(2).png?generation=1582015027385767&alt=media"></p>

</body>
</html>

