<?php

session_start();
include '../includes/connection.php';

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$category = $_POST['category'];
$username = $_POST['username'];
$password = $_POST['password1'];


if($category == ""){
    echo "<script>alert('Select Category'); window.location='http://localhost/database_project/website/ShoeFactory/pages/register.php'</script>";
}
else{
    $query = "SELECT * FROM register WHERE firstname = '$firstname' && lastname = '$lastname' && email = '$email' && mobile = '$mobile' && category = '$category' && username = '$username' && `password` = '$password'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "<script>alert('Duplicate Data'); window.location='http://localhost/database_project/website/ShoeFactory/pages/register.php'</script>";
    }
    else{
        $sql = "INSERT INTO register(firstname,lastname,email,mobile,category,username,`password`) VALUES('$firstname','$lastname','$email','$mobile','$category','$username','$password')";
        $output = mysqli_query($con,$sql);
        if($output){
            echo "<script>alert('Successfully Registered'); window.location = 'http://localhost/database_project/website/ShoeFactory/pages/login.php'</script>";
        }
        else{
            echo "<script>alert('Please try again'); window.location = 'http://localhost/database_project/website/ShoeFactory/pages/register.php'</script>";
        }
    }
}



?>