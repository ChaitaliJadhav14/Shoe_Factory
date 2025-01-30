<?php

include '../db_files/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <div class="container" style="margin-top: 150px;">
        <?php
        $query1 = mysqli_query($con,"SELECT * FROM cart WHERE user_id = '".$rows1['id']."'");

                while($row1 = mysqli_fetch_array($query1)){
                    $prod_id = $row1['prod_id'];
                    $sql = mysqli_query($con,"SELECT * FROM add_product WHERE prod_id = '$prod_id'");
                    $rows = mysqli_fetch_array($sql);
        ?>
        <div class="row">
            <div class="col-lg-2">
                <img src="../upload/<?php echo $rows['product'] ?>" height="130px" width="100%">
            </div>
            <div class="col-lg-8">
                <h1><?php echo $rows['prod_name'] ?></h1>
                <form action="place_order.php" method="POST" class="mt-3">
                <input type="hidden" name="prod_id" value="<?php echo $rows['prod_id'] ?>">
                <input type="hidden" name="seller_id" value="<?php echo $rows['product_add_by'] ?>">
                    <input type="hidden" value="<?php echo $rows['prize2'] ?>" name="prize">
                    <select name="size" style="padding: 5px;" required>
                        <option>Select Size</option>
                        <option><?php echo $rows['size1'] ?></option>
                        <option><?php echo $rows['size2'] ?></option>
                        <option><?php echo $rows['size3'] ?></option>
                    </select>
                    <select name="quantity" style="padding: 5px;" required>
                        <option>Select Quantity</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <p class="mt-2">Total Rate : Rs.<?php echo $rows['prize2'] ?></p>
                
            </div>
            <div class="col-lg-2">
                <a href="../db_files/delete_cart.php?delete=<?php echo $row1['cart_id']; ?>" style="text-decoration: none; color: black;"><i class="fas fa-window-close cancel_cart"></i></a>
                <button type="submit" class="btn btn-warning" name="placeOrder" style="margin-top:55px">Place Order</button>
            </form>
            </div>
        </div>
        <hr>
        <?php
            }
        ?>

    <a href="product.php" class="btn btn-success" style="float:right">Continue Shopping</a>

    </div>

    
    <?php

       include '../includes/header2.php';

    ?>

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="../bootstrap-5/js/script.js"></script>
</body>
</html>