<?php
    // Inheritance  // extends

    class Movie{
        public $name;
        public $runningTime;

        public function latestMovie($myMovie,$itsTime){
            $this->name = $myMovie;
            $this->runningTime = $itsTime;
        }
    }

    class MyFavorite extends Movie{    // get data from Movie class
        // public $name;
        // public $runningTime;

        // public function latestMovie($myMovie,$itsTime){
        //     $this->name = $myMovie;
        //     $this->runningTime = $itsTime;
        // }

        public function recentWatch(){
            echo "Movie's name is " . $this->name . " and it's running time is " . $this->runningTime;
        }
    }


    $myCinema = new MyFavorite;
    $myCinema->latestMovie("Infinity War",120);
    $myCinema->recentWatch();   // Movie's name is Infinity War and it's running time is 120
?>