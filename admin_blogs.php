<?php
include 'db_connection.php';
include 'header_admin.php';
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
            <div class="row">
                <div class="register_1 clearfix">
                    <div class="register_1l clearfix">
                        <div class="register_1li clearfix">
                            <div class="center_3r1 clearfix">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4>Blogs</h4>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="#" data-toggle="modal" data-target="#add_product_modal"
                                            class="btn btn-primary btn-sm" style="float: right;">Add Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Blog id</th>
                                            <th>Image</th>
                                            <th>Posted by</th>
                                            <th>Date and Time</th>
                                            <th>title</th>
                                            <th>Paragraph</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = "SELECT * FROM `blogs`";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result)){
                                            $blogid = $row['blog_id'];
                                            $blogtitle = $row['blog_title'];
                                            $blogdesc = $row['blog_description'];
                                            $blogimage = $row['blog_image'];
                                            $blogdatetime = $row['blog_date'];
                                            $blogauthor = $row['blog_author'];

                                            echo '<tr>
                                            <td>'.$blogid.'</td>
                                            <td><img src="img/'.$blogimage.'" alt="" class="blog"></td>
                                            <td>'.$blogauthor.'</td>
                                            <td>'.$blogdatetime.'</td>
                                            <td>'.$blogtitle.'</td>
                                            <td>'.$blogdesc.'</td>
                                            <td><a href="updateBlog.php?blogid='.$blogid.'" class="fa fa-edit"></a> <a href="deleteBlog.php?blogid='.$blogid.'"
                                                    class="fa fa-trash" style="float: right;"></a></td>
                                        </tr>';
                                        }
                                    ?>
                                    
                                        
                                    </tbody>
                                </table>
                            </div>
                            </main>
                        </div>
                    </div>
                    <!-- Add Blog Modal start -->
                    <div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-product-form" enctype="multipart/form-data" action="addBlog.php" method="post">
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
                                                    <input type="text" class="form-control"
                                                        placeholder="Name" name="blog_author">
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
                                                    <label>Description</label>
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

                                            <input type="hidden" name="add_product" value="1">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary add-product">Add
                                                    Blog</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Blog Modal end -->


                    <!-- Update Blogs Modal start -->
                    <div class="modal fade" id="update_product_modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-product-form" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <label>Blog Image <small>(format: jpg, jpeg, png)</small></label>
                                                    <input type="file" name="product_image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Posted by</label>
                                                    <input type="number" name="posted by" class="form-control"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="number" name="date" class="form-control"
                                                        placeholder="Date">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Time</label>
                                                    <input type="number" name="Time" class="form-control"
                                                        placeholder="Time">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <textarea class="form-control" name="title"
                                                        placeholder="Title"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Paragraph</label>
                                                    <textarea class="form-control" name="paragraph"
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
                                                <button type="button" class="btn btn-primary add-product">Update
                                                    Product</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Update Product Modal end -->
    </section>

    <?php
include 'footer.php'
?>
</body>

</html>