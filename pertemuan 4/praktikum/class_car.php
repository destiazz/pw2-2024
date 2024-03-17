<?php
    
    class Car {
        // property
        public $brand;
        public $color;

        // method
        function getBrand() {
            return $this->brand;
        }


   }

    // Object
    $rubicon = new Car();
    $tesla = new Car();

    // Setter
    $rubicon->brand = "Rubicon";
    $tesla->brand = "Tesla";

    // Echo 
    echo $rubicon->getBrand();
    echo '<br>';
    echo $tesla->getBrand();
    
?>