<?php
    // abstract     // extends

    // * An abstract method is a method that is declared, but not implemented in the code.
    
    // When a child class is inherited from an abstract class,
    // * The child class method must be defined with the same name and it redeclares the parent abstract method.
    // * The child class method must be defined with the same or a less restricted access modifier. (eg. public->public / protected->public, protected)


    abstract class Animal{
        public $type;
        public $name;
        public $color;

        public function __construct($type, $name, $color){
            $this->type = $type;
            $this->name = $name;
            $this->color = $color;
        }

        abstract public function itsType();

        public function aboutIt(){
            echo "{$this->name} has {$this->color} color.";
        }
    }

    class Cat extends Animal{
        public function itsType(){
            echo "This animal is {$this->type}. Its name is {$this->name}. ";
        }
    }

    class Dog extends Animal{
        public function itsType(){
            echo "This animal is {$this->type}. Its name is {$this->name}. ";
        }
    }

    $shweWah = new Cat("cat","Shwe Wah","yellow");
    $shweWah->itsType();    // This animal is cat. Its name is Shwe Wah.
    $shweWah->aboutIt();    // Shwe Wah has yellow color
    echo "<br>";

    $black = new Dog("dog","Black","black");
    $black->itsType();    // This animal is dog. Its name is Black.
    $black->aboutIt();    // Black has black color
?>