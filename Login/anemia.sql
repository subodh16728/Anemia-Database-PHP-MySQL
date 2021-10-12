-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 06:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anemia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(19, 'nivesh', 'nivesh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'subodh', 'subodh16728@gmail.com', '2ad4389aaf0ae0ed18a7eb5b759e1167'),
(21, 'Atul', 'atul18542@gmail.com', '367cde6ef1fc3e07ebe63476bb4a6c3f'),
(23, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(24, 'shivam', 'shivam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(25, 'Ritvik', 'ritvik777@gmail.com', '07257fd902307ec72fe84531ddabc9a1');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `name`, `email`, `age`, `disease`, `location`) VALUES
(1, 'Subodh', 'subodh16728@gmail.com', 19, 'Anemia', 'NA'),
(2, 'Atul', 'atul18542@gmail.com', 23, 'Inflammation anemia', 'I have been successfully cured at Mumbai Shantilal Hospital'),
(3, 'shivam', 'shivam@gmail.com', 19, 'Sunskin Anemia', 'NA'),
(4, 'Ritvik', 'ritvik777@gmail.com', 23, 'Hemolytic Anemia', 'Vijayraj Hospital Goregaon, Mumbai ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
