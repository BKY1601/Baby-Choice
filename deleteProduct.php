<?php 
    include 'db_connection.php';
    $productid = $_GET['productid'];
    $sql = "DELETE FROM `products` WHERE `products`.`p_id` = $productid";
    $result = mysqli_query($conn,$sql);
    header("Location: /Baby Choice/manage_products.php")

?>