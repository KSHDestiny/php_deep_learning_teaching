<?php
    if(empty($_SESSION['login']) && empty($_COOKIE['login'])){
        header("Location: ./index.php");
    }
?>