<?php
    require_once "./template/dbconnection.php";
?>

<?php

    if(isset($_POST['userEmail']) && isset($_POST['userPassword'])){
        
        $status = true;
        // error cookie messages
        if($_POST['userEmail'] == ""){
            setcookie("emailEmpty","You need to fill your email!");
            $status = false;
        }
        if($_POST['userPassword'] == ""){
            setcookie("passwordEmpty","You need to fill your password!");
            $status = false;
        }
        

        if($status){
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
            $statement = $pdo->prepare($sql);
            $statement->execute([
                ':email' => $_POST['userEmail'],
                ':password' => $_POST['userPassword'],
            ]);
            // '1' OR '1'='1'

            $data = $statement->fetch(PDO::FETCH_ASSOC);

            // die(var_dump($data));

            if($data){
                // set session for login
                $_SESSION['login'] = $data['name'] . "_" . rand(0,9999999999);

                // set cookie for login
                setcookie('login',$_SESSION['login']);
                
                // add user id cookie
                setcookie('userId',rand(1000000,9999999).$data['id'].rand(1000000000,9999999999));

                // delete old values data
                setcookie('oldEmailLogin','',time() - 3600);

                header("Location: ./dashboard.php");
            }else{
                // old values
                setcookie('oldEmailLogin',$_POST['userEmail']);

                // wrong password
                setcookie('wP',"Wrong Password!");

                header("Location: ./index.php");
            }
        }else{
            // old values
            setcookie('oldEmailLogin',$_POST['userEmail']);

            header("Location: ./index.php");
        }
    }else{
        header("Location: ./index.php");
    }
?>