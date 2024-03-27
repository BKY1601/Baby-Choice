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
                                        <h4>Customize Products Order List</h4>
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
                                            <th>Product type</th>
                                            <th>Uploaded iamge</th>
                                            <th>Text</th>
                                            <th>Product price</th>
                                            <th>Payment method</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $sql = "SELECT * FROM `customize`";
                                     $result = mysqli_query($conn,$sql);
                                     while($row = mysqli_fetch_assoc($result)){
                                        $cp_id = $row['cp_id'];
                                        $u_name =$row['u_name'];
                                        $cp_items = $row['cp_items'];
                                        $cp_text = $row['cp_text'];
                                        $cp_img = $row['cp_img'];
                                        $u_address = $row['u_address'];
                                    
                                       echo' <tr>
                                            <td>'.$cp_id.'</td>
                                            <td> </td>
                                            <td>'.$u_name.'</td>
                                            <td>'.$cp_items.'</td>
                                            <td><img src="img/'.$cp_img.'" alt="" class="blog" width="100" height="100"></td>
                                            <td>'.$cp_text.'</td>
                                            <td> </td>
                                            <td> </td>
                                            <td>'.$u_address.'</td>
                                            <td><a href="deleteCustomize.php?cp_id='.$cp_id.'"
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