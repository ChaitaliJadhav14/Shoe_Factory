<?php

session_start();
include '../includes/connection.php';
if(!isset($_SESSION['username']) AND !isset($_SESSION['category'])){
    header('location:../index.php');
}
$username = $_SESSION['username'];
$category = $_SESSION['category'];
$qry = mysqli_query($con,"SELECT * FROM register WHERE username = '$username' AND category = '$category'");
$rows1 = mysqli_fetch_array($qry);

?>
