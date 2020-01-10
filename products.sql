-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2020 at 12:17 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baithi`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productSectors` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `productNumber` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `teaser` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productSectors`, `price`, `productNumber`, `created`, `teaser`) VALUES
(3, 'qqqqqqqqqqqq', 'Äiá»‡n thoáº¡i', 333, 33, '0033-03-31', 'fdfdffd'),
(6, 'tra sua ', 'Äiá»‡n thoáº¡i', 1111, 221212, '1111-11-11', 'fdffffdfdf'),
(8, 'tra sua ', 'Diá»u hÃ²a', 33, 33, '2222-02-22', 'ffdffdf'),
(9, '11111111111111', 'Diá»u hÃ²a', 333, 4, '0003-03-31', 'fffd'),
(10, 'quang', 'Diá»u hÃ²a', 34, 43, '0003-03-31', 'dsffsd'),
(11, '11111111111111', 'Äiá»‡n thoáº¡i', 3333, 444, '3333-03-31', 'rrrrrrrrrrrr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
