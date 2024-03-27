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
  <link href="css/blog_detail.css" rel="stylesheet">
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
                <li class="col_2">Blog Details</li>
              </ul>
              <?php
							$blogid = $_GET['blog'];
							$sql = "SELECT * FROM `blogs` WHERE `blog_id` = $blogid";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							$blog_title = $row['blog_title'];
							$blog_description = $row['blog_description'];
							$blog_author = $row['blog_author'];
							$blog_image = $row['blog_image'];
							$blog_date = $row['blog_date'];
							echo '      </div><br>
            <div class="blog_1 mgt clearfix">
              <a href="#"><img src="img/' . $blog_image . '" class="iw" alt="abc"></a>
              <h3><a href="#">' . $blog_title . '</a></h3>
              <ul>
                <li><i class="fa fa-user"></i> ' . $blog_author . '</li>
                <li><i class="fa fa-comments"></i> 4 Comments</li>
                <li><i class="fa fa-calendar"></i> ' . $blog_date . '</li>
              </ul>
              <p>' . $blog_description . '</p>
              <br>
              <br>';
							?>

              <!-- </div><br>
            <div class="blog_1 mgt clearfix">
              <a href="#"><img src="img/45.jpg" class="iw" alt="abc"></a>
              <h3><a href="#">Thumb Sucking in Babies</a></h3>
              <ul>
                <li><i class="fa fa-user"></i> Vinay Verma</li>
                <li><i class="fa fa-comments"></i> 4 Comments</li>
                <li><i class="fa fa-calendar"></i> 14/03/2021</li>
                <li><i class="fa fa-clock-o"></i> 10:00 AM</li>
              </ul>
              <p>Thumb-sucking is a usual occurrence in babies. At some or other stages, it is the job of infants to
                suck their thumb which they love it and it becomes a habit gradually. Thumb sucking may result in
                displaced teeth and a habit which may be difficult for infants to get rid of.</p>
              <p>Most of the toddlers do resort to sucking their thumb albeit for a short period of time, for others
                this may also become their daily habit. This may be a good indicator for hunger or want of comfort. Some
                parents tend to force their baby to immediately pull back their thumb as soon as they start sucking it;
                this isn’t the way to deal with this problem. In fact, parents’ reaction like this will encourage the
                babies to confirm this habit even further.</p>
              <br>
              <h4>Connection between hunger and thumb-sucking</h4>
              <p>There is a saying that babies suck their thumb which indicates that their tummy is not full and hence
                by doing so will indicate you that they are hungry. As per research studies, toddlers who were fed at
                smaller durations were more or less susceptible to thumb sucking than toddlers who were fed at longer
                durations. However, there are toddlers who may show the tendency for the same, rather than feeding
                schedule. In fact, some toddlers have been doing thumb sucking, right from the delivery room. Isn’t that
                unbelievable! Well, that’s true.</p>
              <br>
              <h4>Thumb sucking should never be the problem </h4>
              <p>If for a few minutes your baby sucks the thumb, don’t see that as a problem. The concern only arises if
                your baby develops this habit for a longer duration. Always keep in mind that it is far better to deal
                with thumb sucking when it is at the budding stage instead of becoming a habit. In case if you see that
                your baby is adopting such practice instantly after being fed, it is better to put your baby back on to
                the bottle or breasts or a pacifier.</p>
              <br>
              <h4>Thumb-sucking and breastfeeding</h4>
              <p>As per research studies which state that breastfed babies have less possibility to thumb sucking. This
                is because breastfed babies satisfy their impulse to suck this way only. Generally, a baby is able to
                suck the milk only from the breast within 5 to 6 minutes; any sucking exceeding this point is only for
                the sucking purposes. If the baby does thumb sucking even after breastfeeding, the mother should put her
                out on to the other breast so that she can have her fill, in case if she feels hungry. For this
                objective, you can raise the time duration to which the babies suck the first breast and then put them
                onto the second breast.</p>
              <br>
              <h4>Connection between thumb-sucking and bottle-fed babies</h4>
              <p>The thumb sucking habit often develops in bottle-fed babies because they are able to finish a full milk
                bottle in 10 minutes as against 20 minutes of thumb-sucking that would have been required for the
                similar amount of milk in breastfeeding. With the course of time, the nipple of the milk-bottle become
                weaker as the baby grows stronger enough to finish the bottle full of milk at a much faster pace. If
                your baby is on formula milk, you should endeavor to slow down the speed of the bottle feeding so that
                your baby sucks the nipples of the milk bottle for the required amount of time.</p>
              <br>
              <h4>Cutting down on feeding</h4>
              <p>Parents usually cut down the number of feedings of milk as soon as the baby grows older. It is
                therefore not to cut down on the number of feedings of your child even if he/she is doing thumb sucking.
                Although if your baby is asleep, you can wake her up and check whether or not she would like to be fed
                or not.</p>
              <p>Connection between teething and thumb-sucking<br />
                Babies who are presently on teething, may have the habit of thumb sucking so as to get relieved of the
                gums pressure.</p>
              <br>
              <h4>What about the baby&#8217;s teeth?</h4>
              <p>Normally the upper front teeth of the baby push forward in case if your baby is in the habit of thumb
                sucking. It is recommended that the thumb-sucking habit should be curtailed down before the age of six
                so that the same occurrence does not happen with the permanent teeth of the baby.</p>
              <br>
              <br> -->

            </div>
            <div class="detail_1 clearfix">
              <h5>Share post:</h5>
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>

            <div class="article_page_left_inner_5 clearfix">
              <div class="article_page_left_inner_5_inner clearfix">
                <div class="col-sm-2">
                  <div class="article_page_left_inner_5_inner_left">
                    <img class="img-circle" src="img/48.jpg">
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="article_page_left_inner_5_inner_right">
                    <div class="clearfix">
                      <div class="col-sm-6 space_left">
                        <h6 class="mgt">Rahul Mauraya <span>March 15, 2021</span></h6>
                      </div>
                      <div class="col-sm-6 text-right">
                        <h5>
                          <i class="fa fa-thumbs-up"></i>
                          <span>8</span>
                          <i class="fa fa-thumbs-down"></i>
                          <span>2</span>
                        </h5>
                      </div>
                    </div>
                    <p>
                      Wow this blog was amazing it's give me more better idea about babies. 😎 </p>
                    <h3><a href="#">Reply</a></h3>
                  </div>
                </div>
              </div>
              <div class="article_page_left_inner_5_inner clearfix">
                <div class="col-sm-2">
                  <div class="article_page_left_inner_5_inner_left">
                    <img class="img-circle" src="img/49.jpg">
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="article_page_left_inner_5_inner_right">
                    <div class="clearfix">
                      <div class="col-sm-6 space_left">
                        <h6 class="mgt">Jose Joy <span>March 16, 2021</span></h6>
                      </div>
                      <div class="col-sm-6 text-right">
                        <h5>
                          <i class="fa fa-thumbs-up"></i>
                          <span>7</span>
                          <i class="fa fa-thumbs-down"></i>
                          <span>1</span>
                        </h5>
                      </div>
                    </div>
                    <p>
                      Ooh wow this is really amazing post now i get to know why Thumb Sucking in Babies we see. 😄 </p>
                    <h3><a href="#">Reply</a></h3>
                  </div>
                </div>
              </div>
              <div class="article_page_left_inner_5_inner clearfix">
                <div class="col-sm-2">
                  <div class="article_page_left_inner_5_inner_left">
                    <img class="img-circle" src="img/50.jpg">
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="article_page_left_inner_5_inner_right">
                    <div class="clearfix">
                      <div class="col-sm-6 space_left">
                        <h6 class="mgt">Shubham Singh <span>March 17, 2021</span></h6>
                      </div>
                      <div class="col-sm-6 text-right">
                        <h5>
                          <i class="fa fa-thumbs-up"></i>
                          <span>5</span>
                          <i class="fa fa-thumbs-down"></i>
                          <span>1</span>
                        </h5>
                      </div>
                    </div>
                    <p>
                      A website was amazing & their blog posts too i love this website contains. 😍 </p>
                    <h3><a href="#">Reply</a></h3>
                  </div>
                </div>
              </div>
              <div class="article_page_left_inner_5_inner clearfix">
                <div class="col-sm-2">
                  <div class="article_page_left_inner_5_inner_left">
                    <img class="img-circle" src="img/51.jpg">
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="article_page_left_inner_5_inner_right">
                    <div class="clearfix">
                      <div class="col-sm-6 space_left">
                        <h6 class="mgt">Sudheer M <span> March 18, 2021</span></h6>
                      </div>
                      <div class="col-sm-6 text-right">
                        <h5>
                          <i class="fa fa-thumbs-up"></i>
                          <span>9</span>
                          <i class="fa fa-thumbs-down"></i>
                          <span>1</span>
                        </h5>
                      </div>
                    </div>
                    <p>
                      Kya baat hai bhot mast blogs hai yeh ma aur bhi dekhna chata hu aisa unique blogs. 🤩 </p>
                    <h3><a href="#">Reply</a></h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="detail_hli3 clearfix">
              <h5 class="mgt">Leave A Comment</h5>

              <div class="detail_hli3i clearfix">
                <div class="col-sm-6 space_left">
                  <input class="form-control" placeholder="Full Name" type="text">
                </div>
                <div class="col-sm-6 space_left">
                  <input class="form-control" placeholder="Mobile" type="text">
                </div>
              </div>
              <div class="detail_hli3i clearfix">
                <div class="col-sm-6 space_left">
                  <input class="form-control" placeholder="Email" type="text">
                </div>
                <div class="col-sm-6 space_left">
                  <input class="form-control" placeholder="City" type="text">
                </div>
              </div>
              <div class="detail_hli3i clearfix">
                <div class="col-sm-12 space_left">
                  <textarea class="form-control form_1" placeholder="Write Review"></textarea>
                </div>
              </div>
              <h5><a class="button" href="#">SUBMIT REVIEW</a></h5>
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
              <p>Keeping your baby safe is the utmost priority of any parent whether they are with the baby or not...
              </p><br>
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
              <p>When you’re sprouting a bump, being more cost-conscious automatically comes to the top of your ...</p>
              <br>
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