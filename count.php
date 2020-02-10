<?php
    include('database.php');

    $ref=$database->getReference('Users')
                ->orderByChild('Country')
                // ->equalTo('Morocco')
                ->getSnapshot()
                ->getValue();
                // ->numChildren();
                // var_dump($ref);

                $counts = [];

                foreach ($ref as $row) {
                    $country = $row['Country'];
                    $gender = $row['gender'];
                    
                    $counts[$country] = $counts[$country] ?? [];
                    $counts[$country][$gender] = $counts[$country][$gender] ?? 0;
                
                    $counts[$country][$gender]++;    
                }
                print_r($counts); 
      
?>