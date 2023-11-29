<?php
include ("admin_function.php");
$taka = "/= taka"; 

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}


$objFoodList = new foodList();


if (isset($_POST['food-submit-btn'])) {
	$return_msg = $objFoodList->add_data($_POST);
}


$receive_store = $objFoodList->display_data();



if (isset($_GET['status'])) {
	if ($_GET['status']='delete') {
		$delete_id = $_GET['id'];
	    $return_del_msg = $objFoodList->delete_data($delete_id);
	}
}
?> 

	


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FoodList</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/admin_foodList.css">
	<link rel="icon" href="../../astro_favicon/favicon_io/favicon.ico">
	<style type="text/css">
		label.error{
			color: coral;
      		font-size: 14px;
      		padding: -3px;
      		text-shadow: 4px 4px 8px #FF0000;
      		display: block;
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


<!-- Insertion Form -->
<div class="form-container">
    <form action="#" method="POST" enctype="multipart/form-data" name="fd_list_validate" id="fd_list_validate">
        <h2 class="login-form-title"> Add Food </h2>

        <fieldset>
            <div>
                <div>
                    <label class="form-label" for="foodname">Food Name</label>
                    <input class="form-input-box" id="foodname" type="text"
                        name="foodname" placeholder="Enter Food Name" required>
                </div>                                                       
                <div>
                    <label class="form-label" for="foodprice">Price</label>
                    <input class="form-input-box" id="foodprice" type="number" name="foodprice"
                               placeholder="Estimate Price" required>
                </div>
                <div>
                    <label class="form-label" for="foodimg">Upload Food Image</label>
                    <input class="upload-field-backgorund" id="foodimg" name="foodimg" type="file">
                </div>
            </div>
        </fieldset>

            <div class="bottom">
                <div class="center-text">
                	<br><br>
                    <p id="prompt-message">
                    	<?php
                    		if (isset($return_msg)) {
                    			echo $return_msg;
                    		}
                    		if (isset($return_del_msg)) {
                    			echo $return_del_msg;
                    		}
                    	?>
                    </p>
                </div>
                <div class="center">
                	<a class="button" href="admin_foodList.php" style="text-decoration: none;">Refresh</a>
                    <input id="form-submit" type="submit" class="button" value="Add Food" name="food-submit-btn">
                </div>
            </div>
    </form>
</div>


<!-- search field -->
<section class="section_view_Order">
	<div class="container_view_order">
		<h1>&mdash; Search Food &mdash;</h1>
		<input type="text" id="admin_food_search" class="search_view_order" placeholder="Search food by name here...">
	</div>
</section>


<!-- Insertion Elements -->
<div class="insertion-form-area">
	<h2>Food List</h2>
	<hr><br>
	<table border="1">
		<thead>
			<tr>
				<th>Food ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody id="foodzZz_search">
			<?php
				while ($single_data_after_break=mysqli_fetch_assoc($receive_store)) {
			?>
			<tr>
				<td> <?php echo $single_data_after_break['food_id']; ?> </td>
				<td> <?php echo $single_data_after_break['foodname']; ?> </td>
				<td> <?php echo $single_data_after_break['foodprice'].$taka; ?> </td>
				<td> <img style="height: 110px; width: 120px; border-radius: 5px;" src="upload/<?php echo $single_data_after_break['foodimg']; ?>"> </td>
				<td>
					<a class="edit" href="admin_foodListEdit.php?status=edit&&id=<?php echo $single_data_after_break['food_id'];?>">Edit</a>
					<a class="delete" href="?status=delete&&id=<?php echo $single_data_after_break['food_id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include 'footer.php'; ?>

<!-- These links for the form validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"> </script>
<script type="text/javascript" src="../../public/js/admin_foodList_validate.js"></script>

<!-- These links for the search operation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" ></script>
<script src="../../public/js/admin_foodList_search.js"></script>

</body>
</html>