-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2019 at 09:30 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `casenature`
--

CREATE TABLE `casenature` (
  `cnatureid` int(11) NOT NULL,
  `caseid` int(11) NOT NULL,
  `natureid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `dcaseid` int(11) NOT NULL,
  `docketnumber` varchar(255) DEFAULT NULL,
  `ccn` varchar(255) DEFAULT NULL,
  `acmo` varchar(255) DEFAULT NULL,
  `complainantname` text NOT NULL,
  `suspectname` text,
  `victimname` text,
  `userid` int(11) NOT NULL,
  `dateassigned` date NOT NULL,
  `dateTerminated` date DEFAULT NULL,
  `status` enum('Under Investigation','Prosecution','Solved without Prosecution','Closure','Closure-Lack of Necessary Evidence','Closure-Cause of action ceased','Closure-LOI','Closure-LOE','Closure-Archived','Closure-Charges Already Filed','Closure-Parties to Settle Amicably','Closure-Lack of Investigative Lead','Closure-Civil in Nature','Closure-Subject Arrested','Closure-Complaint Withdrawn','Closure-Subject Gone Into Hiding/Subject Cannot be Located','Closure-Complainant Filed at CPO','Closure-PNP Filed Appropriate Charges','Closure-Subject Cannot Be Identified','Closure-Referred to LED MANILA','Closure-Negative Result','Closure-Plaintive was Identified','Closure-Intel rep is false','Closure-Complainant Filed Directly','Closure-Temporarily Closed','Closure-Already with PPO LTB','Closure-Lack of Records','Closure-Unfounded','Closure-Entrapment Operations Recalled','Closure-Lack of Witness','Closure-Lack of Basis','Closure-Original Copy of Falsified Documents Cannot Be Found','Closure-Subjects Identity Cannot Be Established','Closure-Referred to Barangay Conciliation','Closure-Complainant Filed Appropriate Charges Thru Counsel','Closure-Already Filed With Proper Courts','Closure-Threats Ceased','Closure-Crime Prescribed','Closure-Referred to Private Lawyer','Closure-Posting Cleared','Closure-Case of Collection of Sum of Money','Closure-Complainant Filed with Prosecution','Closure-Subject Is Out Of The Country','Closure-Civil Case','Closure-Victim went on therapy','Closure-No Jurisdiction over the case','Closure-Not within AOR','Closure-Failure to Substantiate Complaint','Inquest') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstName`, `middleInitial`, `lastName`, `role`, `username`, `password`, `userStatus`, `dateAdded`) VALUES
(2, 'Mark Anthony', 'B', 'Bambico', 'Admin', 'bambico', 'bambico', 'Active', '2019-02-15 04:38:58'),
(3, 'Jaybriane', 'T', 'Tatel', 'Agent', 'tatel', 'tatel', 'Active', '2019-02-15 04:39:30'),
(4, 'Wilfreda', 'D', 'Dawilan', 'Encoder', 'dawilan', 'dawilan', 'Active', '2019-02-15 04:39:59'),
(5, 'Jimmy', 'R', 'Ramirez Jr.', 'Agent', 'ramirez', 'ramirez', 'Active', '2019-02-15 04:40:34'),
(6, 'Justiniano', 'S', 'Sayson', 'Agent', 'sayson', 'sayson', 'Active', '2019-02-15 04:41:06'),
(7, 'Angelique', 'R', 'Romero', 'Encoder', 'romero', 'romero', 'Active', '2019-02-15 04:41:34'),
(8, 'Angel', 'E', 'Elegado', 'Admin', 'elegado', 'elegado', 'Active', '2019-02-15 04:42:08'),
(9, 'Princess', NULL, 'Allasiw', 'Encoder', 'allasiw', 'allasiw', 'Active', '2019-02-15 04:43:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD KEY `userid_fk1` (`userid`);

--
-- Indexes for table `caseagent`
--
ALTER TABLE `caseagent`
  ADD KEY `userid_fk2` (`userid`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD UNIQUE KEY `docketnumber` (`docketnumber`,`ccn`,`acmo`),
  ADD KEY `userid_fk3` (`userid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `userid_fk4` (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD KEY `userid_fk5` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  ADD CONSTRAINT `userid_fk2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `userid_fk3` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

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
