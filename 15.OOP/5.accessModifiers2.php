<?php
    class Fruit{
        public $name;
        protected $color;   // accessed within the class and classes derived from that class
        private $price;     // accessed within the class

        public function fruitName($fruitName){
            $this->name = $fruitName;
        }

        public function fruitColor($fruitColor){
            $this->color = $fruitColor;
        }

        public function fruitPrice($fruitPrice){
            $this->price = $fruitPrice;
        }


    }

    class NextFruit extends Fruit{
        public function getColor(){     //  NextFruit class derived from Fruit
            echo $this->color;
        }

        public function getPrice(){     //  NextFruit class derived from Fruit
            // echo $this->price;
        }

    }

    $aboutFruit = new NextFruit;
    $aboutFruit->fruitName("Apple");        // $name = Apple
    $aboutFruit->fruitColor("Red");         // $color = Red
    $aboutFruit->fruitPrice(2);             // price = 2

    echo $aboutFruit->name;  // Apple

    $aboutFruit->getColor();    // Red
    $aboutFruit->getPrice();    // Error

    // Controller
?>