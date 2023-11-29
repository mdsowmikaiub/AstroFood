<?php
	if (isset($_COOKIE['admin']))
	{
		unset($_COOKIE['admin']);
		setcookie('admin', null, -1, '/');
	}
	else{
		if(isset($_COOKIE['user']))
		{
			unset($_COOKIE['user']);
			setcookie('user', null, -1, '/');
		}
	}

	

	session_start();
    session_unset();
    session_destroy();
	
	header('location: ../views/login.php');
?>