-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 10:00 AM
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
  `initials` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agentid`, `userid`, `position`, `initials`, `created_at`, `updated_at`) VALUES
(1, 3, 'SA', 'JTT', '2019-04-13 04:45:45', NULL),
(2, 5, 'SRA', 'JRR', '2019-04-13 04:45:45', NULL),
(3, 6, 'CA', 'CAM', '2019-04-13 04:45:45', NULL),
(5, 1, 'SA', 'SSS', '2019-04-13 04:45:45', NULL),
(6, 11, 'ED', 'EDD', '2019-04-13 04:45:45', NULL),
(7, 12, 'GI', 'GIL', '2019-04-13 04:45:45', NULL),
(8, 14, 'OR', 'ORI', '2019-04-13 04:45:45', NULL);

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
(10, 6, 11, '2019-02-18', NULL, NULL),
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
(38, 40, 6, '2016-01-06', '2019-03-21 09:16:16', '2019-03-21 09:16:16'),
(39, 41, 6, '2019-04-13', '2019-04-12 23:45:58', '2019-04-12 23:45:58');

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
(36, 40, 7, '2019-03-21 09:16:16', '2019-03-21 09:16:16'),
(37, 41, 3, '2019-04-12 23:45:58', '2019-04-12 23:45:58');

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
  `caseAvailability` enum('Available','Deleted','','') NOT NULL DEFAULT 'Available',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `docketnumber`, `ccn`, `acmo`, `complainantname`, `complainant_Address`, `complainant_Contact_Number`, `dateTerminated`, `statusid`, `caseAvailability`, `updated_at`, `created_at`) VALUES
(1, 'I-14-001', 'I-10-12312', '10-C-05289', 'Asahi Azumane', NULL, NULL, NULL, 1, 'Available', '2019-03-21 06:28:57', NULL),
(2, 'I-14-002', 'I-11-12312', '11-C-05289', 'Vegeta', NULL, NULL, '2019-02-08', 3, 'Available', '2019-03-21 06:30:09', NULL),
(3, 'I-14-003', 'M-12-12312', '18-C-05289', 'Godofredo Corga', NULL, NULL, NULL, 1, 'Available', '2019-03-16 08:57:55', NULL),
(4, 'M-18-044', 'I-21-67867', '21-C-67867', 'Pressy Press', NULL, NULL, '2018-08-13', 4, 'Available', '2019-03-16 09:17:06', NULL),
(5, 'I-14-004', 'I-01-67898', '01-C-56789', 'Unknown', NULL, NULL, '2019-02-19', 2, 'Available', '2019-03-21 07:53:58', NULL),
(6, 'I-14-005', 'I-02-67898', '02-C-56789', 'Dayang Dayang', NULL, NULL, NULL, 1, 'Available', '2019-03-21 07:56:00', NULL),
(10, 'M-12-123', NULL, NULL, 'ComplainantEleven', NULL, NULL, NULL, 9, 'Available', '2019-03-16 05:53:11', '2019-03-16 05:53:11'),
(11, 'M-01-001', NULL, NULL, 'Selena Gomex', NULL, NULL, NULL, 3, 'Available', '2019-03-16 06:01:46', '2019-03-16 06:01:46'),
(12, 'M-02-002', 'I-02-00002', '02-I-00002', 'Patrick Swayze', NULL, NULL, '2019-03-15', 3, 'Available', '2019-03-16 06:20:58', '2019-03-16 06:20:58'),
(13, 'M-03-003', 'I-03-00003', '03-I-00003', 'James Caan', NULL, NULL, '2019-03-05', 10, 'Available', '2019-03-16 06:41:01', '2019-03-16 06:41:01'),
(15, 'M-04-004', 'I-04-00004', '04-I-00004', 'James Caan', NULL, NULL, '2019-03-05', 10, 'Available', '2019-03-16 06:45:59', '2019-03-16 06:45:59'),
(18, 'M-05-005', 'I-05-00005', '05-I-00005', 'Viggo Mortensen', NULL, NULL, '2019-03-05', 10, 'Available', '2019-03-16 07:14:23', '2019-03-16 07:14:23'),
(19, 'M-06-006', 'I-06-00006', '06-I-00006', 'Steve Martin', NULL, NULL, '2019-03-01', 1, 'Available', '2019-03-16 07:16:25', '2019-03-16 07:16:25'),
(20, 'M-11-111', NULL, NULL, 'Com', NULL, NULL, '2019-03-16', 1, 'Available', '2019-03-17 06:26:43', '2019-03-17 06:26:43'),
(21, 'M-11-113', NULL, NULL, 'SAMPLE', NULL, NULL, '2019-03-11', 1, 'Available', '2019-03-17 07:20:30', '2019-03-17 07:20:30'),
(25, 'M-11-222', 'M-19-36436', '22-I-22221', 'Com', NULL, NULL, '2019-03-15', 11, 'Available', '2019-03-17 08:59:03', '2019-03-17 08:59:03'),
(26, 'M-12-131', 'M-12-54678', '11-I-24234', 'SAMPLE', NULL, NULL, '2019-03-16', 11, 'Available', '2019-03-17 09:04:19', '2019-03-17 09:04:19'),
(27, 'M-12-132', 'M-12-13123', '12-I-43242', 'Com', NULL, NULL, '2019-03-08', 1, 'Available', '2019-03-17 09:05:05', '2019-03-17 09:05:05'),
(28, 'M-12-134', 'M-35-12312', '11-C-11117', 'Com', NULL, NULL, '2019-03-16', 1, 'Available', '2019-03-17 09:07:11', '2019-03-17 09:07:11'),
(29, 'M-12-136', 'M-23-12090', '90-C-12365', 'Com', NULL, NULL, '2019-03-16', 1, 'Available', '2019-03-17 09:10:01', '2019-03-17 09:10:01'),
(30, 'M-13-138', NULL, NULL, 'Com', NULL, NULL, '2019-03-16', 14, 'Available', '2019-03-17 09:14:03', '2019-03-17 09:14:03'),
(31, 'I-19-001', 'C-19-00001', '19-I-00001', 'Wakanda', NULL, NULL, '2019-03-18', 11, 'Available', '2019-03-18 08:13:15', '2019-03-18 08:13:15'),
(33, 'I-19-787', 'C-19-79986', '19-I-98090', 'Wakanda', NULL, NULL, '2019-03-18', 11, 'Available', '2019-03-18 08:29:56', '2019-03-18 08:29:56'),
(34, 'I-19-587', 'C-19-79352', '19-I-98023', 'Wakanda', NULL, NULL, '2019-03-18', 13, 'Available', '2019-03-18 08:42:26', '2019-03-18 08:42:26'),
(35, 'I-18-345', 'C-18-79352', '18-I-98023', 'Wakanda', NULL, NULL, '2019-03-16', 2, 'Available', '2019-03-18 08:46:37', '2019-03-18 08:46:37'),
(36, 'I-20-001', 'I-20-00001', '20-C-00001', 'Apeks', NULL, NULL, '2019-01-10', 1, 'Available', '2019-03-20 04:51:11', '2019-03-20 04:51:11'),
(37, 'I-10-001', NULL, NULL, 'Harry Ackerman', NULL, NULL, NULL, 1, 'Available', '2019-03-21 06:39:46', '2019-03-21 06:39:46'),
(38, 'I-99-001', NULL, NULL, 'Kenpachi Zaraki', NULL, NULL, NULL, 1, 'Available', '2019-03-21 08:58:11', '2019-03-21 08:58:11'),
(40, 'I-95-001', NULL, NULL, 'Ichigo Kurosaki', NULL, NULL, NULL, 1, 'Available', '2019-03-21 09:16:16', '2019-03-21 09:16:16'),
(41, 'I-21-312', NULL, NULL, 'Trillanes', NULL, NULL, NULL, 14, 'Available', '2019-04-12 23:45:58', '2019-04-12 23:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE `case_status` (
  `statusid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`statusid`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Under Investigation', '2019-03-20 13:17:34', NULL),
