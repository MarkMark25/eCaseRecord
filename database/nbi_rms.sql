-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 10:31 PM
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
-- Database: `nbi_rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agentid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middleinitial` varchar(3) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `position` varchar(10) NOT NULL,
  `initials` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agentid`, `firstname`, `middleinitial`, `lastname`, `position`, `initials`) VALUES
(1, 'Kei', NULL, 'Tsukushima', 'SA', 'KT'),
(2, 'Shoyo', 'Q.', 'Hinata', 'SP', 'SQH'),
(3, 'Tobio', NULL, 'Kageyama', 'SA', 'TK');

-- --------------------------------------------------------

--
-- Table structure for table `caseagent`
--

CREATE TABLE `caseagent` (
  `caseagentid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `agentid` int(11) NOT NULL,
  `dateassigned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caseagent`
--

INSERT INTO `caseagent` (`caseagentid`, `caseid`, `agentid`, `dateassigned`) VALUES
(1, 1, 1, '2019-02-01');

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
(1, 1, 3);

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
(1, 'NBI-CAR-I-14-001', 'NBI-CCN-C-14-00290', NULL, 'Asahi Azumane', 'Tobio Kageyama', NULL, NULL, 'Under Investigation');

-- --------------------------------------------------------

--
-- Table structure for table `deletedcases`
--

CREATE TABLE `deletedcases` (
  `dcaseid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `compainantname` text,
  `suspectname` text,
  `victimname` text,
  `docketnumber` varchar(255) DEFAULT NULL,
  `ccn` varchar(255) DEFAULT NULL,
  `acmo` varchar(255) DEFAULT NULL,
  `dateterminated` date DEFAULT NULL,
  `status` enum('Under Investigation','Prosecution','Solved without Prosecution','Closure','Closure-Lack of Necessary Evidence','Closure-Cause of action ceased','Closure-LOI','Closure-LOE','Closure-Archived','Closure-Charges Already Filed','Closure-Parties to Settle Amicably','Closure-Lack of Investigative Lead','Closure-Civil in Nature','Closure-Subject Arrested','Closure-Complaint Withdrawn','Closure-Subject Gone Into Hiding/Subject Cannot be Located','Closure-Complainant Filed at CPO','Closure-PNP Filed Appropriate Charges','Closure-Subject Cannot Be Identified','Closure-Referred to LED MANILA','Closure-Negative Result','Closure-Plaintive was Identified','Closure-Intel rep is false','Closure-Complainant Filed Directly','Closure-Temporarily Closed','Closure-Already with PPO LTB','Closure-Lack of Records','Closure-Unfounded','Closure-Entrapment Operations Recalled','Closure-Lack of Witness','Closure-Lack of Basis','Closure-Original Copy of Falsified Documents Cannot Be Found','Closure-Subjects Identity Cannot Be Established','Closure-Referred to Barangay Conciliation','Closure-Complainant Filed Appropriate Charges Thru Counsel','Closure-Already Filed With Proper Courts','Closure-Threats Ceased','Closure-Crime Prescribed','Closure-Referred to Private Lawyer','Closure-Posting Cleared','Closure-Case of Collection of Sum of Money','Closure-Complainant Filed with Prosecution','Closure-Subject Is Out Of The Country','Closure-Civil Case','Closure-Victim went on therapy','Closure-No Jurisdiction over the case','Closure-Not within AOR','Closure-Failure to Substantiate Complaint','Inquest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL,
  `duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `userid`, `login`, `logout`, `duration`) VALUES
(1, 4, '2019-02-01 02:00:00', '2019-02-01 03:00:00', '01:00:00');

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
(1, 4, 'Add', 'Added case with id 1', '2019-02-01 02:10:00');

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
(3, 'Murder', 'Crime', 'The unlawful killing of another human being without justification or excuse.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `role` enum('Admin','Agent','Encoder') NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userStatus` enum('Active','Inactive') NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstName`, `lastName`, `role`, `userName`, `password`, `userStatus`, `dateAdded`) VALUES
(2, 'Mark Anthony', 'Bambico', 'Admin', 'bambico', 'bambico', 'Active', '2019-02-15 04:38:58'),
(3, 'Jaybriane', 'Tatel', 'Agent', 'tatel', 'tatel', 'Active', '2019-02-15 04:39:30'),
(4, 'Wilfreda', 'Dawilan', 'Encoder', 'dawilan', 'dawilan', 'Active', '2019-02-15 04:39:59'),
(5, 'Jimmy', 'Ramirez Jr.', 'Agent', 'ramirez', 'ramirez', 'Active', '2019-02-15 04:40:34'),
(6, 'Justiniano', 'Sayson', 'Agent', 'sayson', 'sayson', 'Active', '2019-02-15 04:41:06'),
(7, 'Angelique', 'Romero', 'Encoder', 'romero', 'romero', 'Active', '2019-02-15 04:41:34'),
(8, 'Angel', 'Elegado', 'Admin', 'elegado', 'elegado', 'Active', '2019-02-15 04:42:08'),
(9, 'Princess', 'Allasiw', 'Encoder', 'allasiw', 'allasiw', 'Active', '2019-02-15 04:43:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agentid`),
  ADD UNIQUE KEY `initials` (`initials`);

--
-- Indexes for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD PRIMARY KEY (`caseagentid`),
  ADD KEY `caseid_fk` (`caseid`),
  ADD KEY `agentid_fk` (`agentid`);

--
-- Indexes for table `casenature`
--
ALTER TABLE `casenature`
  ADD PRIMARY KEY (`cnatureid`),
  ADD KEY `caseid_fk1` (`caseid`),
  ADD KEY `natureid_fk` (`natureid`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`caseid`),
  ADD UNIQUE KEY `acmo` (`acmo`),
  ADD UNIQUE KEY `docketnumber` (`docketnumber`),
  ADD UNIQUE KEY `ccn` (`ccn`);

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
  ADD KEY `userid_fk1` (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`),
  ADD KEY `userid_fk` (`userid`);

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
  ADD UNIQUE KEY `userName` (`userName`);

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
  MODIFY `caseagentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `casenature`
--
ALTER TABLE `casenature`
  MODIFY `cnatureid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `caseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deletedcases`
--
ALTER TABLE `deletedcases`
  MODIFY `dcaseid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD CONSTRAINT `agentid_fk` FOREIGN KEY (`agentid`) REFERENCES `agent` (`agentid`),
  ADD CONSTRAINT `caseid_fk` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`);

--
-- Constraints for table `casenature`
--
ALTER TABLE `casenature`
  ADD CONSTRAINT `caseid_fk1` FOREIGN KEY (`caseid`) REFERENCES `cases` (`caseid`),
  ADD CONSTRAINT `natureid_fk` FOREIGN KEY (`natureid`) REFERENCES `nature` (`natureid`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `userid_fk1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `userid_fk` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
