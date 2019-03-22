-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 12:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, 6, 'SI', 'JSS');

-- --------------------------------------------------------

--
-- Table structure for table `caseagent`
--

CREATE TABLE `caseagent` (
  `caseagentid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `dateassigned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseagent`
--

INSERT INTO `caseagent` (`caseagentid`, `caseid`, `userid`, `dateassigned`) VALUES
(1, 1, 3, '2019-02-01'),
(2, 2, 5, '2019-02-04'),
(3, 3, 6, '2019-02-11'),
(5, 4, 5, '2018-08-09'),
(6, 5, 3, '2019-02-11'),
(7, 5, 6, '2019-02-11'),
(8, 6, 5, '2019-02-18'),
(10, 6, 5, '2019-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `casenature`
--

CREATE TABLE `casenature` (
  `cnatureid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `natureid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casenature`
--

INSERT INTO `casenature` (`cnatureid`, `caseid`, `natureid`) VALUES
(2, 1, 2),
(3, 2, 2),
(4, 3, 1),
(5, 4, 7),
(6, 5, 3),
(7, 6, 4),
(8, 6, 5);

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
  `dateTerminated` date DEFAULT NULL,
  `statusid` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `docketnumber`, `ccn`, `acmo`, `complainantname`, `dateTerminated`, `statusid`, `updated_at`) VALUES
