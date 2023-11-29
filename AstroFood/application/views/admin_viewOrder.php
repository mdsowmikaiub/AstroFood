<?php 
if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}
include ("admin_viewOrder_function.php");
$taka = "/= taka"; 

$obj_view_order = new viewOrder();
$store_order_data = $obj_view_order->display_data();

?>



<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
 	<link rel="stylesheet" type="text/css" href="../../public/css/admin_viewOrder.css">
 	<link rel="icon" href="../../astro_favicon/favicon_io/favicon.ico">
 	<title>Admin-View-Order</title>
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
    <style type="text/css">
    	.section_view_Order{
    		min-height: 20vh;
    		width: 100%;
    		margin-top: 20px;
    	}
    	.container_view_order{
    		display: flex;
    		width: 95%;
    		height: 20vh;
    		margin: 0 auto;
    		flex-direction: column;
    		flex-wrap: wrap;
    		background: linear-gradient(rgba(231, 76, 60, 0.75),rgba(255, 190, 118, 0.7));
    		padding: 5px;
    		border-radius: 6px;
    	}
    	.container_view_order h1{
    		text-align: center;
    		padding: 4px;
    		font-size: 50px;
    		font-weight: bold;
    		color: rgba(255, 190, 118,1.0);
    		font-family: Agency FB;
    	}
    	.search_view_order{
    		padding: 10px;
    		outline: 0;
    		border: 0;
    		border-radius: 4px;
    		font-size: medium;
    		font-style: Tahoma FB;
    		width: 80%;
    		margin: 0 auto;
    	}
    </style>
</head>

<body>
<?php include 'header.php' ?>


<!-- search field -->
<section class="section_view_Order">
	<div class="container_view_order">
		<h1>&mdash; Search Food Order &mdash;</h1>
		<input type="text" id="viewOrder_search" class="search_view_order" placeholder="Search order on Date-Time by (YYYY-MM-DD) this format...">
	</div>
</section>

<!-- Insertion Order Elements -->
<div class="insertion-form-area">
	<h2>Food Order</h2>
	<hr><br>
	<table border="1">
		<thead>
			<tr> 
				<th>Order ID</th>
				<th>Food ID</th>
				<th>Food Name</th>
				<th>Food Price</th>
				<th>Customer Name</th>
				<th>Customer Phone</th>
				<th>Order Date & Time</th>
				<th>Pay Option</th>
				<th>Customer Address</th>
			</tr>
		</thead>

		<tbody id="output_viewOrder">
			<?php
				while ($single_data_after_break=mysqli_fetch_assoc($store_order_data)) {
			?>
			<tr>
				<td> <?php echo $single_data_after_break['order_id']; ?> </td>
				<td> <?php echo $single_data_after_break['food_id']; ?> </td>
				<td> <?php echo $single_data_after_break['foodname']; ?> </td>
				<td> <?php echo $single_data_after_break['foodprice'].$taka; ?> </td>
				<td> <?php echo $single_data_after_break['customer_name']; ?> </td>
				<td> <?php echo $single_data_after_break['customer_phone']; ?> </td>
				<td> <?php echo $single_data_after_break['order_date_time']; ?> </td>
				<td> <?php echo $single_data_after_break['payment_option']; ?> </td>
				<td> <?php echo $single_data_after_break['customer_address']; ?> </td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


<?php include 'footer.php' ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
<script src="../../public/js/admin_viewOrder_search.js"></script>
 
</body>
</html>