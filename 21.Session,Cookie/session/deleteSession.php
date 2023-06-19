<?php 
    session_start();
    unset($_SESSION["job"]);
    session_destroy();

    header("location: ./index.php");
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is destory session page.</h1>
    <h3>This is session value <?php echo $_SESSION["job"] ?></h3>
    <a href="./index.php">Index page</a>
    <a href="./setSession.php">Set Session</a>
    <a href="../">back</a>
</body>
</html> -->