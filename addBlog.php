<?php 
 $error = "";
 include 'db_connection.php';
 
 if($_SERVER['REQUEST_METHOD'] == "POST"){
     $blogname = $_POST['blog_name'];
     $blogtitle = $_POST['blog_title'];
     $blogdesc = $_POST['blog_description'];
     $blogauthor = $_POST['blog_author'];
     $blogimage = $_FILES['blog_image']['name'];
    $destination = "E:/xampp/htdocs/Baby Choice/img/".basename($_FILES['blog_image']['name']);
    move_uploaded_file($_FILES['blog_image']['tmp_name'],$destination);

    $sql = "INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_description`, `blog_author`, `blog_image`, `blog_time`, `blog_date`) 
    VALUES (NULL, '$blogtitle', '$blogdesc', '$blogauthor', '$blogimage', current_timestamp(), current_timestamp());";
    $result = mysqli_query($conn,$sql);

    header("Location: /Baby Choice/admin_blogs.php");
 }

 ?>