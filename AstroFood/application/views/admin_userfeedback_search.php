<?php
include ("../../config/config.php");

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}

$myvalue = $_POST['searchValue'];
$query = "SELECT * FROM feedback WHERE feedback_id like '%$myvalue%' or personFirstName like '%$myvalue%' or personLastName like '%$myvalue%' or personEmail like '%$myvalue%' or personPhone like '%$myvalue%' or personMessage like '%$myvalue%'";

$result = mysqli_query($conn, $query);

while ($single_data_after_break=mysqli_fetch_assoc($result)) { ?>
	<tr>
		<td> <?php echo $single_data_after_break['feedback_id']; ?> </td>
		<td> <?php echo $single_data_after_break['personFirstName']; ?> </td>
		<td> <?php echo $single_data_after_break['personLastName']; ?> </td>
		<td> <?php echo $single_data_after_break['personEmail']; ?> </td>
		<td> <?php echo $single_data_after_break['personPhone']; ?> </td>
		<td> <?php echo $single_data_after_break['personMessage']; ?> </td>
	</tr>

<?php } ?>