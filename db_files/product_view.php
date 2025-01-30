<?php

include '../includes/connection.php';

$view = $_GET['view'];
$query = "SELECT * FROM add_product WHERE prod_id = '$view'";
$result = mysqli_query($con,$query);

$rows = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
</head>
<body>


  <div class="container text-center">
    <h1 class="mt-5 mb-5"><?php echo $rows['prod_name'] ?></h1>
    <img src="../upload/<?php echo $rows['product'] ?>" width="70%" height="500px">
  </div>



    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
</body>
</html>