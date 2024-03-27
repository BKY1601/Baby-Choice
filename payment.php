<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
include 'db_connection.php';
include 'header.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
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

<head>
  <title>Merchant Check Out Page</title>
  <meta name="GENERATOR" content="Evrsoft First Page">
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
                    <h4>Merchant Check Out Page</h4>
                  </div>
                </div>
              </div>
                    <!-- <pre>
	</pre> -->
                    <form method="post" action="pgRedirect.php">
                    <div class="table-responsive">
                                <table class="table table-striped table-sm">
                        <tbody>
                          <tr>
                            <th>S.No</th>
                            <th>Label</th>
                            <th>Value</th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><label>ORDER_ID::*</label></td>
                            <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>" readonly>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><label>CUSTID ::*</label></td>
                            <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" readonly></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                            <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td><label>Channel ::*</label></td>
                            <td><input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td><label>txnAmount*</label></td>
                            <td><input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $_SESSION['cartBill'] ?>" readonly>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td><input value="CheckOut" type="submit" onclick=""></td>
                          </tr>
                        </tbody>
                      </table>
                      * imp : Undeditable Mandatory Fields
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
       
  </section>
</body>

</html>
<?php
include 'footer.php';
?>