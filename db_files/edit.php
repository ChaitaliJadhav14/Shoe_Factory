<?php

session_start();
include '../includes/connection.php';

$update = $_POST['prod_id'];
$prod_name = $_POST['prod_name'];
$prod_desc = $_POST['prod_desc'];
$size1 = $_POST['size1'];
$size2 = $_POST['size2'];
$size3 = $_POST['size3'];
$prize1 = $_POST['prize1'];
$prize2 = $_POST['prize2'];
$file_name = $_FILES['file']['name'];  
$file_size = $_FILES['file']['size'];
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
$file_temp_loc = $_FILES['file']['tmp_name'];
$file_store = "C:/xampp/htdocs/database_project/website/ShoeFactory/upload/".$file_name;
move_uploaded_file($file_temp_loc,$file_store);

$query = "UPDATE add_product SET prod_name = '$prod_name', prod_desc = '$prod_desc', size1 = '$size1', size2 = '$size2', size3 = '$size3', prize1 = '$prize1', prize2 = '$prize2' WHERE prod_id = '$update'";
$result = mysqli_query($con,$query);

header('location:../pages/seller_home.php');

?>