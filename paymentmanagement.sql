-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 03:57 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `price`, `amount`, `status`, `date_at`) VALUES
(1, 'Rental House Bill', 48000, 2, 'Evening', '2019-03-19 16:52:24'),
(2, 'Foods ', 4000, 1, 'Afternoon', '2019-03-19 16:52:24'),
(3, 'Study Materials', 20000, 3, 'Morning', '2019-03-19 16:52:24'),
(4, 'Cleaning Materials', 15000, 5, 'Morning', '2019-03-19 16:52:24'),
(5, 'Dinner', 20000, 1, 'Evening', '2019-03-19 17:17:01'),
(6, 'Phone Card', 4000, 1, 'afternoon', '2019-03-19 17:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `students_category`
--

CREATE TABLE `students_category` (
  `stuCat_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `stuid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_category`
--

INSERT INTO `students_category` (`stuCat_id`, `cat_id`, `stuid`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 4, 2),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `stu_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`stu_id`, `username`, `email`, `gender`, `batch`, `phone`) VALUES
(1, 'Bunsin', 'bunsinnanh22@gmail.com', 'Male', 'WEP 2019', 979290546),
(2, 'Kosorl ', 'kosorl@gmail.com', 'Male', 'WEP 2019', 986767674);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(11) NOT NULL,
  `studentid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `studentid`) VALUES
(1, 'Bunsin', '123', 1),
(2, 'Chanmohakosorl', '1234', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `students_category`
--
ALTER TABLE `students_category`
  ADD PRIMARY KEY (`stuCat_id`),
  ADD KEY `catID` (`cat_id`),
  ADD KEY `stuID` (`stuid`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `stu_id` (`stu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `studentIdFK` (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_category`
--
ALTER TABLE `students_category`
  MODIFY `stuCat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students_category`
--
ALTER TABLE `students_category`
  ADD CONSTRAINT `catID` FOREIGN KEY (`cat_id`) REFERENCES `category` (`catid`),
  ADD CONSTRAINT `stuID` FOREIGN KEY (`stuid`) REFERENCES `tblstudents` (`stu_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `studentIdFK` FOREIGN KEY (`studentid`) REFERENCES `tblstudents` (`stu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
