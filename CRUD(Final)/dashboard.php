<?php
    require_once "./template/withoutLogin.php";
    require_once "./template/dbconnection.php";
    require_once "./template/header.php";
?>

<?php
    $sql = "SELECT * FROM to_do_list WHERE user_id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ":id" => $_COOKIE['userId'][7]
    ]);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($_COOKIE['userId'][7])
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

    <section class="min-vh-100 container-fluid container-md">
        <div class="pt-9 pt-md-6 mx-3">
        <?php
            if(isset($_COOKIE['success'])){
                echo "<div class='text-center'><small class='text-success'>{$_COOKIE['success']}</small></div>";
                setcookie('success',"",time() - 3600);
            }
            if(isset($_COOKIE['deleteSuccess'])){
                echo "<div class='text-center'><small class='text-success'>{$_COOKIE['deleteSuccess']}</small></div>";
                setcookie('deleteSuccess',"",time() - 3600);
            }
        ?>
            <h3 class="text-secondary display-6">To do Lists</h3>
            <table class="table table-striped">
                <thead>
                    <tr class="row">
                        <th class="text-secondary col-4">Title</th>
                        <th class="text-secondary col-4">Deadline</th>
                        <th class="text-secondary col-2">Done</th>
                        <th class="text-secondary col-2">Option</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                        foreach($rows as $row){

                            $id = htmlentities($row['id']);
                            $title = htmlentities($row['title']);
                            $time = date('d.n.Y', strtotime($row['deadline']));
                            echo "
                            <tr class='row'>
                                <td class='text-secondary col-4'>$title</td>
                                <td class='text-secondary col-4'>$time</td>
                                <td class='ps-4 col-2'>
                                    <form action=''>
                                        <input type='checkbox' name='' class='form-check'>
                                    </form>
                                </td>
                                <td class='text-secondary col-2 d-flex'>
                                    <a href='./update.php?id=$id'>
                                        <i class='bi bi-pencil-square me-3'></i>
                                    </a>
                                    <a href='./delete.php?id=$id'>
                                        <i class='bi bi-trash'></i>
                                    </a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                    
                    <!-- Hello Mello</td><b>danger</b><input type='text' /> -->
                </tbody>
            </table>
        </div>
    </section>

    <!-- <script>
        let tRows = document.querySelector("#tbody").children;

        [...tRows].forEach((tr) => {
            tr.children[3].querySelector(".form-check").addEventListener("click", (event) => {
                event.target.closest('tr').classList.toggle("text-decoration-line-through");
            });
        })

        console.log();
        
    </script> -->

<?php
    require_once "./template/footer.php"
?>