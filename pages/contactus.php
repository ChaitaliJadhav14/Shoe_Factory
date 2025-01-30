<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


    <div class="contact">
        <img src="../images/contact_bg.jpg" height="700px" width="100%">
        <div class="layer">
            <h1 class="text-center">Get In Touch</h1>
            <h3 class="text-center">"You've got questions, we've got answers"</h3>
        </div>
    </div>

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
                    <div class="contact_box">
                        <h3>Address :</h3>
                        <hr>
                        <p>204, Sai Bhavan, Suryadarshan Tower, NDG Highway, near Kutubkumar Hotel, Thane <br> 400 601</p>
                        <hr>
                        <p>www.shoefactory.ml</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
                    <div class="contact_box">
                        <h3>Mobile :</h3>
                        <hr>
                        <p>+91 9876543210</p>
                        <h3>Email :</h3>
                        <hr>
                        <p>shoefactory2019@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" data-aos="zoom-in" data-aos-duration="2000">
        <div class="map">
            <h1 class="text-center">Find Us At</h1>
            <!-- <hr style="color: #fca311";> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.9817974834264!2d73.0169125153845!3d19.10845445591586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0e878e988af%3A0xa7d9b0dfe4415778!2sMBP%20Mahape%2C%20MIDC%20Industrial%20Area%2C%20Sector%201%2C%20Kopar%20Khairane%2C%20Navi%20Mumbai%2C%20Maharashtra%20400710!5e0!3m2!1sen!2sin!4v1612605871673!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0; margin-top: 10px; border-radius: 25px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>


    <div class="msg_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
                    <img src="../images/contact_us.jpg" width="100%" height="560px">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">
                    <h1>Drop A Message</h1>
                    <!-- <hr style="border-bottom: 2px solid #fca311;"> -->
                    <form action="customer_login.php" method="post">
                        <!-- Name -->
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

                        <!-- email -->
                        <div class="box">
                            <input type="email" name="email" class="input inp3" required>
                            <div class="label3">
                                <label>Email ID</label>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="box">
                            <input type="text" name="subject" class="input inp4" required>
                            <div class="label4">
                                <label>Subject</label>
                            </div>
                        </div>
                        <!-- Message -->
                        <div class="box">
                            <input type="text" name="message" class="input inp5" required>
                            <div class="label5">
                                <label>Message</label>
                            </div>
                        </div>
                        <br>
                        <!-- Form Submit -->
                        <div>
                            <input type="submit" value="Submit" class="btn btn-dark" style="float: right;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <?php
        include '../includes/sub_header.php';
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