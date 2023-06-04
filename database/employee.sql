-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 09:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `name` varchar(255) NOT NULL,
  `default/unit amount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `payroll_item_additions`
--

CREATE TABLE `payroll_item_additions` (
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `default/unit amount` double(10,2) NOT NULL
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
(1, 1, '2023-06-04', 1),
(2, 2, '2023-06-04', 0),
(3, 1, '2023-06-05', 1),
(4, 2, '2023-06-05', 1),
(5, 1, '2023-06-06', 0),
(6, 2, '2023-06-06', 1),
(7, 1, '2023-06-07', 0),
(8, 2, '2023-06-07', 1);

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
(1, 'HR', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '2023-06-01 06:49:27'),
(2, 'HR', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, 'Compliance', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(4, 'Hr', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, 'Hr', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(6, 'adsfsda', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(7, 'adsfsda', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(8, 'adsfsda', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '2023-06-01 07:01:02'),
(9, 'ads', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '2023-06-01 07:01:01'),
(10, 'sgfdfg', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_designations`
--

INSERT INTO `tbl_designations` (`id`, `designation`, `date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Incharge', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(2, 'lkiuluiluil', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL),
(3, 'fgfg', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
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
(1, 'jamal', 'uddin', 'jamal@email.com', 123, '001', 6, 3, '2023-06-27', 22, '16858556745844.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'Noman', 'Hossain', 'noman@gmail.com', 15, '002', 3, 2, '2020-12-01', 22, NULL, NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `tbl_holidays`
--

INSERT INTO `tbl_holidays` (`id`, `holiday_name`, `holiday_date`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'dfdddhjhj', '2023-06-28', '0000-00-00 00:00:00', '', NULL, '', NULL),
(2, 'ffgfgfg', '2023-06-30', '0000-00-00 00:00:00', '', NULL, '', '2023-06-01 17:21:07'),
(3, 'fdfddfhh', '2023-06-11', '0000-00-00 00:00:00', '', NULL, '', NULL);

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
(1, 0, '0000-00-00', '2023-06-28', 10, 'jhhjjhhjhjh', NULL, NULL, NULL, NULL, '2023-06-02 03:30:30'),
(2, 0, '2023-05-27', '2023-06-16', 21, 'gjhgjgj', NULL, NULL, NULL, NULL, '2023-06-02 19:26:29'),
(3, 0, '2023-06-09', '2023-06-16', 7, 'yyyy', NULL, NULL, NULL, NULL, '2023-06-04 07:54:53'),
(4, 1, '2023-06-04', '2023-06-06', 3, 'Personal\r\n', NULL, NULL, NULL, NULL, NULL),
(5, 1, '2023-06-08', '2023-06-10', 3, 'Personals', NULL, NULL, NULL, NULL, NULL);

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
(1, 'JASIM', '2023-06-01', 14, 'EXTRA', 'ADSFSDGDGD', NULL, NULL, NULL, NULL, '2023-06-02 11:07:56'),
(2, 'Md. Rabiul Hossain', '2023-06-16', 2, '2x', 'xyz', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payroll_additions`
--

CREATE TABLE `tbl_payroll_additions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `unit_amount` double(8,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Ibrahim Khalil', NULL, 'Junior Designer', 'Senior Creative Designer', '2023-06-15', NULL, NULL, NULL, NULL, NULL),
(2, 'Jasim Uddin', NULL, 'Jr. Web Designer', 'Full Stack Web Developer', '2023-06-16', NULL, NULL, NULL, NULL, NULL),
(3, 'Noman Hossain', NULL, 'Jr. Wordpress Developer', 'Senior Wp Developer', '2023-06-30', NULL, NULL, NULL, NULL, '2023-06-02 19:32:03');

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
(1, 'Safayet Ullah', NULL, 'others', '2023-06-16', 'xyz', '2023-06-16', NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `tbl_timesheet`
--

INSERT INTO `tbl_timesheet` (`id`, `employee`, `a_date`, `deadline`, `projects`, `a_hours`, `hours`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'jhjjhjjhhkhhhhhhh', '2023-06-27', '0000-00-00', 'Office Management', 120, 80, 'fghsdfgsdvgfgsfghghkhkh', NULL, NULL, NULL, NULL, '2023-06-02 08:32:17'),
(2, NULL, '2023-06-28', '0000-00-00', 'Office Management', 120, 80, 'kgjggffddfhhj', NULL, NULL, NULL, NULL, '2023-06-02 08:34:26'),
(3, NULL, '2023-06-30', '0000-00-00', 'Hospital Administration', 220, 150, 'gghghghghh', NULL, NULL, NULL, NULL, NULL),
(4, NULL, '2023-06-23', '0000-00-00', 'Project Management', 120, 70, 'bnbnbbuu', NULL, NULL, NULL, NULL, NULL);

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
(11, 'jasim', 'noman@gmail.com', '123', '343ec46f518531dfd41853227d6409a5ab91e994', '16851170881402.jfif', NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_payroll_additions`
--
ALTER TABLE `tbl_payroll_additions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payroll_deductions`
--
ALTER TABLE `tbl_payroll_deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payroll_overtime`
--
ALTER TABLE `tbl_payroll_overtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_resignation`
--
ALTER TABLE `tbl_resignation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_termination`
--
ALTER TABLE `tbl_termination`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
