<?php 

include '../db_files/session.php';
$query = "SELECT * FROM add_product";
$result = mysqli_query($con,$query);

$review = mysqli_query($con,"SELECT * FROM `message`");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Shoe Factory</title>
  </head>
  <body>

      

    <div class="pt-5" style="margin-top: 100px;">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/banner1.jpg" class="d-block w-100" alt="..." height="450px">
          </div>
          <div class="carousel-item">
            <img src="../images/banner2.jpg" class="d-block w-100" alt="..." height="450px">
          </div>
          <div class="carousel-item">
            <img src="../images/banner3.jpg" class="d-block w-100" alt="..." height="450px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
          <video muted autoplay loop class="video">
            <source src="../video/commercial.mp4" type="video/mp4">
          </video>
        </div>
        <div class="col-lg-6 pt-3 video_info" data-aos="fade-left" data-aos-duration="2000">
        <h1>Walk to the comfort</h1>
        <p>You know one thing people need at all times around the world? It is pretty easy: shoes. Regardless of your location on the planet, a new shoe store is always a good idea as a business venture. As it always happens, location and marketing play a significant role in your success. Now that you have a ready strategy to move forward, it’s time to come up with some ideas. A shoe store can be successful if you do good branding. You need a solid strategy to let people know about the store. A target market refers to a group of customers to whom a company wants to sell its products and services, and to whom it directs its marketing efforts.</p>
        </div>
      </div>
    </div>
   
    <section class="product" id="product">

      <div class="container pt-5 mt-5">
<h1>Our Product</h1>
<hr>
        <div class="row">
          <?php
          $card = 1;
            while($rows = mysqli_fetch_array($result) AND ($card <= 6)){
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
          $card++;
            }
          ?> 
        </div>
      </div>
    </section>


    <section class="banner mt-5" id="banner">
      <div class="box2">

        <a href="product.php" class="btn btn-warning btn-factory-btn">Show More</a>

      </div>
    
    </section>

    <section>
      <div class="container mt-5 pt-5" data-aos="fade-up" data-aos-duration="2000">
        <h1>Customer review</h1>
        <hr>
        <div class="row">
          <?php
          $x = 1;
          while($msg = mysqli_fetch_array($review) AND ($x <= 3)){
          ?>
          <div class="col-lg-4">
            <div class="card" style="height:200px">
              <div class="card-body">
                <h3 class="card-title" style="color: #ff9100;"><?php echo $msg['firstname']."&nbsp;".$msg['lastname'] ?></h3>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $msg['subject'] ?></h6>
                <hr>
                <p class="card-text"><?php echo $msg['message'] ?></p>
              </div>
            </div>
          </div>
           <?php
           $x++;
              }
            ?>
         </div>

      </div>
    </section>


<?php

include '../includes/header.php';
include '../includes/footer.php';

?>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->




  </body>
</html>