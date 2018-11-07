-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 04:37 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` int(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `created`, `modified`) VALUES
(28, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 2, 1089, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 2, 445, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 2, 1139, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 2, 644, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 2, 1039, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 2, 445, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 2, 445, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 2, 1039, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 2, 1039, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 2, 1039, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 2, 495, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 2, 495, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(44, 28, 'ftee1', 1),
(45, 28, 'htee1', 1),
(46, 28, 'htee2', 1),
(47, 28, 'htee1', 1),
(48, 28, 'htee5', 1),
(49, 28, 'htee5', 1),
(50, 28, 'ftee1', 1),
(51, 28, 'htee3', 1),
(52, 28, 'htee3', 1),
(53, 28, 'htee3', 1),
(54, 28, 'htee4', 2),
(55, 28, 'htee1', 1),
(56, 28, 'htee4', 1),
(57, 28, 'htee1', 1),
(58, 28, 'htee4', 1),
(59, 28, 'htee1', 1),
(60, 28, 'htee1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` varchar(10) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcost` int(20) NOT NULL,
  `pqty` int(10) NOT NULL,
  `pimg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pcost`, `pqty`, `pimg`) VALUES
('ftee1', 'Bad Trip', 545, 7, 'ftee1.jpg'),
('ftee2', 'Classic Maroon/White Sports Trim', 595, 7, 'ftee2.jpg'),
('ftee3', 'High Dude (Navy Blue)', 545, 7, 'ftee3.jpg'),
('ftee4', 'War Machine Halftone (AVL)', 645, 7, 'ftee4.jpg'),
('ftee5', 'Moksha (Full)', 555, 7, 'ftee5.jpg'),
('ftee6', 'White/Jet Black Sport Trim', 545, 7, 'ftee6.jpg'),
('htee1', 'Moksha', 495, 6, 'htee1.jpg'),
('htee10', 'Interstellar Superman (GID) (SL)', 495, 9, 'htee10.jpg'),
('htee11', 'Psy', 546, 7, 'htee11.jpg'),
('htee12', 'Flash Logo (Bold Red) (DCL)', 546, 10, 'htee12.jpg'),
('htee13', 'Acid', 445, 5, 'htee13.jpg'),
('htee14', 'Captain America Halftone (AVL)', 545, 10, 'htee14.jpg'),
('htee15', 'Superman (SL)', 495, 5, 'htee15.jpg'),
('htee16', 'Spiderman (SPL)', 545, 10, 'htee16.jpg'),
('htee2', 'Chiller Baba', 445, 4, 'htee2.jpg'),
('htee3', 'Outside The Box', 445, 4, 'htee3.jpg'),
('htee4', 'FHM LA', 495, 5, 'htee4.jpg'),
('htee5', 'Halftone Batman', 595, 7, 'htee5.jpg'),
('htee6', 'Metallic Iron Man', 546, 10, 'htee6.jpg'),
('htee7', 'Mountains (Reggae Colours)', 445, 6, 'htee7.jpg'),
('htee8', 'Minimal Cycle', 495, 6, 'htee8.jpg'),
('htee9', 'Ninja Chop', 445, 8, 'htee9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `password`, `name`, `address`, `phone`, `active`) VALUES
(1, 'ankit', 'ankit@gmail.com', '447d2c8dc25efbc493788a322f1a00e7', '', '', '', 0),
(2, 'pappu', 'p@p.com', 'f5a890783b08320466a653dc584d0215', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `Foreign Key` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pname` (`pname`),
  ADD UNIQUE KEY `pimg` (`pimg`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
