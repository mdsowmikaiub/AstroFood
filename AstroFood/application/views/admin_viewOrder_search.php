<?php
include ("../../config/config.php");
$taka = "/= taka";

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}

$myvalue = $_POST['searchValue'];
$query = "SELECT * FROM food_order WHERE order_id like '%$myvalue%' or food_id like '%$myvalue%' or foodname like '%$myvalue%' or foodprice like '%$myvalue%' or customer_name like '%$myvalue%' or customer_phone like '%$myvalue%' or order_date_time like '%$myvalue%' or payment_option like '%$myvalue%' or customer_address like '%$myvalue%' ";

$result = mysqli_query($conn, $query);

while ($single_data_after_break=mysqli_fetch_assoc($result)) { ?>
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