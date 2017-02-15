-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2017 at 10:16 PM
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
  `name` varchar(255) NOT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id`, `name`, `is_valid`, `created_at`, `updated_at`) VALUES
(1, 'glasses', 1, '2017-02-15', '2017-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `Contacts`
--

CREATE TABLE `Contacts` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
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
  `category_id` tinyint(4) NOT NULL,
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
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `main_link1` varchar(255) NOT NULL,
  `main_link2` varchar(255) NOT NULL,
  `main_link3` varchar(255) NOT NULL,
  `home_txt1` varchar(255) NOT NULL,
  `home_txt2` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `rss` varchar(255) NOT NULL,
  `rights` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `title`, `main_link1`, `main_link2`, `main_link3`, `home_txt1`, `home_txt2`, `tel`, `address`, `email`, `fb`, `tw`, `rss`, `rights`) VALUES
(1, 'Tasawouq', 'Login', 'Sign Up', 'Contact', 'Fashions', 'Featured Collections', '002-01097250962', ' Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet cum soluta nobis eleifend cum soluta nobis eleifend option congue nihil option congue nihil doming id quod mazim placerat facer possim assum. Typi non\r\n', 'softeng.anas@gmail.com', 'cis.anas', 'cis.anas', 'cis.anas', 'Tasawouq Shop. All Rights Reserved');

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

--
-- Dumping data for table `Shopping_List`
--

INSERT INTO `Shopping_List` (`id`, `user_id`, `product_id`, `quantity`, `total_price`, `is_valid`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, 120.5, 1, '2017-02-14', '2017-02-14');

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
(2, 'ahmed', 'samir', 'c0cd0ea92bad8b8a6c3a08e6b06a9e495dce8200', '2017-02-01', '', 'ahmed@yahoo.com', 1000, '', '', 0, 0, '2017-02-09 22:00:00', '2017-02-09 22:00:00'),
(14, 'abdallah', 'ghanim', 'c0cd0ea92bad8b8a6c3a08e6b06a9e495dce8200', '1992-03-01', 'softeng', 'abdo@yahoo.com', 123.32, 'manzala', NULL, 0, 1, '2017-02-13 18:09:20', '2017-02-13 18:09:20'),
(15, 'maha', 'elrayis', 'c0cd0ea92bad8b8a6c3a08e6b06a9e495dce8200', '1993-01-01', 'doctor', 'maha@ss.com', 0, 'portsaid', '', 0, 1, '2017-02-14 14:36:37', '2017-02-14 14:36:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Contacts`
--
ALTER TABLE `Contacts`
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
-- Indexes for table `Settings`
--
ALTER TABLE `Settings`
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
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Contacts`
--
ALTER TABLE `Contacts`
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
-- AUTO_INCREMENT for table `Settings`
--
ALTER TABLE `Settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Shopping_List`
--
ALTER TABLE `Shopping_List`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Sub_categories`
--
ALTER TABLE `Sub_categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `con` FOREIGN KEY (`id`) REFERENCES `Categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `Shopping_List`
--
ALTER TABLE `Shopping_List`
  ADD CONSTRAINT `con3` FOREIGN KEY (`id`) REFERENCES `Users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `Sub_categories`
--
ALTER TABLE `Sub_categories`
  ADD CONSTRAINT `co2` FOREIGN KEY (`id`) REFERENCES `Categories` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
