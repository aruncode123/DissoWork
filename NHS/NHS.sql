-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2022 at 05:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NHS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Centers`
--

CREATE TABLE `Centers` (
  `id` int(4) NOT NULL,
  `centerName` varchar(255) NOT NULL,
  `centerLocation` varchar(255) NOT NULL,
  `centerAddress` varchar(256) NOT NULL,
  `centerOpenTime` time(6) NOT NULL,
  `centerCloseTime` time(6) NOT NULL,
  `centerAveragePeople` int(255) NOT NULL,
  `centerStatus` varchar(255) NOT NULL,
  `centerVaccines` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Centers`
--

INSERT INTO `Centers` (`id`, `centerName`, `centerLocation`, `centerAddress`, `centerOpenTime`, `centerCloseTime`, `centerAveragePeople`, `centerStatus`, `centerVaccines`) VALUES
(4, 'St Johns', 'Birmingham', 'Qwerty', '09:00:00.000000', '18:00:00.000000', 23323, 'Busy', 'AstraZeneca,Pfizer,Booster Vaccine,'),
(5, 'Cubbington', 'Leamington Spa', 'Qwerty', '09:00:00.000000', '18:00:00.000000', 879, 'Busy', 'AstraZeneca,Pfizer,'),
(6, 'Stonehill', 'Leamington Spa', 'Qwerty', '07:00:00.000000', '19:00:00.000000', 1234, 'Busy', 'AstraZeneca,Pfizer'),
(8, 'Leeds Vac Centre', 'Leeds', 'Qwert', '09:00:00.000000', '17:00:00.000000', 100, 'Normal', 'AstraZeneca,Pfizer,Booster Vaccine');

-- --------------------------------------------------------

--
-- Table structure for table `FAQ`
--

CREATE TABLE `FAQ` (
  `id` int(4) NOT NULL,
  `username` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `FAQ`
--

INSERT INTO `FAQ` (`id`, `username`, `title`, `comment`) VALUES
(18, 'Lisa Davies', 'Safety', 'Are vaccines safe?');

-- --------------------------------------------------------

--
-- Table structure for table `Locations`
--

CREATE TABLE `Locations` (
  `id` int(4) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Locations`
--

INSERT INTO `Locations` (`id`, `location`) VALUES
(3, 'London'),
(4, 'Birmingham'),
(5, 'Solihull'),
(6, 'Nuneaton'),
(7, 'Leicester'),
(8, 'Coventry'),
(9, 'Leamington Spa'),
(10, 'Warwick');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `id` int(4) NOT NULL,
  `newsTitle` varchar(256) NOT NULL,
  `newsDescription` longtext NOT NULL,
  `newsDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id`, `newsTitle`, `newsDescription`, `newsDate`) VALUES
(2, 'Helllo', 'Testttt', '2022-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `Replies`
--

CREATE TABLE `Replies` (
  `id` int(4) NOT NULL,
  `faqId` int(4) NOT NULL,
  `name` varchar(256) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `is_closed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Replies`
--

INSERT INTO `Replies` (`id`, `faqId`, `name`, `reply`, `is_closed`) VALUES
(8, 18, 'jas', 'Yes they are', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(1, 'usertest', 'user@mail.com', '123321', 1),
(3, 'Jonathan', 'user@mail.com', '123', 0),
(4, 'Lisa Davies', 'lisa@123.com', '123', 0),
(5, 'jas', 'jas.sandher@sky.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Vaccines`
--

CREATE TABLE `Vaccines` (
  `id` int(4) NOT NULL,
  `vaccine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Vaccines`
--

INSERT INTO `Vaccines` (`id`, `vaccine`) VALUES
(3, 'AstraZeneca'),
(4, 'Pfizer'),
(5, 'Booster Vaccine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Centers`
--
ALTER TABLE `Centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Locations`
--
ALTER TABLE `Locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Replies`
--
ALTER TABLE `Replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_FaqId` (`faqId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vaccines`
--
ALTER TABLE `Vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Centers`
--
ALTER TABLE `Centers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `FAQ`
--
ALTER TABLE `FAQ`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Locations`
--
ALTER TABLE `Locations`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Replies`
--
ALTER TABLE `Replies`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Vaccines`
--
ALTER TABLE `Vaccines`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Replies`
--
ALTER TABLE `Replies`
  ADD CONSTRAINT `FK_FaqId` FOREIGN KEY (`faqId`) REFERENCES `FAQ` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
