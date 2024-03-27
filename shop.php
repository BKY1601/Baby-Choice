<?php
	include 'db_connection.php';
    include 'header.php';
    error_reporting(0);
 ini_set('display_errors', 0);
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
	<link href="css/product.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>
  
<body>
    
<section id="center" class="clearfix center_product">
 <div class="container">
  <div class="row">
   <div class="center_p1 clearfix">
    <div class="col-sm-3">
	  <div class="center_p1i clearfix">
	   <ul class="mgt">
	    <li><a href="#">Home</a></li> | 
		<li class="col_2">Product</li>
	   </ul>
	  </div>
	  <div class="center_1l clearfix">
	  <h5 class="mgt"><i class="fa fa-bars"></i> CATEGORIES</h5>
	  <ul>
	  <li><a href="product.php?category_id=1"><span class="span_1"><i class="fa fa-shopping-bag"></i></span> Clothing <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>	
	   <li><a href="product.php?category_id=2"><span class="span_1"><i class="fa fa-laptop"></i></span> Electronics <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
	   <li><a href="product.php?category_id=3"><span class="span_1"><i class="fa fa-paw"></i></span> Shoes <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>	
	   <li><a href="product.php?category_id=4"><span class="span_1"><i class="fa fa-clock-o"></i></span> Watches <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>   
	   <li><a href="product.php?category_id=5"><span class="span_1"><i class="fa fa-heartbeat"></i></span> Health and Beauty <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
       <li><a href="product.php?category_id=6"><span class="span_1"><i class="fa fa-cubes"></i></span> Toys <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
       <li><a href="product.php?category_id=7"><span class="span_1"><i class="fa fa-cutlery"></i></span> Foods <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
       <li><a href="product.php?category_id=8"><span class="iconify" data-icon="bx:bxs-blanket"></span> Blankets <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
      <li><a class="border_none" href="product.php?category_id=9"><span class="iconify" data-icon="fa-solid:baby-carriage"></span> Baby Trollies <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
	  </ul>
	 </div>
	 <div class="center_3l1 clearfix">
	   <h4 class="mgt">SHOP BY</h4>
	   <hr>
	    <div class="ziehharmonika">
			<h3 data-prefix="★" class=""><a href="#">Seasonal cloths</a><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
			<div class="clickable" style="display: none;">
              <ul>
			   <li><a href="#">Winter</a></li>
			   <li><a href="#">Summer</a></li>
			   <li><a href="#">Rainy</a></li>
			   <li><a href="#">Regular</a></li>
			  </ul>
           </div>
		   <h3 data-prefix="★"><a href="#">Festivals cloths</a><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
			<div class="clickable" style="">
              <ul>
			   <li><a href="#">Diwali</a></li>
			   <li><a href="#">Rakshabandhan</a></li>
			   <li><a href="#">Christmas</a></li>
			   <li><a href="#">New Years</a></li>
			  </ul>
           </div>
		   <h3 data-prefix="★" class=""><a href="#">Events cloths</a><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
			<div class="clickable" style="display: none;">
              <ul>
			   <li><a href="#">Weedings</a></li>
			   <li><a href="#">Birthdays</a></li>
			   <li><a href="#">Partys</a></li>
			   <li><a href="#">Fashion</a></li>
			  </ul>
           </div>
		   <h3 data-prefix="★"><a href="#">Diapers</a><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
			<div class="clickable" style="">
              <ul>
			   <li><a href="#">Pamper</a></li>
			   <li><a href="#">Huggies</a></li>
			   <li><a href="#">Mamy poko</a></li>
			   <li><a href="#">Baby hug</a></li>
			  </ul>
           </div>
		   <h3 data-prefix="★" class=""><a href="#">Daily needs</a><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
			<div class="clickable" style="display: none;">
              <ul>
			   <li><a href="#">Oils</a></li>
			   <li><a href="#">Toys</a></li>
			   <li><a href="#">Foods</a></li>
			   <li><a href="#">Shoes</a></li>
			  </ul>
           </div>
		   <h3 data-prefix="★"><a href="#">Gadgets</a><div class="arrowDown"></div><div class="collapseIcon">+</div></h3>
			<div class="clickable" style="">
              <ul>
			   <li><a href="#">Watches</a></li>
			   <li><a href="#">Lighting toys</a></li>
			   <li><a href="#">Baby learning laptops</a></li>
			   <li><a href="#">Games</a></li>
			  </ul>
           </div>
		  </div>
	  </div>
	  <div class="center_3l1 clearfix">
	   <h4 class="mgt">HOT DEALS</h4>
	   <hr>
	    <div class="carousel slide center_shop_1li1" id="myCarousel">
	    
        <div class="carousel-inner">
            <div class="item">
                    <ul class="thumbnails mgt">
                        <li class="col-sm-12 text-center space_all">
    						<div class="fff">
								<div class="clearfix">
									<a href="detail.php"><img class="mgt iw" src="img/5.jpg" alt=""></a>								</div>
                            </div>
							<div class="arriv_2m3 clearfix">
							<h5 class="bold">Electrical Vehicles</h5>
							   <p><a href="detail.php">Little Chime Baby Scooter Battery Operated Ride on Bike with Music and Light (Pink)</a></p>
							   <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   </span>
							   <h5>
							   <span class="span_2 col_2">Rs. 6,999.00</span>
							   <span class="span_3 col_1 bold"> Rs. 5,699.00</span>							   </h5>
							   <h5><a class="button mgt" href="cart.php"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h5>
	                          </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item active">
                    <ul class="thumbnails mgt">
                        <li class="col-sm-12 text-center space_all">
    						<div class="fff">
								<div class="clearfix">
									<a href="detail.php"><img class="mgt iw" src="img/6.jpg" alt=""></a>								</div>
                            </div>
							<div class="arriv_2m3 clearfix">
	                           <h5 class="bold">Trikes</h5>
							   <p><a href="detail.php">Toyshine Ducky Baby Tricycle Ride-on Bicycle (Red)- BES for 2-3 Years Kids</a></p>
							   <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   </span>
							   <h5>
							   <span class="span_2 col_2 ">Rs. 1,999.00</span>
							   <span class="span_3 col_1 bold"> Rs. 1,391.00</span>							   </h5>
							   <h5><a class="button mgt" href="cart.php"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h5>
	                          </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
            <!-- /Slide3 --> 
        </div>
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
				</ul>
	  </nav>
	</div>
	  </div>
	  <div class="center_3l1 clearfix">
	     <h4 class="mgt">POPULAR TAGS</h4>
	    <hr>
		<div class="center_3l1io clearfix">
		 <ul class="mgt">
		 <li><a href="detail.html">Oils</a></li>
		 <li><a href="detail.html">cloths</a></li>
		 <li><a href="detail.html">Shoes</a></li>
		 <li><a href="detail.html">Trollies</a></li>
		 <li><a href="detail.html">T-shirt</a></li>
		 <li><a href="detail.html">Pants</a></li>
		 <li><a href="detail.html">Foods</a></li>
		 <li><a href="detail.html">Toys</a></li>
		 <li><a href="detail.html">Blankets</a></li>
		 </ul>
		</div>
	  </div>
	  <div class="center_3l1 clearfix">
	   <h4 class="mgt">NEWSLETTERS</h4>
	   <hr>
       <h6>Sign Up for Our Newsletter!</h6>
	    <input class="form-control" placeholder="Subscribe" type="text">
		<h6><a class="button mgt" href="detail.html">Subscribe</a></h6>
	  </div>
	  <div class="center_3l1 clearfix">
	    <div class="carousel slide center_shop_1li1" id="myCarousel1">
	    
        <div class="carousel-inner">
            <div class="item active text-center mga">
                <img class="img-circle" src="img/10.jpg" alt="abc">
				<p>Graduated from Mumbai university have 1 year experience of devlopment</p>
				<h5 class="bold">Bipin Yadav</h5>
				<h6 class="col_2">Owner</h6>
              </div><!-- /Slide1 --> 
            <div class="item text-center mga">
                <img class="img-circle" src="img/11.jpg" alt="abc">
				<p>A website maintenance & management part are done by BKY</p>
				<h5 class="bold">BKY </h5>
				<h6 class="col_2">Manager</h6>
              </div><!-- /Slide2 --> 
            <!-- /Slide3 --> 
        </div>
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel1" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel1" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
				</ul>
	  </nav>
	</div>
	  </div>
	</div>
	<div class="col-sm-9">
	 <div class="center_product1 clearfix">
	  <div class="center_product1i clearfix">
	   <h1 class="mgt col">BIG SALE</h1>
	   <h3 class="col"> Save up to 49% off </h3>
	   <p class="col"> We have Sale that Brings joy. </p>
	  </div>
	 </div>
	 <div class="center_product_1r2 clearfix">
	   <div class="col-sm-6">
	    <div class="center_product_1r2l clearfix">
		  <ul class="nav nav-tabs mgt">
			  <li class=""><a data-toggle="tab" href="#home_description"><i class="fa fa-th-large"></i> GRID</a></li>
			  <li class="active"><a data-toggle="tab" href="#menu_information"> <i class="fa fa-list"></i> LIST</a></li>
           </ul>
		</div>
	   </div>
	   <div class="col-sm-6">
	    <div class="center_product_1r2r text-right clearfix">
		 <h5 class="mgt">SORT BY</h5>
		 <select class="form-control" id="subject" name="subject">
		<option>Price, Low To High</option>
		<option>Price, High To Low</option>
		<option>Alphabetically, A-Z</option>
		<option>Alphabetically, Z-A</option>
		<option>Date, New To Old</option>
		</select>
		</div>
		
	   </div>
	  </div>
	  <div class="center_product_1r3 tab-content">
	   <div id="home_description" class="tab-pane fade clearfix">
					 <div class="click clearfix">
					   <div class="arriv_2 mgt clearfix">
					   </div>
	  <?php 
        // $category_id = $_GET['category_id'];
        $sql = "SELECT * FROM `products` WHERE `p_category`";
        $result = mysqli_query($conn,$sql);
        $noResult = false;
        while($row = mysqli_fetch_assoc($result)){
            $product_id = $row['p_id'];
            $product_name = $row['p_name'];
            $product_desc = $row['p_description'];
            $product_category_id = $row['p_category'];
            $product_price = $row['p_price'];
			$product_discountprice = $row['p_discountprice'];
			$product_image = $row['p_image'];
			echo ' 
			<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.php"><img src="img/'.$product_image.'" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   
						   <p><a href="detail.php">'.$product_name.'</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. '.$product_price.'</span>
						   <span class="span_3 col_2"> Rs. '.$product_discountprice.'</span> 
					   </h5>
						  </div>
						 </div>
	                    </div>';
		}
		?>
						<!-- <div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/29.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">OTHER</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/30.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">NEW</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
                       </div>
					   <div class="arriv_2 clearfix">
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/31.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/32.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">OTHER</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/33.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">NEW</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
                      </div>
					   <div class="arriv_2 clearfix">
                        <div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/34.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
	                    </div>
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/35.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">OTHER</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>

						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/36.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">NEW</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
                       </div>
					   <div class="arriv_2 clearfix">
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/37.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/38.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">OTHER</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div>
						<div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/39.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">NEW</h5>
						   <p><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						  </div>
						 </div>
						</div> -->
                      </div>
				    </div>
			  </div> 
			  <div id="menu_information" class="tab-pane fade clearfix active in">
					 <div class="click clearfix">
			  <?php 
        // $category_id = $_GET['category_id'];
        $sql = "SELECT * FROM `products` WHERE `p_category`";
        $result = mysqli_query($conn,$sql);
        $noResult = false;
        while($row = mysqli_fetch_assoc($result)){
            $product_id = $row['p_id'];
            $product_name = $row['p_name'];
            $product_desc = $row['p_description'];
            $product_category_id = $row['p_category'];
            $product_price = $row['p_price'];
			$product_discountprice = $row['p_discountprice'];
			$product_image = $row['p_image'];
			echo '
			
					 <div class="list_1 mgt clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.php"><img src="img/'.$product_image.'" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						  
						   <p class="bold"><a href="detail.php">'.$product_name.'</a></p>
						   <p> '.$product_desc.'</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. '.$product_price.'</span>
						   <span class="span_3 col_2"> Rs. '.$product_discountprice.'</span> 
					   </h5>
						   <h5><a class="button" href="detail.php">Add to cart</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
                      <br>';
		}
		?>
					  <!-- <div class="list_1 clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/29.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p class="bold"><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <p>  Pharetras loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh....</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						   <h5><a class="button" href="detail.html">SELECT OPTIONS</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
					  <div class="list_1 clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/30.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p class="bold"><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <p>  Pharetras loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh....</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						   <h5><a class="button" href="detail.html">SELECT OPTIONS</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
					  <div class="list_1 clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/31.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p class="bold"><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <p>  Pharetras loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh....</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						   <h5><a class="button" href="detail.html">SELECT OPTIONS</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
					  <div class="list_1 clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/32.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p class="bold"><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <p>  Pharetras loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh....</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						   <h5><a class="button" href="detail.html">SELECT OPTIONS</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
					  <div class="list_1 clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/33.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p class="bold"><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <p>  Pharetras loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh....</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						   <h5><a class="button" href="detail.html">SELECT OPTIONS</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
					  <div class="list_1 border_none clearfix">
					   <div class="col-sm-4">
					    <div class="list_1l clearfix">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="detail.html"><img src="img/34.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						 </div>
						</div>
					   </div>
					   <div class="col-sm-8">
					    <div class="list_1r clearfix">
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p class="bold"><a href="detail.html">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
						   <p>  Pharetras loremos.Donec pretium egestas sapien et mollis. Mauris tincidunt urna eu neque feugiat vulputate. Morbi ut tempor lacus, ac pellentesque nibh....</p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. 45.00</span>
						   <span class="span_3 col_2"> Rs. 34.00</span> 
					   </h5>
						   <h5><a class="button" href="detail.html">SELECT OPTIONS</a></h5>
						  </div>
						</div>
					   </div>
					  </div>
				   </div> -->
			  </div> 
	 </div>
	 <!-- <div class="center_product_1r4 clearfix"> -->
	  <div class="col-sm-6">
	   <div class="center_product_1r4l clearfix">
	    <p class="mgt">Showing: 1 - 12 of 17</p>
	   </div>
	  </div>
	  <div class="col-sm-6">
	   <div class="center_product_1r4r text-right clearfix">
	    <ul class="pagination mgt">
              <li class="disabled"><a href="detail.html">«</a></li>
              <li class="active"><a href="detail.html">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="detail.html">2</a></li>
              <li><a href="detail.html">3</a></li>
              <li><a href="detail.html">4</a></li>
              <li><a href="detail.html">5</a></li>
              <li><a href="detail.html">»</a></li>
            </ul>
	   </div>
	  </div>
	 </div>
	</div>
   </div>

  </div>
 </div>
</section>


<script src="js/ziehharmonika.js"></script>

<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: '★'
		});
	});
</script>
</body>
 
</html>

<?php
    include 'footer.php';
    ?>
