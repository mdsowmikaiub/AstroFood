<?php
	require_once '../../config/config.php';

	$getMsg = "";
	$personFirstName=$personLastName=$personEmail=$personPhone=$personMsg="";
	$personFirstNameErr=$personLastNameErr=$personEmailErr=$personPhoneErr=$personMsgErr="";
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		// retrieve form data, store in variable
		$personFirstName = $_POST["personFirstName"];
		$personLastName = $_POST["personLastName"];
		$personEmail = $_POST["personEmail"];
		$personPhone = $_POST["personPhone"];
		$personMsg = $_POST["personMsg"];

		// person first name validation
		if (empty($personFirstName)) {
			$personFirstNameErr = "* Firstname is required";
		}else{
			$personFirstName = test_input($_POST['personFirstName']);
	      if(!preg_match("/^[A-Za-z\s.]+$/", $personFirstName)){
	        $personFirstNameErr = "* Only letters and white spaces allowed";
	      }
		}

		// person last name validation
		if (empty($personLastName)) {
			$personLastNameErr = "* Lastname is required";
		}else{
			$personLastName = test_input($_POST['personLastName']);
	      if(!preg_match("/^[A-Za-z\s.]+$/", $personLastName)){
	        $personLastNameErr = "* Only letters and white spaces allowed";
	      }
		}

		//e-mail validation
	    if (empty($personEmail)) {
	      $personEmailErr = "* Email is required";
	    } elseif (!filter_var($personEmail, FILTER_VALIDATE_EMAIL)) {
	      $personEmailErr = "* Invalid email format";
	    }

	    //phone number validation
	    if(empty($personPhone)) {
	      $personPhoneErr = "* Phone number is required";
	    }
	    elseif(strlen($personPhone) > 11) {
	      $personPhoneErr =  "* Phone number contains maximum 11 digit";
	    }
	    elseif(strlen($personPhone) < 11) {
	      $personPhoneErr =  "* Phone number contains minimum 11 digit";
	    }

	    //person message
	    if(empty($personMsg)){
	    	$personMsgErr = "* This field is required";
	    }
	    elseif(strlen($personMsg) < 10) {
	    	$personMsgErr = "* Message length will be minimum 10 character";
	    }
	    elseif(strlen($personMsg) > 150) {
	    	$personMsgErr = "* Message length won't be more than 150 character";
	    }


		// Adding feedback Info in DB by checking empty fields
	    if (!empty($personFirstName) && !empty($personLastName) && !empty($personEmail) && !empty($personPhone) && !empty($personMsg))
	    {
			$query = "INSERT INTO feedback(personFirstName,personLastName,personEmail, personPhone,personMessage) VALUES('$personFirstName','$personLastName','$personEmail','$personPhone','$personMsg')";

			if ($conn->query($query) == TRUE)
			{
				$getMsg = "Message has been send successfully";
			}
	    }    
	}

	function test_input($data){
		    $data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
	}
?>