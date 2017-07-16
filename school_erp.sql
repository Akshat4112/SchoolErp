-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 08:51 AM
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
  `country` varchar(15) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `house_no`, `street_name`, `other_info`, `zip_code`, `city`, `state`, `country`, `student_id`) VALUES
(45, '', '', '', 0, '', '', '', 0),
(46, '', '', '', 0, '', '', '', 0),
(47, '', '', '', 0, '', '', '', 150),
(48, '878', 'asjdk', '', 0, '', '', '', 150),
(49, '77', '', '', 0, 'Agra', '', '', 150),
(50, '22', '', '', 0, 'Agra', '', '', 150),
(51, 'c-7', '', '', 0, 'Agra', '', '', 151),
(52, 'C-89', 'Kargil', '', 282019, 'Agra', 'UP', 'India', 152),
(53, '88', '', '', 0, 'agra', '', '', 153),
(54, 'c-7', 'Balaji Puram', 'Goyal provision store', 282010, 'Agra', 'Uttar Pradesh', 'India', 154),
(55, '81', 'Brij Vihar', '', 0, 'Agra', 'UP', 'India', 155),
(56, 'jashd', '', '', 0, 'jasdjasd', '', '', 156);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`) VALUES
(1, 'akshat41121995@gmail.com', 'nicola11', 'Akshat'),
(2, 'sajal@gmail.com', '1234', 'Sajal');

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
  `admission_form_no` int(11) NOT NULL,
  `date_admission` date NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachemnts`
--

INSERT INTO `attachemnts` (`attach_id`, `tc`, `cc`, `report_cc`, `dob_certificate`, `admission_form_no`, `date_admission`, `student_id`) VALUES
(0, 0, 0, 0, 0, 22, '0000-00-00', 151),
(0, 0, 0, 0, 0, 99, '0000-00-00', 151),
(0, 0, 0, 0, 0, 98, '0000-00-00', 152),
(0, 0, 0, 0, 0, 99, '0000-00-00', 153),
(0, 0, 0, 0, 0, 909, '0000-00-00', 154),
(0, 0, 0, 0, 0, 909, '0000-00-00', 154),
(0, 0, 0, 0, 0, 909, '0000-00-00', 154),
(0, 0, 0, 0, 0, 899, '0000-00-00', 155);

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
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `hindu` varchar(10) NOT NULL,
  `christian` varchar(10) NOT NULL,
  `sikh` varchar(10) NOT NULL,
  `muslim` varchar(10) NOT NULL,
  `caste_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `general` varchar(10) NOT NULL,
  `obc` varchar(10) NOT NULL,
  `sc` varchar(10) NOT NULL,
  `st` varchar(10) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `1` int(2) NOT NULL,
  `2` int(2) NOT NULL,
  `3` int(2) NOT NULL,
  `4` int(2) NOT NULL,
  `class_id` int(11) NOT NULL
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
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `red` varchar(20) NOT NULL,
  `green` varchar(20) NOT NULL,
  `blue` varchar(20) NOT NULL
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
  `las` varchar(50) NOT NULL,
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
  `dental_hy` varchar(20) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc_info`
--

