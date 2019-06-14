-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 09:53 AM
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
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_checklist`
--

INSERT INTO `evaluation_checklist` (`checklist_no`, `application_no`, `plan_evaluator`, `owner_name`, `business_name`, `project_title`, `location`, `occupancy_classification`, `date_received`, `means_of_egrees`, `walls`, `compartmentation`, `warning_systems`, `fire_protection`, `miscellaneous`, `month`, `year`) VALUES
(1, '2018-12-2', 'Sir Cartagena', 'Alexandre Calleja', 'Bay Bancorp, Inc.', 'Nanotech', 'Mansilingan', '2', '2018-12-25', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_2,Warning_Req_4,Warning_Req_5,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Dec', '2018'),
(2, '2018-12-3', 'Sir Cartagena', 'Norris Maestro', 'Acacia Research Corporation', 'Nanotech', 'Mansilingan', 'Residential', '2018-12-14', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,', 'Walls_Req_4,', 'Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,', 'Fire_Protection_Req_2,', 'Miscellaneous_Req_2,', 'Dec', '2018'),
(3, '2018-12-4', 'Sir Cartagena', 'Marylin Klampk', 'Allstate Corporation (The)', 'Nexmo ', 'Mansilingan', 'Business', '2019-01-05', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,Wa', 'Fire_Protection_Req_1,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,Fire_Protect', 'Miscellaneous_Req_1,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,', 'Jan', '2019'),
(4, '2018-12-5', 'Cartajena', 'Ives Tassell', 'Chart Industries, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-15', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_6,Miscellaneous_Req_7,', 'Jan', '2019'),
(5, '', 'Cartajena', 'Ives Tassell', 'Chart Industries, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-15', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_6,Miscellaneous_Req_7,', 'Jan', '2019'),
(6, '2018-12-6', 'Cartajena', 'Gay Barnet', 'Fortinet, Inc.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-24', 'Means_Egrees_Req_1,Means_Egrees_Req_5,Means_Egrees_Req_7,Means_Egrees_Req_9,Means_Egrees_Req_10,Means_Egrees_Req_12,Means_Egrees_Req_16,Means_Egrees_Req_17,Means_Egrees_Req_20,', 'Walls_Req_2,Walls_Req_3,', 'Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_4,Warning_Req_8,Warning_Req_17,Warning_Req_18,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_5,', 'Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_8,', 'Jan', '2019'),
(7, '2018-12-7', 'Kenneth', 'Alain Palluschek', 'Elbit Systems Ltd.', 'Claygo', 'Bacolod', 'Sanctuary', '2019-01-23', 'Means_Egrees_Req_1,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_11,', 'Walls_Req_2,Walls_Req_3,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,', 'Jan', '2019'),
(8, '2018-12-8', 'Kurt', 'Angie Kondratovich', 'Navigator Holdings Ltd.', 'Sacrilige', 'Bacolod', 'Sanctuary', '2019-01-17', 'Means_Egrees_Req_1,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_8,Means_Egrees_Req_9,Means_Egrees_Req_11,Means_Egrees_Req_12,Means_Egrees_Req_13,Means_Egrees_Req_15,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_2,Warning_Req_3,Warning_Req_8,Warning_Req_9,Warning_Req_10,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,', 'Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_5,Miscellaneous_Req_6,Miscellaneous_Req_7,Miscellaneous_Req_8,Miscellaneous_Req_9,', 'Jan', '2019'),
(9, '2018-12-9', 'Kurt', 'Jenine Crangle', 'Wells Fargo & Company', 'DELL', 'Bacolod', 'Sanctuary', '2019-03-21', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,', 'Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,', 'Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,', 'Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,', 'Jan', '2019'),
(10, '2018-12-10', 'PEter', 'Maegan Badham', 'CRA International,Inc.', 'REco', 'Bacolod', 'Sanctuary', '2019-01-30', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_5,Warning_Req_7,Warning_Req_8,Warning_Req_9,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Jan', '2019'),
(11, '2019-01-22', 'JC Puatu', 'Maeryger D. Gomez', 'Medical Clinic', 'PAASCU', 'Bacolod', 'Sanctuary', '2019-01-25', 'Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,Means_Egrees_Req_10,Means_Egrees_Req_11,Means_Egrees_Req_12,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,', 'Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,Fire_Protection_Req_3,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,', 'Jan', '2019'),
(12, '2019-01-23', 'Nathaniel', 'Juro', 'Nigger Corp', 'Ventor', 'Bacolod', 'Sanctuary', '2019-01-30', 'Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,', 'Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,', 'Jan', '2019'),
(13, '2019-01-24', 'Dyniel', 'Ignacio', 'Zoetis Inc.', 'keith', 'Bacolod', 'Sanctuary', '2019-02-05', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,', 'Jan', '2019'),
(14, '2019-01-25', 'Ej', 'Bart Simpson', 'Nba', 'Gift', 'Bacolod', 'Sanctuary', '2019-02-28', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,', 'Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,Warning_Req_9,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,', 'Jan', '2019'),
(15, '2019-01-26', 'john doe', 'kelly', 'Taiga Inc', 'BCMIS', 'Bacolod', 'Sanctuary', '2019-02-20', 'Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,Means_Egrees_Req_10,Means_Egrees_Req_11,Means_Egrees_Req_12,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,', 'Fire_Protection_Req_1,Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,', 'Jan', '2019'),
(16, '2019-01-27', 'Kyle Ursos', 'Casey Rappa', 'Dragon Corp', 'DELL', 'Bacolod', 'Sanctuary', '2019-02-01', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_9,Warning_Req_10,Warning_Req_11,Warning_Req_12,Warning_Req_13,Warning_Req_14,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,Fire_Protection_Req_6,', 'Miscellaneous_Req_1,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,Miscellaneous_Req_7,Miscellaneous_Req_8,Miscellaneous_Req_9,', 'Jan', '2019'),
(17, '2019-01-28', 'Daniel Go', 'Mark', 'miannuzzi1@ox.ac.uk', 'DAG', 'Bacolod', 'Sanctuary', '2019-02-19', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,Miscellaneous_Req_7,Miscellaneous_Req_8,Miscellaneous_Req_9,', 'Jan', '2019'),
(18, '2019-01-29', 'Shigeki', ' Melodie Brosenius', 'Nauzene ', 'Enoch', 'Bacolod', 'VAL', '2019-02-14', 'Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,Means_Egrees_Req_10,Means_Egrees_Req_11,Means_Egrees_Req_12,Means_Egrees_Req_13,Means_Egrees_Req_14,', 'Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,', 'Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,', 'Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,Warning_Req_9,Warning_Req_12,Warning_Req_13,Warning_Req_14,Warning_Req_16,Warning_Req_17,Warning_Req_18,Warning_Req_19,', 'Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,Fire_Protection_Req_6,', 'Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,Miscellaneous_Req_7,Miscellaneous_Req_8,Miscellaneous_Req_9,Miscellaneous_Req_10,Miscellaneous_Req_11,', 'Jan', '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  ADD PRIMARY KEY (`checklist_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `checklist_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
