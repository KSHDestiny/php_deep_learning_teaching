<?php 
    session_start();

    $_SESSION["job"] = "developer";

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
    <h1>This is set session page.</h1>
    <h3>This is session value <?php echo $_SESSION["job"] ?></h3>
    <a href="./index.php">Index page</a>
    <a href="./deleteSession.php">Delete Session</a>
    <a href="../">back</a>
</body>
</html> -->