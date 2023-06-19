<?php
    // trait    // use      ( multiple inheritance )

    trait MessageOne{
        public function msg1(){
            echo "This is msg1 form MessageOne. ";
        }
    }

    trait MessageTwo{
        public function msg2(){
            echo "This is msg2 form MessageTwo. ";
        }
    }

    class MessageOneOutput {
        use MessageOne;
    }
    $msg1op = new MessageOneOutput;
    $msg1op->msg1();
    echo "<br>";

    class MessageAllOutput {
        use MessageOne, MessageTwo;
    }
    $msgaop = new MessageAllOutput;
    $msgaop->msg1();
    $msgaop->msg2();
?>