-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 05:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrofood`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(5) NOT NULL,
  `personFirstName` text NOT NULL,
  `personLastName` text NOT NULL,
  `personEmail` varchar(40) NOT NULL,
  `personPhone` int(20) NOT NULL,
  `personMessage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `personFirstName`, `personLastName`, `personEmail`, `personPhone`, `personMessage`) VALUES
(153, 'Sowmik', 'Ahmed', 'sowmik.office@gmail.com', 1789117165, 'This is an amazing food site. Thank you.'),
(154, 'Thomas', 'Stweuart', 'thomas@gmail.com', 1988990991, 'That is really a nice food management site...'),
(160, 'Robert', 'Peterson', 'robert.peterson@yahoo.com', 1988233452, 'The food quality is really awesome. That was a great experience with astro food. Thank you so much for the fast delivery. Thank you.');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(5) NOT NULL,
  `foodname` text NOT NULL,
  `foodprice` int(100) NOT NULL,
  `foodimg` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `foodname`, `foodprice`, `foodimg`) VALUES
(14, 'Seafood Salad', 350, '007_Seafood_Salad.jpg'),
(15, 'Green Salad', 160, '004_Green_Salad.jpg'),
(16, 'Pasta & Grain Salad', 200, '005_Pasta_and_Grain_Salad.jpg'),
(17, 'Legumes Salad', 90, '006_Legumes_Salad.jpg'),
(18, 'Beaf Burger', 230, '000-beaf burger.jpg'),
(19, 'Chicken Burger', 200, '001-chicken burger.jpg'),
(20, 'Greek Pizza', 300, '001-greek pizza.jpg'),
(21, 'Pizza Romania', 400, '000-pizza romania.jpg'),
(24, 'Double Cheese Burger', 230, '002-double cheese burger.jpg'),
(25, 'Vegetable Burger', 170, '003-veg burger.jpg'),
(26, 'Sumo Salad', 120, '002_Sumo_Salad.jpg'),
(27, 'Chicken Kacchi Biryani', 160, '01_Chicken_Kacchi.jpg'),
(28, 'Indian Chicken Kacchi Biryani', 190, '02_Indian_Special_Chicken_Kacchi.jpg'),
(29, 'Beaf Kacchi Biryani', 200, '03_Beaf_Kacchi.jpg'),
(30, 'Hyderabadi Mutton Biryani', 190, '04_Hyderabadi_Mutton_Biryani.jpg'),
(31, 'Mughol Shahi Mutton Biryani', 175, '05_Mughol_Shahi_Mutton_Biryani.jpg'),
(32, 'Mint Chocolate Cake (500g)', 450, 'Mint_Chocolate_Cake.jpg'),
(33, 'Red Velvet Cake (1kg)', 880, 'red_velvet_1.jpg'),
(34, 'Red Velvet Cake (1kg)', 900, 'red_velvet_2.jpg'),
(35, 'Red Velvet Cake (1kg)', 900, 'red_velvet_3.jpg'),
(36, 'Vanilla Scented Cornmeal Cake', 650, 'Vanilla_Scented_Cornmeal_Cake.jpg'),
(37, 'Beaf Kala Vuna', 650, 'Beaf Kala Vuna.jpg'),
(38, 'Mutton Kala Vuna', 600, 'Mutton Kala Vuna.jpg'),
(39, 'North Indian Bihari Kebab', 450, 'North_Indian_Bihari_Kebab.jpg'),
(40, 'Desi Jali Kebab', 280, 'Jali_Kebab.jpg'),
(41, 'Vuna Khichuri With Chicken', 300, 'Vuna_Khichuri_With_Chicken.jpg'),
(42, 'Fresh Khichuri', 150, 'Fresh_Khichuri.jpg'),
(43, 'Dhakai Morog Polaw', 160, 'Dhakai_Morog_Polaw.jpg'),
(44, 'Pakistani Shahi Morog Polaw', 180, 'Pakistani_Morog_Polaw.jpg'),
(45, 'Lavender Rice Pudding (250gm)', 230, '04_Lavender_Rice_Pudding.jpg'),
(46, 'Japanese Custard Pudding (400gm)', 300, '07_Japanese_Custard_Pudding.jpg'),
(47, 'Mango Vanilla Pudding (300gm)', 200, '00_Mango_Vanilla_Pudding.jpg'),
(48, 'Italian Sub-Sandwich', 320, 'Italian Sub-Sandwich.jpg'),
(49, 'Mexican Sub-Sandwich', 280, 'Mexican Sub-Sandwich.jpg'),
(50, 'Grilled Sub-Sandwich', 190, 'Grilled Sub-Sandwich.jpg'),
(51, 'Chicken Sub-Sandwich', 230, 'Chicken Sub-Sandwich.jpg'),
(52, 'Chicken-Wadges Combo', 300, '01_Chicken_with_Wadges.jpg'),
(53, 'Salted Mint Lassi (1L)', 120, '01_Salted_Mint_Lassi.jpg'),
(54, 'Puran Dhaka Special Borhani (1L)', 140, '02_Puran_Dhaka_Special_Borhani.jpg'),
(55, '7up (1L)', 70, '7up_1L.jpg'),
(56, '7up (2L)', 120, '7up_2L.jpg'),
(57, '7up CAN (330ml)', 100, '7up_CAN_330ML.jpg'),
(58, 'Lemon Juice (2L)', 140, 'Lemon_juice_2L.jpg'),
(59, 'Mirinda CAN (330ml)', 90, 'Mirinda_CAN_330ML.jpg'),
(60, 'Pepsi MAX (1L)', 80, 'Pepsi_Max_1L.jpg'),
(61, 'Cocacola (2.25L)', 115, 'Coke_2.25L.jpg'),
(62, 'Cocacola C2 (400ml)', 100, 'Coke_C2_400ML.jpg'),
(63, 'Sprite (2.25L)', 110, 'Sprite_2.25L.jpg'),
(67, 'tomato', 70, 'tomato.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `order_id` int(5) NOT NULL,
  `food_id` int(5) NOT NULL,
  `foodname` text NOT NULL,
  `foodprice` int(100) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `order_date_time` varchar(100) NOT NULL,
  `payment_option` varchar(100) NOT NULL,
  `customer_address` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`order_id`, `food_id`, `foodname`, `foodprice`, `customer_name`, `customer_phone`, `order_date_time`, `payment_option`, `customer_address`) VALUES
