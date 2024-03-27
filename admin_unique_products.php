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
    <style>
        .prod {
        height: 100px;
        width: 100px;
    }
    </style>
    
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
                                        <h4>Unique Product List</h4>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="#" data-toggle="modal" data-target="#add_product_modal"
                                            class="btn btn-primary btn-sm" style="float: right;">Add Product</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Discount Price</th>
                                            <th>Quantity</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = "SELECT * FROM `products` WHERE `p_subcategory` = 6";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result)){
                                            $productid = $row['p_id'];
                                            $productname = $row['p_name'];
                                            $productimage = $row['p_image'];
                                            $productprice = $row['p_price'];
                                            $productdiscountprice = $row['p_discountprice'];
                                            $productcategory = $row['p_category'];
                                            $productdescription = $row['p_description'];
                                            $productquantity = $row['p_quantity'];
                                            $sql1 = "SELECT * FROM `categories` WHERE `c_id` = $productcategory";
                                            $result1 = mysqli_query($conn,$sql1);
                                            $row1 = mysqli_fetch_assoc($result1);
                                            $categoryname = $row1['c_name'];
                                            echo '<tr>
                                            <td>'.$productid.'</td>
                                            <td>'.$productname.'</td>
                                            <td><img src="img/'.$productimage.'" alt="" class="prod"></td>
                                            <td>'.$productprice.'</td>
                                            <td>'.$productdiscountprice.'</td>
                                            <td>'.$productquantity.'</td>
                                            <td>'.$categoryname.'</td>
                                            <td>'.$productdescription.'</td>
                                            <td><a href="updateProduct.php?productid='.$productid.'" class="fa fa-edit"
                                                    ></a> <a href="deleteProduct.php?productid='.$productid.'"
                                                    class="fa fa-trash" style="float: right;"></a></td>
                                        </tr>';
                                        } 
                                    ?>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>Huggies</td>
                                            <td>2.jpg</td>
                                            <td>1220</td>
                                            <td>1300</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>hey this is a sample product</td>
                                            <td><a href="updateProduct.php?productid='.$productid.'" class="fa fa-edit" 
                                                    ></a> <a href="#"
                                                    class="fa fa-trash" style="float: right;"></a></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            </main>
                        </div>
                    </div>
                    <!-- Add Product Modal start -->
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
                                    <form id="add-product-form" enctype="multipart/form-data" action="addProduct.php"
                                        method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input type="text" name="product_name" class="form-control"
                                                        placeholder="Enter Product Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                                    <input type="file" name="product_image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Price</label>
                                                    <input type="number" name="product_price" class="form-control"
                                                        placeholder="Enter Product Price">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Discount price</label>
                                                    <input type="number" name="product_dicountprice" class="form-control"
                                                        placeholder="Enter Discount Product Price">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Qty</label>
                                                    <input type="number" name="product_qty" class="form-control"
                                                        placeholder="Enter Product Quantity">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Category Name or id</label>
                                                    <select class="form-control category_list" name="category_id">
                                                        <option value="">Select Category</option>
                                                        <option value="">Clothing</option>
                                                        <option value="">Electronics</option>
                                                        <option value="">Shoes</option>
                                                        <option value="">Watches</option>
                                                        <option value="">Health & Beauty</option>
                                                        <option value="">Toys</option>
                                                        <option value="">Foods</option>
                                                        <option value="">Blankets</option>
                                                        <option value="">Baby Trollies</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <textarea class="form-control" name="product_desc"
                                                        placeholder="Enter product desc"></textarea>
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
                                                <button type="button" class="btn btn-primary add-product">Add
                                                    Product</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Product Modal end -->


                    <!-- Update Product Modal start -->
                    <div class="modal fade" id="update_product_modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="add-product-form" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input type="text" name="product_name" class="form-control"
                                                        placeholder="Enter Product Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                                                    <input type="file" name="product_image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Price</label>
                                                    <input type="number" name="product_price" class="form-control"
                                                        placeholder="Enter Product Price">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Discount price</label>
                                                    <input type="number" name="product_price" class="form-control"
                                                        placeholder="Enter Discount Product Price">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Qty</label>
                                                    <input type="number" name="product_qty" class="form-control"
                                                        placeholder="Enter Product Quantity">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Category Name or id</label>
                                                    <select class="form-control category_list" name="category_id">
                                                        <option value="">Select Category</option>
                                                        <option value="">Clothing</option>
                                                        <option value="">Electronics</option>
                                                        <option value="">Shoes</option>
                                                        <option value="">Watches</option>
                                                        <option value="">Health & Beauty</option>
                                                        <option value="">Toys</option>
                                                        <option value="">Foods</option>
                                                        <option value="">Blankets</option>
                                                        <option value="">Baby Trollies</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <textarea class="form-control" name="product_desc"
                                                        placeholder="Enter product desc"></textarea>
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