<?php 
    session_start();
    $userid = $_SESSION['userid'];
    include "db_connection.php";
    
    // $sql = "DELETE FROM `cart` WHERE `cart`.`cart_p_id` = 'SELECT * FROM `cart` WHERE `p_id` = $productid'";
    // $result = mysqli_query($conn,$sql);
    if(isset($_GET['request']) && $_GET['request'] == "delete"){
        $productid = $_GET['productid'];
        $sql = "SELECT * FROM `cart` WHERE `p_id` = $productid";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $cartProductId = $row['cart_p_id'];
        $sql1 = "DELETE FROM `cart` WHERE `cart`.`cart_p_id` = $cartProductId";
        $result1 = mysqli_query($conn,$sql1);
        header("Location: /Baby Choice/cart.php?usercart=$userid");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $cartProductId = $_GET['cartid'];
        $productquantity = $_POST['product_quantity'];
        $sql = "UPDATE `cart` SET `p_quantity` = '$productquantity' WHERE `cart`.`cart_p_id` = $cartProductId;";
        $result = mysqli_query($conn,$sql);
        header("Location: /Baby Choice/cart.php?usercart=$userid");
    }

  

    
?>