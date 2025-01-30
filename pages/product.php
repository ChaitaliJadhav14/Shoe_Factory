<?php 

include '../db_files/session.php';
$query = "SELECT * FROM add_product";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-lg-6" style="margin-top: 200px;">
                <h1 data-aos="fade-right" data-aos-duration="2000">Bring power to your steps</h1>
                <p style="font-size: 20px;" data-aos="fade-right" data-aos-duration="2000">To be in your power is to trust that you are in the right place at the right time</p>
            </div>
            <div class="col-lg-6">
                <img src="../images/product_bg.jpg" height="400px" width="100%" data-aos="zoom-in" data-aos-duration="3000">
            </div>
        </div>
    </div>
<br><br><br><br>
    <div class="container">
        <h1>Get Your Choice...</h1>
        <div class="row">
          <?php
            while($rows = mysqli_fetch_array($result)){
          ?>
          <div class="col-lg-4 mt-4">
            <div class="card" data-aos="zoom-in" data-aos-duration="2000">
              <img src="../upload/<?php echo $rows['product'] ?>" height="300px" width="100%">
             
              <div class="card-body">
                
                  <h3><?php echo $rows['prod_name'] ?></h3>
                   <p><b>Actual Price : ₹ <del><?php echo $rows['prize1'] ?></del></b></p>
                <p><b>Discounted Price : ₹ <?php echo $rows['prize2'] ?></b></p>
                  <form action="../db_files/cart.php" method="POST">
                  <input type="hidden" name="prod_id" id="" value=<?php echo $rows['prod_id'] ?>>
                  <input type="hidden" name="user_id" id="" value=<?php echo $rows1['id'] ?>>
                    <div class="form-group">
                      <select name="size" class="form-control" required>
                        <option>Select Size</option>
                        <option><?php echo $rows['size1'] ?></option>
                        <option><?php echo $rows['size2'] ?></option>
                        <option><?php echo $rows['size3'] ?></option>
                      </select>
                    </div>
                  
                    <hr>
                  
                    <div class="row mt-2">
                      <div class="col-lg-6">
                        <div class="d-grid gap-2">
                          <a href="../db_files/product_view.php?view=<?php echo $rows['prod_id']; ?>"><button type="button" class="btn-factory">Quick View</button></a>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="d-grid gap-2">
                          <button type="submit" class="btn-factory shadow ">Add To Cart</button>
                        </div>
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          <?php
            }
          ?> 
        </div>
        
    </div>




    <?php

        include '../includes/header2.php';
        include '../includes/footer.php';

    ?>


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>