(11, 20, 'Greek Pizza', 300, 'Mark', 1677322322, '2023-05-08T16:53', 'CashOnDel', 'Road#05, House#55, Ring Road-Adabor, Baitul Aman Housing Society, Dhaka-1207	            	\n		        	'),
(12, 17, 'Legumes Salad', 90, 'Sowmik', 1789117165, '2023-05-08T16:57', 'CashOnDel', 'House#01, Road#25, Abdullahbag, (Satarkul Road), North Badda, Dhaka-1212	            	\r\n		        	'),
(13, 17, 'Legumes Salad', 90, 'Nowsad', 1614369821, '2023-05-09T20:34', 'CashOnDel', 'Uttar Badda, GM Bari, House#25, Road#05, Dhaka-1212   	\r\n		        	'),
(15, 32, 'Mint Chocolate Cake (500g)', 450, 'Mark', 1682774917, '2023-05-15T12:00', 'CashOnDel', 'Bashundhara, Block #C, House #149, Road #5, Dhaka-1212\r\n		        	'),
(17, 18, 'Beaf Burger', 230, 'Muhammad', 1783826440, '2023-05-17T23:43', 'CashOnDel', 'Mohakhali, Road No#05, House No#15, Cricent Area, Dhaka-1212'),
(19, 34, 'Red Velvet Cake (1kg)', 900, 'Sowmik', 1789117165, '2023-05-23T04:43', 'CashOnDel', 'GM-Bari, North Badda, Dhaka-1212.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cPassword` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `cPassword`, `phone`, `gender`) VALUES
(19, 'Mark', 'mark@gmail.com', 'mark123', 'mark123', 1677322322, 'Male'),
(20, 'Sowmik', 'sowmik@gmail.com', 'smk123', 'smk123', 1789117165, 'Male'),
(22, 'Kerl', 'Kerl@gmail.com', 'kerl1234', 'kerl1234', 1988121123, 'Male'),
(23, 'Nowsad', 'nowsad@gmail.com', 'nowsad123', 'nowsad123', 1614369821, 'Male'),
(25, 'Muhammad', 'muhammad@gmail.com', 'controll123', 'controll123', 1977838215, 'Male'),
(26, 'Emily', 'emily@yahoo.com', 'em1234', 'em1234', 1988569044, 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
