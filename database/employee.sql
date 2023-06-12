-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 03:00 AM
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
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `att_date` date NOT NULL,
  `att_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 Absent,1 Present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `employee_id`, `att_date`, `att_status`) VALUES
(1, 1, '2023-06-12', 1),
(2, 2, '2023-06-12', 1),
(3, 3, '2023-06-12', 1),
(4, 4, '2023-06-12', 1),
(5, 5, '2023-06-12', 1),
(6, 6, '2023-06-12', 1),
(7, 7, '2023-06-12', 1),
(8, 8, '2023-06-12', 1),
(9, 9, '2023-06-12', 1),
(10, 10, '2023-06-12', 0),
(11, 11, '2023-06-12', 1),
(12, 12, '2023-06-12', 1),
(13, 13, '2023-06-12', 1),
(14, 14, '2023-06-12', 1),
(15, 15, '2023-06-12', 1),
(16, 16, '2023-06-12', 1),
(17, 17, '2023-06-12', 1),
(18, 18, '2023-06-12', 1),
(19, 19, '2023-06-12', 1),
(20, 20, '2023-06-12', 1),
(21, 21, '2023-06-12', 1),
(22, 22, '2023-06-12', 1),
(23, 23, '2023-06-12', 1),
(24, 24, '2023-06-12', 1),
(25, 25, '2023-06-12', 0),
(26, 26, '2023-06-12', 1),
(27, 27, '2023-06-12', 0),
(28, 1, '2023-06-11', 1),
(29, 2, '2023-06-11', 1),
(30, 3, '2023-06-11', 1),
(31, 4, '2023-06-11', 1),
(32, 5, '2023-06-11', 1),
(33, 6, '2023-06-11', 1),
(34, 7, '2023-06-11', 1),
(35, 8, '2023-06-11', 1),
(36, 9, '2023-06-11', 1),
(37, 10, '2023-06-11', 0),
(38, 11, '2023-06-11', 1),
(39, 12, '2023-06-11', 1),
(40, 13, '2023-06-11', 1),
(41, 14, '2023-06-11', 1),
(42, 15, '2023-06-11', 1),
(43, 16, '2023-06-11', 1),
(44, 17, '2023-06-11', 1),
(45, 18, '2023-06-11', 1),
(46, 19, '2023-06-11', 1),
(47, 20, '2023-06-11', 1),
(48, 21, '2023-06-11', 1),
(49, 22, '2023-06-11', 1),
(50, 23, '2023-06-11', 0),
(51, 24, '2023-06-11', 1),
(52, 25, '2023-06-11', 0),
(53, 26, '2023-06-11', 1),
(54, 27, '2023-06-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `department_name`, `date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Database Administration', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(2, 'Web Development', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, 'Software Development', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(4, 'UI/UX Design', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, 'Web Design', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(6, 'Quality Assurance', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(7, 'Business Development', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(8, 'IT Infrastructure', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(9, 'Sales & Marketing', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(10, 'HR & Compliance', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(11, 'Project Management', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(12, 'Accounting & Finance', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(13, 'Administration', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `yearly_leave` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `employee_id`, `department_id`, `designation_id`, `joining_date`, `yearly_leave`, `image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Abdullah', 'Ali', 'ali_abdullah22@gmail.com', '01987654525', 'PM11010101', 11, 19, '2011-01-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Saiful', 'Islam', 'saiful_islam98@gmail.com', '01898542163', 'PM17010209', 11, 20, '2017-06-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Mosharraf', 'Khan', 'mosharraf_khan996@gmail.com', '01789653247', 'AF16120301', 12, 15, '2016-03-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Monirul', 'Islam', 'monirul_islam552@gmail.com', '01879451236', 'DA16130102', 13, 15, '2016-01-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Hasan', 'Ali', 'ali_hasan766@gmail.com', '01987654321', 'HC14100101', 10, 26, '2014-04-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Masud', 'Khan', 'masud_khan11@gmail.com', '01875659832', 'SM17090309', 9, 14, '2017-03-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Anwar', 'Hossain', 'anwar_hossain51@gmail.com', '015589632584', 'II15080102', 8, 17, '2015-01-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Imran', 'Khan', 'imran_khan111@gmail.com', '01721002773', 'BD13070101', 7, 21, '2013-01-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Rezaul', 'Islam', 'rezaul_islam214@gmail.com', '01558796544', 'QA150601', 6, 18, '2015-06-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Noman', 'Hossain', 'noman@yahoo.com', '01622875968', 'WD230219', 5, 27, '2023-06-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Jasim', 'Uddin', 'jasimuddinm180@gmail.com', '015221875658', 'WD14020113', 2, 10, '2014-04-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Rabiul', 'Hossein', 'rabiul@yahoo.com', '01785654987', 'SD18030209', 3, 5, '2018-05-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Safayet', 'Ullah', 'safayet@yahoo.com', '01875321657', 'WD22020315', 2, 2, '2022-06-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Ibrahim', 'Khalil', 'ikshakil@yahoo.com', '01963852741', 'UD19040102', 4, 11, '2019-02-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Raihan', 'Sazzad', 'raihan88@yahoo.com', '01554789631', 'DA19010205', 1, 8, '2019-05-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Thouhidul', 'Islam', 'thouhid77@yahoo.com', '01752865324', 'II18080207', 8, 17, '2018-05-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Sharmin ', 'Akter', 'sharmin_akter21@gmail.com', '01587658214', 'DA21010217', 1, 25, '2021-06-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Maksuda', 'Akter', 'maksuda93@yahoo.com', '01622147862', 'DA22010517', 1, 23, '2022-08-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Mahmuda', 'Akter', 'mahmuda97@gmail.com', '01789654123', 'DA22010618', 1, 24, '2022-05-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Fahmida', 'Akter', 'fahmida883@gmail.com', '01883214756', 'DA22010419', 1, 22, '2022-08-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Mojahidul', 'Islam', 'mojahidul65@yahoo.com', '01954128754', 'SD23030308', 3, 1, '2023-03-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Ahtesanul Hoque', 'Kaiser', 'kaiser43@yahoo.com', '01552478963', 'UD20040205', 4, 7, '2020-01-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Towhidul', 'Islam', 'towhid_99@yahoo.com', '01721547853', 'SD18030206', 3, 9, '2018-09-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Shariful ', 'Islam', 'shariful0606@yahoo.com', '01687541235', 'WD15020106', 2, 10, '2015-03-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Tamim', 'Iqbal', 'tamim222@yahoo.com', '01557812439', 'DA17010103', 1, 12, '2017-06-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Mushfiqur ', 'Rahim', 'mushfiq66@yahoo.com', '01654987321', 'DA20010211', 1, 8, '2020-03-01', 22, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Abul', 'Hasan', 'abul_hasan@yahoo.com', '01752941661', 'WD22020316', 2, 2, '2022-09-01', 22, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holidays`
--

