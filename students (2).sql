-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2026 at 10:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l4sod`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `course`) VALUES
(1, 'Cliff ', 'cliffivan02@gmail.com', '', 'DJANGO'),
(3, 'treezzy', 'trezzy@gmail.com', '', 'PYTHON'),
(5, 'cedrick', 'cedrick@gmail.com', '', 'REACT'),
(9, 'Cliff ivan', 'cliffivan02@gmail.com', '$2y$10$mDKRmvsjUDeuU', 'PHP'),
(11, 'Ian', 'Ian@gmail.com', '$2y$10$2sF9bSK3CZo5S', 'PYTHON'),
(12, 'Cliff ivan', 'cliffivan02@gmail.com', '$2y$10$4P/ogFF0WzBs6', 'DJANGO'),
(13, 'Cliff ivan', 'cliffivan02@gmail.com', '$2y$10$Rzc4X8l3qoIov', 'DJANGO'),
(14, 'Cliff ivan', 'cliffivan02@gmail.com', '$2y$10$2NuoF81F1omUZ', 'DJANGO'),
(15, 'calvin', 'calvin@gmail.com', '$2y$10$cXR8/seApcNt/', 'REACT'),
(16, 'card-b', 'card@gmail.com', '$2y$10$NvKKyrNcivIB7', 'REACT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
