<?php
	require_once '../../config/config.php';

	
	$admin_username_err = $admin_password_err = '';
	$usernameRec = $passwordRec = '';

	$admin_username = "admin";
	$admin_password = "admin2023";

	if(isset($_POST['login-btn']))
	{
		$usernameRec = $_POST['usernameOrEmail'];
		$passwordRec = $_POST['password'];

		if(empty($usernameRec)){
			$admin_username_err = "Required Field";
		}else{
			if($admin_username !== $usernameRec) {
				$admin_username_err = "Invalid Username";
			}
		}
		if(empty($passwordRec)){
			$admin_password_err = "Required Field";
		}else{
			if ($admin_password !== $passwordRec) {
				$admin_password_err = "Wrong Password";
			}
		}
		if(($admin_username === $usernameRec) && ($admin_password === $passwordRec)){
			setcookie('admin', $usernameRec, time() + (86400 * 30), "/");	
			header('location: adminProfile.php');
		}


		$matchQuery = "SELECT * FROM user WHERE username='$usernameRec' AND password='$passwordRec'";
		$runMatchQuery = mysqli_query($conn, $matchQuery);
		$checkCount = mysqli_num_rows($runMatchQuery);

		if ($runMatchQuery==true) {
			if ($checkCount === 1) {
				setcookie('user', $usernameRec, time() + (86400 * 30), "/");	
				header('location: foodIteams.php');
			}
		}
	}

	
?>