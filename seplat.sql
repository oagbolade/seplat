-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 08:26 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seplat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `default_password` enum('no','yes') NOT NULL,
  `status` enum('inactive','active') NOT NULL,
  `token` char(16) NOT NULL,
  `user_type` enum('logger','vendor','vendor requestor','procurer','it','it super','developer','applicant','member1','member2','member3','member4','admission officer','approver','exam officer','clerk','admin') NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `default_password`, `status`, `token`, `user_type`, `date`) VALUES
(11, 'alabi10@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', 'fRjpkiHmx4gwqMaO', 'it super', '2018-07-04 05:07:45'),
(12, 'info@alabiansolutions.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', '7ZIQM0xSlw68banm', 'member2', '2018-07-04 05:13:35'),
(13, 'nonwaz@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', '6mjTcdqJSKw3MUgp', 'applicant', '2018-07-04 05:14:06'),
(17, 'prince.jonathan@alabiansolutions.com', '$2a$12$q.g9b586NIDlO5mPl1y2Cuptd4qGtPI/wJ/GE97d3gkkBZ9zooxHa', 'no', 'active', 'W5oQjSnflB1CHGg6', 'admission officer', '2018-07-09 15:38:32'),
(18, 'beatrice@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CubPI7F/lg2GMb3jopUTmOGKdNca8t8f2', 'no', 'active', 'XBqoawsd297mIZzj', 'approver', '2018-07-09 17:50:13'),
(21, 'opeyemi@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuJpfvHcy46MTJFUJ35n82LWXviojHaYS', 'no', 'active', 'ojcsTxBr2XzvCqJ6', 'exam officer', '2018-07-09 21:10:07'),
(22, 'alabi101@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', 'NRs56hmirALfelI0', 'applicant', '2018-07-12 10:06:10'),
(24, 'nonwaz101@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuGp9w2SlfCcCZrO7PPLkmmsxb0gEj/pG', 'no', 'active', 'fSkbxMHEaq0KVGTZ', 'applicant', '2018-07-19 03:04:54'),
(26, 'nonwaz102@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuTZFfN/VQu5Q932v4EqsEaeJxEu.ia52', 'yes', 'active', 'JNURuSYgXPnKHF4h', 'member4', '2018-07-19 03:24:09'),
(27, 'nonwaz103@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CurIVPihiwQanKI4GHEJcuQmIJXUIhyTq', 'no', 'active', 'r5LQgqDCwiM306aS', 'member1', '2018-07-21 16:22:00'),
(28, 'alabi1011@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2Cu2gkJKN4TkMFhjVchfPYeBN0QbUHvGS2', 'no', 'active', 'g9iVWPrzOSDt4nCd', 'member1', '2018-07-22 08:04:47'),
(29, 'alabi1012@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', 'gqJs32WRYbUpQTnM', 'member4', '2018-07-27 14:56:19'),
(30, 'alabi1013@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', 'AsT4DMpiRSNOnq2Z', 'member4', '2018-07-27 16:44:03'),
(31, 'alabi1014@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', '5efBCuRAryW09Esg', 'member1', '2018-08-05 11:05:26'),
(32, 'alabi1015@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', 'nFqCwmeHRv5QkPVJ', 'member3', '2018-08-08 03:12:40'),
(33, 'alabi1016@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuVEke6vLDo5/NqF3pFyuIBF//4SQCUWy', 'yes', 'active', 'iRjXGem6wZVuqKx1', 'applicant', '2018-08-08 05:34:55'),
(34, 'alabi1017@yahoo.com', '$2a$12$q.g9b586NIDlO5mPl1y2CuLSIiw6HrKvHRfHObB9z5jIPjvtbFeIq', 'no', 'active', '6tdwFeNVvkOiCZDj', 'applicant', '2018-08-08 05:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `options` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `other_info` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `options`, `value`, `other_info`) VALUES
(1, 'Application Fee', '5000', ''),
(2, 'Transactional Charges', '150', ''),
(3, 'Admin Fee Graduate', '12000', 'member1'),
(4, 'Admin Fee Associate', '13500', 'member2'),
(5, 'Admin Fee Member Exam', '15000', 'member4'),
(6, 'Admin Fee Member Research', '18000', 'member4');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_no` int(10) UNSIGNED NOT NULL,
  `email` varchar(64) NOT NULL,
  `f_name` varchar(16) NOT NULL,
  `s_name` varchar(16) NOT NULL,
  `m_name` varchar(16) NOT NULL,
  `phone` char(11) NOT NULL,
  `passport` char(16) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_no`, `email`, `f_name`, `s_name`, `m_name`, `phone`, `passport`, `date`) VALUES
(1, 'alabi10@yahoo.com', 'Alabi', 'Adebayo', '', '08034265103', 'profile.png', '2018-07-09 00:00:00'),
(4, 'prince.jonathan@alabiansolutions.com', 'Jonathan', 'Ikwu', '', '08069268340', 'profile.png', '2018-07-09 15:38:32'),
(5, 'beatrice@yahoo.com', 'Beatrice', 'Ogundele', 'Lola', '08069268341', 'profile.png', '2018-07-09 17:50:13'),
(8, 'opeyemi@yahoo.com', 'Opeyemi', 'Oyekunle', '', '08034265106', 'profile.png', '2018-07-09 21:10:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
