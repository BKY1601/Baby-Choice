<?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'db_connection.php';
        $u_name = $_POST['u_name'];
        $cp_items = $_POST['cp_items'];
        $cp_text = $_POST['cp_text'];
        $cp_img = $_FILES['cp_img']['name'];
        $destination = "C:/xampp/htdocs/Baby Choice/img/".basename($_FILES['cp_img']['name']);
        move_uploaded_file($_FILES['cp_img']['tmp_name'],$destination);
        $u_address =$_POST['u_address'];
        

                $sql = "INSERT INTO `customize` (`cp_id`, `u_name`, `cp_img`, `cp_items`, `cp_text`, `u_address`, `timestamp`) 
                VALUES (NULL, ' $u_name', '$cp_img', '$cp_items', '$cp_text', '$u_address', current_timestamp());";
                $result = mysqli_query($conn,$sql);

                if($result){
                    $showAlert = true;
                    header("Location:/Baby%20Choice/index.php?ordersuccessful=true");
                    exit();
                }
            
            else{
                $showError = "Order Unsucessful";
                header("Location:/Baby%20Choice/customize_products.php?orderunsucessful=false&error=$showError");
            }
        
        header("Location:/Baby%20Choice/customize_products.php?order=false&error=$showError");
        }  
?>