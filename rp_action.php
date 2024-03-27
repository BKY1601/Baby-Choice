<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'db_connection.php';
        $u_name =$_POST['u_name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $p_name = $_POST['p_name'];
        $p_size = $_POST['p_size'];
        $p_detail = $_POST['p_detail'];
        $rp_img = $_FILES['rp_img']['name'];
        $destination = "C:/xampp/htdocs/Baby Choice/img/".basename($_FILES['rp_img']['name']);
        move_uploaded_file($_FILES['rp_img']['tmp_name'],$destination);
        $u_address = $_POST['u_address'];
       
        

                $sql = "INSERT INTO `requests` (`r_id`, `u_name`, `email`, `mobile`, `p_name`, `p_size`, `p_detail`, `rp_img`, `u_address`, `timestamp`) 
                VALUES (NULL, '$u_name', '$email', '$mobile', '$p_name', '$p_size', '$p_detail', '$rp_img', '$u_address',  current_timestamp());";
                $result = mysqli_query($conn,$sql);

                if($result){
                    $showAlert = true;
                    header("Location:/Baby%20Choice/index.php?ordersuccessful=true");
                    exit();
                }
            
            else{
                $showError = "Order Unsucessful";
                header("Location:/Baby%20Choice/request_products.php?orderunsucessful=false&error=$showError");
            }
        
        header("Location:/Baby%20Choice/request_products.php?order=false&error=$showError");
        }  
?>