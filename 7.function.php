<?php
 // function declaration

//   function functionName(){
//     condition
// }



// user defined function
// void function
function writeMsg(){
    echo "Hello Mello";
}
writeMsg(); // Hello Mello

echo "<br>";
function greeting(){
    $name = "Aung Aung";
    echo "Hi, I am " . $name;
}
greeting();   // Hi, I am Aung Aung

function sum(){
    $val1 = 25;
    $val2 = 50;
    $resuit = $val1+$val2;
    echo $resuit;
}
sum();  // 75

writeMsg();  // Hello Mello




// Argument function

function userName($name){
    echo $name . " is my friend. <br>";
}
userName("Aung Aung");  // Aung Aung is my friend.

function user($userName,$age){
    echo "My name is " . $userName . " and I am " . $age . " years old.";
}
user("Maung Maung",25); // My name is Maung Maung and I am 25 years old.

function multiply($num1,$num2){
    $resuit = $num1 * $num2;
    echo $resuit;
}
multiply(5,10); // 50

echo "<br>";

// default argument function
function userInfo($name = "Htet Htet"){
    echo "I am " . $name . "<br>";
}
userInfo(); // I am Htet Htet
userInfo("Mya Mya");    // I am Mya Mya



// type function
function addNumbers($a,$b){
    return $a+$b;
}
$addResult = addNumbers(3,7);



// Scope
    $fruit = "mango";

    function food(){
        $fruit = "apple";
        echo "Inside " . $fruit . "<br>";
    }
    food(); // apple

    // echo "Outside " . $fruit;    // mango

    // Block -> global -> not working in function
    // function -> not working in global



// anonymous function
    $test = function(){
        echo "<div>This is anonymous function</div>";
    };
    $test();

    $anotherTest = function($argument){
        echo "<div>This is anonymous function with argument $argument.</div>";
    };
    $anotherTest("one");


// closure function
    function one(){
        echo "<div>This is function one</div>";
        function two(){
            echo "<div>This is function two</div>";
        }
        // two();
    }
    one();
    two();



// Type deeper
    function test(){
        echo "Hello Mello";
        echo "Hi there";
        $result = 10 + 20;
        echo $result;
        return 10;
    }
    var_dump(test());   // Hello Mello ... int(10)
    echo "<br>";

    $functionValue = test();    // Hello Mello ... 30
    $twenty = $functionValue + 10;
    echo "<div style='color: red;'>$twenty</div>";  // 20

    $multiplyBy8 = function($value){
        return $value * 4;
    };

    $multiplyBy2 = function($val){
        return $val * 2;
    };

    echo $multiplyBy8($multiplyBy2(10));




// IIFE 
    (function(){
        echo "<div>This is Immediately invoked function expression.</div>";
    })();



// use  (anonymous function)
$int1 = 10; $int2 = 20;
$add = function ($int3) use ($int1,$int2){
    $int1 = 20; $int2 = 30;     // not affect in global value 
    $addResult = $int1 + $int2 + $int3;
    return $addResult;
};
echo $add(50);
echo "<div>$int1.$int2</div>";
?>