<?php
	require_once '../../config/config.php';
	include 'header.php';

	if(!isset($_COOKIE['user'])){
    header('location: login.php');
	}

	$current_user = $_COOKIE['user'];
	$sql = "SELECT * FROM user WHERE username = '$current_user'";

	$gotResults = mysqli_query($conn, $sql);

	if ($gotResults) 
	{
		if (mysqli_num_rows($gotResults) > 0) 
		{
			while ($row = mysqli_fetch_assoc($gotResults))
			{
				// print_r($row);
				?>
				<div class="insertion-form-area">
					<table border="1">
						<tr style="height: 50px; background-color: #5D6D7E;font-family: Agency; font-size: 24px;">
							<th colspan="2">User Information</th>
						</tr>

						<tr>
							<td> User ID </td>
							<td>  <?php echo $row['user_id']; ?>  </td>
						</tr>
						<tr>
							<td>Username</td>
							<td><?php echo $row['username']; ?></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td><?php echo $row['email']; ?></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><?php echo $row['password']; ?></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
							<td><?php echo $row['cPassword']; ?></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td><?php echo $row['phone']; ?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $row['gender']; ?></td>
						</tr>
					</table>

					<div class="edit-area">
						<a class="edit" href="profile_update.php?status=edit&&id=<?php echo $row['user_id']; ?>">Update Profile</a>
					</div>

				</div>
				<?php
			}
		}
	}
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UserProfile</title>
	<style>
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
			padding: 3%;
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

		.edit-area{
			margin: 20px auto 0 auto;
		}
		.edit{
			text-decoration: none;
			font-size: medium;
			background-color: yellowgreen;
			padding: 10px;
			color: white;
			border-radius: 5px;
			text-align: center;
		}
		.edit:hover{
			background-color: #F1C40F;
			color: whitesmoke;
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
	

	
	<?php include 'footer.php' ?>
</body>
</html>