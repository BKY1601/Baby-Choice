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
	<link href="css/register.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
<body>
    
<section id="center" class="center_register">
 <div class="container">
  <div class="row">
   <div class="register_1 clearfix">
    <div class="col-sm-6 space_left">
	 <div class="register_1l clearfix">
	  <div class="register_1li clearfix">
	   <h4 class="c_text mgt">Login into your Account</h4>
	  </div>
         
	  <form action="handleLogin.php" method="post">
	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Email *</h5>
		 <input class="form-control" type="text" name="email" required>
		</div>
	   </div>
	  </div>
	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Password *</h5>
		 <input class="form-control" type="password" name="password" required>
		 <br>
		 <!-- <h5><a class="button_1" type="submit" name="submit" href=""><span>LOG IN</span> <i class="fa fa-chevron-right"></i></a></h5> -->
		 <input type="submit" class="button_1" value="LOG IN"><span></i></span>
		 <span class="tick_box"><input class="check" type="checkbox"> Remember Me</span>
		</div>
	   </div>
	  </div>
         </form>

     <div class="clearfix login_page">
		  <div class="col-sm-6 space_left">
		    <h6>Forgot Password ? <a class="c_text" href="#">Click Here</a></h6>
		  </div>
		  <div class="col-sm-6 space_right">
		    <h6>New User ? <a class="c_text" href="register.php">Register Now</a></h6>
		  </div>
	 </div>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="register_1r clearfix">
	  <img src="img/52.jpg" class="iw" alt="abc">
	 </div>
	</div>
	<div class="col-sm-6 space_left"><div>
		  <h6>Login as <a class="c_text" href="admin_login.php">Admin</a></h6>
		 </div>
   </div>
  </div>
 </div>
</section>

<?php
    include 'footer.php';
    ?>


</body>
 
</html>
