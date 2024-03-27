<?php 
    include 'db_connection.php';
    $r_id = $_GET['r_id'];
    $sql = "DELETE FROM `requests` WHERE `requests`.`r_id` = $r_id";
    $result = mysqli_query($conn,$sql);
    header("Location: /Baby Choice/admin_request_products.php")

?>