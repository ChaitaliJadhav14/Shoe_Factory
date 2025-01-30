<?php

include '../includes/connection.php';

$order_id = $_GET['order_id'];
$query = mysqli_query($con,"SELECT * FROM place_order WHERE order_id = '$order_id'");
$order = mysqli_fetch_array($query);

$prod_id = $order['prod_id'];
$query2 = mysqli_query($con,"SELECT * FROM add_product WHERE prod_id = '$prod_id'");
$product = mysqli_fetch_array($query2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-danger">Cancel Order : <?php echo $order['order_id'] ?></h1>
            <hr>
            <div class="col-lg-6">
                <img src="../upload/<?php echo $product['product'] ?>" width="100%" height="350px"><hr>
                <h3 class="text-center"><?php echo $product['prod_name'] ?></h3>
                <h5 class="text-center">Size : <?php echo $order['size'] ?> &nbsp;&nbsp; Quantity : <?php echo $order['quantity'] ?></h5>
                <h5 class="text-center">Total Rate : &#8377;&nbsp;<?php echo $order['prize'] ?>/-</h5>
            </div>
            <div class="col-lg-6 bg-warning">
                <h1 class="text-center mt-5">Select reason to cancel this product !!!</h1><hr>
                <h5 style="float: right">Order Id : <?php echo $order['order_id'] ?></h5>
                <form action="../db_files/cancel_order.php" method="POST" style="margin-top: 100px; text-align: center;">
                    <input type="hidden" name="order_id" value="<?php echo $order['order_id'] ?>">
                    <input type="hidden" name="status" value="<?php echo $order['status'] ?>">
                    <span style="font-size: 20px;">Delevered product is </span>
                    <select name="reason" class="bg-warning" style="font-size: 20px;">
                        <option>Faulty Piece</option>
                        <option>Size Incorrect</option>
                        <option>Totally diferent product</option>
                        <option>Diferent Colour</option>
                    </select><br><br><br>
                    <button type="submit" class="btn btn-dark">Cancel Order</button>
                    <br><br><br>
                    <h6>Sorry for the inconvenience and trouble caused. We apologise for any inconvenience caused. Please accept our sincere apologies.</h6>
                </form>
            </div>
        </div>
    </div>


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>