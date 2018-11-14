-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 01:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_test_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(2) DEFAULT NULL COMMENT '1-Admin,0-User',
  `is_active` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `is_active`) VALUES
(19, 'sample', 'error', NULL, 0),
(25, ' test', 'sac', NULL, 0),
(26, ' sample', 'test123', NULL, 0),
(27, ' as', 'asd', NULL, 0),
(28, ' as', 'asd', NULL, 0),
(29, ' sample', 'test123', NULL, 0),
(32, ' viraj', 'error', NULL, 0),
(33, 'qwr', 'sample123', NULL, 0),
(34, ' sample', 'error', NULL, 0),
(35, ' sample', 'error', NULL, 0),
(36, ' test', 'malekar', NULL, 0),
(37, ' 1', '2', NULL, 0),
(38, ' 1', '2', NULL, 0),
(39, ' 1234', '321', NULL, 0),
(40, ' 1234', '321', NULL, 0),
(41, ' 1234', '321', NULL, 0),
(42, ' 1234', '321', NULL, 0),
(44, ' ww', 'eeee', 1, 0),
(45, ' this is sample name ', 'qwerty', 0, 0),
(46, 'ert', 'sdf', 0, 0),
(48, ' sample', 'error', 0, 0),
(49, ' sample', 'error', 0, 0),
(50, ' sample', 'error', 0, 0),
(51, 'sample', 'test123', 0, 0),
(52, 'sample', 'sac', 0, 0),
(53, 'viraj@gmail.com', 'error', 0, 0),
(54, '', 'error', 1, 0),
(55, 'test', 'error', 0, 0),
(56, ' sample', 'test123', 1, 0),
(57, ' ', '', 0, 0),
(58, ' sdcas', 'sadasd', 0, 0),
(59, ' sample', 'error', 1, 0),
(60, ' sample', 'error', 1, 0),
(61, ' sample', 'error', 0, 0),
(62, ' sample', 'error', 0, 0),
(63, ' sacas', 'sacas', 0, 0),
(64, ' sacas', 'sacas', 0, 0),
(65, ' sacas123', 'sacas123', 0, 1),
(66, ' ASCSACA@SDVS', 'QDVSDSVDSV', 1, 1),
(67, ' ASCSACA@SDVS', 'QDVSDSVDSV', 1, 1),
(68, ' ASCSACA@SDVS', 'QDVSDSVDSV', 1, 1),
(69, ' sample@gmail.com', '123456', 1, 1),
(70, '', '123', NULL, 0),
(72, '123', '123', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
