<?php 
    if(isset($_COOKIE["name"])){
        // unset($_COOKIE["name"]);
        setcookie("name", "");
    }
    header("location: ./index.php");
?>
