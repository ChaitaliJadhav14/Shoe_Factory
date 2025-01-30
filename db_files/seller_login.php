<?php

session_start();
include '../includes/connection.php';

if(isset($_POST['seller'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE username = '$username' && `password` = '$password'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_fetch_array($result);
    $category = $rows['category'];

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['category'] = $rows['category'];
        $_SESSION['username'] = $username;
        if($category == "2"){
            header('location:../pages/seller_home.php');
        }
        else{
            echo "<script>alert('You are not a Seller'); window.location='http://localhost/database_project/website/ShoeFactory/pages/login.php'</script>";
        }
    }
    else{
        echo "<script>alert('You have not registered yet'); window.location='http://localhost/database_project/website/ShoeFactory/pages/register.php'</script>";
    }

}

?>