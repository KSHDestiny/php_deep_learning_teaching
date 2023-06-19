<?php
    // define("name",value)
    define("Name","kaung sat");
    echo Name; // kaung sat

    define("userName","aung aung");
    echo userName; // aung aung

    $name = "Mg Mg";
    echo $name; // Mg Mg

    $name = "Su Su";
    echo $name; // Su Su

    
    // Constants are Global
    define("myAge",23);

    function aboutMe(){
        echo myAge;
    }

    aboutMe();
?>