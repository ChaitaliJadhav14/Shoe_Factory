<?php
include '../db_files/session.php';

$id = $_POST['id'];
$qry = $con->query("UPDATE place_order SET status = 'Cancel' WHERE order_id = '$id'");
if($qry){

    echo "success";
}
else{
    echo "err";
}

?>

