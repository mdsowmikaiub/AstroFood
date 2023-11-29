<?php
include 'header.php';

if (!isset($_COOKIE['user'])) {
	header("location:login.php");
}
$taka = "/= taka"; 
include("foodIteams_function.php");

// blank variables
$error_msg = "";

$objHelpPay = new foodIteams();

// status checking for order.....from foodIteams.php page
if (isset($_GET['status'])) {
	if ($_GET['status']='order') {
		$id = $_GET['id'];
		$rec_verifying_order_id = $objHelpPay->display_data_by_id($id);
	}
}

//order confirmation.....adding order data in DB
if (isset($_POST['order_btn'])) {
	$returned_order_msg = $objHelpPay->add_order_data($_POST);
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/payment.css">
	<title>Payment</title>
	<style type="text/css">
		label.error{
			color: coral;
      		font-size: 14px;
      		padding: -3px;
      		text-shadow: 4px 4px 8px #FF0000;
      		display: block;
		}
		/* ... Problematic Zone ... */
		label #cashOnDel-error{
			margin-top: 10px;
			margin-left: -88px;
		}
		#address_area{
			margin-top: 15px;
		}
		/* ... Problematic Zone ... */
	</style>
	<style type="text/css">
        ::-webkit-scrollbar{
            width: 8px;
        }
        ::-webkit-scrollbar-track{
            background: #c7ecee;
        }
        ::-webkit-scrollbar-thumb{
            background: linear-gradient(#0a3d62,#60a3bc,#0c2461);
            border-radius: 10px;
        }
    </style>
</head>
<body>



<!-- Food Order Form -->
<div class="form-container">  
        <form id="payment-form" method="POST">
            <span class="reg-success"> </span>          
            <h2 class="login-form-title">Food Order</h2>

	    <fieldset>
	        <div>

	        	<!-- Food ID, Name, Price Imported -->
	        	<table class="tab-area" border="1">
	        		<tr>
	        			<td>Food ID</td>
	        			<td><input type="text" name="thefoodid" value="<?php echo $rec_verifying_order_id['food_id'];?>" readonly></td>
	        		</tr>
	        		<tr>
	        			<td>Food Name</td>
	        			<td><input type="text" name="thefoodname" value="<?php echo $rec_verifying_order_id['foodname'];?>" readonly></td>
	        		</tr>
	        		<tr>
	        			<td>Food Price</td>
	        			<td><input type="number" name="thefoodprice" value="<?php echo $rec_verifying_order_id['foodprice'];?>" readonly></td>
	        		</tr>
	        	</table>


	            <!-- Customer Name -->
	            <div>
	                <label>Customer Name</label>
	                <input style="font-weight:bold; font-family: calibri heading; font-size: 15px;" autofocus class="form-input-box" name="customer_name" type="text" value="<?php echo $_COOKIE['user'] ?>" readonly>
	            </div>

				<!-- Phone Number -->
	            <div>
	                <label>Phone Number</label>
	                <input autofocus class="form-input-box" type="number" name="customer_phone" placeholder="Enter a valid number here" required>
	            </div>

	            <!-- Order Date & Time -->
	            <div>
	                <label>Select Date & Time</label>
	                <input autofocus class="form-input-box" type="datetime-local" name="order_date_time" required>
	            </div>
	                
	            <!-- Payment Option -->
	            <div>
	                <label>Payment Option</label>
	                <div class="radio-button" id="radio-button-box"> 
	                <label class="radio-label" for="cash_on_del" style="color:black;">
	                	Cash On Delivery &mdash; <input id="cash_on_del" name="cashOnDel" type="radio" value="CashOnDel" placeholder="abc" required>
	                </label>
	                </div>
	            </div>

	            <!-- Customer Current Address -->
	            <div id="address_area">
		        	<label>Current Address</label>
		        	<textarea style="resize: none;" autofocus class="form-input-box" id="address_field" name="customer_address" placeholder="Write your address here..." required></textarea>
	    		</div>             
	        </div>
	    </fieldset>

	    	
	    <div class="bottom">
	        <div class="center-text">
	        	<br><br>
	            <p id="order-prompt-message">
	            	<?php
                    	if (isset($returned_order_msg)) {
                    		echo $returned_order_msg;
                    	}
                    ?>
	            </p>
	        </div>
	        <div class="center">
	            <input type="submit" class="button" value="Confirm Order" name="order_btn">     
	        </div>
	    </div>
    </form>
</div>

<?php include 'footer.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"> </script>
<script type="text/javascript" src="../../public/js/payment_validate.js"></script>

</body>
</html>