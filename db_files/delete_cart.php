<?php

session_start();
include '../includes/connection.php';

$delete = $_GET['delete'];
$query = "DELETE FROM cart WHERE cart_id = $delete";
mysqli_query($con,$query);

header('location:../pages/cart.php');
?>