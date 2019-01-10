-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Dec 12, 2018 at 06:53 PM
=======
-- Generation Time: Jan 03, 2019 at 12:42 PM
>>>>>>> new
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

INSERT INTO `application` (`application_no`, `application_type`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay_name`, `type_of_permit`, `date_applied`, `username`, `password`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `initial_requirements`, `assessment_status`, `month`, `year`) VALUES
<<<<<<< HEAD
(32, 'FSEC', 'Alvin Yanson', 'Printing', 'Bacolod City', '1', 'Mandalagan', 'NA', 'December 3, 2018 6:33 pm', 'alvin', 'alvin', 'Alvin Yanson', '1', '1', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),', 'Unassessed', 'Dec', '2018'),
(33, 'FSEC', 'Alson John Bayon-on', 'Printing', 'Bacolod City', '0', 'Banago', 'NA', 'December 3, 2018 6:52 pm', 'alson', 'alson', 'Alson John Bayon-on', '1', '1', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018'),
(34, 'FSEC', 'Alvin Mananquil', 'Printing', 'Bacolod City', '0', 'Barangay 39', 'NA', 'December 3, 2018 6:53 pm', 'alvinmis', 'alvinmis', 'Alvin Mananquil', '1', '1', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Assessed', 'Dec', '2018'),
(35, 'FSEC', 'Arianne Torres', 'Printing', 'Bacolod City', '0', 'Barangay 39', 'NA', 'December 3, 2018 6:54 pm', 'arianne', 'arianne', 'Arianne Torres', '1', '1', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018'),
(36, 'FSIC', 'Rommel Adricula ', 'CISCO', 'Bacolod City', '1', 'Barangay 39', 'Building', 'December 3, 2018 10:16 pm', 'rommel', 'rommel', 'Rommel Adricula', '2', '10', 'Pending', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),', 'Unassessed', 'Dec', '2018'),
(37, 'FSIC', 'Rogy Acosta', 'Falcon', 'Bacolod City', '1', 'Barangay 39', 'Building', 'December 3, 2018 10:17 pm', 'rogy', 'rogy', 'Rogy Acosta', '1', '1', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Inspected', 'Dec', '2018'),
(38, 'FSEC', 'Juan Dela Cruz', 'Printing', 'Bacolod City', '1', 'Barangay 39', 'NA', 'December 4, 2018 5:13 pm', 'juan', 'juan', 'Juan Dela Cruz', '3', '3', 'Complete', 'Endorsement from building Official,Set of Building Plans (3),Bill of Materials and Cost Estimate (1),FALAR-1 (3),', 'Unassessed', 'Dec', '2018'),
(39, 'FSEC', 'Kent Adrian', 'Security Firm', 'San Luis', 'Business-Office', 'Barangay 22', 'NA', 'December 7, 2018 9:54 pm', 'clarkcan2018', '8080', 'Kent Adrian', '3', '442', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Dec', '2018'),
(40, 'FSEC', 'John Dale', 'Engineering Firm', 'Tabunan', 'Mercantile', 'Barangay 15', 'NA', 'December 7, 2018 10:43 pm', 'clarkcan2018', '8080', 'John Dale', '55', '99', 'Complete', 'IniReq2,IniReq3,', 'Unassessed', 'Dec', '2018'),
(41, 'FSIC', 'Ildefonso Obligado', 'Tricycle Tire and Parts', 'Cegasco', 'Storage', 'Barangay 30', 'Occupancy', 'December 7, 2018 11:07 pm', 'clarkcan2018', '8080', ' ', '21', '32', 'Complete', 'IniReq8,', 'Inspected', 'Dec', '2018'),
(42, 'FSIC', 'Kent Adrian', 'Kent Adrian', 'Kent Adrian', 'Mercantile', 'Barangay 1', 'Occupancy', 'December 7, 2018 11:13 pm', 'clarkcan2018', '8080', ' Kent Adrian', '77', '77', 'Complete', 'IniReq6,IniReq7,', 'Inspected', 'Dec', '2018'),
(43, 'FSIC', 'John Doe', 'Law Enforcement', 'Mansilingan', 'Small-Business', 'Barangay 36', 'Occupancy', 'December 12, 2018 10:49 pm', 'clarkcan2018', '8080', ' Jane Doe', '22', '44', 'Complete', 'IniReq5,IniReq6,IniReq7,', 'Inspected', 'Dec', '2018');
=======
(1, 'FSEC', 'Shamus Munks', 'Renewable Energy Group, Inc.', '524 Sunbrook Pass', 'Assembly', 'Barangay 5', 'NA', 'December 13, 2018 2:31 am', 'clarkcan2018', '8080', 'Shamus Munks', '4', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(2, 'FSEC', 'Alexandre Calleja', 'Bay Bancorp, Inc.', '10514 Katie Alley', 'Small-Business', 'Barangay 7', 'NA', 'December 13, 2018 2:33 am', 'alexandre_call', '1234', 'Alexandre Calleja', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(3, 'FSEC', 'Norris Maestro', 'Acacia Research Corporation', '7 Fallview Point', 'Educational', 'Barangay 1', 'NA', 'December 13, 2018 2:36 am', 'norris_mae', '8080', 'Norris Maestro', '3', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Evaluated', 'Dec', '2018'),
(4, 'FSEC', 'Marylin Klampk', 'Allstate Corporation (The)', '546 Luster Circle', 'Mercantile', 'Banago', 'NA', 'December 13, 2018 2:38 am', 'mary_klampk', '8080', 'Marylin Klampk', '3', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Dec', '2018'),
(5, 'FSEC', 'Ives Tassell', 'Chart Industries, Inc.', '1249 Ludington Place', 'Business-Office', 'Barangay 3', 'NA', 'December 13, 2018 2:40 am', 'ive_ras', '8080', 'Ives Tassell', '4', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(6, 'FSEC', 'Gay Barnet', 'Fortinet, Inc.', '777 Drewry Center', 'Small-Business', 'Barangay 28', 'NA', 'December 13, 2018 2:42 am', 'gayass', '8080', 'Gay Barnet', '4', '50000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(7, 'FSEC', 'Alain Palluschek', 'Elbit Systems Ltd.', '62664 Barnett Lane', 'Storage', 'Barangay 4', 'NA', 'December 13, 2018 2:46 am', 'dsdsd', '8080', 'Alain Palluschek', '3', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(8, 'FSEC', 'Angie Kondratovich', 'Navigator Holdings Ltd.', '8 Bobwhite Avenue', 'Small-Business', 'Barangay 3', 'NA', 'December 13, 2018 2:48 am', 'akondratovich0', '8080', 'Angie Kondratovich', '6', '20000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(9, 'FSEC', 'Jenine Crangle', 'Wells Fargo & Company', '4138 Barnett Avenue', 'Small-Business', 'Barangay 1', 'NA', 'December 13, 2018 2:50 am', 'jcrangle1', '8080', 'Jenine Crangle', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(10, 'FSEC', 'Maegan Badham', 'CRA International,Inc.', '17 Graedel Road', 'Mercantile', 'Barangay 1', 'NA', 'December 13, 2018 2:53 am', 'mbadham2', '8080', 'Maegan Badham', '6', '100,000', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(11, 'FSIC', 'Melodie Brosenius', 'Templeton Global Income Fund, Inc.', '91999 Oriole Crossing', 'Business-Office', 'Barangay 2', 'Building', 'December 13, 2018 7:54 pm', 'mbrosenius3', '8080', ' Melodie Brosenius', '5', '60000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Dec', '2018'),
(12, 'FSIC', 'Constantia Armall', 'Northfield Bancorp, Inc.', '80 Hudson Hill', 'Small-Business', 'Barangay 35', 'Building', 'December 13, 2018 7:55 pm', 'carmall4', '8080', ' Constantia Armall', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(13, 'FSIC', 'Irwinn Bushell', 'Ichor Holdings', '8 Hazelcrest Center', 'Educational', 'Banago', 'Occupancy', 'December 13, 2018 7:56 pm', 'ibushell5', '8080', ' Irwinn Bushell', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(14, 'FSIC', 'Bettye Tapping', 'Zoetis Inc.', '585 Cardinal Point', 'Business-Office', 'Barangay 18', 'Occupancy', 'December 13, 2018 7:58 pm', 'btappinga', '8080', ' Bettye Tapping', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(15, 'FSIC', 'Marrilee Cattini', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', 'Small-Business', 'Barangay 6', 'Building', 'December 13, 2018 7:59 pm', 'mcattinib', '8080', ' Bettye Tapping', '6', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(16, 'FSIC', 'Ajay Espinos', 'NewStar Financial, Inc.', '83589 Muir Street', 'Storage', 'Barangay 3', 'Building', 'December 13, 2018 8:00 pm', 'aespinosc', '8080', ' Melodie Brosenius', '5', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Inspected', 'Dec', '2018'),
(17, 'FSIC', 'Jamaal Petkov', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', '82272 Everett Point', 'Business-Office', 'Barangay 2', 'Building', 'December 13, 2018 10:25 pm', 'jpetkovrr', '8080', 'Jamaal Petkov ', '4', '180000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(18, 'FSEC', 'Gabey Ruoss', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', 'Assembly', 'Barangay 24', 'NA', 'December 13, 2018 10:27 pm', 'gruossrq', '8080', 'Gabey Ruoss', '4', '60000', 'Pending', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Dec', '2018'),
(19, 'FSIC', 'Maria Umbert', 'CBAK Energy Technology, Inc.', '8 Hazelcrest Center', 'Small-Business', 'Barangay 4', 'Building', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Melodie Brosenius', '6', '180000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(20, 'FSIC', 'Constantia Armall', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', 'Assembly', 'Barangay 18', 'Building', 'December 13, 2018 10:29 pm', 'clarkcan2018', '8080', ' Irwinn Bushell', '4', '60000', 'Pending', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Unassessed', 'Dec', '2018'),
(21, 'FSIC', 'Irwinn Bushell', 'Zoetis Inc.', '3860 Oriole Plaza', 'Business-Office', 'Barangay 29', 'Building', 'December 13, 2018 10:30 pm', 'clarkcan2018', '8080', ' Constantia Armall', '4', '60000', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,', 'Assessed', 'Dec', '2018');
>>>>>>> new

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
<<<<<<< HEAD
(6, '34', 'Alvin Mananquil', 'Bacolod City', 'Complete', 'Printing', 'FSEC', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '10.8', '100', 0, 0, 'Dec', '2018', ''),
(7, '', '', 'Bacolod City', 'Select', 'Falcon', 'FSIC', '12.3', '1.23', '4.26', '0.46', '0.64', '43.400000000000006', '4', '34', '3', '23', '126.29', 0, 0, 'Dec', '2018', ''),
(8, '', '', 'Bacolod City', 'Complete', 'Printing', 'FSEC', '3.2', '1.31', '0.26', '0.26', '0.88', '412.40000000000003', '44', '4124', '4124', '4144', '12854.310000000001', 0, 0, 'Dec', '2018', ''),
(9, '', '', 'Bacolod City', 'Complete', 'Falcon', 'FSIC', '2.3000000000000003', '1.31', '0.1', '0.9', '0.08', '0.4', '656', '5', '6', '5656', '6328.09', 0, 0, 'Dec', '2018', ''),
(10, '', '', 'Bacolod City', 'Pending', 'Printing', 'FSEC', '0.1', '1.24', '8248.24', '103.02', '1102.7', '1513.5', '5355', '5325', '0', '0', '21648.800000000003', 0, 0, 'Dec', '2018', ''),
(11, '', '', 'Bacolod City', 'Complete', 'Printing', 'FSEC', '131.3', '4.34', '6848.4800000000005', '48.480000000000004', '6.26', '0', '12313', '4', '2424', '545', '22324.86', 0, 0, 'Dec', '2018', ''),
(12, '2018-Dec-35', '', 'Bacolod City', 'Complete', 'Printing', '', '12.3', '1.31', '6.26', '6.26', '0.88', '0.30000000000000004', '44', '24', '4124', '4', '4223.31', 0, 0, 'Dec', '2018', ''),
(13, '2018-Dec-35', '', 'Bacolod City', 'Complete', 'Printing', 'FSEC', '131.3', '13133.130000000001', '6.26', '2.62', '262626.26', '131.3', '1313', '3313', '131131', '313', '412100.87', 0, 0, 'Dec', '2018', ''),
(14, '2018-12-35', '', 'Bacolod City', 'Select', 'Printing', 'FSEC', '0.30000000000000004', '0.02', '0.08', '106.5', '471.04', '2.5', '53555', '525', '525', '5', '55190.44', 0, 0, 'Dec', '2018', ''),
(15, '2018-12-35', '', 'Bacolod City', 'Complete', 'Printing', 'FSEC', '0.1', '0.02', '0.88', '0.08', '0.08', '5.300000000000001', '5', '53', '535', '5', '604.46', 0, 0, 'Dec', '2018', ''),
(16, '2018-12-39', '', 'San Luis', 'Select', 'Security Firm', 'FSEC', '2.3000000000000003', '323.13', '26.26', '626.26', '0.26', '131.3', '13133', '31', '13', '3131', '17417.510000000002', 2000000000, 1999982582.49, 'Dec', '2018', ''),
(17, '2018-12-39', '', 'San Luis', 'Pending', 'Security Firm', 'FSEC', '0.30000000000000004', '4.34', '105.04', '104.7', '0.5', '5.5', '2352', '55', '52', '5235', '7914.38', 100000, 92085.62, 'Dec', '2018', ''),
(18, '2018-12-39', '', 'San Luis', 'Complete', 'Security Firm', 'FSEC', '2.3000000000000003', '0.11', '0.44', '0.44', '1.06', '53.5', '55', '431', '344', '34', '921.85', 10000, 9078.15, 'Dec', '2018', ''),
(19, '39', 'Kent Adrian', 'San Luis', 'Complete', 'Security Firm', 'FSEC', '0.2', '0.01', '2.48', '82.48', '8.48', '0.4', '4214', '44', '45', '4', '4401.05', 222222, 217820.95, 'Dec', '2018', ''),
(20, '2018-12-40', 'John Dale', 'Tabunan', 'Complete', 'Engineering Firm', 'FSEC', '67.9', '7.890000000000001', '1.78', '1.96', '1.96', '0.30000000000000004', '57', '57', '47', '7', '249.79', 34444, 34194.21, 'Dec', '2018', ''),
(21, '2018-12-41', 'Ildefonso Obligado', 'Cegasco', 'Complete', 'Tricycle Tire and Parts', 'FSIC', '0.2', '0.03', '0.08', '0.08', '0.04', '0.4', '34', '4', '5', '34', '77.83', 100, 22.17, 'Dec', '2018', ''),
(22, '2018-12-42', 'Kent Adrian', 'Kent Adrian', 'Complete', 'Kent Adrian', 'FSIC', '1.2000000000000002', '0.23', '0.68', '1.12', '15.56', '0.9', '56', '564', '545', '45', '1229.69', 13000, 11770.31, 'Dec', '2018', 'December 7, 2018 11:43 pm'),
(23, '2018-12-42', 'Kent Adrian', 'Kent Adrian', 'Complete', 'Kent Adrian', 'FSIC', '11.100000000000001', '11.11', '2.22', '0.22', '2.22', '11.100000000000001', '11', '11', '1', '1', '61.97', 200, 138.03, 'Dec', '2018', 'December 7, 2018 11:49 pm'),
(24, '2018-12-40', 'John Dale', 'Tabunan', 'Complete', 'Engineering Firm', 'FSEC', '1.2000000000000002', '1.23', '2.46', '2.46', '2.46', '13.100000000000001', '123', '123', '123', '123', '514.91', 600, 85.09000000000003, 'Dec', '2018', 'December 7, 2018 11:50 pm'),
(25, '42', 'Kent Adrian', 'Kent Adrian', 'Complete', 'Kent Adrian', 'FSIC', '0.2', '0.22', '42.62', '1.76', '0.44', '312.3', '66', '43', '34', '434', '934.54', 2000, 1065.46, 'Dec', '2018', 'December 7, 2018 11:54 pm'),
(26, '41', 'Ildefonso Obligado', 'Cegasco', 'Complete', 'Tricycle Tire and Parts', 'FSIC', '0.1', '0.21', '426.28000000000003', '0.88', '0.88', '1242.1000000000001', '43', '434', '434', '344', '2925.4500000000003', 30000, 27074.55, 'Dec', '2018', 'December 11, 2018 11:09 pm'),
(27, '37', 'Rogy Acosta', 'Bacolod City', 'Complete', 'Falcon', 'FSIC', '0.2', '0.04', '8248.24', '0.08', '0.08', '0.4', '4', '5', '4', '6', '8268.039999999999', 90000, 81731.96, 'Dec', '2018', 'December 12, 2018 10:35 pm'),
(28, '43', 'John Doe', 'Mansilingan', 'Complete', 'Law Enforcement', 'FSIC', '50', '5', '10', '10', '10', '50', '500', '500', '500', '500', '2135', 3000, 865, 'Dec', '2018', 'December 12, 2018 10:49 pm');
=======
(1, '1', 'Shamus Munks', '524 Sunbrook Pass', 'Complete', 'Renewable Energy Group, Inc.', 'FSEC', '70', '2', '6', '8', '1.2', '2.3000000000000003', '44', '55', '900', '10000', '11088.5', 11088.5, 0, 'Dec', '2018', 'December 13, 2018 11:22 pm'),
(2, '12', 'Constantia Armall', '80 Hudson Hill', 'Complete', 'Northfield Bancorp, Inc.', 'FSIC', '50', '1.31', '10', '10', '12', '40', '555', '55', '66', '54', '853.31', 900, 46.690000000000055, 'Dec', '2018', 'December 14, 2018 1:57 pm'),
(3, '13', 'Irwinn Bushell', '8 Hazelcrest Center', 'Complete', 'Ichor Holdings', 'FSIC', '80', '0.8', '12', '1.26', '10.700000000000001', '3.4000000000000004', '35352', '34', '23', '5', '35522.16', 60000, 24477.839999999997, 'Dec', '2018', 'December 14, 2018 2:14 pm'),
(4, '2', 'Alexandre Calleja', '10514 Katie Alley', 'Complete', 'Bay Bancorp, Inc.', 'FSEC', '6.6000000000000005', '0.78', '1.96', '1.52', '19.72', '98.80000000000001', '8', '8', '678', '567', '1390.38', 1500, 109.61999999999989, 'Dec', '2018', 'December 14, 2018 3:18 pm'),
(5, '3', 'Norris Maestro', '7 Fallview Point', 'Complete', 'Acacia Research Corporation', 'FSEC', '50', '4', '0.48', '1.1', '1.1', '32.5', '442', '34', '24', '2', '591.1800000000001', 600, 8.819999999999936, 'Dec', '2018', 'December 14, 2018 7:45 pm'),
(6, '14', 'Bettye Tapping', '585 Cardinal Point', 'Complete', 'Zoetis Inc.', 'FSIC', '1.2000000000000002', '0.12', '0.24', '0.24', '0.24', '1.2000000000000002', '12', '12', '12', '12', '51.24', 1000, 948.76, 'Dec', '2018', 'December 19, 2018 3:53 pm'),
(7, '4', 'Marylin Klampk', '546 Luster Circle', 'Complete', 'Allstate Corporation (The)', 'FSEC', '200', '2.33', '6.640000000000001', '46.26', '0.24', '2.3000000000000003', '65', '56', '54', '345', '777.77', 900, 122.23000000000002, 'Dec', '2018', 'December 31, 2018 11:09 pm'),
(8, '15', 'Marrilee Cattini', '3860 Oriole Plaza', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '10', '2.2', '6.8', '0.42', '0.86', '35', '310', '22', '11', '1000', '1398.28', 1400, 1.7200000000000273, 'Dec', '2018', 'December 31, 2018 11:10 pm'),
(9, '16', 'Ajay Espinos', '83589 Muir Street', 'Complete', 'NewStar Financial, Inc.', 'FSIC', '0.5', '0.34', '1.12', '0.9', '1.54', '55.6', '234', '2344', '25', '54', '2717', 3000, 283, 'Jan', '2019', 'January 3, 2019 11:17 am'),
(10, '21', 'Irwinn Bushell', '3860 Oriole Plaza', 'Complete', 'Zoetis Inc.', 'FSIC', '50', '2', '2', '0.8', '8.08', '33.4', '66', '54', '234', '33', '483.28', 555, 71.72000000000003, 'Jan', '2019', 'January 3, 2019 7:35 pm');
>>>>>>> new

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
<<<<<<< HEAD
(1, 'IR-2018-12-1', '1312', '3123123', '21313', '12312312312', '312312', '3123123123123', '1231', '321', '32133123', '213213', '3123123213', '213123', 'December 9, 2018 5:52 pm'),
(2, 'IR-2018-12-1', '321', '313', '13213', '131', '31231223312', '123213', '123123', '12312', '313123123123', '21321321', '3123', '312321', 'December 12, 2018 6:29 pm');
=======
(1, 'IR-2018-12-1', '123', '23', '12312', '13', '123123', '123123', '13123', '12312331321', '1232132132', '3123', '3213123', '12312312', 'December 14, 2018 5:45 pm');
>>>>>>> new

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
(11, 'Inspection-CRO', 'F04', 'Justin', 'Christian', 'Puatu', 'ken05cay', 'ken05', 'ken05', '5', 'December 14, 2018 6:52 pm');

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
  `means_of_egrees` varchar(100) NOT NULL,
  `walls` varchar(100) NOT NULL,
  `compartmentation` varchar(100) NOT NULL,
  `warning_systems` varchar(100) NOT NULL,
  `fire_protection` varchar(100) NOT NULL,
  `miscellaneous` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_checklist`
--

INSERT INTO `evaluation_checklist` (`checklist_no`, `application_no`, `plan_evaluator`, `owner_name`, `business_name`, `project_title`, `location`, `occupancy_classification`, `date_received`, `means_of_egrees`, `walls`, `compartmentation`, `warning_systems`, `fire_protection`, `miscellaneous`, `month`, `year`) VALUES
(1, '2018-12-2', 'Sir Cartagena', 'Alexandre Calleja', 'Bay Bancorp, Inc.', 'Nanotech', 'Mansilingan', '2', '2018-12-25', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_2,Warning_Req_4,Warning_Req_5,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Dec', '2018'),
(2, '2018-12-3', 'Sir Cartagena', 'Norris Maestro', 'Acacia Research Corporation', 'Nanotech', 'Mansilingan', 'Residential', '2018-12-14', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_4,', 'Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,', 'Fire_Protection_Req_2,', 'Miscellaneous_Req_2,', 'Dec', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_checklist`
--

CREATE TABLE `evaluation_checklist` (
  `evalChecklist_no` int(100) NOT NULL,
  `plan_evaluator` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `location_of_construction` varchar(100) NOT NULL,
  `occupancy_classification` varchar(100) NOT NULL,
  `date_received` varchar(100) NOT NULL,
  `means_of_egress` varchar(100) NOT NULL,
  `warning_systems` varchar(100) NOT NULL,
  `compartmentation` varchar(100) NOT NULL,
  `fire_protection` varchar(100) NOT NULL,
  `walls` varchar(100) NOT NULL,
  `misc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
=======
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

>>>>>>> new
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
  `ir_checklist` varchar(50) NOT NULL,
  `recommendation` varchar(100) NOT NULL,
  `deficiency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`ir_no`, `io_no`, `application_no`, `owner_name`, `owner_address`, `business_name`, `establishment_address`, `bldg_height`, `lot_size`, `number_of_floors`, `date_applied`, `month`, `year`, `inspection_status`, `ir_checklist`, `recommendation`, `deficiency`) VALUES
<<<<<<< HEAD
(1, 'IO-2018-12-1', '2018-12-37', 'Rogy Acosta', 'San Enrique', '', 'Lopez Jaena', '67', '1', '1', '', '', '', 'Inspection Report', 'Hazardous Areas', 'HELP PLEASE', 'Danger'),
(2, 'IO-2018-12-1', '2018-12-43', ' Jane Doe', 'San Enrique', 'Law Enforcement', 'Mansilingan', '88', '44', '22', '18-12-12', 'Dec', '2018', 'Inspection Report', 'Hazardous Areas', 'HELP@', 'DANGER@');
=======
(1, 'IO-2018-12-1', '2018-12-12', ' Constantia Armall', 'Blck 16, North East Village', 'Northfield Bancorp, Inc.', '80 Hudson Hill', '78', '60000', '6', 'December 31, 2018 3:53 pm', 'Dec', '2018', 'Inspection Report', 'Features of Fire Protection', 'Recommend', 'Columns'),
(2, 'IO-2018-12-2', '2018-12-13', ' Irwinn Bushell', 'Blck 16, North East Village', 'Ichor Holdings', '8 Hazelcrest Center', '22', '60000', '6', 'December 31, 2018 3:50 pm', 'Dec', '2018', 'Inspection Report', 'Lightings and Signs', '', ''),
(3, 'IO-2018-12-3', '2018-12-14', ' Bettye Tapping', 'Blck 16, North East Village', 'Zoetis Inc.', '585 Cardinal Point', '66', '60000', '5', 'December 31, 2018 3:57 pm', 'Dec', '2018', 'Inspection Report', 'Operating Features', 'Work', 'Work'),
(4, 'IO-2018-12-4', '2018-12-15', ' Bettye Tapping', 'San Luis', 'CBAK Energy Technology, Inc.', '3860 Oriole Plaza', '10', '60000', '6', 'December 31, 2018 11:11 pm', 'Dec', '2018', 'Inspection Report', 'Hazardous Areas', 'Refrained', '10'),
(5, 'IO-2019-01-5', '2018-12-16', ' Melodie Brosenius', 'San Enrique', 'NewStar Financial, Inc.', '83589 Muir Street', '312313', '60000', '5', '19-01-03', 'January 3, 2019 11:36 amJan', '2019', 'Inspection Report', 'Building Service Equipment', 'Many', 'Many');
>>>>>>> new

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
(1, 'IO-2018-12-1', 'Cardo', '2018-12-04', '13:50', 'December 26, 2018 - 11:03 pm', 'Dec', '2018', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `issue_notice`
<<<<<<< HEAD
--

CREATE TABLE `issue_notice` (
  `issue_notice_no` int(100) NOT NULL,
  `type_of_notice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `inspector_name` varchar(100) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
=======
>>>>>>> new
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(7, 'assessor1', 'assessor1'),
(9, 'user2', 'cooluser2'),
(10, 'user3', 'cooluser3'),
(11, 'ken05cay', 'ken05');

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
<<<<<<< HEAD
=======
--
ALTER TABLE `evaluation_checklist`
  ADD PRIMARY KEY (`checklist_no`);

--
-- Indexes for table `inspection`
>>>>>>> new
--
ALTER TABLE `evaluation_checklist`
  ADD PRIMARY KEY (`evalChecklist_no`);

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
<<<<<<< HEAD
--
ALTER TABLE `issue_notice`
  ADD PRIMARY KEY (`issue_notice_no`);

--
-- Indexes for table `user`
=======
>>>>>>> new
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
<<<<<<< HEAD
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
=======
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
>>>>>>> new

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
<<<<<<< HEAD
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
=======
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
>>>>>>> new

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `bldg_construct`
--
ALTER TABLE `bldg_construct`
<<<<<<< HEAD
  MODIFY `bc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `bc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> new

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
<<<<<<< HEAD
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `evalChecklist_no` int(100) NOT NULL AUTO_INCREMENT;
=======
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `checklist_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
>>>>>>> new

--
-- AUTO_INCREMENT for table `inspection_report`
--
ALTER TABLE `inspection_report`
<<<<<<< HEAD
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> new

--
-- AUTO_INCREMENT for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
<<<<<<< HEAD
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issue_notice`
--
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> new

--
-- AUTO_INCREMENT for table `issue_notice`
--
<<<<<<< HEAD
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
=======
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> new

--
-- AUTO_INCREMENT for table `user`
--
<<<<<<< HEAD
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
>>>>>>> new
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
