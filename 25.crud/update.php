<?php include_once('./template/header.php') ?>

<?php include_once('./template/connection.php') ?>

<?php 
    $id = htmlentities($_GET['userId']);
    $sql = "SELECT * FROM user WHERE id = ?";
    // $query = mysqli_query($connection, $sql);
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $id);
    $stmt->execute();

    $result = $stmt->get_result();

    $data = mysqli_fetch_assoc($result);
    // var_dump($data);
    // echo $data['phone'];
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="h5 card-tilte text-center">
                        Update User
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="userId" value="<?= $data['id'] ?>">
                        <div class="my-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="userName" value="<?php echo $data['name'] ?>" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="userPhone" value="<?= $data['phone'] ?>" class="form-control">
                        </div>
                        <input type="submit" name="updateBtn" class="btn btn-secondary float-end" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST["updateBtn"])){
        $id = htmlentities($_POST['userId']);
        $name = htmlentities($_POST['userName']);
        $phone = htmlentities($_POST['userPhone']);

        $updateSql = "UPDATE user SET name=?, phone=? WHERE id=$id";
        // $updateQuery = mysqli_query($connection, $updateSql);
        $stmt = $connection->prepare($updateSql);
        $stmt->bind_param('ss', $name, $phone);
        $stmt->execute();

        if($stmt){
            header("location: ./index.php");
        }else{
            echo "Update error" . mysqli_error();
        }
    }
?>

<?php include_once('./template/footer.php') ?>
