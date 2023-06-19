<?php
    require_once "./template/dbconnection.php";
    session_start();
?>

<?php
    require_once "./template/header.php"
?>

<?php

    if(isset($_POST['userName']) && isset($_POST['userEmail']) && isset($_POST['userPassword'])){
        $status = true;
        // error cookie messages
        if($_POST['userName'] == ""){
            setcookie("nameEmpty","You need to fill your name!");
            $status = false;
        }
        if($_POST['userEmail'] == ""){
            setcookie("emailEmpty","You need to fill your email!");
            $status = false;
        }
        if($_POST['userPassword'] == ""){
            setcookie("passwordEmpty","You need to fill your password!");
            $status = false;
        }
        if($_POST['confirmPassword'] == ""){
            setcookie("confirmEmpty","You need to fill your password again!");
            $status = false;
        }
        if($_POST['confirmPassword'] != $_POST['userPassword']){
            setcookie("confirmFail","Confirm password does not match!");
            $status = false;
        }

        // weak password
        if(!preg_match("/[0-9]/",$_POST['userPassword']) || !preg_match("/[a-z]/",$_POST['userPassword']) || !preg_match("/[A-Z]/",$_POST['userPassword']) || !preg_match("/[!@#$%^&*_<>?]/",$_POST['userPassword'])){
            setcookie("weakPassword","Weak Password (password must contain Capital Letter, Small Letter, Number and Speical Charactor)");
            $status = false;
        }


        if($status){
            $sql = "INSERT INTO users (name,email,password) VALUES (:name,:email,:password)";
            $statement = $pdo->prepare($sql);
            $statement->execute([
                ':name' => $_POST['userName'],
                ':email' => $_POST['userEmail'],
                ':password' => $_POST['userPassword'],
            ]);

            if($statement){
                // set session for login
                $_SESSION['login'] = $_POST['userName'] . "_" . rand(0,9999999999);

                // set cookie for login
                setcookie('login',$_SESSION['login']);

                // delete old values data
                setcookie('oldName','',time() - 3600);
                setcookie('oldEmail','',time() - 3600);

                header("Location: ./dashboard.php");
            }
        }else{
            // old values
            setcookie('oldName',$_POST['userName']);
            setcookie('oldEmail',$_POST['userEmail']);
            header("Location: ./register.php");
        }
    }

    $oldName = isset($_COOKIE['oldName'])? $_COOKIE['oldName'] : "";
    $oldEmail = isset($_COOKIE['oldEmail'])? $_COOKIE['oldEmail'] : "";

?>

<section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-sm-fluid container-md">
                <a class="navbar-brand text-primary font-script" href="#">CRUD Project with pure PHP</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="./index.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
</section>

    <section id="registerForm" class="vh-100 row align-items-center">
        <div class="col-8 col-md-6 col-lg-5 mx-auto">
            <div class="card text-primary">
                <div class="card-header text-center h3">
                    Register Form
                </div>
                <div class="card-body">
                    <form action="./register.php" method="POST">
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="userName" value="<?= htmlentities($oldName) ?>" placeholder="Enter your name...">
                            <?php
                                if(isset($_COOKIE['nameEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['nameEmpty']}</small>";
                                    setcookie('nameEmpty','',time() - 3600);
                                }
                            ?>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="userEmail" value="<?= htmlentities($oldEmail) ?>" placeholder="Enter your email...">
                            <?php
                                if(isset($_COOKIE['emailEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['emailEmpty']}</small>";
                                    setcookie('emailEmpty','',time() - 3600);
                                }
                            ?>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="userPassword" placeholder="Enter your password...">
                            <?php
                                if(isset($_COOKIE['passwordEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['passwordEmpty']}</small>";
                                    setcookie('passwordEmpty','',time() - 3600);
                                }
                                if(isset($_COOKIE['weakPassword'])){
                                    echo "<small class='text-danger'>{$_COOKIE['weakPassword']}</small>";
                                    setcookie('weakPassword','',time() - 3600);
                                }
                            ?>
                        </div>
                        <div class="form-group mt-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Enter your password again...">
                            <?php
                                if(isset($_COOKIE['confirmFail'])){
                                    echo "<small class='text-danger'>{$_COOKIE['confirmFail']}</small>";
                                    setcookie('confirmFail','',time() - 3600);
                                }
                                if(isset($_COOKIE['confirmEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['confirmEmpty']}</small>";
                                    setcookie('confirmEmpty','',time() - 3600);
                                }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-3 w-100">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    require_once "./template/footer.php"
?>