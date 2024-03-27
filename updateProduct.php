<?php
$error = "";
include 'db_connection.php';
$productid = $_GET['productid'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $productname = $_POST['product_name'];
    $productprice = $_POST['product_price'];
    $productdiscountprice = $_POST['product_discountprice'];
    $productquantity = $_POST['product_quantity'];
    $productcategoryid = $_POST['product_category_id'];
    $productdescription = $_POST['product_desc'];
    $productimage = $_FILES['product_image']['name'];
    $destination = "C:/xampp/htdocs/Baby Choice/img/" . basename($_FILES['product_image']['name']);
    move_uploaded_file($_FILES['product_image']['tmp_name'], $destination);

    $sql = "UPDATE `products` SET `p_name` = '$productname',`p_description` = '$productdescription', `p_price` = '$productprice',`p_image` = '$productimage',`p_category` = '$productcategoryid', `p_discountprice` = '$productdiscountprice' WHERE `products`.`p_id` = $productid;";
    $result = mysqli_query($conn, $sql);

    header("Location: /Baby Choice/manage_products.php");
}

?>

<?php
include 'header_admin.php';
include 'db_connection.php';
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
    <div class="container">
    <h4 class="text-center my-2 py-2">Update Product</h4>

        <form id="add-product-form" enctype="multipart/form-data" method="post"
            action="<?php echo $_SERVER['REQUEST_URI']; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                        <input type="file" name="product_image" class="form-control" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" name="product_price" class="form-control"
                            placeholder="Enter Product Price" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Discount price</label>
                        <input type="number" name="product_discountprice" class="form-control"
                            placeholder="Enter Discount Product Price" required>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Product Qty</label>
                        <input type="number" name="product_qty" class="form-control"
                            placeholder="Enter Product Quantity" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Category Name or id</label>
                        <select class="form-control category_list" name="product_category_id" required>
                            <option value="">Select Category</option>
                            <option value="1">Clothing</option>
                            <option value="2">Electronics</option>
                            <option value="3">Shoes</option>
                            <option value="4">Watches</option>
                            <option value="5">Health & Beauty</option>
                            <option value="6">Toys</option>
                            <option value="7">Foods</option>
                            <option value="8">Blankets</option>
                            <option value="9">Baby Trollies</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" name="product_desc" placeholder="Enter product desc" required></textarea>
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

    <?php
    include 'footer.php'
    ?>
</body>

</html>