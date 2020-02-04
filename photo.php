<?php 
use Google\Cloud\Storage\StorageClient;

include(database.php);

$storage = new StorageClient([
    'keyFilePath' => '/path/to/key/file.json',
    'projectId' => $projectId
]);


?>