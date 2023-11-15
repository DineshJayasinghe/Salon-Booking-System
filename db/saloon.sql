-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 03:45 AM
-- Server version: 10.5.9-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookpackage`
--

CREATE TABLE `bookpackage` (
  `id` int(11) NOT NULL,
  `userName` varchar(1000) NOT NULL,
  `packageId` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `discount` varchar(1000) NOT NULL,
  `telephoneNumber` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `staus` varchar(1000) NOT NULL,
  `catType` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpackage`
--

INSERT INTO `bookpackage` (`id`, `userName`, `packageId`, `price`, `discount`, `telephoneNumber`, `timeStamp`, `staus`, `catType`) VALUES
(1, 'janithLakmal', '1', '190333.09', '', '0711019209', '2021-06-15 06:01:55', 'Booked', 'wedding');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productId` varchar(1000) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `timeStamp` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productId`, `user`, `status`, `price`, `timeStamp`, `name`) VALUES
(1, '1', 'janithLakmal', 'Checked', '400', '2021-06-15 14:01:32', 'Black Herbal Hena'),
(3, '2', 'janithLakmal', 'Checked', '300', '2021-06-15 14:59:54', 'Brown Herbal Hena'),
(4, '1', 'janithLakmal', 'Pendding', '400', '2021-06-15 15:26:29', 'Black Herbal Hena'),
(5, '1', 'janithLakmal', 'Pendding', '400', '2021-06-15 16:44:25', 'Black Herbal Hena'),
(6, '1', 'janithLakmal', 'Pendding', '400', '2021-06-15 16:45:53', 'Black Herbal Hena'),
(7, '2', 'janithLakmal', 'Pendding', '300', '2021-06-15 16:45:56', 'Brown Herbal Hena');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `tel` varchar(1000) NOT NULL,
  `job` varchar(100) NOT NULL,
  `basicsalary` varchar(100) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `educationQualification` varchar(3000) NOT NULL,
  `workExperince` varchar(3000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `address`, `tel`, `job`, `basicsalary`, `timeStamp`, `educationQualification`, `workExperince`, `email`, `status`) VALUES
(3, 'G. Janith', '78, Horana', '0789098176', 'Worker', '30000', '2021-06-01 02:42:35', 'none', 'none', 'janith@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `Inquiry` varchar(1000) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `timetamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `Inquiry`, `Message`, `username`, `timetamp`) VALUES
(2, 'jayani kariayawasam', 'jayani@gmail.com', 'Not accept paymentsdasdsad', 'dasdsad', '', '2021-06-15 10:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `Category` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Discription` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `title`, `price`, `Category`, `timeStamp`, `Discription`, `image`) VALUES
(1, 'White color wedding dress', '10000.00', 'wedding', '2021-06-01 03:40:35', 'none', '');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(11) NOT NULL,
  `serviceType` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(1000) NOT NULL,
  `payemntType` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`id`, `serviceType`, `price`, `date`, `user`, `payemntType`) VALUES
(1, 'Body Treatment', '430000', '2021-05-31 10:58:10', 'janithLakmal', 'Debit Card');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `timeStamp`, `type`, `status`, `image`) VALUES
(1, 'Black Herbal Hena', 'Henna is a dye prepared from the plant Lawsonia inermis, also known as the henna tree, the ... The name \"henna\" is used in other skin and hair dyes, such as black henna and neutral henna, neither of which is derived from the henna plant. ... and soles, in a tableau consistent with the henna bridal description from Ugarit.\r\n', '400', '2021-06-15 07:46:02', 'hair', 'Available ', ''),
(2, 'Brown Herbal Hena', 'Henna is a dye prepared from the plant Lawsonia inermis, also known as the henna tree, the ... The name \"henna\" is used in other skin and hair dyes, such as black henna and neutral henna, neither of which is derived from the henna plant. ... and soles, in a tableau consistent with the henna bridal description from Ugarit.\r\n', '300', '2021-06-15 07:50:16', 'hair', 'Available ', '');

-- --------------------------------------------------------

--
-- Table structure for table `salaryupdate`
--

CREATE TABLE `salaryupdate` (
  `id` int(11) NOT NULL,
  `user` varchar(1000) NOT NULL,
  `basicSal` varchar(1000) NOT NULL,
  `totalSal` varchar(1000) NOT NULL,
  `month` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salaryupdate`
--

INSERT INTO `salaryupdate` (`id`, `user`, `basicSal`, `totalSal`, `month`, `timeStamp`) VALUES
(1, '3', '30000', '30008', 'Jun 2021', '2021-06-16 01:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `timeStamp`, `type`) VALUES
(3, 'janithLakmal', 'nadun2952@gmail.com', '123@', '2021-06-12 13:31:15', 'Customer'),
(6, 'admin', 'admin@gmail.com', '123', '2021-06-15 11:21:48', 'Admin'),
(7, 'nadunSadaru', 'nadunSadaru@gmail.com', '123', '2021-06-15 17:37:13', 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `id` int(11) NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `nic` varchar(1000) NOT NULL,
  `province` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `uname`, `email`, `password`, `address`, `nic`, `province`, `contact`, `timeStamp`, `name`) VALUES
(1, 'janithLakmal', 'nadun2952@gmail.com', '123@', '34, Hallummahara', '992881676V', 'North Central', '0711077898', '2021-06-12 13:31:15', 'Nadun Sandeepa'),
(3, 'nadunSadaru', 'nadunSadaru@gmail.com', '123', '', '', '', '', '2021-06-15 17:37:13', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookpackage`
--
ALTER TABLE `bookpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryupdate`
--
ALTER TABLE `salaryupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookpackage`
--
ALTER TABLE `bookpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salaryupdate`
--
ALTER TABLE `salaryupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
