<?php

include '../includes/connection.php';

$prize = $_POST['prize'];
$quantity = $_POST['quantity'];

if($quantity == "Select Quantity"){
    echo "<script>alert('Please Select Quantity'); window.location='../pages/cart.php'</script>";
}
else{
    $value = $prize * $quantity;
    echo "<script>alert('$value'); window.location='../pages/cart.php'</script>";
    // header('location:../pages/cart.php');
}

?>