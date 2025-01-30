<?php

session_start();
include '../includes/connection.php';

$delete = $_GET['delete'];
$query = "DELETE FROM add_product WHERE prod_id = $delete";
mysqli_query($con,$query);

header('location:../pages/seller_home.php');
?>