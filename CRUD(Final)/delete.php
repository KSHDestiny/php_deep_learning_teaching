<?php
    require_once "./template/header.php";
    require_once "./template/dbconnection.php";
?>

<?php

    $sql = "SELECT * FROM to_do_list WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":id", $_GET['id']);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);

    //  block other users
    if($data["user_id"] != $_COOKIE['userId'][7]){
        // die(var_dump($_COOKIE['userId'][7]));
        header("Location: ./404.php");
    }

    if(isset($_POST['id'])){
        $sql = "DELETE FROM to_do_list WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            ":id" => $_POST['id'],
        ]);

        if($statement){
            setcookie("deleteSuccess", "One List is successfully deleted.");
            header("Location: ./dashboard.php");
        }
    }
?>

    <section>
        <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
            <div class="container-sm-fluid container-md">
                <a class="navbar-brand text-primary font-script" href="#">CRUD Poject with pure PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-primary" aria-current="page" href="./dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="./create.php">Create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="./logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="registerForm" class="vh-100 row align-items-center">
        <div class="col-10 col-md-8 col-lg-6 mx-auto">
            <div class="card text-primary">
                <div class="card-header text-center h3">
                    Delete
                </div>
                <div class="card-body">
                    <form action="./delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <h6 class="text-danger text-center">Are you sure you want to delete <span class='h4'><?= htmlentities($data['title']) ?></span>?</h6>
                        <button type="submit" class="btn btn-outline-danger mt-3 float-end">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once "./template/footer.php"
?>