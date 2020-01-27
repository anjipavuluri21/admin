<?php 

include("database.php");
// $reference = $database->getReference('Users');
$uid = '01rHXZAeDVV5nCcvzZrhojBeTOX2';

$properties = [
    'FirstName' => 'Anji'
];

$updatedUser = $auth->updateUser($uid, $properties);

$request = \Kreait\Auth\Request\UpdateUser::new()
    ->withDisplayName('Anji');

$updatedUser = $auth->updateUser($uid, $request);
   




?>

