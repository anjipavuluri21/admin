<?php 
require_once './vendor/autoload.php';
use Kreait\Firebase\Factory;


$storage = (new Factory())
    ->withDefaultStorageBucket('gs://socialapptest1-4f4d3.appspot.com')
    ->createStorage();
    $bucket = $storage->getBucket('gs://socialapptest1-4f4d3.appspot.com/UsersData/6EGY4iFscBPjs38CJfwDWPg6NrB2/Avatar/Image_Origin.jpg');
    print_r($bucket);

?>