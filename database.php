<?php 

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use kreait\firebase\Auth;
use Google\Cloud\Storage\StorageClient;


$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$factory = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://socialapptest1-4f4d3.firebaseio.com/');
   
$auth = $factory->createAuth();
$database = $factory->createDatabase();

$ref=$database->getReference('Users');
// var_dump($ref);
