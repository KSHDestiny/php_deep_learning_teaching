<?php
    class Myself {
        public static $name = "Destiny";

        public static function myName(){
            return static::$name;
            // return self::$name;
            // return $this->name; // error 
        }
    }

    echo Myself::myName();
?>