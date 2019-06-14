-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 08:40 AM
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
(1, 'FSEC', 'Kenneth Cayetano', 'Printing', 'Bacolod City', 'Business-Office', 'Barangay 23', '', '09474298815', 'Matt Murdockk', '14/01/2019', 'Kenneth Cayetano', '2', '60000 sq.m', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 4:03 am'),
(2, 'FSIC', 'Sir Jose', 'Tricycle Tire and Parts', 'Magsungay', 'Small-Business', 'Felisa', 'Building', '09474298815', 'Matt Murdockk', '2019-02-27', 'Sir Jose', '3', '44', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 4:03 am'),
(3, 'FSIC', 'Jamaal Petkov', 'Attorney Firm', 'Bacolod City', 'Small-Business', 'Barangay 18', 'Occupancy', '09474298815', 'Matt Murdockk', '2019-03-02', 'Kenneth Cayetano', '9', '44', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 4:12 am'),
(4, 'FSEC', 'Kenneth Cayetano', 'Printing', 'Magsungay', 'Business-Office', 'Barangay 23', '', '09474298815', 'Matt Murdockk', '2/27/2019', 'Kenneth Cayetano', '2', '60000 sq.m', 'Complete', 'IniReq1,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', '2/3/2019 4:03'),
(5, 'FSIC', 'John Mark Bitoon', 'Printing', 'Magsungay', 'Business-Office', 'Barangay 23', 'Occupancy', '9474298815', 'Matt Murdockk', '2/27/2019', 'Kenneth Cayetano', '2', '60000', 'Complete', 'IniReq1,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', '2/3/2019 4:03'),
(6, 'FSEC', 'Jeffrey Klaud', 'Printing', 'Magsungay', 'Business-Office', 'Barangay 23', '', '09474298815', 'Matt Murdockk', '2/27/2019', 'Kenneth Cayetano', '2', '60000 sq.m', 'Complete', 'IniReq1,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', '2/3/2019 4:03'),
(7, 'FSEC', 'Alex Abrines', 'Abrines Warehouse', 'San Lorenzo Avenue', 'Business-Office', 'Banago', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Alex Abrines', '3', '500', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 9:49 pm'),
(9, 'FSEC', 'Adams Jaylen', ' Jaylen sportsware', 'Santa Carolina Ave', 'Mercantile', 'Banago', 'NA', '09275757024', 'Matt Murdockk', '28/01/2019', 'Adams Jaylen', '3', '454', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 9:59 pm'),
(10, 'FSEC', 'Adams Steven', 'Adams Steven Store', 'San Jose Ave', 'Small-Business', 'Banago', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Adams Steven', '1', '454', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:00 pm'),
(11, 'FSEC', 'Adebayo Bam', 'Adebayo Bam Store', 'Santa Rita Ave', 'Small-Business', 'Banago', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Adebayo Bam', '2', '44', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(12, 'FSEC', 'Adel Deng', 'Adel Deng Merchandising', 'Lopez Jaena St.', 'Storage', 'Barangay 33', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Adel Deng', '3', '232', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:14 pm'),
(13, 'FSEC', 'Calderon, Jose', 'Calderon, Jose Hardware', 'Marapara St', 'Storage', 'Villamonte', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Marapara St', '3', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:15 pm'),
(14, 'FSEC', 'Canaan, Isaiah', 'Canaan, Isaiah Hardware', 'Adarna St', 'Small-Business', 'Alijis', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Canaan, Isaiah', '2', '421', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:16 pm'),
(15, 'FSEC', 'Chandler, Tyson', 'Chandler Kalan-an', 'Galo St.', 'Small-Business', 'Barangay 19', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Chandler, Tyson', '1', '100', 'Pending', 'IniReq1,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:18 pm'),
(16, 'FSEC', 'Clarkson, Jordan', 'Jordan Kapehan', 'Luzuriaga St', 'Small-Business', 'Barangay 28', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Clarkson, Jordan', '2', '100', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:19 pm'),
(17, 'FSEC', 'Collins, Zach', 'Collins, Zach', 'Araneta Ave', 'Small-Business', 'Singcang-Airport', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Collins, Zach', '3', '500', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:23 pm'),
(18, 'FSEC', 'Curry, Seth', 'Curry Pension House', 'Rodriguez Ave', 'Small-Business', 'Barangay 16 ', 'NA', '09275757024', 'Matt Murdockk', '02/02/2019', 'Curry, Seth', '2', '500', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:25 pm'),
(20, 'FSEC', 'Care Careme', 'Jack Henry & Associates, Inc.', 'Magsaysay Ave', 'Assembly', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Care Careme', '2', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(21, 'FSEC', 'Aden Buchanan', 'SLM Corporation', 'Magsaysay Ave', 'Business-Office', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '13/01/2019', 'Aden Buchanan', '3', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(22, 'FSEC', 'Bryant Bender', 'Playa Hotels & Resorts N.V.', 'Magsaysay Ave', 'Educational', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '14/01/2019', 'Bryant Bender', '4', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(23, 'FSEC', 'Leyla Hanna', 'Weatherford International plc', 'Magsaysay Ave', 'Mercantile', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '15/01/2019', 'Leyla Hanna', '2', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(24, 'FSEC', 'Kendall Villarreal', 'Net Element, Inc.', 'Magsaysay Ave', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '16/01/2019', 'Kendall Villarreal', '3', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(25, 'FSEC', 'Myla Chan', 'KCG Holdings, Inc.', 'Magsaysay Ave', 'Storage', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '17/01/2019', 'Myla Chan', '1', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(26, 'FSEC', 'Kendall Burnett', 'The AES Corporation', 'Magsaysay Ave', 'Assembly', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '18/01/2019', 'Kendall Burnett', '3', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(27, 'FSEC', 'Carmelo Norton', 'The GDL Fund', 'Magsaysay Ave', 'Business-Office', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '19/01/2019', 'Carmelo Norton', '2', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(28, 'FSEC', 'Dustin Daniel', 'GW Pharmaceuticals Plc', 'Magsaysay Ave', 'Educational', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '20/01/2019', 'Dustin Daniel', '4', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(29, 'FSEC', 'Kaleigh Harrington', 'Sabine Royalty Trust', 'Magsaysay Ave', 'Mercantile', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '21/01/2019', 'Kaleigh Harrington', '1', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(30, 'FSEC', 'Rory Cantrell', 'PDC Energy, Inc.', '15th St', 'Small-Business', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '22/01/2019', 'Rory Cantrell', '1', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(31, 'FSEC', 'Jagger Pugh', 'Golar LNG Partners LP', '16th St', 'Storage', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '23/01/2019', 'Jagger Pugh', '1', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(32, 'FSEC', 'Jenna Bolton', 'Virtus Investment Partners, Inc.', '17th St', 'Assembly', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '24/01/2019', 'Jenna Bolton', '1', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(33, 'FSEC', 'Emerson Armstrong', 'BioDelivery Sciences International, Inc.', '18th ST', 'Business-Office', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '25/01/2019', 'Emerson Armstrong', '2', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(34, 'FSEC', 'Terrell?Duford', 'National Energy Services Reunited Corp.', '15th St', 'Educational', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '26/01/2019', 'Terrell?Duford', '3', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(35, 'FSEC', 'Shawnna?Cassella', 'Capitol Acquisition Corp. III', '16th St', 'Mercantile', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '27/01/2019', 'Shawnna?Cassella', '4', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(36, 'FSEC', 'Claribel?Jorgenson', 'PowerShares Russell 1000 Low Beta Equal Weight Por', '17th St', 'Small-Business', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '28/01/2019', 'Claribel?Jorgenson', '2', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(37, 'FSEC', 'Dayle?Croxton', 'Blackrock MuniYield Quality Fund II, Inc.', '18th ST', 'Storage', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Dayle?Croxton', '3', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(38, 'FSEC', 'Guy?Toller', 'Jason Industries, Inc.', '18th ST', 'Assembly', 'Barangay 6', '', '09275757024', 'Matt Murdockk', '13/01/2019', 'Guy?Toller', '1', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(39, 'FSEC', 'Alanna?Orcutt', 'Lincoln Educational Services Corporation', 'Banahaw St', 'Business-Office', 'Villamonte', '', '09275757024', 'Matt Murdockk', '14/01/2019', 'Alanna?Orcutt', '3', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(40, 'FSEC', 'Kyle?Zingaro', 'Navios Maritime Holdings Inc.', 'Marapara St', 'Educational', 'Villamonte', '', '09275757024', 'Matt Murdockk', '15/01/2019', 'Kyle?Zingaro', '2', '322', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(41, 'FSEC', 'Micheline Ambrois', 'Invesco High Income 2023 Target Term Fund', 'Makilig St', 'Mercantile', 'Villamonte', '', '09275757024', 'Matt Murdockk', '16/01/2019', 'Micheline Ambrois', '4', '123', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(42, 'FSEC', 'Hoyt Undrell', 'Ares Management L.P.', 'Banahaw St', 'Small-Business', 'Villamonte', '', '09275757024', 'Matt Murdockk', '17/01/2019', 'Hoyt Undrell', '1', '126', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(43, 'FSEC', 'Delphine Lowndes', 'Moog Inc.', 'Marapara St', 'Storage', 'Villamonte', '', '09275757024', 'Matt Murdockk', '18/01/2019', 'Delphine Lowndes', '1', '654', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(44, 'FSEC', 'Field Ickowics', 'Citigroup Inc.', 'Makilig St', 'Assembly', 'Villamonte', '', '09275757024', 'Matt Murdockk', '19/01/2019', 'Field Ickowics', '1', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(45, 'FSEC', 'Gaelan Tummond', 'United States Lime & Minerals, Inc.', 'Banahaw St', 'Business-Office', 'Villamonte', '', '09275757024', 'Matt Murdockk', '20/01/2019', 'Gaelan Tummond', '1', '311', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(46, 'FSEC', 'Kincaid Bromehed', 'Reliv&#39; International, Inc.', 'Marapara St', 'Educational', 'Villamonte', '', '09275757024', 'Matt Murdockk', '21/01/2019', 'Kincaid Bromehed', '2', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(47, 'FSEC', 'Sherill Novkovic', 'CSRA Inc.', 'Makilig St', 'Mercantile', 'Villamonte', '', '09275757024', 'Matt Murdockk', '22/01/2019', 'Sherill Novkovic', '3', '234', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(48, 'FSEC', 'Orbadiah Cheeney', 'M III Acquisition Corp.', 'Banahaw St', 'Small-Business', 'Villamonte', '', '09275757024', 'Matt Murdockk', '23/01/2019', 'Orbadiah Cheeney', '4', '432', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(49, 'FSEC', 'Melisandra Kingscott', 'Liberty Media Corporation', 'Marapara St', 'Storage', 'Villamonte', '', '09275757024', 'Matt Murdockk', '24/01/2019', 'Melisandra Kingscott', '2', '322', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(50, 'FSEC', 'Cornela Siggs', 'Key Energy Services, Inc.', 'Makilig St', 'Assembly', 'Villamonte', '', '09275757024', 'Matt Murdockk', '25/01/2019', 'Cornela Siggs', '3', '123', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(51, 'FSEC', 'Florida Prowse', 'OpGen, Inc.', 'San Lorenzo Avenue', 'Business-Office', 'Banago', '', '09275757024', 'Matt Murdockk', '26/01/2019', 'Florida Prowse', '1', '126', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(52, 'FSEC', 'Mellicent Jakubovits', 'First Horizon National Corporation', 'San Marcelino Ave', 'Educational', 'Banago', '', '09275757024', 'Matt Murdockk', '27/01/2019', 'Mellicent Jakubovits', '3', '654', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(53, 'FSEC', 'Suzanna Linnemann', 'Heritage Financial Corporation', 'Santa Carolina Ave', 'Mercantile', 'Banago', '', '09275757024', 'Matt Murdockk', '03/01/2019', 'Suzanna Linnemann', '2', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(54, 'FSEC', 'Eleen Hunnicutt', 'Kadmon Holdings, Inc.', 'Santa Rita Ave', 'Small-Business', 'Banago', '', '09275757024', 'Matt Murdockk', '04/01/2019', 'Eleen Hunnicutt', '4', '311', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(55, 'FSEC', 'Alexis Brobyn', 'GTY Technology Holdings, Inc.', 'San Pedro', 'Storage', 'Banago', '', '09275757024', 'Matt Murdockk', '05/01/2019', 'Alexis Brobyn', '1', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(56, 'FSEC', 'Catharina Lainton', 'BankFinancial Corporation', 'San Juan St', 'Assembly', 'Banago', '', '09275757024', 'Matt Murdockk', '06/01/2019', 'Catharina Lainton', '1', '234', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(57, 'FSEC', 'Corrinne Maisey', 'BlackRock New York Investment Quality Municipal Tr', 'San Lorenzo Avenue', 'Business-Office', 'Banago', '', '09275757024', 'Matt Murdockk', '07/01/2019', 'Corrinne Maisey', '1', '432', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(58, 'FSEC', 'Starlene Kemer', 'Ohio Valley Banc Corp.', 'San Marcelino Ave', 'Educational', 'Banago', '', '09275757024', 'Matt Murdockk', '08/01/2019', 'Starlene Kemer', '1', '322', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(59, 'FSEC', 'Tara Attock', 'AptarGroup, Inc.', 'Santa Carolina Ave', 'Mercantile', 'Banago', '', '09275757024', 'Matt Murdockk', '09/01/2019', 'Tara Attock', '2', '123', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(60, 'FSEC', 'Carlotta McAviy', 'Merus Labs International Inc.', 'Santa Rita Ave', 'Small-Business', 'Banago', '', '09275757024', 'Matt Murdockk', '10/01/2019', 'Carlotta McAviy', '3', '126', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(61, 'FSEC', 'Terencio Lynock', 'Realogy Holdings Corp.', 'San Pedro', 'Storage', 'Banago', '', '09275757024', 'Matt Murdockk', '11/01/2019', 'Terencio Lynock', '4', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(62, 'FSEC', 'Hieronymus Smewings', 'Macatawa Bank Corporation', 'San Juan St', 'Assembly', 'Banago', '', '09275757024', 'Matt Murdockk', '03/01/2019', 'Hieronymus Smewings', '2', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(63, 'FSEC', 'Baily Wignall', 'Centene Corporation', 'Quezon Ave', 'Business-Office', 'Barangay 36', '', '09275757024', 'Matt Murdockk', '04/01/2019', 'Baily Wignall', '3', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(64, 'FSEC', 'Free Gooly', 'Harte-Hanks, Inc.', 'Hernaez St.', 'Educational', 'Barangay 36', '', '09275757024', 'Matt Murdockk', '05/01/2019', 'Free Gooly', '1', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(65, 'FSEC', 'Celene Kemm', 'Ares Commercial Real Estate Corporation', 'Alunan Ave', 'Mercantile', 'Barangay 36', '', '09275757024', 'Matt Murdockk', '06/01/2019', 'Celene Kemm', '3', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(66, 'FSEC', 'Odette Trude', 'CYS Investments, Inc.', 'Rodriguez Ave', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '07/01/2019', 'Odette Trude', '2', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(67, 'FSEC', 'Helenelizabeth Isitt', 'Synchrony Financial', 'Barangay 28', 'Storage', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '08/01/2019', 'Helenelizabeth Isitt', '4', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(68, 'FSEC', 'Nanette O\'Cooney', 'Marcus Corporation (The)', 'Gonzaga St', 'Storage', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '09/01/2019', 'Nanette O\'Cooney', '1', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(69, 'FSEC', 'Dorisa Szubert', 'NextEra Energy, Inc.', 'Luzuriaga St', 'Storage', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '10/01/2019', 'Dorisa Szubert', '1', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(70, 'FSEC', 'Yolanthe Caton', 'Cabela&#39;s Inc', 'Rodriguez Ave', 'Storage', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '11/01/2019', 'Yolanthe Caton', '1', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(71, 'FSEC', 'Lauree Elegood', 'Woori Bank', 'Barangay 28', 'Storage', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Lauree Elegood', '1', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(72, 'FSEC', 'Timmy Crossley', 'Tallgrass Energy Partners, LP', 'Gonzaga St', 'Storage', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '13/01/2019', 'Timmy Crossley', '2', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(73, 'FSEC', 'Lilas Mattin', 'American Electric Technologies, Inc.', 'Luzuriaga St', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '14/01/2019', 'Lilas Mattin', '3', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(74, 'FSEC', 'Susana Scourfield', 'Omega Healthcare Investors, Inc.', 'Rodriguez Ave', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '15/01/2019', 'Susana Scourfield', '4', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(75, 'FSEC', 'Pris Jindra', 'Ulta Beauty, Inc.', 'Barangay 28', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '16/01/2019', 'Pris Jindra', '2', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(76, 'FSEC', 'Yoko Redmond', 'Oxford Immunotec Global PLC', 'Gonzaga St', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '17/01/2019', 'Yoko Redmond', '3', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(77, 'FSEC', 'Jeanne Peggrem', 'Wells Fargo Global Dividend Opportunity Fund', 'Luzuriaga St', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '18/01/2019', 'Jeanne Peggrem', '1', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(78, 'FSEC', 'Romona Cleere', 'NetScout Systems, Inc.', 'Rodriguez Ave', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '19/01/2019', 'Romona Cleere', '3', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(79, 'FSEC', 'Kesley Tosdevin', 'FIRST REPUBLIC BANK', 'Barangay 28', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '08/01/2019', 'Kesley Tosdevin', '2', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(80, 'FSEC', 'Brander Gooderson', 'First Trust Asia Pacific Ex-Japan AlphaDEX Fund', 'Gonzaga St', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '09/01/2019', 'Brander Gooderson', '4', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(81, 'FSEC', 'Gavin Coaker', 'MFS Charter Income Trust', 'Luzuriaga St', 'Small-Business', 'Barangay 16', '', '09275757024', 'Matt Murdockk', '10/01/2019', 'Gavin Coaker', '1', '311', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(82, 'FSEC', 'Odelia Soltan', 'WisdomTree Emerging Markets Consumer Growth Fund', 'Kanlaon St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '11/01/2019', 'Odelia Soltan', '1', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(83, 'FSEC', 'Heall Keddey', 'Ashford Hospitality Trust Inc', 'Lilya St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Heall Keddey', '1', '234', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(84, 'FSEC', 'Elmer Keave', 'POSCO', 'Herminia St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '13/01/2019', 'Elmer Keave', '1', '432', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(85, 'FSEC', 'Cassandry Dawber', 'NovoCure Limited', 'Mount Makiling St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '14/01/2019', 'Cassandry Dawber', '2', '322', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(86, 'FSEC', 'Janella Hassent', 'Coffee Holding Co., Inc.', 'Kanlaon St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '15/01/2019', 'Janella Hassent', '3', '123', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(87, 'FSEC', 'Martino Pitblado', 'Brandywine Realty Trust', 'Lilya St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '16/01/2019', 'Martino Pitblado', '4', '126', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(88, 'FSEC', 'Clint Ponde', 'Gabelli Dividend', 'Herminia St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '17/01/2019', 'Clint Ponde', '2', '654', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(89, 'FSEC', 'Lezley Gunton', 'Electronics for Imaging, Inc.', 'Mount Makiling St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '18/01/2019', 'Lezley Gunton', '3', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(90, 'FSEC', 'Adam Chadbourn', 'Farmers Capital Bank Corporation', 'Kanlaon St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '19/01/2019', 'Adam Chadbourn', '1', '311', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(91, 'FSEC', 'Rey Schneidau', 'GTY Technology Holdings, Inc.', 'Lilya St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '20/01/2019', 'Rey Schneidau', '3', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(92, 'FSEC', 'Philip Norrey', 'Altra Industrial Motion Corp.', 'Herminia St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '21/01/2019', 'Philip Norrey', '2', '234', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(93, 'FSEC', 'Osbourn Suggate', 'Tarena International, Inc.', 'Mount Makiling St', 'Small-Business', 'Bata', '', '09275757024', 'Matt Murdockk', '22/01/2019', 'Osbourn Suggate', '4', '432', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(94, 'FSEC', 'Lara Levings', 'Southern California Edison Company', 'Balboa St', 'Small-Business', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '23/01/2019', 'Lara Levings', '1', '322', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(95, 'FSEC', 'Rubi Benesevich', 'First Trust Total US Market AlphaDEX ETF', 'Marganta St', 'Small-Business', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '24/01/2019', 'Rubi Benesevich', '1', '123', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(96, 'FSEC', 'Gale Riply', 'Quality Systems, Inc.', 'Sta Clara St', 'Small-Business', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '25/01/2019', 'Gale Riply', '1', '126', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(97, 'FSEC', 'Ainslee Jerrom', 'Eagle Pharmaceuticals, Inc.', 'Bugnay Road', 'Small-Business', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '26/01/2019', 'Ainslee Jerrom', '1', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(98, 'FSEC', 'Salomi Haacker', 'Great Elm Capital Corp.', 'Balboa St', 'Small-Business', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '27/01/2019', 'Salomi Haacker', '2', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(99, 'FSEC', 'Kerr Tarbin', 'Central Garden & Pet Company', 'Marganta St', 'Small-Business', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '28/01/2019', 'Kerr Tarbin', '3', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(100, 'FSEC', 'Margit Collomosse', 'Voya Natural Resources Equity Income Fund', 'Sta Clara St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '29/01/2019', 'Margit Collomosse', '4', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(101, 'FSEC', 'Mercedes Fenelon', 'EXFO Inc', 'Bugnay Road', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '30/01/2019', 'Mercedes Fenelon', '2', '232', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(102, 'FSEC', 'Tove Straffon', 'argenx SE', 'Balboa St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '31/01/2019', 'Tove Straffon', '3', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(103, 'FSEC', 'Milt Meiningen', 'MagnaChip Semiconductor Corporation', 'Marganta St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '10/01/2019', 'Milt Meiningen', '1', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(104, 'FSEC', 'Esdras Chaize', 'PS Business Parks, Inc.', 'Sta Clara St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '11/01/2019', 'Esdras Chaize', '3', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(105, 'FSEC', 'Rolfe Seabrooke', 'Capitala Finance Corp.', 'Bugnay Road', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Rolfe Seabrooke', '2', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(106, 'FSEC', 'Ezra Alexandersen', 'Canadian Natural Resources Limited', 'Balboa St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '13/01/2019', 'Ezra Alexandersen', '4', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(107, 'FSEC', 'Ronny See', 'Daseke, Inc.', 'Marganta St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '14/01/2019', 'Ronny See', '1', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(108, 'FSEC', 'Ximenes Stain', 'Allergan plc.', 'Sta Clara St', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '15/01/2019', 'Ximenes Stain', '1', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(109, 'FSEC', 'Britney Ambrosi', 'China Zenix Auto International Limited', 'Bugnay Road', 'Business-Office', 'Mandalagan', '', '09275757024', 'Matt Murdockk', '16/01/2019', 'Britney Ambrosi', '1', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(110, 'FSEC', 'Ivy Gaynor', 'Eagle Point Credit Company Inc.', 'Emerald St', 'Business-Office', 'Taculing', '', '09275757024', 'Matt Murdockk', '17/01/2019', 'Ivy Gaynor', '1', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(111, 'FSEC', 'Corene Ellis', 'Maiden Holdings, Ltd.', 'Celia Ave', 'Business-Office', 'Taculing', '', '09275757024', 'Matt Murdockk', '18/01/2019', 'Corene Ellis', '2', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(112, 'FSEC', 'Giorgi Deener', 'Safety Insurance Group, Inc.', 'St Peter Ave', 'Business-Office', 'Taculing', '', '09275757024', 'Matt Murdockk', '19/01/2019', 'Giorgi Deener', '3', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(113, 'FSEC', 'Kingsly Stolberg', 'Drive Shack Inc.', 'Don Jose St', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '20/01/2019', 'Kingsly Stolberg', '4', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(114, 'FSEC', 'Georgeanna Donaghie', 'ClearBridge Dividend Strategy ESG ETF', 'Emerald St', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '21/01/2019', 'Georgeanna Donaghie', '2', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(115, 'FSEC', 'Nat Astupenas', 'MobileIron, Inc.', 'Celia Ave', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '22/01/2019', 'Nat Astupenas', '3', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(116, 'FSEC', 'Augusto Kristiansen', 'Sun Communities, Inc.', 'St Peter Ave', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '23/01/2019', 'Augusto Kristiansen', '1', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(117, 'FSEC', 'Maribel Beverage', 'Pier 1 Imports, Inc.', 'Don Jose St', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '24/01/2019', 'Maribel Beverage', '3', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(118, 'FSEC', 'Nonie Bagshaw', 'Bio-Rad Laboratories, Inc.', 'Emerald St', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '04/01/2019', 'Nonie Bagshaw', '2', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Assessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(119, 'FSEC', 'Roley Flux', 'GGP Inc.', 'Celia Ave', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '05/01/2019', 'Roley Flux', '4', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(120, 'FSEC', 'Hulda Pockett', 'Tarena International, Inc.', 'St Peter Ave', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '06/01/2019', 'Hulda Pockett', '1', '234', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(121, 'FSEC', 'Laetitia Pound', 'Southern California Edison Company', 'Don Jose St', 'Small-Business', 'Taculing', '', '09275757024', 'Matt Murdockk', '07/01/2019', 'Laetitia Pound', '1', '432', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(122, 'FSEC', 'Faith Wychard', 'First Trust Total US Market AlphaDEX ETF', 'Mahogany St', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '08/01/2019', 'Faith Wychard', '1', '322', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(123, 'FSEC', 'Ursola Dubble', 'Quality Systems, Inc.', 'Catleya St', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '09/01/2019', 'Ursola Dubble', '1', '123', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(124, 'FSEC', 'Aimil Crimin', 'Eagle Pharmaceuticals, Inc.', 'Victorina Heights', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '10/01/2019', 'Aimil Crimin', '2', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(125, 'FSEC', 'Caprice Sibbering', 'Great Elm Capital Corp.', 'Bangga Alit', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '11/01/2019', 'Caprice Sibbering', '2', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(126, 'FSEC', 'Franny Slaney', 'Central Garden & Pet Company', 'Mahogany St', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Franny Slaney', '3', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(127, 'FSEC', 'Padriac Ohms', 'Voya Natural Resources Equity Income Fund', 'Catleya St', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '13/01/2019', 'Padriac Ohms', '4', '311', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(128, 'FSEC', 'Car Delue', 'EXFO Inc', 'Victorina Heights', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '14/01/2019', 'Car Delue', '2', '456', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(129, 'FSEC', 'Sunny Simpkiss', 'argenx SE', 'Bangga Alit', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '15/01/2019', 'Sunny Simpkiss', '3', '431', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(130, 'FSEC', 'Tracy Klaas', 'MagnaChip Semiconductor Corporation', 'Mahogany St', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '04/01/2019', 'Tracy Klaas', '1', '234', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(131, 'FSEC', 'Leanor Fery', 'PS Business Parks, Inc.', 'Catleya St', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '04/01/2019', 'Leanor Fery', '3', '432', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(132, 'FSEC', 'Lazarus Enticott', 'Capitala Finance Corp.', 'Victorina Heights', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '04/01/2019', 'Lazarus Enticott', '2', '322', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(133, 'FSEC', 'Arley Lanegran', 'Canadian Natural Resources Limited', 'Bangga Alit', 'Small-Business', 'Mansilingan', '', '09275757024', 'Matt Murdockk', '05/01/2019', 'Arley Lanegran', '4', '123', 'Pending', 'IniReq1,IniReq2,IniReq3,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(134, 'FSEC', 'Hadrian Burchall', 'Daseke, Inc.', 'Magsaysay Ave', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '06/01/2019', 'Hadrian Burchall', '1', '126', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(135, 'FSEC', 'Ginny Knobell', 'Allergan plc.', 'Araneta Ave', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '07/01/2019', 'Ginny Knobell', '1', '654', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(136, 'FSEC', 'Ardra Antonopoulos', 'China Zenix Auto International Limited', 'Magsungay', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '08/01/2019', 'Ardra Antonopoulos', '1', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(137, 'FSEC', 'Betteann Quenell', 'Eagle Point Credit Company Inc.', 'Alice St', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '09/01/2019', 'Betteann Quenell', '1', '311', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(138, 'FSEC', 'Carmelita Weight', 'Maiden Holdings, Ltd.', 'Magsaysay Ave', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '10/01/2019', 'Carmelita Weight', '2', '456', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(139, 'FSEC', 'Greta Fforde', 'Safety Insurance Group, Inc.', 'Araneta Ave', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '11/01/2019', 'Greta Fforde', '3', '214', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(140, 'FSEC', 'Jaquelin Burgwin', 'Drive Shack Inc.', 'Magsungay', 'Small-Business', 'Singcang-Airport', '', '09275757024', 'Matt Murdockk', '12/01/2019', 'Jaquelin Burgwin', '', ' sq.m', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', '', '', '', ''),
(141, 'FSIC', 'Sonja Dockreay', 'First Trust Nasdaq Food & Beverage ETF', 'San Lorenzo Avenue', 'Assembly', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '12/01/2019', 'Sonja Dockreay', '8', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(142, 'FSIC', 'Laurene Sterman', 'Kirkland&#39;s, Inc.', 'San Lorenzo Avenue', 'Business-Office', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '13/01/2019', 'Laurene Sterman', '5', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(143, 'FSIC', 'Lucine MacDowal', 'Acacia Communications, Inc.', 'San Lorenzo Avenue', 'Educational', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '14/01/2019', 'Lucine MacDowal', '7', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(144, 'FSIC', 'Terrence Spurdens', 'Digital Realty Trust, Inc.', 'San Lorenzo Avenue', 'Mercantile', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '15/01/2019', 'Terrence Spurdens', '2', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(145, 'FSIC', 'Danella Churches', 'IBERIABANK Corporation', 'San Lorenzo Avenue', 'Small-Business', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '16/01/2019', 'Danella Churches', '3', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(146, 'FSIC', 'Herold Duffitt', 'Texas Capital Bancshares, Inc.', 'San Lorenzo Avenue', 'Storage', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '17/01/2019', 'Herold Duffitt', '2', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(147, 'FSIC', 'Rebeca Pfiffer', 'Iridium Communications Inc', 'San Lorenzo Avenue', 'Assembly', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '18/01/2019', 'Rebeca Pfiffer', '2', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(148, 'FSIC', 'Ferdinande Meert', 'Urstadt Biddle Properties Inc.', 'San Lorenzo Avenue', 'Business-Office', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '19/01/2019', 'Ferdinande Meert', '1', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(149, 'FSIC', 'Zulema Castellone', 'Centrais Electricas Brasileiras S.A.- Eletrobras', 'San Lorenzo Avenue', 'Educational', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '20/01/2019', 'Zulema Castellone', '2', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(150, 'FSIC', 'Berget Solland', 'Crestwood Equity Partners LP', 'San Lorenzo Avenue', 'Mercantile', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '21/01/2019', 'Berget Solland', '8', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(151, 'FSIC', 'Jolene Feria', 'Kratos Defense & Security Solutions, Inc.', 'San Lorenzo Avenue', 'Small-Business', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '22/01/2019', 'Jolene Feria', '9', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(152, 'FSIC', 'Lauren Vedntyev', 'Commerce Union Bancshares, Inc.', 'San Lorenzo Avenue', 'Storage', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '23/01/2019', 'Lauren Vedntyev', '9', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(153, 'FSIC', 'Iago Avrahamoff', 'BB&T Corporation', 'Burgos Avenue', 'Assembly', 'Barangay 18', 'Building', '09085553776', 'Matt Murdockk', '24/01/2019', 'Iago Avrahamoff', '6', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(154, 'FSIC', 'Cinnamon Ridgewell', 'Famous Dave&#39;s of America, Inc.', 'Burgos Avenue', 'Business-Office', 'Barangay 18', 'Occupancy', '09085553776', 'Matt Murdockk', '25/01/2019', 'Cinnamon Ridgewell', '8', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(155, 'FSIC', 'Tarrah Deverale', 'Southern California Edison Company', 'Burgos Avenue', 'Educational', 'Barangay 18', 'Building', '09085553776', 'Matt Murdockk', '26/01/2019', 'Tarrah Deverale', '6', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(156, 'FSIC', 'Modesta Lory', 'Morgan Stanley', 'Burgos Avenue', 'Mercantile', 'Barangay 18', 'Occupancy', '09085553776', 'Matt Murdockk', '27/01/2019', 'Modesta Lory', '8', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(157, 'FSIC', 'Karil Bromage', 'Global Partner Acquisition Corp.', 'Burgos Avenue', 'Small-Business', 'Barangay 18', 'Building', '09085553776', 'Matt Murdockk', '28/01/2019', 'Karil Bromage', '1', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(158, 'FSIC', 'Tory Perelli', 'CU Bancorp (CA)', 'Burgos Avenue', 'Storage', 'Barangay 18', 'Occupancy', '09085553776', 'Matt Murdockk', '12/01/2019', 'Tory Perelli', '7', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(159, 'FSIC', 'Wren Ajean', 'LivePerson, Inc.', 'Burgos Avenue', 'Assembly', 'Barangay 18', 'Building', '09085553776', 'Matt Murdockk', '13/01/2019', 'Wren Ajean', '5', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(160, 'FSIC', 'Justine Spawforth', 'Under Armour, Inc.', 'Hernaez St.', 'Business-Office', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '14/01/2019', 'Justine Spawforth', '4', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(161, 'FSIC', 'Denys Loveridge', 'Western Union Company (The)', 'Alunan Avenue', 'Educational', 'Barangay 36', 'Building', '09085553776', 'Matt Murdockk', '15/01/2019', 'Denys Loveridge', '9', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(162, 'FSIC', 'Olav Abramowitz', 'Harvest Capital Credit Corporation', 'Quezon Avenue', 'Mercantile', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '12/01/2019', 'Olav Abramowitz', '10', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(163, 'FSIC', 'Cristiano Dormand', 'Lumentum Holdings Inc.', 'Hernaez St.', 'Small-Business', 'Barangay 36', 'Building', '09085553776', 'Matt Murdockk', '13/01/2019', 'Cristiano Dormand', '7', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(164, 'FSIC', 'Teddie Mourant', 'W&T Offshore, Inc.', 'Alunan Avenue', 'Storage', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '14/01/2019', 'Teddie Mourant', '4', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(165, 'FSIC', 'Benedetto Venneur', 'iShares MSCI Europe Financials Sector Index Fund', 'Quezon Avenue', 'Assembly', 'Barangay 36', 'Building', '09085553776', 'Matt Murdockk', '15/01/2019', 'Benedetto Venneur', '4', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(166, 'FSIC', 'Ulrick D\'Aubney', 'Gabelli Utility Trust (The)', 'Hernaez St.', 'Business-Office', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '16/01/2019', 'Ulrick D\'Aubney', '2', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(167, 'FSIC', 'Odette Whannel', 'Systemax Inc.', 'Alunan Avenue', 'Educational', 'Barangay 36', 'Building', '09085553776', 'Matt Murdockk', '17/01/2019', 'Odette Whannel', '5', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(168, 'FSIC', 'Codee Hargreves', 'Nuveen Floating Rate Income Opportuntiy Fund', 'Quezon Avenue', 'Mercantile', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '18/01/2019', 'Codee Hargreves', '7', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(169, 'FSIC', 'Biron Fautly', 'M III Acquisition Corp.', 'Hernaez St.', 'Small-Business', 'Barangay 36', 'Building', '09085553776', 'Matt Murdockk', '19/01/2019', 'Biron Fautly', '2', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(170, 'FSIC', 'Mac Smeed', 'Moleculin Biotech, Inc.', 'Rodriguez Avenue', 'Storage', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '20/01/2019', 'Mac Smeed', '7', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(171, 'FSIC', 'Dory Nower', 'Green Plains, Inc.', 'Rodriguez Avenue', 'Assembly', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '21/01/2019', 'Dory Nower', '10', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(172, 'FSIC', 'Dionysus Blancowe', 'eHi Car Services Limited', 'Rodriguez Avenue', 'Business-Office', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '22/01/2019', 'Dionysus Blancowe', '8', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(173, 'FSIC', 'Antons Najera', 'John Bean Technologies Corporation', '', 'Banahaw St.', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '23/01/2019', 'Antons Najera', '7', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm');
INSERT INTO `application` (`application_no`, `application_type`, `application_name`, `business_name`, `establishment_address`, `building_type`, `barangay_name`, `type_of_permit`, `cpnumb`, `croname`, `date_applied`, `owner_name`, `number_of_floors`, `lot_size`, `status`, `initial_requirements`, `assessment_status`, `month`, `year`, `date_created`) VALUES
(174, 'FSIC', 'Linette Kennally', '180 Degree Capital Corp.', '', 'Banahaw St.', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '24/01/2019', 'Linette Kennally', '3', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(175, 'FSIC', 'Jeannie Eles', 'Helix Energy Solutions Group, Inc.', '', 'Banahaw St.', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '25/01/2019', 'Jeannie Eles', '10', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(176, 'FSIC', 'Kristoffer Straine', 'Otelco Inc.', '', 'Banahaw St.', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '26/01/2019', 'Kristoffer Straine', '8', '43560', 'Pending', 'IniReq5,IniReq6,IniReq7,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(177, 'FSIC', 'Nerita Brookshaw', 'Triangle Capital Corporation', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '27/01/2019', 'Nerita Brookshaw', '2', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(178, 'FSIC', 'Sharia Barfford', 'MFS Municipal Income Trust', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '28/01/2019', 'Sharia Barfford', '7', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(179, 'FSIC', 'Krystal Debling', 'Columbus McKinnon Corporation', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '12/01/2019', 'Krystal Debling', '6', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(180, 'FSIC', 'Jermaine Denniston', 'H&E Equipment Services, Inc.', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '13/01/2019', 'Jermaine Denniston', '6', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(181, 'FSIC', 'Bird Handy', 'Anworth Mortgage Asset  Corporation', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '14/01/2019', 'Bird Handy', '8', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(182, 'FSIC', 'Marci Winser', 'Novavax, Inc.', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '15/01/2019', 'Marci Winser', '9', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(183, 'FSIC', 'Tam Seymark', 'Regions Financial Corporation', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '12/01/2019', 'Tam Seymark', '5', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(184, 'FSIC', 'Ede Branscomb', 'HealthSouth Corporation', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '13/01/2019', 'Ede Branscomb', '6', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(185, 'FSIC', 'Fremont Bates', 'Carrizo Oil & Gas, Inc.', '', 'Magsaysay Avenue', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '14/01/2019', 'Fremont Bates', '4', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(186, 'FSIC', 'Tobe Rawlings', 'Scripps Networks Interactive, Inc', '', 'Kanlaon St.', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '15/01/2019', 'Tobe Rawlings', '7', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(187, 'FSIC', 'Waylon Nevett', 'MagneGas Corporation', '', 'Lilya St.', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '16/01/2019', 'Waylon Nevett', '8', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(188, 'FSIC', 'Francoise Summersett', 'Entergy New Orleans, Inc.', '', 'Kanlaon St.', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '17/01/2019', 'Francoise Summersett', '10', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(189, 'FSIC', 'Nolan Garrick', 'Nuveen Minnesota Quality Municipal Income Fund', '', 'Lilya St.', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '18/01/2019', 'Nolan Garrick', '1', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(190, 'FSIC', 'Tammi Belbin', 'Eaton Corporation, PLC', '', 'Kanlaon St.', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '19/01/2019', 'Tammi Belbin', '5', '43560', 'Complete', 'IniReq5,IniReq6,IniReq7,IniReq8,', 'Unassessed', 'Feb', '2019', 'February 3, 2019 10:02 pm'),
(205, 'FSIC', 'Ailee Toppes', 'Credit Suisse AG', 'Magsaysay Ave', 'Assembly', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '2019-01-05', 'Ailee Toppes', '2', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '28/08/2018 16:56'),
(206, 'FSIC', 'Marie-ann MacCrackan', 'PLDT Inc.', 'Magsaysay Ave', 'Business-Office', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-02', 'Marie-ann MacCrackan', '6', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '27/08/2018 1:51'),
(207, 'FSIC', 'Hali Pauly', 'Blackrock MuniHoldings Fund, Inc.', 'Magsaysay Ave', 'Educational', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '2018-11-15', 'Hali Pauly', '1', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'November', '2018', '23/12/2018 16:46'),
(208, 'FSIC', 'Hakim Armer', 'HMN Financial, Inc.', 'Magsaysay Ave', 'Mercantile', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-10-24', 'Hakim Armer', '9', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '08/06/2018 3:45'),
(209, 'FSIC', 'Waly Mattsson', 'Restaurant Brands International Inc.', 'Magsaysay Ave', 'Small-Business', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '2018-06-28', 'Waly Mattsson', '10', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '18/03/2018 2:00'),
(210, 'FSIC', 'Anthea Francesch', 'VictoryShares Developed Enhanced Volatility Wtd ET', 'Magsaysay Ave', 'Storage', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-03-12', 'Anthea Francesch', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '17/07/2018 10:28'),
(211, 'FSIC', 'Trudie Spargo', 'Lake Shore Bancorp, Inc.', 'Magsaysay Ave', 'Assembly', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '2018-10-04', 'Trudie Spargo', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '06/10/2018 18:35'),
(212, 'FSIC', 'Keslie Handasyde', 'Motorcar Parts of America, Inc.', 'Magsaysay Ave', 'Business-Office', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-13', 'Keslie Handasyde', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '11/12/2018 12:28'),
(213, 'FSIC', 'Asa MacCauley', 'Equus Total Return, Inc.', 'Magsaysay Ave', 'Educational', 'Singcang-Airport', 'Building', '09085553776', 'Matt Murdockk', '2018-04-27', 'Asa MacCauley', '7', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '26/05/2018 22:53'),
(214, 'FSIC', 'Allen Raxworthy', 'China Automotive Systems, Inc.', 'Magsaysay Ave', 'Mercantile', 'Singcang-Airport', 'Occupancy', '09085553776', 'Matt Murdockk', '2019-01-13', 'Allen Raxworthy', '7', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Inspected', 'January', '2018', '26/08/2018 10:18'),
(215, 'FSIC', 'Diahann McVaugh', 'Jack In The Box Inc.', '15th St', 'Small-Business', 'Barangay 6', 'Building', '09085553776', 'Matt Murdockk', '2019-01-27', 'Diahann McVaugh', '7', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '05/12/2018 20:02'),
(216, 'FSIC', 'Jeannine Oddy', 'Pimco Income Opportunity Fund', '16th St', 'Storage', 'Barangay 6', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-10', 'Jeannine Oddy', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '11/08/2018 18:05'),
(217, 'FSIC', 'Bride MacNeely', 'ARI Network Services, Inc.', '17th St', 'Assembly', 'Barangay 6', 'Building', '09085553776', 'Matt Murdockk', '2018-08-23', 'Bride MacNeely', '4', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '06/03/2018 21:51'),
(218, 'FSIC', 'Erminia Brunetti', 'Great Ajax Corp.', '18th ST', 'Business-Office', 'Barangay 6', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-05-19', 'Erminia Brunetti', '1', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2018', '17/09/2018 22:58'),
(219, 'FSIC', 'Arabele Ponter', 'Pebblebrook Hotel Trust', '15th St', 'Educational', 'Barangay 6', 'Building', '09085553776', 'Matt Murdockk', '2018-12-26', 'Arabele Ponter', '2', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'December', '2019', '20/01/2019 23:51'),
(220, 'FSIC', 'Tab Hurworth', 'Countrywide Financial Corporation', '16th St', 'Mercantile', 'Barangay 6', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-05-31', 'Tab Hurworth', '10', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2019', '03/02/2019 5:26'),
(221, 'FSIC', 'Briny Lepard', 'Quidel Corporation', '17th St', 'Small-Business', 'Barangay 6', 'Building', '09085553776', 'Matt Murdockk', '2018-10-26', 'Briny Lepard', '8', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '29/05/2018 20:22'),
(222, 'FSIC', 'Carmel Andrich', 'Strayer Education, Inc.', '18th ST', 'Storage', 'Barangay 6', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-18', 'Carmel Andrich', '7', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '16/12/2018 3:51'),
(223, 'FSIC', 'Orson Scimone', 'The Chefs&#39; Warehouse, Inc.', '18th ST', 'Assembly', 'Barangay 6', 'Building', '09085553776', 'Matt Murdockk', '2019-01-03', 'Orson Scimone', '1', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '09/04/2018 3:45'),
(224, 'FSIC', 'Manda Surgener', 'VEREIT Inc.', 'Banahaw St', 'Business-Office', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-04-17', 'Manda Surgener', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '04/06/2018 7:22'),
(225, 'FSIC', 'Linus Gregoretti', 'Cidara Therapeutics, Inc.', 'Marapara St', 'Educational', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '2018-08-12', 'Linus Gregoretti', '10', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '15/03/2018 1:46'),
(226, 'FSIC', 'Arabele Konertz', 'CIT Group Inc (DEL)', 'Makilig St', 'Mercantile', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-14', 'Arabele Konertz', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '29/06/2018 1:45'),
(227, 'FSIC', 'Alden Winham', 'Sphere 3D Corp.', 'Banahaw St', 'Small-Business', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '2018-02-15', 'Alden Winham', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'February', '2018', '28/05/2018 20:21'),
(228, 'FSIC', 'Fields Ranshaw', 'Entergy Mississippi, Inc.', 'Marapara St', 'Storage', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-02-26', 'Fields Ranshaw', '5', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'February', '2018', '03/08/2018 1:41'),
(229, 'FSIC', 'Jaimie Sinton', 'Celanese Corporation', 'Makilig St', 'Assembly', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '2018-12-23', 'Jaimie Sinton', '4', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'December', '2018', '20/06/2018 9:16'),
(230, 'FSIC', 'Katinka Goodsall', 'BB&T Corporation', 'Banahaw St', 'Business-Office', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-10-23', 'Katinka Goodsall', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '25/08/2018 23:43'),
(231, 'FSIC', 'Kenton Shenley', 'CSI Compressco LP', 'Marapara St', 'Educational', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '2018-03-19', 'Kenton Shenley', '1', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '24/04/2018 11:28'),
(232, 'FSIC', 'Frederigo Perago', 'Global X SuperDividend Alternatives ETF', 'Makilig St', 'Mercantile', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-10-27', 'Frederigo Perago', '9', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '10/04/2018 19:57'),
(233, 'FSIC', 'Ulric Lorroway', 'Ingersoll-Rand plc (Ireland)', 'Banahaw St', 'Small-Business', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '2018-07-29', 'Ulric Lorroway', '1', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '23/09/2018 11:12'),
(234, 'FSIC', 'Annecorinne Gasnoll', 'Barnes & Noble Education, Inc', 'Marapara St', 'Storage', 'Villamonte', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-05-24', 'Annecorinne Gasnoll', '3', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2018', '08/02/2018 20:30'),
(235, 'FSIC', 'Karrah Yoxen', 'Liberty Global plc', 'Makilig St', 'Assembly', 'Villamonte', 'Building', '09085553776', 'Matt Murdockk', '2018-12-25', 'Karrah Yoxen', '10', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'December', '2018', '22/11/2018 23:54'),
(236, 'FSIC', 'Heinrik Grestie', 'Carrols Restaurant Group, Inc.', 'San Lorenzo Avenue', 'Business-Office', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-04', 'Heinrik Grestie', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '05/09/2018 7:08'),
(237, 'FSIC', 'Perla Tickel', 'Manchester United Ltd.', 'San Marcelino Ave', 'Educational', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '2018-10-13', 'Perla Tickel', '2', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '10/02/2018 22:45'),
(238, 'FSIC', 'Cherry Bushill', 'American Financial Group, Inc.', 'Santa Carolina Ave', 'Mercantile', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-12', 'Cherry Bushill', '1', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '19/03/2018 6:38'),
(239, 'FSIC', 'Krishna McSherry', 'WisdomTree Interest Rate Hedged High Yield Bond Fu', 'Santa Rita Ave', 'Small-Business', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '2018-10-15', 'Krishna McSherry', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '02/04/2018 0:10'),
(240, 'FSIC', 'Constantine Crips', 'Costamare Inc.', 'San Pedro', 'Storage', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-06', 'Constantine Crips', '7', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '16/08/2018 13:38'),
(241, 'FSIC', 'Rosamund Constable', 'Heico Corporation', 'San Juan St', 'Assembly', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '2018-09-05', 'Rosamund Constable', '1', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'September', '2018', '27/10/2018 0:41'),
(242, 'FSIC', 'Louis Hardbattle', 'Cemtrex Inc.', 'San Lorenzo Avenue', 'Business-Office', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-11', 'Louis Hardbattle', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '03/05/2018 5:25'),
(243, 'FSIC', 'Terrijo Polglaze', 'Moxian, Inc.', 'San Marcelino Ave', 'Educational', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '2018-04-19', 'Terrijo Polglaze', '6', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '28/03/2018 10:57'),
(244, 'FSIC', 'Tracee Cregin', 'Exact Sciences Corporation', 'Santa Carolina Ave', 'Mercantile', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-21', 'Tracee Cregin', '1', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '04/11/2018 10:14'),
(245, 'FSIC', 'Teddi De Roeck', 'Wells Fargo & Company', 'Santa Rita Ave', 'Small-Business', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '2018-08-28', 'Teddi De Roeck', '5', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '23/10/2018 8:00'),
(246, 'FSIC', 'Jere Greatex', 'Parker Drilling Company', 'San Pedro', 'Storage', 'Banago', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-05-09', 'Jere Greatex', '5', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2018', '25/04/2018 9:14'),
(247, 'FSIC', 'Jordan Fewkes', 'Foresight Energy LP', 'San Juan St', 'Assembly', 'Banago', 'Building', '09085553776', 'Matt Murdockk', '2018-08-01', 'Jordan Fewkes', '8', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '14/02/2018 19:52'),
(248, 'FSIC', 'Mallory Fakeley', 'Foundation Medicine, Inc.', 'Quezon Ave', 'Business-Office', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-11-30', 'Mallory Fakeley', '8', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'November', '2018', '22/02/2018 3:43'),
(249, 'FSIC', 'Derick McLugish', 'Renren Inc.', 'Hernaez St.', 'Educational', 'Barangay 36', 'Building', '09085553776', 'Matt Murdockk', '2018-05-06', 'Derick McLugish', '2', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2018', '01/11/2018 7:27'),
(250, 'FSIC', 'Quint Tuck', 'Marathon Oil Corporation', 'Alunan Ave', 'Mercantile', 'Barangay 36', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-28', 'Quint Tuck', '5', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '27/05/2018 18:02'),
(251, 'FSIC', 'Gay Brewitt', 'ReWalk Robotics Ltd', 'Rodriguez Ave', 'Small-Business', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-12-20', 'Gay Brewitt', '10', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'December', '2018', '08/06/2018 2:56'),
(252, 'FSIC', 'Pepi Tomkins', 'Hersha Hospitality Trust', 'Barangay 28', 'Storage', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-18', 'Pepi Tomkins', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2019', '16/01/2019 19:14'),
(253, 'FSIC', 'Elaina Hollerin', 'iShares MSCI ACWI Index Fund', 'Gonzaga St', 'Assembly', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-10-18', 'Elaina Hollerin', '6', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '01/04/2018 18:05'),
(254, 'FSIC', 'Roarke Lenthall', 'Rudolph Technologies, Inc.', 'Luzuriaga St', 'Business-Office', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-04-09', 'Roarke Lenthall', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '20/03/2018 10:12'),
(255, 'FSIC', 'Druci Conradsen', 'J P Morgan Chase & Co', 'Rodriguez Ave', 'Educational', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-02-20', 'Druci Conradsen', '8', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'February', '2018', '21/08/2018 17:34'),
(256, 'FSIC', 'Nicolis Gillmor', 'Sears Canada Inc. ', 'Barangay 28', 'Mercantile', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2019-01-06', 'Nicolis Gillmor', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '22/10/2018 7:29'),
(257, 'FSIC', 'Geoffrey Baly', 'USANA Health Sciences, Inc.', 'Gonzaga St', 'Small-Business', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-09-22', 'Geoffrey Baly', '4', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'September', '2018', '15/11/2018 13:57'),
(258, 'FSIC', 'Ezmeralda Demonge', 'Vina Concha Y Toro', 'Luzuriaga St', 'Storage', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-09', 'Ezmeralda Demonge', '9', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '21/03/2018 4:37'),
(259, 'FSIC', 'Dina Rankin', 'The Charles Schwab Corporation', 'Rodriguez Ave', 'Assembly', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-05-07', 'Dina Rankin', '5', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2019', '02/02/2019 5:25'),
(260, 'FSIC', 'Garreth Linn', 'Sears Holdings Corporation', 'Barangay 28', 'Business-Office', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-11-11', 'Garreth Linn', '9', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'November', '2018', '27/04/2018 9:50'),
(261, 'FSIC', 'Correy Goodliffe', 'Cambium Learning Group, Inc.', 'Gonzaga St', 'Educational', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-05-16', 'Correy Goodliffe', '8', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'May', '2018', '13/10/2018 18:00'),
(262, 'FSIC', 'Adelbert Glendining', 'AmTrust Financial Services, Inc.', 'Luzuriaga St', 'Mercantile', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-04-29', 'Adelbert Glendining', '6', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '27/07/2018 8:25'),
(263, 'FSIC', 'Joli Jimenez', 'Cyclacel Pharmaceuticals, Inc.', 'Rodriguez Ave', 'Small-Business', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2018-04-06', 'Joli Jimenez', '2', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '04/09/2018 7:07'),
(264, 'FSIC', 'Berget Kindley', 'Virtusa Corporation', 'Barangay 28', 'Storage', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-03-20', 'Berget Kindley', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '19/03/2018 13:30'),
(265, 'FSIC', 'Vanda Mattiassi', 'Wipro Limited', 'Gonzaga St', 'Assembly', 'Barangay 16', 'Building', '09085553776', 'Matt Murdockk', '2019-01-12', 'Vanda Mattiassi', '8', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '13/04/2018 13:54'),
(266, 'FSIC', 'Else Loveday', 'Pitney Bowes Inc.', 'Luzuriaga St', 'Business-Office', 'Barangay 16', 'Occupancy', '09085553776', 'Matt Murdockk', '2019-01-13', 'Else Loveday', '3', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '18/02/2018 18:07'),
(267, 'FSIC', 'Mona Zarfai', 'Dril-Quip, Inc.', 'Kanlaon St', 'Educational', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '2018-04-08', 'Mona Zarfai', '7', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '28/09/2018 12:34'),
(268, 'FSIC', 'Ninnetta Mattheissen', 'Fly Leasing Limited', 'Lilya St', 'Mercantile', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-06-12', 'Ninnetta Mattheissen', '4', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'June', '2018', '28/01/2019 6:46'),
(269, 'FSIC', 'Rayna Mussared', 'Spok Holdings, Inc.', 'Herminia St', 'Small-Business', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '2019-01-08', 'Rayna Mussared', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '14/06/2018 8:56'),
(270, 'FSIC', 'Ailis Sabater', 'OvaScience Inc.', 'Mount Makiling St', 'Storage', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-03-25', 'Ailis Sabater', '8', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '11/09/2018 3:47'),
(271, 'FSIC', 'Carlee Delamar', 'Marathon Oil Corporation', 'Kanlaon St', 'Assembly', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '2018-03-15', 'Carlee Delamar', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '12/07/2018 15:25'),
(272, 'FSIC', 'Nickola Borrington', 'Landstar System, Inc.', 'Lilya St', 'Business-Office', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-03-14', 'Nickola Borrington', '1', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '31/01/2019 6:18'),
(273, 'FSIC', 'Bing Copnall', 'Nuveen AMT-Free Quality Municipal Income Fund', 'Herminia St', 'Educational', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '2018-10-13', 'Bing Copnall', '10', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '20/04/2018 4:32'),
(274, 'FSIC', 'Rosamond Jerrold', 'Lions Gate Entertainment Corporation', 'Mount Makiling St', 'Mercantile', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-02-15', 'Rosamond Jerrold', '5', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'February', '2018', '28/11/2018 14:23'),
(275, 'FSIC', 'Clement Benion', 'Clean Energy Fuels Corp.', 'Kanlaon St', 'Small-Business', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '2019-01-16', 'Clement Benion', '9', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '08/10/2018 3:23'),
(276, 'FSIC', 'Jud Kirckman', 'Live Oak Bancshares, Inc.', 'Lilya St', 'Storage', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-10-14', 'Jud Kirckman', '6', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '02/11/2018 2:22'),
(277, 'FSIC', 'Huberto Loddy', 'Delcath Systems, Inc.', 'Herminia St', 'Assembly', 'Bata', 'Building', '09085553776', 'Matt Murdockk', '2018-02-11', 'Huberto Loddy', '10', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'February', '2018', '03/10/2018 23:53'),
(278, 'FSIC', 'Holly Wrotham', 'Royce Value Trust, Inc.', 'Mount Makiling St', 'Business-Office', 'Bata', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-26', 'Holly Wrotham', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '03/02/2018 17:57'),
(279, 'FSIC', 'Derick Sargeant', 'PowerShares Nasdaq Internet Portfolio', 'Balboa St', 'Educational', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2019-01-25', 'Derick Sargeant', '9', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '17/07/2018 16:25'),
(280, 'FSIC', 'Jordana Tenpenny', 'Alamo Group, Inc.', 'Marganta St', 'Mercantile', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-12-16', 'Jordana Tenpenny', '1', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'December', '2018', '18/10/2018 22:44'),
(281, 'FSIC', 'Colby Roggers', 'Tallgrass Energy GP, LP', 'Sta Clara St', 'Small-Business', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2018-07-26', 'Colby Roggers', '8', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '04/06/2018 14:18'),
(282, 'FSIC', 'Bernice Chadwyck', 'VelocityShares 3x Inverse Gold ETN', 'Bugnay Road', 'Storage', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-08-20', 'Bernice Chadwyck', '3', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '05/09/2018 2:36'),
(283, 'FSIC', 'Jessa Neillans', 'Wheeler Real Estate Investment Trust, Inc.', 'Balboa St', 'Assembly', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2018-02-16', 'Jessa Neillans', '5', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'February', '2018', '15/11/2018 23:42'),
(284, 'FSIC', 'Rudd Vogele', 'Aflac Incorporated', 'Marganta St', 'Business-Office', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-11-12', 'Rudd Vogele', '10', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'November', '2018', '09/03/2018 16:59'),
(285, 'FSIC', 'Temple Dmitr', 'Cowen Inc.', 'Sta Clara St', 'Educational', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2018-09-25', 'Temple Dmitr', '5', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'September', '2018', '02/11/2018 21:36'),
(286, 'FSIC', 'Marja Rodgier', 'Meridian Waste Solutions, Inc', 'Bugnay Road', 'Mercantile', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-08-26', 'Marja Rodgier', '8', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '17/12/2018 1:05'),
(287, 'FSIC', 'Ingunna Dioniso', 'Caleres, Inc.', 'Balboa St', 'Small-Business', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2018-08-17', 'Ingunna Dioniso', '7', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '13/08/2018 19:45'),
(288, 'FSIC', 'Jackquelin Lindsley', 'American Railcar Industries, Inc.', 'Marganta St', 'Storage', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-08-18', 'Jackquelin Lindsley', '8', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '11/05/2018 13:12'),
(289, 'FSIC', 'Bart Nielson', 'Seanergy Maritime Holdings Corp', 'Sta Clara St', 'Assembly', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2018-11-17', 'Bart Nielson', '7', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'November', '2018', '28/03/2018 17:20'),
(290, 'FSIC', 'Patience Selwyne', 'Verastem, Inc.', 'Bugnay Road', 'Business-Office', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-04-24', 'Patience Selwyne', '10', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'April', '2018', '10/11/2018 9:17'),
(291, 'FSIC', 'Drud Maddick', 'Weyco Group, Inc.', 'Balboa St', 'Educational', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2019-01-23', 'Drud Maddick', '2', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'January', '2018', '18/10/2018 0:29'),
(292, 'FSIC', 'Jyoti Gelland', 'AmTrust Financial Services, Inc.', 'Marganta St', 'Mercantile', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-08-18', 'Jyoti Gelland', '1', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '23/02/2018 0:15'),
(293, 'FSIC', 'Cary Tyt', 'IRIDEX Corporation', 'Sta Clara St', 'Small-Business', 'Mandalagan', 'Building', '09085553776', 'Matt Murdockk', '2018-10-29', 'Cary Tyt', '7', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '02/02/2019 14:22'),
(294, 'FSIC', 'Dael Frude', 'CSX Corporation', 'Bugnay Road', 'Storage', 'Mandalagan', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-07-16', 'Dael Frude', '2', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'July', '2018', '24/10/2018 1:01'),
(295, 'FSIC', 'Liliane Frizell', 'First Trust Large Cap Core AlphaDEX Fund', 'Emerald St', 'Assembly', 'Taculing', 'Building', '09085553776', 'Matt Murdockk', '2018-10-06', 'Liliane Frizell', '9', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '24/11/2018 16:43'),
(296, 'FSIC', 'Elinor Beneteau', 'MarineMax, Inc.', 'Celia Ave', 'Business-Office', 'Taculing', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-09-06', 'Elinor Beneteau', '6', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'September', '2018', '28/05/2018 5:20'),
(297, 'FSIC', 'Mikaela Farraway', 'Nanometrics Incorporated', 'St Peter Ave', 'Educational', 'Taculing', 'Building', '09085553776', 'Matt Murdockk', '2018-10-29', 'Mikaela Farraway', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '17/07/2018 9:56'),
(298, 'FSIC', 'Leland Inman', 'Adobe Systems Incorporated', 'Don Jose St', 'Mercantile', 'Taculing', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-10-11', 'Leland Inman', '10', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'October', '2018', '28/10/2018 19:50'),
(299, 'FSIC', 'Karia Lergan', 'Verso Corporation', 'Emerald St', 'Small-Business', 'Taculing', 'Building', '09085553776', 'Matt Murdockk', '2018-12-13', 'Karia Lergan', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'December', '2018', '10/11/2018 15:34'),
(300, 'FSIC', 'Julia Henrionot', 'Allot Communications Ltd.', 'Celia Ave', 'Storage', 'Taculing', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-08-26', 'Julia Henrionot', '7', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '26/04/2018 1:46'),
(301, 'FSIC', 'Lory Smees', 'Carnival Corporation', 'St Peter Ave', 'Assembly', 'Taculing', 'Building', '09085553776', 'Matt Murdockk', '2018-09-04', 'Lory Smees', '3', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'September', '2018', '02/11/2018 18:44'),
(302, 'FSIC', 'Hillie Kettleson', 'FlexShares STOXX Global ESG Impact Index Fund', 'Don Jose St', 'Business-Office', 'Taculing', 'Occupancy', '09085553776', 'Matt Murdockk', '2018-08-20', 'Hillie Kettleson', '7', '45,658', 'Complete', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'August', '2018', '18/08/2018 14:05'),
(303, 'FSIC', 'Shauna Lathbury', 'iShares 20+ Year Treasury Bond ETF', 'Emerald St', 'Educational', 'Taculing', 'Building', '09085553776', 'Matt Murdockk', '2018-03-06', 'Shauna Lathbury', '9', '45,658', 'Pending ', 'IniReq5,IniReq6,IniReq8,', 'Unassessed', 'March', '2018', '09/09/2018 1:38'),
(304, 'FSEC', 'Lebron James', 'Lebron Industry', 'Mahogany St', 'Educational', 'Mansilingan', 'NA', '09275757024', 'Matt Murdockk', '2019-02-01', 'Lebron James', '3', '500', 'Complete', 'IniReq1,IniReq2,IniReq3,IniReq4,', 'Unassessed', 'Feb', '2019', 'February 4, 2019 2:07 am');

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
(1, '1', 'Shamus Munks', '524 Sunbrook Pass', 'Select', 'Renewable Energy Group, Inc.', 'FSEC', '70', '2', '6', '8', '1.2', '2.3000000000000003', '44', '55', '900', '10000', '11088.5', '1000', 0, 'Dec', '2018', 'December 13, 2018 11:22 pm', 'Joy Villanueva'),
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
(47, '109', 'Kenneth Cayetano', 'Hells Kitchen', 'Complete', 'Attorney Firm', 'FSEC', '123.456', '12.345600000000001', '2469.12', '2469.12', '2469.12', '0', '0', '211', '322', '123', '8199.16', '10000', 1800.84, 'Jan', '2019', 'January 23, 2019 1:31 am', 'Justin D. Puatu'),
(48, '5', 'Kenneth Cayetano', 'Magsungay', 'Complete', 'Printing', 'FSIC', '0.7000000000000001', '0.07', '14', '14', '14', '140', '700', '700', '700', '700', '2982.77', '3000', 17.23, 'Feb', '2019', 'February 4, 2019 1:54 am', ''),
(49, '116', 'Augusto Kristiansen', 'St Peter Ave', 'Complete', 'Sun Communities, Inc.', 'FSEC', '5.555', '0.5555', '4.68', '2.46', '2.46', '443.40000000000003', '123', '232', '55', '34', '903.11', '1000', 96.89, 'Feb', '2019', 'February 4, 2019 2:34 am', ''),
(50, '117', 'Maribel Beverage', 'Don Jose St', 'Complete', 'Pier 1 Imports, Inc.', 'FSEC', '4.214', '0.0123', '0.46', '6.66', '2.46', '6.4', '12', '54', '311', '123', '520.21', '700', 179.79, 'Feb', '2019', 'February 4, 2019 2:35 am', ''),
(51, '118', 'Nonie Bagshaw', 'Emerald St', 'Complete', 'Bio-Rad Laboratories, Inc.', 'FSEC', '32.423', '0.024200000000000003', '84.68', '884.6800000000001', '4.68', '6.4', '234', '232', '121', '231', '1830.89', '2000', 169.11, 'Feb', '2019', 'February 4, 2019 2:36 am', ''),
(52, '214', 'Allen Raxworthy', 'Magsaysay Ave', 'Select', 'China Automotive Systems, Inc.', 'FSIC', '0.7000000000000001', '0.07', '14', '14', '14', '140', '231', '123', '443', '324', '1303.77', '1500', 196.23, 'Feb', '2019', 'February 4, 2019 12:20 pm', 'Joy Villanueva');

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
(59, 'Inspector', 'SF01', 'Jessica', 'Ole', 'Jones', 'inspector12', 'Inspector101', 'Inspector101', '4', 'February 4, 2019 1:42 am');

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
(1, 'IO-2019-01-1', '2019-01-27', 'jan2', '500', 'Computer Repair', 'Sum-ag', '30', '95', '72', 'Jan-15-2019', 'Jan', '2019', 'Inspection Report', 'Puatu', 'Amazing', 'Race', 'High', 'Low', 'Steal', 'Borrow	', 'Shock', 'for certification', ''),
(4, 'IO-2019-01-2', '2019-01-38', ' Claudia Jelk', 'Blck 16, North East Village', 'Zoetis Inc.', '12 Charing Cross Alley', '2', '180000', '3', 'Jan-18-2019', 'Jan', '2019', 'Inspection Report', 'Hello World', 'Hello World', 'Hello World', 'Hello World', 'Hello World', 'Hello World', 'NA', 'NA', 'for certification', ''),
(5, 'IO-2019-01-5', '2019-01-39', ' Octavius', 'Blck 16, North East Village', 'CBAK Energy Technology, Inc.', '138 Mariners Cove Hill', '13131', '60000', '5', 'Jan-18-2019', 'Jan', '2019', 'Inspection Report', 'wqeqwqw', 'status_of_checklist', 'status_of_checklist', 'status_of_checklist', 'status_of_checklist', 'NA', 'NA', 'NA', 'for certification', ''),
(6, 'IO-2019-01-6', '2019-01-40', ' Sanni', '5000', 'Northfield Bancorp, Inc.', '80 Hudson Hill', '131', '140000', '6', 'Jan-18-2019', 'Jan', '2019', 'Inspection Report', 'message2', 'message2', 'NA', 'NA', 'NA', 'NA', 'message2', 'message2', 'issued NTCV', ''),
(7, 'IO-2019-01-7', '', ' Elmer', '2000', 'Uno-r', 'Bacolod', '2000', '180000', '5', 'Jan-20-2019', 'Jan', '2019', 'Inspection Report', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'issued NTCV', ''),
(8, 'IO-2019-01-8', '2019-01-54', 'LJEE', 'hello world ', 'DAnceteck', '80 Hudson Hill', '25', '60000', '1', 'Jan-20-2019', 'Jan', '2019', 'Inspection Report', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'hello world ', 'for certification', ''),
(9, 'IO-2019-01-9', '2019-01-53', ' Kenny', 'San Enrique', 'Seventh Heaven', '80 Hudson Hill', '76', '60000', '1', 'Jan-22-2019', 'Jan', '2019', 'Inspection Report', 'Pallor', 'colon cancer', 'imbalanced gut flora', 'Crohnâ€™s disease', 'celiac disease', 'NA', 'NA', 'NA', 'for compliance', 'Clark Berja'),
(10, 'IO-2019-02-10', '2018-01-214', 'Allen Raxworthy', 'Blck 16, North East Village', 'China Automotive Systems, Inc.', 'Magsaysay Ave', '211', '45,658', '7', 'Feb-04-2019', 'Feb', '2019', 'Inspection Report', 'CISCO 4', 'NAT', 'PAT', 'SAT', 'DAT', 'OVERLOAD', 'SATA', 'PATA', 'for certification', 'Nathaniel Deguzman');

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
(2, 'IO-2019-01-2', 'Cardo', '2019-01-01', '12:12', 'January 16, 2019 - 10:53 pm', 'Jan', '2019', 'Pending'),
(3, 'IO-2019-01-3', 'Vincent', '2019-01-31', '13:59', 'January 22, 2019 - 12:17 am', 'Jan', '2019', 'Pending'),
(4, 'IO-2019-02-10', 'Joy Villanueva', 'February 20, 2019', '15:33', 'February 4, 2019 - 1:56 am', 'Feb', '2019', 'Pending');

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
(1, 'Correct Violation', '4.00', 'jan2', 'Vincent', 'Computer Repairs', '2019-01-18', 'IO-2019-01-1', '2019-01-7', 'IO-2019-01-1', 'Sum-aganon', '2019-01-01', '2019-01-20', 'Jan', '2019', ''),
(2, 'Correct Violation', '4.00', 'jan2', 'Cardo', 'Computer Repair', '7', 'IO-2019-01-1', '2019-01-7', 'IO-2019-01-1', 'Sum-ag', '2019-01-28', '2019-01-22', 'Jan', '2019', ''),
(3, 'Correct Violation', '123123', 'jan2', '', 'Computer Repair', '2019-01-18', 'IO-2019-01-1', '2019-01-7', 'IO-2019-01-1', 'Sum-ag', '2019-01-28', '2019-01-29', 'Jan', '2019', ''),
(4, 'Correct Violation', '2', ' Claudia Jelk', '', 'Zoetis Inc.', '2019-01-01', 'IO-2019-01-4', '2019-01-38', 'IO-2019-01-2', '12 Charing Cross Alley', '2019-01-31', '2019-02-01', 'Feb', '2019', 'checklist1,checklist2,checklist3,checklist4,checklist15,checklist6,'),
(5, 'Correct Violation', '121', ' Octavius', '', 'CBAK Energy Technology, Inc.', '2019-01-23', 'IO-2019-01-5', '2019-01-3', 'IO-2019-01-5', '138 Mariners Cove Hill', '2019-01-31', '2019-01-31', 'Jan', '2019', ''),
(6, 'Correct Violation', '5000', ' Sanni', 'Dalisay', 'Northfield Bancorp, Inc.', '2019-01-22', 'IO-2019-01-6', '2019-01-4', 'IO-2019-01-6', '80 Hudson Hill', '2019-01-29', '2019-01-30', 'Feb', '2019', 'checklist1,checklist2,checklist3,checklist4,checklist15,checklist6,'),
(7, 'Correct Violation', '5000', 'LJEE', 'Dalisay', 'DAnceteck', '2019-01-21', 'IO-2019-02-8', '2019-02-54', 'IO-2019-01-8', '80 Hudson Hill', '2019-03-04', '2019-02-17', 'Feb', '2019', ' '),
(8, 'Correct Violation', '555', ' Elmer', 'Saxon Apedaile', 'Uno-r', '2019-01-29', 'IO-2019-02-7', '2019-02-', 'IO-2019-01-7', 'Bacolod', '2019-02-25', '2019-02-25', 'Feb', '2019', ' ');

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
(30, '5', 'Kenneth Cayetano', '09474298815', 'Mr/Ms Kenneth Cayetano your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 1:54 am'),
(31, '116', 'Augusto Kristiansen', '09275757024', 'Mr/Ms Augusto Kristiansen your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 2:34 am'),
(32, '117', 'Maribel Beverage', '09275757024', 'Mr/Ms Maribel Beverage your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 2:35 am'),
(33, '118', 'Nonie Bagshaw', '09275757024', 'Mr/Ms Nonie Bagshaw your assessment was successfully verified. In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Assessment', 'February 4, 2019 2:36 am'),
(34, '214', 'Allen Raxworthy', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Allen Raxworthy you have passed the inspection and your application is ready for clearance.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 12:21 pm'),
(35, '214', 'Allen Raxworthy', '09085553776', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Allen Raxworthy you have passed the inspection and your application is ready for clearance.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Inspection', 'February 4, 2019 12:23 pm'),
(36, '2019-01-38', ' Claudia Jelk', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Claudia Jelkthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 1:04 pm'),
(37, '54', 'LJEE', '09275757024', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  LJEE you have passed the inspection and your application is ready for clearance.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 1:04 pm'),
(38, '2019-01-38', ' Claudia Jelk', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you   Claudia Jelk you have passed the inspection and your application is ready for clearance.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 1:05 pm'),
(39, '2019-01-4', ' Sanni', '<br />\r\n<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />\r\n', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Sannithat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.', 'Issue Notice', 'February 4, 2019 1:15 pm'),
(40, '', ' Elmer', '', 'We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Elmerthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.  In case of Emergency please contact 117 or 434-5022 or 434-5023. ', 'Issue Notice', 'February 4, 2019 1:18 pm');

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
(1, 'cro101', 'CROadmin101', 'Matt', 'Murdockk', 'February 4, 2019, 3:29 pm', 'CRO', 'Active'),
(4, 'admin101', 'admin101', 'Kenneth', 'Canlog', 'January 27, 2019, 12:04 am', 'employee', 'Active'),
(5, 'admin1234', 'admin1234', 'Clark', 'KE', 'January 29, 2019, 10:40 pm', 'Assessor', 'Active'),
(6, 'assessor101', 'Assessor101', 'Joy', 'Villanueva', 'February 4, 2019, 12:19 pm', 'Assessor', 'Active'),
(7, 'inspectioncro101', 'InspectionCro101', 'Nathaniel', 'Deguzman', 'February 4, 2019, 12:19 pm', 'Inspection-CRO', 'Active'),
(8, 'eval101', 'eval0119', 'Dennzel', 'Busquets', 'February 3, 2019, 7:45 pm', 'Evaluator', 'Active'),
(9, 'inspector12', 'Inspector101', 'Jessica', 'Jones', 'February 4, 2019, 1:43 am', 'Inspector', 'Active');

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
  MODIFY `application_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ops_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `evaluation_checklist`
--
ALTER TABLE `evaluation_checklist`
  MODIFY `checklist_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `ir_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inspection_schedule`
--
ALTER TABLE `inspection_schedule`
  MODIFY `io_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspectors`
--
ALTER TABLE `inspectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issue_notice`
--
ALTER TABLE `issue_notice`
  MODIFY `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `1` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
