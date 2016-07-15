-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2016 at 02:58 AM
-- Server version: 5.6.31
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitchenit`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upc`
--

CREATE TABLE `upc` (
  `UPC` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `ServingSize` int(11) NOT NULL,
  `ServingsPerCarton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upc`
--

INSERT INTO `upc` (`UPC`, `ProductID`, `ServingSize`, `ServingsPerCarton`) VALUES
(12345, 1, 0, 0),
(12345, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upc_inventory`
--

CREATE TABLE `upc_inventory` (
  `InventoryID` int(11) NOT NULL,
  `UPC` int(11) NOT NULL,
  `ServingsAvaliable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upc_inventory`
--

INSERT INTO `upc_inventory` (`InventoryID`, `UPC`, `ServingsAvaliable`) VALUES
(1, 12345, 4),
(2, 12345, 4),
(3, 12345, 4),
(4, 12345, 4),
(5, 12345, 4),
(6, 12345, 4),
(7, 12345, 4),
(8, 12345, 4),
(9, 876, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upc_inventory`
--
ALTER TABLE `upc_inventory`
  ADD PRIMARY KEY (`InventoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upc_inventory`
--
ALTER TABLE `upc_inventory`
  MODIFY `InventoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
