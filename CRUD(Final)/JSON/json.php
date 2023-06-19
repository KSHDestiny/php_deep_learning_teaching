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

    $sql = "SELECT * FROM to_do_list";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    sleep(2);
    header('Content-Type: application/json; charset=utf-8');
    echo(json_encode($rows));
?>