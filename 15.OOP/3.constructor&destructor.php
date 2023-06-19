<?php
    // Constructor      // __construct
    // if you create a construct function, PHP will actomatically call this function when create an object from class
    class User{
        public $name;
        public $job;

        public function __construct($myName,$myAge){
            echo "I am " . $myName . " and I am " . $myAge . " years old.";
        }

        public function myName($yourName){
            echo "I am " . $yourName;
        }
    }

    $myProfile = new User("Destiny",23);  // construct -> I am Destiny and I am 23 years old.
    $myProfile->myName("Kyaw Kyaw");   // I am Kyaw Kyaw


    // Destructor  // __destruct
    // If you create a __destruct() function, PHP will automatically call this function at the end of the script.

    class UserData{
        public $name;
        public $job;

        public function myName($yourName){
            echo "I am " . $yourName;
        }

        public function __destruct(){
            echo "This is user data destructor function";
        }
    }

    // $userProfile = new UserData();  // construct -> I am Kaung Sat and I am 23 years old.
    // $userProfile->myName("Hla Hla");


    class Testing{
        public function __construct(){
            echo "<div>This is constructor function.</div>";
        }
        public function otherFunction(){
            echo "<div>This is other function.</div>";
        }

        public function __destruct(){
            echo "<div>This is destructor function</div>";
        }
    }

    $testing = new Testing();
    $testing->otherFunction();
?>