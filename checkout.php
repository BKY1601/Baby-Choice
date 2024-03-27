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
  <link href="css/checkout.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

  <section id="center" class="clearfix checkout">
    <div class="container">
      <div class="row">
        <div class="checkout_1 clearfix">
          <div class="col-sm-6">
            <div class="check_lm clearfix">
              <div class="check_lm1 clearfix">
                <ul class="mgt">
                  <li><a href="#">Cart</a> <i class="fa fa-chevron-right"></i></li>
                  <li>Information <i class="fa fa-chevron-right"></i></li>
                  <li>Shipping <i class="fa fa-chevron-right"></i></li>
                  <li>Payment</li>
                </ul>
              </div><br>
              <div class="check_lm2 clearfix">
                <div class="col-sm-6 space_left">
                  <h4>Contact information</h4>
                </div>
                <?php 
	 	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
       echo '
                <div class="col-sm-6 space_left">
                
                </div>';
     }
                else {
                  echo'<p>Already have an account? <a class="bold" href="login.php">Log in</a></p>
                      <p>New User ? <a class="bold" href="register.php">Register Now</a></p>';
                }
                ?>

              </div>

              <?php
						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
							$user_id = $_SESSION['userid'];
							$sql1 = "SELECT * FROM `user` WHERE `user_id` = $user_id";
							$result1 = mysqli_query($conn, $sql1);
							while ($row = mysqli_fetch_assoc($result1)) {
								// print_r($row);
								$email = $row['email'];
								$fname = $row['fname'];
								$lname = $row['lname'];
                $address = $row['address'];
								echo '
              <div class="check_lm3 clearfix">
                <input class="form-control" placeholder="'.$email.'" type="text" readonly>
                <h5 class="normal"><input class="check_1" type="checkbox"> <span>Keep me up to date on news and
                    exclusive offers</span></h5><br>
                <h4>Shipping address</h4>
              </div>
              
              <div class="check_lm4 clearfix">
                <div class="col-sm-6 space_left">
                  <input class="form-control" placeholder="'.$fname.'" type="text">
                </div>
                <div class="col-sm-6 space_right">
                  <input class="form-control" placeholder="'.$lname.'" type="text">
                </div>
              </div>
              <div class="check_lm4 clearfix">
                <input class="form-control" placeholder="'.$address.'" type="text">  
              </div> 
              ';
              }
              }
              ?>

              <!-- <div class="check_lm5 clearfix">
                <h5 class="normal"><input class="check_1" type="checkbox"> <span>Save this information for next
                    time</span></h5>
              </div>
              <div class="checkout_1l3 clearfix"> -->
                <hr>
                <div class="col-sm-6">
                  <h5 class="mgt"><a href=" cart.php?usercart=<?php echo $_SESSION['userid'] ?>"><i
                        class="fa fa-chevron-left"></i> Return to cart</a></h5>
                </div>
                <div class="col-sm-6">
                  <h5 class="mgt text-right"><a class="button mgt" href="payment.php">Continue</a></h5>
                </div>
              <!-- </div> -->
            </div>
          </div>
          
          <div class="col-sm-6">
            <?php
						if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
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
								echo '<div class="check_rm clearfix">
								<div class="checkout_1r mgt clearfix">
									<div class="checkout_1l2 mgt clearfix">
										<div class="col-sm-2">
											<img src="img/' . $product_image . '" alt="abc" class="iw">
										</div>
										<div class="col-sm-7">
											<p class="mgt">' . $product_name . '</p>
											<h6>Quantity : ' . $cartquantity . '</h6>
										</div>
										<div class="col-sm-3">
											<h6 class="text-right col_3">' . $product_discountprice . '</h6>
										</div>
									</div>
								</div>';
							}
						}
						?>

            <!-- <div class="checkout_1r clearfix">
								<div class="checkout_1l2 clearfix">
									<div class="col-sm-2">
										<img src="img/21.jpg" alt="abc" class="iw">
									</div>
									<div class="col-sm-7">
										<p class="mgt">Naminos elementum disus tincidunts cosmo de cosmopolis red / XS</p>
										<h6>red / XS</h6>
									</div>
									<div class="col-sm-3">
										<h6 class="text-right col_3">Rs. 169.00</h6>
									</div>
								</div>
							</div>
							<div class="checkout_1r clearfix">
								<div class="checkout_1l2 clearfix">
									<div class="col-sm-2">
										<img src="img/22.jpg" alt="abc" class="iw">
									</div>
									<div class="col-sm-7">
										<p class="mgt">Naminos elementum disus tincidunts cosmo de cosmopolis red / XS</p>
										<h6>red / XS</h6>
									</div>
									<div class="col-sm-3">
										<h6 class="text-right col_3">Rs. 159.00</h6>
									</div>
								</div>
							</div>
							<div class="checkout_1r border_none pdb clearfix">
								<div class="checkout_1l2 clearfix">
									<div class="col-sm-2">
										<img src="img/23.jpg" alt="abc" class="iw">
									</div>
									<div class="col-sm-7">
										<p class="mgt">Naminos elementum disus tincidunts cosmo de cosmopolis red / XS</p>
										<h6>red / XS</h6>
									</div>
									<div class="col-sm-3">
										<h6 class="text-right col_3">Rs. 149.00</h6>
									</div>
								</div>
							</div> -->
            <div class="checkout_1r1 clearfix">
              <br>
              <div class="checkout_1r1i clearfix">
                <div class="col-sm-6">
                  <h5 class="mgt normal">Subtotal</h5>
                  <h5 class="normal">Shipping</h5>
                </div>
                <div class="col-sm-6">
                  <h5 class="mgt col_3">Rs.<?php echo $_SESSION['cartBill'] ?></h5>
                  <h6>Shipping Charge is Rs. 60</h6>
                </div>
              </div>
            </div>
            <div class="checkout_1r1 clearfix">
              <hr>
              <div class="checkout_1r1i clearfix">
                <div class="col-sm-6">
                  <h5 class="mgt normal">Total</h5>
                </div>
                <div class="col-sm-6">
                  <h4 class="mgt"><span class="normal">INR</span> <span
                      class="col_3">Rs.<?php echo $_SESSION['cartBill'] + 60 ?></span></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>

</body>

</html>

<?php
include 'footer.php';
?>