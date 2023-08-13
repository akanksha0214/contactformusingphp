-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 10:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `number` varchar(10) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `subject`, `email`, `message`, `number`, `timestamp`) VALUES
('Akanksha', 'Application', 'Akanksha123@gmail.co', 'Hi', '4789651236', '2023-08-13 13:09:23'),
('Akanksha', 'Application', 'Akanksha123@gmail.co', 'Hi', '4789651236', '2023-08-13 13:11:27'),
('Akanksha', 'Application', 'Akanksha123@gmail.co', 'Hi', '4789651236', '2023-08-13 13:11:32'),
('Akanksha', 'Application', 'Akanksha123@gmail.co', 'Hi', '4789651236', '2023-08-13 13:13:52'),
('Akanksha', 'Application', 'Akanksha123@gmail.co', 'Hi', '4789651236', '2023-08-13 13:13:56'),
('Ak', 'Application', 'Akanksha123@gmail.co', 'Hi', '4789651236', '2023-08-13 13:14:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
