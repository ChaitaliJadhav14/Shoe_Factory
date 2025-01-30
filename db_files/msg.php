<?php

include '../includes/connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "SELECT * FROM `message` WHERE firstname = '$fname' && lastname = '$lname' && email = '$email' && `subject` = '$subject' && `message` = '$message'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<script>alert('Duplicate Data'); window.location='http://localhost/database_project/website/ShoeFactory/pages/contactus_after.php'</script>";
}
else{
    $sql = "INSERT INTO `message`(firstname,lastname,email,`subject`,`message`) VALUES('$fname','$lname','$email','$subject','$message')";
    $output = mysqli_query($con,$sql);
    if($output){
    echo "<script>alert('Message has been sent'); window.location='http://localhost/database_project/website/ShoeFactory/pages/contactus_after.php'</script>";
    }
    else{
    echo "<script>alert('Your message does not send'); window.location='http://localhost/database_project/website/ShoeFactory/pages/contactus_after.php'</script>";
    }
}

?>