<?php
    class MySelf {
        public function name(){
            echo "I am Destiny. ";
            return $this;
        }

        public function age(){
            echo "I am 23. ";
            return $this;
        }

        public function job(){
            echo "I am a web developer. ";
            return $this;
        }
    }

    $destiny = new Myself;
    $destiny->name()->age()->job();


    class ChangeType {
        public $string;

        public function __construct($string){
            $this->string = $string;
        }

        public function repleceString($find, $new){
            $this->string = str_replace($find, $new, $this->string);
            // echo $this->string;
            return $this;
        }

        public function upperString(){
            $this->string = strtoupper( $this->string);
            // echo $this->string;
            return $this;
        }

        public function lowerString(){
            $this->string = strtolower( $this->string);
            // echo $this->string;
            return $this;
        }

        public function wordUpper(){
            $this->string = ucwords( $this->string);
            // echo $this->string;
            return $this;
        }
    }

    $myString = new ChangeType("Tun_Aung_Kyaw");
    $myString->repleceString("_"," ")->upperString();
    echo $myString->string;
?>