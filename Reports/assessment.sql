-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 09:45 AM
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
(12, '23', 'Juro Kazuhiko', 'Niggeria', 'Complete', 'Nigger Corp', 'FSEC', '56', '4', '7', '3', '2.96', '45.5', '34', '656', '700', '121', '1629.46', 2000, 0, 'Jan', '2019', 'January 10, 2019 6:08 pm'),
(13, '17', 'Jamaal Petkov', '82272 Everett Point', 'Complete', 'First Trust NASDAQ-100 Ex-Technology Sector Index ', 'FSIC', '3.4000000000000004', '53.25', '1.12', '11.120000000000001', '10.9', '4.4', '4', '2342', '2342', '545', '5317.19', 6000, 682.81, 'Jan', '2019', 'January 13, 2019 9:28 pm'),
(14, '6', 'Gay Barnet', '777 Drewry Center', 'Select', 'Fortinet, Inc.', 'FSEC', '0.1', '0.01', '2', '2', '2', '20', '100', '100', '100', '10000', '10326.11', 20000, 9673.89, 'Jan', '2019', 'January 15, 2019 2:52 am'),
(15, '7', 'Alain Palluschek', '62664 Barnett Lane', 'Complete', 'Elbit Systems Ltd.', 'FSEC', '0.1', '0.01', '2', '2', '2', '16.8', '100', '100', '100', '120', '442.91', 2000, 1557.09, 'Jan', '2019', 'January 15, 2019 2:53 am'),
(16, '8', 'Angie Kondratovich', '8 Bobwhite Avenue', 'Complete', 'Navigator Holdings Ltd.', 'FSEC', '0.1', '0.01', '2', '2', '2', '20', '100', '100', '100', '100', '426.11', 1000, 0, 'Jan', '2019', 'January 15, 2019 2:55 am'),
(17, '9', 'Jenine Crangle', '4138 Barnett Avenue', 'Complete', 'Wells Fargo & Company', 'FSEC', '0.085', '0.01', '2', '2', '2', '20', '100', '100', '100', '100', '426.10', 1000, 0, 'Jan', '2019', 'January 15, 2019 2:56 am'),
(18, '10', 'Maegan Badham', '17 Graedel Road', 'Complete', 'CRA International,Inc.', 'FSEC', '0.1', '0.01', '2', '2', '2', '20', '100', '100', '100', '100', '426.11', 1000, 0, 'Jan', '2019', 'January 15, 2019 2:57 am'),
(19, '22', 'Maeryger D. Gomez', 'Menlo 4', 'Complete', 'Medical Clinic', 'FSEC', '0.1', '0.01', '2', '2', '200', '20', '100', '100', '100', '100', '624.11', 1000, 0, 'Jan', '2019', 'January 15, 2019 2:57 am'),
(20, '38', 'Claudia Jelk', '12 Charing Cross Alley', 'Complete', 'Zoetis Inc.', 'FSIC', '0.2', '0.02', '4', '3.6', '4', '40', '200', '200', '200', '189', '840.82', 1000, 0, 'Jan', '2019', 'January 15, 2019 5:36 pm'),
(21, '11', 'Melodie Brosenius', '91999 Oriole Crossing', 'Complete', 'Templeton Global Income Fund, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '24', '40', '200', '200', '200', '200', '872.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:17 pm'),
(22, '39', 'Octavius Kenealy', '138 Mariners Cove Hill', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:18 pm'),
(23, '40', 'Sanni Legodinec', '80 Hudson Hill', 'Complete', 'Northfield Bancorp, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:19 pm'),
(24, '41', 'Fifi Milberg', '83589 Muir Street', 'Complete', 'Nigger Corp', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:19 pm'),
(25, '42', 'Amy Roder', '3860 Oriole Plaza', 'Complete', 'Zoetis Inc.', 'FSIC', '0.2', '0.02', '7', '3.72', '4', '40', '200', '200', '200', '200', '854.94', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:20 pm'),
(26, '43', 'Stinky Dikvenet', '80 Hudson Hill', 'Complete', 'REcr', 'FSIC', '0.2', '0.01', '4', '4', '4', '40', '200', '200', '200', '200', '852.21', 1000, 147.79, 'Jan', '2019', 'January 15, 2019 6:21 pm'),
(27, '44', 'Noelle Emerie', '3860 Oriole Plaza', 'Complete', 'Nigger Corp', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:21 pm'),
(28, '45', 'Dawn Arsenal', '80 Hudson Hill', 'Complete', 'Pinkblow', 'FSIC', '0.2', '0.02', '1.2', '4', '4', '40', '200', '200', '200', '200', '849.42', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:22 pm'),
(29, '46', 'Leodora Marchant', '138 Mariners Cove Hill', 'Complete', 'Taylor Devices, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '186', '200', '838.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:23 pm'),
(30, '47', 'Rochelle Tano', '3860 Oriole Plaza', 'Complete', 'Adadda', 'FSIC', '0.2', '0.04', '1.2', '4', '4', '40', '200', '200', '200', '200', '849.44', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:23 pm'),
(31, '48', 'Renz Owen', '3860 Oriole Plaza', 'Complete', 'Nba', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:24 pm'),
(32, '49', 'Jason Patrick Jocsin', '3860 Oriole Plaza', 'Complete', 'computer', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:24 pm'),
(33, '50', 'Jess Patrick', '83589 Muir Street', 'Complete', 'Library', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:25 pm'),
(34, '51', 'Johnedel Mapa', '80 Hudson Hill', 'Complete', 'Templeton Global Income Fund, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:26 pm'),
(35, '52', 'Cathy Granada', 'Niggeria', 'Complete', 'CBAK Energy Technology, Inc.', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:26 pm'),
(36, '53', 'Kenny Hurrisa', '80 Hudson Hill', 'Complete', 'Seventh Heaven', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:27 pm'),
(37, '54', 'Lj Cezar Adarle', '80 Hudson Hill', 'Complete', 'DAnceteck', 'FSIC', '0.2', '0.01', '4', '4', '4', '40', '200', '200', '200', '193', '845.21', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:28 pm'),
(38, '55', 'Elmer T. Haro', 'Bacolod', 'Complete', 'Uno-r', 'FSIC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 15, 2019 6:28 pm'),
(39, '24', 'Ignacio Branton', 'Niggeria', 'Select', 'Zoetis Inc.', 'FSEC', '0.1', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.12', 1000, 147.88, 'Jan', '2019', 'January 18, 2019 3:41 pm'),
(40, '25', 'Cleveland Bartzen', '80 Hudson Hill', 'Complete', 'Nba', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:42 pm'),
(41, '26', 'Kellia Penniel', 'Tokyo', 'Complete', 'Taiga Inc', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:42 pm'),
(42, '27', 'Casey Rappa', '27 Alunan Avenue', 'Complete', 'Dragon Corp', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:43 pm'),
(43, '28', 'Marc Iannuzzi', '548 Dawn Court', 'Complete', 'miannuzzi1@ox.ac.uk', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:43 pm'),
(44, '29', 'Raye Beausang', '83589 Muir Street', 'Complete', 'Nauzene ', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:43 pm'),
(45, '32', 'Justin Christian Puatu', 'Alunan Avenue 15-C', 'Complete', 'iFixit', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:44 pm'),
(46, '34', 'Kenneth Cayetano', '80 Hudson Hill', 'Complete', 'Grab Inc', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:49 pm'),
(47, '35', 'John Rey Gamotin', 'Talisay', 'Complete', 'PhoneBiz', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:50 pm'),
(48, '36', 'Kurt Mayang Barrioga', '3860 Oriole Plaza', 'Complete', 'KurtoSan', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:50 pm'),
(49, '37', 'Miles Morales', 'New York', 'Complete', 'SevenWebHeads', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:51 pm'),
(50, '58', 'Claire Redfield', 'New York', 'Complete', 'STARS', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:51 pm'),
(51, '60', 'Jack Stauber', '3860 Oriole Plaza', 'Complete', 'Zoetis Inc.', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:51 pm'),
(52, '61', 'Guillemette	Organ', 'Niggeria', 'Complete', 'Templeton Global Income Fund, Inc.', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:53 pm'),
(53, '62', 'Bradney	Skotcher', '3860 Oriole Plaza', 'Complete', 'CBAK Energy Technology, Inc.', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:53 pm'),
(54, '63', 'Homere	Igonet', '8 Hazelcrest Center', 'Complete', 'Northfield Bancorp, Inc.', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:54 pm'),
(55, '64', 'Cathrin	Glastonbury', 'Niggeria', 'Complete', 'ASus', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:54 pm'),
(56, '65', 'Sydney Jacobowicz', '3860 Oriole Plaza', 'Complete', 'Pepsi', 'FSEC', '0.2', '0.02', '4', '4', '4', '40', '200', '200', '200', '200', '852.22', 1000, 0, 'Jan', '2019', 'January 18, 2019 3:54 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`ops_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
