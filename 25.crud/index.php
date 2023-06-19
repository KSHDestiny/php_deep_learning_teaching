<?php include_once('./template/header.php') ?>

<?php include_once('./template/connection.php') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered col-12">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Created_at</th>
                            <th>Update & Delete</th>
                        </tr>
                        <?php 
                            $sql = "SELECT * FROM user";
                            $query = mysqli_query($connection, $sql);
                            // $totalRow = mysqli_num_rows($query);
                            // echo $totalRow;

                            while($row = mysqli_fetch_assoc($query)){
                                // print_r($row);
                                $time = date("d-M-Y(D)",strtotime($row['created_at']));
                                echo "
                                <tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>$time</td>
                                    <td>
                                        <a href='./update.php?userId={$row['id']}' class='btn btn-warning'>Update</a>
                                        <a href='./delete.php?userId={$row['id']}' class='btn btn-danger'>Delete</a>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('./template/footer.php') ?>