-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 02:09 PM
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
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_form`
--

CREATE TABLE `booking_form` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Departure_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `Number_of_Adults` int(50) NOT NULL,
  `Number_of_Children` int(50) NOT NULL,
  `Additional_Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_form`
--

INSERT INTO `booking_form` (`Name`, `Email`, `Phone`, `Destination`, `Departure_Date`, `Return_Date`, `Number_of_Adults`, `Number_of_Children`, `Additional_Message`) VALUES
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message'),
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message'),
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message'),
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message'),
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message'),
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message'),
('name', 'email', 'phone', 'destination', '0000-00-00', '0000-00-00', 0, 0, 'message');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
