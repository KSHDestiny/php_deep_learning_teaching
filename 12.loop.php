<?php
    // loop (while , do while, for , foreach)

    // while            // condition -> statement
    // while(condition){
    //     statement;
    // }

    $num = 1;
    while($num <= 10){
        echo $num . "<br>";     // 1    // 2  //...  // 9    // 10
        $num++;  // $num = $num+1    // 1+1 = 2  // 2+1 = 3   //...    // 10   // 11
    }


    // do while     // first statement -> condition -> statement 
    // do{
    //     statement;
    // }while(condition)

    $num = 20;
    do{
        echo $num . "<br>";     // echo 20    // echo 16    // echo 12
        $num -= 4;                 // 16    // 12           // 8
    }while($num >= 0);


    // for
    // for(declare  ;  condition;  increment/decrement){
    //     statement;
    // }

    $fruits = ["Apple","Orange","Banana","Mango","Pineapple","Grape"];      //  0, 1, 2 , 3 , ... 6
    // echo count($fruits);        // 7

    for($i=0; $i<count($fruits); $i++){          // i = 0 ; i<4 ; i+1
        echo "This is " . $fruits[$i] . "<br>"; 
    }

    // first loop -> "This is " . $fruit[0] . "<br>"        // i = 0    // i= i+1 -> i = 0+1
    // second loop -> "This is " . $fruit[1] . "<br>"       // i = 1            // i = 1+1
    // third loop -> i = 2 // $fruit[2]
    // fourth loop -> i = 3 // $fruit[3]
    
    for($i=count($fruits)-1; $i>=0; $i--){
        echo "This is " . $fruits[$i] . "<br>"; 
    }


    // foreach
    // foreach(array as parameter){
    //     statement;
    // }

    $userData = [
        ["name" => "Kaung Sat", "job" => "developer"],          // [0] =>  ["name" => "Kaung Sat", "job" => "developer"],     // first loop
        ["name" => "Aung Aung", "job" => "designer"],           // [1] =>  ["name" => "Aung Aung", "job" => "designer"],      // second loop
        ["name" => "Hla Hla", "job" => "teacher"],
        ["name" => "Mya Mya", "job" => "doctor"],
    ];

    foreach($userData as $user){
        echo $user["name"] . " is a ";  // Kaung Sat is a       // Aung Aung is a
        echo $user["job"] . "<br>";     // developer            // designer
    }

    // first loop -> $user = ["name" => "Kaung Sat", "job" => "developer"]
    // second loop  -> $user = ["name" => "Aung Aung", "job" => "designer"]

    // foreach

    $userData1=["name" => "Kaung Sat", "job" => "developer"];
    foreach($userData1 as $key => $value){
        echo "His $key is $value <br>";
    }


    // Nested Loop
    for($i = 0; $i < 5; $i++){
        for($a = 0; $a < 8; $a++){
            // if($a == $i) continue;
            // if($i == 4 && $a == 4) break;
            echo "<div>$i$a</div>";
        }
    }


    $aboutStudents = [[
        "name" => "Destiny",
        "age" => 23
    ], [
        "name" => "Aung Aung",
        "age" => 19
    ], [
        "name" => "Mya Mya",
        "age" => 21
    ]];

    $aboutClasses = [[
        "name" => "Destiny",
        "class" => "HTML,CSS"
    ],[
        "name" => "Aung Aung",
        "class" => "JavaScript"
    ],[
        "name" => "Mya Mya",
        "class" => "PHP"
    ]];

    // $students = [];
    foreach($aboutStudents as $aboutStudent){
        foreach($aboutClasses as $aboutClass){
            if($aboutStudent["name"] == $aboutClass["name"]){
                $students[] = ["name" => $aboutStudent["name"], "age" => $aboutStudent["age"], "class" => $aboutClass["class"]];
            }
        }
    }
    print_r($students);
?>