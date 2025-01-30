<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>

    <div class="back">
        <div class="login_layer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <h1 class="text-center" style="margin-top: 150px;">Register Now</h1>
                        <!-- <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, assumenda blanditiis, voluptates consectetur adipisci fuga aut illum doloribus quae, a provident. Aspernatur dolore ab a labore quam eos eum aperiam!</p> -->
                            <div class="container">
                                <form action="../db_files/register.php" method="POST">
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
                                        <input type="email" name="email" class="input inp3" required>
                                        <div class="label3">
                                            <label>Email ID</label>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <input type="text" name="mobile" class="input inp4" required>
                                        <div class="label4">
                                            <label>Mobile Number</label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="floating-label mt-3">
                                        <select class="floating-select input" name="category" onclick="this.setAttribute('value', this.value);" value="">
                                          <option value=""></option>
                                          <option value="1" class="option">Customer</option>
                                          <option value="2" class="option">Seller</option>
                                        </select>
                                        <span class="highlight"></span>
                                        <label class="select_label">Select Category</label>
                                    </div>
                                       
                                      
                                    <div class="box">
                                        <input type="text" name="username" class="input inp5" required>
                                        <div class="label5">
                                            <label>Username</label>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <input type="password" name="password1" class="input inp6" id="password1" required onkeyup="strength()">
                                        <i class="bi bi-eye-slash-fill icon" id="icon1" onclick="icon1()"></i>
                                        <div class="label6">
                                            <label>Password</label>
                                        </div>
                                    </div>

                                    <p id="warning" style="font-size: 18px; padding-left: 20px;"></p>

                                    <div class="box">
                                        <input type="password" name="password2" class="input inp7" id="password2" required onkeyup="check()">
                                        <i class="bi bi-eye-slash-fill icon" id="icon2" onclick="icon2()"></i>
                                        <div class="label7">
                                            <label>Re-Enter Password</label>
                                        </div>
                                    </div>

                                    
                                    
                                    <p id="password_match" style="font-size: 18px; padding-left: 20px;"></p>

                                    </div>
                                    <br><br><br>
                                    <p style="float: right;"><input type="submit" class="btn btn-warning" value="Submit"></p>
                                </form>
                            </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include '../includes/sub_header.php';
        // include '../includes/footer.php';
    ?>
    


    <script src="../bootstrap-5/js/jquery.js"></script>
    <script src="../bootstrap-5/js/bootstrap.js"></script>
    <script src="../bootstrap-5/js/script.js"></script>
</body>
</html>