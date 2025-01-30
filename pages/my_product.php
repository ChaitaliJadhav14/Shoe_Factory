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
    <title>My Product</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>

    <div class="container" style="margin-top:150px">
        <h1 class="text-center">Products</h1> 
        
        <div class="row">
            <?php
            while($rows = mysqli_fetch_array($result)){
            ?> 
            <div class="col-lg-4 mt-3">
                <img src="../upload/<?php echo $rows['product'] ?>" height="300px" width="300px">
                <h3 class="text-center"><?php echo $rows['prod_name'] ?></h3>
                <hr>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    <?php

    include '../includes/header4.php';
    
    ?>  

    <script src="../../bootstrap-5/js/jquery.js"></script>
    <script src="../../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>