<?php
	if(!isset($_COOKIE['admin'])){
	    header('location: login.php');
	}
	
	Class foodList{
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


		//Food Insertion...
		public function add_data($data){
			$foodName = $data['foodname'];
			$foodPrice = $data['foodprice'];
			$foodImg = $_FILES['foodimg']['name'];
			$tmpName = $_FILES['foodimg']['tmp_name'];

			$query = "INSERT INTO food(foodname, foodprice, foodimg) VALUES('$foodName', $foodPrice, '$foodImg')";

			if (mysqli_query($this->conn, $query)) {
				move_uploaded_file($tmpName, 'upload/'.$foodImg);
				return "Iteam Added Successfully";
			}
		}

		//Food Display
		public function display_data(){
			$query = "SELECT * FROM food";

			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				return $return_data;
			}
		}

		//Food Display for Edit/Update
		public function display_data_by_id($id){
			$query = "SELECT * FROM food WHERE food_id=$id";

			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				$rec_fetch_data = mysqli_fetch_assoc($return_data);
				return $rec_fetch_data;
			}
		}


		//Main Food Update Operation Field
		public function update_data($data){
			$update_name = $data['u_foodname'];
			$update_price = $data['u_foodprice'];
			$id_no = $data['food_hide_id'];
			$update_img = $_FILES['u_foodimg']['name'];
			$tmp_name = $_FILES['u_foodimg']['tmp_name'];

			$query = "UPDATE food SET foodname='$update_name', foodprice=$update_price, foodimg='$update_img' WHERE food_id=$id_no ";

			if (mysqli_query($this->conn, $query)) {
				move_uploaded_file($tmp_name, 'upload/'.$update_img);
				return "Updated Successfully";
			}
		}


		//Food Deletion
		public function delete_data($id){
			$catch_img = "SELECT * FROM food WHERE food_id=$id";
			$run_catch_img = mysqli_query($this->conn, $catch_img);
			$fetch_run_catch_img = mysqli_fetch_assoc($run_catch_img);
			$delete_img_data = $fetch_run_catch_img['foodimg'];

			$query = "DELETE FROM food WHERE food_id=$id";
			if (mysqli_query($this->conn, $query)) {

				unlink('upload/'.$delete_img_data);
				return "Deleted Successfully";
			}
		}
	}

?>