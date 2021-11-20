-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 05:34 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetopcontroller`
--

-- --------------------------------------------------------

--
-- Table structure for table `discount_price`
--

CREATE TABLE `discount_price` (
  `id` int(11) NOT NULL,
  `designName` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `discountPrice` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_price`
--

INSERT INTO `discount_price` (`id`, `designName`, `productName`, `discountPrice`, `status`) VALUES
(1, 'iron-man', 'xbox-one-console', '13', 'active'),
(2, 'gears-of-war', 'xbox-one-x-controller', '12', 'active'),
(3, 'iron-man', 'xbox-one-elite-controller', '11', 'active'),
(4, 'iron-man', 'xbox-one-bundle', '14', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discount_price`
--
ALTER TABLE `discount_price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount_price`
--
ALTER TABLE `discount_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
