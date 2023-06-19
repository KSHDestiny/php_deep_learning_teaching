<?php
    require_once "./template/withLogin.php";
    require_once "./template/header.php";
?>

<?php
    $oldEmail = isset($_COOKIE['oldEmailLogin'])? $_COOKIE['oldEmailLogin'] : "";
?>

<section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-sm-fluid container-md">
                <a class="navbar-brand text-primary font-script" href="#">CRUD Project with pure PHP</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="./register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
</section>

    <section id="loginForm" class="vh-100 row align-items-center">
        <div class="col-8 col-md-6 col-lg-5 mx-auto">
            <div class="card text-primary">
                <div class="card-header text-center h3">
                    Login Form
                </div>
                <div class="card-body">
                    <form action="./login.php" method="POST">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="userEmail" value="<?= htmlentities($oldEmail) ?>" class="form-control" placeholder="Enter your Email...">
                            <?php
                                if(isset($_COOKIE['emailEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['emailEmpty']}</small>";
                                    setcookie('emailEmpty','',time() - 3600);
                                }
                            ?>
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="userPassword" value="" class="form-control" placeholder="Enter your Password...">
                            <?php
                                if(isset($_COOKIE['passwordEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['passwordEmpty']}</small>";
                                    setcookie('passwordEmpty','',time() - 3600);
                                }
                                if(isset($_COOKIE['wP'])){
                                    echo "<small class='text-danger'>{$_COOKIE['wP']}</small>";
                                    setcookie('wP','',time() - 3600);
                                }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-3 w-100">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    require_once "./template/footer.php"
?>