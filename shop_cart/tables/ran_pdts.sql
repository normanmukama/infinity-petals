-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 03:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `rand_pdt` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `product_price` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `product_image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `product_code` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `rand_pdt` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Lexus1', '20000000', 'images/1.jpg', 'p1000'),
(2, 'Lexus2', '250000000', 'images/2.jpg', 'p1001'),
(3, 'mercedes_benz', '300000000', 'images/3.jpg', 'p1002'),
(4, 'mazda1', '2000000', 'images/4.jpg', 'p1003'),
(5, 'mazda2', '250000000', 'images/5.jpg', 'p1004'),
(6, 'mazda3', '40000000', 'images/6.jpg', 'p1005'),
(7, 'Phantom', '250000000', 'images/7.jpg', 'p1006'),
(8, 'bugati', '30000000', 'images/8.jpg', 'p1007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `rand_pdt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `rand_pdt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
