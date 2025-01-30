<?php

include '../db_files/session.php';

$order_id = $_GET['order_id'];
$query = mysqli_query($con,"SELECT * FROM place_order WHERE order_id = '$order_id'");
$order = mysqli_fetch_array($query);

$prod_id = $order['prod_id'];
$query2 = mysqli_query($con, "SELECT * FROM add_product WHERE prod_id = '$prod_id'");
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

    <div class="container">
        <div class="status_div">
            <div class="container mt-2">
                <h5>Order Number <?php echo $order['order_id'] ?></h5>
                <h2><?php echo $product['prod_name'] ?></h2>
                <hr>
                    <form action="../db_files/change_status.php" method="POST">
                        <input type="hidden" name="order_id" value="<?php echo $order['order_id'] ?>">
                        <h5>Process of Product :
                        <select name="status" class="status_list">
                            <option><?php echo $order['status'] ?></option>
                            <option>Pending</option>
                            <option>Shipped</option>
                            <option>Delivered</option>
                            <option>Cancelled</option>
                        </select>
                        <br><br>
                        <button type="submit" class="btn btn-dark" style="float: right; margin-right: 100px;">Change Status</button>
                    </form>
                </h5>
            </div>
        </div>
        <div class="image">
            <img src="../upload/<?php echo $product['product'] ?>" style="margin-top: 25px;" height="350px" width="90%">
        </div>
    </div>



    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>