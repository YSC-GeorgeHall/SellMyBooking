-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 10:13 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sell_my_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `UID` int(255) NOT NULL,
  `id` int(11) NOT NULL,
  `listing_name` varchar(255) DEFAULT NULL,
  `departure_date` varchar(255) NOT NULL,
  `booking_cost` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `infants` int(11) NOT NULL,
  `bkgconfirmation` longblob NOT NULL,
  `user_image` longblob NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `listing_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`UID`, `id`, `listing_name`, `departure_date`, `booking_cost`, `adults`, `children`, `infants`, `bkgconfirmation`, `user_image`, `website_url`, `listing_status`) VALUES
(26, 1, 'george', '2022-12-31', '5000', 1, 1, 0, 0x4d657263656465732d42656e7a205479726520616e6420416c6c6f7920496e737572616e63655f436c61696d20666f726d5f4d6172636820323031392e706466, '', '', ''),
(27, 1, 'Maldives', '2020-10-29', '1000', 1, 1, 1, 0x4d657263656465732d42656e7a205479726520616e6420416c6c6f7920496e737572616e63655f436c61696d20666f726d5f4d6172636820323031392e706466, '', '', ''),
(28, 1, 'https://www.freeformatter.com/html-formatter.html', '2022-12-31', '5000', 1, 1, 0, 0x4d657263656465732d42656e7a205479726520616e6420416c6c6f7920496e737572616e63655f436c61696d20666f726d5f4d6172636820323031392e706466, '', '', ''),
(29, 1, 'St Lucia', '2023-05-25', '1000', 2, 1, 1, 0x6865726f2e6a7067, '', 'https://www.freeformatter.com/html-formatter.html', ''),
(30, 1, 'Ireland', '2022-12-25', '100', 1, 1, 1, 0x47656f7267652048616c6c2e646f6378, 0x534d422e6a7067, 'https://www.freeformatter.com/html-formatter.html', ''),
(31, 1, 'Ireland', '2022-12-25', '100', 1, 1, 1, 0x47656f7267652048616c6c2e646f6378, 0x534d422e6a7067, 'https://www.freeformatter.com/html-formatter.html', 'approved'),
(32, 1, 'george', '2022-10-21', '14141', 1, 1, 1, '', '', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'georgeehall', '$2y$10$0KMjccZcg5DxfVqcMV3p8.FjAj46ejbmfFNLKdxK2tX2ezDBWdHJ6', '2022-10-03 11:00:05'),
(2, 'kasey', '$2y$10$rGnvErJ9ckKMqPgXoaMUNesawvSUrZaV9iieOgwwG/8iXmMpE9UFO', '2022-10-05 15:01:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `UID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
