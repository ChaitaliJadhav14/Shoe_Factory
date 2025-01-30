<?php

session_start();
include '../includes/connection.php';

$user_id = $_POST['user_id'];
$prod_id = $_POST['prod_id'];
$size = $_POST['size'];


$sql = "INSERT INTO cart(`user_id`,prod_id,size) VALUES('$user_id','$prod_id','$size')";
$output = mysqli_query($con,$sql);
header('location:../pages/cart.php');

?>