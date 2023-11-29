<?php

Class foodIteams{
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

		//Food Display
		public function display_data(){
			$query = "SELECT * FROM food";

			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				return $return_data;
			}
		}


		// Food Display By Id
		public function display_data_by_id($id){
			$query = "SELECT * FROM food WHERE food_id = $id";

			if (mysqli_query($this->conn, $query)) {
				$return_data = mysqli_query($this->conn, $query);
				$rec_fetch_order_data = mysqli_fetch_assoc($return_data);
				return $rec_fetch_order_data;
			}
		}


		//adding order data in Database
		public function add_order_data($data){
			$theFoodId = $data['thefoodid'];
			$theFoodName = $data['thefoodname'];
			$theFoodPrice = $data['thefoodprice'];
			$customerName = $data['customer_name'];
			$customerPhone = $data['customer_phone'];
			$orderDateTime = $data['order_date_time'];
			$paymentOption = $data['cashOnDel'];
			$customerAddress = $data['customer_address'];


			$query = "INSERT INTO food_order(food_id, foodname, foodprice, customer_name, customer_phone, order_date_time, payment_option, customer_address) VALUES('$theFoodId', '$theFoodName', $theFoodPrice, '$customerName', '$customerPhone', '$orderDateTime', '$paymentOption', '$customerAddress')";

			if (mysqli_query($this->conn, $query)) {
				return "Order Confirmation Successful";
			}
		}
}


?>