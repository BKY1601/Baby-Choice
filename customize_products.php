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
	   <h4 class="c_text mgt">Welcome to Customize products</h4>
     <br>
     <p style="color:black;">Here you can customize product by uploading your favourite image of your baby’s or yourself for your baby's on some products like pillow, blankets etc.</p>
    </div>
         <br>
	  <form action="cp_action.php" method="post" enctype="multipart/form-data">
    <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Name *</h5>
		 <input class="form-control" type="text" name="u_name" required>
		</div>
	   </div>
	  </div>
    <br>
	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Please upload your image</h5>
    <br>
     <input type="file" class="button_1" name="cp_img"><br></div>
    <!-- <input type="submit"  class="button_1" value="Upload Image" name="fileToUpload" required> -->
    <br>
    <br>
		</div>
	   </div>
	  </div>
    <h5 for="products" required>Choose a prduct where you want your image : </h5>
<br>
<h5><select name="cp_items" required>
  <option value="--">--</option>
  <option value="Cushions">Cushions</option>
  <option value="Blankets">Blankets</option>
  <option value="Cups">Cups</option>
  
</select></h5><br><br><br><br>

	  <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Any text if you want </h5><br>
		 <input class="form-control" type="text" name="cp_text">
		 
     <div class="register_1li1 clearfix">
	   <div class="col-sm-12 space_all">
	    <div class="register_1li1l clearfix">
		 <h5>Enter Your Address *</h5>
		 <input class="form-control" type="text" name="u_address" required>
		</div>
	   </div>
	  </div>
    <br><br>
		 <input type="submit" class="button" value="Submit"><span></i></span>
		
		</div>
    
	   </div>
	  </div>
         </form>
         </div>





    
    <h4 class="heading-4">Your customize products look like this </h4>
         <div class="col-sm-5 space_right">
	 <div class="register_1r clearfix">
	  <br>
    <img src="img/56.jpg" class="iw customize-image" alt="abc">
    <h5 class=>Cusion is 4 x 4 size for Rs. 799 </h5>
     <br>
	 </div>
	 </div>
   <div class="col-sm-3 space_right">
	 <div class="register_1r clearfix">
   <br>
	  <img src="img/57.jpg" class="iw" alt="abc">
    <h5>Blanket is 4 x 4 for Rs. 999 </h5>
	</div>
	 </div>
   <div class="col-sm-3 space_right">
	 <div class="register_1r clearfix">
   <br>
	  <img src="img/58.jpg" class="iw" alt="abc">
    <h5>Cups have 4 inch length & 3 inch width for Rs. 499 </h5>
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
