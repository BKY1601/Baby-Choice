<?php
include 'db_connection.php';
include 'header_admin.php';
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
  <link href="css/index.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
  <section id="center" class="center_register">
    <div class="container">
      <div class="row">
        <div class="register_1 clearfix">
          <div class="register_1l clearfix">
            <div class="register_1li clearfix">
              <div class="center_3r1 clearfix">
                <div class="row">
                  <div class="col-sm-9">
                    <h4>Order List</h4>
                  </div>

                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Order id</th>
                      <th>User id</th>
                      <th>User name</th>
                      <th>Product name</th>
                      <th>Product image</th>
                      <th>Product price</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                        $sql = "SELECT * FROM orders";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $orderid = $row['order_id'];
                                            $userid = $row['user_id'];
                                            $amount = $row['amount'];
                                            $status = $row['status'];
                                            $sql1 = "SELECT * FROM `user` WHERE `user_id` = $userid";
                                            $result1 = mysqli_query($conn, $sql1);
                                            $row1 = mysqli_fetch_assoc($result1);
                                            $fname = $row1['fname'];
                                            $lname = $row1['lname'];
                                            $u_address =$row1['address'];
                                            $sql2 = "SELECT `p_id` FROM `cart` WHERE `user_id` = $userid";
                                            $result2 = mysqli_query($conn, $sql2);
                                            $row2 = mysqli_fetch_assoc($result2);
                                            $productid = $row2['p_id'];
                                            $sql3 = "SELECT * FROM `products` WHERE `p_id` = $productid";
                                            $result3 = mysqli_query($conn, $sql3);
                                            $row3 = mysqli_fetch_assoc($result3);
                                            $product_name = $row3['p_name'];
                                            $product_image = $row3['p_image'];
                                            $product_price = $row3['p_discountprice'];

                                            echo '    <tr>
                      <td>' . $orderid . '</td>
                      <td>' . $userid . '</td>
                      <td>' . $fname . ' ' . $lname . '</td>
                      <td>' . $product_name . '</td>
                      <td><img src="img/'. $product_image .'" alt="" class="blog" width="100" height="100"></td>
                      <td>' . $product_price . '</td>
                      <td>'.$u_address.'</td>
                      <td><a href="deleteOrders.php?order_id='.$orderid.'" class="fa fa-trash" style="float: right;"></a></td>
                    </tr>';
                                        }
                                        ?>
                    <!-- <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>BKY</td>
                      <td>Huggies</td>
                      <td>2.jpg</td>
                      <td>550</td>
                      <td>hey this is a sample order</td>
                      <td><a href="#" class="fa fa-trash" style="float: right;"></a></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              </main>
            </div>
          </div>


  </section>

  <?php
    include 'footer.php'
    ?>
</body>

</html>