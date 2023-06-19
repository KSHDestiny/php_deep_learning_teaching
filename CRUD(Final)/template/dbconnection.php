<?php
    $pdo = new PDO("mysql:dbname=php_deep_crud;host=localhost",'root','');

    try{
        if(!$pdo){
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
    }catch(PDOException $e){
        error_log($e->getMessage());
        die($e->getMessage());
    }
?>