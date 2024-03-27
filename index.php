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


  <section id="center" class="clearfix center_home">
    <div class="container">
      <div class="row">
        <div class="center_1 clearfix">
          <div class="col-sm-3">
            <div class="center_1l clearfix">
              <h5 class="mgt"><i class="fa fa-bars"></i> CATEGORIES</h5>
              <ul>
                <li><a href="product.php?category_id=1"><span class="span_1"><i class="fa fa-shopping-bag"></i></span>
                    Clothing <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a href="product.php?category_id=2"><span class="span_1"><i class="fa fa-laptop"></i></span>
                    Electronics <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a href="product.php?category_id=3"><span class="span_1"><i class="fa fa-paw"></i></span> Shoes
                    <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a href="product.php?category_id=4"><span class="span_1"><i class="fa fa-clock-o"></i></span>
                    Watches <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a href="product.php?category_id=5"><span class="span_1"><i class="fa fa-heartbeat"></i></span>
                    Health and Beauty <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a>
                </li>
                <li><a href="product.php?category_id=6"><span class="span_1"><i class="fa fa-cubes"></i></span> Toys
                    <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a href="product.php?category_id=7"><span class="span_1"><i class="fa fa-cutlery"></i></span> Foods
                    <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a href="product.php?category_id=8"><span class="iconify" data-icon="bx:bxs-blanket"></span>
                    Blankets <span class="span_2 pull-right"><i class="fa fa-chevron-right"></i></span></a></li>
                <li><a class="border_none" href="product.php?category_id=9"><span class="iconify"
                      data-icon="fa-solid:baby-carriage"></span> Baby Trollies <span class="span_2 pull-right"><i
                        class="fa fa-chevron-right"></i></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="center_1r clearfix">
              <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Overlay -->
                <div class="overlay"></div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#bs-carousel" data-slide-to="1" class=""></li>
                  <li data-target="#bs-carousel" data-slide-to="2" class=""></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                      <h5>Top Brands</h5>
                      <h2>Boost Our <br> Shopping <br> System</h2>
                      <p> Choose newborn clothes that <br> are easy to put on and off, <br> comfortable for baby to
                        wear, <br> and easy to wash. It’s a good <br> idea to dress your baby in layers.<br> Babies grow
                        out of clothes quickly, <br> so buy now what you need in each size.</p>
                      <h6><a class="button" href="#">SHOP NOW</a></h6>
                    </div>
                  </div>
                  <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                      <h5>New Brands</h5>
                      <h2>Know <br> Something <br> About Us</h2>
                      <p> Clothes made from cotton <br> are a good choice.</p>
                      <h6><a class="button" href="#">SHOP NOW</a></h6>
                    </div>
                  </div>
                  <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                      <h5>Trending Brands</h5>
                      <h2>For Your Babies</h2>
                      <p> Clothes are comfortable, soft and easy <br> to take care of.</p>
                      <h6><a class="button" href="#">SHOP NOW</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="center_2 clearfix">
          <div class="col-sm-3 space_all">
            <div class="center_2i text-center clearfix">
              <h5 class="mgt"><i class="fa fa-credit-card-alt"></i> MONEY BACK</h5>
              <h6 class="col_2">7 Days Money Back Guarantee</h6>
            </div>
          </div>
          <div class="col-sm-3 space_all">
            <div class="center_2i text-center clearfix">
              <h5 class="mgt"><i class="fa fa-truck"></i> FREE SHIPPING</h5>
              <h6 class="col_2">Shipping on orders over Rs. 500</h6>
            </div>
          </div>
          <div class="col-sm-3 space_all">
            <div class="center_2i text-center clearfix">
              <h5 class="mgt"><i class="fa fa-star"></i> SPECIAL SALE</h5>
              <h6 class="col_2">Extra Rs. 100 off on all items</h6>
            </div>
          </div>
          <div class="col-sm-3 space_all">
            <div class="center_2i border-right text-center clearfix">
              <h5 class="mgt"><i class="fa fa-life-ring"></i> ONLINE SUPPORT</h5>
              <h6 class="col_2">We're here for you. Forever.</h6>
            </div>
          </div>
        </div>


        <div class="center_3 clearfix">
          <div class="col-sm-3">
            <div class="center_3l clearfix">
              <div class="center_3l1 mgt clearfix">
                <h4 class="mgt">HOT DEALS</h4>
                <hr>
                <div class="carousel slide center_shop_1li1" id="myCarousel">

                  <div class="carousel-inner">

                    <?php
										// $productid = $_GET['productid'];
										$sql = "SELECT * FROM `products` WHERE `p_subcategory` = 4 LIMIT 1";
										$result = mysqli_query($conn, $sql);
										$noResult = false;
										while ($row = mysqli_fetch_assoc($result)) {
											$product_id = $row['p_id'];
											$product_name = $row['p_name'];
											$product_desc = $row['p_description'];
											$product_category_id = $row['p_category'];
											$product_price = $row['p_price'];
											$product_discountprice = $row['p_discountprice'];
											$product_image = $row['p_image'];
											$product_tittle = $row['p_tittle'];
											echo '
			<div class="item active">
						<ul class="thumbnails mgt">
							<li class="col-sm-12 text-center space_all">
								<div class="fff">
									<div class="clearfix">
			<a href="detail.php?productid=' . $product_id . '"><img class="mgt iw" src="img/' . $product_image . '" alt=""></a>								</div>
                            </div>
							<div class="arriv_2m3 clearfix">
	                           <h5 class="bold">' . $product_tittle . '</h5>
							   <p><a href="#">' . $product_name . '</a></p>
							   <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   </span>
							   <h5>
							   <span class="span_2 col_2">Rs. ' . $product_price . '</span>
							   <span class="span_3 col_1 bold"> Rs. ' . $product_discountprice . '</span>							   </h5>
							   <h5><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h5>
	                          </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 -->
			  <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
				</ul>
	  </nav>';
										}
										?>
                    <!-- <div class="item active">
                    <ul class="thumbnails mgt">
                        <li class="col-sm-12 text-center space_all">
    						<div class="fff">
								<div class="clearfix">
									<a href="#"><img class="mgt iw" src="img/6.jpg" alt=""></a>								</div>
                            </div>
							<div class="arriv_2m3 clearfix">
	                           <h5 class="bold">Trikes</h5>
							   <p><a href="#">Toyshine Ducky Baby Tricycle Ride-on Bicycle (Red)- BES for 2-3 Years Kids</a></p>
							   <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   </span>
							   <h5>
							   <span class="span_2 col_2 ">Rs. 1,999.00</span>
							   <span class="span_3 col_1 bold"> Rs. 1,391.00</span>							   </h5>
							   <h5><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h5>
	                          </div>
                        </li>
                    </ul>
              </div>    -->
                    <!-- /Slide2 -->
                    <!-- /Slide3 -->
                  </div>

                </div>
              </div>
              <div class="center_3l1 clearfix">
                <h4 class="mgt">SPECIAL OFFER</h4>
                <hr>
                <?php
								// $productid = $_GET['productid'];
								$sql = "SELECT * FROM `products` WHERE `p_subcategory` = 5 LIMIT 3";
								$result = mysqli_query($conn, $sql);
								$noResult = false;
								while ($row = mysqli_fetch_assoc($result)) {
									$product_id = $row['p_id'];
									$product_name = $row['p_name'];
									$product_desc = $row['p_description'];
									$product_category_id = $row['p_category'];
									$product_price = $row['p_price'];
									$product_discountprice = $row['p_discountprice'];
									$product_image = $row['p_image'];
									$product_tittle = $row['p_tittle'];
									echo '
	   <div class="center_3l1i mgt clearfix">
	    <div class="col-sm-4 space_all">
		 <div class="center_3l1il clearfix">
		  <a href="detail.php?productid=' . $productid . '"><img src="img/' . $product_image . '" alt="abc" class="iw"></a>
		 </div>
		</div>
		<div class="col-sm-8">
		 <div class="center_3l1ir clearfix">
		  <h6 class="mgt"><a href="#">' . $product_name . '</a></h6>
		  <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   
		</span>
		  <h6> Rs. ' . $product_discountprice . '</h6>
		 </div>
		</div>
	   </div>
	   <br>';
								}
								?>
                <!-- <div class="center_3l1i clearfix">
	    <div class="col-sm-4 space_all">
		 <div class="center_3l1il clearfix">
		  <a href="#"><img src="img/8.jpg" alt="abc" class="iw"></a>
		 </div>
		</div>
		<div class="col-sm-8">
		 <div class="center_3l1ir clearfix">
		  <h6 class="mgt"><a href="#">Waterproof Baby Bed</a></h6>
		  <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-half-o"></i>							   
		</span>
		  <h6> Rs. 135.00 </h6>
		 </div>
		</div>
	   </div>
	   <div class="center_3l1i border_none pdb clearfix">
	    <div class="col-sm-4 space_all">
		 <div class="center_3l1il clearfix">
		  <a href="#"><img src="img/9.jpg" alt="abc" class="iw"></a>
		 </div>
		</div>
		<div class="col-sm-8">
		 <div class="center_3l1ir clearfix">
		  <h6 class="mgt"><a href="#">Dabur Lal Tail Ayurvedic Oil</a></h6>
		  <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>							   
		</span>
		  <h6> Rs. 267.00 </h6>
		 </div>
		</div>
	   </div> -->
              </div>
              <div class="center_3l1 clearfix">
                <h4 class="mgt">POPULAR TAGS</h4>
                <hr>
                <div class="center_3l1io clearfix">
                  <ul class="mgt">
                    <li><a href="#">Oils</a></li>
                    <li><a href="#">cloths</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Trollies</a></li>
                    <li><a href="#">T-shirt</a></li>
                    <li><a href="#">pants</a></li>
                    <li><a href="#">foods</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">blankets</a></li>
                  </ul>
                </div>
              </div>
              <div class="center_3l1 clearfix">
                <h4 class="mgt">NEWSLETTERS</h4>
                <hr>
                <h6>Sign Up for Our Newsletter!</h6>
                <input class="form-control" placeholder="Subscribe" type="text">
                <h6><a class="button mgt" href="#">Subscribe</a></h6>
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
                      <li><a data-slide="prev" href="#myCarousel1" class=""><i
                            class="glyphicon glyphicon-chevron-left"></i></a></li>
                      <li><a data-slide="next" href="#myCarousel1" class=""><i
                            class="glyphicon glyphicon-chevron-right"></i></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="center_3r clearfix">
              <div class="center_3r1 mgt clearfix">
                <h4 class="mgt">FEATURED PRODUCTS</h4>
              </div>

              <?php
							// $productid = $_GET['productid'];
							$sql = "SELECT * FROM `products` WHERE `p_subcategory` = 1 LIMIT 4";
							$result = mysqli_query($conn, $sql);
							$noResult = false;
							while ($row = mysqli_fetch_assoc($result)) {
								$product_id = $row['p_id'];
								$product_name = $row['p_name'];
								$product_desc = $row['p_description'];
								$product_category_id = $row['p_category'];
								$product_price = $row['p_price'];
								$product_discountprice = $row['p_discountprice'];
								$product_image = $row['p_image'];
								echo '<div class="center_3r2 clearfix">
			<div class="col-sm-3 space_left">
			 <div class="center_3r2i text-center clearfix">
									<a href="detail.php?productid=' . $product_id . '"><img class="mgt iw" src="img/' . $product_image . '" alt=""></a>
									<p><a href="detail.php?productid=' . $product_id . '">' . $product_name . '</a></p>
									<span class="span_1">
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>
									 <i class="fa fa-star"></i>							   </span>
									<h5>
									<span class="span_2 col_2 ">Rs. ' . $product_price . '</span>
									<span class="span_3 col_1 bold"> Rs. ' . $product_discountprice . '</span>							   </h5>
									<h6><a class="button mgt" href="cart.php?productid=' . $product_id . '"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
			 </div>
			 <br>
			</div>';
							}

							?>





              <div class="center_3r1 clearfix">
                <h4 class="mgt">NEW PRODUCTS</h4>
              </div>
              <?php
							// $productid = $_GET['productid'];
							$sql = "SELECT * FROM `products` WHERE `p_subcategory` = 2 LIMIT 4";
							$result = mysqli_query($conn, $sql);
							$noResult = false;
							while ($row = mysqli_fetch_assoc($result)) {
								$product_id = $row['p_id'];
								$product_name = $row['p_name'];
								$product_desc = $row['p_description'];
								$product_category_id = $row['p_category'];
								$product_price = $row['p_price'];
								$product_discountprice = $row['p_discountprice'];
								$product_image = $row['p_image'];
								echo '
	  <div class="center_3r2 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="center_3r2i text-center clearfix">
							   <a href="#"><img class="mgt iw" src="img/' . $product_image . '" alt=""></a>
							   <p><a href="#">' . $product_name . '</a></p>
							   <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   </span>
							   <h5>
							   <span class="span_2 col_2 ">Rs. ' . $product_price . '</span>
							   <span class="span_3 col_1 bold"> Rs. ' . $product_discountprice . '</span>							   </h5>
							   <h6><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
		</div>
		<br>
	   </div>';
							}

							?>






              <div class="center_3r1 clearfix">
                <h4 class="mgt">BEST SELLER</h4>
              </div>
              <div class="center_3r2 clearfix"><br>
                <?php
								// $productid = $_GET['productid'];
								$sql = "SELECT * FROM `products` WHERE `p_subcategory` = 3 LIMIT 8";
								$result = mysqli_query($conn, $sql);
								$noResult = false;
								while ($row = mysqli_fetch_assoc($result)) {
									$product_id = $row['p_id'];
									$product_name = $row['p_name'];
									$product_desc = $row['p_description'];
									$product_category_id = $row['p_category'];
									$product_price = $row['p_price'];
									$product_discountprice = $row['p_discountprice'];
									$product_image = $row['p_image'];
									echo '
	   <div class="col-sm-4 space_left">
	    <div class="center_3r2i mgt clearfix">
	    <div class="col-sm-4 space_all">
		 <div class="center_3l1il clearfix">
		  <a href="#"><img src="img/' . $product_image . '" alt="abc" class="iw"></a>
		 </div>
		</div>
		<div class="col-sm-8">
		 <div class="center_3l1ir clearfix">
		  <h6 class="mgt"><a href="#">' . $product_name . '</a></h6>
		  <span class="span_1">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>							   
		</span>
		  <h6> Rs. ' . $product_discountprice . ' </h6>
		 </div>
		</div>
	   </div><br><br>
	   </div>';
								}
								?>






                <div class="center_3r1 clearfix">
                  <h4 class="mgt">LATEST FORM BLOG</h4>
                </div>
                <div class="center_3r3 clearfix">
                  <div class="col-sm-6 space_left">
                    <div class="center_3r3l clearfix">
                      <a href="#"><img src="img/26.jpg" class="iw" alt="abc"></a>
                      <h5 class="bold"><a href="blog_detail.php">Thumb Sucking in Babies</a></h5>
                      <h6 class="col_2">By Vinay Verma | 14 March 2021 </h6>
                      <p>Thumb-sucking is a usual occurrence in babies. At some or other stages, it is the job of
                        infants ...</p>
                      <h6><a class="button mgt" href="blog_detail.php">Read More</a></h6>
                    </div>
                  </div>
                  <div class="col-sm-6 space_left">
                    <div class="center_3r3l clearfix">
                      <a href="#"><img src="img/27.jpg" class="iw" alt="abc"></a>
                      <h5 class="bold"><a href="blog_detail1.php">Gift Ideas for the Newborn baby in India</a></h5>
                      <h6 class="col_2">By Sudheer Madeshia | 12 March 2021 </h6>
                      <p>A baby’s birth is one of the most precious and beautiful occasions in your life that you can’t
                        wait ...</p>
                      <h6><a class="button mgt" href="blog_detail1.php">Read More</a></h6>
                    </div>
                  </div>
                </div>
                <div class="center_3r1 clearfix">
                  <h4 class="mgt">NEW ARRIVALS</h4>
                </div>
                <div class="center_3r2 clearfix">
                  <div class="col-sm-3 space_left">
                    <div class="center_3r2i text-center clearfix">
                      <a href="#"><img class="mgt iw" src="img/12.jpg" alt=""></a>
                      <p><a href="#">Baybee Pop N Up Strong Durable Baby Chair - Blue</a></p>
                      <span class="span_1">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i> </span>
                      <h5>
                        <span class="span_2 col_2 ">Rs. 899.00</span>
                        <span class="span_3 col_1 bold"> Rs. 570.00</span>
                      </h5>
                      <h6><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
                    </div>
                  </div>
                  <div class="col-sm-3 space_left">
                    <div class="center_3r2i text-center clearfix">
                      <a href="#"><img class="mgt iw" src="img/13.jpg" alt=""></a>
                      <p><a href="#">Johnson's Baby Care Collection Baby Gift Set </a></p>
                      <span class="span_1">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i> </span>
                      <h5>
                        <span class="span_2 col_2 ">Rs. 350.00</span>
                        <span class="span_3 col_1 bold"> Rs. 310.00</span>
                      </h5>
                      <h6><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
                    </div>
                  </div>
                  <div class="col-sm-3 space_left">
                    <div class="center_3r2i text-center clearfix">
                      <a href="#"><img class="mgt iw" src="img/14.jpg" alt=""></a>
                      <p><a href="#">Huggies Nature Care Pants, Monthly Pack</a></p>
                      <span class="span_1">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i> </span>
                      <h5>
                        <span class="span_2 col_2 ">Rs. 2,399.00</span>
                        <span class="span_3 col_1 bold"> Rs. 1,583.00</span>
                      </h5>
                      <h6><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
                    </div>
                  </div>
                  <div class="col-sm-3 space_left">
                    <div class="center_3r2i text-center clearfix">
                      <a href="#"><img class="mgt iw" src="img/15.jpg" alt=""></a>
                      <p><a href="#">Johnson's Baby Powder 400g with Free Soap 100g</a></p>
                      <span class="span_1">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i> </span>
                      <h5>
                        <span class="span_2 col_2 "> Rs. 287.00</span>
                        <span class="span_3 col_1 bold"> Rs. 255.00</span>
                      </h5>
                      <h6><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <?php
	include 'footer.php';
	?>