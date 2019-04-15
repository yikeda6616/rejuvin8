-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 15, 2019 at 04:25 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rejuvin8`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`, `time`) VALUES
(1, 'John Snow', 'test@test.com', '2019-04-12 04:25:42'),
(14, 'asdf', 'test@test.com', '2019-04-12 04:25:42'),
(15, 'asdf', 'test@test.com', '2019-04-12 04:25:42'),
(19, 'sadfas', 'test@test.com', '2019-04-12 04:25:42'),
(23, 'zsasfa', 'zefawe@saf.com', '2019-04-12 04:25:42'),
(28, 'Yaddf', 'test@test.com', '2019-04-12 07:18:24'),
(29, 'dfasd', 'awew2ee@asf.com', '2019-04-12 07:18:40'),
(30, 'asdf', 'test@test.com', '2019-04-12 07:21:42'),
(34, 'asdf', 'test@test.com', '2019-04-12 07:31:04'),
(35, 'hallo', 'hallo@halo.com', '2019-04-15 03:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` mediumint(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `hash`) VALUES
(1, 'drsheila@rejuvin8.com', '$2y$10$tsInHNyvK6B.Qc9pMqqJ2e1pn0NBoV7SRzK.EIADvIoYXYhXGJfky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
