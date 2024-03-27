<!-- <?php

session_start();

include 'header.php';

$con = mysqli_connect('localhost','root','','registration');
    if($con){
	echo" connection sucessful";
    }else{
	echo " no connection";
}

    if(isset($_POST['name'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];
//    $reenterpassword= $_POST['reenterpassword'];
        
    }
$name=$password='';

$q = " select * from user where first name = '$first name' && password = '$password' ";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate	data";
}else{

	$qy= " insert into user(first name , password) values ('$first name' , '$password')";
	mysqli_query($con, $qy);
}
?> -->
