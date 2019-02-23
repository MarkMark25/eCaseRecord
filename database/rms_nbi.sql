-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 10:00 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms_nbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
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
  `userid` int(11) NOT NULL,
  `dateassigned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseagent`
--

INSERT INTO `caseagent` (`caseagentid`, `caseid`, `userid`, `dateassigned`) VALUES
(1, 1, 3, '2019-02-01'),
(2, 2, 5, '2019-02-04'),
(3, 3, 6, '2019-02-11'),
(4, 3, 6, '2019-02-18'),
(5, 4, 5, '2018-08-09'),
(6, 5, 3, '2019-02-11'),
(7, 5, 6, '2019-02-11'),
(8, 6, 5, '2019-02-18');

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
(7, 6, 4);

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
  `suspectname` text,
  `victimname` text,
  `dateTerminated` date DEFAULT NULL,
  `status` enum('Under Investigation','Prosecution','Solved without Prosecution','Closure','Closure-Lack of Necessary Evidence','Closure-Cause of action ceased','Closure-LOI','Closure-LOE','Closure-Archived','Closure-Charges Already Filed','Closure-Parties to Settle Amicably','Closure-Lack of Investigative Lead','Closure-Civil in Nature','Closure-Subject Arrested','Closure-Complaint Withdrawn','Closure-Subject Gone Into Hiding/Subject Cannot be Located','Closure-Complainant Filed at CPO','Closure-PNP Filed Appropriate Charges','Closure-Subject Cannot Be Identified','Closure-Referred to LED MANILA','Closure-Negative Result','Closure-Plaintive was Identified','Closure-Intel rep is false','Closure-Complainant Filed Directly','Closure-Temporarily Closed','Closure-Already with PPO LTB','Closure-Lack of Records','Closure-Unfounded','Closure-Entrapment Operations Recalled','Closure-Lack of Witness','Closure-Lack of Basis','Closure-Original Copy of Falsified Documents Cannot Be Found','Closure-Subjects Identity Cannot Be Established','Closure-Referred to Barangay Conciliation','Closure-Complainant Filed Appropriate Charges Thru Counsel','Closure-Already Filed With Proper Courts','Closure-Threats Ceased','Closure-Crime Prescribed','Closure-Referred to Private Lawyer','Closure-Posting Cleared','Closure-Case of Collection of Sum of Money','Closure-Complainant Filed with Prosecution','Closure-Subject Is Out Of The Country','Closure-Civil Case','Closure-Victim went on therapy','Closure-No Jurisdiction over the case','Closure-Not within AOR','Closure-Failure to Substantiate Complaint','Inquest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `docketnumber`, `ccn`, `acmo`, `complainantname`, `suspectname`, `victimname`, `dateTerminated`, `status`) VALUES
(1, 'NBI-CAR-I-14-001', 'NBI-CCN-C-14-00290', NULL, 'Asahi Azumane', 'Tobio Kageyama', NULL, NULL, 'Under Investigation'),
(2, 'NBI-CAR-I-14-002', 'NBI-CCN-C-14-00291', NULL, 'Vegeta', 'SM Baguio', NULL, '2019-02-08', 'Solved without Prosecution'),
(3, 'NBI-CAR-I-14-003', 'NBI-CCN-C-14-00292', '18-C-05289', 'Godofredo Corga', 'Rider Jose', NULL, NULL, 'Closure-Subject Gone Into Hiding/Subject Cannot be Located'),
(4, 'M-18-044', NULL, NULL, 'Pressy Press', 'POSD', NULL, '2018-08-13', 'Closure'),
(5, 'NBI-CAR-I-14-004', 'NBI-CCN-C-14-00293', NULL, 'Unknown', 'Revera Sirena', NULL, '2019-02-19', 'Prosecution'),
(6, 'NBI-CAR-I-14-005', 'NBI-CCN-C-14-00294', NULL, 'Dayang Dayang', 'Doyong Doyong', 'Ivy Aguas', NULL, 'Under Investigation');

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
  `userid` int(11) NOT NULL,
  `login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` datetime DEFAULT CURRENT_TIMESTAMP,
  `duration` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `userid`, `login`, `logout`, `duration`) VALUES
