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
  <link href="css/cart.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <section id="center" class="clearfix cart">
    <div class="container">
      <div class="row">
        <div class="cart_1 clearfix">
          <div class="col-sm-12">
            <p class="mgt"><a href="#">Home</a> / <a href="#">Shopping Cart</a></p>
          </div>
        </div>
        <div class="cart_2 clearfix">
          <div class="col-sm-6">
            <h3 class="bold col_1">MY CART</h3>
          </div>
          <div class="col-sm-6">
            <h5 class="text-right"><a href="index.php">Continue Shopping</a></h5>
          </div>
        </div>
        <div class="cart_3 clearfix">
          <div class="col-sm-8">
            <div class="cart_3l clearfix">
              <h5 class="mgt">PRODUCT</h5>
            </div>
            <?php

						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
							if (isset($_GET['productid'])) {
								$productid = $_GET['productid'];
								$user_id = $_SESSION['userid'];
								$sql = "INSERT INTO `cart` (`cart_p_id`, `p_id`, `user_id`, `timestamp`) VALUES (NULL, '$productid', '$user_id', current_timestamp());";
								$result = mysqli_query($conn, $sql);
								$sql1 = "SELECT * FROM `cart` WHERE `user_id` = $user_id";
								$result1 = mysqli_query($conn, $sql1);
								while ($row = mysqli_fetch_assoc($result1)) {
									// print_r($row);
									$cartquantity = $row['p_quantity'];
									$cartProductid = $row['cart_p_id'];
									$pid = $row['p_id'];
									$sql2 = "SELECT * FROM `products` WHERE `p_id` = $pid";
									$result2 = mysqli_query($conn, $sql2);
									$product = mysqli_fetch_assoc($result2);
									$product_name = $product['p_name'];
									$product_desc = $product['p_description'];
									$product_category_id = $product['p_category'];
									$product_price = $product['p_price'];
									$product_discountprice = $product['p_discountprice'];
									$product_image = $product['p_image'];
									$bill += $product_discountprice;
									$_SESSION['cartBill'] += $product_discountprice;
									$numberOfItems = mysqli_num_rows($result2);
									$_SESSION['cartItems'] = mysqli_num_rows($result2);
									echo '<div class="cart_3l1 clearfix">
							<div class="col-sm-3 space_left">
								<div class="cart_3l1i clearfix">
									<a href="#"><img src="img/' . $product_image . '" alt="abc" class="iw"></a>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="cart_3l1i1 clearfix">
									<h5 class="mgt"><a href="#">' . $product_name . '</a></h5>
									<h5 class="normal">RED / XS</h5>
									<h6>Vendor</h6>
									<h4>Rs. ' . $product_discountprice . '</h4>
									<h5>Quantity</h5>
								</div>
								<div class="cart_3l1i2 clearfix">
									<div class="input-group number-spinner">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
										</span>
											<form method="post" action="handleCart.php?cartid=' . $cartProductid . '">
										<input type="text" class="form-control text-center" value="' . $cartquantity . '" name="product_quantity">
										<button type="submit" class="button mgt">UPDATE CART</button>
										</form>
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
										</span>
									</div>
									<h6 class="mgt"><a class="button_1 mgt" href="handleCart.php?productid=' . $pid . '&request=delete">REMOVE</a></h6>
								</div>
							</div>
						</div>
							';
								}
							} else if (isset($_GET['usercart']) && $_GET['usercart'] == $_SESSION['userid']) {
								$user_id = $_SESSION['userid'];
								$sql1 = "SELECT * FROM `cart` WHERE `user_id` = $user_id";
								$result1 = mysqli_query($conn, $sql1);
								while ($row = mysqli_fetch_assoc($result1)) {
									// print_r($row);
									$cartquantity = $row['p_quantity'];
									$cartProductid = $row['cart_p_id'];
									$pid = $row['p_id'];
									$sql2 = "SELECT * FROM `products` WHERE `p_id` = $pid";
									$result2 = mysqli_query($conn, $sql2);
									$product = mysqli_fetch_assoc($result2);
									$product_name = $product['p_name'];
									$product_desc = $product['p_description'];
									$product_category_id = $product['p_category'];
									$product_price = $product['p_price'];
									$product_discountprice = $product['p_discountprice'];
									$product_image = $product['p_image'];
									$bill += ($product_discountprice * $cartquantity);
									$_SESSION['cartBill'] += ($product_discountprice * $cartquantity);
									$numberOfItems = mysqli_num_rows($result2);
									$_SESSION['cartItems'] = mysqli_num_rows($result2);
									echo '<div class="cart_3l1 clearfix">
							<div class="col-sm-3 space_left">
								<div class="cart_3l1i clearfix">
									<a href="#"><img src="img/' . $product_image . '" alt="abc" class="iw"></a>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="cart_3l1i1 clearfix">
									<h5 class="mgt"><a href="#">' . $product_name . '</a></h5>
									<h5 class="normal">RED / XS</h5>
									<h6>Vendor</h6>
									<h4>Rs. ' . $product_discountprice . '</h4>
									<h5>Quantity</h5>
								</div>
								<div class="cart_3l1i2 clearfix">
									<div class="input-group number-spinner">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
										</span>
										<form method="post" action="handleCart.php?cartid=' . $cartProductid . '">
										<input type="text" class="form-control text-center" value="' . $cartquantity . '" name="product_quantity">
										<button type="submit" class="button mgt">UPDATE CART</button>
										</form>
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
										</span>
									</div>
									
									<h6 class="mgt"><a class="button_1 mgt" href="handleCart.php?productid=' . $pid . '&request=delete">REMOVE</a></h6>
								</div>
							</div>
						</div>
							';
								}
								// header("Location: /Baby Choice/index.php");
							}
						} else {
							echo 'You are not logged in to view the cart';
						}
						?>

            <!-- <div class="cart_3l1 clearfix">
							<div class="col-sm-3 space_left">
								<div class="cart_3l1i clearfix">
									<a href="#"><img src="img/17.jpg" alt="abc" class="iw"></a>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="cart_3l1i1 clearfix">
									<h5 class="mgt"><a href="#">Naminos elementum disus tincidunts cosmo de
											cosmopolis</a></h5>
									<h5 class="normal">RED / XS</h5>
									<h6>Vendor</h6>
									<h4>Rs. 175.00</h4>
									<h5>Quantity</h5>
								</div>
								<div class="cart_3l1i2 clearfix">
									<div class="input-group number-spinner">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
										</span>
										<input type="text" class="form-control text-center" value="1">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
										</span>
									</div>
									<h6 class="mgt"><a class="button_1 mgt" href="#">REMOVE</a></h6>
									<h6 class="mgt"><a class="button mgt" href="#">UPDATE CART</a></h6>
								</div>
							</div>
						</div>
						<div class="cart_3l1 clearfix">
							<div class="col-sm-3 space_left">
								<div class="cart_3l1i clearfix">
									<a href="#"><img src="img/18.jpg" alt="abc" class="iw"></a>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="cart_3l1i1 clearfix">
									<h5 class="mgt"><a href="#">Naminos elementum disus tincidunts cosmo de
											cosmopolis</a></h5>
									<h5 class="normal">RED / XS</h5>
									<h6>Vendor</h6>
									<h4>Rs. 175.00</h4>
									<h5>Quantity</h5>
								</div>
								<div class="cart_3l1i2 clearfix">
									<div class="input-group number-spinner">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
										</span>
										<input type="text" class="form-control text-center" value="1">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
										</span>
									</div>
									<h6 class="mgt"><a class="button_1 mgt" href="#">REMOVE</a></h6>
									<h6 class="mgt"><a class="button mgt" href="#">UPDATE CART</a></h6>
								</div>
							</div>
						</div>
						<div class="cart_3l1 border_none clearfix">
							<div class="col-sm-3 space_left">
								<div class="cart_3l1i clearfix">
									<a href="#"><img src="img/19.jpg" alt="abc" class="iw"></a>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="cart_3l1i1 clearfix">
									<h5 class="mgt"><a href="#">Naminos elementum disus tincidunts cosmo de
											cosmopolis</a></h5>
									<h5 class="normal">RED / XS</h5>
									<h6>Vendor</h6>
									<h4>Rs. 175.00</h4>
									<h5>Quantity</h5>
								</div>
								<div class="cart_3l1i2 clearfix">
									<div class="input-group number-spinner">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
										</span>
										<input type="text" class="form-control text-center" value="1">
										<span class="input-group-btn">
											<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
										</span>
									</div>
									<h6 class="mgt"><a class="button_1 mgt" href="#">REMOVE</a></h6>
									<h6 class="mgt"><a class="button mgt" href="#">UPDATE CART</a></h6>
								</div>
							</div>
						</div> -->
					</div> 
            <div class="col-sm-4">
              <div class="cart_3r clearfix">
                <h5 class="mgt head_1">SUBTOTAL</h5>
                <?php
								if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									echo '<h3 class="text-center">Rs.' . $bill . '/-</h3>';
								} else {
									echo '<h3 class="text-center">Rs. 0/-</h3>';
								}
								?>


                <hr>
                <!-- <h6>Additional comments</h6>
                <textarea class="form-control"></textarea> -->
                <h5 class="text-center"><a class="button" href="checkout.php?bill=<?php echo $bill ?>">PROCEED TO
                    CHECKOUT</a></h5>
                <br>
                <!-- <h5>GET SHIPPING ESTIMATES</h5>
                <hr>
              </div>
              <div class="cart_3r1 clearfix">
                <h6>Country</h6>
                <select class="form-control" id="subject" name="subject">
                  <option>India</option>
                  <option>America</option>
                  <option>England</option>
                  <option>Africa</option>
                </select><br>
                <h6>State</h6>
                <select class="form-control" id="subject" name="subject">
                  <option>Maharashtra</option>
                  <option>Delhi</option>
                  <option>Madhya Pradesh</option>
                  <option>Punjab</option>
                  <option>Uttar Pradesh</option>



                </select><br>
                <h6>Postal/Zip Code</h6>
                <input class="form-control" type="text">
                <h5 class="text-center"><a class="button_1" href="checkout.php">CALCULATE SHIPPING</a></h5>
              </div>
            </div> -->
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