
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
</head>
<body>

    <div class="back">
        <div class="login_layer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h1 class="text-center mt-5">Welcome Back !</h1>
                        <p class="login_para">You have login to continue your travelling with us. You can login anytime as you available for your shopping. You can also contact with us as you have any issue while shopping.<br>All the best for your shopping!!!</p>
                            <div class="container">
                                <form action="../db_files/customer_login.php" method="POST">
                                    <div class="box">
                                        <input type="text" name="username" class="input inp1" required>
                                        <div class="label1">
                                            <label>Username</label>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <input type="password" name="password" class="input inp2" id="password" required>
                                        <div class="label2">
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <br><br>
                                    <input type="checkbox" onclick="showPassword()" class="mt-3">&nbsp; <span>Show Password</span>
                                    <br><br><br>
                                    <p style="float: right;"><input type="submit" name="customer" class="btn btn-warning" value="Submit"></p>
                                </form>
                            </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
    


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="../bootstrap-5/js/script.js"></script>
</body>
</html>