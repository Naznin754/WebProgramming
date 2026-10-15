-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2026 at 03:19 PM
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
-- Database: `uiuweb_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_final`
--

CREATE TABLE `student_final` (
  `StudentID` int(10) NOT NULL,
  `StudentName` varchar(20) NOT NULL,
  `CourseID` int(10) NOT NULL,
  `CourseTitle` varchar(20) NOT NULL,
  `Grade` int(10) NOT NULL,
  `LetterGrade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_final`
--

INSERT INTO `student_final` (`StudentID`, `StudentName`, `CourseID`, `CourseTitle`, `Grade`, `LetterGrade`) VALUES
(1, 'Karim Uddin ', 101, 'Web Programming ', 85, 'B'),
(2, 'Rahim Ahmed ', 101, 'Web Programming ', 92, 'A'),
(3, 'Jashim Hossain ', 102, 'Project Management', 78, 'C'),
(4, 'Jasica Ahmed ', 101, 'Web Programming', 65, 'D'),
(5, 'Faria Karim', 102, 'Project Management', 95, 'A'),
(6, 'Niassoh Dihan ', 103, 'System Analysis and ', 80, 'B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
