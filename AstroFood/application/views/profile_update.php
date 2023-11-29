<?php
require_once '../../config/config.php';
include 'header.php';


if(!isset($_COOKIE['user'])){
    header('location: login.php');
}

// Without OOP - Display Data By ID
	if (isset($_GET['status']))
	{
		if ($_GET['status']='edit')
		{
			$id = $_GET['id'];

			$query = "SELECT * FROM user WHERE user_id=$id";

				if (mysqli_query($conn, $query))
				{
					$return_data = mysqli_query($conn, $query);
					$rec_fetch_data = mysqli_fetch_assoc($return_data);
				}
		}
	}


// Without OOP - Update
	if (isset($_POST['user_update_btn']))
	{
		$update_username = $_POST['updt_username'];
		$update_email = $_POST['updt_email'];
		$update_password = $_POST['updt_password'];
		$update_cPassword = $_POST['updt_cPassword'];
		$update_phone = $_POST['updt_phone'];
		$update_gender = $_POST['updt_gender'];
		$hidden_userid = $_POST['user_hide_id'];

		$query = "UPDATE user SET username='$update_username', email='$update_email', password='$update_password', cPassword='$update_cPassword', phone=$update_phone, gender='$update_gender'  WHERE user_id=$hidden_userid ";

			if (mysqli_query($conn, $query))
			{
				$return_updated_msg = "Updated Successfully";
			}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile_Update</title>
    <style type="text/css">
        .show-password {
            font-size: 14px;
            position: absolute;
            right: 0;
            margin-top: 3px;
            padding-right: 60px;
            cursor: pointer;
            color: #292828;
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

<div class="form-container">
        <form id="register-form" method="POST">
            <h2 class="login-form-title">User Information Update</h2>

            <fieldset>
                <div>
                    <div>
                        <label class="form-label" for="username">Username</label>
                        <input autofocus class="form-input-box" id="username"
                               name="updt_username" placeholder="Enter your username here" type="text" value="<?php echo $rec_fetch_data['username'];?>">
                    </div>

                    <div>
                        <label class="form-label" for="email">Email</label>
                        <input class="form-input-box" id="email" name="updt_email"
                               placeholder="Enter your email here" type="text" value="<?php echo $rec_fetch_data['email'];?>">
                    </div>

                    <!-- password -->
                    <div>
                        <label class="form-label" for="password">Password</label>
                        <div class="show-password">                           
                            <img id="eyeicon" src="../../public/img/eye_close.png">         
                        </div>
                        <input autocomplete="off" class="form-input-box" id="password" name="updt_password" placeholder="Enter your password here" type="password" value="<?php echo $rec_fetch_data['password'];?>">
                    </div>

                    <!-- confirm password -->
                    <div>
                        <label class="form-label" for="cPassword">Confirm Password</label>
                        <div class="show-password">                           
                            <img id="eyeicon2" src="../../public/img/eye_close.png">         
                        </div>
                        <input autocomplete="off" class="form-input-box" id="cPassword" name="updt_cPassword" placeholder="Rewrite the password here" type="password" value="<?php echo $rec_fetch_data['cPassword'];?>">
                    </div>

                    <div>
                        <label class="form-label" for="phone">Phone Number</label>
                        <input class="form-input-box" id="phone" name="updt_phone"
                               placeholder="Enter your phone number here" type="text" value="<?php echo $rec_fetch_data['phone'];?>">
                    </div>


                    <div>
                        <label>Gender</label>
                        <div class="radio-button" id="radio-button-box">
                            <input id="male" name="updt_gender" type="radio" value="Male" value="<?php echo $rec_fetch_data['gender'];?>">
                            <label class="radio-label" for="male" style="color:black;">Male</label>
                            
                            <!-- label for making a gap between male & female -->
                            <label style="color:white;"> no </label>
                            <!-- label for making a gap between male & female -->

                            <input id="female" name="updt_gender" type="radio" value="Female" value="<?php echo $rec_fetch_data['gender'];?>">
                            <label class="radio-label" for="female" style="color:black;">Female</label>
                        </div>
                    </div>
                    <div>
                        <input name="user_hide_id" value="<?php echo $rec_fetch_data['user_id'];?>" type="hidden">
                    </div>
                </div>
            </fieldset>

            <div class="bottom">
            	<div class="center-text">
                    <p id="prompt-message">
                    	<?php
                    		if (isset($return_updated_msg)) {
                    			echo $return_updated_msg;
                    		}
                    	?>
                    </p>
            	</div>
                <div class="center">
                	 <a class="button" href="profile.php" style="text-decoration: none;">back</a>
                    <input id="form-submit" type="submit" class="button" value="Update" name="user_update_btn">
                </div>
            </div>
        </form>
    </div>

<?php include 'footer.php' ?>

    <script type="text/javascript" src="../../public/js/password_ShowHide.js"></script>
</body>
</html>