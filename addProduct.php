<?php 
 $error = "";
 include 'db_connection.php';
 
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     $productname = $_POST['product_name'];
     
     $productprice = $_POST['product_price'];
     $productdiscountprice = $_POST['product_discountprice'];
     $productquantity = $_POST['product_quantity'];
     $productcategoryid = $_POST['product_category_id'];
     $productdescription = $_POST['product_desc'];
     $productsubcategory = $_POST['product_subcategory'];
     $producttitle = $_POST['product_title'];
     $productimage = $_FILES['product_image']['name'];
    $destination = "E:/xampp/htdocs/Baby Choice/img/".basename($_FILES['product_image']['name']);
    move_uploaded_file($_FILES['product_image']['tmp_name'],$destination);

    $sql = "INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_price`, `p_image`, `p_category`, `timstamp`, `p_discountprice`, `p_subcategory`, `p_tittle`,`p_quantity`) 
    VALUES (NULL, '$productname', '$productdescription', '$productprice', '$productimage', '$productcategoryid', current_timestamp(), '$productdiscountprice', '$productsubcategory', '$producttitle','$productquantity');";
    $result = mysqli_query($conn,$sql);

    header("Location: /Baby Choice/manage_products.php");
 }

 ?>