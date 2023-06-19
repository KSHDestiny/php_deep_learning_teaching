<?php
        // class & object
        class Animal{
            // Properties       // declare variables
            public $name;
            public $color;
    
            // Methods          // functions
            public function animalName($dogName){
                echo "This dog is " . $dogName;
            }
    
            public function animalColor($dogColor){
                echo "This dog has " . $dogColor . " color.";
            }
        }
    
        // $aungNet = new Animal;      // create object    // ->
        // $aungNet->animalName("Aung Net");  // This dog is Aung Net
    
        // $aungNet->animalColor("Black");     // This dog has Black color.
        // echo "<br>";
    
        // $melLone = new Animal;
        // $melLone->animalName("MelLone");    // This dog is MelLone
        // $melLone->animalColor("Yellow");    // This dog has Yellow color.
        
        class Fruit{
            public $name = "Apple";
            public $color;
    
            public function fruitName($fruitName){
                $this->name = $fruitName;
            }
    
            public function showFruitName(){
                echo "This fruit is " . $this->name;
            }
    
            public function fruitColor($fruitColor){
                $this->color = $fruitColor;
            }
    
            public function showFruitColor(){
                echo "This fruit has " . $this->color . " color.";
            }
        }
    
        // $orange = new Fruit;
        // echo $orange->name;     // Apple    // Default
        // $orange->showFruitName();   // This fruit is Apple.
        // $orange->showFruitColor();  // This fruit has color.
    
        // $orange->fruitName("Orange");
        // $orange->showFruitName();   // This fruit is Orange.
    
        // $orange->fruitColor("orange");
        // $orange->showFruitColor();  // This fruit has orange color.
    
    
        // $grape = new Fruit;
        // echo $grape->name;      // Apple
        // $grape->showFruitName();   // This fruit is Apple.
        // $grape->showFruitColor();  // This fruit has color.
    
        // $grape->fruitName("Grape");
        // $grape->showFruitName();    // This fruit is Grape.
    
        // $grape->fruitColor("purple");
        // $grape->showFruitColor();   // This fruit has purple color.
    
?>