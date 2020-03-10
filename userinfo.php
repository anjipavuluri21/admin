
<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="<?php echo PROJECT_BASEPATH;?>dist/css/adminlte.css">
    
  
</script> 
    </head>
    <body>
    <?php 
    include('database.php');
    // echo $_GET['userid'];
    $reference = $database->getReference('Users');
    $snapshot = $reference->getSnapshot();
    $first_name = $snapshot->getChild($_GET['userid'])->getChild('FirstName')->getValue();
    $age = $snapshot->getChild($_GET['userid'])->getChild('Age')->getValue();
    $country = $snapshot->getChild($_GET['userid'])->getChild('Country')->getValue();
    $email = $snapshot->getChild($_GET['userid'])->getChild('Email')->getValue();
    $about= $snapshot->getChild($_GET['userid'])->getChild('AboutMe')->getValue();
    $bodytype= $snapshot->getChild($_GET['userid'])->getChild('BodyType')->getValue();
    $DataRegistration= $snapshot->getChild($_GET['userid'])->getChild('DataRegistration')->getValue();
    $CountriesVisitList= $snapshot->getChild($_GET['userid'])->getChild('CountriesVisitList')->getValue();
    $DOB= $snapshot->getChild($_GET['userid'])->getChild('DOB')->getValue();
    $Drinks= $snapshot->getChild($_GET['userid'])->getChild('Drinks')->getValue();
    $Education= $snapshot->getChild($_GET['userid'])->getChild('Education')->getValue();
    $gender= $snapshot->getChild($_GET['userid'])->getChild('Gender')->getValue();
    $Premium= $snapshot->getChild($_GET['userid'])->getChild('Premium')->getValue();
    $status= $snapshot->getChild($_GET['userid'])->getChild('Status')->getValue();
    $smokes= $snapshot->getChild($_GET['userid'])->getChild('Smokes')->getValue();
?>  
    <div class="profile_list">
    <p><strong>Name:</strong> <?php echo $first_name;?></p>
    <p><strong>Age:</strong> <?php echo $age;?></p>
    <p><strong>Country:</strong> <?php echo $country;?></p>
    <p><strong>Email:</strong> <?php echo $email;?></p>
    <p><strong>About Me:</strong> <?php echo $about;?></p>
    <p><strong>Body Type:</strong><?php echo $bodytype;?></p>
    <p><strong>Countre Visit List:</strong> <?php echo $CountriesVisitList;?></p>
    <p><strong>Data Registration:</strong> <?php echo $DataRegistration;?></p>
    <p><strong>Date of Borth:</strong> <?php echo $DOB;?></p>
    <p><strong>Drinks:</strong> <?php echo $Drinks;?></p>
    <p><strong>Education:</strong> <?php echo $Education;?></p>
    <p><strong>Gender:</strong> <?php echo $gender;?></p>
    <p><strong>Premium:</strong> <?php echo $Premium;?></p>
    <p><strong>Status:</strong> <?php echo $status;?>
    <p><strong>Smokes:</strong> <?php echo $smokes?></p>

    <?php 
require_once './vendor/autoload.php';

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Storage\Bucket;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

//include('database.php');
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/secret/socialapptest1-4f4d3-5d4d7d344d5b.json');

$factory = (new Factory())->withServiceAccount($serviceAccount);

$storage = $factory->createStorage();
$bucket = $storage->getBucket('socialapptest1-4f4d3.appspot.com');
//print_r($bucket->objects());exit;
foreach ($bucket->objects() as $object) {
    $data=  explode(' ',$object->name());
    $object->gcsUri()."\n";
    $info = $object->info();
   
    $info['userid_from_img']=explode('/',$info['id'])[2];
    //print_r($info);

    $search_result=array_search($_GET['userid'],$info, true);

    //echo  $search_result;
    //echo $userid_from_img .'image id';
    //echo $_GET['userid'] .'user id';
    //exit;
    if($search_result != "" && $search_result != FALSE){
       $img_path=$info['mediaLink'];
       ?>
      
    <p>
    <img src="<?php echo $img_path;?>" width="100" height="100"/>
    </p>
    <?php
    }else{
        $img_path="";
    }
    
}
?>
    </body>
</html>