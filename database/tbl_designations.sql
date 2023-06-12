-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 08:27 AM
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
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `basic` double(8,2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_designations`
--

INSERT INTO `tbl_designations` (`id`, `designation`, `basic`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Junior Software Engineer', 17000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(2, 'Junior Web Developer', 17000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(3, 'Junior UI/UX Designer', 17000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(4, 'Junior Database Administrator', 17000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(5, 'Software Engineer', 20000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(6, 'Web Developer', 20000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(7, 'UI/UX Designer', 20000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(8, 'Database Administrator', 20000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(9, 'Senior Software Engineer', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(10, 'Senior Web Developer', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(11, 'Senior UI/UX Designer', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(12, 'Senior Database Administrator', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(13, 'Officer', 15000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(14, 'Executive', 18000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(15, 'Senior Executive', 20000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(16, 'Administrative Assistant', 15000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(17, 'System Administrator', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(18, 'Quality Assurance Tester', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(19, 'Project Manager', 28750.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(20, 'Team Leader', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(21, 'Business Analyst', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(22, 'Data Analyst', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(23, 'Data Scientist', 22000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(24, 'Data Engineer', 22000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(25, 'Database Designer', 20000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(26, 'Assistant Manager', 30000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(27, 'Junior Web Designer', 17000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(28, 'Senior Web Designer', 25000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(29, 'Intern', 8000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(30, 'Senior Officer', 17000.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(31, 'Senior Executive', 0.00, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '2023-06-12 07:12:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
