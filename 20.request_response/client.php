<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Get method   // Post method
        // Get method   -> a href   // form //  url     // search
        // Post method  -> form     // userdata 

        // a href="url?key=value&key=value"
        $myAcc = [
            "name" => "Tun Tun",
            "job" => "developer"
        ];

        echo $myAcc["name"];
        echo $myAcc["job"];
    ?>

    <a href="./server.php?name=<?= $myAcc["name"] ?>&job=<?php echo $myAcc["job"] ?>">Send to Server</a>
    <br>

    <?php 
    // Get Method   // form     // show in url
    // action similar to href
    // form method="GET"
    // name="" == key
    // userData == value
    // submit btn
    ?>

    <form action="./server.php" method="Get">
        <input type="text" name="userName" placeholder="Enter Your Name">
        <input type="email" name="userEmail" placeholder="Enter Your Email">
        <input type="text" name="userPhone" placeholder="Enter Your Phone">
        <input type="submit" value="Send">
    </form>
    <br>

    <?php 
    // Post Method   // form
    // action similar to href
    // form method="POST"
    // name="" == key
    // userData == value
    // submit btn
    ?>

    <form action="./server.php" method="POST">
        <input type="text" name="postName" placeholder="Enter Your Name">
        <input type="email" name="postEmail" placeholder="Enter Your Email">
        <input type="text" name="postPhone" placeholder="Enter Your Phone">
        <input type="submit" value="Send">
    </form>
</body>
</html>