CREATE TABLE `tbl_holidays` (
  `id` int(11) NOT NULL,
  `holiday_name` varchar(255) DEFAULT NULL,
  `holiday_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaves`
--

CREATE TABLE `tbl_leaves` (
  `id` int(50) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `starting_at` date DEFAULT NULL,
  `ending_on` date DEFAULT NULL,
  `days` int(15) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_leaves`
--

INSERT INTO `tbl_leaves` (`id`, `employee_id`, `starting_at`, `ending_on`, `days`, `reason`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 25, '2023-06-04', '2023-06-07', 4, 'Personal problem.', NULL, NULL, NULL, NULL, NULL),
(2, 12, '2023-06-03', '2023-06-06', 4, 'Family emergency.', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overtime`
--

CREATE TABLE `tbl_overtime` (
  `id` int(50) NOT NULL,
  `employee` varchar(255) DEFAULT NULL,
  `overtime_date` date DEFAULT NULL,
  `hours` int(15) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_overtime`
--

INSERT INTO `tbl_overtime` (`id`, `employee`, `overtime_date`, `hours`, `type`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '22', '2023-06-07', 2, 'Normal ex.2', 'Worked on a new design on emergency basis.', NULL, NULL, NULL, NULL, NULL),
(2, '10', '2023-06-07', 3, 'Normal ex.3', 'Worked on a new project focusing on fast delivery to client.', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payroll_additions`
--

CREATE TABLE `tbl_payroll_additions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `unit_amount` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payroll_additions`
--

INSERT INTO `tbl_payroll_additions` (`id`, `name`, `category`, `unit_amount`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Leave balance amount', 'Monthly remuneration', '$5', NULL, NULL, NULL, NULL, NULL),
(2, 'Arrears of salary', 'Additional remuneration', '$8', NULL, NULL, NULL, NULL, NULL),
(3, 'Gratuity', 'Monthly remuneration', '$20', NULL, NULL, NULL, NULL, '2023-06-12 08:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payroll_deductions`
--

CREATE TABLE `tbl_payroll_deductions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `unit_amount` double(8,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payroll_deductions`
--

INSERT INTO `tbl_payroll_deductions` (`id`, `name`, `unit_amount`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Absent amount', 12.00, NULL, NULL, NULL, NULL, '2023-06-12 08:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payroll_overtime`
--

CREATE TABLE `tbl_payroll_overtime` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payroll_overtime`
--

INSERT INTO `tbl_payroll_overtime` (`id`, `name`, `rate`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Normal day OT', 'hourly 1.5', NULL, NULL, NULL, NULL, '2023-06-12 08:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `id` int(50) NOT NULL,
  `promoted_employee` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `promoted_designation_from` varchar(255) DEFAULT NULL,
  `promoted_designation_to` varchar(255) DEFAULT NULL,
  `promotion_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_promotion`
--

INSERT INTO `tbl_promotion` (`id`, `promoted_employee`, `department`, `promoted_designation_from`, `promoted_designation_to`, `promotion_date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(5, '13', '2', '2', '6', '2023-06-08', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resignation`
--

CREATE TABLE `tbl_resignation` (
  `id` int(50) NOT NULL,
  `resigning_employee` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `resignation_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_resignation`
--

INSERT INTO `tbl_resignation` (`id`, `resigning_employee`, `department`, `reason`, `notice_date`, `resignation_date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '12', '3', 'Job switch.', '2023-06-14', '2023-06-20', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_termination`
--

CREATE TABLE `tbl_termination` (
  `id` int(50) NOT NULL,
  `terminated_employee` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `termination_type` varchar(255) DEFAULT NULL,
  `termination_date` date DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_termination`
--

INSERT INTO `tbl_termination` (`id`, `terminated_employee`, `department`, `termination_type`, `termination_date`, `reason`, `notice_date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, '27', '2', 'others', '2023-06-22', 'Poor fit to organizational culture.', '2023-06-15', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timesheet`
--

CREATE TABLE `tbl_timesheet` (
  `id` int(11) NOT NULL,
  `employee` varchar(255) DEFAULT NULL,
  `a_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `projects` varchar(255) DEFAULT NULL,
  `a_hours` int(11) DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `contact_no`, `password`, `image`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_at`) VALUES
(1, 'Kamal Uddin', 'kamal@yahoo.com', '015', 'adcd7048512e64b48da55b027577886ee5a36350', '16847298293346.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'jasim uddin', 'jasimuddinm180@gmail.com', '123456', 'adcd7048512e64b48da55b027577886ee5a36350', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'josim1205', 'jasim@gmail.com', '123', '343ec46f518531dfd41853227d6409a5ab91e994', '16851165814532.jfif', NULL, NULL, NULL, NULL, NULL),
(9, 'jasim123', 'fuad@gmail.com', '123', '343ec46f518531dfd41853227d6409a5ab91e994', '16851167664475.jfif', NULL, NULL, NULL, NULL, NULL),
(11, 'jasim', 'noman@gmail.com', '123', '343ec46f518531dfd41853227d6409a5ab91e994', '16851170881402.jfif', NULL, NULL, NULL, NULL, NULL),
(12, 'Burhan Uddin Fuad', 'afmfuad96@gmail.com', '01676878734', 'adcd7048512e64b48da55b027577886ee5a36350', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payroll_additions`
--
ALTER TABLE `tbl_payroll_additions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payroll_deductions`
--
ALTER TABLE `tbl_payroll_deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payroll_overtime`
--
ALTER TABLE `tbl_payroll_overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resignation`
--
ALTER TABLE `tbl_resignation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_termination`
--
ALTER TABLE `tbl_termination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_payroll_additions`
--
ALTER TABLE `tbl_payroll_additions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payroll_deductions`
--
ALTER TABLE `tbl_payroll_deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payroll_overtime`
--
ALTER TABLE `tbl_payroll_overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_resignation`
--
ALTER TABLE `tbl_resignation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_termination`
--
ALTER TABLE `tbl_termination`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
