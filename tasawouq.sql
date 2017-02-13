-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2017 at 08:43 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasawouq`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `id` tinyint(4) NOT NULL,
  `product_id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Interests`
--

CREATE TABLE `Interests` (
  `id` tinyint(4) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` tinyint(4) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `in_stock` tinyint(1) NOT NULL DEFAULT '1',
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `reviews` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `help` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `is_valid` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Shopping_List`
--

CREATE TABLE `Shopping_List` (
  `id` tinyint(4) NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `product_id` tinyint(4) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `total_price` float NOT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Sub_categories`
--

CREATE TABLE `Sub_categories` (
  `id` tinyint(4) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` tinyint(4) NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `credit_limit` float DEFAULT NULL,
  `address` text,
  `interests` text,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_valid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `fname`, `lname`, `password`, `birthday`, `job`, `email`, `credit_limit`, `address`, `interests`, `is_admin`, `is_valid`, `created_at`, `updated_at`) VALUES
(1, 'anas', 'hossam', '72019bbac0b3dac88beac9ddfef0ca808919104f', '1992-03-17', '', 'admin@tasawouq.com', 1000, '', '', 1, 1, '2017-02-07 22:00:00', '2017-02-07 22:00:00'),
(2, 'ahmed', 'samir', '72019bbac0b3dac88beac9ddfef0ca808919104f', '2017-02-01', '', 'ahmed@yahoo.com', 1000, '', '', 0, 0, '2017-02-09 22:00:00', '2017-02-09 22:00:00'),
(14, 'abdallah', 'ghanim', '72019bbac0b3dac88beac9ddfef0ca808919104f', '1992-03-01', 'softeng', 'abdo@yahoo.com', 123.32, 'manzala', NULL, 0, 1, '2017-02-13 18:09:20', '2017-02-13 18:09:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Interests`
--
ALTER TABLE `Interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Shopping_List`
--
ALTER TABLE `Shopping_List`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sub_categories`
--
ALTER TABLE `Sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Interests`
--
ALTER TABLE `Interests`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Shopping_List`
--
ALTER TABLE `Shopping_List`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Sub_categories`
--
ALTER TABLE `Sub_categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