(1, 'I-14-001', 'C-14-00290', NULL, 'Asahi Azumane', NULL, 1, NULL),
(2, 'I-14-002', 'M-12-21312', NULL, 'Vegeta', '2019-02-08', 3, '2019-03-14 04:54:41'),
(3, 'I-14-003', 'I-23-12312', '18-C-05289', 'Godofredo Corga', NULL, 16, '2019-03-14 04:55:46'),
(4, 'M-18-044', NULL, NULL, 'Pressy Press', '2018-08-13', 4, '2019-03-14 04:39:41'),
(5, 'I-14-004', NULL, NULL, 'Unknown', '2019-02-19', 2, '2019-03-14 04:43:06'),
(6, 'I-14-005', NULL, NULL, 'Dayang Dayang', NULL, 1, '2019-03-14 04:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE `case_status` (
  `statusid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`statusid`, `status`) VALUES
(1, 'Under Investigation'),
(2, 'Prosecution'),
(3, 'Solved without Prosecution'),
(4, 'Closure'),
(5, 'Closure-Lack of Necessary Evidence'),
(6, 'Closure-Cause of action ceased'),
(7, 'Closure-LOI'),
(8, 'Closure-LOE'),
(9, 'Closure-Archived'),
(10, 'Closure-Charges Already Filed'),
(11, 'Closure-Parties to Settle Amicably'),
(12, 'Closure-Lack of Investigative Lead'),
(13, 'Closure-Civil in Nature'),
(14, 'Closure-Subject Arrested'),
(15, 'Closure-Complaint Withdrawn'),
(16, 'Closure-Subject Gone Into Hiding/Subject Cannot be determined'),
(17, 'Closure-Complainant Filed at CPO'),
(18, 'Closure-PNP Filed Appropriate Charges'),
(19, 'Closure-PNP Filed Appropriate Charges'),
(20, 'Closure-Referred to LED MANILA'),
(21, 'Closure-Negative Result'),
(22, 'Closure-Plaintive was Identified'),
(23, 'Closure-Intel rep is false'),
(24, 'Closure-Complainant Filed Directly'),
(25, 'Closure-Temporarily Closed');

-- --------------------------------------------------------

--
-- Table structure for table `case_suspects`
--

CREATE TABLE `case_suspects` (
  `id` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `suspect_name` varchar(255) NOT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_suspects`
--

INSERT INTO `case_suspects` (`id`, `caseid`, `suspect_name`, `height`, `weight`) VALUES
(1, 1, 'Suspect 1', 0, 0),
(2, 2, 'Suspect 2', 0, 0),
(3, 3, 'Suspect 3', 0, 0),
(4, 4, 'Suspect 4', 0, 0),
(5, 5, 'Suspect 5', 0, 0),
(6, 6, 'Suspect 6', 0, 0),
(7, 6, 'Suspect 7', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `case_victims`
--

CREATE TABLE `case_victims` (
  `id` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `victim_name` varchar(255) NOT NULL,
  `weight` double DEFAULT NULL,
  `height` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_victims`
--

INSERT INTO `case_victims` (`id`, `caseid`, `victim_name`, `weight`, `height`) VALUES
(1, 1, 'Victim 1', NULL, NULL),
(2, 2, 'Victim 2', NULL, NULL),
(3, 3, 'Victim 3', NULL, NULL),
(4, 4, 'Victim 4', NULL, NULL),
(5, 5, 'Victim 5', NULL, NULL),
(6, 6, 'Victim 6', NULL, NULL),
(7, 6, 'Victim 7', NULL, NULL);

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
  `userid` int(10) UNSIGNED DEFAULT NULL,
  `login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` timestamp NULL DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `userid`, `login`, `logout`, `duration`, `created_at`, `updated_at`) VALUES
(43, 2, '2019-03-22 10:56:46', NULL, NULL, '2019-03-22 02:56:46', '2019-03-22 02:56:46'),
(44, 2, '2019-03-22 11:04:10', NULL, NULL, '2019-03-22 03:04:10', '2019-03-22 03:04:10'),
(45, 2, '2019-03-22 11:04:16', '2019-03-22 03:16:10', NULL, '2019-03-22 03:04:16', '2019-03-22 03:16:10'),
(46, 2, '2019-03-22 11:16:17', '2019-03-22 03:16:25', NULL, '2019-03-22 03:16:17', '2019-03-22 03:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `action` enum('Add','Update','Delete') NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `userid`, `action`, `description`, `updated_at`, `created_at`) VALUES
(1, 2, 'Add', 'Insert CCN for NBI-CAR-I-14-002', '2019-03-14 04:54:41', '2019-03-14 04:54:41'),
(2, 2, 'Add', 'Insert CCN for NBI-CAR-I-14-003', '2019-03-14 04:55:46', '2019-03-14 04:55:46');

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
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_03_15_041523_create_activity_log_table', 2),
(6, '2019_03_20_075311_add_login_fields_to_users_table', 3),
(7, '2019_03_20_075531_add_login_fields_to_users_table', 4),
(8, '2019_03_20_075819_add_login_fields_to_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `natureid` int(11) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `casetype` enum('Crime','Miscellaneous') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`natureid`, `nature`, `casetype`, `description`) VALUES
(1, 'Rape', 'Crime', 'Any unlawful sexual activity and usually sexual intercourse carried out forcibly or under threat of injury against a person\'s will or with a person who is beneath a certain age or incapable of valid consent because of mental illness, mental deficiency, intoxication, unconsciousness, or deception.'),
(2, 'Estafa', 'Crime', 'Refers to the criminal offense of swindling; the use of fraud or deceit that causes loss to another.'),
(3, 'Murder', 'Crime', 'The unlawful killing of another human being without justification or excuse.'),
(4, 'Robbery', 'Crime', 'Unlawful taking away of goods or property by force or intimidation, with the intention of permanently depriving the owner of those items.'),
(5, 'Theft', 'Crime', 'Criminal act of dishonest assumption of the rights of the true owner of a tangible or intangible property by treating it as one\'s own, whether or not taking it away with the intent of depriving the true owner of it.'),
(6, 'Cybercrime', 'Crime', 'A crime in which a computer is the object of the crime (hacking, phishing, spamming) or is used as a tool to commit an offense (child pornography, hate crimes). '),
(7, 'Security Assistance', 'Miscellaneous', '');

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
  `userStatus` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstName`, `middleInitial`, `lastName`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `userStatus`) VALUES
(1, 'Gregorio', 'I', 'Maipatanggol', 'agent', '$2y$10$Qw3XSCklpTXtUmkN/2imLOgWyMq5iuEK6ILzPZcZhMy/Gb.k3t7Be', 'APyThDuBKplxeq2pJYBzeSGPdQUbIn1MUKJpfvepTLQbCPwzCsDAk2VeWIVu', '2019-03-13 08:15:44', '2019-03-13 08:15:44', 'Agent', 'Active'),
(2, 'encoder1', 'e', 'encoders1', 'Encoder1', '$2y$10$rR/d7yQdUco4i6oDLCBQf.T4.wIT5PjqOGLDAchIoXSXpEP7wtP7u', 'F36PPI9GXTwYDPWdqKoGHMbshAZPHNODx8SAl0Om3iZ7SVR0eikbwgHdHJcn', '2019-03-13 08:21:31', '2019-03-13 08:21:31', 'Encoder', 'Active'),
(3, 'agent1', 'a', 'agents1', 'agent1', '$2y$10$7M69Q8.xvkPP.WBs3olKC.XAnmljrLCt8VpjV27Kdrb6NPwIeC7Qy', 'bfe7Wp7ejleDjKNfAspZHRVaV6zIdxvLt0x7Q2bGKoNiPoluGpVbjPMDXYzw', '2019-03-13 08:22:02', '2019-03-13 08:22:02', 'Agent', 'Active'),
(4, 'encoder2', 'e', 'encoders2', 'encoder2', '$2y$10$Ny6rNtypW3IbQ1vxaQujKeU8qCzqD.E96qUuu0PccrgHkDzkBHxg2', 'Kkterq1xlk1T5LsDD9E6N0PJ5yaMZJr6tZO7GHeZyfYKi0oPYXzbJSVBKyCj', '2019-03-13 08:22:38', '2019-03-13 08:22:38', 'Encoder', 'Active'),
(5, 'agent2', 'a', 'agents2', 'agent2', '$2y$10$smcU7zq.uZQOVyggZOcKIeO6gxVOHiHtn./V.BDQjhN0bxXEaER0a', 'V5Xyd2Rl4xNVm5sjoesOhWwwVOtPxcJh0zXVYvOeixSbBfmgyLGCaL4mCL0C', '2019-03-13 08:23:14', '2019-03-13 08:23:14', 'Agent', 'Active'),
(6, 'agent3', 'a', 'agents3', 'agent3', '$2y$10$rzFnGi0j37DY4g46Hvdjp.VlXnkZsoHTv1aMkad.9h8PbFbv9.RSu', '8h3O9oqIgj0KrHP8JqUu2nkff93xkaQ2lRd2Girvs1qQCQiTaK3VSpJGmEat', '2019-03-13 08:23:46', '2019-03-13 08:23:46', 'Agent', 'Active'),
(7, 'admin1', 'ad', 'admins1', 'admin1', '$2y$10$yisAXdxADALyZaogIDNpE.XdT9hEh.XmUYQKPNKr4LuMOiwEyXrKK', 'oBnCxWuvgcbdyhuMYirBsx0oELg6ksgIedi3hdwiATq2EwKweqQZ64FJ4Emu', '2019-03-13 08:24:15', '2019-03-13 08:24:15', 'Administrator', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`(191));

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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caseagent`
--
ALTER TABLE `caseagent`
  MODIFY `caseagentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `casenature`
--
ALTER TABLE `casenature`
  MODIFY `cnatureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `case_suspects`
--
ALTER TABLE `case_suspects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `case_victims`
--
ALTER TABLE `case_victims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deletedcases`
--
ALTER TABLE `deletedcases`
  MODIFY `dcaseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `natureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT ` caseid_fk2` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userid_fk2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON UPDATE CASCADE;

--
-- Constraints for table `casenature`
--
ALTER TABLE `casenature`
  ADD CONSTRAINT `caseid_fk1` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `natureid_fk1` FOREIGN KEY (`natureid`) REFERENCES `nature` (`natureid`) ON UPDATE CASCADE;

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `statusid_fk1` FOREIGN KEY (`statusid`) REFERENCES `case_status` (`statusid`) ON UPDATE CASCADE;

--
-- Constraints for table `case_suspects`
--
ALTER TABLE `case_suspects`
  ADD CONSTRAINT `case_suspect_caseid` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE;

--
-- Constraints for table `case_victims`
--
ALTER TABLE `case_victims`
  ADD CONSTRAINT `case_victim_caseid` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE;

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
