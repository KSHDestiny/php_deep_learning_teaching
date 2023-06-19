<?php
    setcookie("name","");
    // delete in cookie but need to reload/ redirect
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is delete page</h1>
    <h3>Cookie data is <?php echo $_COOKIE["name"] ?></h3>
    <a href="./setCookie.php">Set Cookie</a>
    <a href="./index.php">Index Page</a>
</body>
</html>