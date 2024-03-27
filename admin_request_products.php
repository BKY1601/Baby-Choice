<?php
include 'header_admin.php';
include 'db_connection.php';
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
                                        <h4>Requested Products List</h4>
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
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Product name</th>
                                            <th>Product size</th>
                                            <th>Product detail</th>
                                            <th>Product image</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $sql = "SELECT * FROM `requests`";
                                     $result = mysqli_query($conn,$sql);
                                     while($row = mysqli_fetch_assoc($result)){
                                        $r_id = $row['r_id'];
                                        $u_name = $row['u_name'];
                                        $email = $row['email'];
                                        $mobile = $row['mobile'];
                                        $p_name = $row['p_name'];
                                        $p_size = $row['p_size'];
                                        $p_detail = $row['p_detail'];
                                        $rp_img = $row['rp_img'];
                                        $u_address = $row['u_address'];
                                    
                                       echo' <tr>
                                            <td>'.$r_id.'</td>
                                            <td></td>
                                            <td>'.$u_name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$mobile.'</td>
                                            <td>'.$p_name.'</td>
                                            <td>'.$p_size.'</td>
                                            <td>'.$p_detail.'</td>
                                            <td><img src="img/'.$rp_img.'" alt="" class="blog" width="100" height="100"></td>
                                            <td>'.$u_address.'</td>
                                            <td><a href="deleteRequest.php?r_id='.$r_id.'"
                                                    class="fa fa-trash" style="float: right;"></a></td>
                                        </tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                
                    

    </section>

    <?php
include 'footer.php'
?>
</body>

</html>