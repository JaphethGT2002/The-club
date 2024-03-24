-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 08:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsenal`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsenal_fans`
--

CREATE TABLE `arsenal_fans` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cv` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arsenal_fans`
--

INSERT INTO `arsenal_fans` (`id`, `name`, `email`, `phone_number`, `password`, `cv`) VALUES
(1, 'Japheth', 'japheth984@gmail.com', 782041621, '12345', ''),
(4, 'Rene', 'bruceiradukunda3@gmail.com', 781543226, '09876', ''),
(7, 'Bingwa', 'bingwaf@gmail.com', 781078794, 'fred', ''),
(11, 'Bingwa', 'bingwaf@gmail.com', 781078794, 'fred', ''),
(12, 'Bingwa', 'bingwaf@gmail.com', 781078794, 'fred', ''),
(13, 'Bingwa', 'bingwaf@gmail.com', 781078794, 'fred', ''),
(14, 'hgc', 'bingwaf@gmail.com', 782041621, 'u54567', ''),
(15, 'Afande', 'bruceiradukunda3@gmail.com', 782041621, '7654', 0x696e737572616e63652067726f75702e646f6378);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsenal_fans`
--
ALTER TABLE `arsenal_fans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsenal_fans`
--
ALTER TABLE `arsenal_fans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
