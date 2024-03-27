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
  <link href="css/my_account.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<br>
<br>
  <?php
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {


    $userid = $_SESSION['userid'];
    $sql = "SELECT * FROM `user` WHERE `user_id` = $userid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $number = $row['mobile'];
    $address = $row['address'];

    echo '<div class="jumbotron">
    <h3 class="text-5 font-weight-400 d-flex align-items-center mb-4">Personal Details<a href="' . $_SERVER['REQUEST_URI'] . '" data-toggle="modal" class="ml-auto text-2 text-uppercase btn-link"><a href="#" data-toggle="modal" data-target="#update_users_modal" class="ml-auto text-2 text-uppercase btn-link"><i class="fa fa-edit" style="float: right;" href="my_account.php?userid='.$userid.'" ></i></a></h3>
    <hr class="mx-n4 mb-4">

      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name:</p>
      <p class="col-sm-9 text-3">' . $fname . ' ' . $lname . '</p>
      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
      <p class="col-sm-9 text-3">' . $email . '</p>
      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Phone Number</p>
      <p class="col-sm-9 text-3">' . $number . '</p>
      <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Address:</p>
      <p class="col-sm-9 text-3">' . $address . '<br>
       </p>
       <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>';
    
  }
  else{
    echo 'You are not logged in to view your account info';
  }
  ?>


<!-- <?php
$error = "";
$userid = $_GET['user_id'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $number = $_POST['mobile'];
  $address = $_POST['address'];
    
    $sql = "UPDATE `user` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `mobile` = '$number' `address` = '$address' 
    WHERE `user`.`user_id` = $userid;";
   $result = mysqli_query($conn,$sql);
   
}
?>
<!-- Add Product Modal start -->
<div class="modal fade" id="update_users_modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update User Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-product-form" enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI'] ?>"
                                        method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name="first_name" class="form-control"
                                                        placeholder="Enter First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last_name" class="form-control"
                                                        placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="eamil" name="email"
                                                        class="form-control" placeholder="Enter Email">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input type="integer" name="mobile"
                                                        class="form-control" placeholder="Enter Mobile Number">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" name="address"
                                                        placeholder="Enter Address"></textarea>
                                                </div>
                                            </div>

                                            <input type="hidden" name="update_user" value="1">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary add-product">Update</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Product Modal end -->


 -->

</body>

</html>

<?php
include 'footer.php';
?>