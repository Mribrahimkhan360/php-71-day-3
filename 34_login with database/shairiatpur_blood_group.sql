-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 03:35 PM
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
-- Database: `shairiatpur_blood_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `fname`, `lname`, `email`, `username`, `img`, `password`, `upload_date`) VALUES
(11, 'Mojlish', 'Khan', 'mojlishkhan.business@gmail.com', 'business.store.234', '', 'business.mojlish@gmail.com', '2024-09-14 10:37:52'),
(12, 'Theresa', ' Hawthorne', 'TheresaDHawthorne@teleworm.us', 'theresa.teleworm.us', '', 'theresa@4Hawthorne', '2024-09-14 10:37:52'),
(13, 'Tamanna', 'Khan', 'tamanna.zhsust.law@gmail.com', 'tamanna.zhsust.law', '', 'tamanna.law.KHAN.123', '2024-09-14 10:37:52'),
(16, 'Ibrahim', 'Khan', 'mribrahimkhan3600@gmail.com', 'Ibrahim@gmail.com', '', 'Ibrahim@gmail.com', '2024-09-14 11:04:46'),
(23, 'Roton', 'Kzai', 'pust.roton@yahoo.com', 'pust.roton', '66e5ad56aad45.jpg', 'pust.roton123', '2024-09-14 15:35:50'),
(24, 'Khalid', 'Hossain', 'A_F_M_Khalid_Hossain@gmail.com', 'KhalidHossain123', '', 'Khalid_Hossain@#', '2024-09-19 05:19:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
