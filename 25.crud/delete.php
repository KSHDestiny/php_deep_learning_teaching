<?php include_once('./template/connection.php') ?>

<?php
    $id = htmlentities($_GET['userId']);

    $sql = "DELETE FROM user WHERE id=?";
    // $query = mysqli_query($connection, $sql);
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('s', $id);
    $stmt->execute();

    if($stmt){
        header("location: ./index.php");
    }else{
        echo "Delete Fails " . mysqli_error();
    }
?>