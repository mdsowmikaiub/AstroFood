<?php
  require_once '../../config/config.php';

  $username = $email = $password = $cPassword = $phone = $gender = "";
  $usernameErr = $emailErr = $passwordErr = $cPasswordErr = $phoneErr = $genderErr = "";
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Retrieve form data, store in variable
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cPassword = $_POST["cPassword"];
    $phone = $_POST["phone"];



    //username validation
    if (empty($username)) {
      $usernameErr = "Username is required";
    } else {
      $username = test_input($_POST['username']);
      if(!preg_match("/^[A-Za-z\s.]+$/", $username)){
        $usernameErr = "Only letters and white spaces allowed";
      }
    }
    //e-mail validation
    if (empty($email)) {
      $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
    //password & confirm password matching and validation
    if (empty($password)) {
      $passwordErr = "Password is required";
    } elseif (strlen($password) < 6) {
      $passwordErr = "Password must be at least 6 characters";
    }
    if (empty($cPassword)) {
      $cPasswordErr = "Please confirm your password";
    } elseif ($password !== $cPassword) {
      $cPasswordErr = "Passwords do not match";
    }

    //phone number validation
    if(empty($phone)) {
      $phoneErr = "Phone number is required";
    }
    elseif(preg_match('/^[0-9]{10}+$/', $phone)){

    }
    elseif(strlen($phone) > 11) {
      $phoneErr =  'Please enter a valid 10-digit phone number.';
    }
    //gender validation
    if (empty($_POST['gender'])) {
      $genderErr = "Please select your gender";
    }else{
      $gender = test_input($_POST['gender']);
    }


    //User Registration - Insertion in Database
    if(!empty($username) && !empty($email) && !empty($password) && !empty($cPassword) && !empty($phone) && !empty($gender))
    {
      if($password === $cPassword)
      {
        //Insert Query
        $sql = "INSERT INTO user (username,email,password,cPassword,phone,gender) VALUES ('$username','$email','$password','$cPassword','$phone','$gender')";

        if($conn->query($sql) == TRUE)
        { header('location: login.php?usercreated'); }
      }
      
    }

  }




  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  
?>