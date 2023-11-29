<?php
	include 'header.php';
	include 'admin_userfeedback_function.php';

	if(!isset($_COOKIE['admin'])){
	    header('location: login.php');
	}

	$adminDisplayFeedback = new feedback();
	$receive_store = $adminDisplayFeedback->display_data();
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminSeeUserFeedback</title>
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
	</style>
	<style type="text/css">
		.upload-field-backgorund{
			width: 100%;
			height: 35px;
			margin-top: 5px;
			margin-bottom: 2px;
			padding: 8px;
			border: none;
			border-radius: 5px;
			box-shadow: rgba(99, 99, 99, 0.4) 0 2px 8px 0;
			background: white;
			color: #333;
		}		
		.insertion-form-area{
			min-height: 500px;
			max-width: 100%;
			background: #2f3640;
			opacity: 0.91;
			margin: 30px;
			border-radius: 10px;
			box-shadow: rgba(83, 92, 104,1.0)  1px 1px 15px;
			display: flex;
			flex-direction: column;
		}
		.insertion-form-area h2{
			text-align: center;
			color: whitesmoke;
			font-family: Calibri heading;
			padding: 10px;
		}
		table{
			color: white;
			margin: 10px;
			border-radius: 6px;
		}
		table thead tr th{
			padding: 12px;
			font-size: 22px;
			font-family: calibri heading;
			background-color: #4D5656;
			opacity: 0.7;
		}
		table tbody tr td{
			text-align: center;
			padding: 8px;
		}
				
		table tbody tr td .edit{
			text-decoration: none;
			font-size: medium;
			background-color: yellowgreen;
			padding: 4px;
			color: white;
			border-radius: 4px;
		}
		table tbody tr td .delete{
			text-decoration: none;
			font-size: medium;
			background-color: red;
			padding: 4px;
			color: white;
			border-radius: 4px;
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

<!-- search field -->
<section class="section_view_Order">
	<div class="container_view_order">
		<h1>&mdash; Search Feedback &mdash;</h1>
		<input type="text" id="feedback_search" class="search_view_order" placeholder="Search here by ID or Name...">
	</div>
</section>

<div class="insertion-form-area">
	<h2>Feedback</h2>
	<hr><br>
	<table border="1">
		<thead>
			<tr> 
				<th>Feedback ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>E-mail</th>
				<th>Phone Number</th>
				<th>Message</th>
			</tr>
		</thead>

		<tbody id="feedback_output">
			<?php
				while ($single_data_after_break=mysqli_fetch_assoc($receive_store)) {
			?>
			<tr>
				<td> <?php echo $single_data_after_break['feedback_id']; ?> </td>
				<td> <?php echo $single_data_after_break['personFirstName']; ?> </td>
				<td> <?php echo $single_data_after_break['personLastName']; ?> </td>
				<td> <?php echo $single_data_after_break['personEmail']; ?> </td>
				<td> <?php echo $single_data_after_break['personPhone']; ?> </td>
				<td> <?php echo $single_data_after_break['personMessage']; ?> </td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


<?php include 'footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
<script src="../../public/js/admin_userfeedback_search.js"></script>
</body>
</html>