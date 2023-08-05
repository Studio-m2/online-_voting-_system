-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 10:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `fullname`, `phone`, `email`, `password`, `image`, `role`, `status`, `vote`) VALUES
(54, 'Plmn', '0232-4343435', 'bm@gmail.com', '202cb962ac59075b964b07152d234b70', 'laptop.jpg', 'Group', 0, 7),
(74, 'anabia', '0323-3434543', 'anabia@gmail.com', '4124bc0a9335c27f086f24ba207a4912', 'vdc.jpg', 'Voter', 1, 0),
(77, 'saima', '0343-3434354', 'saima@gmail.com', 'eab71244afb687f16d8c4f5ee9d6ef0e', 'vdc.jpg', 'Voter', 1, 0),
(80, 'nadia', '03433434564', 'nadiamalik12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'mobilelist.jpg', 'Voter', 1, 0),
(81, 'sania', '0333-5656864', 'sania@gmail.com', '202cb962ac59075b964b07152d234b70', 'iconlaptopscreen.jpg', 'Voter', 1, 0),
(82, 'nadia', '0334-4545656', 'nadia12@gmailcom', '202cb962ac59075b964b07152d234b70', 'iconwithmobile.jpg', 'Voter', 1, 0),
(83, 'sara', '0332-3454567', 'sara@gmail.com', '202cb962ac59075b964b07152d234b70', 'hand bag.jpg', 'Voter', 1, 0),
(84, 'Labaik', '0324-3456765', 'Tehrik Labaik@gmail.com', '202cb962ac59075b964b07152d234b70', 'landing page.jpg', 'Group', 0, 1),
(87, 'maryam', '0334-2345456', 'maryam12@gmail.com', '202cb962ac59075b964b07152d234b70', 'hand bag.jpg', 'Voter', 1, 0),
(88, 'Naina', '0332-4545345', 'naina3312@gmail.com', '202cb962ac59075b964b07152d234b70', 'hand bag.jpg', 'Voter', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
