<?php

include '../includes/connection.php';

$order_id = $_POST['order_id'];
$status = $_POST['status'];

$query = mysqli_query($con,"UPDATE place_order SET `status` = '$status' WHERE order_id = '$order_id'");

if($query){
    echo "<script>alert('Status Changed'); window.location = '../pages/order.php'</script>";
}
else{
    echo "<script>alert('Status has not changed yet'); window.location = '../pages/change_status.php'</script>";
}


// header('location:../pages/order.php');
?>