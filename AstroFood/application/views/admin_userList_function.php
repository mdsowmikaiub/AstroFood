<?php

if(!isset($_COOKIE['admin'])){
	    header('location: login.php');
}
Class userlist{
	private $conn;

		public function __construct(){
			$hostName = "localhost";
			$dbUserName = "root";
			$dbPassword = "";
			$database = "AstroFood";

			$this->conn = mysqli_connect($hostName, $dbUserName, $dbPassword, $database);

		  	if (!$this->conn)
		  	{
		    die("database connection error!");
			}
		}



		//User Display
		public function display_data(){
			$query = "SELECT * FROM user";

			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				return $return_data;
			}
		}
}

?>