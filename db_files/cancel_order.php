<?php

include '../includes/connection.php';

$order_id = $_POST['order_id'];
$reason = $_POST['reason'];
$status = $_POST['status'];

if($status == "Pending"){
    $query = mysqli_query($con,"INSERT INTO cancel_order(order_id,reason) VALUES('$order_id','$reason')");
    if($query){
        $update = mysqli_query($con,"UPDATE place_order SET `status` = 'Order Cancelled' WHERE order_id = '$order_id'");
    }
    else{
        header('location:../pages/customer_order.php');
    }
    header('location:../pages/customer_order.php');
}
else{
    echo "<script>alert('You cannot cancel this order as this product has already $status'); window.location = '../pages/customer_order.php'</script>";
}
?>