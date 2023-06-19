<?php
    $cars = ['Volvo','BMW','Toyota'];       // [ ]
    var_dump($cars);    // array(3) 

    $numbers = [1,3,5,7,9];
    var_dump($numbers); // array(5)

// Indexed Arrays
    $data = ["Aung Aung","Mg Mg",24,50,true];   // 0 , 1 , 2 , 3

    echo $data[1];  // Mg Mg
    var_dump($data[1]);     // string "Mg Mg"

    echo $data[4];      // 1
    var_dump($data[4]);     // bool(true)
    echo "<br><br>";

    $data[0] = "Mya Mya";       // replace value to existed indexed room
    print_r($data);
    echo "<br>";

    $data[] = "Hla Hla";    // last indexed room
    print_r($data);
    echo "<br>";

    $data[7] = 100;         // skip indexed room if not exist
    print_r($data);
    echo "<br>";

    // count(array)
    // echo count($data);

// Associative array
    $age = ["Peter" => 23,"Harry" => 24,"Joe" => 21,"Nick" => 22];      // [ key => value , ... ]
    echo $age["Peter"];
    echo $age['Harry'];
    echo "<br>";
    echo "<br>";

    $users = [
        "Peter" => ["age" => 23,
                    "gender" => "male",
                    "job" => "designer"],
        "Harry" => ["age" => 24,
                    "gender" => "male",
                    "job" => "developer"],
        "Nick" => ["age" => 22,
                    "gender" => "female",
                    "job" => "fullstack"],
    ];
    var_dump($users);   // array(3)
    echo "<br>";
    var_dump($users["Peter"]);  // Peter => array(3)
    var_dump($users["Harry"]);  // Harry => array(3)

    echo $users["Harry"]["job"];    // developer
    echo $users["Nick"]["gender"];  // female
    echo "<br>";

    $age["Peter"] = 40;
    var_dump($age);
    echo "<br>";

    $userData = ["name" => "Kaung Sat", "age" => 23];
    var_dump($userData);
    echo "<br>";
    $userData["job"] = "developer";
    var_dump($userData);

    // asso
?>