<?php
    if(isset($_SESSION['login']) || isset($_COOKIE['login'])){
        header("Location: ./dashboard.php");
    }
?>