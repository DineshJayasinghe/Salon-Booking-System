-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 01:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `hair`
--

CREATE TABLE `hair` (
  `id` int(4) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `image` varchar(25) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hair`
--

INSERT INTO `hair` (`id`, `hname`, `image`, `price`) VALUES
(10, 'Loreal Shampoo 250ml', 'loreal shampoo 250ml.jpg', 1100.00),
(11, 'Loreal Shampoo 1.5L', 'loreal shampoo 1.5l.jpg', 3500.00),
(12, 'Hair Wax', 'hair wax.jpg', 800.00),
(13, 'Dex Super Neat Wax', 'dex super neat wax.jpg', 900.00),
(14, 'OLOS Toner 250ml', 'olos toner 250ml.jpg', 1300.00),
(15, 'tresemme 900ml', 'shampoo 900ml.jpg', 2300.00),
(16, 'tr conditioner 500ml', 'conditioner 500ml.jpg', 2000.00),
(17, 'Tinta ', 'tinta.jpg', 950.00);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`) VALUES
(1, 'Sothys Eyes-Lips Makeup Remover', 'sothys eyes-lips makeup remover.jpg', 1700),
(2, 'Sothys Anti-aging Grade 1 Cream 50ml', 'sothys anti-aging grade 1 cream 50ml.jpg', 2300),
(3, 'Sothys Scienece Fluid 50ml', 'sothys science fluid 50ml.jpg', 3000),
(4, 'Sothys Purity Forum', 'sothys purity forum.jpg', 1600),
(5, 'Sothys Noctuella 50ml', 'sothys noctuella 50ml.jpg', 950),
(6, 'Brightening Mask 50ml', 'brightening mask 50ml.jpg', 1100),
(7, 'Sothys Anti-aging Grade 2 Cream 50ml', 'sothys anti-aging grade 2 cream 50ml.jpg', 2500),
(8, 'Sothys Hydradvance Light Hydrating Cream 50ml', 'sothys hydradvance light hydrating cream 50ml.jpg', 2800);

-- --------------------------------------------------------

--
-- Table structure for table `skin`
--

CREATE TABLE `skin` (
  `id` int(4) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `image` varchar(225) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skin`
--

INSERT INTO `skin` (`id`, `sname`, `image`, `price`) VALUES
(1, 'Sothys Vitality Lotion 200ml', 'sothys vitality lotion 200ml.jpg', 900.00),
(2, 'Purity Cleansing Milk 200ml', 'purity cleansing milk 200ml.jpg', 1300.00),
(3, 'Comfort Cleansing Milk 200ml', 'comfort cleansing milk 200ml.jpg', 1500.00),
(4, 'Sothys Comfort Lotion 200ml', 'sothys comfort lition 200ml.jpg', 1000.00),
(5, 'Sothys Face Scrub', 'sothys face scub.jpg', 2000.00),
(6, 'Sothys Brightening Fluid', 'sothys brightening fluid.jpg', 1700.00),
(7, 'Desquacream 50ml', 'desquacream 50ml.jpg', 1100.00),
(8, 'Noctuella', 'noctuelle.jpg', 2500.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hair`
--
ALTER TABLE `hair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hair`
--
ALTER TABLE `hair`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skin`
--
ALTER TABLE `skin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
