<?php 
    require_once './vendor/autoload.php';
    
    use Kreait\Firebase\Factory;
    use Google\Cloud\Storage\StorageClient;
    use Google\Cloud\Storage\Bucket;

    
    // $bucket = $factory->createStorage()->getBucket('gs://socialapptest1-4f4d3.appspot.com');
    // // print_r('$bucket');
    // $options = [
    //     'prefix' => 'gs://socialapptest1-4f4d3.appspot.com/UsersData/0SDLvbcygvbFDkyjBTNgimPHMHf2/Avatar/Image_Origin.jpg',
    // ];

    // print_r($options);
    // exit;
    
    // $objects = $bucket->objects($options);
    // foreach ($objects as $object) {
    //     echo $object->name()."\n";
    // }


    // $storage = new StorageClient();
    // $bucket = $storage->bucket('socialapptest1-4f4d3.appspot.com');
    // $info = $bucket->info();
    // print_r($bucket);


    // Enable Storage
    $storage = new StorageClient([
        'projectId' => 'socialapptest1-4f4d3'
    ]);

    
    // Reference an existing bucket.
    $bucket = $storage->bucket('gs://socialapptest1-4f4d3.appspot.com/UsersData');
    echo "<pre>";
    var_dump($bucket);
    $options = [
        'prefix' => 'gs://socialapptest1-4f4d3.appspot.com/UsersData/0SDLvbcygvbFDkyjBTNgimPHMHf2/Avatar/Image_Origin.jpg',
    ];
    
    $objects = $bucket->objects($options);
    foreach ($objects as $object) {
        echo $object->name()."\n";
    }

    // var_dump($bucket);
   



?>
