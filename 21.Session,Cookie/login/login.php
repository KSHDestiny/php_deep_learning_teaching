<?php
    session_start();

    // direct dashboard if login
    if(isset($_SESSION["name"]) || isset($_COOKIE["alreadyLogin"])){
        header("location: dashboard.php");
    }

    // database email, password
    $userData = [
        'name' => "kaungsat",
        'email' => "kaungsat@gmail.com",
        'password' => "kaungsat123",
    ];

    // after submiting form
    if(isset($_POST["userEmail"]) && isset($_POST["userPassword"])){
        
        // same email and password
        if($userData["email"] == $_POST["userEmail"] && $userData["password"] == $_POST["userPassword"]){
            $_SESSION["name"] = rand(0,99999999) . "_" . $userData["name"];
            setcookie("success", "Login Success.");

            // connect session with cookie
            // get sessionToken
            $_SESSION["alreadyLogin"] = $_SESSION["name"] . "_" . rand(0,9999999999999999);
            // assign sessionToken to Cookie data
            setcookie("alreadyLogin", $_SESSION["alreadyLogin"], time() + 3600);

            header("location: ./dashboard.php");
        }else{                                          // wrong email and password
            setcookie("error", "Login Fails");
            header("location: ./login.php");
        }
    }
    
    // fail flash message
    if(isset($_COOKIE["error"])){
        echo "<p>{$_COOKIE["error"]}</p>";
        setcookie("error", "" , time() - 3600);
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
    <form action="./login.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="userEmail" placeholder="Enter Your Email..." >
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="userPassword" placeholder="Enter Your Password..." >
        </div>
        <button>Login</button>
    </form>
</body>
</html>