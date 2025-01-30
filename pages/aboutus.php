<?php

include '../includes/connection.php';

$query1 = mysqli_query($con,"SELECT * FROM register WHERE category = '1'");
$customer = mysqli_num_rows($query1);

$query2 = mysqli_query($con,"SELECT * FROM register WHERE category = '2'");
$Seller = mysqli_num_rows($query2);

$query3 = mysqli_query($con,"SELECT * FROM add_product");
$product = mysqli_num_rows($query3);

$query4 = mysqli_query($con,"SELECT * FROM `message`");
$message = mysqli_num_rows($query4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>


    <div class="container partners">
        <h1 class="text-center">We Are Partners</h1>
        <p class="text-center" style="font-size: 23px; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 2px;">
        The partnership is crucial to the growth of any business venture. A partnership manifests itself in different forms, ranging from business owners cooperating to invest in a project to share technical knowledge and ideas between firms.
        </p>
        <p class="text-center"><a class="btn btn-dark" href="team.php">Know More</a></p>
    </div>

    <div class="bg" data-aos="zoom-in" data-aos-duration="2000">
        <img src="../images/partners.jpg" width="100%">
    </div>

    <div class="works mt-5 w-100">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="text-center pt-5">How We work ?</h1>
            <p class="text-center" style="font-size: 23px; font-family: 'Roboto Condensed', sans-serif; letter-spacing: 2px;">
            Small businesses often are more flexible about allowing casual wear in the office. You'll enjoy greater flexibility. Small companies are less tied to policy and precedent than big conglomerates, so they can be more flexible with remote work and in general. You can pick your tech.
            </p>
            <!-- <p class="text-center"><a class="btn btn-dark" href="more.php">Read More</a></p> -->
        </div>
    </div>

    <div class="mission" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="../images/mission.jpg" height="500px" width="90%" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-delay="2000" data-aos-duration="3000">
                </div>
                <div class="col-lg-6">
                    <h1>Our Mission</h1>
                    <p>"Our vision is a world in which people's basic need such as footwear is fulfilled in an environmentally sustainable way, and a company that improves the quality of the environment and the communities where we live and work."</p>
                </div>
            </div>
        </div>
    </div>


    <div class="counter mt-5" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <h1 class="text-center pt-5 mb-5">Our Process</h1>
            <div class="row">
                <div class="col-lg-3">
                    <h2><?php echo $Seller ?></h2>
                    <p>Seller</p>
                </div>
                <div class="col-lg-3">
                    <h2><?php echo $customer ?></h2>
                    <p>Customer</p>
                </div>
                <div class="col-lg-3">
                    <h2><?php echo $product ?></h2>
                    <p>Product</p>
                </div>
                <div class="col-lg-3">
                    <h2><?php echo $message ?></h2>
                    <p>Message</p>
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