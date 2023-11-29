<?php
include ("admin_function.php");

if(!isset($_COOKIE['admin'])){
    header('location: login.php');
}

$objFoodList = new foodList();

// status checking for edit
if (isset($_GET['status'])) {
	if ($_GET['status']='edit') {
		$id = $_GET['id'];
		$rec_query_verifying_id = $objFoodList->display_data_by_id($id);
	}
}

if (isset($_POST['food-update-btn'])) {
	$return_updated_msg = $objFoodList->update_data($_POST);
	
}
?> 

	


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../public/css/admin_foodListEdit.css">
    <link rel="icon" href="../../astro_favicon/favicon_io/favicon.ico">
	<title>FoodListEdit</title>
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
<?php include 'header.php'; ?>


<!-- Insertion Form -->
<div class="form-container">
    <form action="#" method="POST" enctype="multipart/form-data">
        <h2 class="login-form-title"> Update Food </h2>

        <fieldset>
            <div>
                <div>
                    <label class="form-label" for="ufoodname">Update Name</label>
                    <input autofocus class="form-input-box" id="ufoodname"
                        name="u_foodname" value="<?php echo $rec_query_verifying_id['foodname'];?>" type="text">
                </div>                                                       
                <div>
                    <label class="form-label" for="ufoodprice">Update Price</label>
                    <input class="form-input-box" id="ufoodprice" name="u_foodprice"
                               value="<?php echo $rec_query_verifying_id['foodprice'];?>" type="number">
                </div>
                <div>
                    <label class="form-label" for="ufoodimg">Update Image</label>
                    <input class="upload-field-backgorund" id="ufoodimg" name="u_foodimg" type="file">
                </div>
                <div>
                	<input name="food_hide_id" value="<?php echo $rec_query_verifying_id['food_id'];?>" type="hidden">
                </div>
            </div>
        </fieldset>

            <div class="bottom">
                <div class="center-text">
                	<br><br>
                    <p id="prompt-message">
                    	<?php
                    		if (isset($return_updated_msg)) {
                    			echo $return_updated_msg;
                    		}
                    	?>
                    </p>
                </div>
                <div class="center">
                	<a class="button" href="admin_foodList.php" style="text-decoration: none;">back</a>
                    <input id="form-submit" type="submit" class="button" value="update" name="food-update-btn">
                </div>
            </div>
    </form>
</div>


<?php include 'footer.php'; ?>
</body>
</html>