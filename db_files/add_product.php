<?php

include '../db_files/session.php';

$user_id = $rows1['id'];
$prod_name = $_POST['prod_name'];
$prod_desc = $_POST['prod_desc'];
$size1 = $_POST['size1'];
$size2 = $_POST['size2'];
$size3 = $_POST['size3'];
$prize1 = $_POST['prize1'];
$prize2 = $_POST['prize2'];
$file_name = $_FILES['file']['name'];  
$file_size = $_FILES['file']['size'];
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
$file_temp_loc = $_FILES['file']['tmp_name'];
$file_store = "C:/xampp/htdocs/database_project/website/ShoeFactory/upload/".$file_name;
move_uploaded_file($file_temp_loc,$file_store);


$query = "SELECT * FROM add_product WHERE prod_name = '$prod_name' && prod_desc = '$prod_desc' && size1 = '$size1' && size2 = '$size2' && size3 = '$size3' && prize1 = '$prize1' && prize2 = '$prize2' product = '$file_name'";
$result = mysqli_query($con,$query);


$num = mysqli_num_rows($result);

if($num == 1){
    echo "<script>alert('Duplicate Data'); window.location='http://localhost/database_project/website/ShoeFactory/pages/add_product.php'</script>";
}
else{
    $sql = "INSERT INTO add_product(prod_name,prod_desc,size1,size2,size3,prize1,prize2,product,product_add_by) VALUES('$prod_name','$prod_desc','$size1','$size2','$size3','$prize1','$prize2','$file_name','$user_id')";
    $output = mysqli_query($con,$sql);
    if($output){
        echo "<script>alert('Successfully Added'); window.location='http://localhost/database_project/website/ShoeFactory/pages/seller_home.php'</script>";
    }
    else{
        echo "<script>alert('Please try again'); window.location='http://localhost/database_project/website/ShoeFactory/pages/add_product.php'</script>";
    }
}

?>