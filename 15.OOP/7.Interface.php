<?php
    // Interface  // implements         ( When one or more classes use the same interface, it is referred to as "polymorphism" )

    // * A class that implements an interface must implement all of the interface's methods.
    // * Interfaces cannot have properties, while abstract classes can
    // * All interface methods must be public, while abstract class methods is public or protected
    // * Classes can implement an interface while inheriting from another class at the same time
    // * All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary

    interface Subject {
        public function subject();
    }

    class PHP implements Subject {
        public function subject(){
            echo "PHP is a server side language.";
        }
    }

    class MySql implements Subject {
        public function subject(){
            echo "Mysql is a database.";
        }
    }

    $php = new PHP;
    $php->subject();
    echo "<br>";

    $mysql = new MySql;
    $mysql->subject();
?>