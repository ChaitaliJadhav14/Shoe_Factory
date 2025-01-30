<?php

session_start();
include '../includes/connection.php';


$view = $_GET['view'];
$query = "SELECT * FROM add_product where prod_id = $view";
$result = mysqli_query($con,$query);

$rows = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1><?php echo $rows['prod_name'] ?></h1>
        <img src="../upload/<?php echo $rows['product'] ?>" height="500px" width="500px" style="margin: auto;" data-aos="zoom-in" data-aos-duration="2000">
        <br>
        <a href="../pages/seller_home.php" class="btn btn-warning">Close</a>
    </div>


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>