-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:49 AM
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
(1, 1, '2023-05-01', 1),
(2, 2, '2023-05-01', 1),
(3, 3, '2023-05-01', 1),
(4, 4, '2023-05-01', 0),
(5, 5, '2023-05-01', 1),
(6, 6, '2023-05-01', 1),
(7, 7, '2023-05-01', 1),
(8, 8, '2023-05-01', 1),
(9, 9, '2023-05-01', 1),
(10, 10, '2023-05-01', 1),
(11, 11, '2023-05-01', 1),
(12, 12, '2023-05-01', 1),
(13, 13, '2023-05-01', 1),
(14, 14, '2023-05-01', 0),
(15, 15, '2023-05-01', 1),
(16, 16, '2023-05-01', 1),
(17, 17, '2023-05-01', 1),
(18, 18, '2023-05-01', 1),
(19, 19, '2023-05-01', 1),
(20, 20, '2023-05-01', 1),
(21, 21, '2023-05-01', 1),
(22, 22, '2023-05-01', 1),
(23, 23, '2023-05-01', 0),
(24, 24, '2023-05-01', 1),
(25, 25, '2023-05-01', 1),
(26, 26, '2023-05-01', 1),
(27, 27, '2023-05-01', 0),
(55, 1, '2023-05-02', 1),
(56, 2, '2023-05-02', 0),
(57, 3, '2023-05-02', 1),
(58, 4, '2023-05-02', 1),
(59, 5, '2023-05-02', 1),
(60, 6, '2023-05-02', 0),
(61, 7, '2023-05-02', 1),
(62, 8, '2023-05-02', 1),
(63, 9, '2023-05-02', 1),
(64, 10, '2023-05-02', 0),
(65, 11, '2023-05-02', 1),
(66, 12, '2023-05-02', 1),
(67, 13, '2023-05-02', 1),
(68, 14, '2023-05-02', 1),
(69, 15, '2023-05-02', 1),
(70, 16, '2023-05-02', 1),
(71, 17, '2023-05-02', 1),
(72, 18, '2023-05-02', 1),
(73, 19, '2023-05-02', 1),
(74, 20, '2023-05-02', 1),
(75, 21, '2023-05-02', 1),
(76, 22, '2023-05-02', 0),
(77, 23, '2023-05-02', 1),
(78, 24, '2023-05-02', 1),
(79, 25, '2023-05-02', 1),
(80, 26, '2023-05-02', 1),
(81, 27, '2023-05-02', 1),
(136, 1, '2023-05-03', 1),
(137, 2, '2023-05-03', 0),
(138, 3, '2023-05-03', 1),
(139, 4, '2023-05-03', 1),
(140, 5, '2023-05-03', 1),
(141, 6, '2023-05-03', 1),
(142, 7, '2023-05-03', 1),
(143, 8, '2023-05-03', 1),
(144, 9, '2023-05-03', 1),
(145, 10, '2023-05-03', 1),
(146, 11, '2023-05-03', 1),
(147, 12, '2023-05-03', 1),
(148, 13, '2023-05-03', 1),
(149, 14, '2023-05-03', 1),
(150, 15, '2023-05-03', 1),
(151, 16, '2023-05-03', 1),
(152, 17, '2023-05-03', 1),
(153, 18, '2023-05-03', 1),
(154, 19, '2023-05-03', 1),
(155, 20, '2023-05-03', 1),
(156, 21, '2023-05-03', 1),
(157, 22, '2023-05-03', 1),
(158, 23, '2023-05-03', 1),
(159, 24, '2023-05-03', 1),
(160, 25, '2023-05-03', 1),
(161, 26, '2023-05-03', 1),
(162, 27, '2023-05-03', 1),
(163, 1, '2023-05-04', 1),
(164, 2, '2023-05-04', 1),
(165, 3, '2023-05-04', 1),
(166, 4, '2023-05-04', 1),
(167, 5, '2023-05-04', 1),
(168, 6, '2023-05-04', 1),
(169, 7, '2023-05-04', 1),
(170, 8, '2023-05-04', 1),
(171, 9, '2023-05-04', 1),
(172, 10, '2023-05-04', 1),
(173, 11, '2023-05-04', 1),
(174, 12, '2023-05-04', 1),
(175, 13, '2023-05-04', 1),
(176, 14, '2023-05-04', 1),
(177, 15, '2023-05-04', 1),
(178, 16, '2023-05-04', 1),
(179, 17, '2023-05-04', 0),
(180, 18, '2023-05-04', 0),
(181, 19, '2023-05-04', 1),
(182, 20, '2023-05-04', 1),
(183, 21, '2023-05-04', 1),
(184, 22, '2023-05-04', 1),
(185, 23, '2023-05-04', 1),
(186, 24, '2023-05-04', 1),
(187, 25, '2023-05-04', 1),
(188, 26, '2023-05-04', 1),
(189, 27, '2023-05-04', 1),
(190, 1, '2023-05-06', 0),
(191, 2, '2023-05-06', 1),
(192, 3, '2023-05-06', 1),
(193, 4, '2023-05-06', 1),
(194, 5, '2023-05-06', 1),
(195, 6, '2023-05-06', 1),
(196, 7, '2023-05-06', 1),
(197, 8, '2023-05-06', 1),
(198, 9, '2023-05-06', 1),
(199, 10, '2023-05-06', 1),
(200, 11, '2023-05-06', 1),
(201, 12, '2023-05-06', 1),
(202, 13, '2023-05-06', 1),
(203, 14, '2023-05-06', 1),
(204, 15, '2023-05-06', 1),
(205, 16, '2023-05-06', 1),
(206, 17, '2023-05-06', 1),
(207, 18, '2023-05-06', 1),
(208, 19, '2023-05-06', 1),
(209, 20, '2023-05-06', 1),
(210, 21, '2023-05-06', 1),
(211, 22, '2023-05-06', 1),
(212, 23, '2023-05-06', 1),
(213, 24, '2023-05-06', 1),
(214, 25, '2023-05-06', 1),
(215, 26, '2023-05-06', 1),
(216, 27, '2023-05-06', 1),
(244, 1, '2023-05-07', 0),
(245, 2, '2023-05-07', 1),
(246, 3, '2023-05-07', 1),
(247, 4, '2023-05-07', 1),
(248, 5, '2023-05-07', 1),
(249, 6, '2023-05-07', 0),
(250, 7, '2023-05-07', 1),
(251, 8, '2023-05-07', 1),
(252, 9, '2023-05-07', 1),
(253, 10, '2023-05-07', 1),
(254, 11, '2023-05-07', 1),
(255, 12, '2023-05-07', 1),
(256, 13, '2023-05-07', 1),
(257, 14, '2023-05-07', 1),
(258, 15, '2023-05-07', 1),
(259, 16, '2023-05-07', 1),
(260, 17, '2023-05-07', 1),
(261, 18, '2023-05-07', 1),
(262, 19, '2023-05-07', 1),
(263, 20, '2023-05-07', 1),
(264, 21, '2023-05-07', 1),
(265, 22, '2023-05-07', 1),
(266, 23, '2023-05-07', 1),
(267, 24, '2023-05-07', 1),
(268, 25, '2023-05-07', 1),
(269, 26, '2023-05-07', 1),
(270, 27, '2023-05-07', 1),
(271, 1, '2023-05-08', 1),
(272, 2, '2023-05-08', 1),
(273, 3, '2023-05-08', 1),
(274, 4, '2023-05-08', 1),
(275, 5, '2023-05-08', 1),
(276, 6, '2023-05-08', 1),
(277, 7, '2023-05-08', 1),
(278, 8, '2023-05-08', 1),
(279, 9, '2023-05-08', 1),
(280, 10, '2023-05-08', 1),
(281, 11, '2023-05-08', 1),
(282, 12, '2023-05-08', 1),
(283, 13, '2023-05-08', 1),
(284, 14, '2023-05-08', 1),
(285, 15, '2023-05-08', 1),
(286, 16, '2023-05-08', 1),
(287, 17, '2023-05-08', 0),
(288, 18, '2023-05-08', 0),
(289, 19, '2023-05-08', 1),
(290, 20, '2023-05-08', 0),
(291, 21, '2023-05-08', 1),
(292, 22, '2023-05-08', 1),
(293, 23, '2023-05-08', 0),
(294, 24, '2023-05-08', 1),
(295, 25, '2023-05-08', 0),
(296, 26, '2023-05-08', 1),
(297, 27, '2023-05-08', 1),
(298, 1, '2023-05-09', 1),
(299, 2, '2023-05-09', 1),
(300, 3, '2023-05-09', 1),
(301, 4, '2023-05-09', 1),
(302, 5, '2023-05-09', 1),
(303, 6, '2023-05-09', 1),
(304, 7, '2023-05-09', 1),
(305, 8, '2023-05-09', 1),
(306, 9, '2023-05-09', 1),
(307, 10, '2023-05-09', 1),
(308, 11, '2023-05-09', 1),
(309, 12, '2023-05-09', 1),
(310, 13, '2023-05-09', 1),
(311, 14, '2023-05-09', 0),
(312, 15, '2023-05-09', 1),
(313, 16, '2023-05-09', 0),
(314, 17, '2023-05-09', 1),
(315, 18, '2023-05-09', 1),
(316, 19, '2023-05-09', 1),
(317, 20, '2023-05-09', 1),
(318, 21, '2023-05-09', 1),
(319, 22, '2023-05-09', 0),
(320, 23, '2023-05-09', 1),
(321, 24, '2023-05-09', 1),
(322, 25, '2023-05-09', 1),
(323, 26, '2023-05-09', 1),
(324, 27, '2023-05-09', 1),
(325, 1, '2023-05-10', 1),
(326, 2, '2023-05-10', 0),
(327, 3, '2023-05-10', 1),
(328, 4, '2023-05-10', 1),
(329, 5, '2023-05-10', 0),
(330, 6, '2023-05-10', 1),
(331, 7, '2023-05-10', 1),
(332, 8, '2023-05-10', 1),
(333, 9, '2023-05-10', 1),
(334, 10, '2023-05-10', 1),
(335, 11, '2023-05-10', 1),
(336, 12, '2023-05-10', 1),
(337, 13, '2023-05-10', 1),
(338, 14, '2023-05-10', 1),
(339, 15, '2023-05-10', 1),
(340, 16, '2023-05-10', 1),
(341, 17, '2023-05-10', 1),
(342, 18, '2023-05-10', 1),
(343, 19, '2023-05-10', 1),
(344, 20, '2023-05-10', 1),
(345, 21, '2023-05-10', 1),
(346, 22, '2023-05-10', 1),
(347, 23, '2023-05-10', 1),
(348, 24, '2023-05-10', 1),
(349, 25, '2023-05-10', 1),
(350, 26, '2023-05-10', 1),
(351, 27, '2023-05-10', 1),
(352, 1, '2023-05-11', 1),
(353, 2, '2023-05-11', 1),
(354, 3, '2023-05-11', 1),
(355, 4, '2023-05-11', 1),
(356, 5, '2023-05-11', 1),
(357, 6, '2023-05-11', 1),
(358, 7, '2023-05-11', 1),
(359, 8, '2023-05-11', 1),
(360, 9, '2023-05-11', 1),
(361, 10, '2023-05-11', 1),
(362, 11, '2023-05-11', 1),
(363, 12, '2023-05-11', 1),
(364, 13, '2023-05-11', 1),
(365, 14, '2023-05-11', 1),
(366, 15, '2023-05-11', 1),
(367, 16, '2023-05-11', 1),
(368, 17, '2023-05-11', 1),
(369, 18, '2023-05-11', 1),
(370, 19, '2023-05-11', 1),
(371, 20, '2023-05-11', 1),
(372, 21, '2023-05-11', 1),
(373, 22, '2023-05-11', 1),
(374, 23, '2023-05-11', 0),
(375, 24, '2023-05-11', 1),
(376, 25, '2023-05-11', 1),
(377, 26, '2023-05-11', 1),
(378, 27, '2023-05-11', 0),
(379, 1, '2023-05-13', 1),
(380, 2, '2023-05-13', 1),
(381, 3, '2023-05-13', 1),
(382, 4, '2023-05-13', 1),
(383, 5, '2023-05-13', 1),
(384, 6, '2023-05-13', 1),
(385, 7, '2023-05-13', 1),
(386, 8, '2023-05-13', 1),
(387, 9, '2023-05-13', 1),
(388, 10, '2023-05-13', 1),
(389, 11, '2023-05-13', 1),
(390, 12, '2023-05-13', 1),
(391, 13, '2023-05-13', 1),
(392, 14, '2023-05-13', 1),
(393, 15, '2023-05-13', 1),
(394, 16, '2023-05-13', 0),
(395, 17, '2023-05-13', 1),
(396, 18, '2023-05-13', 1),
(397, 19, '2023-05-13', 1),
(398, 20, '2023-05-13', 0),
(399, 21, '2023-05-13', 1),
(400, 22, '2023-05-13', 1),
(401, 23, '2023-05-13', 1),
(402, 24, '2023-05-13', 0),
(403, 25, '2023-05-13', 1),
(404, 26, '2023-05-13', 1),
(405, 27, '2023-05-13', 1),
(433, 1, '2023-05-15', 1),
(434, 2, '2023-05-15', 0),
(435, 3, '2023-05-15', 1),
(436, 4, '2023-05-15', 1),
(437, 5, '2023-05-15', 0),
(438, 6, '2023-05-15', 1),
(439, 7, '2023-05-15', 0),
(440, 8, '2023-05-15', 1),
(441, 9, '2023-05-15', 1),
(442, 10, '2023-05-15', 1),
(443, 11, '2023-05-15', 1),
(444, 12, '2023-05-15', 1),
(445, 13, '2023-05-15', 1),
(446, 14, '2023-05-15', 1),
(447, 15, '2023-05-15', 1),
(448, 16, '2023-05-15', 1),
(449, 17, '2023-05-15', 1),
(450, 18, '2023-05-15', 1),
(451, 19, '2023-05-15', 1),
(452, 20, '2023-05-15', 1),
(453, 21, '2023-05-15', 1),
(454, 22, '2023-05-15', 1),
(455, 23, '2023-05-15', 1),
(456, 24, '2023-05-15', 1),
(457, 25, '2023-05-15', 1),
(458, 26, '2023-05-15', 1),
(459, 27, '2023-05-15', 1),
(460, 1, '2023-05-14', 1),
(461, 2, '2023-05-14', 0),
(462, 3, '2023-05-14', 1),
(463, 4, '2023-05-14', 0),
(464, 5, '2023-05-14', 1),
(465, 6, '2023-05-14', 0),
(466, 7, '2023-05-14', 1),
(467, 8, '2023-05-14', 1),
(468, 9, '2023-05-14', 1),
(469, 10, '2023-05-14', 0),
(470, 11, '2023-05-14', 1),
(471, 12, '2023-05-14', 1),
(472, 13, '2023-05-14', 1),
(473, 14, '2023-05-14', 1),
(474, 15, '2023-05-14', 1),
(475, 16, '2023-05-14', 1),
(476, 17, '2023-05-14', 1),
(477, 18, '2023-05-14', 1),
(478, 19, '2023-05-14', 1),
(479, 20, '2023-05-14', 1),
(480, 21, '2023-05-14', 1),
(481, 22, '2023-05-14', 1),
(482, 23, '2023-05-14', 1),
(483, 24, '2023-05-14', 1),
(484, 25, '2023-05-14', 1),
(485, 26, '2023-05-14', 1),
(486, 27, '2023-05-14', 1),
(487, 1, '2023-05-16', 1),
(488, 2, '2023-05-16', 1),
(489, 3, '2023-05-16', 1),
(490, 4, '2023-05-16', 1),
(491, 5, '2023-05-16', 1),
(492, 6, '2023-05-16', 1),
(493, 7, '2023-05-16', 1),
(494, 8, '2023-05-16', 1),
(495, 9, '2023-05-16', 1),
(496, 10, '2023-05-16', 1),
(497, 11, '2023-05-16', 1),
(498, 12, '2023-05-16', 1),
(499, 13, '2023-05-16', 1),
(500, 14, '2023-05-16', 1),
(501, 15, '2023-05-16', 1),
(502, 16, '2023-05-16', 1),
(503, 17, '2023-05-16', 1),
(504, 18, '2023-05-16', 1),
(505, 19, '2023-05-16', 1),
(506, 20, '2023-05-16', 1),
(507, 21, '2023-05-16', 1),
(508, 22, '2023-05-16', 1),
(509, 23, '2023-05-16', 1),
(510, 24, '2023-05-16', 1),
(511, 25, '2023-05-16', 0),
(512, 26, '2023-05-16', 1),
(513, 27, '2023-05-16', 1),
(514, 1, '2023-05-17', 1),
(515, 2, '2023-05-17', 1),
(516, 3, '2023-05-17', 1),
(517, 4, '2023-05-17', 1),
(518, 5, '2023-05-17', 0),
(519, 6, '2023-05-17', 1),
(520, 7, '2023-05-17', 0),
(521, 8, '2023-05-17', 1),
(522, 9, '2023-05-17', 1),
(523, 10, '2023-05-17', 1),
(524, 11, '2023-05-17', 1),
(525, 12, '2023-05-17', 1),
(526, 13, '2023-05-17', 1),
(527, 14, '2023-05-17', 1),
(528, 15, '2023-05-17', 1),
(529, 16, '2023-05-17', 1),
(530, 17, '2023-05-17', 1),
(531, 18, '2023-05-17', 1),
(532, 19, '2023-05-17', 1),
(533, 20, '2023-05-17', 1),
(534, 21, '2023-05-17', 1),
(535, 22, '2023-05-17', 1),
(536, 23, '2023-05-17', 1),
(537, 24, '2023-05-17', 1),
(538, 25, '2023-05-17', 1),
(539, 26, '2023-05-17', 1),
(540, 27, '2023-05-17', 1),
(541, 1, '2023-05-18', 1),
(542, 2, '2023-05-18', 1),
(543, 3, '2023-05-18', 1),
(544, 4, '2023-05-18', 1),
(545, 5, '2023-05-18', 0),
(546, 6, '2023-05-18', 1),
(547, 7, '2023-05-18', 1),
(548, 8, '2023-05-18', 0),
(549, 9, '2023-05-18', 1),
(550, 10, '2023-05-18', 0),
(551, 11, '2023-05-18', 1),
(552, 12, '2023-05-18', 1),
(553, 13, '2023-05-18', 1),
(554, 14, '2023-05-18', 1),
(555, 15, '2023-05-18', 1),
(556, 16, '2023-05-18', 1),
(557, 17, '2023-05-18', 1),
(558, 18, '2023-05-18', 1),
(559, 19, '2023-05-18', 1),
(560, 20, '2023-05-18', 1),
(561, 21, '2023-05-18', 1),
(562, 22, '2023-05-18', 1),
(563, 23, '2023-05-18', 1),
(564, 24, '2023-05-18', 1),
(565, 25, '2023-05-18', 1),
(566, 26, '2023-05-18', 1),
(567, 27, '2023-05-18', 1),
(568, 1, '2023-05-20', 1),
(569, 2, '2023-05-20', 1),
(570, 3, '2023-05-20', 1),
(571, 4, '2023-05-20', 1),
(572, 5, '2023-05-20', 1),
(573, 6, '2023-05-20', 1),
(574, 7, '2023-05-20', 1),
(575, 8, '2023-05-20', 1),
(576, 9, '2023-05-20', 1),
(577, 10, '2023-05-20', 1),
(578, 11, '2023-05-20', 1),
(579, 12, '2023-05-20', 1),
(580, 13, '2023-05-20', 1),
(581, 14, '2023-05-20', 1),
(582, 15, '2023-05-20', 1),
(583, 16, '2023-05-20', 1),
(584, 17, '2023-05-20', 1),
(585, 18, '2023-05-20', 1),
(586, 19, '2023-05-20', 1),
(587, 20, '2023-05-20', 1),
(588, 21, '2023-05-20', 1),
(589, 22, '2023-05-20', 1),
(590, 23, '2023-05-20', 1),
(591, 24, '2023-05-20', 1),
(592, 25, '2023-05-20', 1),
(593, 26, '2023-05-20', 1),
(594, 27, '2023-05-20', 1),
(595, 1, '2023-05-21', 1),
(596, 2, '2023-05-21', 1),
(597, 3, '2023-05-21', 1),
(598, 4, '2023-05-21', 1),
(599, 5, '2023-05-21', 0),
(600, 6, '2023-05-21', 1),
(601, 7, '2023-05-21', 1),
(602, 8, '2023-05-21', 0),
(603, 9, '2023-05-21', 0),
(604, 10, '2023-05-21', 1),
(605, 11, '2023-05-21', 1),
(606, 12, '2023-05-21', 1),
(607, 13, '2023-05-21', 1),
(608, 14, '2023-05-21', 1),
(609, 15, '2023-05-21', 1),
(610, 16, '2023-05-21', 1),
(611, 17, '2023-05-21', 1),
(612, 18, '2023-05-21', 1),
(613, 19, '2023-05-21', 1),
(614, 20, '2023-05-21', 1),
(615, 21, '2023-05-21', 1),
(616, 22, '2023-05-21', 1),
(617, 23, '2023-05-21', 1),
(618, 24, '2023-05-21', 1),
(619, 25, '2023-05-21', 1),
(620, 26, '2023-05-21', 1),
(621, 27, '2023-05-21', 1),
(622, 1, '2023-05-22', 1),
(623, 2, '2023-05-22', 1),
(624, 3, '2023-05-22', 1),
(625, 4, '2023-05-22', 1),
(626, 5, '2023-05-22', 1),
(627, 6, '2023-05-22', 0),
(628, 7, '2023-05-22', 1),
(629, 8, '2023-05-22', 1),
(630, 9, '2023-05-22', 1),
(631, 10, '2023-05-22', 1),
(632, 11, '2023-05-22', 1),
(633, 12, '2023-05-22', 1),
(634, 13, '2023-05-22', 1),
(635, 14, '2023-05-22', 1),
(636, 15, '2023-05-22', 1),
(637, 16, '2023-05-22', 1),
(638, 17, '2023-05-22', 1),
(639, 18, '2023-05-22', 1),
(640, 19, '2023-05-22', 1),
(641, 20, '2023-05-22', 1),
(642, 21, '2023-05-22', 1),
(643, 22, '2023-05-22', 1),
(644, 23, '2023-05-22', 1),
(645, 24, '2023-05-22', 1),
(646, 25, '2023-05-22', 1),
(647, 26, '2023-05-22', 1),
(648, 27, '2023-05-22', 1),
(649, 1, '2023-05-23', 1),
(650, 2, '2023-05-23', 1),
(651, 3, '2023-05-23', 1),
(652, 4, '2023-05-23', 0),
(653, 5, '2023-05-23', 1),
(654, 6, '2023-05-23', 0),
(655, 7, '2023-05-23', 1),
(656, 8, '2023-05-23', 1),
(657, 9, '2023-05-23', 1),
(658, 10, '2023-05-23', 1),
(659, 11, '2023-05-23', 1),
(660, 12, '2023-05-23', 1),
(661, 13, '2023-05-23', 1),
(662, 14, '2023-05-23', 1),
(663, 15, '2023-05-23', 1),
(664, 16, '2023-05-23', 1),
(665, 17, '2023-05-23', 1),
(666, 18, '2023-05-23', 1),
(667, 19, '2023-05-23', 1),
(668, 20, '2023-05-23', 1),
(669, 21, '2023-05-23', 1),
(670, 22, '2023-05-23', 1),
(671, 23, '2023-05-23', 1),
(672, 24, '2023-05-23', 1),
(673, 25, '2023-05-23', 1),
(674, 26, '2023-05-23', 1),
(675, 27, '2023-05-23', 1),
(676, 1, '2023-05-24', 1),
(677, 2, '2023-05-24', 1),
(678, 3, '2023-05-24', 1),
(679, 4, '2023-05-24', 1),
(680, 5, '2023-05-24', 1),
(681, 6, '2023-05-24', 1),
(682, 7, '2023-05-24', 1),
(683, 8, '2023-05-24', 1),
(684, 9, '2023-05-24', 0),
(685, 10, '2023-05-24', 1),
(686, 11, '2023-05-24', 0),
(687, 12, '2023-05-24', 1),
(688, 13, '2023-05-24', 1),
(689, 14, '2023-05-24', 1),
(690, 15, '2023-05-24', 1),
(691, 16, '2023-05-24', 1),
(692, 17, '2023-05-24', 1),
(693, 18, '2023-05-24', 1),
(694, 19, '2023-05-24', 1),
(695, 20, '2023-05-24', 1),
(696, 21, '2023-05-24', 1),
(697, 22, '2023-05-24', 1),
(698, 23, '2023-05-24', 1),
(699, 24, '2023-05-24', 1),
(700, 25, '2023-05-24', 1),
(701, 26, '2023-05-24', 1),
(702, 27, '2023-05-24', 1),
(703, 1, '2023-05-27', 1),
(704, 2, '2023-05-27', 1),
(705, 3, '2023-05-27', 0),
(706, 4, '2023-05-27', 1),
(707, 5, '2023-05-27', 1),
(708, 6, '2023-05-27', 1),
(709, 7, '2023-05-27', 1),
(710, 8, '2023-05-27', 1),
(711, 9, '2023-05-27', 1),
(712, 10, '2023-05-27', 1),
(713, 11, '2023-05-27', 1),
(714, 12, '2023-05-27', 1),
(715, 13, '2023-05-27', 1),
(716, 14, '2023-05-27', 1),
(717, 15, '2023-05-27', 1),
(718, 16, '2023-05-27', 1),
(719, 17, '2023-05-27', 1),
(720, 18, '2023-05-27', 1),
(721, 19, '2023-05-27', 1),
(722, 20, '2023-05-27', 1),
(723, 21, '2023-05-27', 1),
(724, 22, '2023-05-27', 1),
(725, 23, '2023-05-27', 1),
(726, 24, '2023-05-27', 1),
(727, 25, '2023-05-27', 1),
(728, 26, '2023-05-27', 1),
(729, 27, '2023-05-27', 1),
(730, 1, '2023-05-25', 1),
(731, 2, '2023-05-25', 1),
(732, 3, '2023-05-25', 1),
(733, 4, '2023-05-25', 1),
(734, 5, '2023-05-25', 1),
(735, 6, '2023-05-25', 0),
(736, 7, '2023-05-25', 1),
(737, 8, '2023-05-25', 0),
(738, 9, '2023-05-25', 1),
(739, 10, '2023-05-25', 1),
(740, 11, '2023-05-25', 1),
(741, 12, '2023-05-25', 1),
(742, 13, '2023-05-25', 1),
(743, 14, '2023-05-25', 1),
(744, 15, '2023-05-25', 1),
(745, 16, '2023-05-25', 1),
(746, 17, '2023-05-25', 1),
(747, 18, '2023-05-25', 1),
(748, 19, '2023-05-25', 1),
(749, 20, '2023-05-25', 1),
(750, 21, '2023-05-25', 1),
(751, 22, '2023-05-25', 1),
(752, 23, '2023-05-25', 1),
(753, 24, '2023-05-25', 1),
(754, 25, '2023-05-25', 1),
(755, 26, '2023-05-25', 1),
(756, 27, '2023-05-25', 1),
(757, 1, '2023-05-28', 1),
(758, 2, '2023-05-28', 1),
(759, 3, '2023-05-28', 1),
(760, 4, '2023-05-28', 1),
(761, 5, '2023-05-28', 1),
(762, 6, '2023-05-28', 1),
(763, 7, '2023-05-28', 1),
(764, 8, '2023-05-28', 1),
(765, 9, '2023-05-28', 1),
(766, 10, '2023-05-28', 1),
(767, 11, '2023-05-28', 1),
(768, 12, '2023-05-28', 1),
(769, 13, '2023-05-28', 1),
(770, 14, '2023-05-28', 1),
(771, 15, '2023-05-28', 1),
(772, 16, '2023-05-28', 1),
(773, 17, '2023-05-28', 1),
(774, 18, '2023-05-28', 1),
(775, 19, '2023-05-28', 1),
(776, 20, '2023-05-28', 1),
(777, 21, '2023-05-28', 1),
(778, 22, '2023-05-28', 1),
(779, 23, '2023-05-28', 1),
(780, 24, '2023-05-28', 1),
(781, 25, '2023-05-28', 1),
(782, 26, '2023-05-28', 1),
(783, 27, '2023-05-28', 1),
(784, 1, '2023-05-29', 1),
(785, 2, '2023-05-29', 1),
(786, 3, '2023-05-29', 1),
(787, 4, '2023-05-29', 1),
(788, 5, '2023-05-29', 1),
(789, 6, '2023-05-29', 1),
(790, 7, '2023-05-29', 1),
(791, 8, '2023-05-29', 1),
(792, 9, '2023-05-29', 1),
(793, 10, '2023-05-29', 1),
(794, 11, '2023-05-29', 1),
(795, 12, '2023-05-29', 1),
(796, 13, '2023-05-29', 1),
(797, 14, '2023-05-29', 1),
(798, 15, '2023-05-29', 1),
(799, 16, '2023-05-29', 1),
(800, 17, '2023-05-29', 1),
(801, 18, '2023-05-29', 1),
(802, 19, '2023-05-29', 1),
(803, 20, '2023-05-29', 1),
(804, 21, '2023-05-29', 1),
(805, 22, '2023-05-29', 1),
(806, 23, '2023-05-29', 1),
(807, 24, '2023-05-29', 1),
(808, 25, '2023-05-29', 1),
(809, 26, '2023-05-29', 1),
(810, 27, '2023-05-29', 1),
(811, 1, '2023-05-30', 1),
(812, 2, '2023-05-30', 1),
(813, 3, '2023-05-30', 1),
(814, 4, '2023-05-30', 0),
(815, 5, '2023-05-30', 1),
(816, 6, '2023-05-30', 1),
(817, 7, '2023-05-30', 1),
(818, 8, '2023-05-30', 1),
(819, 9, '2023-05-30', 1),
(820, 10, '2023-05-30', 1),
(821, 11, '2023-05-30', 1),
(822, 12, '2023-05-30', 1),
(823, 13, '2023-05-30', 1),
(824, 14, '2023-05-30', 1),
(825, 15, '2023-05-30', 1),
(826, 16, '2023-05-30', 1),
(827, 17, '2023-05-30', 1),
(828, 18, '2023-05-30', 1),
(829, 19, '2023-05-30', 1),
(830, 20, '2023-05-30', 1),
(831, 21, '2023-05-30', 1),
(832, 22, '2023-05-30', 1),
(833, 23, '2023-05-30', 1),
(834, 24, '2023-05-30', 1),
(835, 25, '2023-05-30', 1),
(836, 26, '2023-05-30', 1),
(837, 27, '2023-05-30', 1),
(838, 1, '2023-05-31', 1),
(839, 2, '2023-05-31', 1),
(840, 3, '2023-05-31', 1),
(841, 4, '2023-05-31', 1),
(842, 5, '2023-05-31', 1),
(843, 6, '2023-05-31', 1),
(844, 7, '2023-05-31', 1),
(845, 8, '2023-05-31', 1),
(846, 9, '2023-05-31', 1),
(847, 10, '2023-05-31', 1),
(848, 11, '2023-05-31', 1),
(849, 12, '2023-05-31', 1),
(850, 13, '2023-05-31', 1),
(851, 14, '2023-05-31', 1),
(852, 15, '2023-05-31', 1),
(853, 16, '2023-05-31', 1),
(854, 17, '2023-05-31', 1),
(855, 18, '2023-05-31', 1),
(856, 19, '2023-05-31', 1),
(857, 20, '2023-05-31', 1),
(858, 21, '2023-05-31', 1),
(859, 22, '2023-05-31', 1),
(860, 23, '2023-05-31', 1),
(861, 24, '2023-05-31', 1),
(862, 25, '2023-05-31', 1),
(863, 26, '2023-05-31', 1),
(864, 27, '2023-05-31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=865;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;