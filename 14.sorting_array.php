<?php
// array_order  -> integer , capital , small letter

// indexed array
    $fruits = ["Apple","Mango","Banana","Orange","Grape"];
    echo $fruits[1] . "<br>";    // Mango

    // sort(array)  // ascending order
    sort($fruits);  // ["Apple","Banana","Grape",Mango","Orange]    // change actually
    var_dump($fruits);
    echo  "<br>" . $fruits[1] . "<br>";    // Banana

    // rsort(array) // descending order
    rsort($fruits);     // ["Orange","Mango","Grape","Banana","Apple]   // chamge actually
    var_dump($fruits);
    echo "<br>" . $fruits[1];   // Mango

// associative array
    $users = [
        "name" => "Kaung Sat",
        "age" => 23,
        "job" => "developer",
    ];

    // asort(array) // ascending value order
    asort($users);
    echo "<pre>";
    var_dump($users);

    // arsort(array)    // descending value order
    arsort($users);
    var_dump($users);

    // ksort(array)     // ascending key order
    ksort($users);
    var_dump($users);

    // krsort(array)    // descending key order
    krsort($users);
    var_dump($users);
?>