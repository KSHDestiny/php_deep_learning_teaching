<?php
// Operators

// Arithmetic Operators (+, -, * /, %, **)
$x = 3;
$y = 5;

echo $x + $y . "<br>"; // 8
echo $x - $y . "<br>";   // -2
echo $x * $y . "<br>";  // 15
echo $x / $y . "<br>";  // 0.6
echo $x % $y . "<br>";  // 3 (Remainder)
echo $x ** $y . "<br>"; // 243  (Power)


// Assignment Operator (=, +=, -=, *=, /= , %=)
$x = 10;
echo $x . "<br>";   // 10

$x = 20;
$x += 100;  // $x = $x + 100;
echo $x . "<br>";   // 120

$x = 50;
$x -= 30;   // $x = $x -30;
echo $x . "<br>";   // 20

$x = 5;
$x *= 6;    // $x = $x * 6;
echo $x . "<br>";   // 30

$x = 10;
$x /= 5;    // $x = $x / 5;
echo $x . "<br>";   // 2

$x = 15;
$x %= 4;    // $x = $x % 4;
echo $x . "<br>";    // 3


// Comparison Operators (==, ===, !=, !==, >, <, >=, <=)
$x = 100;
$y = "100";
var_dump($x == $y); // boolean (true)   // value

$x = 100;
$y = "100";
var_dump($x === $y);    // boolean (false)   // value + datatype

$x = 100;
$y = "100";
var_dump($x != $y);     // bool(false)   // value   // opp ==

$x = 100;
$y = "100";
var_dump($x !== $y);    // bool(true)   // value + datatype // opp ===
echo "<br>";

$x = 100;
$y = 50;
var_dump($x > $y);  // bool(true)

$x = 10;
$y = 100;
var_dump($x < $y);  // bool(true)

$x = 50;
$y = 20;
var_dump($x >= $y); // bool(true)

$x = 25;
$y = 25;
var_dump($x <= $y); // bool(true)
echo "<br>";


// Increment / Decrement Operators ( ++$x, $x++, --$x, $x--)

// ++ -> +1     // -- -> -1
$x = 10;
echo ++$x . "<br>"; // 11

$x = 10;
echo $x++ . " ";  // 10
echo $x . "<br>";    // 11

$y = 10;
echo --$y . "<br>"; // 9

$y = 10;
echo $y-- . " ";     // 10
echo $y  . "<br>";    // 9


// Logical Operators ( && , || , !)     // condition -> if()
$x = 100; 
$y = 50;

if($x == 100 && $y == 50){      // And
    echo "Hello World <br>";    // Hello World
}

if($x == 100 || $y == 80){       // OR
    echo "Hello Mello";     // Hello Mello
}

$x = 100;
if(!empty($x)){
    echo "Good Morning";
}


// Condition Assignment Operator ( ? : ) // Ternary Operator
    // true ? true statement : false statement;
    $status = "Hello";
    echo $status == "Hello" ? "This is greeting." : "This is farewell.";    // This is greeting

 
    $val = "100";
    echo $val === 100 ? "This is true statement" : "This is false statement";   // This is false statement
    echo $val === 100 ? (function(){echo "True";})() : (function(){echo "False";})();


    // Ternary
?>