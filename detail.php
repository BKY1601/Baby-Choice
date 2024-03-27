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
  <link href="css/detail.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <section id="center" class="clearfix center_product">
    <div class="container">
      <div class="row">
        <div class="center_p1 clearfix">
          <div class="col-sm-3">
            <div class="center_p1i clearfix">
              <ul class="mgt">
                <li><a href="index.php">Home</a></li> |
                <li class="col_2">Product</li>
              </ul>
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
                            <a href="#"><img class="mgt iw" src="img/5.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="arriv_2m3 clearfix">
                          <h5 class="bold">PRODUCT</h5>
                          <p><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
                          <span class="span_1">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> </span>
                          <h5>
                            <span class="span_2 col_2">Rs. 55.00</span>
                            <span class="span_3 col_1 bold"> Rs. 45.00</span>
                          </h5>
                          <h5><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h5>
                        </div>
                      </li>
                    </ul>
                  </div><!-- /Slide1 -->
                  <div class="item active">
                    <ul class="thumbnails mgt">
                      <li class="col-sm-12 text-center space_all">
                        <div class="fff">
                          <div class="clearfix">
                            <a href="#"><img class="mgt iw" src="img/6.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="arriv_2m3 clearfix">
                          <h5 class="bold">PRODUCT</h5>
                          <p><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
                          <span class="span_1">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> </span>
                          <h5>
                            <span class="span_2 col_2 ">Rs. 45.00</span>
                            <span class="span_3 col_1 bold"> Rs. 35.00</span>
                          </h5>
                          <h5><a class="button mgt" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a></h5>
                        </div>
                      </li>
                    </ul>
                  </div><!-- /Slide2 -->
                  <!-- /Slide3 -->
                </div>
                <nav>
                  <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel" class=""><i
                          class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel" class=""><i
                          class="glyphicon glyphicon-chevron-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="center_3l1 clearfix">
              <h4 class="mgt">POPULAR TAGS</h4>
              <hr>
              <div class="center_3l1io clearfix">
                <ul class="mgt">
                  <li><a href="#">Phone</a></li>
                  <li><a href="#">Vest</a></li>
                  <li><a href="#">Smartphone</a></li>
                  <li><a href="#">Furniture</a></li>
                  <li><a href="#">T-shirt</a></li>
                  <li><a href="#">Sweatpants</a></li>
                  <li><a href="#">Sneaker</a></li>
                  <li><a href="#">Toys</a></li>
                  <li><a href="#">Rose</a></li>
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
                    <p>Class Aptent Taciti Sociosqu Ad Litora Torquent Per Conubia Nostra, Per Inceptos Himenaeos.</p>
                    <h5 class="bold">Eget Nulla</h5>
                    <h6 class="col_2">Owner</h6>
                  </div><!-- /Slide1 -->
                  <div class="item text-center mga">
                    <img class="img-circle" src="img/11.jpg" alt="abc">
                    <p>Class Aptent Taciti Sociosqu Ad Litora Torquent Per Conubia Nostra, Per Inceptos Himenaeos.</p>
                    <h5 class="bold">Lacinia Arcu </h5>
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
          <?php
					$productid = $_GET['productid'];
					$sql = "SELECT * FROM `products` WHERE `p_id` = $productid";
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
	<div class="col-sm-9">
    <div class="detail_r clearfix">
	  <div class="col-sm-5 space_left">
	   <div class="detail_rl clearfix">
	     <div class="carousel slide article-slide" id="article-photo-carousel">
            <!-- Wrapper for slides -->
             <div class="carousel-inner cont-slider">

    <div class="item">
      <img alt="" title="" src="img/' . $product_image . '" class="iw">    </div>
    <div class="item">
      <img alt="" title="" src="img/' . $product_image . '" class="iw">    </div>
    <div class="item">
      <img alt="" title="" src="img/' . $product_image . '" class="iw">    </div>
    <div class="item active">
      <img alt="" title="" src="img/' . $product_image . '" class="iw">    </div>
  </div>
             <!-- Indicators -->
             <ol class="carousel-indicators">
    <li class="" data-slide-to="0" data-target="#article-photo-carousel">
      <img alt="" src="img/' . $product_image . '">    </li>
    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
      <img alt="" src="img/' . $product_image . '">    </li>
    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
      <img alt="" src="img/' . $product_image . '">    </li>
    <li class="active" data-slide-to="3" data-target="#article-photo-carousel">
      <img alt="" src="img/' . $product_image . '">    </li>
  </ol>
           </div>
	   </div>
	  </div>
	  <div class="col-sm-7 space_left">
	   <div class="center_shop_1ri clearfix">
	     <h2 class="mgt">' . $product_name . '</h2>
		 <h6>
	   <span>
	    <i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>	   </span>
	   2 Reviews	   </h6>
	    <h6>
	   <span>Availability :</span>
	   <span class="col_1">In Stock</span>	   </h6>
	   <p>' . $product_desc . '</p>
	   <h4 class="col_1 normal"><span>Rs. ' . $product_price . '</span> Rs. ' . $product_discountprice . '</h4>
	   <h5>Quantity:</h5>
	   <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>			</div>
	   <h5 class="mgt"><a class="button " href="cart.php?productid=' . $product_id . '"><i class="fa fa-shopping-cart"></i> ADD TO CART</a></h5>
	   </div>
	  </div>
	</div>
	';
					}
					?>

          <div class="center_shop_2r clearfix">
            <div class="center_shop_2ri clearfix">
              <ul class="nav nav-tabs mgt">
                <li class="active"><a data-toggle="tab" href="#home_description">DESCRIPTION</a></li>
                <li class=""><a data-toggle="tab" href="#menu_information">SHIPPING</a></li>
                <li class=""><a data-toggle="tab" href="#menu_review">REVIEWS</a></li>
              </ul>

              <div class="tab-content clearfix">
                <div id="home_description" class="tab-pane fade clearfix active in">
                  <div class="click clearfix">
                    <div class="click_inner clearfix">
                    <h4 class="mgt">Product Detail</h4>
						<p>Is Discontinued By Manufacturer : No</p>
