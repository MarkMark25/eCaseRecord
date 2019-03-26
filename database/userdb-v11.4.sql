-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 03:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agentid` int(11) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `position` varchar(10) NOT NULL,
  `initials` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agentid`, `userid`, `position`, `initials`) VALUES
(1, 3, 'SA', 'JTT'),
(2, 5, 'SRA', 'JRR'),
(3, 6, 'SI', 'JSS'),
(5, 1, 'SA', 'SSS');

-- --------------------------------------------------------

--
-- Table structure for table `caseagent`
--

CREATE TABLE `caseagent` (
  `caseagentid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `dateassigned` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseagent`
--

INSERT INTO `caseagent` (`caseagentid`, `caseid`, `userid`, `dateassigned`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2019-02-01', NULL, NULL),
(2, 2, 5, '2019-02-04', NULL, NULL),
(3, 3, 6, '2019-02-11', NULL, NULL),
(5, 4, 5, '2018-08-09', NULL, NULL),
(6, 5, 3, '2019-02-11', NULL, NULL),
(7, 5, 6, '2019-02-11', NULL, NULL),
(8, 6, 5, '2019-02-18', NULL, NULL),
(10, 6, 5, '2019-02-18', NULL, NULL),
(11, 10, 1, '2019-03-01', '2019-03-16 05:53:11', '2019-03-16 05:53:11'),
(12, 11, 1, '2019-03-01', '2019-03-16 06:01:46', '2019-03-16 06:01:46'),
(14, 15, 1, '2019-03-15', '2019-03-16 06:45:59', '2019-03-16 06:45:59'),
(15, 18, 3, '2019-03-02', '2019-03-16 07:14:23', '2019-03-16 07:14:23'),
(16, 19, 1, '2019-03-06', '2019-03-16 07:16:25', '2019-03-16 07:16:25'),
(17, 19, 5, '2019-03-06', '2019-03-16 07:16:25', '2019-03-16 07:16:25'),
(18, 20, 1, '2019-03-11', '2019-03-17 06:26:44', '2019-03-17 06:26:44'),
(19, 21, 5, '2019-03-03', '2019-03-17 07:20:30', '2019-03-17 07:20:30'),
(23, 25, 1, '2019-03-03', '2019-03-17 08:59:03', '2019-03-17 08:59:03'),
(24, 26, 3, '2019-03-03', '2019-03-17 09:04:19', '2019-03-17 09:04:19'),
(25, 27, 1, '2019-03-06', '2019-03-17 09:05:05', '2019-03-17 09:05:05'),
(26, 28, 1, '2019-03-03', '2019-03-17 09:07:12', '2019-03-17 09:07:12'),
(27, 29, 3, '2019-03-03', '2019-03-17 09:10:01', '2019-03-17 09:10:01'),
(28, 30, 1, '2019-03-05', '2019-03-17 09:14:03', '2019-03-17 09:14:03'),
(29, 31, 1, '2019-03-01', '2019-03-18 08:13:15', '2019-03-18 08:13:15'),
(30, 33, 3, '2019-03-01', '2019-03-18 08:29:56', '2019-03-18 08:29:56'),
(31, 34, 1, '2019-03-01', '2019-03-18 08:42:26', '2019-03-18 08:42:26'),
(32, 35, 1, '2019-03-01', '2019-03-18 08:46:37', '2019-03-18 08:46:37'),
(33, 36, 11, '2019-01-03', '2019-03-20 04:51:11', '2019-03-20 04:51:11'),
(34, 36, 6, '2019-01-03', '2019-03-20 04:51:11', '2019-03-20 04:51:11'),
(35, 37, 1, '2019-03-03', '2019-03-21 06:39:46', '2019-03-21 06:39:46'),
(36, 38, 6, '2019-01-08', '2019-03-21 08:58:11', '2019-03-21 08:58:11'),
(38, 40, 6, '2016-01-06', '2019-03-21 09:16:16', '2019-03-21 09:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `casenature`
--

CREATE TABLE `casenature` (
  `cnatureid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `natureid` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casenature`
--

INSERT INTO `casenature` (`cnatureid`, `caseid`, `natureid`, `updated_at`, `created_at`) VALUES
(2, 1, 2, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 4, 7, NULL, NULL),
(6, 5, 3, NULL, NULL),
(7, 6, 4, NULL, NULL),
(8, 6, 5, NULL, NULL),
(9, 10, 1, '2019-03-16 05:53:11', '2019-03-16 05:53:11'),
(10, 11, 1, '2019-03-16 06:01:46', '2019-03-16 06:01:46'),
(11, 11, 2, '2019-03-16 06:01:46', '2019-03-16 06:01:46'),
(12, 15, 3, '2019-03-16 06:45:59', '2019-03-16 06:45:59'),
(13, 18, 3, '2019-03-16 07:14:23', '2019-03-16 07:14:23'),
(14, 19, 3, '2019-03-16 07:16:25', '2019-03-16 07:16:25'),
(15, 19, 7, '2019-03-16 07:16:26', '2019-03-16 07:16:26'),
(16, 20, 2, '2019-03-17 06:26:44', '2019-03-17 06:26:44'),
(17, 21, 5, '2019-03-17 07:20:30', '2019-03-17 07:20:30'),
(21, 25, 5, '2019-03-17 08:59:03', '2019-03-17 08:59:03'),
(22, 26, 7, '2019-03-17 09:04:19', '2019-03-17 09:04:19'),
(23, 27, 1, '2019-03-17 09:05:05', '2019-03-17 09:05:05'),
(24, 28, 5, '2019-03-17 09:07:12', '2019-03-17 09:07:12'),
(25, 29, 2, '2019-03-17 09:10:01', '2019-03-17 09:10:01'),
(26, 30, 2, '2019-03-17 09:14:03', '2019-03-17 09:14:03'),
(27, 31, 3, '2019-03-18 08:13:16', '2019-03-18 08:13:16'),
(28, 33, 2, '2019-03-18 08:29:56', '2019-03-18 08:29:56'),
(29, 34, 1, '2019-03-18 08:42:26', '2019-03-18 08:42:26'),
(30, 35, 1, '2019-03-18 08:46:37', '2019-03-18 08:46:37'),
(31, 36, 2, '2019-03-20 04:51:11', '2019-03-20 04:51:11'),
(32, 36, 5, '2019-03-20 04:51:11', '2019-03-20 04:51:11'),
(33, 37, 6, '2019-03-21 06:39:46', '2019-03-21 06:39:46'),
(34, 38, 5, '2019-03-21 08:58:11', '2019-03-21 08:58:11'),
(36, 40, 7, '2019-03-21 09:16:16', '2019-03-21 09:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `caseid` int(11) NOT NULL,
  `docketnumber` varchar(255) DEFAULT NULL,
  `ccn` varchar(255) DEFAULT NULL,
  `acmo` varchar(255) DEFAULT NULL,
  `complainantname` text NOT NULL,
  `complainant_Address` text,
  `complainant_Contact_Number` varchar(255) DEFAULT NULL,
  `dateTerminated` date DEFAULT NULL,
  `statusid` int(11) NOT NULL,
  `caseStatus` enum('Available','Deleted','','') NOT NULL DEFAULT 'Available',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `docketnumber`, `ccn`, `acmo`, `complainantname`, `complainant_Address`, `complainant_Contact_Number`, `dateTerminated`, `statusid`, `caseStatus`, `updated_at`, `created_at`) VALUES
(1, 'I-14-001', 'I-10-12312', '10-C-05289', 'Asahi Azumane', NULL, '0', NULL, 1, 'Available', '2019-03-21 06:28:57', NULL),
(2, 'I-14-002', 'I-11-12312', '11-C-05289', 'Vegeta', NULL, '0', '2019-02-08', 3, 'Available', '2019-03-21 06:30:09', NULL),
(3, 'I-14-003', 'M-12-12312', '18-C-05289', 'Godofredo Corga', NULL, '0', NULL, 16, 'Available', '2019-03-16 08:57:55', NULL),
(4, 'M-18-044', 'I-21-67867', '21-C-67867', 'Pressy Press', NULL, '0', '2018-08-13', 4, 'Available', '2019-03-16 09:17:06', NULL),
(5, 'I-14-004', 'I-01-67898', '01-C-56789', 'Unknown', NULL, '0', '2019-02-19', 2, 'Available', '2019-03-21 07:53:58', NULL),
(6, 'I-14-005', 'I-02-67898', '02-C-56789', 'Dayang Dayang', NULL, '0', NULL, 1, 'Available', '2019-03-21 07:56:00', NULL),
(10, 'M-12-123', NULL, NULL, 'ComplainantEleven', NULL, '0', '0000-00-00', 9, 'Available', '2019-03-16 05:53:11', '2019-03-16 05:53:11'),
(11, 'M-01-001', NULL, NULL, 'Selena Gomex', NULL, '0', NULL, 3, 'Available', '2019-03-16 06:01:46', '2019-03-16 06:01:46'),
(12, 'M-02-002', 'I-02-00002', '02-I-00002', 'Patrick Swayze', NULL, '0', '2019-03-15', 3, 'Available', '2019-03-16 06:20:58', '2019-03-16 06:20:58'),
(13, 'M-03-003', 'I-03-00003', '03-I-00003', 'James Caan', NULL, '0', '2019-03-05', 10, 'Available', '2019-03-16 06:41:01', '2019-03-16 06:41:01'),
(15, 'M-04-004', 'I-04-00004', '04-I-00004', 'James Caan', NULL, '0', '2019-03-05', 10, 'Available', '2019-03-16 06:45:59', '2019-03-16 06:45:59'),
(18, 'M-05-005', 'I-05-00005', '05-I-00005', 'Viggo Mortensen', NULL, '0', '2019-03-05', 10, 'Available', '2019-03-16 07:14:23', '2019-03-16 07:14:23'),
(19, 'M-06-006', 'I-06-00006', '06-I-00006', 'Steve Martin', NULL, '0', '2019-03-01', 1, 'Available', '2019-03-16 07:16:25', '2019-03-16 07:16:25'),
(20, 'M-11-111', NULL, NULL, 'Com', NULL, '0', '2019-03-16', 19, 'Available', '2019-03-17 06:26:43', '2019-03-17 06:26:43'),
(21, 'M-11-113', NULL, NULL, 'SAMPLE', NULL, '0', '2019-03-11', 9, 'Available', '2019-03-17 07:20:30', '2019-03-17 07:20:30'),
(25, 'M-11-222', 'M-19-36436', '22-I-22221', 'Com', NULL, '0', '2019-03-15', 11, 'Available', '2019-03-17 08:59:03', '2019-03-17 08:59:03'),
(26, 'M-12-131', 'M-12-54678', '11-I-24234', 'SAMPLE', NULL, '0', '2019-03-16', 11, 'Available', '2019-03-17 09:04:19', '2019-03-17 09:04:19'),
(27, 'M-12-132', 'M-12-13123', '12-I-43242', 'Com', NULL, '0', '2019-03-08', 1, 'Available', '2019-03-17 09:05:05', '2019-03-17 09:05:05'),
(28, 'M-12-134', 'M-35-12312', '11-C-11117', 'Com', NULL, '0', '2019-03-16', 1, 'Available', '2019-03-17 09:07:11', '2019-03-17 09:07:11'),
(29, 'M-12-136', 'M-23-12090', '90-C-12365', 'Com', NULL, '0', '2019-03-16', 13, 'Available', '2019-03-17 09:10:01', '2019-03-17 09:10:01'),
(30, 'M-13-138', NULL, NULL, 'Com', NULL, '0', '2019-03-16', 14, 'Available', '2019-03-17 09:14:03', '2019-03-17 09:14:03'),
(31, 'I-19-001', 'C-19-00001', '19-I-00001', 'Wakanda', NULL, NULL, '2019-03-18', 11, 'Available', '2019-03-18 08:13:15', '2019-03-18 08:13:15'),
(33, 'I-19-787', 'C-19-79986', '19-I-98090', 'Wakanda', NULL, NULL, '2019-03-18', 11, 'Available', '2019-03-18 08:29:56', '2019-03-18 08:29:56'),
(34, 'I-19-587', 'C-19-79352', '19-I-98023', 'Wakanda', NULL, NULL, '2019-03-18', 13, 'Available', '2019-03-18 08:42:26', '2019-03-18 08:42:26'),
(35, 'I-18-345', 'C-18-79352', '18-I-98023', 'Wakanda', NULL, NULL, '2019-03-16', 2, 'Available', '2019-03-18 08:46:37', '2019-03-18 08:46:37'),
(36, 'I-20-001', 'I-20-00001', '20-C-00001', 'Apeks', NULL, NULL, '2019-01-10', 1, 'Available', '2019-03-20 04:51:11', '2019-03-20 04:51:11'),
(37, 'I-10-001', NULL, NULL, 'Harry Ackerman', NULL, NULL, NULL, 1, 'Available', '2019-03-21 06:39:46', '2019-03-21 06:39:46'),
(38, 'I-99-001', NULL, NULL, 'Kenpachi Zaraki', NULL, NULL, NULL, 1, 'Available', '2019-03-21 08:58:11', '2019-03-21 08:58:11'),
(40, 'I-95-001', NULL, NULL, 'Ichigo Kurosaki', NULL, NULL, NULL, 1, 'Available', '2019-03-21 09:16:16', '2019-03-21 09:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE `case_status` (
  `statusid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `caseStatusAvailability` enum('Available','Deleted','','') NOT NULL DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`statusid`, `status`, `caseStatusAvailability`, `created_at`, `updated_at`) VALUES
(1, 'Under Investigation', 'Available', '2019-03-20 13:17:34', NULL),
(2, 'Prosecution', 'Available', '2019-03-20 13:17:34', NULL),
(3, 'Solved without Prosecution', 'Available', '2019-03-20 13:17:34', NULL),
(4, 'Closure', 'Available', '2019-03-20 13:17:34', NULL),
(5, 'Closure-Lack of Necessary Evidence', 'Available', '2019-03-20 13:17:34', NULL),
(6, 'Closure-Cause of action ceased', 'Available', '2019-03-20 13:17:34', NULL),
(7, 'Closure-LOI', 'Available', '2019-03-20 13:17:34', NULL),
(8, 'Closure-LOE', 'Available', '2019-03-20 13:17:34', NULL),
(9, 'Closure-Archived', 'Available', '2019-03-20 13:17:34', NULL),
(10, 'Closure-Charges Already Filed', 'Available', '2019-03-20 13:17:34', NULL),
(11, 'Closure-Parties to Settle Amicably', 'Available', '2019-03-20 13:17:34', NULL),
(12, 'Closure-Lack of Investigative Lead', 'Available', '2019-03-20 13:17:34', NULL),
(13, 'Closure-Civil in Nature', 'Available', '2019-03-20 13:17:34', NULL),
(14, 'Closure-Subject Arrested', 'Available', '2019-03-20 13:17:34', NULL),
(15, 'Closure-Complaint Withdrawn', 'Available', '2019-03-20 13:17:34', NULL),
(16, 'Closure-Subject Gone Into Hiding/Subject Cannot be determined', 'Available', '2019-03-20 13:17:34', NULL),
(17, 'Closure-Complainant Filed at CPO', 'Available', '2019-03-20 13:17:34', NULL),
(18, 'Closure-PNP Filed Appropriate Charges', 'Available', '2019-03-20 13:17:34', NULL),
(19, 'Closure-PNP Filed Appropriate Charges', 'Available', '2019-03-20 13:17:34', NULL),
(20, 'Closure-Referred to LED MANILA', 'Available', '2019-03-20 13:17:34', NULL),
(21, 'Closure-Negative Result', 'Available', '2019-03-20 13:17:34', NULL),
(22, 'Closure-Plaintive was Identified', 'Available', '2019-03-20 13:17:34', NULL),
(23, 'Closure-Intel rep is false', 'Available', '2019-03-20 13:17:34', NULL),
(24, 'Closure-Complainant Filed Directly', 'Available', '2019-03-20 13:17:34', NULL),
(25, 'Closure-Temporarily Closed', 'Available', '2019-03-20 13:17:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_suspects`
--

CREATE TABLE `case_suspects` (
  `id` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `suspect_name` varchar(255) NOT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `suspect_Address` text,
  `suspect_Contact_Number` varchar(50) DEFAULT NULL,
  `suspect_Sex` varchar(50) DEFAULT NULL,
  `suspect_Age` int(5) DEFAULT NULL,
  `suspect_Civil_Status` varchar(50) DEFAULT NULL,
  `suspect_Occupation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_suspects`
--

INSERT INTO `case_suspects` (`id`, `caseid`, `suspect_name`, `height`, `weight`, `created_at`, `updated_at`, `suspect_Address`, `suspect_Contact_Number`, `suspect_Sex`, `suspect_Age`, `suspect_Civil_Status`, `suspect_Occupation`) VALUES
(1, 1, 'Suspect 1', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Suspect 2', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Suspect 3', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Suspect 4', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Suspect 5', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'Suspect 6', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 6, 'Suspect 7', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 10, 'SubjectTen', 0, NULL, '2019-03-16 05:53:11', '2019-03-16 05:53:11', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 11, 'Justine Bieber', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 11, 'Eliot', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 15, 'Captain Marvel', NULL, NULL, '2019-03-16 06:45:59', '2019-03-16 06:45:59', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 18, 'Sylvester Stallone', NULL, NULL, '2019-03-16 07:14:23', '2019-03-16 07:14:23', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 18, 'Arnold Schwarzenegger', NULL, NULL, '2019-03-16 07:14:23', '2019-03-16 07:14:23', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 19, 'Mark Wahlberg', NULL, NULL, '2019-03-16 07:16:26', '2019-03-16 07:16:26', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 19, 'Jim Carrey', NULL, NULL, '2019-03-16 07:16:26', '2019-03-16 07:16:26', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 20, 'Sub', NULL, NULL, '2019-03-17 06:26:44', '2019-03-17 06:26:44', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 21, 'Sub', NULL, NULL, '2019-03-17 07:20:31', '2019-03-17 07:20:31', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 25, 'asdasdasd', NULL, NULL, '2019-03-17 08:59:03', '2019-03-17 08:59:03', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 26, 'asdasdasd', NULL, NULL, '2019-03-17 09:04:19', '2019-03-17 09:04:19', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 27, 'Sub', NULL, NULL, '2019-03-17 09:05:06', '2019-03-17 09:05:06', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 28, 'Sub', NULL, NULL, '2019-03-17 09:07:12', '2019-03-17 09:07:12', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 29, 'Sub', NULL, NULL, '2019-03-17 09:10:01', '2019-03-17 09:10:01', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 30, 'Sub', NULL, NULL, '2019-03-17 09:14:03', '2019-03-17 09:14:03', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 33, 'Thor', NULL, NULL, '2019-03-18 08:29:56', '2019-03-18 08:29:56', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 34, 'Thor', NULL, NULL, '2019-03-18 08:42:26', '2019-03-18 08:42:26', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 35, 'Thor', NULL, NULL, '2019-03-18 08:46:37', '2019-03-18 08:46:37', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 36, 'Apoc', NULL, NULL, '2019-03-20 04:51:12', '2019-03-20 04:51:12', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 37, 'Bryan Adams', NULL, NULL, '2019-03-21 06:39:46', '2019-03-21 06:39:46', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 38, 'S?suke Aizen', NULL, NULL, '2019-03-21 08:58:11', '2019-03-21 08:58:11', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 40, 'Rukia Kuchiki', NULL, NULL, '2019-03-21 09:16:16', '2019-03-21 09:16:16', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_victims`
--

CREATE TABLE `case_victims` (
  `id` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `victim_name` varchar(255) NOT NULL,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `victim_Address` text,
  `victim_Contact_Number` varchar(50) DEFAULT NULL,
  `victim_Sex` varchar(50) DEFAULT NULL,
  `victim_Age` int(5) DEFAULT NULL,
  `victim_Civil_Status` varchar(50) DEFAULT NULL,
  `victim_Occupation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_victims`
--

INSERT INTO `case_victims` (`id`, `caseid`, `victim_name`, `weight`, `height`, `updated_at`, `created_at`, `victim_Address`, `victim_Contact_Number`, `victim_Sex`, `victim_Age`, `victim_Civil_Status`, `victim_Occupation`) VALUES
(1, 1, 'Victim 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Victim 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Victim 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Victim 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Victim 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'Victim 6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 6, 'Victim 7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 10, 'VictimTen', NULL, NULL, '2019-03-16 05:53:11', '2019-03-16 05:53:11', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 11, 'Lukas Graham', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 11, 'Thor', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 15, 'Captain Barbell', NULL, NULL, '2019-03-16 06:45:59', '2019-03-16 06:45:59', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 18, 'Tim Robbins', NULL, NULL, '2019-03-16 07:14:24', '2019-03-16 07:14:24', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 18, 'Javier Bardem', NULL, NULL, '2019-03-16 07:14:24', '2019-03-16 07:14:24', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 19, 'Mel Gibson', NULL, NULL, '2019-03-16 07:16:26', '2019-03-16 07:16:26', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 19, 'Jon Voight', NULL, NULL, '2019-03-16 07:16:26', '2019-03-16 07:16:26', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 20, 'Victim One', NULL, NULL, '2019-03-17 06:26:44', '2019-03-17 06:26:44', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 21, 'Victim One', NULL, NULL, '2019-03-17 07:20:31', '2019-03-17 07:20:31', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 25, 'Victim One', NULL, NULL, '2019-03-17 08:59:03', '2019-03-17 08:59:03', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 26, 'Victim One', NULL, NULL, '2019-03-17 09:04:19', '2019-03-17 09:04:19', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 27, 'Victim One', NULL, NULL, '2019-03-17 09:05:06', '2019-03-17 09:05:06', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 28, 'Victim One', NULL, NULL, '2019-03-17 09:07:12', '2019-03-17 09:07:12', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 29, 'TEM', NULL, NULL, '2019-03-17 09:10:01', '2019-03-17 09:10:01', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 30, 'Victim One', NULL, NULL, '2019-03-17 09:14:03', '2019-03-17 09:14:03', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 33, 'Captain America', NULL, NULL, '2019-03-18 08:29:56', '2019-03-18 08:29:56', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 34, 'Captain America', NULL, NULL, '2019-03-18 08:42:26', '2019-03-18 08:42:26', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 35, 'Captain America', NULL, NULL, '2019-03-18 08:46:37', '2019-03-18 08:46:37', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 36, 'Sinio', NULL, NULL, '2019-03-20 04:51:12', '2019-03-20 04:51:12', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 36, 'Tipsy D', NULL, NULL, '2019-03-20 04:51:12', '2019-03-20 04:51:12', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 37, 'Stella Adler', NULL, NULL, '2019-03-21 06:39:46', '2019-03-21 06:39:46', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 38, 'Xcution', NULL, NULL, '2019-03-21 08:58:11', '2019-03-21 08:58:11', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 40, 'Orihime Inoue', NULL, NULL, '2019-03-21 09:16:16', '2019-03-21 09:16:16', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaintsheet`
--

CREATE TABLE `complaintsheet` (
  `id` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `place_Committed` text,
  `date_Committed` text,
  `narration_Of_Facts` text,
  `reported_Any_Agency` text,
  `status_of_Investigation` text,
  `where_court_Proceedings` text,
  `report_Considerations` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintsheet`
--

INSERT INTO `complaintsheet` (`id`, `caseid`, `place_Committed`, `date_Committed`, `narration_Of_Facts`, `reported_Any_Agency`, `status_of_Investigation`, `where_court_Proceedings`, `report_Considerations`, `created_at`, `updated_at`) VALUES
(1, 5, 'Baguio City', '03/11/2019', 'Marami nang napatay', 'Police Baguio', 'Ongoing', 'Baguio Bulwagan ng Katarungan', 'Mas mapapabilis ang proseso', NULL, NULL),
(2, 34, 'Abra', '2019-03-04', 'Throughout your academic career, you will often be asked to write essays.', 'You may have to work on an assigned essay for class, enter an essay contest or write essays for college admissions.', 'This article will show you how to write, and then revise, all types of essays.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', NULL, '2019-03-18 08:42:26', '2019-03-18 08:42:26'),
(3, 35, 'Abra', '2019-03-14', 'Throughout your academic career, you will often be asked to write essays.', 'You may have to work on an assigned essay for class, enter an essay contest or write essays for college admissions.', 'This article will show you how to write, and then revise, all types of essays.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', NULL, '2019-03-18 08:46:37', '2019-03-18 08:46:37'),
(5, 40, 'Abra', '2019-03-07', 'The Bleach manga and anime created by Tite Kubo. The series takes place in a fictional universe in which the characters are split into various factionalized fictional races. All these races are subdivisions of humanity, but are distinguished by whether they live on earth or in one of the afterlives, by possession of thematically contrasting supernatural powers, and by the use of aesthetics drawn from the artistic traditions of different real-life regions.', 'The main character of Bleach is a Japanese teenager named Ichigo Kurosaki who has the ability to interact with ghosts. one day he is visited by a spirit named Rukia Kuchiki, who is a Soul Reaper from the Soul Society whose mission is deal with hungering lost souls known as Hollows. When he sees Rukia getting grievously wounded by a Hollow in his presence, Ichigo is granted her powers of exorcism and psychopompy to carry out Rukia\'s Soul Reaper duties as she recovers.', 'As Ichigo guides the recently deceased to the afterlife while contending with Hollows, he clashes and forms alliances with the other supernaturally powered residents of his city, namely three of his high school classmates.', 'Many individual Bleach characters and the series\' character design work have been praised, though Bleach\'s constantly-expanding character roster has been a point of criticism in the press. The size of the cast has been explained by author Kubo as the result of his writing process, in which he first creates new figures, then writes their personalities and character arcs, and finally assembles these interactions into a new plot.', NULL, '2019-03-21 09:16:17', '2019-03-21 09:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `deletedcases`
--

CREATE TABLE `deletedcases` (
  `dcaseid` int(11) NOT NULL,
  `complainantname` text,
  `suspectname` text,
  `victimname` text,
  `docketnumber` varchar(255) DEFAULT NULL,
  `ccn` varchar(255) DEFAULT NULL,
  `acmo` varchar(255) DEFAULT NULL,
  `dateterminated` date DEFAULT NULL,
  `status` enum('Under Investigation','Prosecution','Solved without Prosecution','Closure','Closure-Lack of Necessary Evidence','Closure-Cause of action ceased','Closure-LOI','Closure-LOE','Closure-Archived','Closure-Charges Already Filed','Closure-Parties to Settle Amicably','Closure-Lack of Investigative Lead','Closure-Civil in Nature','Closure-Subject Arrested','Closure-Complaint Withdrawn','Closure-Subject Gone Into Hiding/Subject Cannot be Located','Closure-Complainant Filed at CPO','Closure-PNP Filed Appropriate Charges','Closure-Subject Cannot Be Identified','Closure-Referred to LED MANILA','Closure-Negative Result','Closure-Plaintive was Identified','Closure-Intel rep is false','Closure-Complainant Filed Directly','Closure-Temporarily Closed','Closure-Already with PPO LTB','Closure-Lack of Records','Closure-Unfounded','Closure-Entrapment Operations Recalled','Closure-Lack of Witness','Closure-Lack of Basis','Closure-Original Copy of Falsified Documents Cannot Be Found','Closure-Subjects Identity Cannot Be Established','Closure-Referred to Barangay Conciliation','Closure-Complainant Filed Appropriate Charges Thru Counsel','Closure-Already Filed With Proper Courts','Closure-Threats Ceased','Closure-Crime Prescribed','Closure-Referred to Private Lawyer','Closure-Posting Cleared','Closure-Case of Collection of Sum of Money','Closure-Complainant Filed with Prosecution','Closure-Subject Is Out Of The Country','Closure-Civil Case','Closure-Victim went on therapy','Closure-No Jurisdiction over the case','Closure-Not within AOR','Closure-Failure to Substantiate Complaint','Inquest') DEFAULT NULL,
  `natureid` int(11) DEFAULT NULL,
  `agentid` int(11) DEFAULT NULL,
  `dateassigned` date DEFAULT NULL,
  `deleted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyid` int(11) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `userid`, `login`, `logout`, `created_at`, `updated_at`) VALUES
(1, 9, '2019-03-25 05:08:26', '2019-03-25 05:11:30', '2019-03-25 05:08:26', '2019-03-25 05:11:30'),
(2, 7, '2019-03-25 05:09:37', '2019-03-25 05:10:08', '2019-03-25 05:09:37', '2019-03-25 05:10:08'),
(3, 2, '2019-03-25 05:10:16', '2019-03-25 05:10:21', '2019-03-25 05:10:16', '2019-03-25 05:10:21'),
(4, 8, '2019-03-25 05:10:26', '2019-03-25 05:10:44', '2019-03-25 05:10:26', '2019-03-25 05:10:44'),
(5, 2, '2019-03-25 05:11:39', '2019-03-25 05:24:47', '2019-03-25 05:11:39', '2019-03-25 05:24:47'),
(6, 4, '2019-03-25 05:32:13', '2019-03-25 06:52:56', '2019-03-25 05:32:13', '2019-03-25 06:52:56'),
(7, 9, '2019-03-25 21:11:14', '2019-03-25 22:02:28', '2019-03-25 21:11:14', '2019-03-25 22:02:28'),
(8, 2, '2019-03-25 21:11:18', NULL, '2019-03-25 21:11:18', '2019-03-25 21:11:18'),
(9, 2, '2019-03-25 22:33:29', '2019-03-25 22:34:51', '2019-03-25 22:33:29', '2019-03-25 22:34:51'),
(10, 9, '2019-03-25 22:35:00', '2019-03-25 22:36:51', '2019-03-25 22:35:00', '2019-03-25 22:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `action` enum('Add','Update','Delete','Insert') NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `userid`, `action`, `description`, `updated_at`, `created_at`) VALUES
(1, 9, 'Update', 'Administrator user details update, with user ID = 2', '2019-03-21 08:46:50', '2019-03-21 08:46:50'),
(2, 9, 'Add', 'Administrator register new User with user id = 14', '2019-03-21 08:49:46', '2019-03-21 08:49:46'),
(3, 9, 'Delete', 'Administrator delete case nature with nature id = 8', '2019-03-21 08:51:25', '2019-03-21 08:51:25'),
(4, 9, 'Delete', 'Administrator delete case nature with nature id = 1', '2019-03-21 08:55:01', '2019-03-21 08:55:01'),
(5, 2, 'Add', 'Encoder add new case, with case ID = 38', '2019-03-21 08:58:11', '2019-03-21 08:58:11'),
(6, 2, 'Add', 'Encoder add complaint sheet and the log book details with Case ID = 40', '2019-03-21 09:16:17', '2019-03-21 09:16:17'),
(7, 9, 'Update', 'Administrator user details update, with user ID = 7', '2019-03-23 07:33:03', '2019-03-23 07:33:03'),
(8, 9, 'Update', 'Administrator user details update, with user ID = 3', '2019-03-23 07:33:14', '2019-03-23 07:33:14'),
(9, 9, 'Update', 'Administrator user details update, with user ID = 4', '2019-03-23 07:34:06', '2019-03-23 07:34:06'),
(10, 9, 'Update', 'Administrator user details update, with user ID = 5', '2019-03-23 07:34:41', '2019-03-23 07:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `natureid` int(11) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `casetype` enum('Crime') NOT NULL DEFAULT 'Crime',
  `description` text NOT NULL,
  `republicAct` varchar(255) DEFAULT NULL,
  `natureAvailability` enum('Available','Deleted','','') NOT NULL DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`natureid`, `nature`, `casetype`, `description`, `republicAct`, `natureAvailability`, `created_at`, `updated_at`) VALUES
(1, 'Rape', 'Crime', 'Any unlawful sexual activity and usually sexual intercourse carried out forcibly or under threat of injury against a person\'s will or with a person who is beneath a certain age or incapable of valid consent because of mental illness, mental deficiency, intoxication, unconsciousness, or deception.', 'REPUBLIC ACT NO. 8353', 'Available', '2019-03-21 16:55:21', '2019-03-21 08:55:01'),
(2, 'Estafa', 'Crime', 'Refers to the criminal offense of swindling; the use of fraud or deceit that causes loss to another.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(3, 'Murder', 'Crime', 'The unlawful killing of another human being without justification or excuse.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(4, 'Robbery', 'Crime', 'Unlawful taking away of goods or property by force or intimidation, with the intention of permanently depriving the owner of those items.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(5, 'Theft', 'Crime', 'Criminal act of dishonest assumption of the rights of the true owner of a tangible or intangible property by treating it as one\'s own, whether or not taking it away with the intent of depriving the true owner of it.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(6, 'Cybercrime', 'Crime', 'A crime in which a computer is the object of the crime (hacking, phishing, spamming) or is used as a tool to commit an offense (child pornography, hate crimes). ', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(7, 'Security Assistance', 'Crime', 'The Philippines is particularly vulnerable to typhoons, floods, earthquakes, landslides, tsunamis, and volcanic eruptions. These disasters can set back development and economic gains, cause disruptions in communication and transportation, and result in significant injuries and casualties.', NULL, 'Available', '2019-03-21 15:33:29', '2019-03-20 07:48:43'),
(8, 'Terrorism Threat', 'Crime', 'For the last several years, the Department of State has warned U.S. citizens of the risks of terrorist activity in the Philippines. Terrorist groups and criminal gangs continue to operate throughout the Philippines. In 2016, an Improvised Explosive Device (IED) was discovered several hundred meters from Embassy Manila. The device was deactivated by the Manila Police Department (MPD) Explosive Ordnance Division (EOD).', NULL, 'Deleted', '2019-03-21 16:51:25', '2019-03-21 08:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleInitial` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('Agent','Encoder','Administrator') COLLATE utf8mb4_unicode_ci NOT NULL,
  `userStatus` enum('Active','Inactive','Deleted','Reassigned') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstName`, `middleInitial`, `lastName`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `userStatus`) VALUES
(1, 'Angelina', 'I', 'Jolie', 'agent', '$2y$10$Qw3XSCklpTXtUmkN/2imLOgWyMq5iuEK6ILzPZcZhMy/Gb.k3t7Be', 'APyThDuBKplxeq2pJYBzeSGPdQUbIn1MUKJpfvepTLQbCPwzCsDAk2VeWIVu', '2019-03-13 08:15:44', '2019-03-21 07:43:34', 'Agent', 'Reassigned'),
(2, 'Scarlett', 'E', 'Johansson', 'encoder1', '$2y$10$rR/d7yQdUco4i6oDLCBQf.T4.wIT5PjqOGLDAchIoXSXpEP7wtP7u', 'rGwWW6Y4riYkyYlZHAVqTHStNyd0tYjafvco2uD0TKL2xs1Ji5xnmN9XboP9', '2019-03-13 08:21:31', '2019-03-21 08:46:50', 'Encoder', 'Active'),
(3, 'Charlize', 'A', 'Theron', 'agent1', '$2y$10$7M69Q8.xvkPP.WBs3olKC.XAnmljrLCt8VpjV27Kdrb6NPwIeC7Qy', 'nEqk4mdp792LVdvz0P7QFRmxNJBWEvrKagTGf7wKjiptIHtqofjf122QIwTd', '2019-03-13 08:22:02', '2019-03-23 07:33:14', 'Agent', 'Active'),
(4, 'Julia', 'A', 'Roberts', 'encoder2', '$2y$10$INFYyWLn/m3rLEox6M3JyOf1Muxdrvf8Ls1V97F2gc02g4GCFXpwi', 'dXxvMV8O22iMkU1ssLNp0bQ2bu4dV9NOjDzVqBrcSh7B96WQyUUFDTLAZp5a', '2019-03-13 08:22:38', '2019-03-23 07:34:06', 'Encoder', 'Active'),
(5, 'Jennifer', 'A', 'Lawrence', 'agent2', '$2y$10$smcU7zq.uZQOVyggZOcKIeO6gxVOHiHtn./V.BDQjhN0bxXEaER0a', 'V5Xyd2Rl4xNVm5sjoesOhWwwVOtPxcJh0zXVYvOeixSbBfmgyLGCaL4mCL0C', '2019-03-13 08:23:14', '2019-03-23 07:34:41', 'Agent', 'Active'),
(6, 'Cameron', 'A', 'Diaz', 'agent3', '$2y$10$rzFnGi0j37DY4g46Hvdjp.VlXnkZsoHTv1aMkad.9h8PbFbv9.RSu', '8h3O9oqIgj0KrHP8JqUu2nkff93xkaQ2lRd2Girvs1qQCQiTaK3VSpJGmEat', '2019-03-13 08:23:46', '2019-03-13 08:23:46', 'Agent', 'Active'),
(7, 'Marion', 'A', 'Cotillard', 'admin1', '$2y$10$g5kZi1HMTcSPnnw4iasdheJezexszVzA0FlBPub4mI9WO1FMdD1iK', 'ZnDbwD5MVGN3Cr2hv4lGXvshox6Iio9muIBSglkgJkBDtOksxr5NrKO1JMEJ', '2019-03-13 08:24:15', '2019-03-23 07:33:03', 'Administrator', 'Active'),
(8, 'Natalie', 'A', 'Portman', 'admin3', '$2y$10$MiiHhGWRHsYAjMxNw5884OVkU2UO39Pf0yJhHZD89Vw76kRRxb4tC', 'izQRjRdEpRNifb5MLnr2yzyWSlvFdcy35u5p243iVJEebBPOOIV4Hq2PAHLS', '2019-03-15 05:36:23', '2019-03-15 05:36:23', 'Administrator', 'Active'),
(9, 'Kate', 'A', 'Winslet', 'admin2', '$2y$10$yfi.CZsve8dBVTai5gTAsuwqbLoMLYBCuF7Ppn3hiJB05ZI.0EElq', 'orRUDzs1JooQeaFk7PxBsZoma5MgYJ1rhfnkeNTiHsQgUBoWcRIiNGdGNdrS', '2019-03-15 05:44:04', '2019-03-15 05:44:04', 'Administrator', 'Active'),
(10, 'Emma', 'A', 'Stone', 'admin4', '$2y$10$hli5P2UOYtWkWXPHpwYysO/QG841EeUQto29OTnlF9/UYLk8yHWHC', 'GYWYAOBAj6BQ9vyAIp2jdBHYQeSw24S4dHyNplALqPkffh3EurTZIq0iMGgu', '2019-03-15 05:46:39', '2019-03-15 05:46:39', 'Administrator', 'Active'),
(11, 'Eddie', 'E', 'Anderson', 'agent4', '$2y$10$Ob.ny..GTkXqaUU7dMYVveFF1sCVKVNQttIoRi0dr7dhpP2RMOXTS', NULL, '2019-03-19 08:44:53', '2019-03-19 08:44:53', 'Agent', 'Active'),
(12, 'Gillian', 'G', 'Anderson', 'agent5', '$2y$10$k9d/wdy6Ze29JzTH6q23T.MLoUTahTxVUIvZ1YP94uaAhOcJpfWC.', NULL, '2019-03-19 09:14:18', '2019-03-19 09:14:18', 'Agent', 'Active'),
(13, 'Criss', 'A', 'Angel', 'criss12', '$2y$10$1h4Mf/ZI8kbgW1qP/6bq0u.Ky9ZZ5gZpGcRO9ZJCI74SMGJRNoQjS', NULL, '2019-03-20 18:23:30', '2019-03-20 18:23:30', 'Encoder', 'Active'),
(14, 'Orihime', 'I', 'Inoue', 'orihime', '$2y$10$QlJVREYywSi.JyU5cqWcY.nnkw1a1FwM/VS3TYpLOtx57TCoIslSu', NULL, '2019-03-21 08:49:46', '2019-03-21 08:49:46', 'Agent', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agentid`),
  ADD UNIQUE KEY `initials` (`initials`),
  ADD KEY `userid_fk1` (`userid`);

--
-- Indexes for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD PRIMARY KEY (`caseagentid`),
  ADD KEY `userid_fk2` (`userid`),
  ADD KEY `caseid_fk2` (`caseid`);

--
-- Indexes for table `casenature`
--
ALTER TABLE `casenature`
  ADD PRIMARY KEY (`cnatureid`),
  ADD KEY `caseid_fk1` (`caseid`),
  ADD KEY `natureid_fk1` (`natureid`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseid`),
  ADD UNIQUE KEY `docketnumber` (`docketnumber`,`ccn`,`acmo`),
  ADD KEY `statusid_fk1` (`statusid`);

--
-- Indexes for table `case_status`
--
ALTER TABLE `case_status`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `case_suspects`
--
ALTER TABLE `case_suspects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_suspect_caseid` (`caseid`);

--
-- Indexes for table `case_victims`
--
ALTER TABLE `case_victims`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_victim_caseid` (`caseid`);

--
-- Indexes for table `complaintsheet`
--
ALTER TABLE `complaintsheet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caseid` (`caseid`);

--
-- Indexes for table `deletedcases`
--
ALTER TABLE `deletedcases`
  ADD PRIMARY KEY (`dcaseid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyid`),
  ADD KEY `userid_fk4` (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`),
  ADD KEY `userid_fk5` (`userid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`natureid`),
  ADD UNIQUE KEY `nature` (`nature`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `caseagent`
--
ALTER TABLE `caseagent`
  MODIFY `caseagentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `casenature`
--
ALTER TABLE `casenature`
  MODIFY `cnatureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `case_suspects`
--
ALTER TABLE `case_suspects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `case_victims`
--
ALTER TABLE `case_victims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `complaintsheet`
--
ALTER TABLE `complaintsheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deletedcases`
--
ALTER TABLE `deletedcases`
  MODIFY `dcaseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `natureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `userid_fk1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON UPDATE CASCADE;

--
-- Constraints for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD CONSTRAINT ` caseid_fk2` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userid_fk2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON UPDATE CASCADE;

--
-- Constraints for table `casenature`
--
ALTER TABLE `casenature`
  ADD CONSTRAINT `caseid_fk1` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `natureid_fk1` FOREIGN KEY (`natureid`) REFERENCES `nature` (`natureid`) ON UPDATE CASCADE;

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `statusid_fk1` FOREIGN KEY (`statusid`) REFERENCES `case_status` (`statusid`) ON UPDATE NO ACTION;

--
-- Constraints for table `case_suspects`
--
ALTER TABLE `case_suspects`
  ADD CONSTRAINT `case_suspect_caseid` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `case_victims`
--
ALTER TABLE `case_victims`
  ADD CONSTRAINT `case_victim_caseid` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaintsheet`
--
ALTER TABLE `complaintsheet`
  ADD CONSTRAINT `caseidFK_complaintSheet` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `userid_fk4` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `userid_fk5` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
