<?php
    include('database.php');

    $ref=$database->getReference('Users')
                ->orderByChild('Country')
                // ->equalTo('Morocco')
                ->getSnapshot()
                ->getValue();
                // ->numChildren();
                // var_dump($ref);
// print_r(array_unique($ref));exit;
$countries = array_unique(array_column($ref, 'Country'));


// var_dump($countries);



// print_r($countries);

foreach($countries as $key=>$value){
    // echo $value."\n";
}
            $counts = [];

                foreach ($ref as $row) {
                    $country = $row['Country'];
                    $gender = $row['Gender'];
                
                    $counts[$country] = $counts[$country] ?? [];
                    $counts[$country][$gender] = $counts[$country][$gender] ?? 0;
                
                    $counts[$country][$gender]++;    
                }
                print_r($counts);
       
?>