(1, 4, '2019-02-01 02:00:00', '2019-02-01 03:00:00', '01:00:00'),
(2, 4, '2019-02-17 02:57:20', NULL, NULL),
(3, 2, '2019-02-11 02:00:00', '2019-02-12 12:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `action` enum('Add','Update','Delete') NOT NULL,
  `description` text NOT NULL,
  `datelog` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `userid`, `action`, `description`, `datelog`) VALUES
(1, 4, 'Add', 'Added case record with caseid 1', '2019-02-01 02:10:00'),
(2, 4, 'Add', 'Added case record with caseid 2', '2019-02-17 02:50:56'),
(3, 4, 'Add', 'Added case record with caseid 3', '2019-02-17 02:51:57'),
(4, 4, 'Update', 'Updated status of case record with caseid 4 from Under Investigation to Closure-Suspect Gone Into Hiding', '2019-02-17 02:54:11'),
(5, 2, 'Add', 'Added a new user with userid 4', '2019-02-04 02:58:23'),
(6, 2, 'Add', 'Added case record with caseid 4', '2019-02-01 00:00:00'),
(7, 4, 'Add', 'Added case record with caseid 5', '2019-02-17 06:13:03'),
(8, 4, 'Add', 'Added case record with caseid 6', '2019-02-17 06:21:07');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleInitial` varchar(5) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` enum('Admin','Agent','Encoder','') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userStatus` enum('Active','Inactive','Pending','') NOT NULL,
  `employeeID` varchar(255) DEFAULT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstName`, `middleInitial`, `lastName`, `role`, `username`, `password`, `userStatus`, `employeeID`, `dateAdded`) VALUES
(2, 'Mark Anthony', 'B', 'Bambico', 'Admin', 'bambico', 'bambico', 'Active', NULL, '2019-02-15 04:38:58'),
(3, 'Jaybriane', 'T', 'Tatel', 'Agent', 'tatel', 'tatel', 'Active', NULL, '2019-02-15 04:39:30'),
(4, 'Wilfreda', 'D', 'Dawilan', 'Encoder', 'dawilan', 'dawilan', 'Active', NULL, '2019-02-15 04:39:59'),
(5, 'Jimmy', 'R', 'Ramirez Jr.', 'Agent', 'ramirez', 'ramirez', 'Active', NULL, '2019-02-15 04:40:34'),
(6, 'Justiniano', 'S', 'Sayson', 'Agent', 'sayson', 'sayson', 'Active', NULL, '2019-02-15 04:41:06'),
(7, 'Angelique', 'R', 'Romero', 'Encoder', 'romero', 'romero', 'Active', NULL, '2019-02-15 04:41:34'),
(8, 'Angel', 'E', 'Elegado', 'Admin', 'elegado', 'elegado', 'Active', NULL, '2019-02-15 04:42:08'),
(9, 'Princess', NULL, 'Allasiw', 'Encoder', 'allasiw', 'allasiw', 'Active', NULL, '2019-02-15 04:43:26');

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
  ADD UNIQUE KEY `docketnumber` (`docketnumber`,`ccn`,`acmo`);

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
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`natureid`),
  ADD UNIQUE KEY `nature` (`nature`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `employeeID` (`employeeID`),
  ADD UNIQUE KEY `employeeID_2` (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caseagent`
--
ALTER TABLE `caseagent`
  MODIFY `caseagentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `casenature`
--
ALTER TABLE `casenature`
  MODIFY `cnatureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deletedcases`
--
ALTER TABLE `deletedcases`
  MODIFY `dcaseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nature`
--
ALTER TABLE `nature`
  MODIFY `natureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `userid_fk1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD CONSTRAINT `caseid_fk2` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`),
  ADD CONSTRAINT `userid_fk2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `casenature`
--
ALTER TABLE `casenature`
  ADD CONSTRAINT `caseid_fk1` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`),
  ADD CONSTRAINT `natureid_fk1` FOREIGN KEY (`natureid`) REFERENCES `nature` (`natureid`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `userid_fk4` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `userid_fk5` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
