<?php
include ("../../config/config.php");

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}

$myvalue = $_POST['searchValue'];
$query = "SELECT * FROM user WHERE user_id like '%$myvalue%' or username like '%$myvalue%' or email like '%$myvalue%' or password like '%$myvalue%' or cPassword like '%$myvalue%' or phone like '%$myvalue%' or gender like '%$myvalue%'";

$result = mysqli_query($conn, $query);

while ($single_data_after_break=mysqli_fetch_assoc($result)) { ?>
	<tr>
		<td> <?php echo $single_data_after_break['user_id']; ?> </td>
		<td> <?php echo $single_data_after_break['username']; ?> </td>
		<td> <?php echo $single_data_after_break['email']; ?> </td>
		<td> <?php echo $single_data_after_break['password']; ?> </td>
		<td> <?php echo $single_data_after_break['cPassword']; ?> </td>
		<td> <?php echo $single_data_after_break['phone']; ?> </td>
		<td> <?php echo $single_data_after_break['gender']; ?> </td>
	</tr>

<?php } ?>