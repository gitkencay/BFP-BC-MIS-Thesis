-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 08:19 PM
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
(1, 'FSEC', 'Shamus Munks', 'Renewable Energy Group, Inc.', '524 Sunbrook Pass', 'Assembly', 'Barangay 5', 'NA', '09474298815', '', 'December 13, 2018 2:31 am', 'clarkcan2018', '8080', 'Shamus Munks', '4', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(2, 'FSEC', 'Alexandre Calleja', 'Bay Bancorp, Inc.', '10514 Katie Alley', 'Small-Business', 'Barangay 7', 'NA', '09474298815', '', 'December 13, 2018 2:33 am', 'alexandre_call', '1234', 'Alexandre Calleja', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(3, 'FSEC', 'Norris Maestro', 'Acacia Research Corporation', '7 Fallview Point', 'Educational', 'Barangay 1', 'NA', '09474298815', '', 'December 13, 2018 2:36 am', 'norris_mae', '8080', 'Norris Maestro', '3', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(4, 'FSEC', 'Marylin Klampk', 'Allstate Corporation (The)', '546 Luster Circle', 'Mercantile', 'Banago', 'NA', '09474298815', '', 'December 13, 2018 2:38 am', 'mary_klampk', '8080', 'Marylin Klampk', '3', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(5, 'FSEC', 'Ives Tassell', 'Chart Industries, Inc.', '1249 Ludington Place', 'Business-Office', 'Barangay 3', 'NA', '09474298815', '', 'December 13, 2018 2:40 am', 'ive_ras', '8080', 'Ives Tassell', '4', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(6, 'FSEC', 'Gay Barnet', 'Fortinet, Inc.', '777 Drewry Center', 'Small-Business', 'Barangay 28', 'NA', '09474298815', '', 'December 13, 2018 2:42 am', 'gayass', '8080', 'Gay Barnet', '4', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(7, 'FSEC', 'Alain Palluschek', 'Elbit Systems Ltd.', '62664 Barnett Lane', 'Storage', 'Barangay 4', 'NA', '09474298815', '', 'December 13, 2018 2:46 am', 'dsdsd', '8080', 'Alain Palluschek', '3', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(8, 'FSEC', 'Angie Kondratovich', 'Navigator Holdings Ltd.', '8 Bobwhite Avenue', 'Small-Business', 'Barangay 3', 'NA', '09474298815', '', 'December 13, 2018 2:48 am', 'akondratovich0', '8080', 'Angie Kondratovich', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Dec', '2018'),
(9, 'FSEC', 'Jenine Crangle', 'Wells Fargo & Company', '4138 Barnett Avenue', 'Small-Business', 'Barangay 1', 'NA', '09474298815', '', 'December 13, 2018 2:50 am', 'jcrangle1', '8080', 'Jenine Crangle', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Dec', '2018'),
(10, 'FSEC', 'Maegan Badham', 'CRA International,Inc.', '17 Graedel Road', 'Mercantile', 'Barangay 1', 'NA', '09474298815', '', 'December 13, 2018 2:53 am', 'mbadham2', '8080', 'Maegan Badham', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Dec', '2018'),
(11, 'FSIC', 'Melodie Brosenius', 'Templeton Global Income Fund, Inc.', '91999 Oriole Crossing', 'Business-Office', 'Barangay 2', 'Building', '09474298815', '', 'December 13, 2018 7:54 pm', 'mbrosenius3', '8080', ' Melodie Brosenius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(12, 'FSIC', 'Constantia Armall', 'Northfield Bancorp, Inc.', '80 Hudson Hill', 'Small-Business', 'Barangay 35', 'Building', '09474298815', '', 'December 13, 2018 7:55 pm', 'carmall4', '8080', ' Constantia Armall', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(13, 'FSIC', 'Irwinn Bushell', 'Ichor Holdings', '8 Hazelcrest Center', 'Educational', 'Banago', 'Occupancy', '09474298815', '', 'December 13, 2018 7:56 pm', 'ibushell5', '8080', ' Irwinn Bushell', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(14, 'FSIC', 'Bettye Tapping', 'Zoetis Inc.', '585 Cardinal Point', 'Business-Office', 'Barangay 18', 'Occupancy', '09474298815', '', 'December 13, 2018 7:58 pm', 'btappinga', '8080', ' Bettye Tapping', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(15, 'FSIC', 'Marrilee Cattini', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', 'Small-Business', 'Barangay 6', 'Building', '09474298815', '', 'December 13, 2018 7:59 pm', 'mcattinib', '8080', ' Bettye Tapping', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(16, 'FSIC', 'Ajay Espinos', 'NewStar Financial, Inc.', '83589 Muir Street', 'Storage', 'Barangay 3', 'Building', '09474298815', '', 'December 13, 2018 8:00 pm', 'aespinosc', '8080', ' Melodie Brosenius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(17, 'FSIC', 'Jamaal Petkov', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', '82272 Everett Point', 'Business-Office', 'Barangay 2', 'Building', '09474298815', '', 'December 13, 2018 10:25 pm', 'jpetkovrr', '8080', 'Jamaal Petkov ', '4', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(18, 'FSEC', 'Gabey Ruoss', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', 'Assembly', 'Barangay 24', 'NA', '09474298815', '', 'December 13, 2018 10:27 pm', 'gruossrq', '8080', 'Gabey Ruoss', '4', '60000', 'Pending', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(19, 'FSIC', 'Maria Umbert', 'CBAK Energy Technology, Inc.', '8 Hazelcrest Center', 'Small-Business', 'Barangay 4', 'Building', '09474298815', '', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Melodie Brosenius', '6', '180000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(20, 'FSIC', 'Constantia Armall', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', 'Assembly', 'Barangay 18', 'Building', '09474298815', '', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Irwinn Bushell', '4', '60000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(21, 'FSIC', 'Irwinn Bushell', 'Zoetis Inc.', '3860 Oriole Plaza', 'Business-Office', 'Barangay 29', 'Building', '09474298815', '', 'December 13, 2018 10:30 pm', 'clarkcan2018', '8080', ' Constantia Armall', '4', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(22, 'FSEC', 'Maeryger D. Gomez', 'Medical Clinic', 'Menlo 4', 'Business-Office', 'Barangay 18', 'NA', '09474298815', 'croname', 'January 5, 2019 3:39 pm', 'clarkcan2018', '8080', 'Maeryger D. Gomez', '3', '75', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(23, 'FSEC', 'Juro Kazuhiko', 'Nigger Corp', 'Niggeria', 'Storage', 'Barangay 37 ', 'NA', '09474298815', 'Kenneth', 'January 10, 2019 6:07 pm', 'JRUKAZ', '8080', 'Juro', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(24, 'FSEC', 'Ignacio Branton', 'Zoetis Inc.', 'Niggeria', 'Mercantile', '', 'NA', '09474298815', 'Sergent', 'January 10, 2019 9:58 pm', 'iggy97', '8080', 'Ignacio', '5', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(25, 'FSEC', 'Cleveland Bartzen', 'Nba', '80 Hudson Hill', 'Assembly', 'Barangay 14', 'NA', '09474298815', 'Sergent', 'January 10, 2019 10:02 pm', 'clarkcan2018', '8080', 'Bart Simpson', '4', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(26, 'FSEC', 'Kellia Penniel', 'Taiga Inc', 'Tokyo', 'Mercantile', 'Barangay 4', 'NA', '09474298815', 'Kenneth', 'January 10, 2019 11:52 pm', 'kelpen', '8080', 'kelly', '6', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(27, 'FSEC', 'Casey Rappa', 'Dragon Corp', '27 Alunan Avenue', 'Business-Office', 'Barangay 28', 'NA', '09474298815', 'Sergent', 'January 14, 2019 10:46 pm', 'casrap', '123456', 'Casey Rappa', '3', '60000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(28, 'FSEC', 'Marc Iannuzzi', 'miannuzzi1@ox.ac.uk', '548 Dawn Court', 'Educational', 'Barangay 19', 'NA', '09474298815', 'Kenneth', 'January 14, 2019 11:50 pm', 'marclan', '123456', 'Mark', '3', '10000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Jan', '2019'),
(29, 'FSEC', 'Raye Beausang', 'Nauzene ', '83589 Muir Street', 'Business-Office', 'Barangay 8', 'NA', '09474298815', 'Kenneth', 'January 14, 2019 11:51 pm', 'rbeausang2', '123456', ' Melodie Brosenius', '4', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(30, 'FSEC', 'Chauncey Prendiville', 'Chance store', '51 Buell Park', 'Mercantile', 'Barangay 2', 'NA', '09474298815', 'Sergent', 'January 14, 2019 11:53 pm', 'chanpren', '123456', 'Chance', '2', '110000', '0', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(31, 'FSEC', 'Dunn Cann', 'Lazada', '3860 Oriole Plaza', 'Mercantile', 'Barangay 35', 'NA', '09474298815', 'Kenneth', 'January 15, 2019 12:30 am', 'dunkcan', '123456', 'DanCan', '6', '150000', '0', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(32, 'FSEC', 'Justin Christian Puatu', 'iFixit', 'Alunan Avenue 15-C', 'Small-Business', 'Barangay 35', 'NA', '09474298815', 'Marian', 'January 15, 2019 12:34 am', 'jcpuatu', 'casiof91w', 'Justin Christian Puatu', '3', '140000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(33, 'FSEC', 'Clark Jr. Canlog', 'PhoneBiz', 'Magsungay', 'Small-Business', 'Handumanan', 'NA', '09474298815', 'Leslie', 'January 15, 2019 12:38 am', 'clarkcanlog97', '123456', 'Clark Jr. Canlog', '1', '140000', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(34, 'FSEC', 'Kenneth Cayetano', 'Grab Inc', '80 Hudson Hill', 'Mercantile', 'Barangay 15', 'NA', '09474298815', 'Maryger', 'January 15, 2019 12:43 am', 'kencay', '123456', 'Kenneth Cayetano', '4', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(35, 'FSEC', 'John Rey Gamotin', 'PhoneBiz', 'Talisay', 'Small-Business', 'Barangay 40', 'NA', '09474298815', 'Laika', 'January 15, 2019 12:48 am', 'jrgame', '123456', 'John Rey', '3', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(36, 'FSEC', 'Kurt Mayang Barrioga', 'KurtoSan', '3860 Oriole Plaza', 'Small-Business', 'Barangay 15', 'NA', '09474298815', 'Mary Jane', 'January 15, 2019 12:59 am', 'kurt', '123456', ' Irwinn Bushell', '6', '180000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(37, 'FSEC', 'Miles Morales', 'SevenWebHeads', 'New York', 'Mercantile', 'Barangay 3', 'NA', '09474298815', 'gwen', 'January 15, 2019 1:02 am', 'spider', '123456', 'Miles', '1', '60000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Jan', '2019'),
(38, 'FSIC', 'Claudia Jelk', 'Zoetis Inc.', '12 Charing Cross Alley', 'Business-Office', 'Barangay 18', 'Occupancy', '09474298815', 'croname', 'January 15, 2019 5:31 pm', 'claudiajek', '123456', ' Claudia Jelk', '3', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(39, 'FSIC', 'Octavius Kenealy', 'CBAK Energy Technology, Inc.', '138 Mariners Cove Hill', 'Educational', 'Barangay 4', 'Building', '09474298815', 'croname', 'January 15, 2019 5:43 pm', 'octakenealy', '123456', ' Octavius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(40, 'FSIC', 'Sanni Legodinec', 'Northfield Bancorp, Inc.', '80 Hudson Hill', 'Business-Office', 'Banago', 'Building', '09474298815', 'croname', 'January 15, 2019 5:47 pm', 'sannidell', '123456', ' Sanni', '6', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(41, 'FSIC', 'Fifi Milberg', 'Nigger Corp', '83589 Muir Street', 'Storage', 'Barangay 3', 'Occupancy', '09474298815', 'croname', 'January 15, 2019 5:49 pm', 'fififufu', '123456', 'Fifi', '3', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(42, 'FSIC', 'Amy Roder', 'Zoetis Inc.', '3860 Oriole Plaza', 'Small-Business', 'Barangay 3', 'Building', '09474298815', 'croname', 'January 15, 2019 5:52 pm', 'amydar', '123456', ' Amy Roder', '1', '110000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(43, 'FSIC', 'Stinky Dikvenet', 'REcr', '80 Hudson Hill', 'Storage', 'Barangay 3', 'Building', '09474298815', 'croname', 'January 15, 2019 5:55 pm', 'stink', '123456', ' Styinky', '5', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(44, 'FSIC', 'Noelle Emerie', 'Nigger Corp', '3860 Oriole Plaza', 'Small-Business', 'Barangay 4', 'Building', '09474298815', 'croname', 'January 15, 2019 5:56 pm', 'noel', '123456', 'noelle', '6', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(45, 'FSIC', 'Dawn Arsenal', 'Pinkblow', '80 Hudson Hill', 'Mercantile', 'Barangay 3', 'Occupancy', '09474298815', 'croname', 'January 15, 2019 5:57 pm', 'dawn', '123456', ' Dawn', '4', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(46, 'FSIC', 'Leodora Marchant', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', 'Small-Business', 'Barangay 2', 'Occupancy', '09474298815', 'croname', 'January 15, 2019 5:59 pm', 'leo', '123456', 'Leod', '6', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(47, 'FSIC', 'Rochelle Tano', 'Adadda', '3860 Oriole Plaza', 'Mercantile', 'Barangay 2', 'Building', '09474298815', 'croname', 'January 15, 2019 6:00 pm', 'joy', '123456', 'Rochelle', '3', '140000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(48, 'FSIC', 'Renz Owen', 'Nba', '3860 Oriole Plaza', 'Assembly', 'Barangay 27', 'Building', '09474298815', 'croname', 'January 15, 2019 6:01 pm', 'renzown', '123456', ' Renz', '1', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(49, 'FSIC', 'Jason Patrick Jocsin', 'computer', '3860 Oriole Plaza', 'Storage', 'Barangay 2', 'Building', '09474298815', 'croname', 'January 15, 2019 6:02 pm', 'jasoc', '123456', ' Json', '3', '100,000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(50, 'FSIC', 'Jess Patrick', 'Library', '83589 Muir Street', 'Educational', 'Barangay 1', 'Building', '09474298815', 'croname', 'January 15, 2019 6:04 pm', 'jess patrcik', '123456', 'Jess', '1', '10000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(51, 'FSIC', 'Johnedel Mapa', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', 'Educational', 'Banago', 'Building', '09474298815', 'croname', 'January 15, 2019 6:06 pm', 'johnnysins', '123456', ' Johny', '1', '12122', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(52, 'FSIC', 'Cathy Granada', 'CBAK Energy Technology, Inc.', 'Niggeria', 'Business-Office', 'Banago', 'Occupancy', '09474298815', 'croname', 'January 15, 2019 6:07 pm', 'catcat', '123456', ' Cathy', '4', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Jan', '2019'),
(53, 'FSIC', 'Kenny Hurrisa', 'Seventh Heaven', '80 Hudson Hill', 'Small-Business', 'Barangay 38', 'Building', '09474298815', 'croname', 'January 15, 2019 6:08 pm', 'kennymistah', '123456', ' Kenny', '1', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(54, 'FSIC', 'Lj Cezar Adarle', 'DAnceteck', '80 Hudson Hill', 'Business-Office', 'Granada', 'Building', '09474298815', 'croname', 'January 15, 2019 6:11 pm', 'ljcezar', '123456', 'LJEE', '1', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(55, 'FSIC', 'Elmer T. Haro', 'Uno-r', 'Bacolod', 'Educational', 'Barangay 21', 'Building', '09474298815', 'croname', 'January 15, 2019 6:15 pm', 'dean', '123456', ' Elmer', '5', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Jan', '2019'),
(56, 'FSIC', 'Ricky Diancin', 'WebProg', '80 Hudson Hill', 'Mercantile', 'Banago', 'Occupancy', '09474298815', 'croname', 'January 15, 2019 6:16 pm', 'Ricky', '123456', ' Ricky Diancin', '1', '180000', '0', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Jan', '2019'),
(57, 'FSEC', 'Prince Ledesma', 'Toy Truck Parts', 'Escalante', 'Educational', 'Barangay 2', 'NA', '09474298815', 'Shirlene Leaton', 'January 17, 2019 6:21 pm', 'princegwapo', 'helloworld', 'Prince Ledesma', '50', '20', 'Complete', 'IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Jan', '2019'),
(58, 'FSIC', 'Matt Murdock', 'Puatu Peps', 'San Enrique', '0', 'Barangay 3', 'Building', '09474298815', 'croname', 'January 18, 2019 3:37 am', 'admin101', 'admin101', ' admin101', '223', '123', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Jan', '2019'),
(59, 'FSIC', 'Sir Jose', 'Tricycle Tire and Parts', 'Magsungay', 'Assembly', 'Barangay 4', 'Occupancy', '09474298815', 'croname', 'January 18, 2019 3:54 am', 'alvin2', '8080', ' asd', '1', '1', 'Pending', 'IniReq5,IniReq6,', 'Unassessed', 'Jan', '2019'),
(60, 'FSIC', 'Sir Jose', 'Tricycle Tire and Parts', 'Magsungay', 'Assembly', 'Barangay 4', 'Occupancy', '09474298815', 'croname', 'January 18, 2019 3:55 am', 'alvin2', '8080', ' asd', '1', '1', 'Pending', 'IniReq5,IniReq6,', 'Unassessed', 'Jan', '2019'),
(61, 'FSIC', 'Sir Jose', 'Tricycle Tire and Parts', 'Magsungay', 'Assembly', 'Barangay 4', 'Occupancy', '09474298815', 'Saxon Apedaile', 'January 18, 2019 3:57 am', 'alvin2', '8080', ' asd', '1', '1', 'Pending', 'IniReq5,IniReq6,', 'Unassessed', 'Jan', '2019'),
(62, 'FSEC', '', 'Attorney Firm', '', 'Business-Office', ' ', 'NA', '09474298815', ' ', 'January 18, 2019 1:53 pm', '', 'a', 'Daredevil', '', '', '', '', 'Unassessed', 'Jan', '2019'),
(63, 'FSEC', '', 'Attorney Firm', '', 'Business-Office', ' ', 'NA', '09474298815', ' ', 'January 18, 2019 1:53 pm', '', 'a', 'Daredevil', '', '', '', '', 'Unassessed', 'Jan', '2019'),
(64, 'FSEC', '', '', '', 'Business-Office', ' ', 'NA', '09474298815', ' ', '', '', '', '', '', '', '', '', 'Unassessed', 'Jan', '2019'),
(65, 'FSEC', '', '', '', 'Business-Office', ' ', 'NA', '09474298815', ' ', '', '', '', '', '', '', '', '', 'Unassessed', 'Jan', '2019'),
(66, 'FSEC', '', '', '', 'Business-Office', ' ', 'NA', '09474298815', ' ', '', '', '', '', '', '', '', '', 'Unassessed', 'Jan', '2019'),
(67, 'FSEC', '', '', '', 'Business-Office', ' ', 'NA', '09474298815', ' ', '', '', '', '', '', '', '', '', 'Unassessed', 'Jan', '2019'),
(68, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:55 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(69, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:56 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(70, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:56 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(71, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:56 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(72, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:56 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(73, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(74, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(75, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(76, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(77, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(78, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(79, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(80, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(81, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(82, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(83, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(84, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(85, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(86, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(87, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(88, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(89, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(90, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(91, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(92, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:58 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(93, 'FSEC', 'Matt Murdock', 'Attorney Firm', '', 'Business-Office', 'barangay 10', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 1:59 pm', 'admin101', 'admin101', 'Daredevil', '12', '12', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(94, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:27 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(95, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:28 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(96, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(97, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(98, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(99, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(100, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(101, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(102, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:31 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(103, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(104, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(105, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(106, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(107, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(108, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(109, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Assessed', 'Jan', '2019'),
(110, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(111, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(112, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(113, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(114, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:33 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(115, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:34 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(116, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:34 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(117, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:34 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(118, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:34 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(119, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(120, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(121, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(122, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(123, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(124, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(125, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(126, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(127, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'Hells Kitchen', 'Business-Office', 'Barangay 5', 'NA', '09474298815', 'Shirlene Leaton', 'January 18, 2019 2:36 pm', 'admin101', 'admin101', 'Kenneth Cayetano', '1', '12', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(128, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'San Enrique', 'Assembly', 'Barangay 16 ', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 2:41 pm', 'admin1012', 'admin101', 'Kenneth Cayetano', '9', '2', 'Complete', 'IniReq1,IniReq3,', 'Unassessed', 'Jan', '2019'),
(129, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'San Enrique', 'Assembly', 'Barangay 16 ', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 2:42 pm', 'admin1012', 'admin101', 'Kenneth Cayetano', '9', '2', 'Complete', 'IniReq1,IniReq3,', 'Unassessed', 'Jan', '2019'),
(130, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'San Enrique', 'Assembly', 'Barangay 16 ', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 2:42 pm', 'admin1012', 'admin101', 'Kenneth Cayetano', '9', '2', 'Complete', 'IniReq1,IniReq3,', 'Unassessed', 'Jan', '2019'),
(131, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'San Enrique', 'Assembly', 'Barangay 16 ', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 2:42 pm', 'admin1012', 'admin101', 'Kenneth Cayetano', '9', '2', 'Complete', 'IniReq1,IniReq3,', 'Unassessed', 'Jan', '2019'),
(132, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'San Enrique', 'Assembly', 'Barangay 16 ', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 2:42 pm', 'admin1012', 'admin101', 'Kenneth Cayetano', '9', '2', 'Complete', 'IniReq1,IniReq3,', 'Unassessed', 'Jan', '2019'),
(133, 'FSEC', 'Matt Murdock', 'Attorney Firm', 'San Enrique', 'Assembly', 'Barangay 16 ', 'NA', '09474298815', 'Agna Nottingam', 'January 18, 2019 2:46 pm', 'admin1012', 'admin101', 'Kenneth Cayetano', '9', '2', 'Complete', 'IniReq1,IniReq3,', 'Unassessed', 'Jan', '2019'),
(134, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:56 pm', 'admin23', 'admin23', ' ', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(135, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:56 pm', 'admin23', 'admin23', ' ', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(136, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:56 pm', 'admin23', 'admin23', ' ', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(137, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:56 pm', 'admin23', 'admin23', ' ', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(138, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(139, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(140, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(141, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(142, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(143, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(144, 'FSEC', 'Matt Murdock', 'Matt Murdock', ' ', 'Business-Office', 'Barangay 15', 'NA', '09474298815', 'Hilliary Sparkwell', 'January 18, 2019 2:57 pm', 'admin23', 'admin23', 'Kenneth Cayetano', '3', '44', 'Complete', 'IniReq1,IniReq2,', 'Unassessed', 'Jan', '2019'),
(145, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:02 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(146, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:03 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(147, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:03 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(148, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:03 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(149, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:03 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(150, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:03 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(151, 'FSEC', 'Matt Murdock', 'Attorney Firm', ' ', 'Mercantile', 'Barangay 30', 'NA', '09474298815', 'Michel Snalham', 'January 18, 2019 3:04 pm', 'amazie', 'amazie', 'Kenneth Cayetano', '1', '23', 'Complete', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Jan', '2019'),
(152, 'FSIC', 'Jessica Jones', 'Police Equipment', 'Taculing', 'Small-Business', 'Barangay 22', 'Occupancy', '09474298815', 'croname', 'January 18, 2019 3:12 pm', 'admin123', 'admin123', 'Melioad', '4', '23', 'Complete', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Jan', '2019'),
(153, 'FSEC', 'Amazing', 'Reporter Firm', 'New York', 'Assembly', 'Barangay 22', 'NA', '09474298815', 'Matt Murdockk', 'January 18, 2019 7:20 pm', 'admin', 'admins', 'Kenneth Cayetano', '122', '22', 'Complete', 'IniReq2,IniReq3,', 'Assessed', 'Jan', '2019');

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
(1, '1', 'Shamus Munks', '524 Sunbrook Pass', 'Complete', 'Renewable Energy Group, Inc.', 'FSEC', '70', '2', '6', '8', '1.2', '2.3000000000000003', '44', '55', '900', '10000', '11088.5', '1000', 0, 'Dec', '2018', 'December 13, 2018 11:22 pm', ''),
(2, '12', 'Constantia Armall', '80 Hudson Hill', 'Complete', 'Northfield Bancorp, Inc.', 'FSIC', '50', '1.31', '10', '10', '12', '40', '555', '55', '66', '54', '853.31', '1000', 46.690000000000055, 'Dec', '2018', 'December 14, 2018 1:57 pm', ''),
(3, '13', 'Irwinn Bushell', '8 Hazelcrest Center', 'Complete', 'Ichor Holdings', 'FSIC', '80', '0.8', '12', '1.26', '10.700000000000001', '3.4000000000000004', '35352', '34', '23', '5', '35522.16', '1000', 24477.839999999997, 'Dec', '2018', 'December 14, 2018 2:14 pm', ''),
(4, '2', 'Alexandre Calleja', '10514 Katie Alley', 'Complete', 'Bay Bancorp, Inc.', 'FSEC', '6.6000000000000005', '0.78', '1.96', '1.52', '19.72', '98.80000000000001', '8', '8', '678', '567', '1390.38', '1000', 109.61999999999989, 'Dec', '2018', 'December 14, 2018 3:18 pm', ''),
(5, '3', 'Norris Maestro', '7 Fallview Point', 'Complete', 'Acacia Research Corporation', 'FSEC', '50', '4', '0.48', '1.1', '1.1', '32.5', '442', '34', '24', '2', '591.1800000000001', '1500', 8.819999999999936, 'Dec', '2018', 'December 14, 2018 7:45 pm', ''),
(6, '14', 'Bettye Tapping', '585 Cardinal Point', 'Complete', 'Zoetis Inc.', 'FSIC', '1.2000000000000002', '0.12', '0.24', '0.24', '0.24', '1.2000000000000002', '12', '12', '12', '12', '51.24', '1500', 948.76, 'Dec', '2018', 'December 19, 2018 3:53 pm', ''),
(7, '4', 'Marylin Klampk', '546 Luster Circle', 'Complete', 'Allstate Corporation (The)', 'FSEC', '200', '2.33', '6.640000000000001', '46.26', '0.24', '2.3000000000000003', '65', '56', '54', '345', '777.77', '1500', 122.23000000000002, 'Dec', '2018', 'December 31, 2018 11:09 pm', ''),
(8, '15', 'Marrilee Cattini', '3860 Oriole Plaza', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '10', '2.2', '6.8', '0.42', '0.86', '35', '310', '22', '11', '1000', '1398.28', '1200', 1.7200000000000273, 'Dec', '2018', 'December 31, 2018 11:10 pm', ''),
(9, '16', 'Ajay Espinos', '83589 Muir Street', 'Complete', 'NewStar Financial, Inc.', 'FSIC', '0.5', '0.34', '1.12', '0.9', '1.54', '55.6', '234', '2344', '25', '54', '2717', '1200', 283, 'Feb', '2019', 'January 3, 2019 11:17 am', ''),
(10, '21', 'Irwinn Bushell', '3860 Oriole Plaza', 'Complete', 'Zoetis Inc.', 'FSIC', '50', '2', '2', '0.8', '8.08', '33.4', '66', '54', '234', '33', '483.28', '1200', 71.72000000000003, 'Jan', '2019', 'January 3, 2019 7:35 pm', ''),
(11, '5', 'Ives Tassell', '1249 Ludington Place', 'Pending', 'Chart Industries, Inc.', 'FSEC', '23.400000000000002', '23.41', '4.68', '2.68', '68.66', '23.400000000000002', '10', '23', '23', '333', '535.23', '1200', 163.76999999999998, 'Jan', '2019', 'January 7, 2019 6:41 pm', ''),
(12, '23', 'Juro Kazuhiko', 'Niggeria', 'Complete', 'Nigger Corp', 'FSEC', '56', '4', '7', '3', '2.96', '45.5', '34', '656', '700', '121', '1629.46', '1200', 0, 'Jan', '2019', 'January 10, 2019 6:08 pm', ''),
(13, '17', 'Jamaal Petkov', '82272 Everett Point', 'Complete', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', 'FSIC', '3.4000000000000004', '53.25', '1.12', '11.120000000000001', '10.9', '4.4', '4', '2342', '2342', '545', '5317.19', '1000', 682.81, 'Jan', '2019', 'January 13, 2019 9:28 pm', ''),
(14, '6', 'Gay Barnet', '777 Drewry Center', 'Select', 'Fortinet, Inc.', 'FSEC', '0.1', '0.01', '2', '2', '2', '20', '100', '100', '100', '10000', '10326.11', '1000', 9673.89, 'Jan', '2019', 'January 15, 2019 2:52 am', ''),
(15, '7', 'Alain Palluschek', '62664 Barnett Lane', 'Complete', 'Elbit Systems Ltd.', 'FSEC', '0.1', '0.01', '2', '2', '2', '16.8', '100', '100', '100', '120', '442.91', '1000', 1557.09, 'Jan', '2019', 'January 15, 2019 2:53 am', ''),
(16, '8', 'Angie Kondratovich', '8 Bobwhite Avenue', 'Complete', 'Navigator Holdings Ltd.', 'FSEC', '0.1', '0.01', '2', '2', '2', '20', '100', '100', '100', '100', '426.11', '1000', 0, 'Jan', '2019', 'January 15, 2019 2:55 am', ''),
(17, '9', 'Jenine Crangle', '4138 Barnett Avenue', 'Complete', 'Wells Fargo & Company', 'FSEC', '0.085', '0.01', '2', '2', '2', '20', '100', '100', '100', '100', '426.10', '1000', 0, 'Jan', '2019', 'January 15, 2019 2:56 am', ''),
(18, '10', 'Maegan Badham', '17 Graedel Road', 'Complete', 'CRA International,Inc.', 'FSEC', '0.1', '0.01', '2', '2', '2', '20', '100', '100', '100', '100', '426.11', '1000', 0, 'Jan', '2019', 'January 15, 2019 2:57 am', ''),
(19, '22', 'Maeryger D. Gomez', 'Menlo 4', 'Complete', 'Medical Clinic', 'FSEC', '0.1', '0.01', '2', '2', '200', '20', '100', '100', '100', '100', '624.11', '1000', 0, 'Jan', '2019', 'January 15, 2019 2:57 am', ''),
(20, '38', 'Claudia Jelk', '12 Charing Cross Alley', 'Complete', 'Zoetis Inc.', 'FSIC', '0.2', '0.02', '4', '3.6', '4', '40', '200', '200', '200', '189', '840.82', '1000', 0, 'Jan', '2019', 'January 15, 2019 5:36 pm', ''),
(21, '11', 'Melodie Brosenius', '91999 Oriole Crossing', 'Complete', 'Templeton Global Income Fund, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '24', '40', '200', '200', '200', '200', '872.22', '1000', 0, 'Jan', '2019', 'January 15, 2019 6:17 pm', ''),
(22, '39', 'Octavius Kenealy', '138 Mariners Cove Hill', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Jan', '2019', 'January 15, 2019 6:18 pm', ''),
(23, '40', 'Sanni Legodinec', '80 Hudson Hill', 'Complete', 'Northfield Bancorp, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Jan', '2019', 'January 15, 2019 6:19 pm', ''),
(24, '41', 'Fifi Milberg', '83589 Muir Street', 'Complete', 'Nigger Corp', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Jan', '2019', 'January 15, 2019 6:19 pm', ''),
(25, '42', 'Amy Roder', '3860 Oriole Plaza', 'Complete', 'Zoetis Inc.', 'FSIC', '0.2', '0.02', '7', '3.72', '4', '40', '200', '200', '200', '200', '854.94', '1200', 0, 'Jan', '2019', 'January 15, 2019 6:20 pm', ''),
(26, '43', 'Stinky Dikvenet', '80 Hudson Hill', 'Complete', 'REcr', 'FSIC', '0.2', '0.01', '4', '4', '4', '40', '200', '200', '200', '200', '852.21', '1200', 147.79, 'Jan', '2019', 'January 15, 2019 6:21 pm', ''),
(27, '44', 'Noelle Emerie', '3860 Oriole Plaza', 'Complete', 'Nigger Corp', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1200', 0, 'Jan', '2019', 'January 15, 2019 6:21 pm', ''),
(28, '45', 'Dawn Arsenal', '80 Hudson Hill', 'Complete', 'Pinkblow', 'FSIC', '0.2', '0.02', '1.2', '4', '4', '40', '200', '200', '200', '200', '849.42', '1200', 0, 'Jan', '2019', 'January 15, 2019 6:22 pm', ''),
(29, '46', 'Leodora Marchant', '138 Mariners Cove Hill', 'Complete', 'Taylor Devices, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '186', '200', '838.22', '1200', 0, 'Jan', '2019', 'January 15, 2019 6:23 pm', ''),
(30, '47', 'Rochelle Tano', '3860 Oriole Plaza', 'Complete', 'Adadda', 'FSIC', '0.2', '0.04', '1.2', '4', '4', '40', '200', '200', '200', '200', '849.44', '1200', 0, 'Jan', '2019', 'January 15, 2019 6:23 pm', ''),
(31, '48', 'Renz Owen', '3860 Oriole Plaza', 'Complete', 'Nba', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1200', 0, 'Jan', '2019', 'January 15, 2019 6:24 pm', ''),
(32, '49', 'Jason Patrick Jocsin', '3860 Oriole Plaza', 'Complete', 'computer', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1200', 0, 'Dec', '2019', 'January 15, 2019 6:24 pm', ''),
(33, '50', 'Jess Patrick', '83589 Muir Street', 'Complete', 'Library', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1200', 0, 'Nov', '2019', 'January 15, 2019 6:25 pm', ''),
(34, '51', 'Johnedel Mapa', '80 Hudson Hill', 'Complete', 'Templeton Global Income Fund, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Oct', '2019', 'January 15, 2019 6:26 pm', ''),
(35, '52', 'Cathy Granada', 'Niggeria', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Sep', '2019', 'January 15, 2019 6:26 pm', ''),
(36, '53', 'Kenny Hurrisa', '80 Hudson Hill', 'Complete', 'Seventh Heaven', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Aug', '2019', 'January 15, 2019 6:27 pm', ''),
(37, '54', 'Lj Cezar Adarle', '80 Hudson Hill', 'Complete', 'DAnceteck', 'FSIC', '0.2', '0.01', '4', '4', '4', '40', '200', '200', '200', '193', '845.21', '1500', 0, 'Jul', '2019', 'January 15, 2019 6:28 pm', ''),
(38, '55', 'Elmer T. Haro', 'Bacolod', 'Complete', 'Uno-r', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', '1500', 0, 'Jun', '2019', 'January 15, 2019 6:28 pm', ''),
(39, '24', 'Ignacio Branton', 'Niggeria', 'Complete', 'Zoetis Inc.', 'FSEC', '0.5', '0.05', '10', '10', '10', '100', '500', '500', '500', '500', '2130.55', '1500', 0, 'May', '2019', 'January 17, 2019 2:02 am', ''),
(40, '24', 'Ignacio Branton', 'Niggeria', 'Complete', 'Zoetis Inc.', 'FSEC', '0.5', '0.05', '10', '10', '10', '100', '500', '500', '500', '500', '2130.55', '1500', 0, 'Apr', '2019', 'January 17, 2019 2:02 am', ''),
(41, '25', 'Cleveland Bartzen', '80 Hudson Hill', 'Pending', 'Nba', 'FSEC', '70', '7', '1400', '1400', '1400', '14000', '599', '599', '599', '599', '20673.00', '1500', 0, 'Mar', '2019', 'January 17, 2019 2:10 am', ''),
(42, '26', 'Kellia Penniel', 'Tokyo', 'Complete', 'Taiga Inc', 'FSEC', '0.5', '0.3', '680', '60', '80', '680', '3400', '4342', '342', '34', '9618.80', '1000', 381.2, 'Jan', '2019', 'January 17, 2019 6:22 pm', ''),
(43, '57', 'Prince Ledesma', 'Escalante', 'Complete', 'Toy Truck Parts', 'FSEC', '70', '34', '864846.8', '6848.400000000001', '668700690.6800001', '688.8000000000001', '24', '344', '343', '545', '669574434.68', '1000', -0.68, 'Jan', '2019', 'January 17, 2019 6:24 pm', ''),
(44, '27', 'Casey Rappa', '27 Alunan Avenue', 'Complete', 'Dragon Corp', 'FSEC', '0.6980000000000001', '0.2', '4000', '2.4', '48', '8', '30', '505', '540', '30', '5164.30', '1000', 835.7, 'Jan', '2019', 'January 17, 2019 10:51 pm', ''),
(45, '28', 'Mark', '548 Dawn Court', 'Complete', 'miannuzzi1@ox.ac.uk', 'FSEC', '5', '0.5', '100', '100', '100', '1000', '5000', '5000', '5000', '5000', '21305.50', '22000', 694.5, 'Jan', '2019', 'January 20, 2019 11:08 pm', ''),
(46, '153', 'Kenneth Cayetano', 'New York', 'Complete', 'Reporter Firm', 'FSEC', '0.8', '0.08', '16', '16', '16', '160', '0', '800', '0', '0', '1008.88', '1100', 91.12, 'Jan', '2019', 'January 23, 2019 12:55 am', ''),
(47, '109', 'Kenneth Cayetano', 'Hells Kitchen', 'Complete', 'Attorney Firm', 'FSEC', '123.456', '12.345600000000001', '2469.12', '2469.12', '2469.12', '0', '0', '211', '322', '123', '8199.16', '10000', 1800.84, 'Jan', '2019', 'January 23, 2019 1:31 am', 'Justin D. Puatu');

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
(13, 'Inspector', 'F04', 'Alvin', 'Go', 'Yanson', 'alvin2', 'alvin3', 'alvin3', '6', 'January 13, 2019 7:41 pm'),
(14, 'Inspector', 'F04', 'Alvin', 'Go', 'Yanson', 'alvin2', 'alvin3', 'alvin3', '6', 'January 13, 2019 7:43 pm'),
(15, 'Inspector', 'F04', 'Alvin', 'Go', 'Yanson', 'alvin2', 'alvin3', 'alvin3', '6', 'January 13, 2019 7:43 pm'),
(16, 'CRO', 'F01', 'Kenneth', 'De la Rosa', 'Cayetano', 'ken2', 'kenneth2', 'kenneth2', '1', 'January 16, 2019 1:26 pm'),
(17, 'CRO', 'F01', 'Matt', 'Knuckle', 'Murdockk', 'Dare', '123devil', '123devil', '4', 'January 18, 2019 3:05 pm'),
(18, 'CRO', 'F01', 'Matt', 'Knuckle', 'Murdockk', 'Dare', '123devil', '123devil', '4', 'January 18, 2019 3:06 pm'),
(19, 'Inspector', 'F03', 'Kenneth', 'Christian', 'Canlog', 'admin101', 'admin101', 'admin101', '3', 'January 18, 2019 7:41 pm'),
(20, 'Inspector', 'F03', 'Kenneth', 'Christian', 'Canlog', 'admin101', 'admin101', 'admin101', '3', 'January 18, 2019 7:41 pm'),
(21, 'CRO', 'F01', 'Clark', 'KE', 'KE', 'admin1234', 'admin1234', 'admin1234', '5', 'January 21, 2019 11:56 pm'),
(22, 'CRO', 'F01', 'Kenneth', 'De La Rosa', 'Cayeatano', 'Admin101', 'kenneth', 'kenneth', '5', 'January 22, 2019 7:46 pm');

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
(1, '2018-12-2', 'Sir Cartagena', 'Alexandre Calleja', 'Bay Bancorp, Inc.', 'Nanotech', 'Mansilingan', '2', '2018-12-25', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_2,Warning_Req_4,Warning_Req_5,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Dec', '2018', ''),
(2, '2018-12-3', 'Sir Cartagena', 'Norris Maestro', 'Acacia Research Corporation', 'Nanotech', 'Mansilingan', 'Residential', '2018-12-14', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_4,', 'Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,', 'Fire_Protection_Req_2,', 'Miscellaneous_Req_2,', 'Dec', '2018', ''),
(3, '2018-12-4', 'Sir Cartagena', 'Marylin Klampk', 'Allstate Corporation (The)', 'Nexmo ', 'Mansilingan', 'Business', '2019-01-05', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,Wa', 'Fire_Protection_Req_1,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,Fire_Protect', 'Miscellaneous_Req_1,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,', 'Jan', '2019', ''),
(4, '2018-12-5', 'Cartajena', 'Ives Tassell', 'Chart Industries, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-15', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_6,Miscellaneous_Req_7,', 'Jan', '2019', ''),
(5, '', 'Cartajena', 'Ives Tassell', 'Chart Industries, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-15', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_6,Miscellaneous_Req_7,', 'Jan', '2019', ''),
(6, '2018-12-6', 'Kenneth', 'Gay Barnet', 'Fortinet, Inc.', 'ss', 's', 'ss', '2019-01-09', 'Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_36,Means_Egrees_Req_37,Means_Egrees_Req_38,', 'No Walls', 'No Compartmentation', 'Warning_Req_2,Warning_Req_3,', 'No Fire Protection', 'No Miscellaneous', 'Jan', '2019', 'Ready for Certification'),
(7, '2019-01-57', 'Sir Cartagena', 'Prince Ledesma', 'Toy Truck Parts', 'Machine Tech', 'San Luis', 'Business', '2018-12-05', 'Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_1,Miscellaneous_Req_5,Miscellaneous_Req_6,', 'Jan', '2019', 'On Progress'),
(8, '2018-12-7', 'Cataluna', 'Alain Palluschek', 'Elbit Systems Ltd.', 'Computer Cafe', 'Mansilingan', 'Business', '2019-01-18', 'Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,', 'Walls_Req_1,Walls_Req_2,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,', 'Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Jan', '2019', 'On Progress');

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
  `inspection_cro` varchar(50) NOT NULL,
  `deficiency_checklist` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`ir_no`, `io_no`, `application_no`, `owner_name`, `owner_address`, `business_name`, `establishment_address`, `bldg_height`, `lot_size`, `number_of_floors`, `date_applied`, `month`, `year`, `inspection_status`, `recommendation`, `checklist_classification`, `checklist_exit`, `checklist_lightings`, `checklist_protection`, `checklist_equipments`, `checklist_hazardous`, `checklist_operating`, `status_of_checklist`, `inspection_cro`, `deficiency_checklist`) VALUES
(1, 'IO-2019-01-1', '2019-01-27', 'jan2', '500', 'Computer Repair', 'Sum-ag', '30', '95', '72', 'Jan-15-2019', 'Jan', '2019', 'Inspection Report', 'Puatu', 'Amazing', 'Race', 'High', 'Low', 'Steal', 'Borrow	', 'Shock', 'for certification', '', ''),
(4, 'IO-2019-01-2', '2019-01-38', ' Claudia Jelk', 'Blck 16, North East Village', 'Zoetis Inc.', '12 Charing Cross Alley', '2', '180000', '3', 'Jan-18-2019', 'Jan', '2019', 'Inspection Report', 'Hello World', 'Hello World', 'Hello World', 'Hello World', 'Hello World', 'Hello World', 'NA', 'NA', 'issued NTCV', '', ''),
(5, 'IO-2019-01-5', '2019-01-39', ' Octavius', 'Blck 16, North East Village', 'CBAK Energy Technology, Inc.', '138 Mariners Cove Hill', '13131', '60000', '5', 'Jan-18-2019', 'Jan', '2019', 'Inspection Report', 'wqeqwqw', 'status_of_checklist', 'status_of_checklist', 'status_of_checklist', 'status_of_checklist', 'NA', 'NA', 'NA', 'for certification', '', ''),
(6, 'IO-2019-01-6', '2019-01-40', ' Sanni', '5000', 'Northfield Bancorp, Inc.', '80 Hudson Hill', '131', '140000', '6', 'Jan-18-2019', 'Jan', '2019', 'Inspection Report', 'message2', 'message2', 'NA', 'NA', 'NA', 'NA', 'message2', 'message2', 'issued NTCV', '', ''),
(7, 'IO-2019-01-7', '', ' Elmer', '2000', 'Uno-r', 'Bacolod', '2000', '180000', '5', 'Jan-20-2019', 'Jan', '2019', 'Inspection Report', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'for compliance', '', ''),
(8, 'IO-2019-01-8', '2019-01-54', 'LJEE', 'hello world ', 'DAnceteck', '80 Hudson Hill', '25', '60000', '1', 'Jan-20-2019', 'Jan', '2019', 'Inspection Report', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'for compliance', '', ''),
(9, 'IO-2019-01-9', '2019-01-53', ' Kenny', 'San Enrique', 'Seventh Heaven', '80 Hudson Hill', '76', '60000', '1', 'Jan-22-2019', 'Jan', '2019', 'Inspection Report', 'Pallor', 'colon cancer', 'imbalanced gut flora', 'Crohnâ€™s disease', 'celiac disease', 'NA', 'NA', 'NA', 'for compliance', 'Clark Berja', 'colon cancer,imbalanced gut flora,Crohna\'s disease,celiac disease,NA,NA,NA');

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
(1, 'IO-2019-01-1', 'Elmer', '2019-01-16', '13:59', 'January 15, 2019 - 9:47 pm', 'Jan', '2019', 'Pending'),
(2, 'IO-2019-01-1', 'Cardo', '2019-01-01', '12:12', 'January 16, 2019 - 10:53 pm', 'Jan', '2019', 'Pending'),
(3, 'IO-2019-01-1', 'Vincent', '2019-01-31', '13:59', 'January 22, 2019 - 12:17 am', 'Jan', '2019', 'Pending');

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
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_notice`
--

INSERT INTO `issue_notice` (`issue_notice_no`, `type_of_notice`, `amount`, `owner_name`, `inspector_name`, `business_name`, `date_issued`, `IR_date_applied`, `application_no`, `inspection_order`, `business_address`, `grace_period_from`, `grace_period_to`, `month`, `year`) VALUES
(1, 'Correct Violation', '4.00', 'jan2', 'Vincent', 'Computer Repairs', '2019-01-18', 'IO-2019-01-1', '2019-01-7', 'IO-2019-01-1', 'Sum-aganon', '2019-01-01', '2019-01-20', 'Jan', '2019'),
(2, 'Correct Violation', '4.00', 'jan2', 'Cardo', 'Computer Repair', '7', 'IO-2019-01-1', '2019-01-7', 'IO-2019-01-1', 'Sum-ag', '2019-01-28', '2019-01-22', 'Jan', '2019'),
(3, 'Correct Violation', '123123', 'jan2', '', 'Computer Repair', '2019-01-18', 'IO-2019-01-1', '2019-01-7', 'IO-2019-01-1', 'Sum-ag', '2019-01-28', '2019-01-29', 'Jan', '2019'),
(4, 'Correct Violation', '2', ' Claudia Jelk', '', 'Zoetis Inc.', '2019-01-01', 'IO-2019-01-4', '2019-01-38', 'IO-2019-01-2', '12 Charing Cross Alley', '2019-01-31', '2019-02-01', 'Jan', '2019'),
(5, 'Correct Violation', '121', ' Octavius', '', 'CBAK Energy Technology, Inc.', '2019-01-23', 'IO-2019-01-5', '2019-01-3', 'IO-2019-01-5', '138 Mariners Cove Hill', '2019-01-31', '2019-01-31', 'Jan', '2019'),
(6, 'Select', '5000', ' Sanni', '', 'Northfield Bancorp, Inc.', '2019-01-22', 'IO-2019-01-6', '2019-01-4', 'IO-2019-01-6', '80 Hudson Hill', '2019-01-29', '2019-01-30', 'Jan', '2019');

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
(28, '53', ' Kenny', '09474298815', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Kennythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Inspection', 'January 23, 2019 3:13 am');

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
(1, 'Dare', 'kenneth', 'Matt', 'Murdockk', 'January 22, 2019, 8:00 pm', 'employee', 'Active'),
(2, 'admin123', 'admin123', 'Melioad', ' ', ' ', 'applicant', 'Inactive'),
(3, 'admin', 'Masteradmin123', 'Kenneth Cayetano', ' ', 'January 23, 2019, 2:05 am', 'applicant', 'Active'),
(4, 'admin101', 'admin101', 'Kenneth', 'Canlog', 'January 20, 2019, 9:41 pm', 'employee', 'Inactive'),
(5, 'admin1234', 'admin1234', 'Clark', 'KE', ' ', 'employee', 'Active');

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
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `bldg_construct`
--
ALTER TABLE `bldg_construct`
  MODIFY `bc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `checklist_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inspectors`
--
ALTER TABLE `inspectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issue_notice`
--
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
