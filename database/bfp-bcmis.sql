-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 09:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfp-bcmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_no` int(20) NOT NULL,
  `application_type` varchar(10) NOT NULL,
  `application_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `establishment_address` varchar(50) NOT NULL,
  `building_type` varchar(50) NOT NULL,
  `barangay_name` varchar(100) NOT NULL,
  `type_of_permit` varchar(100) NOT NULL,
  `cpnumb` varchar(100) NOT NULL,
  `croname` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number_of_floors` varchar(10) NOT NULL,
  `lot_size` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `initial_requirements` varchar(200) NOT NULL,
  `assessment_status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_no`, `application_type`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay_name`, `type_of_permit`, `cpnumb`, `croname`, `date_applied`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `initial_requirements`, `assessment_status`, `month`, `year`, `date_created`) VALUES
(1, 'FSEC', 'Kenneth Cayetano', 'Bay Bancorp, Inc.', 'San Enrique', 'Business-Office', 'Barangay 22', 'NA', '09474298815', 'Matt Murdockk', '2019-02-02', 'Kenneth Cayetano', '23', '12', 'Complete', 'IniReq1,IniReq2,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 4, 2019 7:01 pm'),
(2, 'FSIC', 'Justin Christian', 'Sears Canada Inc. ', 'San Enrique', 'Business-Office', 'Barangay 35', 'Occupancy', '09474298815', 'Matt Murdockk', '2019-02-02', 'Kenneth Cayetano', '53', '23', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Inspected', 'Feb', '2019', 'February 4, 2019 7:02 pm'),
(3, 'FSEC', 'Billy Batson', 'Fawcett Comics', ' â€ŽC. C. Beckâ€Ž Street', 'Small-Business', 'Cabug', 'NA', '09474298815', 'Matt Murdockk', '2019-02-05', 'Billy Batson', '56', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Feb', '2019', 'February 5, 2019 6:35 pm'),
(4, 'FSIC', 'Jude Law', 'Game Tyrant', 'Kahndaq Â· â€ŽMehen', 'Assembly', 'Barangay 37 ', 'Occupancy', '09474298815', 'Matt Murdockk', '2019-02-05', 'Jude Law', '3', '2', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Issued NTCV', 'Feb', '2019', 'February 5, 2019 6:37 pm'),
(5, 'FSEC', 'Kenneth Cayetano', 'Printing', 'Bacolod City', 'Assembly', 'Barangay 3', 'NA', '09474298815', 'Matt Murdockk', '2019-03-29', 'Kenneth Cayetano', '9', '12', 'Complete', 'No Initial Requirements', 'Unassessed', 'Feb', '2019', 'February 5, 2019 11:34 pm'),
(6, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Bacolod City', 'Business-Office', 'Barangay 20', 'NA', '09474298815', 'Matt Murdockk', '2019-02-01', 'Matt Murdock', '9', '2', 'Complete', 'No Initial Requirements', 'Unassessed', 'Feb', '2019', 'February 5, 2019 11:37 pm'),
(7, 'FSIC', 'asdsad', 'asdasd', 'asdasdas', 'Assembly', 'Barangay 21', 'Occupancy', '09474298815', 'Matt Murdockk', '2019-01-16', 'asdsad', '2', '2', 'Complete', 'No Initial Requirements', 'Unassessed', 'Feb', '2019', 'February 5, 2019 11:40 pm'),
(8, 'FSEC', 'asdasd', 'asdad', 'asdassd', 'Assembly', 'Barangay 3', 'NA', '09474298815', 'Matt Murdockk', '2019-02-01', 'asdasd', '2', '1', 'Complete', 'IniReq1,IniReq2,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 6, 2019 12:05 am'),
(9, 'FSEC', 'asdasd', 'asdas', 'asdad', 'Assembly', 'Barangay 3', 'NA', '09474298815', 'Matt Murdockk', '2019-02-02', 'asdasd', '2', '3', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 6, 2019 12:07 am'),
(10, 'FSIC', 'Kenneth Cayetano', 'asd', 'asd', 'Business-Office', 'Barangay 17', 'Occupancy', '09474298815', 'Nathaniel Deguzman', '2019-02-02', 'Kenneth Cayetano', '2', '3', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Feb', '2019', 'February 7, 2019 5:59 pm'),
(11, 'FSEC', 'Jessica Jones', 'Printing', 'Bacolod City', 'Assembly', 'Barangay 1', 'NA', '09474298815', 'Nathaniel Deguzman', '2019-02-02', 'Kenneth Cayetano', '1', '1', 'Pending', 'IniReq1,IniReq2,', 'Unassessed', 'Feb', '2019', 'February 7, 2019 7:08 pm'),
(12, 'FSEC', 'Kennet', 'DSasdad', 'asdddd', 'Business-Office', 'Barangay 4', 'NA', '09474298815', 'Matt Murdockk', '2019-02-02', 'Kennet', '1', '2', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 8, 2019 2:54 pm');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `ops_no` int(100) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `application_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `type_of_certificate` varchar(50) NOT NULL,
  `construction_tax` varchar(100) NOT NULL,
  `reality_tax` varchar(100) NOT NULL,
  `premium_tax` varchar(100) NOT NULL,
  `sales_tax` varchar(100) NOT NULL,
  `proceeds_tax` varchar(100) NOT NULL,
  `inspection_fee` varchar(100) NOT NULL,
  `storage_clearance` varchar(100) NOT NULL,
  `conveyance_clearance` varchar(100) NOT NULL,
  `installation_clearance` varchar(100) NOT NULL,
  `other_clearance` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `changed` double NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `date_applied` varchar(100) NOT NULL,
  `assessor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`ops_no`, `application_no`, `application_name`, `location`, `status`, `business_name`, `type_of_certificate`, `construction_tax`, `reality_tax`, `premium_tax`, `sales_tax`, `proceeds_tax`, `inspection_fee`, `storage_clearance`, `conveyance_clearance`, `installation_clearance`, `other_clearance`, `total_amount`, `payment`, `changed`, `month`, `year`, `date_applied`, `assessor_name`) VALUES
(1, '3', 'Billy Batson', ' â€ŽC. C. Beckâ€Ž Street', 'Complete', 'Fawcett Comics', 'FSEC', '0.778', '0.0342', '4.68', '4.68', '46.84', '46.800000000000004', '543', '66', '776', '43', '1531.81', '1600', 68.19, 'Feb', '2019', 'February 5, 2019 6:38 pm', 'Danny Rand'),
(2, '4', 'Jude Law', 'Kahndaq Â· â€ŽMehen', 'Complete', 'Game Tyrant', 'FSIC', '0.5640000000000001', '0.056400000000000006', '11.28', '11.28', '11.28', '112.80000000000001', '564', '564', '564', '564', '2403.26', '2500', 96.74, 'Feb', '2019', 'February 5, 2019 6:39 pm', 'Danny Rand');

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id`, `user_id`, `remarks`, `date`) VALUES
(1, '0', 'Successfully exported database', 'January 16, 2019, 10:47 pm'),
(2, '', 'Successfully exported database', 'January 17, 2019, 6:04 pm'),
(3, '', 'Successfully exported database', 'January 17, 2019, 6:04 pm'),
(4, '', 'Successfully exported database', 'January 17, 2019, 6:04 pm'),
(5, '13', 'Successfully imported database', 'January 17, 2019, 6:11 pm'),
(6, '1', 'Successfully exported database', 'January 18, 2019, 6:43 pm'),
(7, '4', 'Successfully imported database', 'January 20, 2019, 10:14 pm'),
(8, '4', 'Successfully exported database', 'January 20, 2019, 10:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(100) NOT NULL,
  `barangay_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(1, 'Alangilan'),
(2, 'Alijis'),
(3, 'Banago'),
(4, 'Barangay 1'),
(5, 'Barangay 2'),
(6, 'Barangay 3'),
(7, 'Barangay 4'),
(8, 'Barangay 5'),
(9, 'Barangay 6'),
(10, 'Barangay 7'),
(11, 'Barangay 8'),
(12, 'Barangay 9 '),
(13, 'Barangay 10'),
(14, 'Barangay 11'),
(15, 'Barangay 12'),
(16, 'Barangay 13'),
(17, 'Barangay 14'),
(18, 'Barangay 15'),
(19, 'Barangay 16 '),
(20, 'Barangay 17'),
(21, 'Barangay 18'),
(22, 'Barangay 19'),
(23, 'Barangay 20'),
(24, 'Barangay 21'),
(25, 'Barangay 22'),
(26, 'Barangay 23'),
(27, 'Barangay 24'),
(28, 'Barangay 25'),
(29, 'Barangay 26'),
(30, 'Barangay 27'),
(31, 'Barangay 28'),
(32, 'Barangay 29'),
(33, 'Barangay 30'),
(34, 'Barangay 31'),
(35, 'Barangay 32'),
(36, 'Barangay 33'),
(37, 'Barangay 34 '),
(38, 'Barangay 35'),
(39, 'Barangay 36'),
(40, 'Barangay 37 '),
(41, 'Barangay 38'),
(42, 'Barangay 39'),
(43, 'Barangay 40'),
(44, 'Barangay 41'),
(45, 'Bata'),
(46, 'Cabug'),
(47, 'Estefanía'),
(48, 'Felisa'),
(49, 'Granada'),
(50, 'Handumanan'),
(51, 'Mandalagan'),
(52, 'Mansilingan'),
(53, 'Montevista'),
(54, 'Pahanocoy'),
(55, 'Punta Taytay'),
(56, 'Singcang-Airport'),
(57, 'Sum-ag'),
(58, 'Taculing'),
(59, 'Tangub'),
(60, 'Villamonte'),
(61, 'Vista Alegre'),
(66, '');

-- --------------------------------------------------------

--
-- Table structure for table `bldg_construct`
--

CREATE TABLE `bldg_construct` (
  `bc_no` int(100) NOT NULL,
  `ir_no` varchar(100) NOT NULL,
  `beams` varchar(100) NOT NULL,
  `columns` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `exterior` varchar(100) NOT NULL,
  `corridor` varchar(100) NOT NULL,
  `partition_no` varchar(100) NOT NULL,
  `stair` varchar(100) NOT NULL,
  `windows` varchar(100) NOT NULL,
  `ceiling` varchar(100) NOT NULL,
  `door` varchar(100) NOT NULL,
  `trusses` varchar(100) NOT NULL,
  `roof` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bldg_construct`
--

INSERT INTO `bldg_construct` (`bc_no`, `ir_no`, `beams`, `columns`, `floor`, `exterior`, `corridor`, `partition_no`, `stair`, `windows`, `ceiling`, `door`, `trusses`, `roof`, `date_applied`) VALUES
(1, 'IR-2018-12-1', '123', '23', '12312', '13', '123123', '123123', '13123', '12312331321', '1232132132', '3123', '3213123', '12312312', 'December 14, 2018 5:45 pm'),
(2, 'IR-2019-01-1', '500', '500', '330', '234', '3404', '234', '434', '23', '2123', '23432', '324', '3', 'January 15, 2019 9:48 pm'),
(3, 'IR-2019-01-1', '123', '13', '3123123', '312312', '312312', '3123123123', '213213', '131321', '312313', '123123', '123213', '1231312', 'January 16, 2019 10:54 pm');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `checklist_id` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compartmentation`
--

CREATE TABLE `compartmentation` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compartmentation`
--

INSERT INTO `compartmentation` (`checklist_id`, `description`) VALUES
('Compartmentation_Req_1', 'Provide fire break up to the roof for ceiling areas.'),
('Compartmentation_Req_2', 'Provide monitored and curtained roof of sheet metal or non-combustible material of a minimum of 1.82m (6 ft) high spaced not more than 76 m (250 ft) & curtained area limited to a minimum of 4, 630 m2 (50,000 ft2).'),
('Compartmentation_Req_3', 'Provide smoke partition at enclosed areas of 2, 083 m2 (22, 500 ft2) or less with the length of 45.7m (150 ft) or less, with self-closing fire doors.'),
('Compartmentation_Req_4', 'Provide  smoke  partition  of  two  (2)  hour  fire  resistance  from  floor  to underside of floor above.'),
('Compartmentation_Req_5', 'Provide interior finish as follows; Exit; Class _________ Access to Exit; Class ___________ Other Spaces; Class _________'),
('Compartmentation_Req_6', 'Provide fire stopping for all concealed spaces.'),
('Compartmentation_Req_1', 'Provide fire break up to the roof for ceiling areas.'),
('Compartmentation_Req_2', 'Provide monitored and curtained roof of sheet metal or non-combustible material of a minimum of 1.82m (6 ft) high spaced not more than 76 m (250 ft) & curtained area limited to a minimum of 4, 630 m2 (50,000 ft2).'),
('Compartmentation_Req_3', 'Provide smoke partition at enclosed areas of 2, 083 m2 (22, 500 ft2) or less with the length of 45.7m (150 ft) or less, with self-closing fire doors.'),
('Compartmentation_Req_4', 'Provide  smoke  partition  of  two  (2)  hour  fire  resistance  from  floor  to underside of floor above.'),
('Compartmentation_Req_5', 'Provide interior finish as follows; Exit; Class _________ Access to Exit; Class ___________ Other Spaces; Class _________'),
('Compartmentation_Req_6', 'Provide fire stopping for all concealed spaces.');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `officer_type` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `officer_fname` varchar(100) NOT NULL,
  `officer_mname` varchar(100) NOT NULL,
  `officer_lname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `firestation` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `officer_type`, `rank`, `officer_fname`, `officer_mname`, `officer_lname`, `username`, `password`, `confirm_password`, `firestation`, `date_applied`) VALUES
(1, 'CRO', 'F01', 'Jeremy', 'D.', 'Orritt', 'jorritt0', '1234', '1234', '1', 'December 13, 2018 11:23 pm'),
(2, 'CRO', 'F01', 'Shadow', 'A. ', 'Tortis', 'stortis1', '1234', '1234', '6', 'December 13, 2018 11:24 pm'),
(3, 'CRO', 'F01', 'Sande', 'R.', 'Summerley', 'mbrosenius3', '1234', '1234', '4', 'December 13, 2018 11:24 pm'),
(4, 'CRO', 'F01', 'Kai', 'R.', 'Cinderey', 'kcinderey3', '1234', '1234', '1', 'December 13, 2018 11:25 pm'),
(5, 'CRO', 'F01', 'Michel', 'D.', 'Snalham', 'msnalham5', '1234', '1234', '6', 'December 13, 2018 11:26 pm'),
(6, 'CRO', 'F01', 'Genevra', 'A. ', 'Dakin', 'gdakin6', '1234', '1234', '6', 'December 13, 2018 11:26 pm'),
(7, 'CRO', 'F01', 'Saxon', 'A. ', 'Apedaile', 'sapedaile7', '1234', '1234', '4', 'December 13, 2018 11:27 pm'),
(8, 'CRO', 'F01', 'Shirlene', 'A. ', 'Leaton', 'sleaton9', '1234', '1234', '5', 'December 13, 2018 11:28 pm'),
(9, 'CRO', 'F01', 'Hilliary', 'D.', 'Sparkwell', 'hsparkwellb', '1234', '1234', '5', 'December 13, 2018 11:28 pm'),
(10, 'CRO', 'F01', 'Agna', 'R.', 'Nottingam', 'anottingamh', '1234', '1234', '4', 'December 13, 2018 11:29 pm'),
(11, 'Inspection-CRO', 'F04', 'Justin', 'Christian', 'Puatu', 'ken05cay', 'ken05', 'ken05', '5', 'December 14, 2018 6:52 pm'),
(12, 'CRO', 'F01', 'Sergent', 'D.', 'Cecere', 'scecere0', 'ao68bc291xz', 'ao68bc291xz', '1', 'January 10, 2019 9:56 pm'),
(16, 'CRO', 'F01', 'Kenneth', 'De la Rosa', 'Cayetano', 'ken2', 'kenneth2', 'kenneth2', '1', 'January 16, 2019 1:26 pm'),
(17, 'CRO', 'F01', 'Matt', 'Knuckle', 'Murdockk', 'Dare', '123devil', '123devil', '4', 'January 18, 2019 3:05 pm'),
(18, 'CRO', 'F01', 'Matt', 'Knuckle', 'Murdockk', 'Dare', '123devil', '123devil', '4', 'January 18, 2019 3:06 pm'),
(21, 'CRO', 'F01', 'Clark', 'KE', 'KE', 'admin1234', 'admin1234', 'admin1234', '5', 'January 21, 2019 11:56 pm'),
(22, 'CRO', 'F01', 'Kenneth', 'De La Rosa', 'Cayeatano', 'Admin101', 'kenneth', 'kenneth', '5', 'January 22, 2019 7:46 pm'),
(23, 'Assessor', 'F01', 'Joy', 'Ann', 'Villanueva', 'assessor101', 'Assessor101', 'Assessor101', '6', 'January 28, 2019 12:28 pm'),
(24, 'Inspection-CRO', 'F01', 'Nathaniel', 'Owen', 'Deguzman', 'inspectioncro101', 'InspectionCro101', 'InspectionCro101', '6', 'January 28, 2019 6:34 pm'),
(25, 'Evaluator', 'F03', 'Dennzel', 'Suarez', 'Busquets', 'eval101', 'eval0119', 'eval0119', '4', 'January 28, 2019 6:46 pm'),
(26, 'Inspector', 'F03', 'Anthony', 'Laker', 'Davis', 'antdavis', 'Antdavis123', 'Antdavis123', '1', 'January 29, 2019 10:53 pm'),
(27, 'Inspector', 'F01', 'Ed', 'Soho', 'Caluag', 'edcalu', 'Edcalu123', 'Edcalu123', '1', 'January 29, 2019 10:56 pm'),
(28, 'Inspector', 'F01', 'Korina', 'Sanchez', 'Rojas', 'korina101', 'Korina101', 'Korina101', '1', 'January 29, 2019 10:57 pm'),
(29, 'Inspector', 'F01', 'Manny', 'Pangilinan', 'Pacquiao', 'pacman101', 'Pacman101', 'Pacman101', '1', 'January 29, 2019 10:58 pm'),
(30, 'Inspection-CRO', 'F03', 'Haime', 'Wakene', 'Hurrisa', 'wacky101', 'Wacky101', 'Wacky101', '1', 'January 29, 2019 11:02 pm'),
(31, 'Inspector', 'F01', 'John', 'Mercado', 'Gamotin', 'john101', 'Johnrey101', 'Johnrey101', '1', 'January 29, 2019 11:07 pm'),
(32, 'Inspector', 'F01', 'Brandon', 'Laker', 'Ingram', 'brand14', 'Brandon14', 'Brandon14', '1', 'January 29, 2019 11:20 pm'),
(33, 'Inspector', 'F01', 'Kyle', 'Laker', 'Kuzma', 'kylekuz', 'Kylekuz101', 'Kylekuz101', '1', 'January 29, 2019 11:22 pm'),
(34, 'Inspector', 'F01', 'Lonzo', 'Laker', 'Ball', 'lonzo101', 'Lonzo101', 'Lonzo101', '1', 'January 29, 2019 11:22 pm'),
(35, 'Inspector', 'F01', 'Lance', 'Laker', 'Stephenson', 'lance101', 'Lance101', 'Lance101', '1', 'January 29, 2019 11:23 pm'),
(36, 'Inspector', 'F01', 'Dwayne', 'Miami', 'Wade', 'dwayne101', 'Dwayne101', 'Dwayne101', '1', 'January 29, 2019 11:23 pm'),
(37, 'Inspector', 'F01', 'Scottie', 'Bull', 'Pippen', 'scottie101', 'Scottie101', 'Scottie101', '1', 'January 29, 2019 11:24 pm'),
(38, 'Inspector', 'F01', 'Junemar', 'Sanmig', 'Fajardo', 'junemar', 'Junemar101', 'Junemar101', '1', 'January 29, 2019 11:26 pm'),
(39, 'Inspector', 'F01', 'Ronald', 'Sanmig', 'Tubid', 'ronald101', 'Ronald101', 'Ronald101', '1', 'January 29, 2019 11:27 pm'),
(40, 'Inspector', 'F01', 'Japeth', 'Ginebra', 'Aguilar', 'japeth', 'Japeth101', 'Japeth101', '1', 'January 29, 2019 11:28 pm'),
(41, 'Evaluator', 'F01', 'Izuku', 'Hero', 'Midoriya', 'izuku', 'Izuku101', 'Izuku101', '1', 'January 29, 2019 11:29 pm'),
(42, 'Evaluator', 'F01', 'Charles', 'Suns', 'Barkley', 'charles101', 'Charles101', 'Charles101', '1', 'January 29, 2019 11:30 pm'),
(43, 'Evaluator', 'F01', 'Kurt', 'Mayang', 'Barrioga', 'kurtlifers', 'kurtlifers101', 'kurtlifers101', '1', 'January 29, 2019 11:31 pm'),
(44, 'Evaluator', 'F01', 'Allen', 'Sixer', 'Iverson', 'allenai', 'Allenai101', 'Allenai101', '1', 'January 29, 2019 11:32 pm'),
(45, 'Evaluator', 'F01', 'Rajon', 'Laker', 'Rondo', 'rajon09', 'Rajonrondo09', 'Rajonrondo09', '1', 'January 29, 2019 11:33 pm'),
(46, 'Inspector', 'F01', 'Royal ', 'D.', 'Bee', 'beeznuts', 'Casiof91w', 'Casiof91w', '6', 'January 30, 2019 11:14 pm'),
(47, 'Inspector', 'F01', 'Angie ', 'D.', 'Wildgoose', 'awildgoose', 'Casiof91w', 'Casiof91w', '3', 'January 30, 2019 11:15 pm'),
(48, 'CRO', 'F01', 'Ives', 'R.', 'Toddhunter', 'itoddhunter', 'Casiof91w', 'Casiof91w', '2', 'January 30, 2019 11:16 pm'),
(49, 'Inspector', 'F04', 'Roze', 'M.', 'Manthorpe', 'rmanthorpe', 'Casiof91w', 'Casiof91w', '1', 'January 30, 2019 11:17 pm'),
(50, 'Inspector', 'F02', 'Clementine', 'S.', 'Sail', 'csail', 'Casiof91w', 'Casiof91w', '4', 'January 30, 2019 11:17 pm'),
(51, 'Inspector', 'F04', 'Alma ', 'E.', 'Ethridge', 'aethridge', 'Casiof91w', 'Casiof91w', '2', 'January 30, 2019 11:18 pm'),
(52, 'CRO', 'F01', 'Bartholemew', 'S.', 'Sowter', 'bsowter', 'Casiof91w', 'Casiof91w', '1', 'January 30, 2019 11:19 pm'),
(53, 'CRO', 'F01', 'Beau', 'A.', 'Schirok', 'bschirok', 'Casiof91w', 'Casiof91w', '3', 'January 30, 2019 11:20 pm'),
(54, 'Inspector', 'F03', 'Devon ', 'G. ', 'Gusney', 'dgusney', 'Casiof91w', 'Casiof91w', '5', 'January 30, 2019 11:21 pm'),
(55, 'Inspector', 'F03', 'Cherida', 'T.', 'Teppet', 'cteppet', 'Casiof91w', 'Casiof91w', '5', 'January 30, 2019 11:22 pm'),
(56, 'CRO', 'F01', 'Danna', 'C.', 'Corzon', 'dcorzon', 'Casiof91w', 'Casiof91w', '1', 'January 30, 2019 11:22 pm'),
(57, 'Inspector', 'F01', 'Leoline', 'T.', 'Tregust', 'ltregust', 'Casiof91w', 'Casiof91w', '1', 'January 30, 2019 11:23 pm'),
(58, 'Inspector', 'F01', 'Haley ', 'C.', 'Clac', 'hclac', 'Casiof91w', 'Casiof91w', '1', 'January 30, 2019 11:24 pm'),
(59, 'Inspector', 'F01', 'Michael', 'Jackson', 'Callejas', 'inspector001', 'Inspector001', 'Inspector001', '5', 'February 4, 2019 6:36 pm'),
(60, 'Assessor', 'F04', 'Danny', 'Neilson', 'Rand', 'ironfist12', 'Ironfist12', 'Ironfist12', '6', 'February 5, 2019 6:32 pm');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_checklist`
--

CREATE TABLE `evaluation_checklist` (
  `checklist_no` int(50) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `plan_evaluator` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `occupancy_classification` varchar(100) NOT NULL,
  `date_received` varchar(100) NOT NULL,
  `means_of_egrees` varchar(1000) NOT NULL,
  `walls` varchar(1000) NOT NULL,
  `compartmentation` varchar(1000) NOT NULL,
  `warning_systems` varchar(1000) NOT NULL,
  `fire_protection` varchar(1000) NOT NULL,
  `miscellaneous` varchar(1000) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_checklist`
--

INSERT INTO `evaluation_checklist` (`checklist_no`, `application_no`, `plan_evaluator`, `owner_name`, `business_name`, `project_title`, `location`, `occupancy_classification`, `date_received`, `means_of_egrees`, `walls`, `compartmentation`, `warning_systems`, `fire_protection`, `miscellaneous`, `month`, `year`, `status`) VALUES
(1, '2019-02-3', 'Dennzel Busquets', 'Billy Batson', 'Fawcett Comics', 'Nanotech', 'Mansilingan', 'Business', '2019-02-26', 'Means_Egrees_Req_1,', 'No Walls', 'No Compartmentation', 'Warning_Req_1,', 'No Fire Protection', 'No Miscellaneous', 'Feb', '2019', 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `fire_incident`
--

CREATE TABLE `fire_incident` (
  `id` int(50) NOT NULL,
  `dateofincident` varchar(100) NOT NULL,
  `structures` varchar(100) NOT NULL,
  `areatype` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `casualties` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `civilianinjured` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `croname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_incident`
--

INSERT INTO `fire_incident` (`id`, `dateofincident`, `structures`, `areatype`, `location`, `time`, `casualties`, `barangay`, `civilianinjured`, `date_created`, `month`, `year`, `croname`) VALUES
(1, '2019-01-22', '123', 'Slump', 'San Enrique', '14:44', '400', 'Montevista', '201', 'January 31, 2019 10:04 pm', 'Feb', '2019', 'Matt Murdockk'),
(2, '2019-02-13', '400', 'Slump', 'San Enrique', '12:11', '10', 'Singcang-Airport', '4444', 'February 3, 2019 1:00 am', 'Feb', '2019', 'Nathaniel Deguzman'),
(3, '2019-02-28', '700', 'Squatter', 'Lizares St. ', '02:31', '277', 'Singcang-Airport', '899', 'February 3, 2019 8:40 pm', 'Feb', '2019', 'Matt Murdockk'),
(4, '1/1/2019', '1002', 'Slum', 'Bacolod City', '0:02', '789', 'Barangay 23', '500', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(5, '1/2/2019', '1003', 'Slum', 'Bacolod City', '1:00', '790', 'Barangay 24', '501', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(6, '1/3/2019', '1004', 'Slum', 'Bacolod City', '2:00', '791', 'Barangay 25', '502', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(7, '1/4/2019', '1005', 'Slum', 'Bacolod City', '3:00', '792', 'Barangay 26', '503', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(8, '1/5/2019', '1006', 'Slum', 'Bacolod City', '4:00', '793', 'Barangay 27', '504', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(9, '1/6/2019', '1007', 'Slum', 'Bacolod City', '5:00', '794', 'Barangay 28', '505', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(10, '1/7/2019', '1008', 'Slum', 'Bacolod City', '6:00', '795', 'Barangay 29', '506', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(11, '1/8/2019', '1009', 'Slum', 'Bacolod City', '7:00', '789', 'Barangay 30', '507', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(12, '1/9/2019', '1010', 'Slum', 'Bacolod City', '8:00', '789', 'Barangay 31', '508', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(13, '1/10/2019', '1011', 'Slum', 'Bacolod City', '9:00', '789', 'Barangay 32', '509', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(14, '1/11/2019', '1012', 'Slum', 'Bacolod City', '10:00', '789', 'Barangay 33', '510', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(15, '1/12/2019', '1013', 'Townhouse', 'Bacolod City', '11:00', '789', 'Barangay 34', '511', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(16, '1/13/2019', '1014', 'Townhouse', 'Bacolod City', '12:00', '789', 'Barangay 35', '512', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(17, '1/14/2019', '1015', 'Townhouse', 'Bacolod City', '13:00', '789', 'Barangay 36', '513', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(18, '1/15/2019', '1016', 'Townhouse', 'Bacolod City', '14:00', '789', 'Barangay 18', '514', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(19, '1/16/2019', '1017', 'Townhouse', 'Bacolod City', '15:00', '789', 'Barangay 19', '515', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(20, '1/17/2019', '1018', 'Townhouse', 'Bacolod City', '16:00', '790', 'Barangay 20', '516', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(21, '1/18/2019', '1019', 'Townhouse', 'Bacolod City', '17:00', '791', 'Barangay 21', '517', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(22, '1/19/2019', '1020', 'Townhouse', 'Bacolod City', '18:00', '792', 'Barangay 22', '518', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(23, '1/20/2019', '1021', 'Townhouse', 'Bacolod City', '19:00', '793', 'Barangay 23', '519', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(24, '1/21/2019', '1022', 'Townhouse', 'Bacolod City', '20:00', '794', 'Barangay 24', '520', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(25, '1/22/2019', '1023', 'Townhouse', 'Bacolod City', '21:00', '795', 'Barangay 25', '521', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(26, '1/23/2019', '1024', 'Townhouse', 'Bacolod City', '22:00', '796', 'Barangay 26', '522', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(27, '1/24/2019', '1025', 'Townhouse', 'Bacolod City', '4:00', '797', 'Barangay 27', '523', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(28, '1/1/2019', '1026', 'Townhouse', 'Bacolod City', '5:00', '798', 'Barangay 28', '524', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(29, '1/2/2019', '1027', 'Townhouse', 'Bacolod City', '6:00', '799', 'Barangay 30', '525', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(30, '1/3/2019', '1028', 'Townhouse', 'Bacolod City', '7:00', '800', 'Barangay 31', '526', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(31, '1/4/2019', '1029', 'Townhouse', 'Bacolod City', '8:00', '801', 'Barangay 32', '527', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(32, '1/5/2019', '1030', 'Townhouse', 'Bacolod City', '9:00', '802', 'Barangay 33', '528', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(33, '1/6/2019', '1031', 'Townhouse', 'Bacolod City', '10:00', '803', 'Barangay 34', '529', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(34, '1/7/2019', '1032', 'Townhouse', 'Bacolod City', '11:00', '804', 'Barangay 35', '530', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(35, '1/8/2019', '1033', 'Townhouse', 'Bacolod City', '12:00', '805', 'Barangay 36', '531', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(36, '1/9/2019', '1034', 'Townhouse', 'Bacolod City', '13:00', '806', 'Barangay 37', '532', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(37, '1/10/2019', '1035', 'Townhouse', 'Bacolod City', '14:00', '807', 'Barangay 38', '533', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(38, '12/8/2018', '700', 'Squatter', 'Bacolod City', '1:00', '789', 'Barangay 28', '600', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(39, '12/9/2018', '701', 'Squatter', 'Bacolod City', '2:00', '790', 'Barangay 29', '601', '2/4/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(40, '12/10/2018', '702', 'Squatter', 'Bacolod City', '3:00', '791', 'Barangay 30', '602', '2/5/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(41, '12/11/2018', '703', 'Squatter', 'Bacolod City', '4:00', '792', 'Barangay 31', '603', '2/6/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(42, '12/12/2018', '704', 'Squatter', 'Bacolod City', '5:00', '793', 'Barangay 32', '604', '2/7/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(43, '12/13/2018', '705', 'Squatter', 'Bacolod City', '6:00', '794', 'Barangay 33', '605', '2/8/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(44, '12/14/2018', '706', 'Squatter', 'Bacolod City', '7:00', '795', 'Barangay 34', '606', '2/9/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(45, '12/15/2018', '707', 'Squatter', 'Bacolod City', '8:00', '796', 'Barangay 35', '607', '2/10/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(46, '12/16/2018', '708', 'Squatter', 'Bacolod City', '9:00', '797', 'Barangay 36', '608', '2/11/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(47, '12/17/2018', '709', 'Squatter', 'Bacolod City', '10:00', '798', 'Barangay 37', '609', '2/12/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(48, '12/18/2018', '700', 'Squatter', 'Bacolod City', '11:00', '799', 'Barangay 38', '610', '2/13/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(49, '12/19/2018', '701', 'Squatter', 'Bacolod City', '12:00', '800', 'Barangay 39', '611', '2/14/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(50, '12/20/2018', '702', 'Squatter', 'Bacolod City', '10:00', '801', 'Barangay 40', '612', '2/15/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(51, '12/21/2018', '703', 'Squatter', 'Bacolod City', '11:00', '802', 'Alangilan', '613', '2/16/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(52, '12/22/2018', '704', 'Squatter', 'Bacolod City', '12:00', '803', 'Alangilan', '614', '2/17/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(53, '12/23/2018', '705', 'Squatter', 'Bacolod City', '13:00', '804', 'Alangilan', '615', '2/18/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(54, '12/24/2018', '706', 'Squatter', 'Bacolod City', '14:00', '805', 'Alangilan', '616', '2/19/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(55, '12/25/2018', '707', 'Squatter', 'Bacolod City', '15:00', '806', 'Alangilan', '617', '2/20/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(56, '12/26/2018', '708', 'Squatter', 'Bacolod City', '16:00', '807', 'Alangilan', '618', '2/21/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(57, '12/27/2018', '709', 'Squatter', 'Bacolod City', '17:00', '802', 'Alangilan', '619', '2/22/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(58, '12/28/2018', '710', 'Squatter', 'Bacolod City', '18:00', '803', 'Alangilan', '620', '2/23/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(59, '12/29/2018', '711', 'Townhouse', 'Bacolod City', '19:00', '804', 'Alangilan', '621', '2/24/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(60, '12/30/2018', '712', 'Townhouse', 'Bacolod City', '20:00', '805', 'Alangilan', '622', '2/25/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(61, '12/31/2018', '713', 'Townhouse', 'Bacolod City', '21:00', '806', 'Alangilan', '623', '2/26/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(62, '1/1/2019', '714', 'Townhouse', 'Bacolod City', '22:00', '807', 'Alangilan', '624', '2/27/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(63, '1/2/2019', '715', 'Townhouse', 'Bacolod City', '17:00', '808', 'Alangilan', '625', '2/28/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(64, '1/3/2019', '716', 'Townhouse', 'Bacolod City', '18:00', '809', 'Alangilan', '626', '3/1/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(65, '1/4/2019', '717', 'Townhouse', 'Bacolod City', '19:00', '810', 'Alijis', '627', '3/2/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(66, '1/5/2019', '718', 'Townhouse', 'Bacolod City', '20:00', '811', 'Alijis', '628', '3/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(67, '1/6/2019', '719', 'Townhouse', 'Bacolod City', '21:00', '812', 'Alijis', '629', '3/4/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(68, '1/7/2019', '720', 'Townhouse', 'Bacolod City', '22:00', '813', 'Alijis', '630', '3/5/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(69, '1/8/2019', '721', 'Townhouse', 'Bacolod City', '23:00', '814', 'Alijis', '631', '3/6/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(70, '1/9/2019', '722', 'Townhouse', 'Bacolod City', '0:00', '815', 'Alijis', '632', '3/7/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(71, '1/10/2019', '723', 'Townhouse', 'Bacolod City', '1:00', '816', 'Alijis', '633', '3/8/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(72, '1/11/2019', '724', 'Townhouse', 'Bacolod City', '2:00', '817', 'Alijis', '634', '3/9/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(73, '1/1/2019', '300', 'Slum', 'Bacolod City', '0:02', '600', 'Banago', '200', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(74, '1/2/2019', '301', 'Slum', 'Bacolod City', '1:00', '601', 'Banago', '201', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(75, '1/3/2019', '302', 'Slum', 'Bacolod City', '2:00', '602', 'Banago', '202', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(76, '1/4/2019', '303', 'Slum', 'Bacolod City', '3:00', '603', 'Banago', '203', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(77, '1/5/2019', '304', 'Slum', 'Bacolod City', '4:00', '604', 'Banago', '204', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(78, '1/6/2019', '305', 'Slum', 'Bacolod City', '5:00', '605', 'Banago', '205', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(79, '1/7/2019', '306', 'Slum', 'Bacolod City', '6:00', '606', 'Banago', '206', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(80, '1/8/2019', '307', 'Slum', 'Bacolod City', '7:00', '607', 'Banago', '207', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(81, '1/9/2019', '308', 'Slum', 'Bacolod City', '8:00', '608', 'Banago', '208', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(82, '1/10/2019', '309', 'Slum', 'Bacolod City', '9:00', '609', 'Barangay 1', '209', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(83, '1/11/2019', '310', 'Slum', 'Bacolod City', '10:00', '610', 'Barangay 2', '210', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(84, '1/12/2019', '311', 'Townhouse', 'Bacolod City', '11:00', '611', 'Barangay 3', '211', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(85, '1/13/2019', '312', 'Townhouse', 'Bacolod City', '12:00', '612', 'Barangay 4', '212', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(86, '1/14/2019', '313', 'Townhouse', 'Bacolod City', '13:00', '613', 'Barangay 5', '213', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(87, '1/15/2019', '314', 'Townhouse', 'Bacolod City', '14:00', '614', 'Barangay 6', '214', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(88, '1/16/2019', '315', 'Townhouse', 'Bacolod City', '15:00', '700', 'Barangay 7', '215', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(89, '1/17/2019', '316', 'Townhouse', 'Bacolod City', '16:00', '701', 'Barangay 3', '216', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(90, '1/18/2019', '317', 'Townhouse', 'Bacolod City', '17:00', '702', 'Barangay 4', '217', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(91, '1/19/2019', '318', 'Townhouse', 'Bacolod City', '18:00', '703', 'Barangay 5', '218', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(92, '1/20/2019', '319', 'Townhouse', 'Bacolod City', '19:00', '704', 'Barangay 6', '219', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(93, '1/21/2019', '320', 'Townhouse', 'Bacolod City', '20:00', '705', 'Barangay 7', '220', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(94, '1/22/2019', '200', 'Townhouse', 'Bacolod City', '21:00', '706', 'Barangay 8', '221', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(95, '1/23/2019', '201', 'Townhouse', 'Bacolod City', '22:00', '707', 'Barangay 8', '222', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(96, '1/24/2019', '202', 'Townhouse', 'Bacolod City', '4:00', '708', 'Barangay 9', '223', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(97, '1/1/2019', '203', 'Townhouse', 'Bacolod City', '5:00', '100', 'Barangay 10', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(98, '1/2/2019', '204', 'Townhouse', 'Bacolod City', '6:00', '101', 'Barangay 11', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(99, '1/3/2019', '205', 'Townhouse', 'Bacolod City', '7:00', '102', 'Barangay 12', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(100, '1/4/2019', '206', 'Townhouse', 'Bacolod City', '8:00', '103', 'Barangay 13', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(101, '1/5/2019', '207', 'Townhouse', 'Bacolod City', '9:00', '104', 'Barangay 14', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(102, '1/6/2019', '208', 'Townhouse', 'Bacolod City', '10:00', '105', 'Barangay 1', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(103, '1/7/2019', '209', 'Townhouse', 'Bacolod City', '11:00', '106', 'Barangay 2', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(104, '1/8/2019', '210', 'Townhouse', 'Bacolod City', '12:00', '107', 'Barangay 3', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(105, '1/9/2019', '211', 'Townhouse', 'Bacolod City', '13:00', '108', 'Barangay 4', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(106, '1/10/2019', '212', 'Townhouse', 'Bacolod City', '14:00', '230', 'Barangay 5', '0', '2/3/2019 1:00', 'Jan', '2019', 'Nathaniel Deguzman'),
(107, '12/8/2018', '213', 'Squatter', 'Bacolod City', '1:00', '231', 'Barangay 6', '0', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(108, '12/9/2018', '214', 'Squatter', 'Bacolod City', '2:00', '232', 'Bata', '0', '2/4/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(109, '12/10/2018', '215', 'Squatter', 'Bacolod City', '3:00', '233', 'Bata', '0', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(110, '12/11/2018', '600', 'Squatter', 'Bacolod City', '4:00', '234', 'Bata', '0', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(111, '12/12/2018', '601', 'Squatter', 'Bacolod City', '5:00', '235', 'Bata', '0', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(112, '12/13/2018', '602', 'Squatter', 'Bacolod City', '6:00', '236', 'Bata', '0', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(113, '12/14/2018', '603', 'Squatter', 'Bacolod City', '7:00', '237', 'Cabug', '0', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(114, '12/15/2018', '604', 'Squatter', 'Bacolod City', '8:00', '238', 'Cabug', '210', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(115, '12/16/2018', '605', 'Squatter', 'Bacolod City', '9:00', '239', 'Cabug', '211', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(116, '12/17/2018', '606', 'Squatter', 'Bacolod City', '10:00', '240', 'Cabug', '212', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(117, '12/18/2018', '607', 'Squatter', 'Bacolod City', '11:00', '241', 'Cabug', '213', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(118, '12/19/2018', '608', 'Squatter', 'Bacolod City', '12:00', '242', 'Handumanan', '214', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(119, '12/20/2018', '609', 'Squatter', 'Bacolod City', '10:00', '243', 'Handumanan', '215', '2/3/2019 1:00', 'Feb', '2019', 'Nathaniel Deguzman'),
(120, '12/21/2018', '610', 'Squatter', 'Bacolod City', '11:00', '244', 'Handumanan', '216', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(121, '12/22/2018', '611', 'Squatter', 'Bacolod City', '12:00', '245', 'Handumanan', '217', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(122, '12/23/2018', '612', 'Squatter', 'Bacolod City', '13:00', '246', 'Taculing', '218', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(123, '12/24/2018', '613', 'Squatter', 'Bacolod City', '14:00', '247', 'Taculing', '219', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(124, '12/25/2018', '614', 'Squatter', 'Bacolod City', '15:00', '248', 'Taculing', '220', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(125, '12/26/2018', '615', 'Squatter', 'Bacolod City', '16:00', '249', 'Taculing', '219', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(126, '12/27/2018', '616', 'Squatter', 'Bacolod City', '17:00', '250', 'Taculing', '220', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(127, '12/28/2018', '617', 'Squatter', 'Bacolod City', '18:00', '251', 'Taculing', '221', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(128, '12/29/2018', '618', 'Slum', 'Bacolod City', '19:00', '252', 'Villamonte', '222', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(129, '12/30/2018', '619', 'Slum', 'Bacolod City', '20:00', '253', 'Villamonte', '223', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(130, '12/31/2018', '620', 'Slum', 'Bacolod City', '21:00', '254', 'Villamonte', '224', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(131, '1/1/2019', '621', 'Slum', 'Bacolod City', '22:00', '707', 'Villamonte', '225', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(132, '1/2/2019', '622', 'Slum', 'Bacolod City', '17:00', '708', 'Villamonte', '226', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(133, '1/3/2019', '623', 'Slum', 'Bacolod City', '18:00', '709', 'Villamonte', '227', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(134, '1/4/2019', '624', 'Slum', 'Bacolod City', '19:00', '710', 'Villamonte', '228', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(135, '1/5/2019', '625', 'Slum', 'Bacolod City', '20:00', '711', 'Vista Alegre', '229', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(136, '1/6/2019', '626', 'Slum', 'Bacolod City', '21:00', '712', 'Vista Alegre', '230', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(137, '1/7/2019', '627', 'Slum', 'Bacolod City', '22:00', '713', 'Vista Alegre', '231', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(138, '1/8/2019', '628', 'Slum', 'Bacolod City', '23:00', '714', 'Vista Alegre', '232', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(139, '1/9/2019', '629', 'Slum', 'Bacolod City', '0:00', '715', 'Vista Alegre', '233', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(140, '1/10/2019', '630', 'Slum', 'Bacolod City', '1:00', '716', 'Vista Alegre', '234', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk'),
(141, '1/11/2019', '631', 'Slum', 'Bacolod City', '2:00', '717', 'Vista Alegre', '235', '2/3/2019 1:00', 'Feb', '2019', 'Matt Murdockk');

-- --------------------------------------------------------

--
-- Table structure for table `fire_protection`
--

CREATE TABLE `fire_protection` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_protection`
--

INSERT INTO `fire_protection` (`checklist_id`, `description`) VALUES
('Fire_Protection_Req_3', 'Provide Fire Service connection with a standard outlet of 64 mm ?, and 102 mm ? dry standpipe, and shall located on a street front.'),
('Fire_Protection_Req_2', 'Provide dry & wet standpipe system with        mm ? riser and coupling\r\n                                                        of fire department standards with pumps of reliable pressure & connected to an adequate water supply tank. Hose and hose cabinet shall be provided at every hose gate valve on all floors.'),
('Fire_Protection_Req_4', 'Provide automatic fire extinguishing system where kitchen equipment is located (Kitchenhood).'),
('Fire_Protection_Req_5', 'Provide automatic chemical extinguishing system on all areas where electronic/electrical equipment are located.'),
('Fire_Protection_Req_1', 'Provide approved type portable fire extinguisher (dry chemical) ABC type,	_________ lbs. capacity for every 278 m2. (3000 ft2) of floor area or\r\n                                                        22.8 m (75 ft) travel distance on every floor level.'),
('Fire_Protection_Req_6', 'Provide   approved-type automatic fire extinguishing system in\r\n                                                        accordance with NFPA 13.  Approval of system plan is required prior to installation.');

-- --------------------------------------------------------

--
-- Table structure for table `fire_station`
--

CREATE TABLE `fire_station` (
  `id` int(100) NOT NULL,
  `fire_station_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_station`
--

INSERT INTO `fire_station` (`id`, `fire_station_no`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7');

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `io_no` int(11) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `inspector_name` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `establishment_address` varchar(100) NOT NULL,
  `date_applied` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(100) NOT NULL,
  `inspection_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_order`
--

CREATE TABLE `inspection_order` (
  `inspection_order_no` int(10) NOT NULL,
  `inspection_report_no` varchar(20) NOT NULL,
  `application_no` varchar(20) NOT NULL,
  `building_construction_no` varchar(20) NOT NULL,
  `boc_no` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_report`
--

CREATE TABLE `inspection_report` (
  `ir_no` int(11) NOT NULL,
  `io_no` varchar(100) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_address` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `establishment_address` varchar(100) NOT NULL,
  `bldg_height` varchar(100) NOT NULL,
  `lot_size` varchar(100) NOT NULL,
  `number_of_floors` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `inspection_status` varchar(50) NOT NULL,
  `recommendation` varchar(100) NOT NULL,
  `checklist_classification` varchar(100) NOT NULL,
  `checklist_exit` varchar(100) NOT NULL,
  `checklist_lightings` varchar(100) NOT NULL,
  `checklist_protection` varchar(100) NOT NULL,
  `checklist_equipments` varchar(100) NOT NULL,
  `checklist_hazardous` varchar(100) NOT NULL,
  `checklist_operating` varchar(100) NOT NULL,
  `status_of_checklist` varchar(100) NOT NULL,
  `inspection_cro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`ir_no`, `io_no`, `application_no`, `owner_name`, `owner_address`, `business_name`, `establishment_address`, `bldg_height`, `lot_size`, `number_of_floors`, `date_applied`, `month`, `year`, `inspection_status`, `recommendation`, `checklist_classification`, `checklist_exit`, `checklist_lightings`, `checklist_protection`, `checklist_equipments`, `checklist_hazardous`, `checklist_operating`, `status_of_checklist`, `inspection_cro`) VALUES
(4, 'IO-2019-02-1', '4', 'Jude Law', 'Blck 16, North East Village', 'Game Tyrant', 'Kahndaq Â· â€ŽMehen', '13131', '2', '3', 'Feb-05-2019', 'Feb', '2019', 'Inspection Report', 'Borrow Hello World', 'Hello World', 'NA', 'Borrow', 'Hello World', 'Borrow', 'Borrow', 'NA', 'issued NTC', 'Nathaniel Deguzman');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_schedule`
--

CREATE TABLE `inspection_schedule` (
  `io_schedule` int(11) NOT NULL,
  `io_no` varchar(100) NOT NULL,
  `inspectors` varchar(100) NOT NULL,
  `inspection_date` varchar(50) NOT NULL,
  `inspection_time` varchar(50) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_schedule`
--

INSERT INTO `inspection_schedule` (`io_schedule`, `io_no`, `inspectors`, `inspection_date`, `inspection_time`, `date_applied`, `month`, `year`, `status`) VALUES
(1, 'IO-2019-02-1', 'Haley ', 'February 04, 2019', '15:00', 'February 4, 2019 - 11:58 am', 'Feb', '2019', 'Pending'),
(2, 'IO-2019-02-2', 'Haley ', 'February 04, 2019', '16:00', 'February 4, 2019 - 12:31 pm', 'Feb', '2019', 'Pending'),
(3, 'IO-2019-02-4', 'Angie  Wildgoose', 'February 13, 2019', '15:02', 'February 4, 2019 - 4:26 pm', 'Feb', '2019', 'Pending'),
(4, 'IO-2019-02-1', 'Michael Callejas', 'February 06, 2019', '14:31', 'February 5, 2019 - 6:41 pm', 'Feb', '2019', 'Pending'),
(5, 'IO-2019-02-1', 'Michael Callejas', 'February 06, 2019', '16:21', 'February 5, 2019 - 6:46 pm', 'Feb', '2019', 'Pending'),
(6, 'IO-2019-02-5', 'Alma  Ethridge', 'February 07, 2019', '14:31', 'February 7, 2019 - 6:02 pm', 'Feb', '2019', 'Pending'),
(7, 'IO-2019-02-5', 'Alma  Ethridge', 'February 08, 2019', '15:02', 'February 7, 2019 - 6:03 pm', 'Feb', '2019', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `inspectors`
--

CREATE TABLE `inspectors` (
  `id` int(11) NOT NULL,
  `inspectors` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspectors`
--

INSERT INTO `inspectors` (`id`, `inspectors`) VALUES
(1, 'Cardo'),
(2, 'Dalisay'),
(3, 'Vincent'),
(4, 'Elmer'),
(5, 'John');

-- --------------------------------------------------------

--
-- Table structure for table `issue_notice`
--

CREATE TABLE `issue_notice` (
  `issue_notice_no` int(100) NOT NULL,
  `type_of_notice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `inspector_name` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `date_issued` varchar(100) NOT NULL,
  `IR_date_applied` varchar(100) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `inspection_order` varchar(100) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `grace_period_from` varchar(100) NOT NULL,
  `grace_period_to` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `deficiency_checklist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_notice`
--

INSERT INTO `issue_notice` (`issue_notice_no`, `type_of_notice`, `amount`, `owner_name`, `inspector_name`, `business_name`, `date_issued`, `IR_date_applied`, `application_no`, `inspection_order`, `business_address`, `grace_period_from`, `grace_period_to`, `month`, `year`, `deficiency_checklist`) VALUES
(1, 'Correct Violation', '4000', 'Jude Law', 'Alma  Ethridge', 'Game Tyrant', '2019-02-11', 'IO-2019-02-4', '4', 'IO-2019-02-1', 'Kahndaq Â· â€ŽMehen', '2019-02-19', '2019-02-04', 'Feb', '2019', 'checklist1,checklist2,checklist3,checklist4,');

-- --------------------------------------------------------

--
-- Table structure for table `means_of_egress`
--

CREATE TABLE `means_of_egress` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `means_of_egress`
--

INSERT INTO `means_of_egress` (`checklist_id`, `description`) VALUES
('Means_Egrees_Req_1', 'Building exits must abut a public street or approved alley.'),
('Means_Egrees_Req_2', 'Provide at least two (2) means of egress for each floor, room.'),
('Means_Egrees_Req_3', 'Provide secondary stairs/exits as far/remote from main stair, to serve ___.'),
('Means_Egrees_Req_4', 'Enclose all stairways and ire escapes with walls having	hours of fire resistance with access thru self-closing fire doors.'),
('Means_Egrees_Req_5', 'Provide two (2) doors as exit ways from all rooms.'),
('Means_Egrees_Req_6', 'Interconnect stairs and fire escapes with fire resistive passageways on corridors at least ____ meters wide.'),
('Means_Egrees_Req_7', 'Enclose walls, doors, stairs ramps, escalators and other components of exits systems.'),
('Means_Egrees_Req_8', 'Provide protected/enclosed horizontal exits with self-closing fire doors.'),
('Means_Egrees_Req_9', 'Travel distance to an exit shall not be more than ___ meters.'),
('Means_Egrees_Req_10', 'Exit doors shall swing in the direction of exit travel.'),
('Means_Egrees_Req_11', 'Revolving doors shall not be used as means of egress except_________.'),
('Means_Egrees_Req_12', 'Exit door/s should be openable from the inside without the use of keys, special knowledge or effort flush bolts or surface bolts are prohibited.'),
('Means_Egrees_Req_13', 'Exit door should have a minimum width of 71 cm and a maximum width 122 cm and shall not restrict the opening.'),
('Means_Egrees_Req_14', 'A floor or landing is required not less than the width of exit door.'),
('Means_Egrees_Req_15', 'Door should be not project into the required corridor width when fully opened so as not to reduce the corridor width to less than 76.17 cm.'),
('Means_Egrees_Req_16', 'Exit doors should provide immediate access to an approved means of egress. Exiting through a bathroom, bedroom or other room subject to locking does not comply.'),
('Means_Egrees_Req_17', 'Corridors should have a minimum width of _________ meters.'),
('Means_Egrees_Req_18', 'Required corridors in occupancies shall have.\r\n                                                            2.43 meters (8 ft) minimum width.'),
('Means_Egrees_Req_19', 'Dead-end corridors and exit balconies is limited to 6.08 m (20 ft).'),
('Means_Egrees_Req_20', 'Aisles in auditorium shall be minimum of meters in width.'),
('Means_Egrees_Req_21', 'Walls and ceilings  of  corridors  should  be  fire  resistive  construction materials.'),
('Means_Egrees_Req_22', 'Interior  openings  into  corridor  should  be  protected  as  set  forth  in ____________________________.'),
('Means_Egrees_Req_23', 'Main stairways should have a minimum width of 112 cm. Trims and handrails should not project more than 8.90 cm (3 1/2 in) into the required width.'),
('Means_Egrees_Req_24', 'Landings on stairways should have a minimum dimension of 112 cm (44 in) in the direction of travel.'),
('Means_Egrees_Req_25', 'Risers on stairways should not exceed 19 cm and tread exclusive of nosing or projections should not be less than 25 cm.'),
('Means_Egrees_Req_26', 'Doors between guest’s rooms and corridors shall be self-closing and shall have a fire protection rating at least twenty (20) minutes.'),
('Means_Egrees_Req_28', 'Openings in corridor partitions other than door openings shall be prohibited.'),
('Means_Egrees_Req_29', 'Basement portion of stairways should be provided with an approved barrier where continuous to upper floor in an exit enclosure.'),
('Means_Egrees_Req_30', 'Vertical distance between stairway landings are limited to 3.69 m (12 ft) in assembly occupancies, distance is 2.43 m (8 ft).'),
('Means_Egrees_Req_31', 'Handrails should be placed not less than 81.28 cm (32 in) above the tread. Two (2) handrails are required when stairways exceed 111.7 cm in width.'),
('Means_Egrees_Req_32', 'Guardrails for stairs, balconies, stair landings, ramps & aisles located along the edge of openside floors and mezzanines shall be provided.'),
('Means_Egrees_Req_33', 'There shall be no enclosed usable space under the stairs in an exit enclosure nor shall the open space under such stairs be used for any purpose.'),
('Means_Egrees_Req_34', 'Non-combustible outside stairs are required to have 2.03 m (6 ft, 8 in) minimum headroom clearance for stairways which should be indicated on plans.'),
('Means_Egrees_Req_35', 'Ramp slopes should have be roughened or with nonslip surface.'),
('Means_Egrees_Req_36', 'Ramp slopes should not exceed 30.3 cm. (1 ft) in 3.03 m (10 ft.).'),
('Means_Egrees_Req_37', 'No openings other than the required exits are permitted and exit passageways should be one (1) hr fire resistive construction for a three (3) storey building or less and two (2) hrs for four (4) storey building or more. Any opening therein shall be protected with an approved self-closing fire doors.'),
('Means_Egrees_Req_38', 'Exit illumination and directional EXIT signs shall be provided.'),
('Means_Egrees_Req_39', 'Panic hardware is required on exit doors. In lieu of this, doors shall have no locks or latches.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(50) NOT NULL,
  `application_no` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number` varchar(500) NOT NULL,
  `text_message` varchar(500) NOT NULL,
  `transaction` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `application_no`, `owner_name`, `number`, `text_message`, `transaction`, `date`) VALUES
(1, '25', 'James Good', '09474298815', 'Good Day! Mr/Ms Ignacio your file has already been assessed!', 'Assessment', 'January 17, 2019 10:50 pm'),
(2, '24', 'Courtney House', '09085553776', 'Good Day! Mr/Ms kelly your file has already been assessed!', 'Assessment', 'January 17, 2019 10:50 pm'),
(3, '23', 'Matthew Ben', '09281615797', 'Good Day! Mr/Ms Prince Ledesma your file has already been assessed!', 'Assessment', 'January 17, 2019 10:50 pm'),
(4, '26', 'Casey Rapid', '09281615797', 'Good Day! Mr/Ms Gay Barnet you have passed the inspection and your file is ready for certification', 'Evaluation', 'January 17, 2019 10:50 pm'),
(5, '27', 'Casey Rappa', '09085553776', 'Good Day! Mr/Ms Casey Rappa your file has already been assessed!', 'Assessment', 'January 17, 2019 10:50 pm'),
(6, '57', 'Prince Ledesma', '09474298815', '', 'Assessment', 'January 18, 2019 3:51 am'),
(7, '7', 'Alain Palluschek', '09956471293', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Alain Palluschek you have passed the evaluation and your application is ready for clearance.', 'Assessment', 'January 18, 2019 2:29 pm'),
(8, '7', 'jan2', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  jan2 you have passed the inspection and your application is ready for clearance.', 'Issue Notice', 'January 18, 2019 6:12 pm'),
(9, '2019-01-7', 'jan2', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  jan2 you have passed the inspection and your application is ready for clearance.', 'Issue Notice', 'January 18, 2019 6:41 pm'),
(10, '40', ' Sanni', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Sannithat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Inspection', 'January 18, 2019 7:07 pm'),
(11, '38', ' Claudia Jelk', 'cpnumb', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Claudia Jelkthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'January 18, 2019 7:10 pm'),
(12, '3', ' Octavius', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you   Octavius you have passed the inspection and your application is ready for clearance.', 'Issue Notice', 'January 18, 2019 7:13 pm'),
(13, '2019-01-38', ' Claudia Jelk', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Claudia Jelkthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'January 18, 2019 7:14 pm'),
(14, '4', ' Sanni', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Sannithat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'January 18, 2019 7:14 pm'),
(15, '28', 'Mark', '09085553776', 'Mr/Ms Markyour assessment was successfully verified.', 'Assessment', 'January 20, 2019 11:08 pm'),
(16, '', '', '', '', 'Assessment', 'January 20, 2019 11:23 pm'),
(17, '', '', '', '', 'Assessment', 'January 20, 2019 11:24 pm'),
(18, '24', 'Ignacio', '09474298815', 'Mr/Ms Ignacioyour assessment was successfully verified.', 'Assessment', 'January 20, 2019 11:32 pm'),
(19, '55', ' Elmer', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Elmerthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Inspection', 'January 20, 2019 11:35 pm'),
(20, '54', 'LJEE', 'cpnumb', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  LJEE you have passed the inspection and your application is ready for clearance.', 'Inspection', 'January 20, 2019 11:42 pm'),
(21, '153', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetanoyour assessment was put on hold because you have not fully paid the required amount for your application.', 'Assessment', 'January 23, 2019 12:55 am'),
(22, '153', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified.', 'Assessment', 'January 23, 2019 12:57 am'),
(23, '109', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified.', 'Assessment', 'January 23, 2019 1:31 am'),
(24, '109', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified.', 'Assessment', 'January 23, 2019 1:38 am'),
(25, '109', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified.', 'Assessment', 'January 23, 2019 1:39 am'),
(26, '109', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified.', 'Assessment', 'January 23, 2019 1:40 am'),
(27, '109', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified.', 'Assessment', 'January 23, 2019 1:41 am'),
(28, '53', ' Kenny', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Kennythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Inspection', 'January 23, 2019 3:13 am'),
(29, '2019-01-38', ' Claudia Jelk', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Claudia Jelkthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'January 24, 2019 1:16 am'),
(30, '1', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 12:59 am'),
(31, '10', 'Adams Steven', '09275757024', 'Mr/Ms Adams Steven your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:01 am'),
(32, '100', 'Margit Collomosse', '9275757024', 'Mr/Ms Margit Collomosse your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:05 am'),
(33, '101', 'Mercedes Fenelon', '9275757024', 'Mr/Ms Mercedes Fenelon your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:05 am'),
(34, '102', 'Tove Straffon', '9275757024', 'Mr/Ms Tove Straffon your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:08 am'),
(35, '103', 'Milt Meiningen', '9275757024', 'Mr/Ms Milt Meiningen your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:08 am'),
(36, '104', 'Esdras Chaize', '9275757024', 'Mr/Ms Esdras Chaize your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:09 am'),
(37, '105', 'Rolfe Seabrooke', '9275757024', 'Mr/Ms Rolfe Seabrooke your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:26 am'),
(38, '106', 'Ezra Alexandersen', '9275757024', 'Mr/Ms Ezra Alexandersen your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:29 am'),
(39, '11', 'Adebayo Bam', '09275757024', 'Mr/Ms Adebayo Bam your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:40 am'),
(40, '107', 'Ronny See', '09275757024', 'Mr/Ms Ronny See your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:40 am'),
(41, '108', 'Ximenes Stain', '09275757024', 'Mr/Ms Ximenes Stain your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:41 am'),
(42, '109', 'Britney Ambrosi', '09275757024', 'Mr/Ms Britney Ambrosi your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:48 am'),
(43, '110', 'Ivy Gaynor', '09275757024', 'Mr/Ms Ivy Gaynor your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:50 am'),
(44, '111', 'Corene Ellis', '09275757024', 'Mr/Ms Corene Ellis your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:56 am'),
(45, '112', 'Giorgi Deener', '09275757024', 'Mr/Ms Giorgi Deener your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 2:01 am'),
(46, '113', 'Kingsly Stolberg', '09275757024', 'Mr/Ms Kingsly Stolberg your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 2:01 am'),
(47, '114', 'Georgeanna Donaghie', '09275757024', 'Mr/Ms Georgeanna Donaghie your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 2:02 am'),
(48, '117', 'Maribel Beverage', '09275757024', 'Mr/Ms Maribel Beverage your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:27 am'),
(49, '118', 'Nonie Bagshaw', '09275757024', 'Mr/Ms Nonie Bagshaw your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:27 am'),
(50, '119', 'Roley Flux', '09275757024', 'Mr/Ms Roley Flux your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:28 am'),
(51, '12', 'Adel Deng', '09275757024', 'Mr/Ms Adel Deng your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:28 am'),
(52, '120', 'Hulda Pockett', '09275757024', 'Mr/Ms Hulda Pockett your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:29 am'),
(53, '121', 'Laetitia Pound', '09275757024', 'Mr/Ms Laetitia Pound your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:29 am'),
(54, '115', 'Nat Astupenas', '09275757024', 'Mr/Ms Nat Astupenas your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:30 am'),
(55, '116', 'Augusto Kristiansen', '09275757024', 'Mr/Ms Augusto Kristiansen your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:30 am'),
(56, '122', 'Faith Wychard', '09275757024', 'Mr/Ms Faith Wychard your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:43 am'),
(57, '214', 'Allen Raxworthy', '09085553776', 'Mr/Ms Allen Raxworthy your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:49 am'),
(58, '256', 'Nicolis Gillmor', '09085553776', 'Mr/Ms Nicolis Gillmor your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:50 am'),
(59, '266', 'Else Loveday', '09085553776', 'Mr/Ms Else Loveday your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:50 am'),
(60, '228', 'Fields Ranshaw', '09085553776', 'Mr/Ms Fields Ranshaw your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:51 am'),
(61, '274', 'Rosamond Jerrold', '09085553776', 'Mr/Ms Rosamond Jerrold your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:51 am'),
(62, '264', 'Berget Kindley', '09085553776', 'Mr/Ms Berget Kindley your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:52 am'),
(63, '270', 'Ailis Sabater', '09085553776', 'Mr/Ms Ailis Sabater your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:53 am'),
(64, '224', 'Manda Surgener', '09085553776', 'Mr/Ms Manda Surgener your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:53 am'),
(65, '272', 'Nickola Borrington', '09085553776', 'Mr/Ms Nickola Borrington your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:54 am'),
(66, '254', 'Roarke Lenthall', '09085553776', 'Mr/Ms Roarke Lenthall your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:54 am'),
(67, '262', 'Adelbert Glendining', '09085553776', 'Mr/Ms Adelbert Glendining your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:55 am'),
(68, '290', 'Patience Selwyne', '09085553776', 'Mr/Ms Patience Selwyne your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:55 am'),
(69, '234', 'Annecorinne Gasnoll', '09085553776', 'Mr/Ms Annecorinne Gasnoll your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:56 am'),
(70, '246', 'Jere Greatex', '09085553776', 'Mr/Ms Jere Greatex your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 11:57 am'),
(71, '214', 'Allen Raxworthy', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Allen Raxworthythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 12:03 pm'),
(72, '212', 'Keslie Handasyde', '09085553776', 'Mr/Ms Keslie Handasyde your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 12:24 pm'),
(73, '226', 'Arabele Konertz', '09085553776', 'Mr/Ms Arabele Konertz your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 12:26 pm'),
(74, '240', 'Constantine Crips', '09085553776', 'Mr/Ms Constantine Crips your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 12:28 pm'),
(75, '242', 'Louis Hardbattle', '09085553776', 'Mr/Ms Louis Hardbattle your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 12:28 pm'),
(76, '214', 'Allen Raxworthy', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Allen Raxworthythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 12:30 pm'),
(77, '214', 'Allen Raxworthy', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Allen Raxworthy you have passed the inspection and your application is ready for clearance.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 12:34 pm'),
(78, '8', 'Allen Raxworthy', '09275757024', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Allen Raxworthythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 12:51 pm'),
(79, '', 'Allen Raxworthy', '', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Allen Raxworthythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 12:53 pm'),
(80, '', 'Allen Raxworthy', '', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Allen Raxworthythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 12:54 pm'),
(81, '256', 'Nicolis Gillmor', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 3:55 pm'),
(82, '256', 'Nicolis Gillmor', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 4:27 pm'),
(83, '256', 'Nicolis Gillmor', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 4:33 pm'),
(84, '256', 'Nicolis Gillmor', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 4:44 pm'),
(85, '256', 'Nicolis Gillmor', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 4:44 pm'),
(86, '256', 'Nicolis Gillmor', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 4:51 pm'),
(87, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:13 pm'),
(88, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Nicolis Gillmor you have passed the inspection and your application is ready for clearance.', 'Issue Notice', 'February 4, 2019 6:14 pm'),
(89, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:17 pm'),
(90, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:22 pm'),
(91, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:24 pm'),
(92, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:25 pm'),
(93, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:25 pm'),
(94, '256', 'Nicolis Gillmor', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>91</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Nicolis Gillmorthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 6:26 pm'),
(95, '3', 'Billy Batson', '09474298815', 'Mr/Ms Billy Batson your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 5, 2019 6:38 pm'),
(96, '4', 'Jude Law', '09474298815', 'Mr/Ms Jude Law your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 5, 2019 6:39 pm'),
(97, '4', 'Jude Law', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Jude Lawthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 5, 2019 6:42 pm'),
(98, '4', 'Jude Law', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Jude Lawthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 5, 2019 6:46 pm'),
(99, '4', 'Jude Law', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Jude Lawthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 5, 2019 6:50 pm'),
(100, '4', 'Jude Law', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Jude Lawthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 5, 2019 6:55 pm'),
(101, '4', 'Jude Law', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>95</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms Jude Lawthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 5, 2019 7:11 pm'),
(102, '3', 'Billy Batson', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Billy Batson you have passed the evaluation and your application is ready for clearance. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 5, 2019 7:19 pm');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `1` int(10) NOT NULL,
  `officer_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`1`, `officer_type`) VALUES
(1, 'CRO'),
(2, 'Assessor'),
(3, 'Inspector'),
(4, 'Evaluator'),
(5, 'Inspection-CRO');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(10) NOT NULL,
  `rank_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `rank_code`) VALUES
(1, 'F01'),
(2, 'F02'),
(3, 'F03'),
(4, 'F04'),
(5, 'SF01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `fname`, `lname`, `login`, `type`, `status`) VALUES
(1, 'cro101', 'CROadmin101', 'Matt', 'Murdockk', 'February 8, 2019, 2:53 pm', 'CRO', 'Active'),
(4, 'admin101', 'admin101', 'Kenneth', 'Canlog', 'January 27, 2019, 12:04 am', 'employee', 'Active'),
(5, 'admin1234', 'admin1234', 'Clark', 'KE', 'January 29, 2019, 10:40 pm', 'Assessor', 'Active'),
(6, 'assessor101', 'Assessor101', 'Joy', 'Villanueva', 'February 7, 2019, 10:30 pm', 'Assessor', 'Active'),
(7, 'inspectioncro101', 'InspectionCro101', 'Nathaniel', 'Deguzman', 'February 8, 2019, 1:20 am', 'Inspection-CRO', 'Active'),
(8, 'eval101', 'eval0119', 'Dennzel', 'Busquets', 'February 5, 2019, 7:13 pm', 'Evaluator', 'Active'),
(9, 'inspector001', 'Inspector001', 'Michael', 'Callejas', 'February 5, 2019, 6:40 pm', 'Inspector', 'Active'),
(10, 'ironfist12', 'Ironfist12', 'Danny', 'Rand', 'February 5, 2019, 6:37 pm', 'Assessor', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `walls`
--

CREATE TABLE `walls` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walls`
--

INSERT INTO `walls` (`checklist_id`, `description`) VALUES
('Walls_Req_1', 'Provide standard fire wall with at least 100 cm (39.38 in) high parapets on all portion of the building on the property line.'),
('Walls_Req_2', 'Extend exterior masonry walls to form parapets or wings.'),
('Walls_Req_3', 'Provide protection of all exterior walls. All exterior walls facing approved alleys which are dead-ended must have a fire resistance of ______ hours.'),
('Walls_Req_4', 'Provide automatic fire dampers on wall openings.');

-- --------------------------------------------------------

--
-- Table structure for table `warning_systems`
--

CREATE TABLE `warning_systems` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warning_systems`
--

INSERT INTO `warning_systems` (`checklist_id`, `description`) VALUES
('Warning_Req_1', 'Provide approved emergency alarm bell system on each floor with adequate number of sending stations.'),
('Warning_Req_2', 'Provide approved type heat and smoke detection system.'),
('Warning_Req_3', 'Provide efficient communication system for warning occupants and calling fire department.'),
('Warning_Req_4', 'Provide/post   allowable   occupant   load   sign/s.   Such   signs   shall   be conspicuously and suitably located.'),
('Warning_Req_5', 'Provide fire protection/suppression during construction.'),
('Warning_Req_7', 'Provide fire exit plan for each floor of the building showing the routes from each room to appropriate exits, displayed prominently on the door of each room.'),
('Warning_Req_8', 'No heating or lighting apparatus or equipment capable of igniting flammable materials shall be used in any storage or work area where rags, excelsior, hair or other highly flammable or combustible materials are stored or used.'),
('Warning_Req_9', 'Provide/post \"NO SMOKING\" sign/s where combustible materials are stored or handled. Such signs shall be conspicuously and suitable located.'),
('Warning_Req_10', 'If high hazard commodities will be stored/handled, automatic fire suppression system shall be provided.'),
('Warning_Req_11', 'Provide/post \"DO NOT USE ELEVATOR IN CASE OF FIRE\" sign/s.'),
('Warning_Req_12', 'LPG tank/s must be installed outside the building and should be provided with safety devices that automatically stop the flow of gas should a leak develop.'),
('Warning_Req_13', 'Provide fire resistive walls between stair & kitchen area.'),
('Warning_Req_14', 'Provide outside window/s for rescue and ventilation with a minimum clear opening of 55 cm and approximately one half (0.5) m2 in area; the bottom of window opening is not more than eighty two (82) cm above the floor; it can readily be opened from the inside without the use of tools; where storm windows, screens, or antiburglar devices are used, these be provided with quick mechanism so that they may be so arranged that when opened they will not drop to the ground.'),
('Warning_Req_15', 'Rooms used for kindergarten, first or second grade pupils shall not be located above or below the floor of exit discharge. Rooms used for second grade pupils shall not be located more than one (1) storey above the floor of exit discharge.'),
('Warning_Req_16', 'Provide firefighters’ elevator.'),
('Warning_Req_17', 'All correction indicated on the original approved plan from this office on shall be followed.'),
('Warning_Req_18', 'Any changes in occupancy other than stated shall be in accordance with Rule 10.'),
('Warning_Req_19', 'Subject to inspection during construction.'),
('Warning_Req_20', 'Fire Safety Inspection Certificate must be secured before/prior to issuance of Certificate of Occupancy.'),
('Warning_Req_21', 'Subject to additional requirements upon recommendation of the Fire Safety Inspector during construction phase and final inspection.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_no`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`ops_no`);

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `bldg_construct`
--
ALTER TABLE `bldg_construct`
  ADD PRIMARY KEY (`bc_no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  ADD PRIMARY KEY (`checklist_no`);

--
-- Indexes for table `fire_incident`
--
ALTER TABLE `fire_incident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fire_station`
--
ALTER TABLE `fire_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`io_no`);

--
-- Indexes for table `inspection_order`
--
ALTER TABLE `inspection_order`
  ADD PRIMARY KEY (`inspection_order_no`);

--
-- Indexes for table `inspection_report`
--
ALTER TABLE `inspection_report`
  ADD PRIMARY KEY (`ir_no`);

--
-- Indexes for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
  ADD PRIMARY KEY (`io_schedule`);

--
-- Indexes for table `inspectors`
--
ALTER TABLE `inspectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_notice`
--
ALTER TABLE `issue_notice`
  ADD PRIMARY KEY (`issue_notice_no`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`1`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `bldg_construct`
--
ALTER TABLE `bldg_construct`
  MODIFY `bc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `checklist_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fire_incident`
--
ALTER TABLE `fire_incident`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `fire_station`
--
ALTER TABLE `fire_station`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `io_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_order`
--
ALTER TABLE `inspection_order`
  MODIFY `inspection_order_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_report`
--
ALTER TABLE `inspection_report`
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inspectors`
--
ALTER TABLE `inspectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issue_notice`
--
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
