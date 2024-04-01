-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 06:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `prod_id` varchar(40) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`prod_id`, `Quantity`) VALUES
('0342202448-529244811', 738),
('0355202402-630240212', 4097),
('0344202443-529244311', 2),
('0348202420-529242011', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` varchar(40) NOT NULL,
  `prod_name` varchar(30) NOT NULL,
  `price_unity` varchar(11) NOT NULL,
  `prod_image` varchar(30) NOT NULL,
  `ProductDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `price_unity`, `prod_image`, `ProductDesc`) VALUES
('0342202448-529244811', 'Samsung Ns6', '183000', 'images/app.jpg', 'Smat phone Android 3.17 version attached and signed by Samsung Galax industry.'),
('0343202453-529245311', 'Canon', '370000', 'images/bandmember.jpg', 'it is a smart camera, for capturing image,video shoting and more others'),
('0344202443-529244311', 'Zip Phone Camera', '432000', 'images/app4.jpg', ''),
('0348202420-529242011', 'House Sit', '700000', 'images/diningroom.jpg', 'Thia product collect together those think seen on the image '),
('0355202402-630240212', 'Hair Cult', '1500', 'images/closegirl.jpg', 'this hair type, we have more different colors you want. if you need the black, chockorate, or other example type it is simple to help you how you can get it');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `prod_id` varchar(40) NOT NULL,
  `Quantity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`prod_id`, `Quantity`) VALUES
('0342202448-529244811', '6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dbpassword` varchar(30) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `phone`, `dbpassword`, `sex`, `usertype`) VALUES
(22440, 'Nkusi', 'Joseph', 'nkuJoseph@gmail.com', '07812356389', 'admin', 'M', 'hod'),
(23415, 'Mizero', 'Joshua', 'mJ@gmail.com', '0783272012', 'admin', 'M', 'coordinator'),
(82467, 'Akimana', 'Josiane', 'akajose10@gmail.com', '0789758931', 'admin', 'F', 'logistic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
