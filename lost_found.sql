-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 02:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lost&found`
--

-- --------------------------------------------------------

--
-- Table structure for table `items_info`
--

CREATE TABLE `items_info` (
  `id` int(10) NOT NULL,
  `product_catagory` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `found_place` varchar(50) NOT NULL,
  `division` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_info`
--

INSERT INTO `items_info` (`id`, `product_catagory`, `product_name`, `found_place`, `division`, `district`, `contact`) VALUES
(4, 'Mobile Phone', 'SAMSUNG', 'Shakil er Basah', 'Dhaka Division', 'Mirpur', 134587),
(5, 'Mobile Phone', 'Nokia', 'Kacharipara', 'Dhaka Division', 'Jamalpur', 2147483647),
(12, 'Mobile Phone', 'Mi', 'Khilkhet', 'Dhaka Division', 'Uttara', 2147483647),
(13, 'Mobile Phone Accessories', 'Headphone', 'AIUB Library', 'Dhaka Division', 'Gulshan', 1711112233),
(14, 'Mobile Phone Accessories', 'Charger', 'Banani', 'Dhaka Division', 'Any', 1711112233),
(15, 'Mobile Phone Accessories', 'Power Bank', 'Road 21', 'Dhaka Division', 'Dhaka', 1711112233),
(16, 'Mororcyle', 'Yamaha', 'AIUB Parking', 'Dhaka Division', 'Dhaka', 1711112233),
(17, 'Mororcyle', 'Pulser', 'AIUB Parking', 'Dhaka Division', 'Dhaka', 1711112233),
(18, 'Bycyle', 'Phonex', 'Banani', 'Dhaka Division', 'Dhaka', 1711112233),
(19, 'Watch', 'Rollex', 'AIUB Library', 'Dhaka Division', 'Dhaka', 1711112233),
(20, 'Jewellery', 'Ring', 'AIUB Study Room', 'Dhaka Division', 'Dhaka', 1711112233),
(21, 'Bag', 'Troll', 'AIUB Campus 7', 'Dhaka Division', 'Dhaka', 1711112233),
(22, 'Sports', 'Bat', 'Banai Club Field', 'Dhaka Division', 'Dhaka', 1711112233),
(23, 'Books', 'Teach Yourself C', 'AIUB LIbrary', 'Dhaka Division', 'Dhaka', 1711112233),
(24, 'Calculator', 'Scientific', 'Room 431, AIUB', 'Dhaka Division', 'Dhaka', 1711112233),
(25, 'Others', 'Laptop', 'Admin Building, AIUB', 'Dhaka Division', 'Dhaka', 1711112233),
(26, 'Document', 'ID Card', 'Road 21', 'Chittagong Division', 'Chittagong', 1711112233),
(27, 'Motorcycle', 'Yamaha', 'C Complex', 'Chittagong Division', 'Chittagong', 1711112233),
(28, 'Bycycle', 'Phonex', 'somewhere', 'Sylhet Division', 'Sylhet', 1711112233),
(29, 'Motorcycle', 'Sujuki', 'somewhere', 'Barishal Division', 'Barishal', 1711112233),
(30, 'Bycycle', 'Phonex', 'Nowhere', 'Mymensingh Division', 'Any', 1711112233),
(32, 'Calculator', 'Casio', 'Room 7111, AIUB', 'Dhaka Division', 'Dhaka', 1711112233),
(33, 'Calculator', 'Casio ES 991', 'AIUB Library', 'Dhaka Division', 'Dhaka', 1711112233);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_name`, `user_email`, `message`) VALUES
(13, 'Md Kabir', 'ss@gmail.com', 'hello'),
(14, 'Habib Sujon', 'sujon@gmail.com', 'hello'),
(15, 'Shah Md Sultan', 'd@gmail.com', 'Is it right now?'),
(16, 'Md Kabir', 't@gmail.com', 'Is it right now?');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contactno`, `password`, `gender`, `user_type`) VALUES
(26, 'Farhad Molla', 'arin@gmail.com', '01915421478', 'b9bede628e6144e86b59977a367b05bb', 'Female', ''),
(40, 'Md Kabir vai', 'ss@gmail.com', '01714562389', '78584fff2587ae0d947f3cf5fc35af73', 'Male', 'user'),
(41, 'Habib Sujon', 'sujon@gmail.com', '01919812535', '78584fff2587ae0d947f3cf5fc35af73', 'Male', 'admin'),
(42, 'Shah Md Sultan', 'shahed@gmail.com', '01679077099', '9618a0a2e02e134e8e35ae4633b4ae07', 'Male', 'user'),
(44, 'SM Hossain', 'smhossain@gmail.com', '01714562389', '9717d34706b71bba50ef20c173f527b7', 'Male', 'user'),
(46, 'some one', 'some@gmail.com', '01712457896', 'a0595699017a5afa99c374d89a7c186d', 'Male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items_info`
--
ALTER TABLE `items_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items_info`
--
ALTER TABLE `items_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
