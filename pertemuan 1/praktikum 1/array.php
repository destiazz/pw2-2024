<?php

    // $fruits = ["Mangga", "Apel", "Anggur", "Jeruk" ];
    
    // foreach ($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';
    // }

    // $dinos = [
    //      "dinoName"  => "Tricera",
    //      "dinoAge"   => 300,
    //      "isMarried" => false
    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos =[
        [
             "dinoName" => "Tricera",
             "dinoAge" => 300
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 500
        ],
        [
            "dinoName" => "Ptera",
            "dinoAge" => 250
        ],
    ];

    foreach ($dinos as $ dino) {
          echo $dino["dinoName"] . " - " .$dino["dinoAge"] . " tahun" ;
          echo '<br>';



    }

?>