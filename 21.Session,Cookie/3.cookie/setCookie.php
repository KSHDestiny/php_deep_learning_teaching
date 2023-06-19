<?php

// setcookie(name, value, expire, path)

    if(empty($_COOKIE["name"])){
        setcookie("name", "Kaung Sat", time() + 3600);
    }
    header("location: ./index.php");
?>
