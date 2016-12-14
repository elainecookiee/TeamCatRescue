-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2016 at 04:31 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cats`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_message`
--

CREATE TABLE `appointment_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_message`
--

INSERT INTO `appointment_message` (`id`, `name`, `email`, `phone`, `date`, `time`) VALUES
(1, 'test', 'test@address.com', '123456789', '2016-12-01', '11:00:00'),
(3, 'A', 'hjas@hoymail.com', '2147483647', '2016-12-09', '13:59:00'),
(4, 'cccc', 'eeee', '444', '2016-12-31', '12:59:00'),
(8, 'asx', 'asd', 'asd1131', '2010-02-02', '23:22:00'),
(9, 'dd', 'f@', 'fd', '0000-00-00', '05:58:00'),
(10, 'fs', 'sf@', 're', '0000-00-00', '03:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `bid` int(11) NOT NULL,
  `breed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`bid`, `breed`) VALUES
(1, 'Domestic Short Hair'),
(2, 'Domestic Medium Hair'),
(3, 'Domestic Long Hair'),
(4, 'Burmese'),
(5, 'Ragamuffin'),
(6, 'Chartreux'),
(7, 'Scottish Fold'),
(8, 'Persian'),
(9, 'Siberian'),
(10, 'Bombay');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bid` int(4) NOT NULL,
  `age` varchar(6) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(20) NOT NULL,
  `html` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `bid`, `age`, `gender`, `image`, `html`) VALUES
(1, 'Ariel', 1, 'Elder', 'Female', 'Ariel2.jpg', 'individual_Ariel.php'),
(2, 'Wiwa', 3, 'Elder', 'Male', 'Wiwa2.jpg', 'individual_Wiwa.php'),
(3, 'Leo', 1, 'Adult', 'Male', 'Leo2.jpg', 'individual_Leo.php'),
(4, 'Socks', 4, 'Adult', 'Female', 'Socks2.jpg', 'individual_Socks.php'),
(5, 'Toast', 5, 'Young', 'Male', 'Toast2.jpg', 'individual_Toast.php'),
(6, 'Momo', 6, 'Adult', 'Female', 'Momo2.jpg', 'individual_Momo.php'),
(7, 'Matsu', 8, 'Adult', 'Male', 'Matsu2.jpg', 'individual_Matsu.php'),
(8, 'Wanda', 2, 'Adult', 'Female', 'Wanda2.jpg', 'individual_Wanda.php'),
(9, 'Donaldson', 1, 'Adult', 'Male', 'Donaldson2.jpg', 'individual_Donaldson.php'),
(10, 'Wigglebutt', 7, 'Kitten', 'Female', 'Wigglebutt2.jpg', 'individual_Wigglebutt.php'),
(11, 'Kitkat', 9, 'Adult', 'Male', 'Kitkat2.jpg', 'individual_Kitkat.php'),
(12, 'Fluffy Meowington', 10, 'Kitten', 'Male', 'Meowington2.jpg', 'individual_Fluffymeowington.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_message`
--
ALTER TABLE `appointment_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_message`
--
ALTER TABLE `appointment_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
