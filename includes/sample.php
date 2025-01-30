<?php

$con = mysqli_connect('localhost','root','','sample');

// $qry = "INSERT INTO register(fname,lname,email,pass)VALUES('Pratik','sawant','p@gmail.com','123456')";
$qry = "SELECT * FROM register";

$result = mysqli_query($con,$qry);

if($result){
    
   echo "Success";

   while($data=mysqli_fetch_array($result)){
    echo $data['fname'];
    echo $data['lname'];
    echo $data['email'];
    echo $data['pass'];
} 
   
}
else{
    echo"Err";
}
?>