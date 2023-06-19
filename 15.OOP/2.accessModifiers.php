<?php
        // Access Modifiers (public,protected,private)

        class Car{
            public $name;           // accessed from everywhere
            protected $color;       // accessed within the class and classes derived from that class
            private $price;         // accessed within the class
    
            public function carName($carName){
                $this->name = $carName;
            }
    
            public function carColor($carColor){
                $this->color = $carColor;
            }
    
            public function carPrice($carPrice){
                $this->price = $carPrice;
            }
    
            public function showCarColor(){         // accessed within the class
                echo $this->color;
            }
    
            public function showCarPrice(){         // accessed within the class
                echo $this->price;
            }
        }
    
        $BMW = new Car;
    
        $BMW->carName("Toyota");
        $BMW->carColor("Black");
        $BMW->carPrice("$100000");
    
        // echo $BMW->name;        // Toyota
        // echo $BMW->color;    // protected error
        // echo $BMW->price;    // private error
    
        // $BMW->showCarColor();   // Black
        // $BMW->showCarPrice();   // $100000
    
?>