-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 09:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(5) NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `street_name` text NOT NULL,
  `other_info` text NOT NULL,
  `zip_code` int(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attachemnts`
--

CREATE TABLE `attachemnts` (
  `attach_id` int(11) NOT NULL,
  `tc` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `report_cc` int(11) NOT NULL,
  `dob_certificate` int(11) NOT NULL,
  `admission_form` int(11) NOT NULL,
  `date_admission` date NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `balance_student`
--

CREATE TABLE `balance_student` (
  `balance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(30) NOT NULL,
  `message` text NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info_multiple`
--

CREATE TABLE `info_multiple` (
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `misc_info`
--

CREATE TABLE `misc_info` (
  `misc_info_id` int(11) NOT NULL,
  `last_attended_school` varchar(50) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `last_exam_given` varchar(20) NOT NULL,
  `year` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `marks` int(2) NOT NULL,
  `board` varchar(20) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `vl` int(10) NOT NULL,
  `vr` int(10) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `dental_hy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `old_balance`
--

CREATE TABLE `old_balance` (
  `balance_id` int(11) NOT NULL,
  `ledger_balance` int(10) NOT NULL,
  `fees_balance` int(10) NOT NULL,
  `comments` text NOT NULL,
  `hostel_room_no` int(5) NOT NULL,
  `bed_no` int(5) NOT NULL,
  `scholarship_no` int(10) NOT NULL,
  `aadhar_uid` int(16) NOT NULL,
  `family` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `discontinue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `other_info_id` int(10) NOT NULL,
  `fathers_first_name` varchar(20) NOT NULL,
  `fathers_middle_name` varchar(20) NOT NULL,
  `fathers_last_name` varchar(20) NOT NULL,
  `f_mobile` int(10) NOT NULL,
  `f_qual` varchar(20) NOT NULL,
  `f_occu` varchar(20) NOT NULL,
  `f_dob` date NOT NULL,
  `f_photo` int(11) NOT NULL,
  `mothers_first_name` varchar(20) NOT NULL,
  `mothers_middle_name` varchar(20) NOT NULL,
  `mothers_last_name` varchar(20) NOT NULL,
  `m_mobile` int(10) NOT NULL,
  `m_qual` varchar(20) NOT NULL,
  `m_occu` varchar(10) NOT NULL,
  `m_dob` date NOT NULL,
  `m_photo` int(11) NOT NULL,
  `parents_wedding_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerId` int(10) NOT NULL,
  `ownerEmail` varchar(50) NOT NULL,
  `ownerPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerId`, `ownerEmail`, `ownerPass`) VALUES
(1, 'akshat41121995@gmail.com', 'nicola11'),
(2, 'sajal.mnc@gmail.com', 'sajal1234'),
(3, 'sachin@gmail.com', 'sachin1234\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(5) NOT NULL,
  `student_first_name` varchar(20) NOT NULL,
  `student_middle_name` varchar(20) NOT NULL,
  `student_last_name` varchar(20) NOT NULL,
  `student_class` varchar(10) NOT NULL,
  `student_section` varchar(5) NOT NULL,
  `student_roll_no` int(2) NOT NULL,
  `route` varchar(20) DEFAULT NULL,
  `caste` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `house` varchar(10) NOT NULL,
  `student_photo` int(11) DEFAULT NULL,
  `admission_no` int(5) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `student_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_first_name`, `student_middle_name`, `student_last_name`, `student_class`, `student_section`, `student_roll_no`, `route`, `caste`, `category`, `house`, `student_photo`, `admission_no`, `gender`, `student_dob`) VALUES
(19, 'Satyam', 'Kumar', 'Gupta', 'VIIth', 'B', 98, 'COD', 'Hindu', 'General', 'Green', 0, 887, 'Male', '1999-12-08'),
(20, 'Shivam', 'ku', 'Gupta', 'IInd', 'C', 5, 'Bodla', 'Hindu', 'General', 'Green', 0, 67, 'Male', '1995-04-12'),
(21, 'Sajal', 'B', 'Bansal', 'IInd', 'B', 77, 'Shahganj', 'Hindu', 'General', 'Green', 0, 123, 'Male', '1222-02-21'),
(22, 'Abcd', '', 'defg', 'Ist', 'A', 0, '', 'Hindu', 'General', 'Red', 0, 0, 'Male', '0000-00-00'),
(23, 'Akshat', '', 'Gupta', 'Ist', 'A', 0, '', 'Hindu', 'General', 'Red', 0, 0, 'Male', '0000-00-00'),
(24, 'Aksaht', '', '123', 'Ist', 'A', 0, '', 'Hindu', 'General', 'Red', 0, 0, 'Male', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

CREATE TABLE `student_address` (
  `student_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `misc_info`
--
ALTER TABLE `misc_info`
  ADD PRIMARY KEY (`misc_info_id`);

--
-- Indexes for table `old_balance`
--
ALTER TABLE `old_balance`
  ADD PRIMARY KEY (`balance_id`);

--
-- Indexes for table `other_info`
--
ALTER TABLE `other_info`
  ADD PRIMARY KEY (`other_info_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `misc_info`
--
ALTER TABLE `misc_info`
  MODIFY `misc_info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `old_balance`
--
ALTER TABLE `old_balance`
  MODIFY `balance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_info`
--
ALTER TABLE `other_info`
  MODIFY `other_info_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
