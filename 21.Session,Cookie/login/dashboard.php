<?php
    session_start();

    // if not login, direct login page
    if(empty($_SESSION["name"]) && empty($_COOKIE["alreadyLogin"])){
        header("location: ./login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // success flash message
        if(isset($_COOKIE["success"])){
            echo "<p>{$_COOKIE['success']}</p>";
            setcookie("success","", time() - 3600);
        }
    ?>
    <h1>This is user dashboard</h1>

    <a href="./logout.php">Logout</a>
</body>
</html>