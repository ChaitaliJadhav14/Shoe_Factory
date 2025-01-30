<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
</head>
<body>

    <div class="container" style="padding-top: 170px;">
        <div class="row">
            <div class="col-lg-6">
                <div class="container">
                    <div class="login_box" id="loginBox" onmouseover="sellerOver()" onmouseout="sellerOut()">
                        <h1 id="seller">Seller Login</h1>
                        <p id="user_para"></p>
                      <div class="text-center">
                        <a id="login_btn" href="../pages/seller_login.php" class="login_btn"></a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="login_box" id="loginBox2" onmouseover="customerOver()" onmouseout="customerOut()">
                        <h1 id="customer">Customer Login</h1>
                        <p id="customer_para"></p>
                        <div class="text-center">
                            <a id="customer_btn" href="../pages/customer_login.php" class="login_btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php 
        include '../includes/sub_header.php';
    ?>

    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../bootstrap-5/js/script.js"></script>
</body>
</html>