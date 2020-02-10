
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
    <p><img src="https://console.firebase.google.com/u/0/project/socialapptest1-4f4d3.appspot.com/storage/o/Image_Origin.jpg?alt=media&token=1745d3c2-2f26-4a79-b6f4-7c64f908bed2"></p>

    
</p>
    <p><strong>Smokes:</strong> <?php echo $smokes?></p>
</div>

    </body>
</html>