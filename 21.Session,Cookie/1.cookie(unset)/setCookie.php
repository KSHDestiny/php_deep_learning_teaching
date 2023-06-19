<?php
    setcookie("name", "Aung Aung");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is set cookie page</h1>
    <h3>Cookie data is <?php echo $_COOKIE["name"] ?></h3>
    <a href="./index.php">Index Page</a>
    <a href="./deleteCookie.php">Delete Cookie Page</a>
</body>
</html>