-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 02:17 PM
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
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number_of_floors` varchar(10) NOT NULL,
  `lot_size` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `initial_requirements` varchar(200) NOT NULL,
  `assessment_status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_no`, `application_type`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay_name`, `type_of_permit`, `cpnumb`, `croname`, `date_applied`, `username`, `password`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `initial_requirements`, `assessment_status`, `month`, `year`) VALUES
(1, 'FSEC', 'Shamus Munks', 'Renewable Energy Group, Inc.', '524 Sunbrook Pass', 'Assembly', 'Barangay 5', 'NA', '09523424231', '', 'December 13, 2018 2:31 am', 'clarkcan2018', '8080', 'Shamus Munks', '4', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(2, 'FSEC', 'Alexandre Calleja', 'Bay Bancorp, Inc.', '10514 Katie Alley', 'Small-Business', 'Barangay 7', 'NA', '09523424231', '', 'December 13, 2018 2:33 am', 'alexandre_call', '1234', 'Alexandre Calleja', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(3, 'FSEC', 'Norris Maestro', 'Acacia Research Corporation', '7 Fallview Point', 'Educational', 'Barangay 1', 'NA', '09523424231', '', 'December 13, 2018 2:36 am', 'norris_mae', '8080', 'Norris Maestro', '3', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(4, 'FSEC', 'Marylin Klampk', 'Allstate Corporation (The)', '546 Luster Circle', 'Mercantile', 'Banago', 'NA', '09523424231', '', 'December 13, 2018 2:38 am', 'mary_klampk', '8080', 'Marylin Klampk', '3', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(5, 'FSEC', 'Ives Tassell', 'Chart Industries, Inc.', '1249 Ludington Place', 'Business-Office', 'Barangay 3', 'NA', '09523424231', '', 'December 13, 2018 2:40 am', 'ive_ras', '8080', 'Ives Tassell', '4', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(6, 'FSEC', 'Gay Barnet', 'Fortinet, Inc.', '777 Drewry Center', 'Small-Business', 'Barangay 28', 'NA', '09523424231', '', 'December 13, 2018 2:42 am', 'gayass', '8080', 'Gay Barnet', '4', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(7, 'FSEC', 'Alain Palluschek', 'Elbit Systems Ltd.', '62664 Barnett Lane', 'Storage', 'Barangay 4', 'NA', '09523424231', '', 'December 13, 2018 2:46 am', 'dsdsd', '8080', 'Alain Palluschek', '3', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(8, 'FSEC', 'Angie Kondratovich', 'Navigator Holdings Ltd.', '8 Bobwhite Avenue', 'Small-Business', 'Barangay 3', 'NA', '09523424231', '', 'December 13, 2018 2:48 am', 'akondratovich0', '8080', 'Angie Kondratovich', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(9, 'FSEC', 'Jenine Crangle', 'Wells Fargo & Company', '4138 Barnett Avenue', 'Small-Business', 'Barangay 1', 'NA', '09523424231', '', 'December 13, 2018 2:50 am', 'jcrangle1', '8080', 'Jenine Crangle', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(10, 'FSEC', 'Maegan Badham', 'CRA International,Inc.', '17 Graedel Road', 'Mercantile', 'Barangay 1', 'NA', '09523424231', '', 'December 13, 2018 2:53 am', 'mbadham2', '8080', 'Maegan Badham', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(11, 'FSIC', 'Melodie Brosenius', 'Templeton Global Income Fund, Inc.', '91999 Oriole Crossing', 'Business-Office', 'Barangay 2', 'Building', '09523424231', '', 'December 13, 2018 7:54 pm', 'mbrosenius3', '8080', ' Melodie Brosenius', '5', '60000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Dec', '2018'),
(12, 'FSIC', 'Constantia Armall', 'Northfield Bancorp, Inc.', '80 Hudson Hill', 'Small-Business', 'Barangay 35', 'Building', '09523424231', '', 'December 13, 2018 7:55 pm', 'carmall4', '8080', ' Constantia Armall', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(13, 'FSIC', 'Irwinn Bushell', 'Ichor Holdings', '8 Hazelcrest Center', 'Educational', 'Banago', 'Occupancy', '09523424231', '', 'December 13, 2018 7:56 pm', 'ibushell5', '8080', ' Irwinn Bushell', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(14, 'FSIC', 'Bettye Tapping', 'Zoetis Inc.', '585 Cardinal Point', 'Business-Office', 'Barangay 18', 'Occupancy', '09523424231', '', 'December 13, 2018 7:58 pm', 'btappinga', '8080', ' Bettye Tapping', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(15, 'FSIC', 'Marrilee Cattini', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', 'Small-Business', 'Barangay 6', 'Building', '09523424231', '', 'December 13, 2018 7:59 pm', 'mcattinib', '8080', ' Bettye Tapping', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(16, 'FSIC', 'Ajay Espinos', 'NewStar Financial, Inc.', '83589 Muir Street', 'Storage', 'Barangay 3', 'Building', '09523424231', '', 'December 13, 2018 8:00 pm', 'aespinosc', '8080', ' Melodie Brosenius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(17, 'FSIC', 'Jamaal Petkov', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', '82272 Everett Point', 'Business-Office', 'Barangay 2', 'Building', '09523424231', '', 'December 13, 2018 10:25 pm', 'jpetkovrr', '8080', 'Jamaal Petkov ', '4', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(18, 'FSEC', 'Gabey Ruoss', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', 'Assembly', 'Barangay 24', 'NA', '09523424231', '', 'December 13, 2018 10:27 pm', 'gruossrq', '8080', 'Gabey Ruoss', '4', '60000', 'Pending', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(19, 'FSIC', 'Maria Umbert', 'CBAK Energy Technology, Inc.', '8 Hazelcrest Center', 'Small-Business', 'Barangay 4', 'Building', '09523424231', '', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Melodie Brosenius', '6', '180000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(20, 'FSIC', 'Constantia Armall', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', 'Assembly', 'Barangay 18', 'Building', '09523424231', '', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Irwinn Bushell', '4', '60000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(21, 'FSIC', 'Irwinn Bushell', 'Zoetis Inc.', '3860 Oriole Plaza', 'Business-Office', 'Barangay 29', 'Building', '09523424231', '', 'December 13, 2018 10:30 pm', 'clarkcan2018', '8080', ' Constantia Armall', '4', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(22, 'FSEC', 'Maeryger D. Gomez', 'Medical Clinic', 'Menlo 4', 'Business-Office', 'Barangay 18', 'NA', '09523424231', 'croname', 'January 5, 2019 3:39 pm', 'clarkcan2018', '8080', 'Maeryger D. Gomez', '3', '75', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(23, 'FSEC', 'Juro Kazuhiko', 'Nigger Corp', 'Niggeria', 'Storage', 'Barangay 37 ', 'NA', '09085553776', 'Kenneth', 'January 10, 2019 6:07 pm', 'JRUKAZ', '8080', 'Juro', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(24, 'FSEC', 'Ignacio Branton', 'Zoetis Inc.', 'Niggeria', 'Mercantile', '', 'NA', '09085553776', 'Sergent', 'January 10, 2019 9:58 pm', 'iggy97', '8080', 'Ignacio', '5', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(25, 'FSEC', 'Cleveland Bartzen', 'Nba', '80 Hudson Hill', 'Assembly', 'Barangay 14', 'NA', '09085553776', 'Sergent', 'January 10, 2019 10:02 pm', 'clarkcan2018', '8080', 'Bart Simpson', '4', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(26, 'FSEC', 'Kellia Penniel', 'Taiga Inc', 'Tokyo', 'Mercantile', 'Barangay 4', 'NA', '09085553776', 'Kenneth', 'January 10, 2019 11:52 pm', 'kelpen', '8080', 'kelly', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019');

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
  `payment` double NOT NULL,
  `changed` double NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `date_applied` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`ops_no`, `application_no`, `application_name`, `location`, `status`, `business_name`, `type_of_certificate`, `construction_tax`, `reality_tax`, `premium_tax`, `sales_tax`, `proceeds_tax`, `inspection_fee`, `storage_clearance`, `conveyance_clearance`, `installation_clearance`, `other_clearance`, `total_amount`, `payment`, `changed`, `month`, `year`, `date_applied`) VALUES
(1, '1', 'Shamus Munks', '524 Sunbrook Pass', 'Complete', 'Renewable Energy Group, Inc.', 'FSEC', '70', '2', '6', '8', '1.2', '2.3000000000000003', '44', '55', '900', '10000', '11088.5', 11088.5, 0, 'Dec', '2018', 'December 13, 2018 11:22 pm'),
(2, '12', 'Constantia Armall', '80 Hudson Hill', 'Complete', 'Northfield Bancorp, Inc.', 'FSIC', '50', '1.31', '10', '10', '12', '40', '555', '55', '66', '54', '853.31', 900, 46.690000000000055, 'Dec', '2018', 'December 14, 2018 1:57 pm'),
(3, '13', 'Irwinn Bushell', '8 Hazelcrest Center', 'Complete', 'Ichor Holdings', 'FSIC', '80', '0.8', '12', '1.26', '10.700000000000001', '3.4000000000000004', '35352', '34', '23', '5', '35522.16', 60000, 24477.839999999997, 'Dec', '2018', 'December 14, 2018 2:14 pm'),
(4, '2', 'Alexandre Calleja', '10514 Katie Alley', 'Complete', 'Bay Bancorp, Inc.', 'FSEC', '6.6000000000000005', '0.78', '1.96', '1.52', '19.72', '98.80000000000001', '8', '8', '678', '567', '1390.38', 1500, 109.61999999999989, 'Dec', '2018', 'December 14, 2018 3:18 pm'),
(5, '3', 'Norris Maestro', '7 Fallview Point', 'Complete', 'Acacia Research Corporation', 'FSEC', '50', '4', '0.48', '1.1', '1.1', '32.5', '442', '34', '24', '2', '591.1800000000001', 600, 8.819999999999936, 'Dec', '2018', 'December 14, 2018 7:45 pm'),
(6, '14', 'Bettye Tapping', '585 Cardinal Point', 'Complete', 'Zoetis Inc.', 'FSIC', '1.2000000000000002', '0.12', '0.24', '0.24', '0.24', '1.2000000000000002', '12', '12', '12', '12', '51.24', 1000, 948.76, 'Dec', '2018', 'December 19, 2018 3:53 pm'),
(7, '4', 'Marylin Klampk', '546 Luster Circle', 'Complete', 'Allstate Corporation (The)', 'FSEC', '200', '2.33', '6.640000000000001', '46.26', '0.24', '2.3000000000000003', '65', '56', '54', '345', '777.77', 900, 122.23000000000002, 'Dec', '2018', 'December 31, 2018 11:09 pm'),
(8, '15', 'Marrilee Cattini', '3860 Oriole Plaza', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '10', '2.2', '6.8', '0.42', '0.86', '35', '310', '22', '11', '1000', '1398.28', 1400, 1.7200000000000273, 'Dec', '2018', 'December 31, 2018 11:10 pm'),
(9, '16', 'Ajay Espinos', '83589 Muir Street', 'Complete', 'NewStar Financial, Inc.', 'FSIC', '0.5', '0.34', '1.12', '0.9', '1.54', '55.6', '234', '2344', '25', '54', '2717', 3000, 283, 'Jan', '2019', 'January 3, 2019 11:17 am'),
(10, '21', 'Irwinn Bushell', '3860 Oriole Plaza', 'Complete', 'Zoetis Inc.', 'FSIC', '50', '2', '2', '0.8', '8.08', '33.4', '66', '54', '234', '33', '483.28', 555, 71.72000000000003, 'Jan', '2019', 'January 3, 2019 7:35 pm'),
(11, '5', 'Ives Tassell', '1249 Ludington Place', 'Pending', 'Chart Industries, Inc.', 'FSEC', '23.400000000000002', '23.41', '4.68', '2.68', '68.66', '23.400000000000002', '10', '23', '23', '333', '535.23', 699, 163.76999999999998, 'Jan', '2019', 'January 7, 2019 6:41 pm'),
(12, '23', 'Juro Kazuhiko', 'Niggeria', 'Complete', 'Nigger Corp', 'FSEC', '56', '4', '7', '3', '2.96', '45.5', '34', '656', '700', '121', '1629.46', 2000, 0, 'Jan', '2019', 'January 10, 2019 6:08 pm');

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
(61, 'Vista Alegre');

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
(1, 'IR-2018-12-1', '123', '23', '12312', '13', '123123', '123123', '13123', '12312331321', '1232132132', '3123', '3213123', '12312312', 'December 14, 2018 5:45 pm');

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
(13, 'Inspector', 'F04', 'Alvin', 'Go', 'Yanson', 'alvin2', 'alvin3', 'alvin3', '6', 'January 13, 2019 7:41 pm'),
(14, 'Inspector', 'F04', 'Alvin', 'Go', 'Yanson', 'alvin2', 'alvin3', 'alvin3', '6', 'January 13, 2019 7:43 pm'),
(15, 'Inspector', 'F04', 'Alvin', 'Go', 'Yanson', 'alvin2', 'alvin3', 'alvin3', '6', 'January 13, 2019 7:43 pm');

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
  `status_of_checklist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_checklist`
--

INSERT INTO `evaluation_checklist` (`checklist_no`, `application_no`, `plan_evaluator`, `owner_name`, `business_name`, `project_title`, `location`, `occupancy_classification`, `date_received`, `means_of_egrees`, `walls`, `compartmentation`, `warning_systems`, `fire_protection`, `miscellaneous`, `month`, `year`, `status_of_checklist`) VALUES
(1, '2018-12-2', 'Sir Cartagena', 'Alexandre Calleja', 'Bay Bancorp, Inc.', 'Nanotech', 'Mansilingan', '2', '2018-12-25', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_2,Warning_Req_4,Warning_Req_5,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Dec', '2018', ''),
(2, '2018-12-3', 'Sir Cartagena', 'Norris Maestro', 'Acacia Research Corporation', 'Nanotech', 'Mansilingan', 'Residential', '2018-12-14', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_4,', 'Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,', 'Fire_Protection_Req_2,', 'Miscellaneous_Req_2,', 'Dec', '2018', ''),
(3, '2018-12-4', 'Sir Cartagena', 'Marylin Klampk', 'Allstate Corporation (The)', 'Nexmo ', 'Mansilingan', 'Business', '2019-01-05', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,Wa', 'Fire_Protection_Req_1,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,Fire_Protect', 'Miscellaneous_Req_1,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,', 'Jan', '2019', ''),
(4, '2018-12-5', 'Cartajena', 'Ives Tassell', 'Chart Industries, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-15', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_6,Miscellaneous_Req_7,', 'Jan', '2019', ''),
(5, '', 'Cartajena', 'Ives Tassell', 'Chart Industries, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-15', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_6,Miscellaneous_Req_7,', 'Jan', '2019', '');

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
  `checklist_operating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`ir_no`, `io_no`, `application_no`, `owner_name`, `owner_address`, `business_name`, `establishment_address`, `bldg_height`, `lot_size`, `number_of_floors`, `date_applied`, `month`, `year`, `inspection_status`, `recommendation`, `checklist_classification`, `checklist_exit`, `checklist_lightings`, `checklist_protection`, `checklist_equipments`, `checklist_hazardous`, `checklist_operating`) VALUES
(1, 'IO-2018-12-1', '2018-12-12', ' Constantia Armall', 'Blck 16, North East Village', 'Northfield Bancorp, Inc.', '80 Hudson Hill', '78', '60000', '6', 'December 31, 2018 3:53 pm', 'Dec', '2018', 'Inspection Report', 'Recommend', '', '', '', '', '', '', ''),
(2, 'IO-2018-12-2', '2018-12-13', ' Irwinn Bushell', 'Blck 16, North East Village', 'Ichor Holdings', '8 Hazelcrest Center', '22', '60000', '6', 'December 31, 2018 3:50 pm', 'Dec', '2018', 'Inspection Report', '', '', '', '', '', '', '', ''),
(3, 'IO-2018-12-3', '2018-12-14', ' Bettye Tapping', 'Blck 16, North East Village', 'Zoetis Inc.', '585 Cardinal Point', '66', '60000', '5', 'December 31, 2018 3:57 pm', 'Dec', '2018', 'Inspection Report', 'Work', '', '', '', '', '', '', ''),
(4, 'IO-2018-12-4', '2018-12-15', ' Bettye Tapping', 'San Luis', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', '10', '60000', '6', 'December 31, 2018 11:11 pm', 'Dec', '2018', 'Inspection Report', 'Refrained', '', '', '', '', '', '', ''),
(5, 'IO-2019-01-5', '2018-12-16', ' Melodie Brosenius', 'San Enrique', 'NewStar Financial, Inc.', '83589 Muir Street', '312313', '60000', '5', '19-01-03', 'January 3, 2019 11:36 amJan', '2019', 'Inspection Report', 'Many', '', '', '', '', '', '', ''),
(6, 'IO-2019-01-6', '2018-12-21', ' Constantia Armall', 'Blck 16, North East Village', 'Zoetis Inc.', '3860 Oriole Plaza', '89', '60000', '4', 'Jan-11-2019', 'Jan', '2019', 'Inspection Report', 'List of Scurvy', 'Kwashiorkor', 'Marasmus', 'Tetany', 'Goiter', 'Keshan disease', 'Beriberi', 'Pellagra');

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
(1, 'IO-2018-12-1', 'Cardo', '2018-12-04', '13:50', 'December 26, 2018 - 11:03 pm', 'Dec', '2018', 'Complete');

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
  `deficiency` varchar(100) NOT NULL,
  `date_issued` varchar(100) NOT NULL,
  `IR_date_applied` varchar(100) NOT NULL,
  `application_no` varchar(100) NOT NULL,
  `inspection_order` varchar(100) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `grace_period_from` varchar(100) NOT NULL,
  `grace_period_to` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_notice`
--

INSERT INTO `issue_notice` (`issue_notice_no`, `type_of_notice`, `amount`, `owner_name`, `inspector_name`, `business_name`, `deficiency`, `date_issued`, `IR_date_applied`, `application_no`, `inspection_order`, `business_address`, `grace_period_from`, `grace_period_to`, `month`, `year`) VALUES
(2, 'Comply', '5000', ' Melodie Brosenius', 'Inspector Poe', 'NewStar Financial, Inc.', 'many', '2019-01-02', 'IR-2019-01-5', '16', 'IO-2019-01-5', 'san sebastian street', '2019-02-08', '2019-01-29', 'Jan', '2019');

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
-- Table structure for table `misc`
--

CREATE TABLE `misc` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc`
--

INSERT INTO `misc` (`checklist_id`, `description`) VALUES
('Miscellaneous_Req_1', 'Provide outside window opening on bedrooms with a clear opening of not less than fifty six (56) cm in least dimension and forty five- hundredths (0.45) m2 in area. The bottom of the window shall be not more than one hundred twenty two (122) cm above the floor.'),
('Miscellaneous_Req_2', 'All  liquefied  petroleum  gas  equipment  including  such  equipment installed at utility gas plants shall be installed in accordance with the provisions of NFPA 59.'),
('Miscellaneous_Req_3', 'No  grills  or  any  obstruction  shall  be  installed  on  window  openings and/or fire exits.'),
('Miscellaneous_Req_4', 'Provide emergency lighting facilities with automatic transfer switch to AC/DC power source.'),
('Miscellaneous_Req_5', 'Air conditioning ducts must be provided with approved fire dampers.'),
('Miscellaneous_Req_6', ' Roof covering must be of non-combustible materials. Combustible roof covering must have fire retardant treatment.'),
('Miscellaneous_Req_7', 'Provide fire escape ladder/s.'),
('Miscellaneous_Req_8', 'Provide fire escape stair/s.'),
('Miscellaneous_Req_9', 'All unit partition wall shall be extended up to upper floor slab and/or one (1) meter above the roofline.'),
('Miscellaneous_Req_10', 'Provide effective means of smoke ventilation such as access panels, movable windows.'),
('Miscellaneous_Req_11', 'Project  activity  shall  not  affect  the  effectivity  of  the  existing  fire protection facilities.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `fname`, `lname`, `login`) VALUES
(7, 'assessor1', 'assessor1', '', '', ''),
(9, 'user2', 'cooluser2', '', '', ''),
(10, 'user3', 'cooluser3', '', '', ''),
(11, 'ken05cay', 'ken05', '', '', 'January 13, 2019, 5:03 pm'),
(12, 'scecere0', 'ao68bc291xz', '', '', ''),
(13, 'alvin2', 'alvin3', 'Alvin', 'Yanson', 'January 13, 2019, 7:44 pm');

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
-- Indexes for table `issue_notice`
--
ALTER TABLE `issue_notice`
  ADD PRIMARY KEY (`issue_notice_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `bldg_construct`
--
ALTER TABLE `bldg_construct`
  MODIFY `bc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `checklist_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issue_notice`
--
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