<p>Package Dimensions : 44.45 x 35.31 x 30.99 cm; 610 Grams</p>
<p>Date First Available : 5 September 2017</p>
<p>Manufacturer : BAYBEE</p>
<p>ASIN : B07F153Q1L</p>
<p>Item part number : BBHC708-21B</p>
<p>Manufacturer : BAYBEE</p>
<p>Item Weight : 610 g</p>
<p>Best Sellers Rank: #65,517 in Home & Kitchen (See Top 100 in Home & Kitchen)
#43 in Kids' Chairs</p>
					   </div>
					   <div class="click_inner clearfix">
					    <h4>Features</h4>
						<ul>
						 <li>EXCELLENT MATERIALS: Non-toxic HQ polypropylene seat.</li>
						 <li>Plastic legs, Can sustain 100kg weight.</li>
						 <li>Weather resistant and Water Proof.</li>
						 <li>lightweight architecture Suitable for indoor and outdoor use.</li>
						 <li>No Assembly Required.</li>
						</ul>
					   </div>
					   <div class="click_inner clearfix">
					    <h4>Benefits </h4>
						<ul>
						 <li>All our products have been committed to ensure Quality. </li>
						 <li>Customer Satisfaction to the Highest Possible Standards.</li>
						 <li>Trustworthy Shopping Experience.</li>
						 <li>Even though it is sturdy and durable.</li>
						 <li>it is light weighted and removable.</li>
						</ul>
					   </div>
					   <div class="click_inner clearfix">
						<blockquote>
						 <p class="mgt">Strong and Durable Chair. Fully molded plastic. Non-Toxic. Weather resistant. Water proof. Can be used indoors and outdoors. Dimensions (LxWxH): 35 x 36 x 55 cms. Seat Height: 30 cms.</p>
						</blockquote>
                    </div>
                  </div>
                </div>
                <div id="menu_information" class="tab-pane fade clearfix">
                  <div class="click clearfix">
                    <div class="click_inner_1  clearfix">
                      <p class="mgt">Delivery of all orders will be duly done to the address as mentioned by you at the time of placing the order. In case of modifications, kindly drop us a mail at info@suta.in within 2 hours of placing the order.</p>
                      <h4>Returns Policy</h4>
                      <p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll
                        also pay the return shipping costs if the return is a result of our error (you received an
                        incorrect or defective item, etc.)</p>
                      <p>You should expect to receive your refund within four weeks of giving your package to the return
                        shipper, however, in many cases you will receive a refund more quickly. This time period
                        includes the transit time for us to receive your return from the shipper (5 to 10 business
                        days), the time it takes us to process your return once we receive it (3 to 5 business days),
                        and the time it takes your bank to process our refund request (5 to 10 business days).</p>
                      <p>If you need to return an item, simply login to your account, view the order using the 'Complete
                        Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via
                        e-mail of your refund once we've received and processed the returned item</p>
                      <h4>Shipping</h4>
                      <p>We can ship to virtually any address in the world. Note that there are restrictions on some
                        products, and some products cannot be shipped to international destinations.</p>
                      <p>When you place an order, we will estimate shipping and delivery dates for you based on the
                        availability of your items and the shipping options you choose. Depending on the shipping
                        provider you choose, shipping date estimates may appear on the shipping quotes page.</p>
                      <p>Please also note that the shipping rates for many items we sell are weight-based. The weight of
                        any such item can be found on its detail page. To reflect the policies of the shipping companies
                        we use, all weights will be rounded up to the next full pound.</p>
                    </div>
                  </div>
                </div>
                <div id="menu_review" class="tab-pane fade clearfix">
                  <div class="click clearfix">
                    <div class="click_inner_2 clearfix">
                      <div class="click_inner_2i clearfix">
                        <div class="col-sm-6 space_left">
                          <h6>
                            <span>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> </span>
                            Based on 2 reviews
                          </h6>
                        </div>
                        <div class="col-sm-6 space_left">
                          <h5 class="mgt text-right"><a class="button mgt" href="#">WRITE A REVIEW</a></h5>
                        </div>
                      </div>
                      <div class="click_inner_2i1 clearfix">
                        <span>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> </span>
                        <h5>Shudheer Madhesia</h5>
                        <h6>pricing on April 10, 2021</h6>
                        <p>i recived this product yesterday it was an grat product with a grate price yes it's justify price</p>
                        <h6><a class="col_1" href="#">Report as Inappropriate</a></h6>
                      </div>
                      <div class="click_inner_2i1 border_none pd1 clearfix">
                        <span>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> </span>
                        <h5>Vinay Verma</h5>
                        <h6>product on April 11, 2021</h6>
                        <p>Product durability was good i am very satisfied with this product yes it is woth at this price from my side it is a green signal you can buy this product. </p>
                        <h6><a class="col_1" href="#">Report as Inappropriate</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="arriv_2 clearfix">
            <?php
						// $productid = $_GET['productid'];
						$sql = "SELECT * FROM `products` WHERE `p_subcategory` = 2 LIMIT 3";
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
	 
                        <div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="#"><img src="img/' . $product_image . '" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">PRODUCT</h5>
						   <p><a href="#">' . $product_name . '</a></p>
						   <span class="span_1">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>						   </span>
						   <h5>
						   <span class="span_2">Rs. ' . $product_price . '</span>
						   <span class="span_3 col_2"> Rs. ' . $product_discountprice . '</span> 
					   </h5>
						  </div>
						 </div>
	                    </div>

						';
						}
						?>
            <!-- <div class="col-sm-4">
						 <div class="arriv_2m clearfix">
						  <div class="arriv_2m1 clearfix">
							<a href="#"><img src="img/29.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">OTHER</h5>
						   <p><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
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
							<a href="#"><img src="img/30.jpg" alt="abc" class="iw"></a>						  </div>
						  <div class="arriv_2m2 clearfix">
						   <h5 class="text-center mgt">SALE</h5>
						  </div>
						  <div class="arriv_2m3 clearfix">
						   <h5 class="bold mgt">NEW</h5>
						   <p><a href="#">Naminos elementum disus tincidunts cosmo de cosmopolis</a></p>
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

    </div>
    </div>
  </section>


  <script>
  $(document).on('click', '.number-spinner button', function() {
    var btn = $(this),
      oldValue = btn.closest('.number-spinner').find('input').val().trim(),
      newVal = 0;

    if (btn.attr('data-dir') == 'up') {
      newVal = parseInt(oldValue) + 1;
    } else {
      if (oldValue > 1) {
        newVal = parseInt(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
  });
  </script>
</body>

</html>


<?php
include 'footer.php';
?>