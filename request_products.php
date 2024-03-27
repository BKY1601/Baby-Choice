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
	   <h4 class="c_text mgt">Request Products</h4>
     <br>
     <h5>Please fill the details so we can contact you as soon as regarding the products. </h5>
	  </div>
         
	  <form action="rp_action.php" method="post" enctype="multipart/form-data">
	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Name *</h5>
		 <input class="form-control" type="text" name="u_name" required>
		</div>
	   </div>
	  </div>
	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter your email *</h5>
		 </div>
	   </div>
	  </div>
		 <input class="form-control" type="email" name="email" required>
     <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Mobile Number *</h5>
		 <input class="form-control" type="text" name="mobile" required>
		</div>
	   </div>
	  </div>
    <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Product Name *</h5>
		 <input class="form-control" type="text" name="p_name" required>
		</div>
	   </div>
	  </div>
    <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Product size if any </h5>
		 <input class="form-control" type="text" name="p_size">
		</div>
	   </div>
	  </div>
    <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Product Details if any </h5>
		 <input class="form-control" type="text" name="p_detail">
		</div>
	   </div>
	  </div>
	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		<h5>Upload Product image if any</h5>
     <input type="file" class="button_1" name="rp_img">
	 <!-- <input type="submit"  class="button_1" value="Upload Image" name="fileToUpload" required> -->
		</div>
	   </div>
	  </div>
    <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Address *</h5>
		 <input class="form-control" type="text" name="u_address" required>
		</div>
	   </div>
	  </div>
    <br>
		 <br>
		 <!-- <h5><a class="button_1" type="submit" name="submit" href=""><span>LOG IN</span> <i class="fa fa-chevron-right"></i></a></h5> -->
		 <input type="submit" class="button" value="Request"><span></i></span>
		
         </form>

     <div class="clearfix login_page">
		  <div class="col-sm-6 space_left">
		    
		  </div>
		  <div class="col-sm-6 space_right">
		    
		  </div>
	 </div>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="register_1r clearfix">
	  <img src="img/59.jpg" class="iw" alt="abc">
	 </div>
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
