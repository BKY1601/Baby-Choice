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
  <link href="css/blog.css" rel="stylesheet">
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
          <div class="col-sm-9">
            <div class="center_p1i clearfix">
              <ul class="mgt">
                <li><a href="index.php">Home</a></li> |
                <li class="col_2">Blog</li>
              </ul>
            </div><br>
            <?php
						$sql = "SELECT * FROM `blogs` LIMIT 3";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
							$blogid = $row['blog_id'];
							$blogimage = $row['blog_image'];
							$blogtitle = $row['blog_title'];
							$blogauthor = $row['blog_author'];
							$blogdesc = $row['blog_description'];
							$blogdate = $row['blog_date'];

							echo ' <div class="blog_1 mgt clearfix">
			<a href="blog_detail.php"><img src="img/' . $blogimage . '" class="iw" alt="abc"></a>
			<h3><a href="blog_detail.php">' . $blogtitle . '</a></h3>
			<ul>
				<li><i class="fa fa-user"></i>' . $blogauthor . '</li>
				<li><i class="fa fa-comments"></i> 4 Comments</li>
				<li><i class="fa fa-calendar"></i> ' . $blogdate . ' </li>
				<li><i class="fa fa-clock-o"></i> ' . $blogdate . '</li>
			</ul>
			<p>' . $blogdesc . ' </p>
			<h5><a class="button mgt" href="blog_detail.php?blog=' . $blogid . '">READ MORE</a></h5>
		</div>
		<br>
		<br>
		';
						}
						?>





            <div class="center_product_1r4r text-right clearfix">
              <ul class="pagination">
                <li class="disabled"><a href="blog_detail.php">«</a></li>
                <li class="active"><a href="blog_detail.php">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="blog_detail.php">2</a></li>
                <li><a href="blog_detail.php">3</a></li>
                <li><a href="blog_detail.php">4</a></li>
                <li><a href="blog_detail.php">5</a></li>
                <li><a href="blog_detail.php">»</a></li>
              </ul>
            </div>

          </div>
          <div class="col-sm-3">
            <div class="top_2l center_3l1o clearfix">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i></button>
                </span>
              </div>
            </div>

            <div class="center_3l1 clearfix">
              <h4 class="mgt">SHOP BY</h4>
              <hr>
              <div class="ziehharmonika">
                <h3 data-prefix="★" class=""><a href="#">Seasonal cloths</a>
                  <div class="arrowDown"></div>
                  <div class="collapseIcon">+</div>
                </h3>
                <div class="clickable" style="display: none;">
                  <ul>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Rainy</a></li>
                    <li><a href="#">Regular</a></li>
                  </ul>
                </div>
                <h3 data-prefix="★"><a href="#">Festivals cloths</a>
                  <div class="arrowDown"></div>
                  <div class="collapseIcon">+</div>
                </h3>
                <div class="clickable">
                  <ul>
                    <li><a href="#">Diwali</a></li>
                    <li><a href="#">Rakshabandhan</a></li>
                    <li><a href="#">Christmas</a></li>
                    <li><a href="#">New Years</a></li>
                  </ul>
                </div>
                <h3 data-prefix="★" class=""><a href="#">Events cloths</a>
                  <div class="arrowDown"></div>
                  <div class="collapseIcon">+</div>
                </h3>
                <div class="clickable" style="display: none;">
                  <ul>
                    <li><a href="#">Weedings</a></li>
                    <li><a href="#">Birthdays</a></li>
                    <li><a href="#">Partys</a></li>
                    <li><a href="#">Fashion</a></li>
                  </ul>
                </div>
                <h3 data-prefix="★"><a href="#">Diapers</a>
                  <div class="arrowDown"></div>
                  <div class="collapseIcon">+</div>
                </h3>
                <div class="clickable">
                  <ul>
                    <li><a href="#">Pamper</a></li>
                    <li><a href="#">Huggies</a></li>
                    <li><a href="#">Mamy poko</a></li>
                    <li><a href="#">Baby hug</a></li>
                  </ul>
                </div>
                <h3 data-prefix="★" class=""><a href="#">Daily needs</a>
                  <div class="arrowDown"></div>
                  <div class="collapseIcon">+</div>
                </h3>
                <div class="clickable" style="display: none;">
                  <ul>
                    <li><a href="#">Oils</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">Foods</a></li>
                    <li><a href="#">Shoes</a></li>
                  </ul>
                </div>
                <h3 data-prefix="★"><a href="#">Gadgets</a>
                  <div class="arrowDown"></div>
                  <div class="collapseIcon">+</div>
                </h3>
                <div class="clickable">
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
              <h4 class="mgt">POPULAR TAGS</h4>
              <hr>
              <div class="center_3l1io clearfix">
                <ul class="mgt">
                  <li><a href="#">Oils</a></li>
                  <li><a href="#">cloths</a></li>
                  <li><a href="#">Shoes</a></li>
                  <li><a href="#">Trollies</a></li>
                  <li><a href="#">T-shirt</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Foods</a></li>
                  <li><a href="#">Toys</a></li>
                  <li><a href="#">Blankets</a></li>
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

            <div class="blog_right clearfix">
              <h4 class="mgt">MORE BLOGS</h4>
              <hr>
              <div class="center_p1i clearfix">
                <ul class="mgt">
                  <li><a href="blog_detail.php">LATEST POST</a></li> |
                  <li><a class="col_2" href="blog_detail.php">READ POST</a></li>
                </ul>
              </div><br>
              <img src="img/35.jpg" class="iw" alt="abc">
              <h5><a href="blog_detail.php">Top 5 Tips For Keeping Your Baby Safe</a></h5>
              <ul>
                <li><i class="fa fa-comments"></i> 4 Comments</li>
                <li><i class="fa fa-calendar"></i> 16/03/2021</li>
              </ul>
              <p>Keeping your baby safe is the utmost priority of any parent whether they are with the
                baby or not...</p><br>
            </div>

            <div class="blog_right clearfix">
              <h4 class="mgt">MORE BLOGS</h4>
              <hr>
              <div class="center_p1i clearfix">
                <ul class="mgt">
                  <li><a href="blog_detail.php">LATEST POST</a></li> |
                  <li><a class="col_2" href="blog_detail.php">READ POST</a></li>
                </ul>
              </div><br>
              <img src="img/36.jpg" class="iw" alt="abc">
              <h5><a href="blog_detail.php">How to Save Money When Buying For Baby</a></h5>
              <ul>
                <li><i class="fa fa-comments"></i> 4 Comments</li>
                <li><i class="fa fa-calendar"></i> 15/03/2021</li>
              </ul>
              <p>When you’re sprouting a bump, being more cost-conscious automatically comes to the top of
                your ...</p><br>
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