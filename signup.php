<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'db_connection.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $reenterpassword = $_POST['reenterpassword'];
        $address = $_POST['address'];
        
//        $student_cpassword = $_POST['signupCpassword'];
//        $student_gender = $_POST['gender'];
//        $student_address = $_POST['address'];
//        $student_photo = $_FILES['image']['name'];
//        $destination = "C:/xampp/htdocs/college-website/img/".basename($_FILES['image']['name']);

//         
        // if($fname == null && $lname == null && $email == null && $password == null && $reenterpassword == null && $mobile == null ){
        //     header("Location:/Baby%20Choice/index.php?emptyCred=true");
        // }


        // $p = array($student_username,$student_email,$student_password,$student_gender,$student_address,$student_photo);
        // print_r($p);
        // check if user already exists or not
        $existsSQL = "SELECT * FROM `user` WHERE `email` LIKE '$email'";
        $result = mysqli_query($conn,$existsSQL);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            $showError = "Email already in use";
        }
        else
            if($password == $reenterpassword){
//                move_uploaded_file($_FILES['image']['tmp_name'],$destination);
                $hash_password = password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `mobile`, `password`, `address`, `timestamp`) VALUES (NULL, '$fname', '$lname', '$email', '$mobile', '$hash_password', '$address', current_timestamp());";
                $result = mysqli_query($conn,$sql);

                if($result){
                    $showAlert = true;
                    header("Location:/Baby%20Choice/login.php?signupSuccess=true");
                    exit();
                }
            }
            else{
                $showError = "Passwords do not match";
                header("Location:/Baby%20Choice/index.php?signupSuccess=false&error=$showError");
            }
        
        header("Location:/Baby%20Choice/register.php?signupSuccess=false&error=$showError");
    }
?>