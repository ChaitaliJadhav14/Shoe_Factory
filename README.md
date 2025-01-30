# 👟 Online Shoe Factory
A web-based e-commerce platform for purchasing shoes online, deployed on AWS EC2 for scalability and reliability. Built using PHP and XAMPP, this platform manages orders, payments, shipments, customers, and products efficiently.

# 🚀 Features
     1. User & Seller Modules: Customers can browse, add products to the cart, and place orders. Sellers manage inventory and orders.
     2. Secure Payment System: Integrated payment gateway for hassle-free transactions.
     3. AWS Deployment: Hosted on Amazon EC2, ensuring scalability and performance.
     4. Database Management: Users, orders, shipments, and payments stored securely.
     5. Admin Dashboard: View reports, manage users, and monitor orders.
# 🏗 Tech Stack
     Frontend: HTML, CSS, JavaScript
     Backend: PHP
     Database: MySQL
     Server: Apache (XAMPP)
     Cloud Hosting: AWS EC2
# 🖥 Installation & Setup
     1. Set Up XAMPP
        Download and install XAMPP.
        Start Apache and MySQL from XAMPP Control Panel.
     2. Import Database
        Open phpMyAdmin (http://localhost/phpmyadmin/).
        Create a database (e.g., shoefactory_db).
        Import shoefactory.sql from the project folder.
     3. Configure the Project
        Open config.php and update database credentials:
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "shoefactory_db";
     4. Run the Project
        Open a web browser and go to:
        http://localhost/shoefactory/
# 🌐 Deployment on AWS EC2
    Firstly we have created a EC2 instance. Next we have connect that instance, and then deployed our website on that instance.
