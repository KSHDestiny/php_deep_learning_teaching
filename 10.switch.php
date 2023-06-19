<?php
    // switch (parameter){         " == "
    //     case value1 :           if
    //         statement;
    //         break;
    //     case value2 :           elseif
    //         statement;
    //         break;
    //     default :               else
    //         statement;
    // }

    $val = "25";

    switch ($val){            
        case 25 :
            echo "This is banana.";
            break;
        case "Orange" :
            echo "This is pineapple.";
            break;
        default :
            echo "This is other fruit.";
    }
    

    // switch with operator

    $integer = 7;
    
    switch (true) {
        case $integer < 10:
            echo "<div>This is less than 10.</div>";
            break;
            
        case $integer == 10:
            echo "<div>This is 10.</div>";
            break;

        default:
            echo "<div>This is greater than 10.</div>";
            break;
    }
?>