<?php
    // if(condition){       // condition = true
    //     statement;
    // }

    $num = 2;
    if($num == 1){
        echo "The number is one.";
    }

    echo $num;


    // if(condition){      // true
    //     statement;
    // }else{              // false
    //     statement;
    // }

    $greeting = "Hello World";
    if($greeting == "Hello"){
        echo "This is saying hello.";
    } else {
        echo "This is other";
    }


    // if(condition){      // true
    //     statement;
    // } 
    // elseif(condition){   // true     // another condition
    //     statement;
    // }
    // else{              // false
    //     statement;
    // }

    $val1 = 50;
    $val2 = 50;

    if($val1 === $val2){
        echo "value 1 and value 2 are identical.";
    }else if($val1 < $val2){
        echo "Value 1 is less than value 2.";
    }elseif($val1 == $val2){
        echo "The values are the same.";
    }else {
        echo "value 1 is greater than value 2";
    }
?>