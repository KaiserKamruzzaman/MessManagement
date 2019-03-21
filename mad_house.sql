-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 08:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mad_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `bazars`
--

CREATE TABLE `bazars` (
  `bazar_id` int(10) NOT NULL,
  `user_Name` varchar(20) DEFAULT NULL,
  `date` date NOT NULL,
  `items` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bazars`
--

INSERT INTO `bazars` (`bazar_id`, `user_Name`, `date`, `items`, `cost`) VALUES
(1, 'nk', '2018-11-17', 'loren ipsum,loren ipsum,loren ipsum,loren ipsum,kkkkkkkkkkkkkkkkkkkkkk', 550),
(2, 'nk', '2018-11-08', 'loren ipsum.loren ipsum,loren ipsum', 330),
(3, 'redoy', '2018-11-14', 'redoy loren,redoy loren,redoy loren,redoy loren,redoy loren,', 500),
(4, 'nk', '2018-11-15', 'abcaasssssssssssssssssssssss', 5540),
(5, 'nk', '2018-11-13', 'loren ipsum,loren ipsum,loren ipsum,loren ipsum,kkkkkkkkkkkkkkkkkkkkkk', 220),
(8, 'nk', '2018-11-08', 'nahid kasiernahid kasiernahid kasiernahid kasiernahid kasiernahid kasiernahid kasiernahid kasier', 333),
(9, 'redoy', '2018-11-13', 'nnnnnnnnn nnnnnnnnnnn nnnnnnnnnn nnnnnnnnnnnnn', 123);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mem_id` int(10) NOT NULL,
  `mem_Name` varchar(50) NOT NULL,
  `user_Name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type_id` int(10) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `imgPath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_Name`, `user_Name`, `password`, `type_id`, `phone_no`, `imgPath`) VALUES
(1, 'Nahid Kaiser', 'nk', '123', 2, '+8801828568150', '20181113135815PicsArt_08-31-07.36.09.jpg'),
(11, 'N Zaman Redoy', 'redoy', '123', 2, '87575', 'fgfgf'),
(13, 'Kaiser Kamruzzaman', 'admin', 'admin', 1, '01619568150', 'fgfgfg');

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

CREATE TABLE `member_types` (
  `type_id` int(10) NOT NULL,
  `type_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`type_id`, `type_name`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bazars`
--
ALTER TABLE `bazars`
  ADD PRIMARY KEY (`bazar_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mem_id`),
  ADD UNIQUE KEY `user_Name` (`user_Name`);

--
-- Indexes for table `member_types`
--
ALTER TABLE `member_types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bazars`
--
ALTER TABLE `bazars`
  MODIFY `bazar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mem_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `member_types`
--
ALTER TABLE `member_types`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
