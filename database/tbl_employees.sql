-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 09:29 AM
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
  `basic_salary` decimal(10,2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `first_name`, `last_name`, `email`, `phone`, `employee_id`, `department_id`, `designation_id`, `joining_date`, `yearly_leave`, `image`, `basic_salary`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Abdullah', 'Ali', 'ali_abdullah22@gmail.com', '01987654525', 'PM11010101', 11, 19, '2011-01-01', 22, NULL, 17000.00, NULL, NULL, NULL, NULL, NULL),
(2, 'Saiful', 'Islam', 'saiful_islam98@gmail.com', '01898542163', 'PM17010209', 11, 20, '2017-06-01', 22, NULL, 15000.00, NULL, NULL, NULL, NULL, NULL),
(3, 'Mosharraf', 'Khan', 'mosharraf_khan996@gmail.com', '01789653247', 'AF16120301', 12, 15, '2016-03-01', 22, NULL, 12000.00, NULL, NULL, NULL, NULL, NULL),
(4, 'Monirul', 'Islam', 'monirul_islam552@gmail.com', '01879451236', 'DA16130102', 13, 15, '2016-01-01', 22, NULL, 20000.00, NULL, NULL, NULL, NULL, NULL),
(5, 'Hasan', 'Ali', 'ali_hasan766@gmail.com', '01987654321', 'HC14100101', 10, 26, '2014-04-01', 22, NULL, 40000.00, NULL, NULL, NULL, NULL, NULL),
(6, 'Masud', 'Khan', 'masud_khan11@gmail.com', '01875659832', 'SM17090309', 9, 14, '2017-03-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(7, 'Anwar', 'Hossain', 'anwar_hossain51@gmail.com', '015589632584', 'II15080102', 8, 17, '2015-01-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(8, 'Imran', 'Khan', 'imran_khan111@gmail.com', '01721002773', 'BD13070101', 7, 21, '2013-01-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(9, 'Rezaul', 'Islam', 'rezaul_islam214@gmail.com', '01558796544', 'QA150601', 6, 18, '2015-06-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(10, 'Noman', 'Hossain', 'noman@yahoo.com', '01622875968', 'WD230219', 5, 27, '2023-06-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(11, 'Jasim', 'Uddin', 'jasimuddinm180@gmail.com', '015221875658', 'WD14020113', 2, 10, '2014-04-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(12, 'Rabiul', 'Hossein', 'rabiul@yahoo.com', '01785654987', 'SD18030209', 3, 5, '2018-05-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(13, 'Safayet', 'Ullah', 'safayet@yahoo.com', '01875321657', 'WD22020315', 2, 2, '2022-06-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(14, 'Ibrahim', 'Khalil', 'ikshakil@yahoo.com', '01963852741', 'UD19040102', 4, 11, '2019-02-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(15, 'Raihan', 'Sazzad', 'raihan88@yahoo.com', '01554789631', 'DA19010205', 1, 8, '2019-05-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(16, 'Thouhidul', 'Islam', 'thouhid77@yahoo.com', '01752865324', 'II18080207', 8, 17, '2018-05-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(17, 'Sharmin ', 'Akter', 'sharmin_akter21@gmail.com', '01587658214', 'DA21010217', 1, 25, '2021-06-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(18, 'Maksuda', 'Akter', 'maksuda93@yahoo.com', '01622147862', 'DA22010517', 1, 23, '2022-08-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(19, 'Mahmuda', 'Akter', 'mahmuda97@gmail.com', '01789654123', 'DA22010618', 1, 24, '2022-05-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(20, 'Fahmida', 'Akter', 'fahmida883@gmail.com', '01883214756', 'DA22010419', 1, 22, '2022-08-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(21, 'Mojahidul', 'Islam', 'mojahidul65@yahoo.com', '01954128754', 'SD23030308', 3, 1, '2023-03-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(22, 'Ahtesanul Hoque', 'Kaiser', 'kaiser43@yahoo.com', '01552478963', 'UD20040205', 4, 7, '2020-01-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(23, 'Towhidul', 'Islam', 'towhid_99@yahoo.com', '01721547853', 'SD18030206', 3, 9, '2018-09-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(24, 'Shariful ', 'Islam', 'shariful0606@yahoo.com', '01687541235', 'WD15020106', 2, 10, '2015-03-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(25, 'Tamim', 'Iqbal', 'tamim222@yahoo.com', '01557812439', 'DA17010103', 1, 12, '2017-06-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(26, 'Mushfiqur ', 'Rahim', 'mushfiq66@yahoo.com', '01654987321', 'DA20010211', 1, 8, '2020-03-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL),
(27, 'Abul', 'Hasan', 'abul_hasan@yahoo.com', '01752941661', 'WD22020316', 2, 2, '2022-09-01', 22, NULL, 0.00, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
