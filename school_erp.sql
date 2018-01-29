-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 10:39 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `print_name` text NOT NULL,
  `group_acc` varchar(15) NOT NULL,
  `op_bal` int(5) NOT NULL,
  `dr_cr` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `address1` text NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `contact_per` varchar(20) NOT NULL,
  `birthday_on` date NOT NULL,
  `anniv_on` date NOT NULL,
  `bank_name` text NOT NULL,
  `bank_acc_no` int(11) NOT NULL,
  `cheque_p_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `print_name`, `group_acc`, `op_bal`, `dr_cr`, `address`, `address1`, `city`, `state`, `email`, `phone`, `mobile`, `contact_per`, `birthday_on`, `anniv_on`, `bank_name`, `bank_acc_no`, `cheque_p_name`) VALUES
(3, 'Banks Account', 'BA', 'Banks', 5000, 'dr', 'Balaji Puram', '', 'Agra', 'Uttar Pradesh', 'Akshat41121995@gmail.com', 2147483647, 2147483647, 'Rajesh', '2017-08-17', '2017-08-15', 'SBI', 2147483647, 'SBI Cheque'),
(4, 'Direct Income', '', 'Banks', 0, 'dr', '', '', '', '', '', 0, 0, '', '0000-00-00', '0000-00-00', '', 0, ''),
(5, 'Direct Income', '', 'Banks', 0, 'dr', '', '', '', '', '', 0, 0, '', '0000-00-00', '0000-00-00', '', 0, ''),
(6, 'Direct Income', '', 'Banks', 0, 'dr', '', '', '', '', '', 0, 0, '', '0000-00-00', '0000-00-00', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `account_group`
--

CREATE TABLE `account_group` (
  `account_group_id` int(11) NOT NULL,
  `account_group_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_group`
--

INSERT INTO `account_group` (`account_group_id`, `account_group_name`) VALUES
(38, 'Banks'),
(40, 'Library'),
(47, 'Transport'),
(48, 'test'),
(49, 'tution'),
(51, 'Group2'),
(52, 'Group1'),
(53, 'testgr');

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
(2, 'sajal@gmail.com', '1234', 'Sajal'),
(4, 'admin@gmail.com', '1234', 'Admin\r\n'),
(5, 'user@gmail.com', 'user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessment_id` int(100) NOT NULL,
  `assessment_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `date` date NOT NULL,
  `class` varchar(5) NOT NULL,
  `section` varchar(3) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`date`, `class`, `section`, `student_id`, `status`) VALUES
('0000-00-00', 'Prese', '293', 0, '2'),
('2017-09-20', '2', 'A', 293, '0'),
('2017-09-20', '2', 'A', 293, 'P'),
('2017-09-26', '2', 'A', 284, 'P'),
('2017-09-26', '2', 'A', 286, 'P'),
('2017-09-26', '2', 'A', 289, 'P'),
('2017-09-26', '2', 'A', 290, 'P'),
('2017-09-26', '2', 'A', 291, 'P'),
('2017-09-26', '2', 'A', 293, 'P'),
('2017-09-26', '2', 'A', 284, 'P'),
('2017-09-26', '2', 'A', 286, 'P'),
('2017-09-26', '2', 'A', 289, 'P'),
('2017-09-26', '2', 'A', 290, 'P'),
('2017-09-26', '2', 'A', 291, 'P'),
('2017-09-26', '2', 'A', 293, 'P'),
('2017-09-27', '2', 'A', 284, 'P'),
('2017-09-27', '2', 'A', 286, 'P'),
('2017-09-27', '2', 'A', 289, 'P'),
('2017-09-27', '2', 'A', 290, 'P'),
('2017-09-27', '2', 'A', 291, 'P'),
('2017-09-27', '2', 'A', 293, 'P'),
('2017-09-26', '3', 'A', 111, 'A'),
('2017-09-26', '3', 'A', 112, 'P'),
('2017-09-26', '3', 'A', 113, 'P'),
('0000-00-00', '2', 'A', 284, 'P'),
('0000-00-00', '2', 'A', 286, 'P'),
('0000-00-00', '2', 'A', 289, 'P'),
('0000-00-00', '2', 'A', 290, 'P'),
('0000-00-00', '2', 'A', 291, 'P'),
('0000-00-00', '2', 'A', 293, 'P'),
('2017-09-19', '2', 'A', 284, 'P'),
('2017-09-19', '2', 'A', 286, 'P'),
('2017-09-19', '2', 'A', 289, 'P'),
('2017-09-19', '2', 'A', 290, 'P'),
('2017-09-19', '2', 'A', 291, 'P'),
('2017-09-19', '2', 'A', 293, 'P'),
('2017-09-26', '2', 'A', 334, 'A'),
('0000-00-00', '2', 'A', 284, 'P'),
('0000-00-00', '2', 'A', 286, 'P'),
('0000-00-00', '2', 'A', 289, 'P'),
('0000-00-00', '2', 'A', 290, 'P'),
('0000-00-00', '2', 'A', 291, 'P'),
('0000-00-00', '2', 'A', 293, 'P'),
('2017-09-13', '2', 'A', 284, 'P'),
('2017-09-13', '2', 'A', 286, 'P'),
('2017-09-13', '2', 'A', 290, 'A'),
('2017-09-13', '2', 'A', 291, 'P'),
('2017-09-13', '2', 'A', 293, 'P'),
('2017-09-21', '2', 'A', 284, 'P'),
('2017-09-21', '2', 'A', 284, 'P'),
('2017-09-26', '2', 'A', 284, 'P'),
('2017-09-26', '2', 'A', 284, 'P'),
('2017-09-06', '2', 'A', 284, 'P'),
('2017-09-27', '2', 'A', 284, 'P'),
('2017-09-27', '2', 'A', 284, 'P'),
('0000-00-00', '2', 'A', 284, 'P'),
('2017-10-25', '2', 'A', 284, 'P'),
('2017-10-17', '2', 'A', 284, 'P'),
('2017-10-16', '2', 'A', 284, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `bill_sundry`
--

CREATE TABLE `bill_sundry` (
  `bill_sundry_id` int(11) NOT NULL,
  `charge_head` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `caste_id` int(3) NOT NULL,
  `caste_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`caste_id`, `caste_name`) VALUES
