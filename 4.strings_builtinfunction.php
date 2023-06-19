<?php 
    $name = "kaung sat";

    // strlen(string)   // string length
    echo strlen($name); // 9  
    echo strlen("Hello Mello"); // 11
    echo "<br>";

    // str_word_count(string)   // word count
    echo str_word_count("Hello Mello"); // 2
    echo "<br>";
    echo str_word_count($name); //2

    // strrev(string)   // string reverse
    echo strrev("Hello Mello"); // olleM olleH
    echo "<br>";
    echo strrev($name); // taS gnuaK
    echo "<br>";


    // str_shuffle(string)  // string shuffle
    echo str_shuffle("Hello Mello");
    echo "<br>";
    echo str_shuffle($name);
    echo "<br>";


    // strpos(string, within)
    echo strpos("Hello Mello","Mello");  // 6
    echo "<br>";
    echo strpos($name,"Sat");   // 6
    echo "<br>";


    // str_replace(find, new, string)
    echo str_replace("Mello","World","Hello Mello");    // Hello World
    echo str_replace("Sat","Sithu",$name);  // Kaung Sithu
    echo "<br>";


    // strtoupper(string)   // upper case
    echo strtoupper("Hello Mello"); // HELLO MELLO
    echo strtoupper($name); // KAUNG SAT
    echo "<br>";

    // strtolower(string)   // lower case
    echo strtolower("Hello Mello"); // HELLO MELLO
    echo strtolower($name) . "<br>"; // KAUNG SAT

    // ucfirst(string)    // uppercase first 
    echo ucfirst("hello mello");    // Hello mello
    echo ucfirst($name) . "<br>";   // Kaung sat

    // ucwords(string)   // uppercase first word
    echo ucwords("hello mello");    // Hello Mello
    echo ucwords($name);    // Kaung Sat

    // strip_tags(html code)    // strip all tags
    $test = "<h1><i>This is testing</i></h1>";
    echo $test;
    echo strip_tags($test);

    // trim(string)     // left/right strip space
    $variable = "          Kaung Sat     ";
    echo $variable; // Kaung Sat
    var_dump($variable) . "<br>";   // String(28) Kaung Sat
    var_dump(trim($variable));  // string(9) Kaung Sat
?>