<?php
include 'db_connection.php';
include 'header_admin.php'
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
                                        <h4>Users list</h4>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            
                                            <th>User id</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>                        
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = "SELECT * FROM `user`";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result)){
                                            $userid = $row['user_id'];
                                            $fname = $row['fname'];
                                            $lanme = $row['lname'];
                                            $email = $row['email'];
                                            $mobile = $row['mobile'];
                                            $address = $row['address'];
                                            echo ' <tr>
                                            <td>'.$userid.'</td>
                                            <td>'.$fname.'</td>
                                            <td>'.$lanme.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$mobile.'</td>
                                            <td>'.$address.'</td>
                                            
                                            <td><a href="#"
                                                    class="fa fa-info-circle" style="float: right;"></a></td>
                                        </tr>';
                                        }
                                    ?>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>Pratik</td>
                                            <td>Jain</td>
                                            <td>user@user.com</td>
                                            <td>8585952515</td>
                                            <td>hey this is a sample order</td>
                                            <td><a href="#"
                                                    class="fa fa-info-circle" style="float: right;"></a></td>
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