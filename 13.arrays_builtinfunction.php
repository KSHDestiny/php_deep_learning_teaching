<?php

// indexed array
    $fruits = ["Apple","Mango","Banana","Orange","Grape"];

    // count(array) // array length
        echo count($fruits) . "<br>";    // 5

    // current(array)    // first indexed room
        echo current($fruits) . "<br>";  // Apple

    // end(array)    // last indexed room
        echo end($fruits) . "<br>";  // Grape

    // array_rand(array)  // random indexed number
        echo array_rand($fruits) . "<br>";  // 0 -> 4
        echo $fruits[array_rand($fruits)]. "<br>";      // fruits[rand indexed number]

    // in_array(value, array)   // whether value is in array or not // boolean
        var_dump(in_array("Apple", $fruits));   // true
        echo  "<br>";

    // array_sum(array)     // sum all integers in array
        $numbers = [23,100,16,34];
        echo array_sum($numbers) . "<br>";   // 173

    // range(start, end)    // build an array from start to end
        $indexedArray = range(5,10);
        print_r($indexedArray);     // [5,6,7,8,9,10]
        echo "<br>";

// associative array
    $users = [
        "name" => "Kaung Sat",
        "age" => 23,
        "job" => "developer",
    ];

    // array_keys(array)   // Show all Keys in asso array
    var_dump(array_keys($users));   // ["name","age","job"]
    echo "<br>";

    // array_values(array)      // Show all Values in asso array
    var_dump(array_values($users));     // ["Kaung Sat",23,"developer"]
    echo "<br>";

    // array_key_exists("key",array)    // key is inside array or not   // boolean
    var_dump(array_key_exists("name",$users));  // bool(true)
    echo "<br>";

    // shuffle(array)    // shuffle values in asso array
    shuffle($users);        // change data actually
    var_dump($users);
    echo "<br>";


    // push  // unshift  // pop   // shift
    $name = ["Aung Aung","Mya Mya","Kyaw Kyaw","Hla Hla"];

    // array_push(array, value)     // add value into array (back)
    array_push($name, "Kaung Kaung");   // change actually
    print_r($name); // [Aung Aung, ... , Kaung Kaung]

    // array_unshift(array, value)  // add value into array (front)
    array_unshift($name, "U Ba");
    print_r($name); // [U Ba, Aung Aung, ... , Kaung Kaung]
    echo "<br>";

    // array_pop(array)    // remove value from array (back)
    array_pop($name);
    print_r($name);     // [U Ba, ... , Hla Hla]

    // array_shift(array)   // remove value from array (front)
    array_shift($name);
    print_r($name);     // ["Aung Aung","Mya Mya","Kyaw Kyaw","Hla Hla"]

?>