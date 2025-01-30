<?php

include '../db_files/session.php';


$prod_id = $_POST['prod_id'];
$seller_id = $_POST['seller_id'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$payment = $_POST['payment_method'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];
$prize = $_POST['prize'];
$order_by = $rows1['id'];


$query = "SELECT * FROM place_order WHERE prod_id = '$prod_id'  && firstname = '$firstname' && lastname = '$lastname' && mobile = '$mobile' && address1 = '$address1' && address2 = '$address2' && city = '$city' && `state` = '$state' && pin = '$pin' && payment = '$payment' && size = '$size' && quantity = '$quantity' && prize = '$prize'";
$result = mysqli_query($con,$query);


$sql = "INSERT INTO place_order(prod_id,firstname,lastname,mobile,address1,address2,city,`state`,pin,payment,size,quantity,prize,order_by,seller_id) VALUES('$prod_id','$firstname','$lastname','$mobile','$address1','$address2','$city','$state','$pin','$payment','$size','$quantity','$prize','$order_by','$seller_id')";
$output = mysqli_query($con,$sql);
if($output){
    $query2 = mysqli_query($con,"DELETE FROM cart WHERE user_id = '$order_by' AND prod_id = '$prod_id'");
    echo "<script>alert('Successfully Ordered'); window.location='http://localhost/database_project/website/ShoeFactory/pages/customer_order.php'</script>";
}
else{
    echo "<script>alert('Please try again'); window.location='http://localhost/database_project/website/ShoeFactory/pages/cart.php'</script>";
}




?>