-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 07:52 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calorie_updater`
--

-- --------------------------------------------------------

--
-- Table structure for table `calcount`
--

CREATE TABLE `calcount` (
  `user_id` int(10) NOT NULL,
  `cal_limit` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dieticians`
--

CREATE TABLE `dieticians` (
  `doct_id` int(10) NOT NULL,
  `dietician_name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dieticians`
--

INSERT INTO `dieticians` (`doct_id`, `dietician_name`, `phone`) VALUES
(1, 'Mira', '1-764-301-5715'),
(2, 'Tashya', '1-859-698-5435'),
(3, 'Lillith', '368-1277');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foodcal`
--

CREATE TABLE `foodcal` (
  `id` int(10) NOT NULL,
  `food` varchar(20) NOT NULL,
  `calories` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodcal`
--

INSERT INTO `foodcal` (`id`, `food`, `calories`) VALUES
(1, 'Idli', 112),
(2, 'Dosa', 106),
(3, 'Vada', 190),
(4, 'Upma', 222),
(5, 'Salad', 9),
(6, 'Rice', 200),
(7, 'Roti', 106),
(11, 'Soup', 70),
(10, 'Tea', 23),
(8, 'Coffee', 30),
(9, 'Noodles', 219);

-- --------------------------------------------------------

--
-- Table structure for table `logged_in users`
--

CREATE TABLE `logged_in users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logged_in users`
--

INSERT INTO `logged_in users` (`user_id`, `username`, `password`) VALUES
(2, 'Idona', 'dc513ea4fbdaa7a14786ffdebc4ef64e'),
(1, 'Garrette', 'b4b147bc522828731f1a016bfa72c073');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `firstname` varchar(10) DEFAULT NULL,
  `lastname` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `username`, `email`, `password`, `trn_date`, `age`, `weight`, `height`, `gender`, `firstname`, `lastname`) VALUES
(1, 'Garrette', 'venenatis@nibhPhasellusnulla.com', 'b4b147bc522828731f1a016bfa72c073', '2018-08-08 19:01:33', 40, 65, 175, 'male', 'Garrett', 'Doe'),
(2, 'Idona', 'nisl.sem.consequat@aliquamenimnec.net', 'dc513ea4fbdaa7a14786ffdebc4ef64e', '2018-08-08 19:32:15', 30, 75, 155, 'female', 'Idona', 'Tanner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calcount`
--
ALTER TABLE `calcount`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `dieticians`
--
ALTER TABLE `dieticians`
  ADD PRIMARY KEY (`doct_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `foodcal`
--
ALTER TABLE `foodcal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logged_in users`
--
ALTER TABLE `logged_in users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calcount`
--
ALTER TABLE `calcount`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dieticians`
--
ALTER TABLE `dieticians`
  MODIFY `doct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foodcal`
--
ALTER TABLE `foodcal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `logged_in users`
--
ALTER TABLE `logged_in users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
