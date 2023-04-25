-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 03:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edgedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(5000) NOT NULL DEFAULT '',
  `item_price` double DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_date` date NOT NULL DEFAULT current_timestamp(),
  `product_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_image`, `item_date`, `product_code`) VALUES
(5, 'Item2 ', 100, '147124.jpg', '2016-11-10', 'p1'),
(6, 'Item3', 50, '181757.jpg', '2016-11-10', 'p2'),
(7, 'Item4', 60, '783298.jpg', '2016-11-10', 'p3'),
(8, 'Item5', 55, '14231.jpg', '2016-11-10', 'p4'),
(9, 'Item6', 90, '289865.jpg', '2016-11-10', 'p5'),
(11, 'Item1', 40, '722934.jpg', '2016-11-10', 'p6'),
(12, 'Item101', 1000, '838084.jpg', '2016-11-14', 'p7'),
(13, 'Item102', 500, '320199.jpg', '2016-11-14', 'p8'),
(14, 'Item103', 300, '361204.jpg', '2016-11-14', 'p9'),
(15, 'Item105', 500, '444526.jpg', '2016-11-14', 'p10'),
(16, 'Item106', 600, '956983.jpg', '2016-11-14', 'p11'),
(17, 'Item107', 300, '855187.jpg', '2016-11-14', 'p12'),
(18, 'Item108', 400, '45968.jpg', '2016-11-14', 'p13'),
(19, 'item909', 50.5, '158191.jpg', '2016-11-14', 'p14'),
(20, 'infinity petals', 200, '963915.jpg', '2023-01-30', 'p15'),
(21, 'roses', 200, '185598.jpg', '2023-02-08', 'p16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
