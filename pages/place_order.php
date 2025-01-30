<?php

include '../includes/connection.php';

if(isset($_POST['placeOrder'])){
    $prod_id = $_POST['prod_id'];
    $seller_id = $_POST['seller_id'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $prize = $_POST['prize'];
    $total = $prize * $quantity;

    $product_fetch = mysqli_query($con,"SELECT * FROM add_product WHERE prod_id = '$prod_id'");
    $product = mysqli_fetch_array($product_fetch);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>

    <div class="back">
        <div class="login_layer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" style="margin-top:200px">
                        <img src="../upload/<?php echo $product['product'] ?>" height="500px" width="100%">
                        <h3><?php echo $product['prod_name'] ?></h3>
                        <h5><?php echo $product['prod_desc'] ?></h5>
                        <hr>
                        <h5>Size : <?php echo $size ?></h5>
                        <h5>Quantity : <?php echo $quantity ?></h5>
                        <br>
                        <h3 style="float:right; margin-right:50px">Total - <?php echo "&#8377; ".$total."/-" ?></h3><br><br>
                        <a href="cart.php" class="btn btn-warning">Edit Order</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-center" style="margin-top: 150px;">Order Product</h1>
                        <!-- <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, assumenda blanditiis, voluptates consectetur adipisci fuga aut illum doloribus quae, a provident. Aspernatur dolore ab a labore quam eos eum aperiam!</p> -->
                            <div class="container">
                                <form action="../db_files/place_order.php" method="POST">
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="box">
                                                <input type="text" name="fname" class="input inp1" required>
                                                <div class="label1">
                                                    <label>First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="box">
                                                <input type="text" name="lname" class="input inp2" required>
                                                <div class="label2">
                                                    <label>Last Name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <input type="text" name="mobile" class="input inp3" required>
                                        <div class="label3">
                                            <label>Mobile</label>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <input type="text" name="address1" class="input inp4" required>
                                        <div class="label4">
                                            <label>Address Line 1</label>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <input type="text" name="address2" class="input inp5" required>
                                        <div class="label5">
                                            <label>Address Line 2</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="box">
                                                <input type="text" name="city" class="input inp6" required>
                                                <div class="label6">
                                                    <label>City</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="box">
                                                <input type="text" name="state" class="input inp7" required>
                                                <div class="label7">
                                                    <label>State</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <input type="text" name="pin" class="input inp8" required>
                                        <div class="label8">
                                            <label>Pin Code</label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="floating-label mt-3">
                                        <select class="floating-select input" name="payment_method" onclick="this.setAttribute('value', this.value);" value="">
                                          <option></option>
                                          <option>Cash On Delivery</option>
                                        </select>
                                        <span class="highlight"></span>
                                        <label class="select_label">Select Payment Method</label>
                                    </div>

                                    <br><br>
                                       
                                      
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="hidden" name="prod_id" value="<?php echo $prod_id ?>">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="hidden" name="seller_id" value="<?php echo $seller_id ?>">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="hidden" name="size" value="<?php echo $size ?>"> 
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
                                        </div>
                                        <div class="col-lg-3">
                                            <input type="hidden" name="prize" value="<?php echo $total ?>">
                                        </div>
                                    </div>

                                    <p style="float: right;"><input type="submit" class="btn btn-warning" value="Submit"></p>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include '../includes/header2.php';
        // include '../includes/footer.php';
    ?>
    


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="../bootstrap-5/js/script.js"></script>
</body>
</html>