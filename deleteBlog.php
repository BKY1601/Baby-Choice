<?php 
    include 'db_connection.php';
    $blogid = $_GET['blogid'];
    $sql = "DELETE FROM `blogs` WHERE `blogs`.`blog_id` = $blogid";
    $result = mysqli_query($conn,$sql);
    header("Location: /Baby Choice/admin_blogs.php")

?>