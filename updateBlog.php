<?php
include 'db_connection.php';
$error = "";
$blogid = $_GET['blogid'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $blogname = $_POST['blog_name'];
    $blogtitle = $_POST['blog_title'];
    $blogdesc = $_POST['blog_description'];
    $blogauthor = $_POST['blog_author'];
    $blogimage = $_FILES['blog_image']['name'];
    $destination = "C:/xampp/htdocs/Baby Choice/img/".basename($_FILES['blog_image']['name']);
    move_uploaded_file($_FILES['blog_image']['tmp_name'],$destination);
    
    $sql = "UPDATE `blogs` SET `blog_title` = '$blogtitle', `blog_description` = '$blogdesc', `blog_author` = '$blogauthor', `blog_image` = '$blogimage' 
    WHERE `blogs`.`blog_id` = $blogid;";
   $result = mysqli_query($conn,$sql);
   
   header("Location: /Baby Choice/admin_blogs.php");
   include 'header_admin.php';
}
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
<style>
    .blog{
        height: 100px;
        width: 100px;
    }
</style>

<body>
    <section id="center" class="center_register">
        <div class="container">
            <h4>Update Blog</h4>
                    <!-- Update Blogs Modal start -->
                   
                                    <form id="add-product-form" enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                                        <div class="row">
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <label>Blog Image <small>(format: jpg, jpeg, png)</small></label>
                                                    <input type="file" name="blog_image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Posted by</label>
                                                    <input type="text" name="blog_author" class="form-control"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <textarea class="form-control" name="blog_title"
                                                        placeholder="Title"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Paragraph</label>
                                                    <textarea class="form-control" name="blog_description"
                                                        placeholder="Paragraph"></textarea>
                                                </div>
                                            </div>
                                            <!-- <div class="col-12">
        			<div class="form-group">
		        		<label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
		        	</div>
        		</div> -->

                                            <input type="hidden" name="update_product" value="1">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary add-product">Update
                                                    Product</button>
                                            </div>
                                        </div>

                                    </form>
                                
                    </div>
                    <!-- Update Product Modal end -->
    </section>

    <?php
include 'footer.php'
?>
</body>

</html>