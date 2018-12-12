-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 06:53 PM
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
(1, 'IR-2018-12-1', '1312', '3123123', '21313', '12312312312', '312312', '3123123123123', '1231', '321', '32133123', '213213', '3123123213', '213123', 'December 9, 2018 5:52 pm'),
(2, 'IR-2018-12-1', '321', '313', '13213', '131', '31231223312', '123213', '123123', '12312', '313123123123', '21321321', '3123', '312321', 'December 12, 2018 6:29 pm');

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
(4, 'Evaluator', 'F04', 'Justin', 'Christian', 'Puatu', 'asdasdasd', '1234', '1234', '1', 'November 15, 2018 10:10 pm'),
(5, 'Evaluator', 'F02', 'Kenneth', 'De La Rosa', 'Cayetano', 'Kenneth', 'asdfghj', 'asdfghj', '6', 'November 15, 2018 11:17 pm');

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
(1, 'IO-2018-12-1', '2018-12-37', 'Rogy Acosta', 'San Enrique', '', 'Lopez Jaena', '67', '1', '1', '', '', '', 'Inspection Report', 'Hazardous Areas', 'HELP PLEASE', 'Danger'),
(2, 'IO-2018-12-1', '2018-12-43', ' Jane Doe', 'San Enrique', 'Law Enforcement', 'Mansilingan', '88', '44', '22', '18-12-12', 'Dec', '2018', 'Inspection Report', 'Hazardous Areas', 'HELP@', 'DANGER@');

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
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_schedule`
--

INSERT INTO `inspection_schedule` (`io_schedule`, `io_no`, `inspectors`, `inspection_date`, `inspection_time`, `date_applied`, `month`, `year`) VALUES
(1, 'IO-2018-12-1', 'Dalusay', '2018-12-12', '02:04', 'December 9, 2018 3:36 pm', 'Dec', '2018'),
(2, 'IO-2018-12-1', 'Jagonoy', '2018-12-05', '', 'December 9, 2018 3:46 pm', 'Dec', '2018'),
(3, 'IO-2018-12-1', 'Mark As', '2018-12-04', 'g:i a', 'December 9, 2018 4:22 pm', 'Dec', '2018'),
(4, 'IO-2018-12-1', 'Jagonoy', '2018-12-19', '4:22 pm', 'December 9, 2018 4:22 pm', 'Dec', '2018'),
(5, 'IO-2018-12-1', 'Mark As', '2018-12-04', '4:24 pm', 'December 9, 2018 4:24 pm', 'Dec', '2018'),
(6, 'IO-2018-12-1', 'Jagonoy', '2018-11-26', '12:58', 'December 9, 2018 4:26 pm', 'Dec', '2018'),
(7, 'IO-2018-12-1', 'Dalusay', '2018-12-10', '5:05 pm', 'December 9, 2018 5:30 pm', 'Dec', '2018'),
(8, 'IO-2018-12-1', 'Inspector Dalisay', '2018-12-12', '9:45 am', 'December 9, 2018 11:16 pm', 'Dec', '2018');

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
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(7, 'assessor1', 'user1@cool.com', 'assessor1'),
(9, 'user2', 'user2@cool.com', 'cooluser2'),
(10, 'user3', 'user3@cool.com', 'cooluser3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

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
--
ALTER TABLE `issue_notice`
  ADD PRIMARY KEY (`issue_notice_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `bldg_construct`
--
ALTER TABLE `bldg_construct`
  MODIFY `bc_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `evalChecklist_no` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_report`
--
ALTER TABLE `inspection_report`
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issue_notice`
--
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
