-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 09:44 AM
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
(6, 'FSEC', 'Gay Barnet', 'Fortinet, Inc.', '777 Drewry Center', 'Small-Business', 'Barangay 28', 'NA', '09523424231', '', 'December 13, 2018 2:42 am', 'gayass', '8080', 'Gay Barnet', '4', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(7, 'FSEC', 'Alain Palluschek', 'Elbit Systems Ltd.', '62664 Barnett Lane', 'Storage', 'Barangay 4', 'NA', '09523424231', '', 'December 13, 2018 2:46 am', 'dsdsd', '8080', 'Alain Palluschek', '3', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(8, 'FSEC', 'Angie Kondratovich', 'Navigator Holdings Ltd.', '8 Bobwhite Avenue', 'Small-Business', 'Barangay 3', 'NA', '09523424231', '', 'December 13, 2018 2:48 am', 'akondratovich0', '8080', 'Angie Kondratovich', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(9, 'FSEC', 'Jenine Crangle', 'Wells Fargo & Company', '4138 Barnett Avenue', 'Small-Business', 'Barangay 1', 'NA', '09523424231', '', 'December 13, 2018 2:50 am', 'jcrangle1', '8080', 'Jenine Crangle', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(10, 'FSEC', 'Maegan Badham', 'CRA International,Inc.', '17 Graedel Road', 'Mercantile', 'Barangay 1', 'NA', '09523424231', '', 'December 13, 2018 2:53 am', 'mbadham2', '8080', 'Maegan Badham', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(11, 'FSIC', 'Melodie Brosenius', 'Templeton Global Income Fund, Inc.', '91999 Oriole Crossing', 'Business-Office', 'Barangay 2', 'Building', '09523424231', '', 'December 13, 2018 7:54 pm', 'mbrosenius3', '8080', ' Melodie Brosenius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(12, 'FSIC', 'Constantia Armall', 'Northfield Bancorp, Inc.', '80 Hudson Hill', 'Small-Business', 'Barangay 35', 'Building', '09523424231', '', 'December 13, 2018 7:55 pm', 'carmall4', '8080', ' Constantia Armall', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(13, 'FSIC', 'Irwinn Bushell', 'Ichor Holdings', '8 Hazelcrest Center', 'Educational', 'Banago', 'Occupancy', '09523424231', '', 'December 13, 2018 7:56 pm', 'ibushell5', '8080', ' Irwinn Bushell', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(14, 'FSIC', 'Bettye Tapping', 'Zoetis Inc.', '585 Cardinal Point', 'Business-Office', 'Barangay 18', 'Occupancy', '09523424231', '', 'December 13, 2018 7:58 pm', 'btappinga', '8080', ' Bettye Tapping', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(15, 'FSIC', 'Marrilee Cattini', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', 'Small-Business', 'Barangay 6', 'Building', '09523424231', '', 'December 13, 2018 7:59 pm', 'mcattinib', '8080', ' Bettye Tapping', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(16, 'FSIC', 'Ajay Espinos', 'NewStar Financial, Inc.', '83589 Muir Street', 'Storage', 'Barangay 3', 'Building', '09523424231', '', 'December 13, 2018 8:00 pm', 'aespinosc', '8080', ' Melodie Brosenius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(17, 'FSIC', 'Jamaal Petkov', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', '82272 Everett Point', 'Business-Office', 'Barangay 2', 'Building', '09523424231', '', 'December 13, 2018 10:25 pm', 'jpetkovrr', '8080', 'Jamaal Petkov ', '4', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(18, 'FSEC', 'Gabey Ruoss', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', 'Assembly', 'Barangay 24', 'NA', '09523424231', '', 'December 13, 2018 10:27 pm', 'gruossrq', '8080', 'Gabey Ruoss', '4', '60000', 'Pending', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(19, 'FSIC', 'Maria Umbert', 'CBAK Energy Technology, Inc.', '8 Hazelcrest Center', 'Small-Business', 'Barangay 4', 'Building', '09523424231', '', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Melodie Brosenius', '6', '180000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(20, 'FSIC', 'Constantia Armall', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', 'Assembly', 'Barangay 18', 'Building', '09523424231', '', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Irwinn Bushell', '4', '60000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(21, 'FSIC', 'Irwinn Bushell', 'Zoetis Inc.', '3860 Oriole Plaza', 'Business-Office', 'Barangay 29', 'Building', '09523424231', '', 'December 13, 2018 10:30 pm', 'clarkcan2018', '8080', ' Constantia Armall', '4', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(22, 'FSEC', 'Maeryger D. Gomez', 'Medical Clinic', 'Menlo 4', 'Business-Office', 'Barangay 18', 'NA', '09523424231', 'croname', 'January 5, 2019 3:39 pm', 'clarkcan2018', '8080', 'Maeryger D. Gomez', '3', '75', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(23, 'FSEC', 'Juro Kazuhiko', 'Nigger Corp', 'Niggeria', 'Storage', 'Barangay 37 ', 'NA', '09085553776', 'Kenneth', 'January 10, 2019 6:07 pm', 'JRUKAZ', '8080', 'Juro', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(24, 'FSEC', 'Ignacio Branton', 'Zoetis Inc.', 'Niggeria', 'Mercantile', '', 'NA', '09085553776', 'Sergent', 'January 10, 2019 9:58 pm', 'iggy97', '8080', 'Ignacio', '5', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(25, 'FSEC', 'Cleveland Bartzen', 'Nba', '80 Hudson Hill', 'Assembly', 'Barangay 14', 'NA', '09085553776', 'Sergent', 'January 10, 2019 10:02 pm', 'clarkcan2018', '8080', 'Bart Simpson', '4', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(26, 'FSEC', 'Kellia Penniel', 'Taiga Inc', 'Tokyo', 'Mercantile', 'Barangay 4', 'NA', '09085553776', 'Kenneth', 'January 10, 2019 11:52 pm', 'kelpen', '8080', 'kelly', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(27, 'FSEC', 'Casey Rappa', 'Dragon Corp', '27 Alunan Avenue', 'Business-Office', 'Barangay 28', 'NA', '09085553776', 'Sergent', 'January 14, 2019 10:46 pm', 'casrap', '123456', 'Casey Rappa', '3', '60000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(28, 'FSEC', 'Marc Iannuzzi', 'miannuzzi1@ox.ac.uk', '548 Dawn Court', 'Educational', 'Barangay 19', 'NA', '09085553776', 'Kenneth', 'January 14, 2019 11:50 pm', 'marclan', '123456', 'Mark', '3', '10000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(29, 'FSEC', 'Raye Beausang', 'Nauzene ', '83589 Muir Street', 'Business-Office', 'Barangay 8', 'NA', '09085553776', 'Kenneth', 'January 14, 2019 11:51 pm', 'rbeausang2', '123456', ' Melodie Brosenius', '4', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(30, 'FSEC', 'Chauncey Prendiville', 'Chance store', '51 Buell Park', 'Mercantile', 'Barangay 2', 'NA', '09085553776', 'Sergent', 'January 14, 2019 11:53 pm', 'chanpren', '123456', 'Chance', '2', '110000', '0', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(31, 'FSEC', 'Dunn Cann', 'Lazada', '3860 Oriole Plaza', 'Mercantile', 'Barangay 35', 'NA', '09085553776', 'Kenneth', 'January 15, 2019 12:30 am', 'dunkcan', '123456', 'DanCan', '6', '150000', '0', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(32, 'FSEC', 'Justin Christian Puatu', 'iFixit', 'Alunan Avenue 15-C', 'Small-Business', 'Barangay 35', 'NA', '09085553776', 'Marian', 'January 15, 2019 12:34 am', 'jcpuatu', 'casiof91w', 'Justin Christian Puatu', '3', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(33, 'FSEC', 'Clark Jr. Canlog', 'PhoneBiz', 'Magsungay', 'Small-Business', 'Handumanan', 'NA', '09085553776', 'Leslie', 'January 15, 2019 12:38 am', 'clarkcanlog97', '123456', 'Clark Jr. Canlog', '1', '140000', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(34, 'FSEC', 'Kenneth Cayetano', 'Grab Inc', '80 Hudson Hill', 'Mercantile', 'Barangay 15', 'NA', '09085553776', 'Maryger', 'January 15, 2019 12:43 am', 'kencay', '123456', 'Kenneth Cayetano', '4', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(35, 'FSEC', 'John Rey Gamotin', 'PhoneBiz', 'Talisay', 'Small-Business', 'Barangay 40', 'NA', '09085553776', 'Laika', 'January 15, 2019 12:48 am', 'jrgame', '123456', 'John Rey', '3', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(36, 'FSEC', 'Kurt Mayang Barrioga', 'KurtoSan', '3860 Oriole Plaza', 'Small-Business', 'Barangay 15', 'NA', '09085553776', 'Mary Jane', 'January 15, 2019 12:59 am', 'kurt', '123456', ' Irwinn Bushell', '6', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(37, 'FSEC', 'Miles Morales', 'SevenWebHeads', 'New York', 'Mercantile', 'Barangay 3', 'NA', '09085553776', 'gwen', 'January 15, 2019 1:02 am', 'spider', '123456', 'Miles', '1', '60000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(38, 'FSIC', 'Claudia Jelk', 'Zoetis Inc.', '12 Charing Cross Alley', 'Business-Office', 'Barangay 18', 'Occupancy', 'cpnumb', 'croname', 'January 15, 2019 5:31 pm', 'claudiajek', '123456', ' Claudia Jelk', '3', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(39, 'FSIC', 'Octavius Kenealy', 'CBAK Energy Technology, Inc.', '138 Mariners Cove Hill', 'Educational', 'Barangay 4', 'Building', 'cpnumb', 'croname', 'January 15, 2019 5:43 pm', 'octakenealy', '123456', ' Octavius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(40, 'FSIC', 'Sanni Legodinec', 'Northfield Bancorp, Inc.', '80 Hudson Hill', 'Business-Office', 'Banago', 'Building', 'cpnumb', 'croname', 'January 15, 2019 5:47 pm', 'sannidell', '123456', ' Sanni', '6', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(41, 'FSIC', 'Fifi Milberg', 'Nigger Corp', '83589 Muir Street', 'Storage', 'Barangay 3', 'Occupancy', 'cpnumb', 'croname', 'January 15, 2019 5:49 pm', 'fififufu', '123456', 'Fifi', '3', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(42, 'FSIC', 'Amy Roder', 'Zoetis Inc.', '3860 Oriole Plaza', 'Small-Business', 'Barangay 3', 'Building', 'cpnumb', 'croname', 'January 15, 2019 5:52 pm', 'amydar', '123456', ' Amy Roder', '1', '110000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(43, 'FSIC', 'Stinky Dikvenet', 'REcr', '80 Hudson Hill', 'Storage', 'Barangay 3', 'Building', 'cpnumb', 'croname', 'January 15, 2019 5:55 pm', 'stink', '123456', ' Styinky', '5', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(44, 'FSIC', 'Noelle Emerie', 'Nigger Corp', '3860 Oriole Plaza', 'Small-Business', 'Barangay 4', 'Building', 'cpnumb', 'croname', 'January 15, 2019 5:56 pm', 'noel', '123456', 'noelle', '6', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(45, 'FSIC', 'Dawn Arsenal', 'Pinkblow', '80 Hudson Hill', 'Mercantile', 'Barangay 3', 'Occupancy', 'cpnumb', 'croname', 'January 15, 2019 5:57 pm', 'dawn', '123456', ' Dawn', '4', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(46, 'FSIC', 'Leodora Marchant', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', 'Small-Business', 'Barangay 2', 'Occupancy', 'cpnumb', 'croname', 'January 15, 2019 5:59 pm', 'leo', '123456', 'Leod', '6', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(47, 'FSIC', 'Rochelle Tano', 'Adadda', '3860 Oriole Plaza', 'Mercantile', 'Barangay 2', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:00 pm', 'joy', '123456', 'Rochelle', '3', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(48, 'FSIC', 'Renz Owen', 'Nba', '3860 Oriole Plaza', 'Assembly', 'Barangay 27', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:01 pm', 'renzown', '123456', ' Renz', '1', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(49, 'FSIC', 'Jason Patrick Jocsin', 'computer', '3860 Oriole Plaza', 'Storage', 'Barangay 2', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:02 pm', 'jasoc', '123456', ' Json', '3', '100,000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(50, 'FSIC', 'Jess Patrick', 'Library', '83589 Muir Street', 'Educational', 'Barangay 1', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:04 pm', 'jess patrcik', '123456', 'Jess', '1', '10000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(51, 'FSIC', 'Johnedel Mapa', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', 'Educational', 'Banago', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:06 pm', 'johnnysins', '123456', ' Johny', '1', '12122', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(52, 'FSIC', 'Cathy Granada', 'CBAK Energy Technology, Inc.', 'Niggeria', 'Business-Office', 'Banago', 'Occupancy', 'cpnumb', 'croname', 'January 15, 2019 6:07 pm', 'catcat', '123456', ' Cathy', '4', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(53, 'FSIC', 'Kenny Hurrisa', 'Seventh Heaven', '80 Hudson Hill', 'Small-Business', 'Barangay 38', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:08 pm', 'kennymistah', '123456', ' Kenny', '1', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(54, 'FSIC', 'Lj Cezar Adarle', 'DAnceteck', '80 Hudson Hill', 'Business-Office', 'Granada', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:11 pm', 'ljcezar', '123456', 'LJEE', '1', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(55, 'FSIC', 'Elmer T. Haro', 'Uno-r', 'Bacolod', 'Educational', 'Barangay 21', 'Building', 'cpnumb', 'croname', 'January 15, 2019 6:15 pm', 'dean', '123456', ' Elmer', '5', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(56, 'FSIC', 'Ricky Diancin', 'WebProg', '80 Hudson Hill', 'Mercantile', 'Banago', 'Occupancy', 'cpnumb', 'croname', 'January 15, 2019 6:16 pm', 'Ricky', '123456', ' Ricky Diancin', '1', '180000', '0', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Jan', '2019'),
(57, 'FSIC', 'Ada Wong', 'Umbrella Corp', 'Racoon city', 'Small-Business', 'Barangay 4', 'Building', 'cpnumb', 'croname', 'January 18, 2019 3:23 am', 'adahotz4life', '123456', ' Ada', '6', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Jan', '2019'),
(58, 'FSEC', 'Claire Redfield', 'STARS', 'New York', 'Business-Office', 'Barangay 4', 'NA', '09085553776', 'Agna Nottingam', 'January 18, 2019 4:07 am', 'claire', '123456', 'Clair', '2', '60000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(59, 'FSIC', 'Linda Blair', 'Tang', '80 Hudson Hill', 'Storage', 'Barangay 3', 'Building', 'cpnumb', 'croname', 'January 18, 2019 4:49 am', 'lindi', '123456', ' linda', '6', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Jan', '2019'),
(60, 'FSEC', 'Jack Stauber', 'Zoetis Inc.', '3860 Oriole Plaza', 'Storage', 'Barangay 11', 'NA', '09085553776', 'Shirlene Leaton', 'January 18, 2019 4:52 am', 'jack', '123456', 'jackie', '3', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(61, 'FSEC', 'Guillemette	Organ', 'Templeton Global Income Fund, Inc.', 'Niggeria', 'Small-Business', 'Estefanï¿½a', 'NA', '09085553776', 'Shirlene Leaton', 'January 18, 2019 3:32 pm', 'guillemete', '123456', 'Guillemette Organ', '6', '60000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(62, 'FSEC', 'Bradney	Skotcher', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', 'Storage', 'Alijis', 'NA', '09085553776', 'Hilliary Sparkwell', 'January 18, 2019 3:33 pm', 'bskotcher2d', '123456', 'Bradney', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(63, 'FSEC', 'Homere	Igonet', 'Northfield Bancorp, Inc.', '8 Hazelcrest Center', 'Educational', 'Barangay 2', 'NA', '09085553776', 'Shirlene Leaton', 'January 18, 2019 3:34 pm', 'higonet2e@webeden.co.uk', '123456', 'Homere', '5', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(64, 'FSEC', 'Cathrin	Glastonbury', 'ASus', 'Niggeria', 'Educational', 'Barangay 14', 'NA', '09085553776', 'Shirlene Leaton', 'January 18, 2019 3:39 pm', 'cathrin', '123456', 'Cathrin', '3', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(65, 'FSEC', 'Sydney Jacobowicz', 'Pepsi', '3860 Oriole Plaza', 'Business-Office', 'Barangay 15', 'NA', '09085553776', 'Michel Snalham', 'January 18, 2019 3:40 pm', 'sydney', '123456', 'Sydney', '3', '110000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
