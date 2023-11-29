<?php

	$hostName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$database = "AstroFood";

	$conn = new mysqli($hostName, $dbUserName, $dbPassword, $database);

  if (!$conn) {
    echo 'Database Not Connected!';
  }
?>