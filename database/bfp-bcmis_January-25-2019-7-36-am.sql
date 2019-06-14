DROP TABLE application;

CREATE TABLE `application` (
  `application_no` int(20) NOT NULL AUTO_INCREMENT,
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
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`application_no`)
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

INSERT INTO application VALUES("1","FSEC","Shamus Munks","Renewable Energy Group, Inc.","524 Sunbrook Pass","Assembly","Barangay 5","NA","09474298815","","December 13, 2018 2:31 am","clarkcan2018","8080","Shamus Munks","4","100,000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("2","FSEC","Alexandre Calleja","Bay Bancorp, Inc.","10514 Katie Alley","Small-Business","Barangay 7","NA","09474298815","","December 13, 2018 2:33 am","alexandre_call","1234","Alexandre Calleja","6","20000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("3","FSEC","Norris Maestro","Acacia Research Corporation","7 Fallview Point","Educational","Barangay 1","NA","09474298815","","December 13, 2018 2:36 am","norris_mae","8080","Norris Maestro","3","50000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("4","FSEC","Marylin Klampk","Allstate Corporation (The)","546 Luster Circle","Mercantile","Banago","NA","09474298815","","December 13, 2018 2:38 am","mary_klampk","8080","Marylin Klampk","3","100,000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("5","FSEC","Ives Tassell","Chart Industries, Inc.","1249 Ludington Place","Business-Office","Barangay 3","NA","09474298815","","December 13, 2018 2:40 am","ive_ras","8080","Ives Tassell","4","20000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("6","FSEC","Gay Barnet","Fortinet, Inc.","777 Drewry Center","Small-Business","Barangay 28","NA","09474298815","","December 13, 2018 2:42 am","gayass","8080","Gay Barnet","4","50000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("7","FSEC","Alain Palluschek","Elbit Systems Ltd.","62664 Barnett Lane","Storage","Barangay 4","NA","09474298815","","December 13, 2018 2:46 am","dsdsd","8080","Alain Palluschek","3","20000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Evaluated","Dec","2018");
INSERT INTO application VALUES("8","FSEC","Angie Kondratovich","Navigator Holdings Ltd.","8 Bobwhite Avenue","Small-Business","Barangay 3","NA","09474298815","","December 13, 2018 2:48 am","akondratovich0","8080","Angie Kondratovich","6","20000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Dec","2018");
INSERT INTO application VALUES("9","FSEC","Jenine Crangle","Wells Fargo & Company","4138 Barnett Avenue","Small-Business","Barangay 1","NA","09474298815","","December 13, 2018 2:50 am","jcrangle1","8080","Jenine Crangle","6","100,000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Dec","2018");
INSERT INTO application VALUES("10","FSEC","Maegan Badham","CRA International,Inc.","17 Graedel Road","Mercantile","Barangay 1","NA","09474298815","","December 13, 2018 2:53 am","mbadham2","8080","Maegan Badham","6","100,000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Dec","2018");
INSERT INTO application VALUES("11","FSIC","Melodie Brosenius","Templeton Global Income Fund, Inc.","91999 Oriole Crossing","Business-Office","Barangay 2","Building","09474298815","","December 13, 2018 7:54 pm","mbrosenius3","8080"," Melodie Brosenius","5","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("12","FSIC","Constantia Armall","Northfield Bancorp, Inc.","80 Hudson Hill","Small-Business","Barangay 35","Building","09474298815","","December 13, 2018 7:55 pm","carmall4","8080"," Constantia Armall","6","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("13","FSIC","Irwinn Bushell","Ichor Holdings","8 Hazelcrest Center","Educational","Banago","Occupancy","09474298815","","December 13, 2018 7:56 pm","ibushell5","8080"," Irwinn Bushell","6","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("14","FSIC","Bettye Tapping","Zoetis Inc.","585 Cardinal Point","Business-Office","Barangay 18","Occupancy","09474298815","","December 13, 2018 7:58 pm","btappinga","8080"," Bettye Tapping","5","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("15","FSIC","Marrilee Cattini","CBAK Energy Technology, Inc.","3860 Oriole Plaza","Small-Business","Barangay 6","Building","09474298815","","December 13, 2018 7:59 pm","mcattinib","8080"," Bettye Tapping","6","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("16","FSIC","Ajay Espinos","NewStar Financial, Inc.","83589 Muir Street","Storage","Barangay 3","Building","09474298815","","December 13, 2018 8:00 pm","aespinosc","8080"," Melodie Brosenius","5","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("17","FSIC","Jamaal Petkov","First Trust NASDAQ-100 Ex-Technology Sector Index ","82272 Everett Point","Business-Office","Barangay 2","Building","09474298815","","December 13, 2018 10:25 pm","jpetkovrr","8080","Jamaal Petkov ","4","180000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("18","FSEC","Gabey Ruoss","Taylor Devices, Inc.","138 Mariners Cove Hill","Assembly","Barangay 24","NA","09474298815","","December 13, 2018 10:27 pm","gruossrq","8080","Gabey Ruoss","4","60000","Pending","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Dec","2018");
INSERT INTO application VALUES("19","FSIC","Maria Umbert","CBAK Energy Technology, Inc.","8 Hazelcrest Center","Small-Business","Barangay 4","Building","09474298815","","December 13, 2018 10:29 pm","clarkcan2018","8080"," Melodie Brosenius","6","180000","Pending","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Unassessed","Dec","2018");
INSERT INTO application VALUES("20","FSIC","Constantia Armall","Templeton Global Income Fund, Inc.","80 Hudson Hill","Assembly","Barangay 18","Building","09474298815","","December 13, 2018 10:29 pm","clarkcan2018","8080"," Irwinn Bushell","4","60000","Pending","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Unassessed","Dec","2018");
INSERT INTO application VALUES("21","FSIC","Irwinn Bushell","Zoetis Inc.","3860 Oriole Plaza","Business-Office","Barangay 29","Building","09474298815","","December 13, 2018 10:30 pm","clarkcan2018","8080"," Constantia Armall","4","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Dec","2018");
INSERT INTO application VALUES("22","FSEC","Maeryger D. Gomez","Medical Clinic","Menlo 4","Business-Office","Barangay 18","NA","09474298815","croname","January 5, 2019 3:39 pm","clarkcan2018","8080","Maeryger D. Gomez","3","75","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("23","FSEC","Juro Kazuhiko","Nigger Corp","Niggeria","Storage","Barangay 37 ","NA","09474298815","Kenneth","January 10, 2019 6:07 pm","JRUKAZ","8080","Juro","6","140000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("24","FSEC","Ignacio Branton","Zoetis Inc.","Niggeria","Mercantile","","NA","09474298815","Sergent","January 10, 2019 9:58 pm","iggy97","8080","Ignacio","5","140000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("25","FSEC","Cleveland Bartzen","Nba","80 Hudson Hill","Assembly","Barangay 14","NA","09474298815","Sergent","January 10, 2019 10:02 pm","clarkcan2018","8080","Bart Simpson","4","180000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("26","FSEC","Kellia Penniel","Taiga Inc","Tokyo","Mercantile","Barangay 4","NA","09474298815","Kenneth","January 10, 2019 11:52 pm","kelpen","8080","kelly","6","140000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("27","FSEC","Casey Rappa","Dragon Corp","27 Alunan Avenue","Business-Office","Barangay 28","NA","09474298815","Sergent","January 14, 2019 10:46 pm","casrap","123456","Casey Rappa","3","60000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("28","FSEC","Marc Iannuzzi","miannuzzi1@ox.ac.uk","548 Dawn Court","Educational","Barangay 19","NA","09474298815","Kenneth","January 14, 2019 11:50 pm","marclan","123456","Mark","3","10000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Assessed","Jan","2019");
INSERT INTO application VALUES("29","FSEC","Raye Beausang","Nauzene ","83589 Muir Street","Business-Office","Barangay 8","NA","09474298815","Kenneth","January 14, 2019 11:51 pm","rbeausang2","123456"," Melodie Brosenius","4","140000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("30","FSEC","Chauncey Prendiville","Chance store","51 Buell Park","Mercantile","Barangay 2","NA","09474298815","Sergent","January 14, 2019 11:53 pm","chanpren","123456","Chance","2","110000","0","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("31","FSEC","Dunn Cann","Lazada","3860 Oriole Plaza","Mercantile","Barangay 35","NA","09474298815","Kenneth","January 15, 2019 12:30 am","dunkcan","123456","DanCan","6","150000","0","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("32","FSEC","Justin Christian Puatu","iFixit","Alunan Avenue 15-C","Small-Business","Barangay 35","NA","09474298815","Marian","January 15, 2019 12:34 am","jcpuatu","casiof91w","Justin Christian Puatu","3","140000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("33","FSEC","Clark Jr. Canlog","PhoneBiz","Magsungay","Small-Business","Handumanan","NA","09474298815","Leslie","January 15, 2019 12:38 am","clarkcanlog97","123456","Clark Jr. Canlog","1","140000","Pending","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("34","FSEC","Kenneth Cayetano","Grab Inc","80 Hudson Hill","Mercantile","Barangay 15","NA","09474298815","Maryger","January 15, 2019 12:43 am","kencay","123456","Kenneth Cayetano","4","100,000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("35","FSEC","John Rey Gamotin","PhoneBiz","Talisay","Small-Business","Barangay 40","NA","09474298815","Laika","January 15, 2019 12:48 am","jrgame","123456","John Rey","3","100,000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("36","FSEC","Kurt Mayang Barrioga","KurtoSan","3860 Oriole Plaza","Small-Business","Barangay 15","NA","09474298815","Mary Jane","January 15, 2019 12:59 am","kurt","123456"," Irwinn Bushell","6","180000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("37","FSEC","Miles Morales","SevenWebHeads","New York","Mercantile","Barangay 3","NA","09474298815","gwen","January 15, 2019 1:02 am","spider","123456","Miles","1","60000","Complete","IniReq1,IniReq2,IniReq3,IniReq4,","Unassessed","Jan","2019");
INSERT INTO application VALUES("38","FSIC","Claudia Jelk","Zoetis Inc.","12 Charing Cross Alley","Business-Office","Barangay 18","Occupancy","09474298815","croname","January 15, 2019 5:31 pm","claudiajek","123456"," Claudia Jelk","3","180000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Jan","2019");
INSERT INTO application VALUES("39","FSIC","Octavius Kenealy","CBAK Energy Technology, Inc.","138 Mariners Cove Hill","Educational","Barangay 4","Building","09474298815","croname","January 15, 2019 5:43 pm","octakenealy","123456"," Octavius","5","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Jan","2019");
INSERT INTO application VALUES("40","FSIC","Sanni Legodinec","Northfield Bancorp, Inc.","80 Hudson Hill","Business-Office","Banago","Building","09474298815","croname","January 15, 2019 5:47 pm","sannidell","123456"," Sanni","6","140000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Jan","2019");
INSERT INTO application VALUES("41","FSIC","Fifi Milberg","Nigger Corp","83589 Muir Street","Storage","Barangay 3","Occupancy","09474298815","croname","January 15, 2019 5:49 pm","fififufu","123456","Fifi","3","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("42","FSIC","Amy Roder","Zoetis Inc.","3860 Oriole Plaza","Small-Business","Barangay 3","Building","09474298815","croname","January 15, 2019 5:52 pm","amydar","123456"," Amy Roder","1","110000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("43","FSIC","Stinky Dikvenet","REcr","80 Hudson Hill","Storage","Barangay 3","Building","09474298815","croname","January 15, 2019 5:55 pm","stink","123456"," Styinky","5","140000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("44","FSIC","Noelle Emerie","Nigger Corp","3860 Oriole Plaza","Small-Business","Barangay 4","Building","09474298815","croname","January 15, 2019 5:56 pm","noel","123456","noelle","6","180000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("45","FSIC","Dawn Arsenal","Pinkblow","80 Hudson Hill","Mercantile","Barangay 3","Occupancy","09474298815","croname","January 15, 2019 5:57 pm","dawn","123456"," Dawn","4","140000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("46","FSIC","Leodora Marchant","Taylor Devices, Inc.","138 Mariners Cove Hill","Small-Business","Barangay 2","Occupancy","09474298815","croname","January 15, 2019 5:59 pm","leo","123456","Leod","6","140000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("47","FSIC","Rochelle Tano","Adadda","3860 Oriole Plaza","Mercantile","Barangay 2","Building","09474298815","croname","January 15, 2019 6:00 pm","joy","123456","Rochelle","3","140000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("48","FSIC","Renz Owen","Nba","3860 Oriole Plaza","Assembly","Barangay 27","Building","09474298815","croname","January 15, 2019 6:01 pm","renzown","123456"," Renz","1","180000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("49","FSIC","Jason Patrick Jocsin","computer","3860 Oriole Plaza","Storage","Barangay 2","Building","09474298815","croname","January 15, 2019 6:02 pm","jasoc","123456"," Json","3","100,000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("50","FSIC","Jess Patrick","Library","83589 Muir Street","Educational","Barangay 1","Building","09474298815","croname","January 15, 2019 6:04 pm","jess patrcik","123456","Jess","1","10000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("51","FSIC","Johnedel Mapa","Templeton Global Income Fund, Inc.","80 Hudson Hill","Educational","Banago","Building","09474298815","croname","January 15, 2019 6:06 pm","johnnysins","123456"," Johny","1","12122","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("52","FSIC","Cathy Granada","CBAK Energy Technology, Inc.","Niggeria","Business-Office","Banago","Occupancy","09474298815","croname","January 15, 2019 6:07 pm","catcat","123456"," Cathy","4","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Assessed","Jan","2019");
INSERT INTO application VALUES("53","FSIC","Kenny Hurrisa","Seventh Heaven","80 Hudson Hill","Small-Business","Barangay 38","Building","09474298815","croname","January 15, 2019 6:08 pm","kennymistah","123456"," Kenny","1","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Jan","2019");
INSERT INTO application VALUES("54","FSIC","Lj Cezar Adarle","DAnceteck","80 Hudson Hill","Business-Office","Granada","Building","09474298815","croname","January 15, 2019 6:11 pm","ljcezar","123456","LJEE","1","60000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Jan","2019");
INSERT INTO application VALUES("55","FSIC","Elmer T. Haro","Uno-r","Bacolod","Educational","Barangay 21","Building","09474298815","croname","January 15, 2019 6:15 pm","dean","123456"," Elmer","5","180000","Complete","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Inspected","Jan","2019");
INSERT INTO application VALUES("56","FSIC","Ricky Diancin","WebProg","80 Hudson Hill","Mercantile","Banago","Occupancy","09474298815","croname","January 15, 2019 6:16 pm","Ricky","123456"," Ricky Diancin","1","180000","0","IniReq5,IniReq6,IniReq7,IniReq8,IniReq9,","Unassessed","Jan","2019");
INSERT INTO application VALUES("57","FSEC","Prince Ledesma","Toy Truck Parts","Escalante","Educational","Barangay 2","NA","09474298815","Shirlene Leaton","January 17, 2019 6:21 pm","princegwapo","helloworld","Prince Ledesma","50","20","Complete","IniReq2,IniReq3,IniReq4,","Evaluated","Jan","2019");
INSERT INTO application VALUES("58","FSIC","Matt Murdock","Puatu Peps","San Enrique","0","Barangay 3","Building","09474298815","croname","January 18, 2019 3:37 am","admin101","admin101"," admin101","223","123","Pending","IniReq5,IniReq6,IniReq7,IniReq8,","Unassessed","Jan","2019");
INSERT INTO application VALUES("59","FSIC","Sir Jose","Tricycle Tire and Parts","Magsungay","Assembly","Barangay 4","Occupancy","09474298815","croname","January 18, 2019 3:54 am","alvin2","8080"," asd","1","1","Pending","IniReq5,IniReq6,","Unassessed","Jan","2019");
INSERT INTO application VALUES("60","FSIC","Sir Jose","Tricycle Tire and Parts","Magsungay","Assembly","Barangay 4","Occupancy","09474298815","croname","January 18, 2019 3:55 am","alvin2","8080"," asd","1","1","Pending","IniReq5,IniReq6,","Unassessed","Jan","2019");
INSERT INTO application VALUES("61","FSIC","Sir Jose","Tricycle Tire and Parts","Magsungay","Assembly","Barangay 4","Occupancy","09474298815","Saxon Apedaile","January 18, 2019 3:57 am","alvin2","8080"," asd","1","1","Pending","IniReq5,IniReq6,","Unassessed","Jan","2019");
INSERT INTO application VALUES("62","FSEC","","Attorney Firm","","Business-Office"," ","NA","09474298815"," ","January 18, 2019 1:53 pm","","a","Daredevil","","","","","Unassessed","Jan","2019");
INSERT INTO application VALUES("63","FSEC","","Attorney Firm","","Business-Office"," ","NA","09474298815"," ","January 18, 2019 1:53 pm","","a","Daredevil","","","","","Unassessed","Jan","2019");
INSERT INTO application VALUES("64","FSEC","","","","Business-Office"," ","NA","09474298815"," ","","","","","","","","","Unassessed","Jan","2019");
INSERT INTO application VALUES("65","FSEC","","","","Business-Office"," ","NA","09474298815"," ","","","","","","","","","Unassessed","Jan","2019");
INSERT INTO application VALUES("66","FSEC","","","","Business-Office"," ","NA","09474298815"," ","","","","","","","","","Unassessed","Jan","2019");
INSERT INTO application VALUES("67","FSEC","","","","Business-Office"," ","NA","09474298815"," ","","","","","","","","","Unassessed","Jan","2019");
INSERT INTO application VALUES("68","FSEC","Matt Murdock","Attorney Firm"," ","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:55 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("69","FSEC","Matt Murdock","Attorney Firm"," ","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:56 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("70","FSEC","Matt Murdock","Attorney Firm"," ","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:56 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("71","FSEC","Matt Murdock","Attorney Firm"," ","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:56 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("72","FSEC","Matt Murdock","Attorney Firm"," ","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:56 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("73","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("74","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("75","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("76","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("77","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("78","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("79","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("80","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("81","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("82","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("83","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("84","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("85","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("86","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("87","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("88","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("89","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("90","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("91","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("92","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:58 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("93","FSEC","Matt Murdock","Attorney Firm","","Business-Office","barangay 10","NA","09474298815","Agna Nottingam","January 18, 2019 1:59 pm","admin101","admin101","Daredevil","12","12","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("94","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:27 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("95","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:28 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("96","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("97","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("98","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("99","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("100","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("101","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("102","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:31 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("103","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("104","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("105","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("106","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("107","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("108","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("109","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Assessed","Jan","2019");
INSERT INTO application VALUES("110","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("111","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("112","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("113","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("114","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:33 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("115","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:34 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("116","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:34 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("117","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:34 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("118","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:34 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("119","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("120","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("121","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("122","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("123","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("124","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("125","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("126","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("127","FSEC","Matt Murdock","Attorney Firm","Hells Kitchen","Business-Office","Barangay 5","NA","09474298815","Shirlene Leaton","January 18, 2019 2:36 pm","admin101","admin101","Kenneth Cayetano","1","12","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("128","FSEC","Matt Murdock","Attorney Firm","San Enrique","Assembly","Barangay 16 ","NA","09474298815","Agna Nottingam","January 18, 2019 2:41 pm","admin1012","admin101","Kenneth Cayetano","9","2","Complete","IniReq1,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("129","FSEC","Matt Murdock","Attorney Firm","San Enrique","Assembly","Barangay 16 ","NA","09474298815","Agna Nottingam","January 18, 2019 2:42 pm","admin1012","admin101","Kenneth Cayetano","9","2","Complete","IniReq1,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("130","FSEC","Matt Murdock","Attorney Firm","San Enrique","Assembly","Barangay 16 ","NA","09474298815","Agna Nottingam","January 18, 2019 2:42 pm","admin1012","admin101","Kenneth Cayetano","9","2","Complete","IniReq1,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("131","FSEC","Matt Murdock","Attorney Firm","San Enrique","Assembly","Barangay 16 ","NA","09474298815","Agna Nottingam","January 18, 2019 2:42 pm","admin1012","admin101","Kenneth Cayetano","9","2","Complete","IniReq1,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("132","FSEC","Matt Murdock","Attorney Firm","San Enrique","Assembly","Barangay 16 ","NA","09474298815","Agna Nottingam","January 18, 2019 2:42 pm","admin1012","admin101","Kenneth Cayetano","9","2","Complete","IniReq1,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("133","FSEC","Matt Murdock","Attorney Firm","San Enrique","Assembly","Barangay 16 ","NA","09474298815","Agna Nottingam","January 18, 2019 2:46 pm","admin1012","admin101","Kenneth Cayetano","9","2","Complete","IniReq1,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("134","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:56 pm","admin23","admin23"," ","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("135","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:56 pm","admin23","admin23"," ","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("136","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:56 pm","admin23","admin23"," ","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("137","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:56 pm","admin23","admin23"," ","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("138","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("139","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("140","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("141","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("142","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("143","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("144","FSEC","Matt Murdock","Matt Murdock"," ","Business-Office","Barangay 15","NA","09474298815","Hilliary Sparkwell","January 18, 2019 2:57 pm","admin23","admin23","Kenneth Cayetano","3","44","Complete","IniReq1,IniReq2,","Unassessed","Jan","2019");
INSERT INTO application VALUES("145","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:02 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("146","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:03 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("147","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:03 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("148","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:03 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("149","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:03 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("150","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:03 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("151","FSEC","Matt Murdock","Attorney Firm"," ","Mercantile","Barangay 30","NA","09474298815","Michel Snalham","January 18, 2019 3:04 pm","amazie","amazie","Kenneth Cayetano","1","23","Complete","IniReq1,IniReq2,IniReq3,","Unassessed","Jan","2019");
INSERT INTO application VALUES("152","FSIC","Jessica Jones","Police Equipment","Taculing","Small-Business","Barangay 22","Occupancy","09474298815","croname","January 18, 2019 3:12 pm","admin123","admin123","Melioad","4","23","Complete","IniReq5,IniReq6,IniReq7,","Unassessed","Jan","2019");
INSERT INTO application VALUES("153","FSEC","Amazing","Reporter Firm","New York","Assembly","Barangay 22","NA","09474298815","Matt Murdockk","January 18, 2019 7:20 pm","admin","admins","Kenneth Cayetano","122","22","Complete","IniReq2,IniReq3,","Assessed","Jan","2019");



DROP TABLE assessment;

CREATE TABLE `assessment` (
  `ops_no` int(100) NOT NULL AUTO_INCREMENT,
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
  `assessor_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ops_no`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO assessment VALUES("1","1","Shamus Munks","524 Sunbrook Pass","Complete","Renewable Energy Group, Inc.","FSEC","70","2","6","8","1.2","2.3000000000000003","44","55","900","10000","11088.5","1000","0","Dec","2018","December 13, 2018 11:22 pm","");
INSERT INTO assessment VALUES("2","12","Constantia Armall","80 Hudson Hill","Complete","Northfield Bancorp, Inc.","FSIC","50","1.31","10","10","12","40","555","55","66","54","853.31","1000","46.690000000000055","Dec","2018","December 14, 2018 1:57 pm","");
INSERT INTO assessment VALUES("3","13","Irwinn Bushell","8 Hazelcrest Center","Complete","Ichor Holdings","FSIC","80","0.8","12","1.26","10.700000000000001","3.4000000000000004","35352","34","23","5","35522.16","1000","24477.839999999997","Dec","2018","December 14, 2018 2:14 pm","");
INSERT INTO assessment VALUES("4","2","Alexandre Calleja","10514 Katie Alley","Complete","Bay Bancorp, Inc.","FSEC","6.6000000000000005","0.78","1.96","1.52","19.72","98.80000000000001","8","8","678","567","1390.38","1000","109.61999999999989","Dec","2018","December 14, 2018 3:18 pm","");
INSERT INTO assessment VALUES("5","3","Norris Maestro","7 Fallview Point","Complete","Acacia Research Corporation","FSEC","50","4","0.48","1.1","1.1","32.5","442","34","24","2","591.1800000000001","1500","8.819999999999936","Dec","2018","December 14, 2018 7:45 pm","");
INSERT INTO assessment VALUES("6","14","Bettye Tapping","585 Cardinal Point","Complete","Zoetis Inc.","FSIC","1.2000000000000002","0.12","0.24","0.24","0.24","1.2000000000000002","12","12","12","12","51.24","1500","948.76","Dec","2018","December 19, 2018 3:53 pm","");
INSERT INTO assessment VALUES("7","4","Marylin Klampk","546 Luster Circle","Complete","Allstate Corporation (The)","FSEC","200","2.33","6.640000000000001","46.26","0.24","2.3000000000000003","65","56","54","345","777.77","1500","122.23000000000002","Dec","2018","December 31, 2018 11:09 pm","");
INSERT INTO assessment VALUES("8","15","Marrilee Cattini","3860 Oriole Plaza","Complete","CBAK Energy Technology, Inc.","FSIC","10","2.2","6.8","0.42","0.86","35","310","22","11","1000","1398.28","1200","1.7200000000000273","Dec","2018","December 31, 2018 11:10 pm","");
INSERT INTO assessment VALUES("9","16","Ajay Espinos","83589 Muir Street","Complete","NewStar Financial, Inc.","FSIC","0.5","0.34","1.12","0.9","1.54","55.6","234","2344","25","54","2717","1200","283","Feb","2019","January 3, 2019 11:17 am","");
INSERT INTO assessment VALUES("10","21","Irwinn Bushell","3860 Oriole Plaza","Complete","Zoetis Inc.","FSIC","50","2","2","0.8","8.08","33.4","66","54","234","33","483.28","1200","71.72000000000003","Jan","2019","January 3, 2019 7:35 pm","");
INSERT INTO assessment VALUES("11","5","Ives Tassell","1249 Ludington Place","Pending","Chart Industries, Inc.","FSEC","23.400000000000002","23.41","4.68","2.68","68.66","23.400000000000002","10","23","23","333","535.23","1200","163.76999999999998","Jan","2019","January 7, 2019 6:41 pm","");
INSERT INTO assessment VALUES("12","23","Juro Kazuhiko","Niggeria","Complete","Nigger Corp","FSEC","56","4","7","3","2.96","45.5","34","656","700","121","1629.46","1200","0","Jan","2019","January 10, 2019 6:08 pm","");
INSERT INTO assessment VALUES("13","17","Jamaal Petkov","82272 Everett Point","Complete","First Trust NASDAQ-100 Ex-Technology Sector Index ","FSIC","3.4000000000000004","53.25","1.12","11.120000000000001","10.9","4.4","4","2342","2342","545","5317.19","1000","682.81","Jan","2019","January 13, 2019 9:28 pm","");
INSERT INTO assessment VALUES("14","6","Gay Barnet","777 Drewry Center","Select","Fortinet, Inc.","FSEC","0.1","0.01","2","2","2","20","100","100","100","10000","10326.11","1000","9673.89","Jan","2019","January 15, 2019 2:52 am","");
INSERT INTO assessment VALUES("15","7","Alain Palluschek","62664 Barnett Lane","Complete","Elbit Systems Ltd.","FSEC","0.1","0.01","2","2","2","16.8","100","100","100","120","442.91","1000","1557.09","Jan","2019","January 15, 2019 2:53 am","");
INSERT INTO assessment VALUES("16","8","Angie Kondratovich","8 Bobwhite Avenue","Complete","Navigator Holdings Ltd.","FSEC","0.1","0.01","2","2","2","20","100","100","100","100","426.11","1000","0","Jan","2019","January 15, 2019 2:55 am","");
INSERT INTO assessment VALUES("17","9","Jenine Crangle","4138 Barnett Avenue","Complete","Wells Fargo & Company","FSEC","0.085","0.01","2","2","2","20","100","100","100","100","426.10","1000","0","Jan","2019","January 15, 2019 2:56 am","");
INSERT INTO assessment VALUES("18","10","Maegan Badham","17 Graedel Road","Complete","CRA International,Inc.","FSEC","0.1","0.01","2","2","2","20","100","100","100","100","426.11","1000","0","Jan","2019","January 15, 2019 2:57 am","");
INSERT INTO assessment VALUES("19","22","Maeryger D. Gomez","Menlo 4","Complete","Medical Clinic","FSEC","0.1","0.01","2","2","200","20","100","100","100","100","624.11","1000","0","Jan","2019","January 15, 2019 2:57 am","");
INSERT INTO assessment VALUES("20","38","Claudia Jelk","12 Charing Cross Alley","Complete","Zoetis Inc.","FSIC","0.2","0.02","4","3.6","4","40","200","200","200","189","840.82","1000","0","Jan","2019","January 15, 2019 5:36 pm","");
INSERT INTO assessment VALUES("21","11","Melodie Brosenius","91999 Oriole Crossing","Complete","Templeton Global Income Fund, Inc.","FSIC","0.2","0.02","4","4","24","40","200","200","200","200","872.22","1000","0","Jan","2019","January 15, 2019 6:17 pm","");
INSERT INTO assessment VALUES("22","39","Octavius Kenealy","138 Mariners Cove Hill","Complete","CBAK Energy Technology, Inc.","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Jan","2019","January 15, 2019 6:18 pm","");
INSERT INTO assessment VALUES("23","40","Sanni Legodinec","80 Hudson Hill","Complete","Northfield Bancorp, Inc.","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Jan","2019","January 15, 2019 6:19 pm","");
INSERT INTO assessment VALUES("24","41","Fifi Milberg","83589 Muir Street","Complete","Nigger Corp","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Jan","2019","January 15, 2019 6:19 pm","");
INSERT INTO assessment VALUES("25","42","Amy Roder","3860 Oriole Plaza","Complete","Zoetis Inc.","FSIC","0.2","0.02","7","3.72","4","40","200","200","200","200","854.94","1200","0","Jan","2019","January 15, 2019 6:20 pm","");
INSERT INTO assessment VALUES("26","43","Stinky Dikvenet","80 Hudson Hill","Complete","REcr","FSIC","0.2","0.01","4","4","4","40","200","200","200","200","852.21","1200","147.79","Jan","2019","January 15, 2019 6:21 pm","");
INSERT INTO assessment VALUES("27","44","Noelle Emerie","3860 Oriole Plaza","Complete","Nigger Corp","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1200","0","Jan","2019","January 15, 2019 6:21 pm","");
INSERT INTO assessment VALUES("28","45","Dawn Arsenal","80 Hudson Hill","Complete","Pinkblow","FSIC","0.2","0.02","1.2","4","4","40","200","200","200","200","849.42","1200","0","Jan","2019","January 15, 2019 6:22 pm","");
INSERT INTO assessment VALUES("29","46","Leodora Marchant","138 Mariners Cove Hill","Complete","Taylor Devices, Inc.","FSIC","0.2","0.02","4","4","4","40","200","200","186","200","838.22","1200","0","Jan","2019","January 15, 2019 6:23 pm","");
INSERT INTO assessment VALUES("30","47","Rochelle Tano","3860 Oriole Plaza","Complete","Adadda","FSIC","0.2","0.04","1.2","4","4","40","200","200","200","200","849.44","1200","0","Jan","2019","January 15, 2019 6:23 pm","");
INSERT INTO assessment VALUES("31","48","Renz Owen","3860 Oriole Plaza","Complete","Nba","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1200","0","Jan","2019","January 15, 2019 6:24 pm","");
INSERT INTO assessment VALUES("32","49","Jason Patrick Jocsin","3860 Oriole Plaza","Complete","computer","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1200","0","Dec","2019","January 15, 2019 6:24 pm","");
INSERT INTO assessment VALUES("33","50","Jess Patrick","83589 Muir Street","Complete","Library","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1200","0","Nov","2019","January 15, 2019 6:25 pm","");
INSERT INTO assessment VALUES("34","51","Johnedel Mapa","80 Hudson Hill","Complete","Templeton Global Income Fund, Inc.","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Oct","2019","January 15, 2019 6:26 pm","");
INSERT INTO assessment VALUES("35","52","Cathy Granada","Niggeria","Complete","CBAK Energy Technology, Inc.","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Sep","2019","January 15, 2019 6:26 pm","");
INSERT INTO assessment VALUES("36","53","Kenny Hurrisa","80 Hudson Hill","Complete","Seventh Heaven","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Aug","2019","January 15, 2019 6:27 pm","");
INSERT INTO assessment VALUES("37","54","Lj Cezar Adarle","80 Hudson Hill","Complete","DAnceteck","FSIC","0.2","0.01","4","4","4","40","200","200","200","193","845.21","1500","0","Jul","2019","January 15, 2019 6:28 pm","");
INSERT INTO assessment VALUES("38","55","Elmer T. Haro","Bacolod","Complete","Uno-r","FSIC","0.2","0.02","4","4","4","40","200","200","200","200","852.22","1500","0","Jun","2019","January 15, 2019 6:28 pm","");
INSERT INTO assessment VALUES("39","24","Ignacio Branton","Niggeria","Complete","Zoetis Inc.","FSEC","0.5","0.05","10","10","10","100","500","500","500","500","2130.55","1500","0","May","2019","January 17, 2019 2:02 am","");
INSERT INTO assessment VALUES("40","24","Ignacio Branton","Niggeria","Complete","Zoetis Inc.","FSEC","0.5","0.05","10","10","10","100","500","500","500","500","2130.55","1500","0","Apr","2019","January 17, 2019 2:02 am","");
INSERT INTO assessment VALUES("41","25","Cleveland Bartzen","80 Hudson Hill","Pending","Nba","FSEC","70","7","1400","1400","1400","14000","599","599","599","599","20673.00","1500","0","Mar","2019","January 17, 2019 2:10 am","");
INSERT INTO assessment VALUES("42","26","Kellia Penniel","Tokyo","Complete","Taiga Inc","FSEC","0.5","0.3","680","60","80","680","3400","4342","342","34","9618.80","1000","381.2","Jan","2019","January 17, 2019 6:22 pm","");
INSERT INTO assessment VALUES("43","57","Prince Ledesma","Escalante","Complete","Toy Truck Parts","FSEC","70","34","864846.8","6848.400000000001","668700690.6800001","688.8000000000001","24","344","343","545","669574434.68","1000","-0.68","Jan","2019","January 17, 2019 6:24 pm","");
INSERT INTO assessment VALUES("44","27","Casey Rappa","27 Alunan Avenue","Complete","Dragon Corp","FSEC","0.6980000000000001","0.2","4000","2.4","48","8","30","505","540","30","5164.30","1000","835.7","Jan","2019","January 17, 2019 10:51 pm","");
INSERT INTO assessment VALUES("45","28","Mark","548 Dawn Court","Complete","miannuzzi1@ox.ac.uk","FSEC","5","0.5","100","100","100","1000","5000","5000","5000","5000","21305.50","22000","694.5","Jan","2019","January 20, 2019 11:08 pm","");
INSERT INTO assessment VALUES("46","153","Kenneth Cayetano","New York","Complete","Reporter Firm","FSEC","0.8","0.08","16","16","16","160","0","800","0","0","1008.88","1100","91.12","Jan","2019","January 23, 2019 12:55 am","");
INSERT INTO assessment VALUES("47","109","Kenneth Cayetano","Hells Kitchen","Complete","Attorney Firm","FSEC","123.456","12.345600000000001","2469.12","2469.12","2469.12","0","0","211","322","123","8199.16","10000","1800.84","Jan","2019","January 23, 2019 1:31 am","Justin D. Puatu");



DROP TABLE backup;

CREATE TABLE `backup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("1","0","Successfully exported database","January 16, 2019, 10:47 pm");
INSERT INTO backup VALUES("2","","Successfully exported database","January 17, 2019, 6:04 pm");
INSERT INTO backup VALUES("3","","Successfully exported database","January 17, 2019, 6:04 pm");
INSERT INTO backup VALUES("4","","Successfully exported database","January 17, 2019, 6:04 pm");
INSERT INTO backup VALUES("5","13","Successfully imported database","January 17, 2019, 6:11 pm");
INSERT INTO backup VALUES("6","1","Successfully exported database","January 18, 2019, 6:43 pm");
INSERT INTO backup VALUES("7","4","Successfully imported database","January 20, 2019, 10:14 pm");
INSERT INTO backup VALUES("8","4","Successfully exported database","January 20, 2019, 10:30 pm");



DROP TABLE barangay;

CREATE TABLE `barangay` (
  `barangay_id` int(100) NOT NULL AUTO_INCREMENT,
  `barangay_name` varchar(100) NOT NULL,
  PRIMARY KEY (`barangay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

INSERT INTO barangay VALUES("1","Alangilan");
INSERT INTO barangay VALUES("2","Alijis");
INSERT INTO barangay VALUES("3","Banago");
INSERT INTO barangay VALUES("4","Barangay 1");
INSERT INTO barangay VALUES("5","Barangay 2");
INSERT INTO barangay VALUES("6","Barangay 3");
INSERT INTO barangay VALUES("7","Barangay 4");
INSERT INTO barangay VALUES("8","Barangay 5");
INSERT INTO barangay VALUES("9","Barangay 6");
INSERT INTO barangay VALUES("10","Barangay 7");
INSERT INTO barangay VALUES("11","Barangay 8");
INSERT INTO barangay VALUES("12","Barangay 9 ");
INSERT INTO barangay VALUES("13","Barangay 10");
INSERT INTO barangay VALUES("14","Barangay 11");
INSERT INTO barangay VALUES("15","Barangay 12");
INSERT INTO barangay VALUES("16","Barangay 13");
INSERT INTO barangay VALUES("17","Barangay 14");
INSERT INTO barangay VALUES("18","Barangay 15");
INSERT INTO barangay VALUES("19","Barangay 16 ");
INSERT INTO barangay VALUES("20","Barangay 17");
INSERT INTO barangay VALUES("21","Barangay 18");
INSERT INTO barangay VALUES("22","Barangay 19");
INSERT INTO barangay VALUES("23","Barangay 20");
INSERT INTO barangay VALUES("24","Barangay 21");
INSERT INTO barangay VALUES("25","Barangay 22");
INSERT INTO barangay VALUES("26","Barangay 23");
INSERT INTO barangay VALUES("27","Barangay 24");
INSERT INTO barangay VALUES("28","Barangay 25");
INSERT INTO barangay VALUES("29","Barangay 26");
INSERT INTO barangay VALUES("30","Barangay 27");
INSERT INTO barangay VALUES("31","Barangay 28");
INSERT INTO barangay VALUES("32","Barangay 29");
INSERT INTO barangay VALUES("33","Barangay 30");
INSERT INTO barangay VALUES("34","Barangay 31");
INSERT INTO barangay VALUES("35","Barangay 32");
INSERT INTO barangay VALUES("36","Barangay 33");
INSERT INTO barangay VALUES("37","Barangay 34 ");
INSERT INTO barangay VALUES("38","Barangay 35");
INSERT INTO barangay VALUES("39","Barangay 36");
INSERT INTO barangay VALUES("40","Barangay 37 ");
INSERT INTO barangay VALUES("41","Barangay 38");
INSERT INTO barangay VALUES("42","Barangay 39");
INSERT INTO barangay VALUES("43","Barangay 40");
INSERT INTO barangay VALUES("44","Barangay 41");
INSERT INTO barangay VALUES("45","Bata");
INSERT INTO barangay VALUES("46","Cabug");
INSERT INTO barangay VALUES("47","Estefanía");
INSERT INTO barangay VALUES("48","Felisa");
INSERT INTO barangay VALUES("49","Granada");
INSERT INTO barangay VALUES("50","Handumanan");
INSERT INTO barangay VALUES("51","Mandalagan");
INSERT INTO barangay VALUES("52","Mansilingan");
INSERT INTO barangay VALUES("53","Montevista");
INSERT INTO barangay VALUES("54","Pahanocoy");
INSERT INTO barangay VALUES("55","Punta Taytay");
INSERT INTO barangay VALUES("56","Singcang-Airport");
INSERT INTO barangay VALUES("57","Sum-ag");
INSERT INTO barangay VALUES("58","Taculing");
INSERT INTO barangay VALUES("59","Tangub");
INSERT INTO barangay VALUES("60","Villamonte");
INSERT INTO barangay VALUES("61","Vista Alegre");



DROP TABLE bldg_construct;

CREATE TABLE `bldg_construct` (
  `bc_no` int(100) NOT NULL AUTO_INCREMENT,
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
  `date_applied` varchar(50) NOT NULL,
  PRIMARY KEY (`bc_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO bldg_construct VALUES("1","IR-2018-12-1","123","23","12312","13","123123","123123","13123","12312331321","1232132132","3123","3213123","12312312","December 14, 2018 5:45 pm");
INSERT INTO bldg_construct VALUES("2","IR-2019-01-1","500","500","330","234","3404","234","434","23","2123","23432","324","3","January 15, 2019 9:48 pm");
INSERT INTO bldg_construct VALUES("3","IR-2019-01-1","123","13","3123123","312312","312312","3123123123","213213","131321","312313","123123","123213","1231312","January 16, 2019 10:54 pm");



DROP TABLE checklist;

CREATE TABLE `checklist` (
  `checklist_id` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE compartmentation;

CREATE TABLE `compartmentation` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO compartmentation VALUES("Compartmentation_Req_1","Provide fire break up to the roof for ceiling areas.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_2","Provide monitored and curtained roof of sheet metal or non-combustible material of a minimum of 1.82m (6 ft) high spaced not more than 76 m (250 ft) & curtained area limited to a minimum of 4, 630 m2 (50,000 ft2).");
INSERT INTO compartmentation VALUES("Compartmentation_Req_3","Provide smoke partition at enclosed areas of 2, 083 m2 (22, 500 ft2) or less with the length of 45.7m (150 ft) or less, with self-closing fire doors.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_4","Provide  smoke  partition  of  two  (2)  hour  fire  resistance  from  floor  to underside of floor above.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_5","Provide interior finish as follows; Exit; Class _________ Access to Exit; Class ___________ Other Spaces; Class _________");
INSERT INTO compartmentation VALUES("Compartmentation_Req_6","Provide fire stopping for all concealed spaces.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_1","Provide fire break up to the roof for ceiling areas.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_2","Provide monitored and curtained roof of sheet metal or non-combustible material of a minimum of 1.82m (6 ft) high spaced not more than 76 m (250 ft) & curtained area limited to a minimum of 4, 630 m2 (50,000 ft2).");
INSERT INTO compartmentation VALUES("Compartmentation_Req_3","Provide smoke partition at enclosed areas of 2, 083 m2 (22, 500 ft2) or less with the length of 45.7m (150 ft) or less, with self-closing fire doors.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_4","Provide  smoke  partition  of  two  (2)  hour  fire  resistance  from  floor  to underside of floor above.");
INSERT INTO compartmentation VALUES("Compartmentation_Req_5","Provide interior finish as follows; Exit; Class _________ Access to Exit; Class ___________ Other Spaces; Class _________");
INSERT INTO compartmentation VALUES("Compartmentation_Req_6","Provide fire stopping for all concealed spaces.");



DROP TABLE employee;

CREATE TABLE `employee` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `officer_type` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `officer_fname` varchar(100) NOT NULL,
  `officer_mname` varchar(100) NOT NULL,
  `officer_lname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `firestation` varchar(100) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("1","CRO","F01","Jeremy","D.","Orritt","jorritt0","1234","1234","1","December 13, 2018 11:23 pm");
INSERT INTO employee VALUES("2","CRO","F01","Shadow","A. ","Tortis","stortis1","1234","1234","6","December 13, 2018 11:24 pm");
INSERT INTO employee VALUES("3","CRO","F01","Sande","R.","Summerley","mbrosenius3","1234","1234","4","December 13, 2018 11:24 pm");
INSERT INTO employee VALUES("4","CRO","F01","Kai","R.","Cinderey","kcinderey3","1234","1234","1","December 13, 2018 11:25 pm");
INSERT INTO employee VALUES("5","CRO","F01","Michel","D.","Snalham","msnalham5","1234","1234","6","December 13, 2018 11:26 pm");
INSERT INTO employee VALUES("6","CRO","F01","Genevra","A. ","Dakin","gdakin6","1234","1234","6","December 13, 2018 11:26 pm");
INSERT INTO employee VALUES("7","CRO","F01","Saxon","A. ","Apedaile","sapedaile7","1234","1234","4","December 13, 2018 11:27 pm");
INSERT INTO employee VALUES("8","CRO","F01","Shirlene","A. ","Leaton","sleaton9","1234","1234","5","December 13, 2018 11:28 pm");
INSERT INTO employee VALUES("9","CRO","F01","Hilliary","D.","Sparkwell","hsparkwellb","1234","1234","5","December 13, 2018 11:28 pm");
INSERT INTO employee VALUES("10","CRO","F01","Agna","R.","Nottingam","anottingamh","1234","1234","4","December 13, 2018 11:29 pm");
INSERT INTO employee VALUES("11","Inspection-CRO","F04","Justin","Christian","Puatu","ken05cay","ken05","ken05","5","December 14, 2018 6:52 pm");
INSERT INTO employee VALUES("12","CRO","F01","Sergent","D.","Cecere","scecere0","ao68bc291xz","ao68bc291xz","1","January 10, 2019 9:56 pm");
INSERT INTO employee VALUES("13","Inspector","F04","Alvin","Go","Yanson","alvin2","alvin3","alvin3","6","January 13, 2019 7:41 pm");
INSERT INTO employee VALUES("14","Inspector","F04","Alvin","Go","Yanson","alvin2","alvin3","alvin3","6","January 13, 2019 7:43 pm");
INSERT INTO employee VALUES("15","Inspector","F04","Alvin","Go","Yanson","alvin2","alvin3","alvin3","6","January 13, 2019 7:43 pm");
INSERT INTO employee VALUES("16","CRO","F01","Kenneth","De la Rosa","Cayetano","ken2","kenneth2","kenneth2","1","January 16, 2019 1:26 pm");
INSERT INTO employee VALUES("17","CRO","F01","Matt","Knuckle","Murdockk","Dare","123devil","123devil","4","January 18, 2019 3:05 pm");
INSERT INTO employee VALUES("18","CRO","F01","Matt","Knuckle","Murdockk","Dare","123devil","123devil","4","January 18, 2019 3:06 pm");
INSERT INTO employee VALUES("19","Inspector","F03","Kenneth","Christian","Canlog","admin101","admin101","admin101","3","January 18, 2019 7:41 pm");
INSERT INTO employee VALUES("20","Inspector","F03","Kenneth","Christian","Canlog","admin101","admin101","admin101","3","January 18, 2019 7:41 pm");
INSERT INTO employee VALUES("21","CRO","F01","Clark","KE","KE","admin1234","admin1234","admin1234","5","January 21, 2019 11:56 pm");
INSERT INTO employee VALUES("22","CRO","F01","Kenneth","De La Rosa","Cayeatano","Admin101","kenneth","kenneth","5","January 22, 2019 7:46 pm");



DROP TABLE evaluation_checklist;

CREATE TABLE `evaluation_checklist` (
  `checklist_no` int(50) NOT NULL AUTO_INCREMENT,
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
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`checklist_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO evaluation_checklist VALUES("1","2018-12-2","Sir Cartagena","Alexandre Calleja","Bay Bancorp, Inc.","Nanotech","Mansilingan","2","2018-12-25","Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,","Walls_Req_3,Walls_Req_4,","Compartmentation_Req_2,Compartmentation_Req_3,","Warning_Req_2,Warning_Req_4,Warning_Req_5,","Fire_Protection_Req_1,Fire_Protection_Req_2,","Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,","Dec","2018","");
INSERT INTO evaluation_checklist VALUES("2","2018-12-3","Sir Cartagena","Norris Maestro","Acacia Research Corporation","Nanotech","Mansilingan","Residential","2018-12-14","Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,","Walls_Req_4,","Compartmentation_Req_3,","Warning_Req_1,Warning_Req_2,","Fire_Protection_Req_2,","Miscellaneous_Req_2,","Dec","2018","");
INSERT INTO evaluation_checklist VALUES("3","2018-12-4","Sir Cartagena","Marylin Klampk","Allstate Corporation (The)","Nexmo ","Mansilingan","Business","2019-01-05","Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means","Walls_Req_1,Walls_Req_2,Walls_Req_3,Walls_Req_4,","Compartmentation_Req_4,Compartmentation_Req_5,Compartmentation_Req_6,","Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,Warning_Req_8,Wa","Fire_Protection_Req_1,Fire_Protection_Req_3,Fire_Protection_Req_4,Fire_Protection_Req_5,Fire_Protect","Miscellaneous_Req_1,Miscellaneous_Req_3,Miscellaneous_Req_4,Miscellaneous_Req_5,Miscellaneous_Req_6,","Jan","2019","");
INSERT INTO evaluation_checklist VALUES("4","2018-12-5","Cartajena","Ives Tassell","Chart Industries, Inc.","Sacrilige","Bacolod","Sanctuary","2019-01-15","Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,","Walls_Req_3,Walls_Req_4,","Compartmentation_Req_2,Compartmentation_Req_3,","Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,","Fire_Protection_Req_1,Fire_Protection_Req_2,","Miscellaneous_Req_6,Miscellaneous_Req_7,","Jan","2019","");
INSERT INTO evaluation_checklist VALUES("5","","Cartajena","Ives Tassell","Chart Industries, Inc.","Sacrilige","Bacolod","Sanctuary","2019-01-15","Means_Egrees_Req_1,Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,Means_Egrees_Req_8,Means_Egrees_Req_9,","Walls_Req_3,Walls_Req_4,","Compartmentation_Req_2,Compartmentation_Req_3,","Warning_Req_1,Warning_Req_2,Warning_Req_3,Warning_Req_7,Warning_Req_8,","Fire_Protection_Req_1,Fire_Protection_Req_2,","Miscellaneous_Req_6,Miscellaneous_Req_7,","Jan","2019","");
INSERT INTO evaluation_checklist VALUES("6","2018-12-6","Kenneth","Gay Barnet","Fortinet, Inc.","ss","s","ss","2019-01-09","Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_36,Means_Egrees_Req_37,Means_Egrees_Req_38,","No Walls","No Compartmentation","Warning_Req_2,Warning_Req_3,","No Fire Protection","No Miscellaneous","Jan","2019","Ready for Certification");
INSERT INTO evaluation_checklist VALUES("7","2019-01-57","Sir Cartagena","Prince Ledesma","Toy Truck Parts","Machine Tech","San Luis","Business","2018-12-05","Means_Egrees_Req_2,Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,","Walls_Req_3,Walls_Req_4,","Compartmentation_Req_2,Compartmentation_Req_3,","Warning_Req_1,","Fire_Protection_Req_1,Fire_Protection_Req_2,","Miscellaneous_Req_1,Miscellaneous_Req_5,Miscellaneous_Req_6,","Jan","2019","On Progress");
INSERT INTO evaluation_checklist VALUES("8","2018-12-7","Cataluna","Alain Palluschek","Elbit Systems Ltd.","Computer Cafe","Mansilingan","Business","2019-01-18","Means_Egrees_Req_3,Means_Egrees_Req_4,Means_Egrees_Req_5,Means_Egrees_Req_6,Means_Egrees_Req_7,","Walls_Req_1,Walls_Req_2,","Compartmentation_Req_1,Compartmentation_Req_2,Compartmentation_Req_3,Compartmentation_Req_4,","Warning_Req_2,Warning_Req_3,Warning_Req_4,Warning_Req_5,Warning_Req_7,","Fire_Protection_Req_2,Fire_Protection_Req_3,Fire_Protection_Req_4,","Miscellaneous_Req_1,Miscellaneous_Req_2,Miscellaneous_Req_3,Miscellaneous_Req_4,","Jan","2019","On Progress");



DROP TABLE fire_protection;

CREATE TABLE `fire_protection` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO fire_protection VALUES("Fire_Protection_Req_3","Provide Fire Service connection with a standard outlet of 64 mm ?, and 102 mm ? dry standpipe, and shall located on a street front.");
INSERT INTO fire_protection VALUES("Fire_Protection_Req_2","Provide dry & wet standpipe system with        mm ? riser and coupling
                                                        of fire department standards with pumps of reliable pressure & connected to an adequate water supply tank. Hose and hose cabinet shall be provided at every hose gate valve on all floors.");
INSERT INTO fire_protection VALUES("Fire_Protection_Req_4","Provide automatic fire extinguishing system where kitchen equipment is located (Kitchenhood).");
INSERT INTO fire_protection VALUES("Fire_Protection_Req_5","Provide automatic chemical extinguishing system on all areas where electronic/electrical equipment are located.");
INSERT INTO fire_protection VALUES("Fire_Protection_Req_1","Provide approved type portable fire extinguisher (dry chemical) ABC type,	_________ lbs. capacity for every 278 m2. (3000 ft2) of floor area or
                                                        22.8 m (75 ft) travel distance on every floor level.");
INSERT INTO fire_protection VALUES("Fire_Protection_Req_6","Provide   approved-type automatic fire extinguishing system in
                                                        accordance with NFPA 13.  Approval of system plan is required prior to installation.");



DROP TABLE fire_station;

CREATE TABLE `fire_station` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fire_station_no` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO fire_station VALUES("1","1");
INSERT INTO fire_station VALUES("2","2");
INSERT INTO fire_station VALUES("3","3");
INSERT INTO fire_station VALUES("4","4");
INSERT INTO fire_station VALUES("5","5");
INSERT INTO fire_station VALUES("6","6");
INSERT INTO fire_station VALUES("7","7");



DROP TABLE inspection;

CREATE TABLE `inspection` (
  `io_no` int(11) NOT NULL AUTO_INCREMENT,
  `application_no` varchar(100) NOT NULL,
  `inspector_name` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `establishment_address` varchar(100) NOT NULL,
  `date_applied` varchar(100) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(100) NOT NULL,
  `inspection_status` varchar(50) NOT NULL,
  PRIMARY KEY (`io_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE inspection_order;

CREATE TABLE `inspection_order` (
  `inspection_order_no` int(10) NOT NULL AUTO_INCREMENT,
  `inspection_report_no` varchar(20) NOT NULL,
  `application_no` varchar(20) NOT NULL,
  `building_construction_no` varchar(20) NOT NULL,
  `boc_no` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  PRIMARY KEY (`inspection_order_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE inspection_report;

CREATE TABLE `inspection_report` (
  `ir_no` int(11) NOT NULL AUTO_INCREMENT,
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
  `deficiency_checklist` varchar(200) NOT NULL,
  PRIMARY KEY (`ir_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO inspection_report VALUES("1","IO-2019-01-1","2019-01-27","jan2","500","Computer Repair","Sum-ag","30","95","72","Jan-15-2019","Jan","2019","Inspection Report","Puatu","Amazing","Race","High","Low","Steal","Borrow	","Shock","for certification","","");
INSERT INTO inspection_report VALUES("4","IO-2019-01-2","2019-01-38"," Claudia Jelk","Blck 16, North East Village","Zoetis Inc.","12 Charing Cross Alley","2","180000","3","Jan-18-2019","Jan","2019","Inspection Report","Hello World","Hello World","Hello World","Hello World","Hello World","Hello World","NA","NA","issued NTCV","","");
INSERT INTO inspection_report VALUES("5","IO-2019-01-5","2019-01-39"," Octavius","Blck 16, North East Village","CBAK Energy Technology, Inc.","138 Mariners Cove Hill","13131","60000","5","Jan-18-2019","Jan","2019","Inspection Report","wqeqwqw","status_of_checklist","status_of_checklist","status_of_checklist","status_of_checklist","NA","NA","NA","for certification","","");
INSERT INTO inspection_report VALUES("6","IO-2019-01-6","2019-01-40"," Sanni","5000","Northfield Bancorp, Inc.","80 Hudson Hill","131","140000","6","Jan-18-2019","Jan","2019","Inspection Report","message2","message2","NA","NA","NA","NA","message2","message2","issued NTCV","","");
INSERT INTO inspection_report VALUES("7","IO-2019-01-7",""," Elmer","2000","Uno-r","Bacolod","2000","180000","5","Jan-20-2019","Jan","2019","Inspection Report","hidden","hidden","hidden","hidden","hidden","hidden","hidden","hidden","for compliance","","");
INSERT INTO inspection_report VALUES("8","IO-2019-01-8","2019-01-54","LJEE","hello world ","DAnceteck","80 Hudson Hill","25","60000","1","Jan-20-2019","Jan","2019","Inspection Report","hello world ","hello world ","hello world ","hello world ","hello world ","hello world ","hello world ","hello world ","for compliance","","");
INSERT INTO inspection_report VALUES("9","IO-2019-01-9","2019-01-53"," Kenny","San Enrique","Seventh Heaven","80 Hudson Hill","76","60000","1","Jan-22-2019","Jan","2019","Inspection Report","Pallor","colon cancer","imbalanced gut flora","Crohnâ€™s disease","celiac disease","NA","NA","NA","for compliance","Clark Berja","colon cancer,imbalanced gut flora,Crohna\'s disease,celiac disease,NA,NA,NA");



DROP TABLE inspection_schedule;

CREATE TABLE `inspection_schedule` (
  `io_schedule` int(11) NOT NULL AUTO_INCREMENT,
  `io_no` varchar(100) NOT NULL,
  `inspectors` varchar(100) NOT NULL,
  `inspection_date` varchar(50) NOT NULL,
  `inspection_time` varchar(50) NOT NULL,
  `date_applied` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`io_schedule`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO inspection_schedule VALUES("1","IO-2019-01-1","Elmer","2019-01-16","13:59","January 15, 2019 - 9:47 pm","Jan","2019","Pending");
INSERT INTO inspection_schedule VALUES("2","IO-2019-01-1","Cardo","2019-01-01","12:12","January 16, 2019 - 10:53 pm","Jan","2019","Pending");
INSERT INTO inspection_schedule VALUES("3","IO-2019-01-1","Vincent","2019-01-31","13:59","January 22, 2019 - 12:17 am","Jan","2019","Pending");



DROP TABLE inspectors;

CREATE TABLE `inspectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inspectors` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO inspectors VALUES("1","Cardo");
INSERT INTO inspectors VALUES("2","Dalisay");
INSERT INTO inspectors VALUES("3","Vincent");
INSERT INTO inspectors VALUES("4","Elmer");
INSERT INTO inspectors VALUES("5","John");



DROP TABLE issue_notice;

CREATE TABLE `issue_notice` (
  `issue_notice_no` int(100) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`issue_notice_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO issue_notice VALUES("1","Correct Violation","4.00","jan2","Vincent","Computer Repairs","2019-01-18","IO-2019-01-1","2019-01-7","IO-2019-01-1","Sum-aganon","2019-01-01","2019-01-20","Jan","2019");
INSERT INTO issue_notice VALUES("2","Correct Violation","4.00","jan2","Cardo","Computer Repair","7","IO-2019-01-1","2019-01-7","IO-2019-01-1","Sum-ag","2019-01-28","2019-01-22","Jan","2019");
INSERT INTO issue_notice VALUES("3","Correct Violation","123123","jan2","","Computer Repair","2019-01-18","IO-2019-01-1","2019-01-7","IO-2019-01-1","Sum-ag","2019-01-28","2019-01-29","Jan","2019");
INSERT INTO issue_notice VALUES("4","Correct Violation","2"," Claudia Jelk","","Zoetis Inc.","2019-01-01","IO-2019-01-4","2019-01-38","IO-2019-01-2","12 Charing Cross Alley","2019-01-31","2019-02-01","Jan","2019");
INSERT INTO issue_notice VALUES("5","Correct Violation","121"," Octavius","","CBAK Energy Technology, Inc.","2019-01-23","IO-2019-01-5","2019-01-3","IO-2019-01-5","138 Mariners Cove Hill","2019-01-31","2019-01-31","Jan","2019");
INSERT INTO issue_notice VALUES("6","Select","5000"," Sanni","","Northfield Bancorp, Inc.","2019-01-22","IO-2019-01-6","2019-01-4","IO-2019-01-6","80 Hudson Hill","2019-01-29","2019-01-30","Jan","2019");



DROP TABLE means_of_egress;

CREATE TABLE `means_of_egress` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO means_of_egress VALUES("Means_Egrees_Req_1","Building exits must abut a public street or approved alley.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_2","Provide at least two (2) means of egress for each floor, room.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_3","Provide secondary stairs/exits as far/remote from main stair, to serve ___.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_4","Enclose all stairways and ire escapes with walls having	hours of fire resistance with access thru self-closing fire doors.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_5","Provide two (2) doors as exit ways from all rooms.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_6","Interconnect stairs and fire escapes with fire resistive passageways on corridors at least ____ meters wide.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_7","Enclose walls, doors, stairs ramps, escalators and other components of exits systems.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_8","Provide protected/enclosed horizontal exits with self-closing fire doors.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_9","Travel distance to an exit shall not be more than ___ meters.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_10","Exit doors shall swing in the direction of exit travel.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_11","Revolving doors shall not be used as means of egress except_________.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_12","Exit door/s should be openable from the inside without the use of keys, special knowledge or effort flush bolts or surface bolts are prohibited.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_13","Exit door should have a minimum width of 71 cm and a maximum width 122 cm and shall not restrict the opening.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_14","A floor or landing is required not less than the width of exit door.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_15","Door should be not project into the required corridor width when fully opened so as not to reduce the corridor width to less than 76.17 cm.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_16","Exit doors should provide immediate access to an approved means of egress. Exiting through a bathroom, bedroom or other room subject to locking does not comply.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_17","Corridors should have a minimum width of _________ meters.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_18","Required corridors in occupancies shall have.
                                                            2.43 meters (8 ft) minimum width.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_19","Dead-end corridors and exit balconies is limited to 6.08 m (20 ft).");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_20","Aisles in auditorium shall be minimum of meters in width.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_21","Walls and ceilings  of  corridors  should  be  fire  resistive  construction materials.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_22","Interior  openings  into  corridor  should  be  protected  as  set  forth  in ____________________________.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_23","Main stairways should have a minimum width of 112 cm. Trims and handrails should not project more than 8.90 cm (3 1/2 in) into the required width.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_24","Landings on stairways should have a minimum dimension of 112 cm (44 in) in the direction of travel.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_25","Risers on stairways should not exceed 19 cm and tread exclusive of nosing or projections should not be less than 25 cm.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_26","Doors between guest’s rooms and corridors shall be self-closing and shall have a fire protection rating at least twenty (20) minutes.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_28","Openings in corridor partitions other than door openings shall be prohibited.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_29","Basement portion of stairways should be provided with an approved barrier where continuous to upper floor in an exit enclosure.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_30","Vertical distance between stairway landings are limited to 3.69 m (12 ft) in assembly occupancies, distance is 2.43 m (8 ft).");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_31","Handrails should be placed not less than 81.28 cm (32 in) above the tread. Two (2) handrails are required when stairways exceed 111.7 cm in width.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_32","Guardrails for stairs, balconies, stair landings, ramps & aisles located along the edge of openside floors and mezzanines shall be provided.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_33","There shall be no enclosed usable space under the stairs in an exit enclosure nor shall the open space under such stairs be used for any purpose.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_34","Non-combustible outside stairs are required to have 2.03 m (6 ft, 8 in) minimum headroom clearance for stairways which should be indicated on plans.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_35","Ramp slopes should have be roughened or with nonslip surface.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_36","Ramp slopes should not exceed 30.3 cm. (1 ft) in 3.03 m (10 ft.).");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_37","No openings other than the required exits are permitted and exit passageways should be one (1) hr fire resistive construction for a three (3) storey building or less and two (2) hrs for four (4) storey building or more. Any opening therein shall be protected with an approved self-closing fire doors.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_38","Exit illumination and directional EXIT signs shall be provided.");
INSERT INTO means_of_egress VALUES("Means_Egrees_Req_39","Panic hardware is required on exit doors. In lieu of this, doors shall have no locks or latches.");



DROP TABLE messages;

CREATE TABLE `messages` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `application_no` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `number` varchar(500) NOT NULL,
  `text_message` varchar(500) NOT NULL,
  `transaction` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO messages VALUES("1","25","James Good","09474298815","Good Day! Mr/Ms Ignacio your file has already been assessed!","Assessment","January 17, 2019 10:50 pm");
INSERT INTO messages VALUES("2","24","Courtney House","09085553776","Good Day! Mr/Ms kelly your file has already been assessed!","Assessment","January 17, 2019 10:50 pm");
INSERT INTO messages VALUES("3","23","Matthew Ben","09281615797","Good Day! Mr/Ms Prince Ledesma your file has already been assessed!","Assessment","January 17, 2019 10:50 pm");
INSERT INTO messages VALUES("4","26","Casey Rapid","09281615797","Good Day! Mr/Ms Gay Barnet you have passed the inspection and your file is ready for certification","Evaluation","January 17, 2019 10:50 pm");
INSERT INTO messages VALUES("5","27","Casey Rappa","09085553776","Good Day! Mr/Ms Casey Rappa your file has already been assessed!","Assessment","January 17, 2019 10:50 pm");
INSERT INTO messages VALUES("6","57","Prince Ledesma","09474298815","","Assessment","January 18, 2019 3:51 am");
INSERT INTO messages VALUES("7","7","Alain Palluschek","09956471293","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  Alain Palluschek you have passed the evaluation and your application is ready for clearance.","Assessment","January 18, 2019 2:29 pm");
INSERT INTO messages VALUES("8","7","jan2","09474298815","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  jan2 you have passed the inspection and your application is ready for clearance.","Issue Notice","January 18, 2019 6:12 pm");
INSERT INTO messages VALUES("9","2019-01-7","jan2","<br />
<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />
","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  jan2 you have passed the inspection and your application is ready for clearance.","Issue Notice","January 18, 2019 6:41 pm");
INSERT INTO messages VALUES("10","40"," Sanni","09474298815","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Sannithat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.","Inspection","January 18, 2019 7:07 pm");
INSERT INTO messages VALUES("11","38"," Claudia Jelk","cpnumb","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Claudia Jelkthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.","Issue Notice","January 18, 2019 7:10 pm");
INSERT INTO messages VALUES("12","3"," Octavius","09474298815","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you   Octavius you have passed the inspection and your application is ready for clearance.","Issue Notice","January 18, 2019 7:13 pm");
INSERT INTO messages VALUES("13","2019-01-38"," Claudia Jelk","<br />
<b>Notice</b>:  Undefined index: cpnumb in <b>C:xampphtdocsupdated-thesisfp-bcmismodalsViewIssueNotice.php</b> on line <b>89</b><br />
","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Claudia Jelkthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.","Issue Notice","January 18, 2019 7:14 pm");
INSERT INTO messages VALUES("14","4"," Sanni","09474298815","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Sannithat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.","Issue Notice","January 18, 2019 7:14 pm");
INSERT INTO messages VALUES("15","28","Mark","09085553776","Mr/Ms Markyour assessment was successfully verified.","Assessment","January 20, 2019 11:08 pm");
INSERT INTO messages VALUES("16","","","","","Assessment","January 20, 2019 11:23 pm");
INSERT INTO messages VALUES("17","","","","","Assessment","January 20, 2019 11:24 pm");
INSERT INTO messages VALUES("18","24","Ignacio","09474298815","Mr/Ms Ignacioyour assessment was successfully verified.","Assessment","January 20, 2019 11:32 pm");
INSERT INTO messages VALUES("19","55"," Elmer","09474298815","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Elmerthat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.","Inspection","January 20, 2019 11:35 pm");
INSERT INTO messages VALUES("20","54","LJEE","cpnumb","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  LJEE you have passed the inspection and your application is ready for clearance.","Inspection","January 20, 2019 11:42 pm");
INSERT INTO messages VALUES("21","153","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetanoyour assessment was put on hold because you have not fully paid the required amount for your application.","Assessment","January 23, 2019 12:55 am");
INSERT INTO messages VALUES("22","153","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetano your assessment was successfully verified.","Assessment","January 23, 2019 12:57 am");
INSERT INTO messages VALUES("23","109","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetano your assessment was successfully verified.","Assessment","January 23, 2019 1:31 am");
INSERT INTO messages VALUES("24","109","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetano your assessment was successfully verified.","Assessment","January 23, 2019 1:38 am");
INSERT INTO messages VALUES("25","109","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetano your assessment was successfully verified.","Assessment","January 23, 2019 1:39 am");
INSERT INTO messages VALUES("26","109","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetano your assessment was successfully verified.","Assessment","January 23, 2019 1:40 am");
INSERT INTO messages VALUES("27","109","Kenneth Cayetano","09474298815","Mr/Ms Kenneth Cayetano your assessment was successfully verified.","Assessment","January 23, 2019 1:41 am");
INSERT INTO messages VALUES("28","53"," Kenny","09474298815","We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms  Kennythat your application did not pass the inspection, we issue notice to comply and we will message you for further notice.","Inspection","January 23, 2019 3:13 am");



DROP TABLE officer;

CREATE TABLE `officer` (
  `1` int(10) NOT NULL AUTO_INCREMENT,
  `officer_type` varchar(50) NOT NULL,
  PRIMARY KEY (`1`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO officer VALUES("1","CRO");
INSERT INTO officer VALUES("2","Assessor");
INSERT INTO officer VALUES("3","Inspector");
INSERT INTO officer VALUES("4","Evaluator");
INSERT INTO officer VALUES("5","Inspection-CRO");



DROP TABLE rank;

CREATE TABLE `rank` (
  `id` int(10) NOT NULL,
  `rank_code` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO rank VALUES("1","F01");
INSERT INTO rank VALUES("2","F02");
INSERT INTO rank VALUES("3","F03");
INSERT INTO rank VALUES("4","F04");
INSERT INTO rank VALUES("5","SF01");



DROP TABLE users;

CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `login` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","Dare","kenneth","Matt","Murdockk","January 22, 2019, 8:00 pm","employee","Active");
INSERT INTO users VALUES("2","admin123","admin123","Melioad"," "," ","applicant","Inactive");
INSERT INTO users VALUES("3","admin","Masteradmin123","Kenneth Cayetano"," ","January 23, 2019, 2:05 am","applicant","Active");
INSERT INTO users VALUES("4","admin101","admin101","Kenneth","Canlog","January 20, 2019, 9:41 pm","employee","Inactive");
INSERT INTO users VALUES("5","admin1234","admin1234","Clark","KE","January 23, 2019, 10:36 pm","employee","Active");



DROP TABLE walls;

CREATE TABLE `walls` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO walls VALUES("Walls_Req_1","Provide standard fire wall with at least 100 cm (39.38 in) high parapets on all portion of the building on the property line.");
INSERT INTO walls VALUES("Walls_Req_2","Extend exterior masonry walls to form parapets or wings.");
INSERT INTO walls VALUES("Walls_Req_3","Provide protection of all exterior walls. All exterior walls facing approved alleys which are dead-ended must have a fire resistance of ______ hours.");
INSERT INTO walls VALUES("Walls_Req_4","Provide automatic fire dampers on wall openings.");



DROP TABLE warning_systems;

CREATE TABLE `warning_systems` (
  `checklist_id` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO warning_systems VALUES("Warning_Req_1","Provide approved emergency alarm bell system on each floor with adequate number of sending stations.");
INSERT INTO warning_systems VALUES("Warning_Req_2","Provide approved type heat and smoke detection system.");
INSERT INTO warning_systems VALUES("Warning_Req_3","Provide efficient communication system for warning occupants and calling fire department.");
INSERT INTO warning_systems VALUES("Warning_Req_4","Provide/post   allowable   occupant   load   sign/s.   Such   signs   shall   be conspicuously and suitably located.");
INSERT INTO warning_systems VALUES("Warning_Req_5","Provide fire protection/suppression during construction.");
INSERT INTO warning_systems VALUES("Warning_Req_7","Provide fire exit plan for each floor of the building showing the routes from each room to appropriate exits, displayed prominently on the door of each room.");
INSERT INTO warning_systems VALUES("Warning_Req_8","No heating or lighting apparatus or equipment capable of igniting flammable materials shall be used in any storage or work area where rags, excelsior, hair or other highly flammable or combustible materials are stored or used.");
INSERT INTO warning_systems VALUES("Warning_Req_9","Provide/post \"NO SMOKING\" sign/s where combustible materials are stored or handled. Such signs shall be conspicuously and suitable located.");
INSERT INTO warning_systems VALUES("Warning_Req_10","If high hazard commodities will be stored/handled, automatic fire suppression system shall be provided.");
INSERT INTO warning_systems VALUES("Warning_Req_11","Provide/post \"DO NOT USE ELEVATOR IN CASE OF FIRE\" sign/s.");
INSERT INTO warning_systems VALUES("Warning_Req_12","LPG tank/s must be installed outside the building and should be provided with safety devices that automatically stop the flow of gas should a leak develop.");
INSERT INTO warning_systems VALUES("Warning_Req_13","Provide fire resistive walls between stair & kitchen area.");
INSERT INTO warning_systems VALUES("Warning_Req_14","Provide outside window/s for rescue and ventilation with a minimum clear opening of 55 cm and approximately one half (0.5) m2 in area; the bottom of window opening is not more than eighty two (82) cm above the floor; it can readily be opened from the inside without the use of tools; where storm windows, screens, or antiburglar devices are used, these be provided with quick mechanism so that they may be so arranged that when opened they will not drop to the ground.");
INSERT INTO warning_systems VALUES("Warning_Req_15","Rooms used for kindergarten, first or second grade pupils shall not be located above or below the floor of exit discharge. Rooms used for second grade pupils shall not be located more than one (1) storey above the floor of exit discharge.");
INSERT INTO warning_systems VALUES("Warning_Req_16","Provide firefighters’ elevator.");
INSERT INTO warning_systems VALUES("Warning_Req_17","All correction indicated on the original approved plan from this office on shall be followed.");
INSERT INTO warning_systems VALUES("Warning_Req_18","Any changes in occupancy other than stated shall be in accordance with Rule 10.");
INSERT INTO warning_systems VALUES("Warning_Req_19","Subject to inspection during construction.");
INSERT INTO warning_systems VALUES("Warning_Req_20","Fire Safety Inspection Certificate must be secured before/prior to issuance of Certificate of Occupancy.");
INSERT INTO warning_systems VALUES("Warning_Req_21","Subject to additional requirements upon recommendation of the Fire Safety Inspector during construction phase and final inspection.");



