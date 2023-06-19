<?php
    interface Operator{
        public function connect();
    }

    class Myanmarnet implements Operator{
        public function connect(){
            return "Myannmarnet wifi is connected.";
        }
    }

    class Unilink implements Operator{
        public function connect(){
            return "Unilink wifi is connected.";
        }
    }

    class Hi{
        public function connect(){
            return "Hi wifi is connected.";
        }
    }

    class Connection{
        // public function connectMessage($operator){

        //     if($operator instanceof Operator){
        //         return $operator->connect();
        //     }
            
        //     return "Connection fails.";
        // }

        public function connectMessage(Operator $operator){
            return $operator->connect();
        }
    }

    $myanmarnet = new Myanmarnet;
    $unilink = new Unilink;
    $hi = new Hi;

    var_dump($unilink instanceof Operator);

    $connection = new Connection;
    echo $connection->connectMessage($unilink); // Unilink wifi is connected.
    // echo $connection->connectMessage($hi);      // Connection fails. (if condition)
    // echo $connection->connectMessage($hi);      // Fatal error       (Class $instance)

?>