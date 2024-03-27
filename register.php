<?php 
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
                                <h3 class="mgt">Welcome to BabyChoice.com</h3>
                                <p>For Your Baby Joys, Shop On Baby Choice.</p>
                                <h4 class="c_text">Create a New Account</h4>
                            </div>

                            <form action="signup.php" method="post">
                                <legend>
                                    <fieldset>

                                        <div class="register_1li1 clearfix">
                                            <div class="col-sm-6 space_left">
                                                <div class="register_1li1l clearfix">
                                                    <h5>First Name *</h5>
                                                    <input class="form-control" type="text" name="fname" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 space_right">
                                                <div class="register_1li1l clearfix">
                                                    <h5>Last Name *</h5>
                                                    <input class="form-control" type="text" name="lname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="register_1li1 clearfix">
                                            <div class="col-sm-12 space_all">
                                                <div class="register_1li1l clearfix">
                                                    <h5>Enter Your Email *</h5>
                                                    <input class="form-control" type="email" name="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="register_1li1 clearfix">
                                            <div class="col-sm-12 space_all">
                                                <div class="register_1li1l clearfix">
                                                    <h5>Enter Your Mobile number *</h5>
                                                    <input class="form-control" type="integer" name="mobile" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="register_1li1 clearfix">
                                            <div class="col-sm-12 space_all">
                                                <div class="register_1li1l clearfix">
                                                    <h5>Enter Your Password *</h5>
                                                    <input class="form-control" placeholder="At least 6 characters"
                                                        type="password" name="password" required>
                                                    <h5 class="col_2"><i class="fa fa-info-circle"></i> Passwords must
                                                        be at least 6 characters. </h5>
                                                    <h5>Re-enter Your Password *</h5>
                                                    <input class="form-control" type="password" name="reenterpassword" required>
						
                                                    <div class="register_1li1 clearfix">
                                            <div class="col-sm-12 space_all">
                                                <div class="register_1li1l clearfix">
                                                    <h5>Address *</h5>
                                                    <textarea class="form-control" type="text" name="address" required placeholder="eg : Room no, Apartment name, phase, Area name, Near by, City, Zip Code, State"></textarea>
                                                </div>
                                            </div>
                                                    <div class="register_1li2 clearfix">

                                                        <div class="col-sm-12 space_all">
                                                            <h6 class="term"><input class="check" type="checkbox"> I
                                                                agree with website <a class="c_text" href="#">Terms and
                                                                    Services</a></h6>

                                                        </div>
                                                        <div class="col-sm-12 space_all">
                                                            <h6 class="term"><input class="check" type="checkbox"> I'm
                                                                not a robot </h6>

                                                            <h6>Already have an account ? <a class="c_text"
                                                                    href="login.php">Login</a></h6>
                                                        </div>

                                                    </div>
                                                    <br>

                                                    <!--<h5><a class="button_1" type="submit" name="submit"
                                                            href="signup.php"><span>CREATE ACCOUNT</span> <i
                                                                class="fa fa-chevron-right"></i></a></h5>-->
                                                                <input type="submit" class="button_1" value="CREATE ACCOUNT">


                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </legend>
                            </form>



                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="register_1r clearfix">
                            <img src="img/47.jpg" class="iw" alt="abc">
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