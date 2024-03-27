
    <?php
    $showError = "false";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'db_connection.php';
        $email = $_POST['email'];
        $password = $_POST['password'];

        

        $sql = "SELECT * FROM `user` WHERE `email` LIKE '$email'";
        $result = mysqli_query($conn,$sql);
        // $numRows = mysqli_num_rows($result);
        // echo $numRows;
        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
                if(password_verify($password,$row['password'])){
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['userid'] = $row['user_id'];
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['email'] = $email;
                    // $_SESSION['studentusername'] = $row['student_username'];
                    echo "logged in". $email;
                    header("Location: /Baby%20Choice/index.php?loginsuccess=true");
                }
                else{
                    $error = "Password incorrect";
                    header("Location: /Baby%20Choice/index.php?error=$error");
                }
        }
        else{
            $error = "Unable to login";
            header("Location: /Baby%20Choice/index.php?error=$error");   
        }
    }
?>
