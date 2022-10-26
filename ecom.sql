-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` varchar(100) NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'nisha', 'nishapokharel@gmail.com', 'admin', 'admin.jpg', '9823120686', 'nepal', 'Engineer', 'Hi my name is nisha pokharel.'),
(2, 'Garima Paudel', 'paudelgarima229@gmail.com', 'admin', 'admin1.jpg', '9845566666', 'Nepal', 'CEO', 'I am a web developer.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(50) NOT NULL,
  `farm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `farm`) VALUES
(1, 't', 1, 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Seasonal', 'Seasonal vegetables are those vegetables that can not adjust all kind of temperatures. The seasonal vegetables are grown in the natural cycle of seasons when they are most suitable. For example, cauliflower only grows in winter season.\r\n'),
(2, 'Off-seasonal', 'The vegetable which can be grown in any season using technology is an off-season vegetable. For example, onion can be grown anytime. The main advantage of off-season vegetable is to ensure food security during the scarce period to promote seasonal employment and to ensure high price for farmers.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(60) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` varchar(100) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(3, 'Nisha Pokharel', 'customer@gmail.com', 'customer', 'Nepal', 'Bharatpur', '9823120686', 'Chitwan', 'nisha.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `farm` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `farm`, `order_date`, `order_status`) VALUES
(10, 3, 17, 100, 1426993178, 1, 'XYZ', '2022-10-26 06:32:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(100) NOT NULL,
  `farm_name` varchar(255) NOT NULL,
  `farmer_email` varchar(255) NOT NULL,
  `farmer_pass` varchar(255) NOT NULL,
  `farmer_contact` varchar(255) NOT NULL,
  `farmer_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `farm_name`, `farmer_email`, `farmer_pass`, `farmer_contact`, `farmer_about`) VALUES
(1, 'ABC', 'farmer@gmail.com', 'farmer', '9845055666', 'asdfghjklpoiuytre'),
(2, 'XYZ', 'farmer2@gmail.com', 'farmer2', '9845555555', 'HI, I am a farmer2.');

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `farm` varchar(255) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `farm`, `order_status`) VALUES
(1, 0, 1821212873, '5', 2, 'ABC', 'pending'),
(2, 3, 15568961, '5', 1, 'ABC', 'pending'),
(3, 3, 1482774939, '5', 1, 'ABC', 'pending'),
(4, 3, 1197285139, '3', 2, 'XYZ', 'pending'),
(5, 3, 1667688003, '12', 1, 'ABC', 'pending'),
(6, 3, 1667688003, '2', 1, 'ABC', 'pending'),
(7, 3, 1888842695, '17', 1, '', 'pending'),
(8, 3, 1888842695, '16', 1, '', 'pending'),
(9, 3, 1319016880, '16', 1, '', 'pending'),
(10, 3, 1426993178, '17', 1, '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_tltle` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL,
  `farmer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_tltle`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`, `farmer_id`) VALUES
(16, 4, 2, '2022-09-21 04:58:42', ' Potato', 'potato.jpg', ' potato.jpg', ' potato.jpg', 40, 'Potato makes food tasty.', 'pot', 1),
(17, 1, 1, '2022-09-21 05:01:32', ' Tomato', 'tomato.jpg', ' tomato.jpg', ' tomato.jpg', 100, 'HI, I am tomato', 'tom', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Tomato', '                                        The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant.'),
(2, 'Cauliflower', 'Cauliflower is one of several vegetables in the species Brassica oleracea in the genus Brassica, which is in the Brassicaceae family.Cauliflower is a cruciferous vegetable that is naturally high in fiber and B-vitamins. It provides antioxidants and phytonutrients that can protect against cancer. It also contains fiber to enhance weight loss and digestion, choline that is essential for learning and memory, and many other important nutrients.'),
(3, 'Cucumber', 'The cucumber is a member of the Cucurbitaceae family. Other members of the family include squash and different kinds of melon, including bitter melon. Cucumbers provide various nutrients but are low in calories, fat, cholesterol, and sodium.'),
(4, 'Potato', 'The potato is a starchy tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas.Potatoes are a good source of fiber, which can help you lose weight by keeping you full longer. Fiber can help prevent heart disease by keeping cholesterol and blood sugar levels in check. Potatoes are also full of antioxidants that work to prevent diseases and vitamins that help your body function properly. '),
(5, 'Onion', '                                        The onion also known as the bulb onion or common onion, is a vegetab'),
(12, 'Cabbage', 'Cabbage, comprising several cultivars of Brassica oleracea, is a leafy green, red, or white biennial plant grown as an annual vegetable crop for its dense-leaved heads.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(7, 'slider number 3', '4.jpg'),
(8, 'slider 4', 'slider.jpg'),
(9, 'slider 5', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
