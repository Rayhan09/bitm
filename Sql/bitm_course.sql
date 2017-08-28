-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2016 at 04:40 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitm_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(111) NOT NULL,
  `title` varchar(111) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `course_fee` varchar(111) NOT NULL,
  `is_offer` int(10) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `unique_id`, `title`, `duration`, `description`, `course_type`, `course_fee`, `is_offer`, `is_delete`, `created`, `updated`, `deleted`) VALUES
(21, '57ad641938174', 'Web design', '3_months', 'Perticipants will work as Web Designer or Web Developer in local and global IT firms, telecom industry, corporate houses, banks, government agencies etc. or as Freelance professional.', '1', '12000', 1, 0, '2016-08-12 07:52:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '57ad64d06ac5b', 'Graphics & Web UI Design', '2_months', 'After completing this training program, the trainee will work as Graphic Designer or Design Support with Web Developer in local and global IT firms, telecom industry, corporate houses, banks, government agencies etc. or as Freelance professional.\r\n', '1', '13000', 0, 0, '2016-08-12 07:55:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '57ad650a0fb33', 'Digital Marketing', '3_months', 'After completing this training program, the trainee will have a proper knowledge on Digital Marketing and will able to work any organization as Digital Marketing Professional. Or, he can choose his profession as a freelancer and can work in outsourcing marketplace.\n', '0', '0', 0, 0, '2016-08-12 07:56:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '57ad652c3e71f', 'Web Application Development- Dot Net', '3_months', 'After completing this training program, the trainee will be able to work as a professional web application developer in a local market as well as offshore market place.', '1', '15000', 1, 0, '2016-08-12 07:57:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '57ad6555d741f', 'Web Application Development- PHP', '3_months', 'After completing this training program, the trainee will be able to work as a professional web application developer in a local market as well as offshore market place.', '1', '20000', 0, 0, '2016-08-12 07:57:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '57ad657098b53', 'Practical SEO', '2_months', 'After completing this training program, the trainee will have a proper knowledge on Digital Marketing and will able to work any organization as Internet Marketing Professional. Or, he can choose his profession as a freelancer and can work in outsourcing marketplace.', '0', '0', 1, 0, '2016-08-12 07:58:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '57ad6599a62a7', 'Affiliate Marketing  & E-commerce', '2_months', 'After completing this training program, the trainee will have a proper knowledge on Digital Marketing and will able to work any organization as Internet Marketing Professional. Or, he can choose his profession as a freelancer and can work in outsourcing marketplace.', '1', '10000', 0, 0, '2016-08-12 07:58:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '57ad65ba7ecd2', ' Mobile Application Development-Android', '3_months', 'Opportunities are same in the local market as well as offshore market to work as a mobile application developer.', '1', '20000', 1, 0, '2016-08-12 07:59:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '57ad65f34df45', 'Server Management and Cloud Management', '2_months', 'After completing this training program, the trainee will have a proper knowledge on Digital Marketing and will able to work any organization as Digital Marketing Professional. Or, he can choose his profession as a freelancer and can work in outsourcing marketplace.\r\n', '1', '20000', 1, 0, '2016-08-12 08:00:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '57ad661fec9de', 'IT support Technical', '2_months', 'After completing this training program, the trainee will have a proper knowledge on IT support Technical and will able to work any organization.', '0', '0', 0, 0, '2016-08-12 08:01:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '57ad6739e1ba0', 'Customer Support & Service', '1_month', 'After completing this program, the trainee will be able to work in any local company (Call Centre, Telecommunication & IT company) as customer support executive.', '1', '5000', 1, 0, '2016-08-12 08:05:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_trainer_lab_mapping`
--

CREATE TABLE `course_trainer_lab_mapping` (
  `id` int(11) NOT NULL,
  `course_id` int(111) NOT NULL,
  `batch_no` varchar(111) NOT NULL,
  `lead_trainer` varchar(111) NOT NULL,
  `asst_trainer` varchar(111) NOT NULL,
  `lab_asst` varchar(111) NOT NULL,
  `lab_id` int(111) NOT NULL,
  `start_date` varchar(111) NOT NULL,
  `ending_date` varchar(111) NOT NULL,
  `start_time` varchar(111) NOT NULL,
  `ending_time` varchar(111) NOT NULL,
  `day` varchar(111) NOT NULL,
  `is_running` int(11) NOT NULL,
  `assigned_by` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_trainer_lab_mapping`
--

INSERT INTO `course_trainer_lab_mapping` (`id`, `course_id`, `batch_no`, `lead_trainer`, `asst_trainer`, `lab_asst`, `lab_id`, `start_date`, `ending_date`, `start_time`, `ending_time`, `day`, `is_running`, `assigned_by`, `created`, `updated`, `deleted`) VALUES
(28, 22, 'GDS 26', 'Mian Zadid', 'Adiba', 'Monir', 403, '14/08/2016', '24/08/2016', '9 am', '1 am', 'sess-1', 1, 'tonmoy1a', '2016-08-13 07:56:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `installed_softwares`
--

CREATE TABLE `installed_softwares` (
  `id` int(11) NOT NULL,
  `labinfo_id` int(111) NOT NULL,
  `software_title` varchar(111) NOT NULL,
  `version` varchar(111) NOT NULL,
  `software_type` varchar(111) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labinfo`
--

CREATE TABLE `labinfo` (
  `id` int(11) NOT NULL,
  `course_id` int(100) NOT NULL,
  `lab_no` varchar(111) NOT NULL,
  `seat_capacity` varchar(111) NOT NULL,
  `projector_resolution` varchar(111) NOT NULL,
  `ac_status` varchar(111) NOT NULL,
  `pc_configuration` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `trainer_pc_configuration` varchar(255) NOT NULL,
  `table_capacity` varchar(100) NOT NULL,
  `internet_speed` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labinfo`
--

INSERT INTO `labinfo` (`id`, `course_id`, `lab_no`, `seat_capacity`, `projector_resolution`, `ac_status`, `pc_configuration`, `os`, `trainer_pc_configuration`, `table_capacity`, `internet_speed`, `created`, `updated`, `deleted`) VALUES
(1, 25, '301', '30', '', '', 'xampp', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 24, '302', '30', '', '', 'Visual_studio', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 22, '303', '30', '', '', 'photoshop', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 24, '401', '30', '', '', 'Visual_studio', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 22, '402', '30', '', '', 'photoshop', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 25, '403', '30', '', '', 'xampp', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 22, '501', '25', '', '', 'photoshop', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 24, '502', '25', '', '', 'Visual_studio', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 26, '503', '25', '', '', 'Google Analytics', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(111) NOT NULL,
  `full_name` varchar(111) NOT NULL,
  `edu_status` varchar(255) NOT NULL,
  `team` varchar(111) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `trainer_status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(111) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `web` varchar(111) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `unique_id`, `full_name`, `edu_status`, `team`, `courses_id`, `trainer_status`, `image`, `phone`, `email`, `address`, `gender`, `web`, `created`, `updated`, `deleted`) VALUES
(1, '', 'Tahir', '', 'PHP', 25, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'Madesh', '', 'DotNet', 24, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'Aadil', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'Babu', '', 'DotNet', 24, 'lab_assist', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 'Tabassum', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 'Bikash', '', 'PHP', 25, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 'Adiba', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 'Badal', '', 'DotNet', 24, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'Badhon', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'Monir', '', 'PHP', 25, 'lab_assist', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', 'Tanim', '', 'Graphics', 22, 'lab_assist', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', 'Habib', '', 'PHP', 25, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '', 'Zohirul Alam Tiemoon', '', 'DotNet', 24, 'lead_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '', 'M M Rahman Akash', '', 'Graphics', 22, 'lead_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '', 'Choyon', '', 'DotNet', 24, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '', 'Sadiq', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '', 'Sarkar', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '', 'Yasin', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '', 'Rafid', '', 'DotNet', 24, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '', 'Mumu', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '', 'Mehedi', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '', 'Sujon', '', 'PHP', 25, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '', 'Sumon', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '', 'Mian Zadid', '', 'PHP', 25, 'lead_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '', 'Enamul', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '', 'Monju', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '', 'Shajal', '', 'DotNet', 24, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '', 'Mohammad Al Amin Chowdhury', '', 'SEO', 26, 'lead_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '', 'Nupur', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '', 'Rafsan', '', 'Graphics', 22, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '', 'Shaon', '', 'DotNet', 24, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '', 'Tajrian', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '', 'Mizan', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '', 'Mishu', '', 'PHP', 25, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '', 'Polash', '', 'SEO', 26, 'lab_assist', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '', 'Fahad', '', 'PHP', 25, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '', 'Wakil', '', 'SEO', 26, 'assist_trainer', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(111) NOT NULL,
  `full_name` varchar(111) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(10) NOT NULL,
  `is_admin` int(10) NOT NULL,
  `is_delete` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `full_name`, `username`, `email`, `password`, `image`, `is_active`, `is_admin`, `is_delete`, `created`, `updated`, `deleted`) VALUES
(24, '57af6dd498d19', 'Tonmoy Das', 'tonmoy', 'tonmoy@mail.com', 'A1aaaa', '1471114708_slide2.png', 0, 1, 0, '2016-08-13 08:58:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_trainer_lab_mapping`
--
ALTER TABLE `course_trainer_lab_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installed_softwares`
--
ALTER TABLE `installed_softwares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labinfo`
--
ALTER TABLE `labinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `course_trainer_lab_mapping`
--
ALTER TABLE `course_trainer_lab_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `installed_softwares`
--
ALTER TABLE `installed_softwares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `labinfo`
--
ALTER TABLE `labinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
