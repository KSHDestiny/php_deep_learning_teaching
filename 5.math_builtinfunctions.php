<?php
    // min (integer, integer);
    echo min(0,150,-8,20,-100); // -100

    // max()
    echo max(0,150,-8,20,-100); // 150

    // abs(integer)  // absoulte
    echo abs(-100);  // 100

    // sqrt(integer) // squareroot
    echo sqrt(100); // 10

    // round(float)
    echo round(10.3); // 10
    echo round(13.7) . "<br>";   // 14

    // ceil(float)
    echo ceil(10.3);    // 11
    echo ceil(13.7);    // 14
    echo ceil(25.00001) . "<br>";    // 26

    // floor(float)
    echo floor(10.3);   // 10
    echo floor(13.7);   // 13
    echo floor(25.0000);    // 25

    // rand(start,end)  // random
    echo rand(0,100);

    // pow(base,power)
    echo pow(5,3);  // 125
?>