<?php
include ("admin_userList_function.php");

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}

$objUserList = new userlist();
$receive_store = $objUserList->display_data();

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../public/css/admin_userList.css">
	<link rel="icon" href="../../astro_favicon/favicon_io/favicon.ico">
	<title>Admin_UserList</title>
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
<?php include 'header.php'; ?>

<!-- search field -->
<section class="section_view_Order">
	<div class="container_view_order">
		<h1>&mdash; Search User &mdash;</h1>
		<input type="text" class="search_view_order" id="search_userList" placeholder="Search here...">
	</div>
</section>

<!-- Insertion Elements -->
<div class="insertion-form-area">
	<h2>User List</h2>
	<hr><br>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>E-mail</th>
				<th>Password</th>
				<th>Confirm Password</th>
				<th>Phone</th>
				<th>Gender</th>
			</tr>
		</thead>

		<tbody id="output_userlist">
			<?php
				while ($single_data_after_break=mysqli_fetch_assoc($receive_store)) {
			?>
			<tr>
				<td> <?php echo $single_data_after_break['user_id']; ?> </td>
				<td> <?php echo $single_data_after_break['username']; ?> </td>
				<td> <?php echo $single_data_after_break['email']; ?> </td>
				<td> <?php echo $single_data_after_break['password']; ?> </td>
				<td> <?php echo $single_data_after_break['cPassword']; ?> </td>
				<td> <?php echo $single_data_after_break['phone']; ?> </td>
				<td> <?php echo $single_data_after_break['gender']; ?> </td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>

<?php include 'footer.php'; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
    <script src="../../public/js/admin_userList_search.js"></script>
</body>
</html>