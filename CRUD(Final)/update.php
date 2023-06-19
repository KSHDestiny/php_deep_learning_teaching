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

    if(isset($_POST['title']) && isset($_POST['deadline'])){

        $status = true;
        if($_POST['title'] == ""){
            setcookie('titleEmpty',"You need to fill the title!");
            $status = false;
        }
        if($_POST['deadline'] == ""){
            setcookie('deadlineEmpty',"You need to fill the deadline!");
            $status = false;
        }

        if($status){
            $sql = "UPDATE to_do_list SET title = :title, deadline = :deadline WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->execute([
                ":title" => $_POST['title'],
                ":deadline" => $_POST['deadline'],
                ":id" => $_POST['id']
            ]);

            if($statement){
                // success message
                setcookie('success',"One List is successfully updated.");

                header('Location: ./dashboard.php');
            }
        }else{
            header("Location: ./update.php?id={$_POST['id']}");
        }
    }
?>

    <section>
        <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
            <div class="container-sm-fluid container-md">
                <a class="navbar-brand text-primary font-script" href="#">CRUD Project with pure PHP</a>
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

    <section id="createList" class="vh-100 row align-items-center">
        <div class="col-8 col-md-6 col-lg-5 mx-auto">
            <div class="card text-primary">
                <div class="card-header text-center h3">
                    Update List
                </div>
                <div class="card-body">
                    <form action="./update.php" method="POST">

                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $data['title'] ?>" placeholder="Enter your list...">
                            <?php 
                                if(isset($_COOKIE['titleEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['titleEmpty']}</small>";
                                    setcookie('titleEmpty',"",time() - 3600);
                                }
                            ?>
                        </div>
                        <div class="form-group mt-3">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Enter list deadline...">
                            <?php 
                                if(isset($_COOKIE['deadlineEmpty'])){
                                    echo "<small class='text-danger'>{$_COOKIE['deadlineEmpty']}</small>";
                                    setcookie('deadlineEmpty',"",time() - 3600);
                                }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-3 w-100">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    require_once "./template/footer.php"
?>