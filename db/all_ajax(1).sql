-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 08:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `user_name`, `password`) VALUES
(11, 'Naim Howlader', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `usertable_5`
--

CREATE TABLE `usertable_5` (
  `id` int(11) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `food_des` varchar(200) NOT NULL,
  `food_prize` varchar(200) NOT NULL,
  `food_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable_5`
--

INSERT INTO `usertable_5` (`id`, `food_name`, `food_des`, `food_prize`, `food_img`) VALUES
(4, 'Burger', 'Naga Burger', '300 TK', '166028464062f5eee008f5c.png'),
(5, 'Pizza', 'Cheesy Pizza', '750 TK', '166028467662f5ef04e0537.png'),
(6, 'Chicken grill', 'Yummy and spicy ', '100 Tk (1 pec)', '166028475562f5ef539b1ae.png'),
(7, 'Sandwich', 'Cheesy sandwich', '120 TK', '166028478662f5ef726a83e.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable_5`
--
ALTER TABLE `usertable_5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usertable_5`
--
ALTER TABLE `usertable_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
