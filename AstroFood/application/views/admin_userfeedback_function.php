<?php
	if(!isset($_COOKIE['admin'])){
	    header('location: login.php');
	}
	
	Class feedback{
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


		//Feedback Display
		public function display_data(){
			$query = "SELECT * FROM feedback";

			if (mysqli_query($this->conn, $query)) {
				$recieve_feedback = mysqli_query($this->conn, $query);
				return $recieve_feedback;
			}
		}
	}
?>