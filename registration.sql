-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 09:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `timestamp`, `fname`) VALUES
(9, 'admin@admin.in', '$2y$10$Auma1IJ2g48f6038d3V5yOd5xlV./wUDswRInZ8MCcU9sYOImp9cG', '2021-04-01 08:41:00', 'Admin'),
(10, 'admin@admin.com', 'admin', '2021-04-01 08:54:51', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(7) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_description` text NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_time` datetime NOT NULL DEFAULT current_timestamp(),
  `blog_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_description`, `blog_author`, `blog_image`, `blog_time`, `blog_date`) VALUES
(1, 'Thumb Sucking in Babies', 'Thumb-sucking is a usual occurrence in babies. At some or other stages, it is the job of infants to suck their thumb which they love it and it becomes a habit gradually. Thumb sucking may result in displaced teeth and a habit which may be difficult for infants to get rid of ... ', 'Vinay Verma', '45.jpg', '2021-04-01 10:10:17', '2021-03-31 20:22:41'),
(2, 'Decorate Baby’s Room on a Budget', 'If you’re prepared to put an extra effort, you can find some special bargains that won’t break your budget. This article enlists you all the things you can do while planning to decorate your own baby room ...', 'Akash Baranwal', '46.jpg', '2021-03-31 21:07:17', '2021-03-31 21:07:17'),
(3, 'Gift Ideas for the Newborn baby in India', 'A baby’s birth is one of the most precious and beautiful occasions in your life that you can’t wait for long to welcome him in the family. You will be overjoyed as new parents with lots of enthusiasm. You can’t help but share your joy with others as soon as your baby is born. In an attempt to share the happiness of the family having a new-born and you want to express your gratitude when your close relatives or friends may visit to see ...', 'Sudheer Madeshia', '44.jpg', '2021-04-01 21:18:55', '2021-04-01 21:18:55'),
(4, 'Top 5 Tips For Keeping Your Baby Safe', 'Keeping your baby safe is the top most priority of any parent whether they are with the baby or not. It is a well-known fact that today’s parents have lots of responsibilities on their shoulders ...', 'Sandeep Singh', '35.jpg', '2021-04-01 21:22:27', '2021-04-01 21:22:27'),
(5, 'How to Save Money When Buying For Baby', 'When you’re sprouting a bump, being more cost-conscious automatically comes to the top of your mind. But how exactly do you save when you have a baby still remains a question? Well, the good news is: whether your little bundle of ...', 'Shivam Gupta', '36.jpg', '2021-04-01 21:26:00', '2021-04-01 21:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_p_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `p_quantity` int(2) NOT NULL DEFAULT 1,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_p_id`, `p_id`, `user_id`, `p_quantity`, `timestamp`) VALUES
(104, 0, 0, 1, '2021-04-04 22:37:35'),
(120, 1, 23, 1, '2024-03-27 12:35:57'),
(121, 1, 24, 1, '2024-03-27 13:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `timestamp`) VALUES
(1, 'Clothing', '2021-03-16 16:39:06'),
(2, 'Electrocnics', '2021-03-16 16:39:56'),
(3, 'Shoes', '2021-03-17 20:57:47'),
(4, 'Watches', '2021-03-17 20:58:18'),
(5, 'Health & Beauty', '2021-03-17 20:58:39'),
(6, 'Toys', '2021-03-17 20:58:53'),
(7, 'Foods', '2021-03-17 20:59:02'),
(8, 'Blankets', '2021-03-17 20:59:22'),
(9, 'Baby Trollies', '2021-03-17 20:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `cp_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `cp_img` varchar(100) NOT NULL,
  `cp_items` varchar(200) NOT NULL,
  `cp_text` varchar(200) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(7) NOT NULL,
  `status` enum('pending','delivered','','') NOT NULL DEFAULT 'pending',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `amount`, `status`, `timestamp`) VALUES
(1, 21, 50, 'pending', '2021-04-19 21:12:25'),
(2, 21, 2324, 'pending', '2021-04-19 21:27:46'),
(3, 2, 2276, 'pending', '2021-04-19 22:32:47'),
(4, 2, 569, 'pending', '2021-04-19 22:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_category` int(100) NOT NULL,
  `timstamp` datetime NOT NULL DEFAULT current_timestamp(),
  `p_discountprice` varchar(100) NOT NULL,
  `p_subcategory` int(100) NOT NULL,
  `p_tittle` varchar(100) NOT NULL,
  `p_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_price`, `p_image`, `p_category`, `timstamp`, `p_discountprice`, `p_subcategory`, `p_tittle`, `p_quantity`) VALUES
(1, 'Baybee Pop N Up Strong Durable Baby Chair - Blue', 'this is a baby cloth lena hai toh lele 50% discount hai', '899.00', '12.jpg', 1, '2021-03-16 16:43:35', '569.00', 1, '', 0),
(2, 'Johnson\'s Baby Care Collection Baby Gift Set', 'jsfhisahfiuasfuias', '350.00', '13.jpg', 2, '2021-03-16 16:44:33', '310.00', 1, '', 0),
(3, 'Huggies Nature Care Pants, Monthly Pack', 'This is baby pants', '2399.00', '14.jpg', 3, '2021-03-16 17:44:09', '1583.00', 1, '', 0),
(4, 'Johnson\'s Baby Powder 400g with Free Soap 100g', 'This is johnson baby powder', '287.50', '15.jpg', 4, '2021-03-16 17:47:16', '255.50', 1, 'Johnson Baby powder', 0),
(5, 'Philips Avent Anti Colic Bottle 260ml (Twin Pack)', '', '615.00', '16.jpg', 5, '2021-03-16 20:59:22', '548.00', 2, '', 0),
(6, 'Soft Winter Quilted Hooded Romper', 'foshfsahfishuifsdh', '1,699.00', '17.jpg', 6, '2021-03-17 20:06:27', '1499.00', 2, '', 0),
(7, 'Hudson Baby Cotton Hooded Towel', ' dv vdvd fv', '1,599.00', '18.jpg', 7, '2021-03-17 20:11:53', '1,249.00', 2, '', 0),
(8, 'Rainforest Musical Lullaby Baby', '', '1,999.00', '19.jpg', 8, '2021-03-17 20:12:39', '1,599.00', 2, '', 0),
(9, 'Intex Sunset Glow Baby Pool', '', '1,999.00', '20.jpg', 9, '2021-03-17 20:12:44', '1,599.00', 3, '', 0),
(10, 'Stuffed Cuddly Pikachu Plush Toy', 'v vsdv sdfvds v', '500.00', '21.jpg', 2, '2021-03-17 20:13:06', '249.00', 3, '', 0),
(11, 'Super Durable 6 Pack Sensory Balls', '', '500.00', '22.jpg', 1, '2021-03-17 23:04:38', '390.00', 6, '', 0),
(12, 'Soft Choo Choo Bath Toys', '', '300.00', '23.jpg', 2, '2021-03-17 23:05:58', '279.00', 6, '', 0),
(14, 'Play Craft Nib Painting Kit', '', '500.00', '25.jpg', 2, '2021-03-17 23:08:40', '375.00', 3, '', 0),
(15, 'Little Chime Baby Scooter Battery Operated Ride on Bike with Music and Light (Pink)', '', '6,999.00', '5.jpg', 2, '2021-03-17 23:26:20', '5,699.00', 4, 'Electrical Vehicles', 0),
(16, 'Toyshine Ducky Baby Tricycle Ride-on Bicycle (Red)- BES for 2-3 Years Kids', '', '1,999.00', '6.jpg', 2, '2021-03-17 23:30:00', '1,391.00', 4, 'Trikes', 0),
(17, 'Himalaya Herbals', '', '500.00', '7.jpg', 2, '2021-03-18 08:47:10', '359.00', 5, '', 0),
(25, 'Johnsons baby soap opera cream mosituriser', 'This is a nice product\r\n', '999', 'hulk vs hulkbuster.jpg', 5, '2021-03-31 12:38:06', '899', 2, 'Cream', 4);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `r_id` int(11) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_size` varchar(200) NOT NULL,
  `p_detail` varchar(200) NOT NULL,
  `rp_img` varchar(200) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`r_id`, `u_name`, `email`, `mobile`, `p_name`, `p_size`, `p_detail`, `rp_img`, `u_address`, `timestamp`) VALUES
(2, 'sando', 'sando@mymail.com', '5878456812', 'dadadf', 'ddfdfd', 'fdfsdfs', 'pic1.png', 'sfsafsafasfas', '2024-03-27 13:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `s_id` int(100) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`s_id`, `s_name`, `timestamp`) VALUES
(1, 'FEATURED PRODUCTS', '2021-03-17 20:37:08'),
(2, 'NEW PRODUCTS', '2021-03-17 20:37:08'),
(3, 'BEST SELLER', '2021-03-17 22:41:17'),
(4, 'HOT DEALS', '2021-03-17 23:19:06'),
(5, 'SPECIAL OFFER', '2021-03-17 23:58:23'),
(6, 'UNIQUE PRODUCTS', '2021-03-30 15:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `mobile`, `password`, `address`, `timestamp`) VALUES
(1, 'Bipin', 'yadav', 'android@android.com', '1234567891', '25569695656566', 'r', '2021-03-06 11:55:04'),
(11, 'avb', 'adsd', 'ajay1@gmail.com', '5766855656', '$2y$10$2xUgHMXGlmTJmsEPwErvBeQ/suqAwv3HS3nBWDR0lYIDOu0fZjy4q', 'as', '2021-03-09 13:30:36'),
(12, 'bky', 'bky', 'bky@mail.com', '546123789', '$2y$10$UWHZ2MhrZ5eCcsWtG/UgsuMObfWG09VGXJDKViAJb119cAPD//uC.', 'cv', '2021-03-11 19:37:01'),
(14, 'Admin', 'aky', 'admin@admin.in', '1234567891', '$2y$10$MeKwG3ghqzsee7ahFB3/j.N3Lqn6AaZieNFHBvk//IcV4TrLVoAxm', 'a', '2021-03-15 14:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customize`
--
ALTER TABLE `customize`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);
ALTER TABLE `products` ADD FULLTEXT KEY `p_name` (`p_name`,`p_description`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customize`
--
ALTER TABLE `customize`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
