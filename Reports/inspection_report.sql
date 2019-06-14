-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 09:55 AM
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
  `status_of_checklist` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_report`
--

INSERT INTO `inspection_report` (`ir_no`, `io_no`, `application_no`, `owner_name`, `owner_address`, `business_name`, `establishment_address`, `bldg_height`, `lot_size`, `number_of_floors`, `date_applied`, `month`, `year`, `inspection_status`, `recommendation`, `checklist_classification`, `checklist_exit`, `checklist_lightings`, `checklist_protection`, `checklist_equipments`, `checklist_hazardous`, `checklist_operating`, `status_of_checklist`) VALUES
(1, 'IO-2019-01-1', '2019-01-27', 'jan2', '500', 'Computer Repair', 'Sum-ag', '30', '95', '72', 'Jan-15-2019', 'Jan', '2019', 'Inspection Report', 'Puatu', 'Amazing', 'Race', 'High', 'Low', 'Steal', 'Borrow	', 'Shock', 'Comply'),
(2, 'IO-2019-01-2', '2018-12-11', ' Melodie Brosenius', 'Blck 16, North East Village', 'Templeton Global Income Fund, Inc.', '91999 Oriole Crossing', '13131', '60000', '5', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', '34343', 're', 'Marasmus', 'Tetany', 'Low', 'Keshan disease', 'Beriberi', 'Pellagra', ''),
(3, 'IO-2019-01-3', '2018-12-17', 'Jamaal Petkov ', '548 Dawn Court', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', '82272 Everett Point', '1212', '180000', '4', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(4, 'IO-2019-01-4', '2019-01-38', ' Claudia Jelk', '548 Dawn Court', 'Zoetis Inc.', '12 Charing Cross Alley', '23232', '180000', '3', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(5, 'IO-2019-01-5', '2019-01-39', ' Octavius', 'Bacolod City', 'CBAK Energy Technology, Inc.', '138 Mariners Cove Hill', '1212', '60000', '5', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(6, 'IO-2019-01-6', '2019-01-40', ' Sanni', '80 Hudson Hill', 'Northfield Bancorp, Inc.', '80 Hudson Hill', '1212', '140000', '6', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(7, 'IO-2019-01-7', '2019-01-41', 'Fifi', '83589 Muir Street', 'Nigger Corp', '83589 Muir Street', '23232', '60000', '3', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(8, 'IO-2019-01-8', '2019-01-42', ' Amy Roder', '3860 Oriole Plaza', 'Zoetis Inc.', '3860 Oriole Plaza', '23232', '110000', '1', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(9, 'IO-2019-01-9', '2019-01-43', ' Styinky', '80 Hudson Hill', 'REcr', '80 Hudson Hill', '23232', '140000', '5', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(10, 'IO-2019-01-10', '2019-01-44', 'noelle', '3860 Oriole Plaza', 'Nigger Corp', '3860 Oriole Plaza', '3860 Oriole Plaza', '180000', '6', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(11, 'IO-2019-01-11', '2019-01-45', ' Dawn', '80 Hudson Hill', 'Pinkblow', '80 Hudson Hill', '1212', '140000', '4', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(12, 'IO-2019-01-12', '2019-01-46', 'Leod', '138 Mariners Cove Hill', 'Taylor Devices, Inc.', '138 Mariners Cove Hill', '23232', '140000', '6', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(13, 'IO-2019-01-13', '2019-01-47', 'Rochelle', '3860 Oriole Plaza', 'Adadda', '3860 Oriole Plaza', '1212', '140000', '3', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(14, 'IO-2019-01-14', '2019-01-48', ' Renz', '3860 Oriole Plaza', 'Nba', '3860 Oriole Plaza', '23232', '180000', '1', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(15, 'IO-2019-01-15', '2019-01-49', ' Json', '3860 Oriole Plaza', 'computer', '3860 Oriole Plaza', '23232', '100,000', '3', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(16, 'IO-2019-01-16', '2019-01-50', 'Jess', '83589 Muir Street', 'Library', '83589 Muir Street', '1212', '10000', '1', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(17, 'IO-2019-01-17', '2019-01-51', ' Johny', '80 Hudson Hill', 'Templeton Global Income Fund, Inc.', '80 Hudson Hill', '23232', '12122', '1', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(18, 'IO-2019-01-18', '2019-01-52', ' Cathy', 'Niggeria', 'CBAK Energy Technology, Inc.', 'Niggeria', '23232', '60000', '4', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(19, 'IO-2019-01-19', '2019-01-53', ' Kenny', '80 Hudson Hill', 'Seventh Heaven', '80 Hudson Hill', '23232', '60000', '1', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(20, 'IO-2019-01-20', '2019-01-54', 'LJEE', '80 Hudson Hill', 'DAnceteck', '80 Hudson Hill', '23232', '60000', '1', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply'),
(21, 'IO-2019-01-21', '2019-01-55', ' Elmer', '80 Hudson Hill', 'Uno-r', 'Bacolod', '23232', '180000', '5', 'Jan-16-2019', 'Jan', '2019', 'Inspection Report', 'yes', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'passed', 'Comply');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inspection_report`
--
ALTER TABLE `inspection_report`
  ADD PRIMARY KEY (`ir_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inspection_report`
--
ALTER TABLE `inspection_report`
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
