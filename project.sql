-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 12:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(10) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `mname`, `mimage`) VALUES
(1, 'Hot Beverages', 'images/hotBeverage.png'),
(2, 'VEG PIZZA', 'images/vegpizza.jpg'),
(3, 'NON VEG PIZZA', 'images/nonvegpizza.jpg'),
(4, 'South Indian', 'images/south-indian.jpg'),
(5, 'Ice Cream', 'images/IceCream.jpg'),
(6, 'Starters', 'images/Starters.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` smallint(50) NOT NULL,
  `oldprice` int(10) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `mid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `price`, `oldprice`, `pimage`, `mid`) VALUES
(1, 'Special Coffee', 40, 60, 'products/SignatureCoffee.jpg', 1),
(2, 'Special Tea', 40, 50, 'products/specialtea.jpg', 1),
(3, 'Standard Milk', 40, 50, 'products/standardmilk.jpg', 1),
(4, 'Horlicks', 50, 55, 'products/Horlicks.jpg', 1),
(5, 'Bournvita', 50, 55, 'products/Bournvita.jpg', 1),
(6, 'Margherita', 220, 250, 'products/Margherita.jpg', 2),
(7, 'Double Cheese Margherita', 300, 360, 'products/Double_Cheese_Margherita.jpg', 2),
(8, 'Pepper Barbeque', 400, 450, 'products/Pepper_Barbeque.jpg', 3),
(9, 'CHICKEN FIESTA', 370, 420, 'products/chunky-chicken.png', 3),
(10, 'Indi Chicken Tikka', 480, 500, 'products/IndianChickenTikka.jpg', 3),
(11, 'Chicken Dominator', 550, 580, 'products/Dominator.jpg', 3),
(12, 'Chicken Sausage', 490, 530, 'products/Chicken_Sausage.jpg', 3),
(13, 'Chicken Golden Delight', 550, 620, 'products/Chicken_Golden_Delight.jpg', 3),
(14, 'Non-Veg Supreme', 520, 600, 'products/Non-Veg_Supreme.jpg', 3),
(15, 'Farm House', 430, 480, 'products/Farmhouse.jpg', 2),
(16, 'Peppy Paneer', 450, 500, 'products/Peppy_Paneer.jpg', 2),
(17, 'Rice Idli', 65, 81, 'products/riceidli.jpg', 4),
(18, 'Sambhar Vada', 80, 85, 'products/SambharVada.jpg', 4),
(19, 'Butter Plain Dosa', 125, 140, 'products/Butter-plain-dosa.jpg', 4),
(20, 'Sambhar Rice', 132, 150, 'products/sambharrice.jpg', 4),
(21, 'Onion Uttapam', 140, 155, 'products/onion-uthappam.jpg', 4),
(22, 'Vanilla', 128, 130, 'products/vanilla.jpg', 5),
(23, 'Spring Roll', 145, 150, 'products/SpringRoll.jpg', 6),
(24, 'Chilly Paneer Dry', 195, 205, 'products/ChillyPaneerDry.jpg ', 6),
(25, 'Veg Manchurian Dry ', 153, 160, 'products/VegManchurianDry.jpg ', 6),
(26, 'Chilly Mushroom Dry', 193, 200, 'products/ChillyMushroomDry.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `queryId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `request` varchar(100) NOT NULL,
  `query_time` timestamp(1) NOT NULL DEFAULT current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`queryId`, `name`, `email`, `mobile`, `request`, `query_time`) VALUES
(3, 'HARSH KUMAR', 'kumarharsh8549@gmail.com', '', 'oirjdfjsldkfjlj lewjfkljd', '2020-04-23 17:42:59.9'),
(4, 'HARSH KUMAR', 'kumarharsh8549@gmail.com', '', 'oirjglkwjdsklfjaewslkjlk jljewlkj', '2020-04-23 17:45:02.8'),
(5, 'HARSH KUMAR', 'kumarharsh8549@gmail.com', '', 'ewihflkwsflkewjilwjlkjlklk lrjegljk', '2020-04-23 17:46:03.5'),
(6, 'HARSH KUMAR', 'kumarharsh8549@gmail.com', '', 'kdjfldjsflkdsjalkj lsjdfslkajlk', '2020-04-23 17:46:39.5');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `reg_date` datetime(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `fname`, `lname`, `email_id`, `password`, `mobile`, `dob`, `gender`, `reg_date`) VALUES
(7, 'avyjgfj', 'kugkkj', 'kjhklh@gmail.com', '25f9e794323b453885f5181f1b624d0b', '7848991510', '1998-02-04', 'male', '2020-04-19 00:59:02.02610'),
(8, 'Harsh', 'Kumar', 'kumarharsh8549@gmail.com', '25f9e794323b453885f5181f1b624d0b', '7004899150', '1997-05-05', 'Male', '2020-04-19 01:00:50.08643');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`queryId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `queryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `menu` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
