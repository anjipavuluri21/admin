<?php 

include("database.php");

$ref=$database->getReference('Users')
// order the reference's children by the values in the field 'height'
->orderByChild('DataRegistration')
// limits the result to the first 10 children (in this case: the 10 shortest persons)
// values for 'height')
->limitToFirst(10)
->getSnapshot();
var_dump($ref);




?>

