<?php

include '../db_files/session.php';


$seller = $rows1['id'];

$query = "SELECT * FROM place_order LEFT JOIN add_product ON add_product.prod_id = place_order.prod_id WHERE seller_id = '$seller'";
$result = mysqli_query($con,$query);

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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<div class="container" style="margin-top:150px">
<h1 class="text-center">Orders</h1><br>

    <table class="table table-striped table-bordered">
        <tr>
            <th>Customer Details</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Method of Payment</th>
            <th>Prize</th>
            <th>Status</th>
        </tr>
            <?php
                while($rows = mysqli_fetch_assoc($result)){
                    // echo $err;
            ?>        
                <tr>
                    <td><?php echo $rows['firstname']."&nbsp;".$rows['lastname']."<br>".$rows['address1']."<br>".$rows['address2']."<br>".$rows['city']."&nbsp;".$rows['state']."&nbsp;-&nbsp;".$rows['pin']."<br>".$rows['mobile'] ?></td>
                    <td><?php echo $rows['prod_name'] ?></td>
                    <td><?php echo $rows['size'] ?></td>
                    <td><?php echo $rows['quantity'] ?></td>
                    <td><?php echo $rows['payment'] ?></td>
                    <td><?php echo $rows['prize'] ?></td>
                    <td><?php echo $rows['status'] ?>&nbsp;&nbsp;<a href="change_status.php?order_id=<?php echo $rows['order_id']; ?>"><i class="fas fa-edit text-success"></i></a></td>
                </tr>
            <?php    
            }
            ?>
    </table>
</div>




<!-- Status Modal  -->

<!-- Modal -->

    

<?php

include '../includes/header3.php';
// include '../includes/footer.php';

?>    

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>