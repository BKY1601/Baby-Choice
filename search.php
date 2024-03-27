<?php
	include 'db_connection.php';
    include 'header.php';
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baby Choice</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>
  
<body>
<div class="container my-3 search">
        <h2>Search results for <em>"<?php echo $_GET['query']; ?>"</em></h2>
        <?php 
        $keyword = $_GET['query'];
        $sql = "SELECT * FROM `products` WHERE MATCH (p_name,p_description) against ('$keyword')";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $product_id = $row['p_id'];
            $product_name = $row['p_name'];
            $product_desc = $row['p_description'];
            $product_category_id = $row['p_category'];
            $product_price = $row['p_price'];
			$product_discountprice = $row['p_discountprice'];
			$product_image = $row['p_image'];
            echo ' <div class="center_3r2 clearfix">
			<div class="col-sm-3 space_left">
			 <div class="center_3r2i text-center clearfix">
									<a href="#"><img class="mgt iw" src="img/'.$product_image.'" alt=""></a>
									<p><a href="#">'.$product_name.'</a></p>
									<span class="span_1">
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>							   </span>
									<h5>
									<span class="span_2 col_2 ">Rs. '.$product_price.'</span>
									<span class="span_3 col_1 bold"> Rs. '.$product_discountprice.'</span>							   </h5>
									<h6><a class="button mgt" href="cart.php?productid='.$product_id.'"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
			 </div>
			 <br>
			</div>';
        }
        ?>
</div>
    </div>
    </div>
</body>
 
</html>


<?php
    include 'footer.php';
    ?>