(39, 'Hindu'),
(41, 'Muslim'),
(42, 'Christian'),
(43, 'Defence'),
(44, 'Sikhs'),
(45, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(29, 'General'),
(30, 'OBC'),
(31, 'SC'),
(32, 'ST'),
(34, 'Minorities');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class` int(2) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `start_from` date NOT NULL,
  `incharge` varchar(25) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class`, `prefix`, `start_from`, `incharge`, `class_id`) VALUES
(2, '', '0000-00-00', '', 30),
(3, '', '0000-00-00', '', 31),
(4, '', '0000-00-00', '', 32),
(5, '', '0000-00-00', 'mr nicshay', 35),
(6, 'th', '0000-00-00', 'xyz', 36),
(13, 'th', '2017-09-20', 'Mr. Mittal', 37),
(15, 'th', '0000-00-00', 'Mr. Joraver', 38),
(99, 'th', '2017-12-31', 'Ms Ridhima', 40),
(77, '', '0000-00-00', '', 41),
(122, '', '2017-10-16', '', 42);

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
-- Table structure for table `contra`
--

CREATE TABLE `contra` (
  `contra_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `d_c` varchar(5) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `short_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit_note`
--

CREATE TABLE `credit_note` (
  `credit_note_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `d_c` varchar(5) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `short_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `debit_note`
--

CREATE TABLE `debit_note` (
  `debit_note_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `d_c` varchar(5) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `short_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `family_id` int(11) NOT NULL,
  `family_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees_head`
--

CREATE TABLE `fees_head` (
  `fees_head_id` int(11) NOT NULL,
  `fees_heading` text NOT NULL,
  `group_name` text NOT NULL,
  `account_name` text NOT NULL,
  `frequency` text NOT NULL,
  `january` int(11) DEFAULT NULL,
  `february` int(11) DEFAULT NULL,
  `march` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `june` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `august` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `october` int(11) DEFAULT NULL,
  `december` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_head`
--

INSERT INTO `fees_head` (`fees_head_id`, `fees_heading`, `group_name`, `account_name`, `frequency`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `december`, `november`) VALUES
(34, 'Admission Fees', 'General', 'Direct Income', 'one_time', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Annual Fees', 'General', 'Direct Income', 'annual', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Tuition Fees', 'General', 'Banks Account', 'monthly', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(37, 'Exam Fees', 'General', 'Banks Account', 'half_yearly', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(38, 'Computer Fees', 'General', 'Banks Account', 'annual', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Computer Fees 1', 'General', 'Banks Account', 'monthly', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(40, 'uniform fees', 'uniform', 'Banks Account', 'quaterly', 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL),
(41, 'fh1', 'g1', 'Banks Account', 'monthly', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fees_head_group`
--

CREATE TABLE `fees_head_group` (
  `fees_head_group_id` int(11) NOT NULL,
  `fees_head_group_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_head_group`
--

INSERT INTO `fees_head_group` (`fees_head_group_id`, `fees_head_group_name`) VALUES
(18, 'General'),
(19, 'uniform'),
(20, 'g1');

-- --------------------------------------------------------

--
-- Table structure for table `fees_plan`
--

CREATE TABLE `fees_plan` (
  `fees_heading` varchar(20) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `category` varchar(5) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_plan`
--

INSERT INTO `fees_plan` (`fees_heading`, `value`, `category`, `class`) VALUES
('fh1', 200, 'SC', '3'),
('fh1', 200, 'SC', '3'),
('fh1', 200, 'SC', '4'),
('fh1', 200, 'OBC', '3'),
('fh1', 200, 'OBC', '4'),
('fh1', 335, 'Gener', '2'),
('fh1', 335, 'Gener', '3'),
('fh1', 456, 'SC', '4'),
('fh1', 456, 'SC', '5'),
('library', 4598, 'Gener', '5'),
('Admission Fees', 1000, 'New', '2'),
('Admission Fees', 1000, 'New', '3'),
('Admission Fees', 1000, 'New', '4'),
('Admission Fees', 1000, 'New', '5'),
('Admission Fees', 2000, 'New', '6'),
('Admission Fees', 2000, 'New', '13'),
('Admission Fees', 2000, 'New', '15'),
('Admission Fees', 2000, 'New', '99'),
('Admission Fees', 2000, 'New', '77'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('Admission Fees', 98, 'Old', '2'),
('Admission Fees', 98, 'Old', '3'),
('Admission Fees', 98, 'New', '2'),
('Admission Fees', 98, 'New', '3'),
('fh1', 500, 'New', '2');

-- --------------------------------------------------------

--
-- Table structure for table `fees_plan_category`
--

CREATE TABLE `fees_plan_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_plan_category`
--

INSERT INTO `fees_plan_category` (`category_id`, `category_name`) VALUES
(29, 'Old'),
(30, 'New'),
(31, 'millitary'),
(32, 'obc');

-- --------------------------------------------------------

--
-- Table structure for table `fees_reciept`
--

CREATE TABLE `fees_reciept` (
  `reciept_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reciept_no` int(5) NOT NULL,
  `admission_no` int(5) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `may` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `aug` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `oct` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `dece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_reciept`
--

INSERT INTO `fees_reciept` (`reciept_id`, `date`, `reciept_no`, `admission_no`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dece`) VALUES
(12, '0000-00-00', 22, 4, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(13, '0000-00-00', 22, 4, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(14, '0000-00-00', 22, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(15, '0000-00-00', 4, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, '0000-00-00', 4, 8, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, '0000-00-00', 7, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, '0000-00-00', 7, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, '0000-00-00', 7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, '0000-00-00', 7, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, '0000-00-00', 7, 5, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(22, '0000-00-00', 7, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, '0000-00-00', 7, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, '0000-00-00', 7, 8, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, '0000-00-00', 5, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, '0000-00-00', 5, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, '0000-00-00', 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, '0000-00-00', 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, '0000-00-00', 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, '0000-00-00', 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, '0000-00-00', 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '0000-00-00', 5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, '0000-00-00', 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, '0000-00-00', 8, 23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, '0000-00-00', 8, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, '0000-00-00', 8, 289, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, '0000-00-00', 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, '0000-00-00', 8, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, '0000-00-00', 8, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, '0000-00-00', 8, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, '0000-00-00', 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, '0000-00-00', 8, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, '0000-00-00', 8, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, '0000-00-00', 8, 8, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(45, '0000-00-00', 8, 288, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, '0000-00-00', 8, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, '0000-00-00', 8, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, '0000-00-00', 8, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '2017-10-16', 90, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, '0000-00-00', 90, 8, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0),
(51, '0000-00-00', 6, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, '0000-00-00', 6, 9, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0),
(53, '0000-00-00', 7, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, '0000-00-00', 7, 9, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(55, '0000-00-00', 0, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE `gatepass` (
  `gatepass_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `profession` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `purpose` text NOT NULL,
  `date_of_visit` date NOT NULL,
  `time_of_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expected_return_date` date NOT NULL,
  `expected_return_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `proof_of_identity` text NOT NULL,
  `items_retained` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `house_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `house_name`) VALUES
(17, 'Blue'),
(18, 'Yellow'),
(19, 'Red'),
(20, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `d_c` varchar(5) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `short_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation_info`
--

CREATE TABLE `organisation_info` (
  `org_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(25) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `fax_no` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `website` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `pan_no` varchar(15) NOT NULL,
  `affiliation` text NOT NULL,
  `license_no` int(20) NOT NULL,
  `service_tax_no` int(20) NOT NULL,
  `session_start` date NOT NULL,
  `session_end` date NOT NULL,
  `dise_code` int(11) DEFAULT NULL,
  `school_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation_info`
--

INSERT INTO `organisation_info` (`org_id`, `name`, `address_1`, `address_2`, `city`, `phone_no`, `fax_no`, `mobile`, `email`, `password`, `website`, `contact_person`, `pan_no`, `affiliation`, `license_no`, `service_tax_no`, `session_start`, `session_end`, `dise_code`, `school_code`) VALUES
(4, 'Simpkins School', 'A22', 'maruti estate', 'Agra', 98989898, 287832, 878797897, 'akshat41121995@gmail.com', 'nicola', 'www.futureheadech.com', 'akshat', '9882ckkasj09', 'cbse', 29, 0, '1222-12-12', '3122-12-12', 32145, 921834);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `vch_no` int(5) NOT NULL,
  `d_c` int(5) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `short_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `vch_no` int(10) NOT NULL,
  `d_c` varchar(5) NOT NULL,
  `account_name` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `short_narration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `route_name` text NOT NULL,
  `freq` varchar(20) NOT NULL,
  `january` int(11) DEFAULT NULL,
  `february` int(11) DEFAULT NULL,
  `march` int(11) DEFAULT NULL,
  `april` int(11) DEFAULT NULL,
  `may` int(11) DEFAULT NULL,
  `june` int(11) DEFAULT NULL,
  `july` int(11) DEFAULT NULL,
  `august` int(11) DEFAULT NULL,
  `september` int(11) DEFAULT NULL,
  `october` int(11) DEFAULT NULL,
  `november` int(11) DEFAULT NULL,
  `december` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route_plan`
--

CREATE TABLE `route_plan` (
  `route_plan_id` int(11) NOT NULL,
  `route_name` varchar(50) NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(2) NOT NULL,
  `section_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(100, 'C'),
(104, 'E'),
(107, 'A'),
(108, 'B');

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
  `student_dob` date NOT NULL,
  `house_no` varchar(5) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `other_info` varchar(60) NOT NULL,
  `zip_code` varchar(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `fathers_first_name` varchar(20) NOT NULL,
  `fathers_middle_name` varchar(20) NOT NULL,
  `fathers_last_name` varchar(25) NOT NULL,
  `f_mobile` int(10) NOT NULL,
  `f_qual` varchar(15) NOT NULL,
  `f_occu` varchar(15) NOT NULL,
  `f_dob` date NOT NULL,
  `f_photo` text NOT NULL,
  `mothers_first_name` varchar(20) NOT NULL,
  `mothers_middle_name` varchar(15) NOT NULL,
  `mothers_last_name` varchar(20) NOT NULL,
  `m_mobile` int(10) NOT NULL,
  `m_qual` varchar(15) NOT NULL,
  `m_occu` varchar(15) NOT NULL,
  `m_dob` date NOT NULL,
  `m_photo` text NOT NULL,
  `parents_wedding_date` date NOT NULL,
  `las` varchar(50) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `last_exam_given` varchar(20) NOT NULL,
  `year` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `marks` int(11) NOT NULL,
  `board` varchar(10) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `vl` int(10) NOT NULL,
  `vr` int(10) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `dental_hy` varchar(20) NOT NULL,
  `tc` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `report_cc` int(11) NOT NULL,
  `dob_certificate` int(11) NOT NULL,
  `admission_form_no` int(11) NOT NULL,
  `date_admission` date NOT NULL,
  `ledger_balance` int(5) NOT NULL,
  `fees_balance` int(5) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `hostel_room_no` varchar(5) NOT NULL,
  `bed_no` int(5) NOT NULL,
  `scholarship_no` int(10) NOT NULL,
  `aadhar_uid` int(16) NOT NULL,
  `family` varchar(20) NOT NULL,
  `status_adm` varchar(10) NOT NULL,
  `discontinue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_first_name`, `student_middle_name`, `student_last_name`, `student_class`, `student_section`, `student_roll_no`, `route`, `caste`, `category`, `house`, `student_photo`, `admission_no`, `gender`, `student_dob`, `house_no`, `street_name`, `other_info`, `zip_code`, `city`, `state`, `country`, `fathers_first_name`, `fathers_middle_name`, `fathers_last_name`, `f_mobile`, `f_qual`, `f_occu`, `f_dob`, `f_photo`, `mothers_first_name`, `mothers_middle_name`, `mothers_last_name`, `m_mobile`, `m_qual`, `m_occu`, `m_dob`, `m_photo`, `parents_wedding_date`, `las`, `remarks`, `last_exam_given`, `year`, `status`, `marks`, `board`, `bg`, `vl`, `vr`, `height`, `weight`, `dental_hy`, `tc`, `cc`, `report_cc`, `dob_certificate`, `admission_form_no`, `date_admission`, `ledger_balance`, `fees_balance`, `comments`, `hostel_room_no`, `bed_no`, `scholarship_no`, `aadhar_uid`, `family`, `status_adm`, `discontinue_date`) VALUES
(283, 'Akshat', '', 'Gupta', '3', 'B', 5, '300', 'Hindu', 'General', 'Yellow', 0, 1, 'Male', '1995-04-12', '7', '', '', '', 'agra', '', '', 'alok', '', '', 0, '', 'business', '0000-00-00', '', 'varsha', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'simpkins school', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 75, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(284, 'Abhinav', '', 'Singh', '2', 'A', 0, '', 'Hindu', 'General', 'Blue', 0, 2, 'Male', '0000-00-00', '76', '', '', '', 'Newyork', '', '', 'XYZA', '', '', 0, '', 'business', '0000-00-00', '', 'BCDE', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'St. Peters', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 1623, '0000-00-00', 735, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(285, 'Akshat', '', 'Gupta', '4', 'B', 5, 'Balaji Puram', 'Hindu', 'General', 'Green', 0, 3, 'Male', '1995-04-12', 'b21', '', '', '', 'Agra', '', '', 'ak', '', '', 0, '', 'business', '0000-00-00', '', 'va', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'ss', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 8123, '0000-00-00', 250, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(286, 'Aman', '', 'Mehra', '2', 'A', 8, 'Kargil', 'Hindu', 'General', 'Blue', 0, 4, 'Male', '2222-02-22', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(287, 'Naina', '', 'Sharma', '3', 'C', 88, 'Kamla Nagar', 'Hindu', 'OBC', 'Yellow', 0, 5, 'Femal', '1996-10-10', '88', '', '', '282010', 'Agra', '', '', 'Shyam ', '', 'Sharma', 0, '', 'business', '0000-00-00', '', 'Radha Sharms', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'UML', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 123, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(288, 'Himanshi', '', 'Gupta', '3', 'C', 45, 'Jaipur House', 'Hindu', 'General', 'Red', 0, 6, 'femal', '1998-10-10', '78', '', '', '', 'kanpur', '', '', 'anil', '', '', 0, '', 'business', '0000-00-00', '', 'poonam', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'st petrics', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 56, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(289, 'Shashank', '', '', '2', 'A', 0, '', 'Hindu', 'General', 'Blue', 0, 7, 'male', '0000-00-00', '77', '', '', '', 'agra', '', '', 'Ak', '', '', 0, '', 'business', '0000-00-00', '', 'VK', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(290, 'manushi', '', '', '2', 'A', 0, '', 'Hindu', 'General', 'Blue', 0, 8, 'male', '0000-00-00', '77', '', '', '', 'Agra', '', '', 'abcd', '', '', 0, '', 'business', '0000-00-00', '', 'efgh', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'ss', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 66, '0000-00-00', 765, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(291, 'Akshat', '', '', '2', 'A', 0, '', 'Hindu', 'General', 'Blue', NULL, 9, 'male', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(293, 'Test', '', '', '2', 'A', 0, '', 'Hindu', 'General', 'Blue', NULL, 10, 'male', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(294, 'Ram', '', 'Verma', '2', 'C', 0, 'Balaji Puram', 'Hindu', 'General', 'Blue', NULL, 11, 'male', '0000-00-00', 'c 7', '', '', '', 'Agra', '', '', 'Ram', '', 'Verma', 2147483647, '', 'business', '0000-00-00', '', 'Ram', '', 'Verma', 2147483647, '', 'business', '0000-00-00', '', '0000-00-00', 'Verma', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 923, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(295, 'abcd', '', '', '2', 'E', 9, 'Shahganj', 'Hindu', 'General', 'Yellow', NULL, 12, 'male', '2017-12-31', '66', '', '', '', 'agra', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(296, 'Sajal', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 13, 'male', '0000-00-00', '77', '', '', '', 'Agra', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(297, 'asd', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 14, 'male', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(298, 'Akshat', '', '', '2', 'C', 0, 'Balaji Puram', 'Hindu', 'General', 'Blue', NULL, 15, 'male', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(299, 'Sachin', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 16, 'male', '0000-00-00', '99', '', '', '', 'Agra', '', '', 'Fname', '', '', 0, '', 'business', '0000-00-00', '', 'mname', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'ss', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 90, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(300, 'asd', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 17, 'male', '0000-00-00', '1', '', '', '', 'agra', '', '', 'asd', '', '', 0, '', 'business', '0000-00-00', '', 'asjdhasjd', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'as', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(301, 'Raja', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 18, 'male', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(302, 'Raja', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 18, 'male', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 0, '', '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '', '', 0, 0, 0, '', '', '0000-00-00'),
(303, 'Raja', '', '', '2', 'C', 0, '', 'Hindu', 'General', 'Blue', NULL, 18, 'male', '0000-00-00', '445', '', '', '', 'dash', '', '', 'abcd', '', '', 0, '', 'business', '0000-00-00', '', 'efgh', '', '', 0, '', 'business', '0000-00-00', '', '0000-00-00', 'DPS', '', '', '0000-00-00', 'pass', 0, '', 'a+', 0, 0, 0, 0, '', 0, 0, 0, 0, 1823, '0000-00-00', 788, 0, '', '', 0, 0, 0, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_leaving_certificate`
--

CREATE TABLE `student_leaving_certificate` (
  `slc_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `m_name` varchar(25) NOT NULL,
  `class` int(3) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `end_date` date NOT NULL,
  `start_date` date NOT NULL,
  `dob` date NOT NULL,
  `dob_words` text NOT NULL,
  `class_present` int(3) NOT NULL,
  `year` int(4) NOT NULL,
  `start_class` int(11) DEFAULT NULL,
  `caste_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_leaving_certificate`
--

INSERT INTO `student_leaving_certificate` (`slc_id`, `name`, `f_name`, `m_name`, `class`, `school_name`, `end_date`, `start_date`, `dob`, `dob_words`, `class_present`, `year`, `start_class`, `caste_name`) VALUES
(1, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(2, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(3, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(4, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(5, 'Satyam', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(6, 'Aman', 'Naman', 'Swati', 8, 'Simpkins School', '0000-00-00', '0000-00-00', '0000-00-00', 'aksjdkajskjdak', 8, 2018, 0, 'general'),
(7, 'Aman', 'Naman', 'Swati', 8, 'Simpkins School', '0000-00-00', '0000-00-00', '0000-00-00', 'aksjdkajskjdak', 8, 2018, 0, 'general'),
(8, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(9, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(10, 'Akshat', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(11, 'AG', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(12, 'Prashant', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, ''),
(13, 'Aman', '', '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(100) NOT NULL,
  `subject_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(100) NOT NULL,
  `term_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `account_group`
--
ALTER TABLE `account_group`
  ADD PRIMARY KEY (`account_group_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `bill_sundry`
--
ALTER TABLE `bill_sundry`
  ADD PRIMARY KEY (`bill_sundry_id`);

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
-- Indexes for table `contra`
--
ALTER TABLE `contra`
  ADD PRIMARY KEY (`contra_id`);

--
-- Indexes for table `credit_note`
--
ALTER TABLE `credit_note`
  ADD PRIMARY KEY (`credit_note_id`);

--
-- Indexes for table `debit_note`
--
ALTER TABLE `debit_note`
  ADD PRIMARY KEY (`debit_note_id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`family_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `fees_head`
--
ALTER TABLE `fees_head`
  ADD PRIMARY KEY (`fees_head_id`);

--
-- Indexes for table `fees_head_group`
--
ALTER TABLE `fees_head_group`
  ADD PRIMARY KEY (`fees_head_group_id`);

--
-- Indexes for table `fees_plan_category`
--
ALTER TABLE `fees_plan_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `fees_reciept`
--
ALTER TABLE `fees_reciept`
  ADD PRIMARY KEY (`reciept_id`);

--
-- Indexes for table `gatepass`
--
ALTER TABLE `gatepass`
  ADD PRIMARY KEY (`gatepass_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `organisation_info`
--
ALTER TABLE `organisation_info`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerId`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `route_plan`
--
ALTER TABLE `route_plan`
  ADD PRIMARY KEY (`route_plan_id`);

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
-- Indexes for table `student_leaving_certificate`
--
ALTER TABLE `student_leaving_certificate`
  ADD PRIMARY KEY (`slc_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `account_group`
--
ALTER TABLE `account_group`
  MODIFY `account_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_sundry`
--
ALTER TABLE `bill_sundry`
  MODIFY `bill_sundry_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `caste_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contra`
--
ALTER TABLE `contra`
  MODIFY `contra_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `credit_note`
--
ALTER TABLE `credit_note`
  MODIFY `credit_note_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `debit_note`
--
ALTER TABLE `debit_note`
  MODIFY `debit_note_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `family_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fees_head`
--
ALTER TABLE `fees_head`
  MODIFY `fees_head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `fees_head_group`
--
ALTER TABLE `fees_head_group`
  MODIFY `fees_head_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `fees_plan_category`
--
ALTER TABLE `fees_plan_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `fees_reciept`
--
ALTER TABLE `fees_reciept`
  MODIFY `reciept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `gatepass`
--
ALTER TABLE `gatepass`
  MODIFY `gatepass_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `journal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organisation_info`
--
ALTER TABLE `organisation_info`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownerId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `route_plan`
--
ALTER TABLE `route_plan`
  MODIFY `route_plan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;
--
-- AUTO_INCREMENT for table `student_leaving_certificate`
--
ALTER TABLE `student_leaving_certificate`
  MODIFY `slc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