(2, 'Prosecution', '2019-03-20 13:17:34', NULL),
(3, 'Solved without Prosecution', '2019-03-20 13:17:34', NULL),
(4, 'Closure', '2019-03-20 13:17:34', NULL),
(5, 'Closure-Lack of Necessary Evidence', '2019-03-20 13:17:34', NULL),
(6, 'Closure-Cause of action ceased', '2019-03-20 13:17:34', NULL),
(7, 'Closure-LOI', '2019-03-20 13:17:34', NULL),
(8, 'Closure-LOE', '2019-03-20 13:17:34', NULL),
(9, 'Closure-Archived', '2019-03-20 13:17:34', NULL),
(10, 'Closure-Charges Already Filed', '2019-03-20 13:17:34', NULL),
(11, 'Closure-Parties to Settle Amicably', '2019-03-20 13:17:34', NULL),
(12, 'Closure-Lack of Investigative Lead', '2019-03-20 13:17:34', NULL),
(13, 'Closure-Civil in Nature', '2019-03-20 13:17:34', NULL),
(14, 'Closure-Subject Arrested', '2019-03-20 13:17:34', NULL),
(15, 'Closure-Complaint Withdrawn', '2019-03-20 13:17:34', NULL),
(16, 'Closure-Subject Gone Into Hiding/Subject Cannot be determined', '2019-03-20 13:17:34', NULL),
(17, 'Closure-Complainant Filed at CPO', '2019-03-20 13:17:34', NULL),
(18, 'Closure-PNP Filed Appropriate Charges', '2019-03-20 13:17:34', NULL),
(19, 'Closure-PNP Filed Appropriate Charges', '2019-03-20 13:17:34', NULL),
(20, 'Closure-Referred to LED MANILA', '2019-03-20 13:17:34', NULL),
(21, 'Closure-Negative Result', '2019-03-20 13:17:34', NULL),
(22, 'Closure-Plaintive was Identified', '2019-03-20 13:17:34', NULL),
(23, 'Closure-Intel rep is false', '2019-03-20 13:17:34', NULL),
(24, 'Closure-Complainant Filed Directly', '2019-03-20 13:17:34', NULL),
(25, 'Closure-Temporarily Closed', '2019-03-20 13:17:34', NULL);

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
(8, 10, 'SubjectTen', 0, NULL, '2019-03-16 05:53:11', '2019-03-16 05:53:11', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 11, 'Justine Bieber', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 11, 'Eliot', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 15, 'Captain Marvel', NULL, NULL, '2019-03-16 06:45:59', '2019-03-16 06:45:59', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 18, 'Sylvester Stallone', NULL, NULL, '2019-03-16 07:14:23', '2019-03-16 07:14:23', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 19, 'Mark Wahlberg', NULL, NULL, '2019-03-16 07:16:26', '2019-03-16 07:16:26', NULL, NULL, NULL, NULL, NULL, NULL),
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
(34, 40, 'Rukia Kuchiki', NULL, NULL, '2019-03-21 09:16:16', '2019-03-21 09:16:16', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 1, 'Gregorio', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 41, 'Pak Pak', NULL, NULL, '2019-04-12 23:45:58', '2019-04-12 23:45:58', NULL, NULL, NULL, NULL, NULL, NULL);

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
(8, 10, 'VictimTen', NULL, NULL, '2019-03-16 05:53:11', '2019-03-16 05:53:11', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 11, 'Lukas Graham', NULL, NULL, '2019-03-16 06:01:46', '2019-03-16 06:01:46', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 15, 'Captain Barbell', NULL, NULL, '2019-03-16 06:45:59', '2019-03-16 06:45:59', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 18, 'Tim Robbins', NULL, NULL, '2019-03-16 07:14:24', '2019-03-16 07:14:24', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 19, 'Mel Gibson', NULL, NULL, '2019-03-16 07:16:26', '2019-03-16 07:16:26', NULL, NULL, NULL, NULL, NULL, NULL),
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
(35, 40, 'Orihime Inoue', NULL, NULL, '2019-03-21 09:16:16', '2019-03-21 09:16:16', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 41, 'Ganern Ganern', NULL, NULL, '2019-04-12 23:45:58', '2019-04-12 23:45:58', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintsheet`
--

INSERT INTO `complaintsheet` (`id`, `caseid`, `place_Committed`, `date_Committed`, `narration_Of_Facts`, `reported_Any_Agency`, `status_of_Investigation`, `where_court_Proceedings`, `report_Considerations`, `created_at`, `updated_at`) VALUES
(1, 5, 'Baguio City', '03/11/2019', 'Marami nang napatay', 'Police Baguio', 'Ongoing', 'Baguio Bulwagan ng Katarungan', 'Mas mapapabilis ang proseso', '2019-04-13 07:59:45', NULL),
(2, 34, 'Abra', '2019-03-04', 'Throughout your academic career, you will often be asked to write essays.', 'You may have to work on an assigned essay for class, enter an essay contest or write essays for college admissions.', 'This article will show you how to write, and then revise, all types of essays.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', '2019-03-18 08:42:26', NULL),
(3, 35, 'Abra', '2019-03-14', 'Throughout your academic career, you will often be asked to write essays.', 'You may have to work on an assigned essay for class, enter an essay contest or write essays for college admissions.', 'This article will show you how to write, and then revise, all types of essays.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', '2019-03-18 08:46:37', NULL),
(5, 40, 'Abra', '2019-03-07', 'The Bleach manga and anime created by Tite Kubo. The series takes place in a fictional universe in which the characters are split into various factionalized fictional races. All these races are subdivisions of humanity, but are distinguished by whether they live on earth or in one of the afterlives, by possession of thematically contrasting supernatural powers, and by the use of aesthetics drawn from the artistic traditions of different real-life regions.', 'The main character of Bleach is a Japanese teenager named Ichigo Kurosaki who has the ability to interact with ghosts. one day he is visited by a spirit named Rukia Kuchiki, who is a Soul Reaper from the Soul Society whose mission is deal with hungering lost souls known as Hollows. When he sees Rukia getting grievously wounded by a Hollow in his presence, Ichigo is granted her powers of exorcism and psychopompy to carry out Rukia\'s Soul Reaper duties as she recovers.', 'As Ichigo guides the recently deceased to the afterlife while contending with Hollows, he clashes and forms alliances with the other supernaturally powered residents of his city, namely three of his high school classmates.', 'Many individual Bleach characters and the series\' character design work have been praised, though Bleach\'s constantly-expanding character roster has been a point of criticism in the press. The size of the cast has been explained by author Kubo as the result of his writing process, in which he first creates new figures, then writes their personalities and character arcs, and finally assembles these interactions into a new plot.', 'Then, we\'ll explore how to write narrative, persuasive and expository essays.', '2019-03-21 09:16:17', NULL),
(6, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-12 23:45:58', NULL),
(7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-12 23:45:58', NULL),
(8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-12 23:45:58', NULL),
(9, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-12 23:45:58', NULL),
(11, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-12 23:45:58', NULL),
(15, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-13 07:59:45', NULL),
(16, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-13 07:59:45', NULL),
(17, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-13 07:59:45', NULL),
(18, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-13 07:59:45', NULL);

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
(1, 9, '2019-04-08 19:38:06', '2019-04-08 20:24:49', '2019-04-08 19:38:06', '2019-04-08 20:24:49'),
(2, 9, '2019-04-08 20:53:47', '2019-04-08 20:57:01', '2019-04-08 20:53:47', '2019-04-08 20:57:01'),
(3, 9, '2019-04-08 21:05:19', '2019-04-08 21:15:55', '2019-04-08 21:05:19', '2019-04-08 21:15:55'),
(4, 8, '2019-04-08 21:22:02', '2019-04-08 22:14:18', '2019-04-08 21:22:02', '2019-04-08 22:14:18'),
(5, 8, '2019-04-08 22:23:41', '2019-04-08 22:26:30', '2019-04-08 22:23:41', '2019-04-08 22:26:30'),
(6, 9, '2019-04-08 22:26:35', '2019-04-08 22:27:38', '2019-04-08 22:26:35', '2019-04-08 22:27:38'),
(7, 4, '2019-04-08 22:27:44', '2019-04-08 22:27:48', '2019-04-08 22:27:44', '2019-04-08 22:27:48'),
(8, 9, '2019-04-08 22:28:21', '2019-04-09 00:16:43', '2019-04-08 22:28:21', '2019-04-09 00:16:43'),
(9, 9, '2019-04-09 00:23:46', '2019-04-09 00:24:54', '2019-04-09 00:23:46', '2019-04-09 00:24:54'),
(10, 9, '2019-04-09 00:37:11', '2019-04-09 01:03:54', '2019-04-09 00:37:11', '2019-04-09 01:03:54'),
(11, 9, '2019-04-10 00:09:16', '2019-04-10 00:13:25', '2019-04-10 00:09:16', '2019-04-10 00:13:25'),
(12, 9, '2019-04-10 04:21:34', '2019-04-10 09:57:21', '2019-04-10 04:21:34', '2019-04-10 09:57:21'),
(13, 2, '2019-04-10 06:12:48', '2019-04-10 06:12:53', '2019-04-10 06:12:48', '2019-04-10 06:12:53'),
(14, 9, '2019-04-11 00:30:29', '2019-04-11 01:34:28', '2019-04-11 00:30:29', '2019-04-11 01:34:28'),
(15, 9, '2019-04-11 01:38:15', '2019-04-11 01:57:14', '2019-04-11 01:38:15', '2019-04-11 01:57:14'),
(16, 4, '2019-04-11 01:57:22', '2019-04-11 01:57:40', '2019-04-11 01:57:22', '2019-04-11 01:57:40'),
(17, 9, '2019-04-11 01:57:45', NULL, '2019-04-11 01:57:45', '2019-04-11 01:57:45'),
(18, 9, '2019-04-11 01:58:19', '2019-04-11 01:58:51', '2019-04-11 01:58:19', '2019-04-11 01:58:51'),
(19, 4, '2019-04-11 01:58:57', '2019-04-11 02:05:19', '2019-04-11 01:58:57', '2019-04-11 02:05:20'),
(20, 4, '2019-04-11 02:05:30', '2019-04-11 02:06:51', '2019-04-11 02:05:30', '2019-04-11 02:06:51'),
(21, 2, '2019-04-12 05:08:29', '2019-04-12 05:11:42', '2019-04-12 05:08:29', '2019-04-12 05:11:42'),
(22, 4, '2019-04-12 05:11:50', '2019-04-12 05:14:25', '2019-04-12 05:11:50', '2019-04-12 05:14:25'),
(23, 8, '2019-04-12 05:14:30', '2019-04-12 06:56:28', '2019-04-12 05:14:30', '2019-04-12 06:56:29'),
(24, 4, '2019-04-12 05:25:55', NULL, '2019-04-12 05:25:55', '2019-04-12 05:25:55'),
(25, 9, '2019-04-12 19:04:24', '2019-04-12 20:27:13', '2019-04-12 19:04:24', '2019-04-12 20:27:13'),
(26, 9, '2019-04-12 22:56:09', '2019-04-12 22:56:33', '2019-04-12 22:56:09', '2019-04-12 22:56:33'),
(27, 9, '2019-04-12 22:57:08', '2019-04-13 00:36:32', '2019-04-12 22:57:08', '2019-04-13 00:36:32');

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
(1, 2, 'Add', 'Encoder add new case, with case ID = 35', '2019-04-09 06:31:14', '2019-04-08 21:04:00'),
(2, 4, 'Add', 'Encoder add new case, with case ID = 23', '2019-04-09 06:31:10', '2019-04-08 21:24:15'),
(3, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:07:45', '2019-04-10 06:07:45'),
(4, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:08:55', '2019-04-10 06:08:55'),
(5, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:09:33', '2019-04-10 06:09:33'),
(6, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:13:04', '2019-04-10 06:13:04'),
(7, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:14:33', '2019-04-10 06:14:33'),
(8, 9, 'Update', 'Administrator user details update, with user ID = 3', '2019-04-10 06:18:20', '2019-04-10 06:18:20'),
(9, 9, 'Update', 'Administrator user details update, with user ID = 3', '2019-04-10 06:19:46', '2019-04-10 06:19:46'),
(10, 9, 'Update', 'Administrator user details update, with user ID = 5', '2019-04-10 06:24:26', '2019-04-10 06:24:26'),
(11, 9, 'Update', 'Administrator user details update, with user ID = 6', '2019-04-10 06:25:02', '2019-04-10 06:25:02'),
(12, 9, 'Update', 'Administrator user details update, with user ID = 6', '2019-04-10 06:25:13', '2019-04-10 06:25:13'),
(13, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:28:07', '2019-04-10 06:28:07'),
(14, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:28:17', '2019-04-10 06:28:17'),
(15, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:37:19', '2019-04-10 06:37:19'),
(16, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:38:52', '2019-04-10 06:38:52'),
(17, 9, 'Update', 'Administrator user details update, with user ID = 1', '2019-04-10 06:39:31', '2019-04-10 06:39:31'),
(18, 9, 'Update', 'Administrator user details update, with user ID = 1', '2019-04-10 06:40:01', '2019-04-10 06:40:01'),
(19, 9, 'Update', 'Administrator user details update, with user ID = 1', '2019-04-10 06:47:09', '2019-04-10 06:47:09'),
(20, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:56:23', '2019-04-10 06:56:23'),
(21, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:56:52', '2019-04-10 06:56:52'),
(22, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 06:58:02', '2019-04-10 06:58:02'),
(23, 9, 'Update', 'Administrator reset user password, with user ID = ', '2019-04-10 07:03:57', '2019-04-10 07:03:57'),
(24, 9, 'Update', 'Administrator reset user password, with user ID = 1', '2019-04-10 07:06:54', '2019-04-10 07:06:54'),
(25, 9, 'Update', 'Administrator reset user password, with user ID = 1', '2019-04-10 07:07:48', '2019-04-10 07:07:48'),
(26, 9, 'Update', 'Administrator reset user password, with user ID = 1', '2019-04-10 07:08:22', '2019-04-10 07:08:22'),
(27, 9, 'Add', 'Administrator register new User with user id = 15', '2019-04-10 07:13:49', '2019-04-10 07:13:49'),
(28, 9, 'Delete', 'Administrator delete case nature with nature id = 1', '2019-04-11 01:05:38', '2019-04-11 01:05:38'),
(29, 9, 'Delete', 'Administrator delete case nature with nature id = 7', '2019-04-11 01:18:06', '2019-04-11 01:18:06'),
(30, 9, 'Update', 'Administrator reset user password, with user ID = 1', '2019-04-12 19:23:19', '2019-04-12 19:23:19'),
(31, 9, 'Update', 'Administrator reset user password, with user ID = 1', '2019-04-12 19:23:40', '2019-04-12 19:23:40'),
(32, 9, 'Delete', ' ', '2019-04-12 19:31:00', '2019-04-12 19:31:00'),
(33, 9, 'Delete', 'Administrator delete case with case id = ', '2019-04-12 19:32:19', '2019-04-12 19:32:19'),
(34, 9, 'Delete', 'Administrator delete case with case id = ', '2019-04-12 19:46:34', '2019-04-12 19:46:34'),
(35, 9, 'Delete', 'Administrator delete case with case id = ', '2019-04-12 19:49:04', '2019-04-12 19:49:04'),
(36, 9, 'Delete', 'Administrator delete case with case id = ', '2019-04-12 19:50:05', '2019-04-12 19:50:05'),
(37, 9, 'Delete', 'Administrator delete case with case id = ', '2019-04-12 19:52:42', '2019-04-12 19:52:42'),
(38, 9, 'Delete', 'Administrator delete case with case id = 1', '2019-04-12 19:57:23', '2019-04-12 19:57:23'),
(39, 9, 'Delete', 'Administrator delete case with case id = 2', '2019-04-12 19:58:11', '2019-04-12 19:58:11'),
(40, 9, 'Add', 'Administrator add new case, with case id = 41', '2019-04-12 23:45:58', '2019-04-12 23:45:58');

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
(1, 'Rape', 'Crime', 'Any unlawful sexual activity and usually sexual intercourse carried out forcibly or under threat of injury against a person\'s will or with a person who is beneath a certain age or incapable of valid consent because of mental illness, mental deficiency, intoxication, unconsciousness, or deception.', 'REPUBLIC ACT NO. 8353', 'Available', '2019-04-11 09:18:46', '2019-04-11 01:05:38'),
(2, 'Estafa', 'Crime', 'Refers to the criminal offense of swindling; the use of fraud or deceit that causes loss to another.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(3, 'Murder', 'Crime', 'The unlawful killing of another human being without justification or excuse.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(4, 'Robbery', 'Crime', 'Unlawful taking away of goods or property by force or intimidation, with the intention of permanently depriving the owner of those items.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(5, 'Theft', 'Crime', 'Criminal act of dishonest assumption of the rights of the true owner of a tangible or intangible property by treating it as one\'s own, whether or not taking it away with the intent of depriving the true owner of it.', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(6, 'Cybercrime', 'Crime', 'A crime in which a computer is the object of the crime (hacking, phishing, spamming) or is used as a tool to commit an offense (child pornography, hate crimes). ', NULL, 'Available', '2019-03-20 13:12:12', NULL),
(7, 'Security Assistance', 'Crime', 'The Philippines is particularly vulnerable to typhoons, floods, earthquakes, landslides, tsunamis, and volcanic eruptions. These disasters can set back development and economic gains, cause disruptions in communication and transportation, and result in significant injuries and casualties.', NULL, 'Available', '2019-04-11 09:18:53', '2019-04-11 01:18:06'),
(8, 'Terrorism Threat', 'Crime', 'For the last several years, the Department of State has warned U.S. citizens of the risks of terrorist activity in the Philippines. Terrorist groups and criminal gangs continue to operate throughout the Philippines. In 2016, an Improvised Explosive Device (IED) was discovered several hundred meters from Embassy Manila. The device was deactivated by the Manila Police Department (MPD) Explosive Ordnance Division (EOD).', NULL, 'Available', '2019-04-11 09:18:57', '2019-03-21 08:51:25');

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
(1, 'Angelina', 'I', 'Jolie123', 'agent', '$2y$10$t.H5XyMCnUUvWfLT/aWJgue7HcH5aRelF8224C334260gUVVRtafC', 'APyThDuBKplxeq2pJYBzeSGPdQUbIn1MUKJpfvepTLQbCPwzCsDAk2VeWIVu', '2019-03-13 08:15:44', '2019-04-10 07:06:54', 'Agent', 'Reassigned'),
(2, 'Scarlett', 'E', 'Johansson', 'encoder1', '$2y$10$rR/d7yQdUco4i6oDLCBQf.T4.wIT5PjqOGLDAchIoXSXpEP7wtP7u', 'Nk1ZFCUUZv0H1AgGvF19VAvNOssmsPxZovaw81t7VpN0AhMEwEIZGEGcvx0d', '2019-03-13 08:21:31', '2019-03-21 08:46:50', 'Encoder', 'Active'),
(3, 'Charlize', 'A', 'Theron', 'agent1', '$2y$10$7M69Q8.xvkPP.WBs3olKC.XAnmljrLCt8VpjV27Kdrb6NPwIeC7Qy', 'nEqk4mdp792LVdvz0P7QFRmxNJBWEvrKagTGf7wKjiptIHtqofjf122QIwTd', '2019-03-13 08:22:02', '2019-04-10 06:19:46', 'Agent', 'Active'),
(4, 'Julia', 'A', 'Roberts', 'encoder2', '$2y$10$INFYyWLn/m3rLEox6M3JyOf1Muxdrvf8Ls1V97F2gc02g4GCFXpwi', '8nlolFDZmZQWd41ttfozkVmWzWJ5gpnOR0qXCUvAXXaoPa2jHM7BtYivOEgX', '2019-03-13 08:22:38', '2019-03-23 07:34:06', 'Encoder', 'Active'),
(5, 'Jennifer', 'A', 'Lawrence', 'agent213123', '$2y$10$smcU7zq.uZQOVyggZOcKIeO6gxVOHiHtn./V.BDQjhN0bxXEaER0a', 'V5Xyd2Rl4xNVm5sjoesOhWwwVOtPxcJh0zXVYvOeixSbBfmgyLGCaL4mCL0C', '2019-03-13 08:23:14', '2019-04-10 06:24:26', 'Agent', 'Active'),
(6, 'Cameron123', 'A', 'Diaz', 'agent3123', '$2y$10$rzFnGi0j37DY4g46Hvdjp.VlXnkZsoHTv1aMkad.9h8PbFbv9.RSu', '8h3O9oqIgj0KrHP8JqUu2nkff93xkaQ2lRd2Girvs1qQCQiTaK3VSpJGmEat', '2019-03-13 08:23:46', '2019-04-10 06:25:02', 'Agent', 'Active'),
(7, 'Marion', 'A', 'Cotillard', 'admin1', '$2y$10$g5kZi1HMTcSPnnw4iasdheJezexszVzA0FlBPub4mI9WO1FMdD1iK', 'E1aBTkYWVUdjEuiJdTDMxsbuyNIhuYtKxyQZ0Ni0TTIT6YFULgdOFFfR2vSJ', '2019-03-13 08:24:15', '2019-03-23 07:33:03', 'Administrator', 'Active'),
(8, 'Natalie', 'A', 'Portman', 'admin3', '$2y$10$MiiHhGWRHsYAjMxNw5884OVkU2UO39Pf0yJhHZD89Vw76kRRxb4tC', 'w6Unw8PeAY1yVfepErChO8yBaYrpLtWMrRnNINuu55Xk3Tmq3XqmegI0RkLH', '2019-03-15 05:36:23', '2019-03-15 05:36:23', 'Administrator', 'Active'),
(9, 'Kate', 'A', 'Winslet', 'admin2', '$2y$10$yfi.CZsve8dBVTai5gTAsuwqbLoMLYBCuF7Ppn3hiJB05ZI.0EElq', 'QoQ7Bn5GrMtL3o9AHl4U8TTbNZe0rNFH5xmpF8r2C6hZEfOLZh5FKzr17UxA', '2019-03-15 05:44:04', '2019-03-15 05:44:04', 'Administrator', 'Active'),
(10, 'Emma', 'A', 'Stone', 'admin4', '$2y$10$hli5P2UOYtWkWXPHpwYysO/QG841EeUQto29OTnlF9/UYLk8yHWHC', 'GYWYAOBAj6BQ9vyAIp2jdBHYQeSw24S4dHyNplALqPkffh3EurTZIq0iMGgu', '2019-03-15 05:46:39', '2019-03-15 05:46:39', 'Administrator', 'Active'),
(11, 'Eddie', 'E', 'Anderson', 'agent4', '$2y$10$Ob.ny..GTkXqaUU7dMYVveFF1sCVKVNQttIoRi0dr7dhpP2RMOXTS', NULL, '2019-03-19 08:44:53', '2019-03-19 08:44:53', 'Agent', 'Active'),
(12, 'Gillian', 'G', 'Anderson', 'agent5', '$2y$10$k9d/wdy6Ze29JzTH6q23T.MLoUTahTxVUIvZ1YP94uaAhOcJpfWC.', NULL, '2019-03-19 09:14:18', '2019-03-19 09:14:18', 'Agent', 'Active'),
(13, 'Criss', 'A', 'Angel', 'criss12', '$2y$10$1h4Mf/ZI8kbgW1qP/6bq0u.Ky9ZZ5gZpGcRO9ZJCI74SMGJRNoQjS', NULL, '2019-03-20 18:23:30', '2019-03-20 18:23:30', 'Encoder', 'Active'),
(14, 'Orihime', 'I', 'Inoue', 'orihime', '$2y$10$QlJVREYywSi.JyU5cqWcY.nnkw1a1FwM/VS3TYpLOtx57TCoIslSu', NULL, '2019-03-21 08:49:46', '2019-03-21 08:49:46', 'Agent', 'Active'),
(15, 'Marsmello', 'Ft.', 'Bastille', 'marshmello', '$2y$10$00iGROKDkwx5ChE16Gky7e86YTViORj6JKsv0gXB2fxlmQCbcwBUS', NULL, '2019-04-10 07:13:49', '2019-04-10 07:13:49', 'Agent', 'Active');

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
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `caseagent`
--
ALTER TABLE `caseagent`
  MODIFY `caseagentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `casenature`
--
ALTER TABLE `casenature`
  MODIFY `cnatureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `case_suspects`
--
ALTER TABLE `case_suspects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `case_victims`
--
ALTER TABLE `case_victims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `complaintsheet`
--
ALTER TABLE `complaintsheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deletedcases`
--
ALTER TABLE `deletedcases`
  MODIFY `dcaseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `userid_fk1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD CONSTRAINT ` caseid_fk2` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userid_fk2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `userid_fk4` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `userid_fk5` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
