
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
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
                        <p class="login_para">You have login to continue your travelling with us. You can login anytime as you available for your business. You can also contact with us as you have any issue while working.<br>All the best for your business!!!</p>
                            <div class="container">
                                <form action="../db_files/seller_login.php" method="POST">
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
                                    <input type="checkbox" onclick="showPassword()" class="mt-3">&nbsp; <span">Show Password</span>
                                    <br><br><br>
                                    <p style="float: right;"><input type="submit" name="seller" class="btn btn-warning" value="Submit"></p>
                                </form>
                            </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
    


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="../bootstrap-5/js/script.js"></script>
</body>
</html>