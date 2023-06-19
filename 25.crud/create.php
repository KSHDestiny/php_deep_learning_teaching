<?php include_once('./template/header.php') ?>

<?php include_once('./template/connection.php') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="h5 card-tilte text-center">
                        Create User
                    </div>
                    <form action="" method="post">
                        <div class="my-2">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="userName" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="userPhone" class="form-control">
                        </div>
                        <input type="submit" name="createBtn" class="btn btn-secondary float-end" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    // var_dump($_POST);
    if(isset($_POST['createBtn'])){
        $name = htmlentities($_POST["userName"]);
        $phone = htmlentities($_POST["userPhone"]);

        // $sql = "INSERT INTO user (name,phone) VALUES ('$name','$phone')";
        // $query= mysqli_query($connection, $sql);

        if($name == "" || $name == null || $phone == "" || $phone == null){
            echo "<div class='alert alert-danger col-3 offset-4'>You need to fill the form.</div>";
        }else{
            $sql = "INSERT INTO user (name,phone) VALUES (?,?)";
            // $query= mysqli_query($connection, $sql);
            $stmt = $connection->prepare($sql);
            $stmt->bind_param('ss', $name, $phone);
            $stmt->execute();
            
            if($stmt == true){
                echo "<div class='alert alert-success col-3 offset-4'>User Account created.</div>";
            }else{
                echo "SQL query fails." . mysqli_error();
            }
        }
    }
?>

<?php include_once('./template/footer.php') ?>