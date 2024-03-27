<?php 
    include 'db_connection.php';
    $orderid = $_GET['order_id'];
    $sql = "DELETE FROM `orders` WHERE `orders`.`order_id` = $orderid";
    $result = mysqli_query($conn,$sql);
    header("Location: /Baby Choice/orders.php")

?>