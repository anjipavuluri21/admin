<?php 

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// use kreait\firebase\Auth;

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$factory = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://socialapptest1-4f4d3.firebaseio.com/');

$auth = $factory->createAuth();
// $database = $factory->createDatabase();
$database = $auth->getDatabase();

// database accessing 
$reference= $auth->getReference('Users');
$reference1= $auth->getReference('Users')->shallow()->getSnapshot();
// var_dump($reference1);

// snapshot for the reference
// $snapshot=$reference->getSnapshot();


// accessing the direct value
// $value=$snapshot->getValue();

// snapshot for the specified relative path

// $child=$reference->getChild('01rHXZAeDVV5nCcvzZrhojBeTOX2')->getChildKeys()[1];
// var_dump($child);

// order by key
$key= $auth->getReference('Users')->orderByKey()->getSnapshot();
// var_dump($key);

// order by Value

// $val=$database->getReference('Users')

//                 ->orderByValue()
//                 ->getSnapshot();
// var_dump($val);
// update specific user
$uid = '01rHXZAeDVV5nCcvzZrhojBeTOX2';
$properties = [
    'FirstName' => 'anji'
];

$updatedUser = $auth->updateUser($uid, $properties);

$request = \Kreait\Auth\Request\updateUser::new()
    ->withDisplayName('anji');

$updatedUser = $auth->updateUser($uid, $request);












?>
