<?php

include '../db_files/session.php';
include '../includes/connection.php';

$query = "SELECT * FROM add_product WHERE product_add_by = '".$rows1['id']."'";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>

<div class="container">
    <a href="add_product.php" class="btn btn-warning" style="margin-top: 200px; float: right;">Add Product</a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <table class="table table-striped table-bordered text-center">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Size 1</th>
            <th>Size 2</th>
            <th>Size 3</th>
            <th>Prize</th>
            <th>Prize with Discount</th>
            <th colspan=3>Edit</th>
        </tr>
            <?php
                while($rows = mysqli_fetch_array($result)){
            ?>        
                <tr>
                    <td><?php echo $rows['prod_id'] ?></td>
                    <td><?php echo $rows['prod_name'] ?></td>
                    <td><?php echo $rows['prod_desc'] ?></td>
                    <td><?php echo $rows['size1'] ?></td>
                    <td><?php echo $rows['size2'] ?></td>
                    <td><?php echo $rows['size3'] ?></td>
                    <td><?php echo $rows['prize1'] ?></td>
                    <td><?php echo $rows['prize2'] ?></td>
                    <td><button class="btn btn-success"><a style="text-decoration:none" href="../db_files/view.php?view=<?php echo $rows['prod_id']; ?>" class="text-light">View</a></button></td>
				    <td><button class="btn btn-warning"><a style="text-decoration:none" href="../db_files/update.php?update=<?php echo $rows['prod_id']; ?>" class="text-dark">Update</a></button></td>
				    <td><button class="btn btn-danger"><a style="text-decoration:none" href="../db_files/delete.php?delete=<?php echo $rows['prod_id']; ?>" class="text-light">Delete</a></button></td>
                </tr>
            <?php    
                }
            ?>
    </table>
</div>
    

<?php

include '../includes/header3.php';
// include '../includes/footer.php';

?>    

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>