<?php

include '../db_files/session.php';

$query = mysqli_query($con,"SELECT * FROM place_order WHERE order_by = '".$rows1['id']."'");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-top:150px">
        <h1 class="text-center">My Order</h1><hr>
       
        <?php
            while($order = mysqli_fetch_array($query)){
                $prod_id = $order['prod_id'];
                $sql = mysqli_query($con,"SELECT * FROM add_product WHERE prod_id = '$prod_id'");
                $product = mysqli_fetch_array($sql);
                $tempvar = $order['order_id'];

        ?>
        <div class="row">
            <div class="col-lg-2">
                <img src="../upload/<?php echo $product['product'] ?>" height="130px" width="100%">
            </div>
            <div class="col-lg-8">
            <input type="hidden" name="" value="<?php echo $order['order_id'] ?>" id="ordid">
                <h2 class="mt-2"><?php echo $product['prod_name'] ?></h2>
                <p>Size : <?php echo $order['size'] ?></p>
               
                <p>Quantity : <?php echo $order['quantity'] ?></p>
                <p>Status of Product : <?php echo $order['status'] ?></p>
                <p id="sts" style="display:none"></p>
            </div>
            <div class="col-lg-2">
                <h3 class="mt-5 text-center">Total</h3>
                <p class="text-center"><?php echo $order['prize'] ?></p>
                <p class="text-center"><a href="customer_cancel.php?order_id=<?php echo $order['order_id']; ?>" class="cancel_order">Cancel Order</a></p>
            </div>
        </div>
        <hr>
        <?php
            }
        ?>
      
    </div>



    <?php include '../includes/header2.php' ?>

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>