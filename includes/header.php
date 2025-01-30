<?php

// include '../db_files/session.php';
include '../includes/connection.php';

$query = "SELECT * FROM cart WHERE user_id = '".$rows1['id']."'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

?>

<div class="navigation">
  <div class="container">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand " href="#"><img src="../images/logo.jpg" height="80px" width="110px" style="border-radius: 100%;" alt=""><span class="head">Shoe Factory</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-chevron-bar-down"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="customer_home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus_after.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Products</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contactus_after.php">Contact</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $rows1['firstname']."&nbsp;".$rows1['lastname']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="nav-link" href="customer_order.php">Order</a></li>
                  <li><a class="nav-link" href="../db_files/logout.php">Logout</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart">
                  <div class="cart_num"><?php echo $num ?></div>
                </i></a>
              </li>
             
            </ul>
            
          </div>
        </div>
      </nav>
  </div>


</div>