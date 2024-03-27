<?php 
    include 'db_connection.php';
    $cp_id = $_GET['cp_id'];
    $sql = "DELETE FROM `customize` WHERE `customize`.`cp_id` = $cp_id";
    $result = mysqli_query($conn,$sql);
    header("Location: /Baby Choice/admin_customize_products.php")

?>