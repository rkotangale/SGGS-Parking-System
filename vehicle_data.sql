-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 02:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sggs_parking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_data`
--

CREATE TABLE `vehicle_data` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `vnumber` varchar(30) NOT NULL,
  `entry` datetime NOT NULL,
  `exit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_data`
--

INSERT INTO `vehicle_data` (`ID`, `name`, `vname`, `vnumber`, `entry`, `exit`) VALUES
(3, 'Sanskruti Sawalkar', 'Activa 6G', 'MH 26 Y 5523', '2021-11-18 00:00:00', '2021-11-19 00:00:00'),
(4, 'Snehal Deshpande', 'Jupiter', 'MH 26 U 5524', '2021-11-21 00:00:00', '2021-11-21 00:00:00'),
(5, 'Rajat Kotangale', 'Yamaha MT15', 'MH 35 RK 8888', '2021-11-22 00:00:00', '2021-11-22 00:00:00'),
(6, 'Pranit Ramteke', 'Apache RTR 200', 'MH 49 AZ 4597', '2021-01-22 00:00:00', '2021-02-22 00:00:00'),
(7, 'Rushikesh Meshram', 'Suzuki Gixxer', 'MH 36 AZ 5656', '2021-11-25 00:00:00', '2021-11-25 00:00:00'),
(9, 'Parikshit Patil', 'Apache RTR 200', 'MH 26 Y 5523', '2021-11-23 00:00:00', '2021-11-23 00:00:00'),
(10, 'Aayush Madavi', 'Pulsur 200RS', 'MH 49 AZ 5588', '2021-11-25 00:00:00', '2021-11-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicle_data`
--
ALTER TABLE `vehicle_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle_data`
--
ALTER TABLE `vehicle_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
