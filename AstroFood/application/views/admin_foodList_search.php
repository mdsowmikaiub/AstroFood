<?php
include ("../../config/config.php");
$taka = "/= taka"; 

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}

$myvalue = $_POST['searchValue'];
$query = "SELECT * FROM food WHERE food_id like '%$myvalue%' or foodname like '%$myvalue%' or foodprice like '%$myvalue%' or foodimg like '%$myvalue%'";

$result = mysqli_query($conn, $query);

while ($single_data_after_break=mysqli_fetch_assoc($result)) { ?>
	<tr>
		<td> <?php echo $single_data_after_break['food_id']; ?> </td>
		<td> <?php echo $single_data_after_break['foodname']; ?> </td>
		<td> <?php echo $single_data_after_break['foodprice'].$taka; ?> </td>
		<td> <img style="height: 110px; width: 120px; border-radius: 5px;" src="upload/<?php echo $single_data_after_break['foodimg']; ?>"> </td>

		<!--Note: This is <td></td>the portion below not the part of the database. So, nothing to add/write in the query portion. Hense, everything of the <tbody></tbody> portion will be visible so this part will be automatically showing... -->
		<td>
			<a class="edit" href="admin_foodListEdit.php?status=edit&&id=<?php echo $single_data_after_break['food_id'];?>">Edit</a>
			<a class="delete" href="?status=delete&&id=<?php echo $single_data_after_break['food_id']; ?>">Delete</a>
		</td>
	</tr>

<?php } ?>