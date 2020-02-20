<?php 
include('database.php');
require_once './vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Storage\Bucket;

$storage = new StorageClient();

//  var_dump($storage);

 $bucket = $storage->bucket('gs://socialapptest1-4f4d3.appspot.com');
//  $buckets = $storage->buckets($bucket);

 $buckets = $storage->buckets([
     'prefix' => 'UsersData'
 ]);

//  foreach ($buckets as $bucket) {
//      echo $bucket->name() . PHP_EOL;
//  }

//  var_dump($object);
// $reference = $database->getReference('Users')
//                 ->getSnapshot()
//                 ->numChildren();
//                 echo $reference;
$reference2 = $storage->getReference()->getChild('UsersData')->getChild('0SDLvbcygvbFDkyjBTNgimPHMHf2')->getChild('Avatar/Image/Image_Origin.jpg')
->getSnapshot();

echo $reference2;
//Firebase.Storage.StorageReference avatar_ref = Storage.RootReference.Child(AppSettings.RootUserStorageKey).Child(_request.Id).Child(AppSettings.UserAvatarKey + "/" + "Image_" + _request.PicName + ".jpg");


?>