INSERT INTO `misc_info` (`las`, `remarks`, `last_exam_given`, `year`, `status`, `marks`, `board`, `bg`, `vl`, `vr`, `height`, `weight`, `dental_hy`, `student_id`) VALUES
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('masd', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('jhj', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 151),
('St. Peters', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 152),
('simpkins school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 153),
('Holy public school', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 154),
('University Model School', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 155);

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
  `discontinue_date` date NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_balance`
--

INSERT INTO `old_balance` (`balance_id`, `ledger_balance`, `fees_balance`, `comments`, `hostel_room_no`, `bed_no`, `scholarship_no`, `aadhar_uid`, `family`, `status`, `discontinue_date`, `student_id`) VALUES
(1, 66, 0, '', 0, 0, 0, 0, '', '', '0000-00-00', 151),
(2, 66, 0, '', 0, 0, 0, 0, '', '', '0000-00-00', 151),
(3, 8782, 0, '', 0, 0, 0, 0, '', '', '0000-00-00', 153),
(4, 9898, 0, '', 0, 0, 0, 0, '', '', '0000-00-00', 154),
(5, 6000, 0, '', 0, 0, 0, 0, '', '', '0000-00-00', 155);

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
  `parents_wedding_date` date NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_info`
--

INSERT INTO `other_info` (`other_info_id`, `fathers_first_name`, `fathers_middle_name`, `fathers_last_name`, `f_mobile`, `f_qual`, `f_occu`, `f_dob`, `f_photo`, `mothers_first_name`, `mothers_middle_name`, `mothers_last_name`, `m_mobile`, `m_qual`, `m_occu`, `m_dob`, `m_photo`, `parents_wedding_date`, `student_id`) VALUES
(34, 'Akshat', '', '', 0, '', 'service', '0000-00-00', 0, 'Ridhima', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 151),
(35, 'asdasd', '', '', 0, '', 'service', '0000-00-00', 0, 'asda', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 151),
(36, 'asdasd', '', '', 0, '', 'service', '0000-00-00', 0, 'asda', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 151),
(37, 'asdasd', '', '', 0, '', 'service', '0000-00-00', 0, 'asda', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 151),
(38, 'Sanjay ', '', 'Mehra', 0, '', 'service', '0000-00-00', 0, 'Veena ', '', 'Mehra', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 152),
(39, 'ajsdhj', '', '', 0, '', 'service', '0000-00-00', 0, 'ajsdjas', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 153),
(40, 'Alok ', '', '', 0, '', 'service', '0000-00-00', 0, 'Gupta', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 154),
(41, 'Kaushal Kishore Garg', '', '', 0, '', 'service', '0000-00-00', 0, 'Kalpna Garg', '', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 155),
(42, 'asdbasjd', '', '', 0, '', 'service', '0000-00-00', 0, 'jashdjas', 'ajd', '', 0, '', 'service', '0000-00-00', 0, '0000-00-00', 156);

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
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(2) NOT NULL,
  `A` varchar(2) NOT NULL,
  `B` varchar(2) NOT NULL,
  `C` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(150, 'Akshat', 'Kumar', 'Gupta', 'Ist', 'A', 5, 'COD', 'Hindu', 'General', 'Green', 0, 140212, 'Male', '1995-11-21'),
(151, 'Sajal', '', 'Bansal', 'Ist', 'A', 88, '', 'Hindu', 'General', 'Red', 0, 140213, 'Male', '2017-07-07'),
(152, 'Aman', '', 'Mehra', 'Ist', 'A', 8, 'Madia Katra', 'Hindu', 'General', 'Red', 0, 98, 'Male', '2221-02-12'),
(153, 'Reeta', '', 'Kholi', 'Ist', 'A', 67, 'maruti estate', 'Hindu', 'General', 'Red', 0, 99, 'Male', '1997-02-02'),
(154, 'Arjit', '', 'Gupta', 'Vth', 'A', 6, 'Balaji Puram', 'Hindu', 'General', 'Red', 0, 100, 'Male', '1998-08-14'),
(155, 'Ridhima ', '', 'Garg', 'Ist', 'A', 70, '', 'Hindu', 'General', 'Red', 0, 101, 'Male', '1997-02-20'),
(156, 'Ridhima ', '', 'Gupta', 'Ist', 'A', 99, 'Kamla Nagar', 'Hindu', 'General', 'Red', 0, 0, 'Male', '2001-02-01');

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
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`caste_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

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
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

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
  MODIFY `address_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `caste_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `old_balance`
--
ALTER TABLE `old_balance`
  MODIFY `balance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `other_info`
--
ALTER TABLE `other_info`
  MODIFY `other_info_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
