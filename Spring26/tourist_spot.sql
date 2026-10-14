-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2026 at 08:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourist_spot`
--

CREATE TABLE `tourist_spot` (
  `SpotID` int(50) NOT NULL,
  `SpotName` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Rating` double NOT NULL,
  `EntryFee` int(100) NOT NULL,
  `VisitorPerYear` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourist_spot`
--

INSERT INTO `tourist_spot` (`SpotID`, `SpotName`, `Region`, `Category`, `Rating`, `EntryFee`, `VisitorPerYear`) VALUES
(1, 'Cox\'s Bazar beach', 'CTG', 'beach', 4.9, 0, 150000),
(2, 'Sundarbans Forest', 'KHL', 'nature', 4.3, 150, 80000),
(3, 'Ratargul forest', 'SYL', 'nature', 4.8, 100, 60000),
(4, 'Kuakata beach', 'PTU', 'beach', 4.5, 0, 90000),
(5, 'shat gambuj mosque', 'BGH', 'heritage', 4.7, 30, 70000),
(6, 'paharpur', 'NWG', 'heritage', 4.1, 30, 40000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
