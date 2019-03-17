-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 01:41 PM
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
-- Table structure for table `casecomplainant`
--

CREATE TABLE `casecomplainant` (
  `ccid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `complainantid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casecomplainant`
--

INSERT INTO `casecomplainant` (`ccid`, `caseid`, `complainantid`) VALUES
(1, 1, 1),
(2, 6, 2),
(3, 5, 3),
(4, 2, 4),
(5, 4, 5),
(6, 3, 6);

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
  `dateTerminated` date DEFAULT NULL,
  `statusid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`caseid`, `docketnumber`, `ccn`, `acmo`, `dateTerminated`, `statusid`) VALUES
(1, 'I-14-001', 'C-14-00290', NULL, '0000-00-00', 1),
(2, 'I-14-002', 'C-14-00291', NULL, '2019-02-08', 3),
(3, 'I-14-003', 'C-14-00292', '18-C-05289', NULL, 16),
(4, 'M-18-044', NULL, NULL, '2018-08-13', 4),
(5, 'I-14-004', 'C-14-00293', NULL, '2019-02-19', 2),
(6, 'I-14-005', 'C-14-00294', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `casestatus`
--

CREATE TABLE `casestatus` (
  `statusid` int(11) NOT NULL,
  `statname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casestatus`
--

INSERT INTO `casestatus` (`statusid`, `statname`) VALUES
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
(16, 'Closure-Subject Gone Into Hiding/Subject Cannot be Located'),
(17, 'Closure-Complainant Filed at CPO'),
(18, 'Closure-PNP Filed Appropriate Charges'),
(19, 'Closure-Subject Cannot Be Identified'),
(20, 'Closure-Referred to LED MANILA'),
(21, 'Closure-Negative Result'),
(22, 'Closure-Plaintive was Identified'),
(23, 'Closure-Intel rep is false'),
(24, 'Closure-Complainant Filed Directly'),
(25, 'Closure-Temporarily Closed'),
(26, 'Closure-Already with PPO LTB'),
(27, 'Closure-Lack of Records'),
(28, 'Closure-Unfounded'),
(29, 'Closure-Entrapment Operations Recalled'),
(30, 'Closure-Lack of Witness'),
(31, 'Closure-Lack of Basis'),
(32, 'Closure-Original Copy of Falsified Documents Cannot Be Found'),
(33, 'Closure-Subjects Identity Cannot Be Established'),
(34, 'Closure-Referred to Barangay Conciliation'),
(35, 'Closure-Complainant Filed Appropriate Charges Thru Counsel'),
(36, 'Closure-Already Filed With Proper Courts'),
(37, '\r\nClosure-Threats Ceased\r\n'),
(38, 'Closure-Crime Prescribed'),
(39, 'Closure-Referred to Private Lawyer'),
(40, 'Closure-Posting Cleared'),
(41, 'Closure-Case of Collection of Sum of Money'),
(42, 'Closure-Subject Is Out Of The Country'),
(43, 'Closure-Civil Case'),
(44, 'Closure-Victim went on therapy'),
(45, 'Closure-No Jurisdiction over the case'),
(46, 'Closure-Not within AOR'),
(47, 'Closure-Failure to Substantiate Complaint'),
(48, 'Inquest');

-- --------------------------------------------------------

--
-- Table structure for table `casesubject`
--

CREATE TABLE `casesubject` (
  `csid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casesubject`
--

INSERT INTO `casesubject` (`csid`, `caseid`, `subjectid`) VALUES
(1, 1, 1),
(2, 6, 2),
(3, 5, 3),
(4, 2, 4),
(5, 3, 6),
(6, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `casevictim`
--

CREATE TABLE `casevictim` (
  `cvid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `victimid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casevictim`
--

INSERT INTO `casevictim` (`cvid`, `caseid`, `victimid`) VALUES
(2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complainant`
--

CREATE TABLE `complainant` (
  `complainantid` int(11) NOT NULL,
  `cFirstName` varchar(255) NOT NULL,
  `cMiddleName` varchar(255) DEFAULT NULL,
  `cLastName` varchar(255) DEFAULT NULL,
  `cContactNum` int(11) DEFAULT NULL,
  `cAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complainant`
--

INSERT INTO `complainant` (`complainantid`, `cFirstName`, `cMiddleName`, `cLastName`, `cContactNum`, `cAddress`) VALUES
(1, 'Asahi', NULL, 'Azumane', NULL, NULL),
(2, 'Dayang', NULL, 'Dayang', NULL, NULL),
(3, 'Unknown', NULL, NULL, NULL, NULL),
(4, 'Vegeta', NULL, NULL, NULL, NULL),
(5, 'Pressy', NULL, 'Press', NULL, NULL),
(6, 'Godofredo', NULL, 'Corga', NULL, NULL);

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
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(11) NOT NULL,
  `sFirstName` varchar(255) DEFAULT NULL,
  `sMiddleName` varchar(255) DEFAULT NULL,
  `sLastName` varchar(255) DEFAULT NULL,
  `sAddress` varchar(255) DEFAULT NULL,
  `sContactNum` varchar(255) DEFAULT NULL,
  `sSex` enum('Male','Female','','') DEFAULT NULL,
  `sAge` int(3) DEFAULT NULL,
  `sCivilStatus` enum('Single','Married','Widowed','Divorced') DEFAULT NULL,
  `sOccupation` varchar(255) DEFAULT NULL,
  `sOtherDetails` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `sFirstName`, `sMiddleName`, `sLastName`, `sAddress`, `sContactNum`, `sSex`, `sAge`, `sCivilStatus`, `sOccupation`, `sOtherDetails`) VALUES
(1, 'Tobio', NULL, 'Kageyama', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Doyong', NULL, 'Doyong', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Revera', NULL, 'Sirena', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'SM Baguio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'POSD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Rider', NULL, 'Jose', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `usersamp`
--

CREATE TABLE `usersamp` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersamp`
--

INSERT INTO `usersamp` (`id`, `username`, `password`) VALUES
(1, 'admin', 'pass'),
(2, 'admin1', 'pass1');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `victimid` int(11) NOT NULL,
  `vFirstName` varchar(255) DEFAULT NULL,
  `vMiddleName` varchar(255) DEFAULT NULL,
  `vLastName` varchar(255) DEFAULT NULL,
  `vAddress` varchar(255) DEFAULT NULL,
  `vContactNum` varchar(255) DEFAULT NULL,
  `vSex` enum('Male','Female','','') DEFAULT NULL,
  `vAge` int(3) DEFAULT NULL,
  `vCivilStatus` enum('Single','Married','Widowed','Divorced') DEFAULT NULL,
  `vOccupation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`victimid`, `vFirstName`, `vMiddleName`, `vLastName`, `vAddress`, `vContactNum`, `vSex`, `vAge`, `vCivilStatus`, `vOccupation`) VALUES
(1, 'Ivy', NULL, 'Aguas', NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `casecomplainant`
--
ALTER TABLE `casecomplainant`
  ADD PRIMARY KEY (`ccid`),
  ADD KEY `caseid_fk6` (`caseid`),
  ADD KEY `complainantid_fk1` (`complainantid`);

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
  ADD KEY `statusid_fk` (`statusid`);

--
-- Indexes for table `casestatus`
--
ALTER TABLE `casestatus`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `casesubject`
--
ALTER TABLE `casesubject`
  ADD PRIMARY KEY (`csid`),
  ADD KEY `caseid_fk7` (`caseid`),
  ADD KEY `subjectid_fk1` (`subjectid`);

--
-- Indexes for table `casevictim`
--
ALTER TABLE `casevictim`
  ADD PRIMARY KEY (`cvid`),
  ADD KEY `caseid_fk8` (`caseid`),
  ADD KEY `victimid_fk1` (`victimid`);

--
-- Indexes for table `complainant`
--
ALTER TABLE `complainant`
  ADD PRIMARY KEY (`complainantid`);

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
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `employeeID` (`employeeID`),
  ADD UNIQUE KEY `employeeID_2` (`employeeID`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`victimid`);

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
-- AUTO_INCREMENT for table `casecomplainant`
--
ALTER TABLE `casecomplainant`
  MODIFY `ccid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `casestatus`
--
ALTER TABLE `casestatus`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `casesubject`
--
ALTER TABLE `casesubject`
  MODIFY `csid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `casevictim`
--
ALTER TABLE `casevictim`
  MODIFY `cvid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complainant`
--
ALTER TABLE `complainant`
  MODIFY `complainantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `victimid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `casecomplainant`
--
ALTER TABLE `casecomplainant`
  ADD CONSTRAINT `caseid_fk6` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `complainantid_fk1` FOREIGN KEY (`complainantid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE;

--
-- Constraints for table `casenature`
--
ALTER TABLE `casenature`
  ADD CONSTRAINT `caseid_fk1` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`),
  ADD CONSTRAINT `natureid_fk1` FOREIGN KEY (`natureid`) REFERENCES `nature` (`natureid`);

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `statusid_fk` FOREIGN KEY (`statusid`) REFERENCES `casestatus` (`statusid`);

--
-- Constraints for table `casesubject`
--
ALTER TABLE `casesubject`
  ADD CONSTRAINT `caseid_fk7` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subjectid_fk1` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`) ON UPDATE CASCADE;

--
-- Constraints for table `casevictim`
--
ALTER TABLE `casevictim`
  ADD CONSTRAINT `caseid_fk8` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `victimid_fk1` FOREIGN KEY (`victimid`) REFERENCES `victim` (`victimid`) ON UPDATE CASCADE;

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
