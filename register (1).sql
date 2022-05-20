-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 20, 2022 at 07:10 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('akankshapreety4545@gmail.com', 'preety');

-- --------------------------------------------------------

--
-- Table structure for table `admission_b`
--

DROP TABLE IF EXISTS `admission_b`;
CREATE TABLE IF NOT EXISTS `admission_b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mother` text NOT NULL,
  `father` text NOT NULL,
  `apply_for` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `identification` text NOT NULL,
  `category` text NOT NULL,
  `ward_of_lnmu_emp` text NOT NULL,
  `centre` text NOT NULL,
  `image` longblob NOT NULL,
  `12equivalent` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `12clg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `12board` text NOT NULL,
  `12passingyr` year(4) NOT NULL,
  `12percentage` double NOT NULL,
  `Dequivalent` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Dclg` text NOT NULL,
  `Duniversity` text NOT NULL,
  `Dpassingyr` year(4) NOT NULL,
  `Dpercentage` double NOT NULL,
  `Domicile_BR` text NOT NULL,
  `Corresponding_add` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Permanent_add` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` bigint(20) NOT NULL,
  `alter_contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhaar` bigint(50) NOT NULL,
  `date` date NOT NULL,
  `file` longblob NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `payment_detail` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admission_b`
--

INSERT INTO `admission_b` (`id`, `name`, `mother`, `father`, `apply_for`, `dob`, `identification`, `category`, `ward_of_lnmu_emp`, `centre`, `image`, `12equivalent`, `12clg`, `12board`, `12passingyr`, `12percentage`, `Dequivalent`, `Dclg`, `Duniversity`, `Dpassingyr`, `Dpercentage`, `Domicile_BR`, `Corresponding_add`, `Permanent_add`, `contact`, `alter_contact`, `email`, `adhaar`, `date`, `file`, `payment_status`, `payment_id`, `payment_detail`) VALUES
(1, 'Preety Akanksha', 'Pooja Shrivastava', 'Mukesh Ranjan', 'B.Tech(IT/', '2021-08-08', 'mole near nose', 'gen', 'yes', 'dbg', 0x5072656574792e6a7067, 'pcm', 'Chandrasheel Vidyapeeth', 'CBSE', 2017, 81, 'NA', '', '', 0000, 0, 'yes', 'mfp', 'mfp', 9999999999, 8888888888, 'akankshapreety4545@gmail.com', 777777777777, '2021-08-08', 0x416476616e636564204a6176612d446f744e65742d507974686f6e20446576656c6f7065722e706466, 'complete', 'pay_HiU7Zzw3HN3owG', '2021-08-08 04:45:54'),
(5, 'Preety Akanksha', 'Preety Akanksha', 'Preety Akanksha', 'B.Tech(IT/', '2000-02-20', 'black mole in left hand', 'gen', 'no', 'dbg', 0x4e49454c49542d4c6f676f2e706e67, 'pcm', 'Chandrasheel Vidyapeeth', 'CBSE', 2017, 81, 'NA', '', '', 0000, 0, 'yes', 'mfp', 'mfp', 6202119227, 8804147112, 'preetyakanksha7352@gmail.com', 242259197294, '2022-05-20', 0x5072656574795f706167652d303030312e6a7067, 'complete', 'pay_JVZh83jBr7NqUr', '2022-05-15 04:48:15'),
(4, 'Preety Akanksha', 'Pooja Srivastava', 'Late Mukesh Ranjan', 'B.Tech(IT/', '1999-06-12', 'black mole in left hand', 'gen', 'no', 'dbg', 0x5072656574792e6a7067, 'pcm', 'Chandrasheel Vidyapeeth', 'CBSE', 2017, 81, 'NA', '', '', 0000, 0, 'yes', 'Muzaffarpur', 'Muzaffarpur', 6202119227, 8804147112, 'preetyakanksha1@gmail.com', 242259197294, '2022-01-20', 0x50726565747920416b616e6b736861202d20526573756d652e7064662e706466, 'complete', 'pay_Im244JyJef0Wfr', '2022-01-20 02:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `admission_mca`
--

DROP TABLE IF EXISTS `admission_mca`;
CREATE TABLE IF NOT EXISTS `admission_mca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mother` text NOT NULL,
  `father` text NOT NULL,
  `dob` date NOT NULL,
  `identification` text NOT NULL,
  `category` text NOT NULL,
  `ward_of_lnmu_emp` text NOT NULL,
  `centre` text NOT NULL,
  `image` longblob NOT NULL,
  `12equivalent` varchar(10) NOT NULL,
  `12clg` text NOT NULL,
  `12board` text NOT NULL,
  `12passingyr` year(4) NOT NULL,
  `12percentage` double NOT NULL,
  `Dclg` text NOT NULL,
  `Duniversity` text NOT NULL,
  `Dpassingyr` year(4) NOT NULL,
  `Dpercentage` double NOT NULL,
  `Domicile_BR` text NOT NULL,
  `Corresponding_add` text NOT NULL,
  `Permanent_add` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `alter_contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhaar` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `file` longblob NOT NULL,
  `payment_status` varchar(55) NOT NULL,
  `payment_id` varchar(55) NOT NULL,
  `payment_detail` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admission_mca`
--

INSERT INTO `admission_mca` (`id`, `name`, `mother`, `father`, `dob`, `identification`, `category`, `ward_of_lnmu_emp`, `centre`, `image`, `12equivalent`, `12clg`, `12board`, `12passingyr`, `12percentage`, `Dclg`, `Duniversity`, `Dpassingyr`, `Dpercentage`, `Domicile_BR`, `Corresponding_add`, `Permanent_add`, `contact`, `alter_contact`, `email`, `adhaar`, `date`, `file`, `payment_status`, `payment_id`, `payment_detail`) VALUES
(1, 'Rashmi Guriya', 'Rashmi Guriya', 'Rashmi Guriya', '2021-07-30', 'mole', 'ews', 'yes', 'dbg', 0x6c6e6d752e6a7067, 'pcb', 'Ch', 'cbse', 2017, 81, 'WIT', 'LNMU', 2020, 81, 'yes', 'mfp', 'mfp', 6202119227, 8804147112, 'rashmi@yahoo.com', 777777777777, '2021-08-08', 0x50524545545920414b414e4b534841202831292e706466, 'complete', 'pay_HiTzO41nPF9bTw', '2021-08-07 11:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_end` longtext NOT NULL,
  `bot_end` longtext NOT NULL,
  `book1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `book2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `book3` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `book4` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `book5` longtext,
  `book6` longtext,
  `book7` longtext,
  `book8` longtext,
  `book9` longtext NOT NULL,
  `book10` longtext NOT NULL,
  `book11` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_end`, `bot_end`, `book1`, `book2`, `book3`, `book4`, `book5`, `book6`, `book7`, `book8`, `book9`, `book10`, `book11`) VALUES
(1, 'Hi||Hola||Welcome', 'Hello! How may I help you', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(2, 'Hello', 'Hi! How may I help you?', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(3, 'bye', 'See you!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(4, 'What is your name?', 'My name is Student\'s Bot. Nice to meet you.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(5, 'Engineering Mathematics||Maths||Math||Mathematics-1||Mathematics-2||Mathematics-3', 'Higher Engineering Mathematics - B.S. Grewal (Khanna Publishers) \r\n', 'Advance Engineering Mathematics - H.K. Dass (S.Chand)', 'Advanced Engineering Mathemtics Volume 1 - Sarna', 'Engineering Mathematics Vol 1 - G. Shankar rao', 'Fundamentals of mathematical Statistics - S.C. Gupta - V.K. Kapoor', 'Advanced Engineering Mathematics - Jain Iyenger (Narosa)', 'Advanced Engineering mathematics - KREYSZIG (WILEY)', 'Engineering Mathematics - N.P. bali', 'Engineering mathematics - Raj K. Tiwari', '', '', ''),
(12, 'Engineering Chemistry||Chemistry', 'Pradeep\'s Chemistry - S.C. Kheterpal, P.N. Kapil, S.N. Dhawan', 'Environmental Chemistry - Manish L. Shrivastava', 'Engineering Chemistry - Jain & Jain', 'Engineering Chemistry - Dr. R.R. Soni and dr. V. Yadav', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(13, 'Engineering Mechanics||Mechanics||EM', 'A textbook of Engineering Mechanics - R.S. Khurmi (S. Chand technical)', 'Engineering Mechanics - Shames . Rao (Pearson)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(14, 'Elements of Mechanical Engineering||EME', 'Basic Mechanical Engineering - TJ Prabhu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(15, 'Workshop', 'Workshop Practices - Swarn singh', 'Workshop Technology - Chapman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(16, 'Organizational Behaviour and Industrial Psychology||OBIP', 'Organisational behaviour - L.M. Prasad', 'Organisational behaviour - Arun Kumar and N Meenakshi', 'Organisational behaviour  An Evidence Based Approach - Luthans', 'Organisational behaviour - M.N. Mishra', 'Organisational behaviour - Surendra Jain and Sonia Bhargav', 'text book of Electrostatistics - D.k. J', NULL, NULL, NULL, '', '', ''),
(17, 'Communicative English||English||Eng', 'Communication Skills and Functional Grammar - Sadhana Gupta', 'Business Correspondence and Report Writing - Sharma Mohan (McGRAW HILL)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(18, 'Physics', 'Engineering Physics - Dipak Chandra ghosh nripesh Chandra Ghosh Prabir Kumar Haidar', 'Encyclopaedia of Engineering Physics - Shalender Singha (DPH)', 'Engineering Physics - P.K. Mittal', 'Polarization and Laser - Shalender Singh', 'Modern Engineering Physics - A.S. Vasudeva (S. Chand Technical)', 'Principles of Electromagnetics - Sadiku(Oxford)', 'Engineering Physics - R k Gaur and S L Gupta', 'Fundamentals of Physics (halliday | Resnick | walker)', NULL, '', '', ''),
(19, 'Basic Electrical Engineering||BEE||Electrical Engineering', 'Basic Electrical Engineeing - V.K.Mehta and Rohit Mehta (S. Chand Technical)', 'A Textbook of Electrical Technology B.L. Theraja and  A.K. theraja (s. Chand)\r\n', 'Fundamentals of Electrical Engineering - BOBROW (OXFORD)', 'Fundamentals of Basic Electrical Engineering - Prasad', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(20, 'Fundamental of Information Technology||FIT||Information Technology', 'Fundamentals of Computers - RajaRaman (PHI)', 'Foundation of Information technology - D.S. Yadav', 'Introduction to Information Technology - ITL ESL (Pearson)', 'Foundation of Information technology - Shalini Gupta', 'Computer at a glance - A.k. Gupta', NULL, NULL, NULL, NULL, '', '', ''),
(21, 'Engineering Graphics||Engineering Drawing||ED||EG', 'Engineering Drawing - N.D. Bhatt', 'Engineering Drawing - Shah Rana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(22, 'Object Oriented Programming||OOP||Object-Oriented||C++', 'Object Oriented Programming with C++ - E. Balagurusamy (McGraw Hill)', 'The Waite Group\'s Object oriented Programming in TURBO C++ - Robert Lafore (GALGOTIA)', 'Programming with C++ - Ravichandran (McGraw Hill)', 'Object Oriented Programming with C++ - Secong edition - Sahay (OXFORD)', 'Object Oriented Programming using C++ - Chandra (Narosa)', 'Object Oriented Programming with C++ and JAVA - Samanta(pHI)', 'Kamthane - Object Oriented Programming with ANSI & Turbo C++ (Pearson)', 'Thinking in C++ -Eckel (Pearson)', 'Programming Concept with C++ - Dr. Y.K. singh', 'C++ programming Language - Er. N.B.L. Mathur ', 'Stroustrup - The C++ Programming Language - Third Edition (Pearson)', ''),
(23, 'Introduction in Communication system||Communication System', 'Communication Systems An Introduction to Signals and Noise In Electrical Communication - Carlson Crilly (McGraw Hill)', 'Discrete Time Signal Processing - Oppenheim Schafer (Pearson)', 'Signals and Systems (with matlab programming) - Sanjay Sharma', 'Communication Systems - Haykin (Wiley)', 'Kennedy\'s Electronic Communication Systems', NULL, NULL, NULL, NULL, '', '', ''),
(24, 'Digital Electronics||DE', 'Digital Circuits and Designs - S Salivahanan  . S Arivazhagan (Vikas)', 'Modern Digital electronics - JAIN (McGraw Hill)', 'Digital Design - Er. N.B.L. Mathur', 'Introduction to Digital Microelectronic Circuits - er. N.B.L. Mathur', 'Digital Electronics - Dr. S.K. Das (shree)', 'Digital Fundamentals - floyd and Jain', 'Digital Principles and applications - Leach Malvino Saha (McGraw Hill)', 'Switching Circuit and Logic Design - Er. N.B.L. Mathur', NULL, '', '', ''),
(25, 'Industrial Economics and Accounting||IEA||Economics', 'An Introduction to Accountancy - SN Maheshwari - SK Maheshwari (Vikas)', 'Modern Economic Theory - K.K. DEWETT (S.Chand)', 'Anvanced Economic Theory - M.L Jhingan (Vrinda)', 'Managerial Economics - Gupta (TMH)', 'Indian economy - Ruddar Datt and K.P.M. Sundharam (S. Chand)', 'Modern Microeconomics Theory and Applications - Dr. H.L. Ahuja (S. Chand)\r\n\r\n', 'Marketing Management -Kotler keller Koshy Jha', 'Marketing Management - Ramaswamy Namakumari', 'Financial Management - Khan. Jain (TMH)', 'Principle and Practice of management - L.M. Prasad', '', ''),
(26, 'Basic Electronics||BE', 'Electronic Devices and Circuits - Millman and Halkais (McGraw Hill)', 'Basic Electronics Solid State - B.L. Theraja (S. Chand)', 'Prinicples of Electronics - V.K. Mehta . Rohit Mehta (S. Chand Technical)', 'Basic Electronics Engineering - J P Bandyopadhyay', 'Electronics Engineering - J.B. Gupta', 'Basics Of Electronics - Lalit sachdeva', 'Basic Electronics - Arun Kumar', 'Electronic Devices and Circuit Theory - Boylestad Nashelsky (PEARSON)', NULL, '', '', ''),
(27, 'Numerical methods and computational techniques||numerical methods & computational techniques||NMCT', 'Higher Engineering Mathematics - B.S. Grewal (Khanna Publishers) ', 'Computer Oriented Numerical Analysis - Pandey Mishra ', 'Applied Numerical Analysis (Pearson)', 'Introduction Methods of Numerical Analysis - Sastry (PHI)', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(28, 'Discrete Mathematical structure and graph theory||discrete mathematics', 'Higher Engineering Mathematics - B.S. Grewal (Khanna Publishers) ', 'Discrete Mathematics and Structures Dr. Satinder Bai Gupta', 'Elements of Discrete Mathematics -MohanPatra ', 'Discrete Mathematical Structures with applications to computer science (TMH)', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(29, 'Analog Electronics||AE', 'Problems and solutions in Analog Systems - Gopal', 'Integrated Electronics - Millman\'s  second edition', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(30, 'Data structure||DS', 'Data Structure using C and C++ (Pearson)', 'C & Data Structures - Deshpande Kakde (dreamtech)', 'Data Structures using C - ISRD Group (TMH)', 'Data Structures - LIPSCHUTZ (TMH)', 'Data Structures through C In Depth - S.K. Srivastava ', 'Data structure Through C++ - ISRD Group', 'Fundamentals of Data Structures - Ellis Horowitz - Sartaj Sahni ', 'Expert Data Structure with c - Patel', 'Data Structure using C++ - Patil', 'Data Structure in C - Sudhir Dawra', 'Data Structure and Algorithm - Dilshad Hasan', 'Introduction to Data Structures in C - Kamthane'),
(31, 'Computer Architecture||CA', 'Computer Organization and Design - pal Chaudhari (PHI)', 'Computer system Architecture - Mano (Pearson)', 'Computer Architecture and Organization - Hayes (McGraw Hill) ', 'Computer System Architecture - Shrivastav', 'Computer Organization and Architecture - William stallings (Pearson)', 'Computer Architecture and parallel processing - Hwang Briggs (McGraw Hill)', 'Computer system architecture - Dr. S.K. Dass', 'Computer system, Organization and Architecture - Rajeev ranjan', 'Computer Architecture and Organization - Carter', 'Computer Systems Organization and architecture - Carpinelli', '', ''),
(32, 'System programming||SP', 'System Programming - Dhamdhere (McGraw Hill)', 'System Programming - John J. Donovan (McGraw Hill)', 'System Software  - Beck Manjula - Third Edition (Pearson)', 'System Programming and Operating Systems - Dhamdhere', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(33, 'Environmental Science||EVS', 'An Introduction to Environmental Science - R.M. Mishra', 'Environmental Science - Sawyer . McCarty . Parkin', 'Environmental Science - Miller | Spoolman', 'Introduction to Environmental Science - G. Tyler Miller And scott Spoolmen', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(34, 'Microprocessor and it\'s Applications||Microprocessor and its application||Microprocessor', 'Microprocessors and Interfacing - HALL(TATA McGRAW HILL)', 'The Intel Microprocessors - Brey Eighth Edition (Pearson)', 'Microprocessor Architecture, Programming, and Applications with the 8085 - Gaonkar (PENRAM)', 'Fundamentals of Microprocessors  and Microcontrollers - B.Ram (Dhanpat Rai Publication)', 'Microelectronic Circuits - Sedra . Smith (Oxford)', NULL, NULL, NULL, NULL, '', '', ''),
(35, 'database system||database management system||DB||DBMS', 'Fundamentals of Database System - Sudhir Gupta', 'Introduction to Database Management - Gillenson, Ponniah Kriegal, Trukhov, Taylor Powell, Miller', 'A Textbook of Database Management System - Swarup K. Das', 'Database Management System - P.S. Gill', 'Database Management System - Narang', 'Database Systems - Elmasri Navathe (Pearson)', 'Database System Concepts - Silberschatz lorth sudarshan - McGraw Hill)', 'Database Management System - Dr. Y.K. Singh', 'Database System Concepts - Peter Rob Carlos Coronel', 'Oracle Database 11g The Complete Reference - Loney (TMH)', '', ''),
(36, 'Design and Analysis of algorithms||DAA||Algorithm', 'Introduction to Algorithms - Cormen Leiserson Rivest Stein (PHI)', 'Mastering Algorithms with C - Harish gupta', 'Computer algorithms: Introduction to design and analysis - Harish Gupta', 'Computer Algorithms Introduction to design and analysis (Pearson)', 'Design and Analysis of Computer Algorithm - V.V. Muniswamy', 'Data Structure and Algorithm - Dilshad Hasan', 'Fundamentals of Computer Algorithms ', NULL, NULL, '', '', ''),
(37, 'Introduction to Java Programming||Java Programming||Java', 'The Complete Reference - Java Seventh Edition - Herbert Schildt (TMH)', 'Starting Out with Java - Gaddis (Pearson)', 'ORACLE - Java The Complete Reference Eight Edition - Schildt (Mc GrAW Hill)', 'J2EE 1.4 - WILEY (Wiley INDIA)', 'Programming with Java - Balagurusamy', 'Core Java Volume 1 . Fundamentals Eighth Edition (Pearson)', 'Core Java Volume 2 . Advanced Features Eighth Edition (Pearson)', 'Object Oriented System with Java - Lalit Arora', 'Internet and Java Programming - R. Krishnamurthy S. Prabhu', 'The Complete Reference J2ME - Keogh (McGraw HILL)', 'Beginning J2ME - Li & Knudsen (Apress)', 'Java HOW TO PROGRAM - Ninth edition DEITEL '),
(38, 'Operating System||OS', 'Operating System Concepts 8th edition - WILEY', 'Operating System Third Edition (Pearson)', 'Operating System - Compiled and edited by Ayaz Ahmad', 'Operating System - Ritu Choudhary', 'Silberschatz Galvin Gagne - Operating System Concepts 8th edition - Wiley', 'MILENKOVIC - Operating Systems (TATA McGRAW HILL)', 'Operating Systems - A Concept Based Approach Third Edition - Dhamdhere (McGraw Hill)', 'Tanenbaum - Modern Operating Systems Third Edition (Pearson)', 'Encyclopedia of Operating System - Sudhir Kumar', '', '', ''),
(39, 'Computer Networks||CN||Networking', 'Data Communications and Networking - FOROUZAN (Mc Graw Hill)', 'Data and Computer Communications - William Stalings (Pearson)', 'Data Communication Network - Dr. Sanjay Sharma', 'Data Communication and Networking - Er. N.B.L. Mathur', 'Data Communications and Computer Networks - GUPTA (pHI)', 'Introduction to Data Communications and Networking - Tomasi (PEARSON)', 'Computer Networking - Kurose Ross - Third edition (Pearson)', 'TCP/IP Protocol suite - Forouzan (Mc Graw Hill)', 'Problems and solutions of Network and systems - Jairath', 'Computer Networks - Tanenbaum (Pearson)', 'Computer Networks - protocols, standards and interfaces - Black', 'Network Management - Ayaz Ahmad'),
(40, 'Formal Languages and Automata Theory||Formal Languages & automata theory||FLAT||Automata', 'Introduction to Automata Theory, Languages, and  Computation - Hopcraft Motwani Ullman (Pearson)', 'Theory of Computer Science - K.L.P Mishra (PHI Learning)', 'Automata Theory Language and Computation - Dabeer Hasan', NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(41, 'Web Technology||Web applications||web applications design and development||WD||Web development', 'Web technology and design - C.Xavier', 'Web Technology - Aditi Chawla - Deepti Sachdeva - Amandeep Kaur', 'Beginning HTML, XHTML, CSS and JavaScript(wrox)', 'HTMSL 5 - The Complete Reference - HTML & CSS (McGraw Hill)', 'HTML/XHTML - Preeti Jain', 'Web Technologies Godbole and Kahate (TMH)', 'Flexible Web Design Gillenwater (PHI)', 'Web programming - Nischit Mathur', 'Dynamic Web Publishing HTML+Java+JavaScript+CGI+Stylesheets(Techmedia)', 'Web programming Building internet applications - Bates', '', ''),
(42, 'Object Oriented analysis and design||ooad', 'Object- Oriented Modeling and design with UML - JAMES RAMBAUGH', 'Object- Oriented Analysis and Design - Understanding System Development with UML 2.0 - O\'Docherty (WILEY India)', 'Object Oriented Analysis and Design with Applications (Pearson)', NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(43, 'Principles of programming languages||PPL', 'Fundamentals of Programming languages - Ellis Horowitz', 'Programming Language - Imran Ahmad', 'Programming Language classification and programme methodology', 'Programming language Principles and Practice - Louden and Lambert', 'Programming Language Design Concepts- David A. Watt', NULL, NULL, NULL, NULL, '', '', ''),
(44, 'Compiler design||compiler||CD', 'Compiler Design - Santanu Chattopadhyay', 'Compilers Principles, Techniques and Tools Second Edition - Aho Lam Sethi Ullman (PEARSON)', 'Compilers - Aho Lam Sethi Ullman (PEARSON)', 'Concepts of COMPILER DESIGN - Adesh K. Pandey', 'Compiler Design - Dilshad Hasan', NULL, NULL, NULL, NULL, '', '', ''),
(45, 'Software Engineering||SE', 'Software Engineering - Jawadker (TMH)', 'Software Engineering - the engineering approach - Peters Pedrycz', 'Fundamentals of Software Engineering Rajib Mall (PHI)', 'Software Engineering - Pressman (McGraw Hill)', 'Software Engineering - Ayaz Ahmad', 'Fundamentals of Software Engineering - Harish Gupta', 'Software Engineering - Pankaj Jalote - Wiley India', 'An integrated approach of Software Engineering - Jalote ', 'Software Engineering - KK. Aggrawal and Yogesh Singh', '', '', ''),
(46, 'Artificial Intelligence||AI', 'Introduction to Artificial Intelligence -  Rajendra Akerkar', 'Principles of Artificial Intelligence - Nilsson', 'Artificial Intelligence - Third Edition - Rich Knight Nair(TMH)', 'Artificial Intelligence - Ayaz Ahmad', 'Introduction to Artificial Intelligence - Charniak McDermott (PEARSON)', 'Priniciples of Artificial Intelligence - Nils J. Nilsson', 'Artificial Intelligence - ELA KUMAR', 'Artificial Intelligence - Jones and Bartlett', 'Artificial Intelligence - Sharbani Bhattacharya', 'Introduction to Artificial Intelligence and Expert Systems - Patterson', 'Artificial Intelligence and Intelligent Systems (OXFORD)', ''),
(47, 'Visual Programming||VP||.net||c#', 'Programming in Visual Basic 6.0 - Bradley Millspaugh (Tata  McGraw Hill)', 'Visual C# 2010 - Wiley India (wrox)', 'Visual Basic 6 Programming - Black Book - Holzner (dreamtech)', 'Visual C# 2012 Programming (wrox)', 'Microsoft Visual C# 2010 Step by step', 'Professional ASP.NET 4 in C# and VB - Wiley India(wrox)', 'ASP.Net with C# - Kumar Sanjeev . Shibi Panikkar', 'The Complete Reference C# 4.0 - Schildt (Mc Graw Hill)', NULL, '', '', ''),
(48, 'Data Mining and warehousing||data mining', 'Data Warehousing Fundamentals - A comprehensive guide for IT professions', 'Data Warehousing - Mohanty (TMH)', 'Data Mining - Roiger Geatz (Pearson)', 'Data Warehousing, Data Mining & OLAP (McGraw Hill)', 'Data Mining - Dunham (Pearson)', 'Data Mining - Han Kamber Pei', 'Principles and implementation of Data Warehousing - Rajeev A. Parida', 'Data Mining  and Data WareHousing - Bharat Bhushan Agrawal and Sumit Prakash Tayal', 'Data Warehousing - Mohanty (McGraw Hill)', 'Data Warehousing Fundamentals A comprehensive Guide for IT Professionals (Wiley)', 'Data Warehousing Fundamentals For IT Professionals (WILEY)', 'Data Mining, Data Warehousing and OLAP - Gajendra Sharma'),
(49, 'Distributed Computing||Distributed computing and its applications||DC||dos||Distributed operating system', 'Distributed Operating Systems - Tanenbaum (Pearson)', 'Distributed Computing - WILEY', 'Distributed Computing Approaches and Applications', 'Java Server Programming Java EE6 (JSEE 1.6) -Black Book', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(50, 'Distributed Database Management System||Distributed database||DDBMS', 'Principles of Distributed Database Systems (Pearson)', 'Distributed Operating System Concepts and Design - Sinha', 'Database System Concepts - Silberschatz Korth Sudarshan (McGraw Hill)', 'Database System - Elmasri Navathe', 'Database System Concepts - Peter Rob Carlos Coronel', NULL, NULL, NULL, NULL, '', '', ''),
(51, 'Cryptography||crypto', 'Cryptography and Network Security - Stallings (Pearson)', 'Network Security - Bible - Cole - Wiley India', 'Mao Modern Cryptography (Pearson)', NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(52, 'Personal Management and industrial training||personnel management and industrial training||PMIR', 'Personnel management and industrial Relations - P.C. Tripathi (sultan)', 'Human Resource Management - Dessler Varkkey (Pearson)', 'Essentials of Management - Koontz Wehnch - Fifth edition', 'Human values - A.N. Tripathi', 'Industrial Relations. Trade Unions, and Labour Legislation - Sinha Sinha Shekhar (Pearson)', 'Human Resource and Management - PG Aquinas (Vikas)', 'Principles of Management - K Anbuvelan', 'Human Resource Development and Resource Growth', 'Human Resource Management - Raj Kumar', '', '', ''),
(53, 'Wireless and mobile communication||WMC||wireless', 'Mobile Computing Second edition - Raj Kamal (OXFORD)', 'Mobile Computing - Talukder Ahmed Yavagal (McGraw Hill)', 'Mobile Computing - Prashant Kumar Patra - Snajit Kumar Dash\r\n', 'Mobile and Wireless Design Essentials', 'Mobile Communications - Pearson', 'Wireless communications and Networks - Pearsom', NULL, NULL, NULL, '', '', ''),
(54, 'XML web services||xml', 'XML, Web Services and the Data revolution - Coyle (Pearson)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(55, 'Multimedia Technology and application||multimedia', 'Mutimedia Computing, Communications & Applications - Steinmetz Nahrstedt (Pearson)', 'Principles of MULTIMEDIA - 2e - Parekh (Tata McGraw Hill)', 'Multimedia System Design - pHI', 'Holzinger Multimedia Basics', 'Multimedia Technology & Applicationss - HILLMAN', 'Media Coding and Content Processing - Steinmetz Nahrstedt', NULL, NULL, NULL, '', '', ''),
(56, 'Intrusion Detection||ID', 'Network Management - Ayaz Ahmad', 'Introduction to computer security - Bishop(Pearson)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(57, 'MIS||Management Information system', 'Essentials of Management - Koontz Wehnch - Fifth edition', 'Principles of Management - K Anbuvelan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(58, 'E-commerce||ERP||e commerce', 'E-Commerce An Indian Perspective - Joseph (PHI)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(59, 'Advance Computer architecture||ACA||adv computer arch', 'Advanced Computer Architecture - Parallelism | Scalability | Programmability - Hwang', 'Computer Architecture and parallel processing - Hwang Briggs (McGraw Hill)', 'Introduction of Parallel Computing - Grama Gupta Karypis Kumar (Pearson)', 'Parallel Computing- Theory of Practice (MGraw Hill)', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(60, 'Genetic algorithm||GA', 'Genetic Algorithms in Search, Optimization & Machine Learning - David E. Goldberg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(61, 'Computer graphics||CG', 'Computer graphics - Hearn baker (Prentice Hall)', 'Computer Graphics - prof. Madasu Hanmandlu', 'Prinicples of Interactive Computer Graphics ', 'Computer Graphics - ISRD Group', 'Computer graphics - Adesh K. Pandey', 'Graphics & Projects - B.M. Havaldar', 'Computer Graphics - Hearn Baker (Pearson)', 'Photoshop CS - Shruti Lal', 'Computer Graphics - V.K. Panchghare', 'Computer Graphics A Programmin Approach - Mc Graw Hill)', 'Procedural Elements for Computer Graphics - Rogers (TMH)', ''),
(62, 'C Programming Language||C', 'Programming in ANSI C - Balagurusamy', 'Programming in C - Dey Ghosh (Oxford)', 'Programming in C - Kamthane (Pearson)', 'Let Us C - Yashwant Kanetkar', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(63, 'Unix||Linux', 'UNIX Network Programming - Stevens Fenner Rudoff - Volume 1 third edition (Pearson - Prentice Hall)', 'UNIX Concepts and Applications - DAS - fourth edition (TMH)', 'Intoduction to Unix and Linux - Muster (Tata McGRAW HILL)', 'LINUX - Ritu Choudhary', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(64, 'Information Security', 'Network Management - Ayaz Ahmad', 'Network Security - Bible - Cole - Wiley India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fee_1`
--

DROP TABLE IF EXISTS `fee_1`;
CREATE TABLE IF NOT EXISTS `fee_1` (
  `Email` varchar(30) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_detail` datetime NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `roll` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fee_1`
--

INSERT INTO `fee_1` (`Email`, `payment_id`, `payment_detail`, `payment_status`, `roll`) VALUES
('akankshapreety4545@gmail.com', 'pay_JVvFQGnrDlLV1t', '2022-05-16 07:23:15', 'complete', '192125'),
('simranjha169@gmail.com', '', '0000-00-00 00:00:00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fee_2`
--

DROP TABLE IF EXISTS `fee_2`;
CREATE TABLE IF NOT EXISTS `fee_2` (
  `Email` varchar(30) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_detail` datetime NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `roll` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fee_2`
--

INSERT INTO `fee_2` (`Email`, `payment_id`, `payment_detail`, `payment_status`, `roll`) VALUES
('preetyakanksha7352@gmail.com', 'pay_JWBJG12H2LRZTY', '2022-05-17 11:05:59', 'complete', '192145');

-- --------------------------------------------------------

--
-- Table structure for table `fee_3`
--

DROP TABLE IF EXISTS `fee_3`;
CREATE TABLE IF NOT EXISTS `fee_3` (
  `Email` varchar(30) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_detail` datetime NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `roll` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_4`
--

DROP TABLE IF EXISTS `fee_4`;
CREATE TABLE IF NOT EXISTS `fee_4` (
  `Email` varchar(30) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_detail` datetime NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `roll` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `dob` date NOT NULL,
  `roll` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `univ_roll` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `reg_no` text NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `postal_code` bigint(100) NOT NULL,
  `state` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `batch` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `email`, `contact`, `dob`, `roll`, `univ_roll`, `reg_no`, `password`, `address`, `city`, `postal_code`, `state`, `country`, `batch`, `image`) VALUES
('Preety Akanksha', 'akankshapreety4545@gmail.com', 8804147112, '1999-01-20', '18-CS-01', '192125', '1852410332', '$2y$10$mqHBItGZ0DLYM0Bzmu/zPOgMHYqgHBw0X/klOOKHv7AUl7cVXBYiS', 'mfp', 'mfp', 842001, 'bihar', 'India', '2018-22', 0xffd8ffe000104a46494600010100000100010000ffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc200110800c800c803012200021101031101ffc4001c0001000105010100000000000000000000000403050607080102ffc4001c0101000105010100000000000000000000000602030405070108ffda000c03010002100310000001ea9000a5e724b6dd5fef0b53a76bde3234fedcaa35502c8000000000003e7ea998d72c74b730fb2ec7e2dd28ba2ec0eade4feafa796c81ec780000000000014ea53309e6de92e6bae53422fdf997d372bea9e58e83c3e6795e25a434df96fb3a56b0d23b283f6f48e74dd7899190a8d5c7caf40000000a7529984f37f48737d7278df3ed4cee9be592f567b1efd7d4ea4a36be079ddb37df2ce13e66d6cdb46f3adbbc8df1a497f6755d41b3f4323b83e7ead5e000014ea53309e6fe90e6fae4d12ad2a99bd37db25e60d8abcbc67db86cc2b5ce09bbec599cb34ddeaf38949e0979c372f859da9c3f3db057c4dff56cc85360dd14000053a94cc2b9c3a3f9c2b92c3ad1a66674c9fbcf51f4ce2f3aa737ed6a276fb365348d7d62d998b7b4ea08f2e0cf791c7a75bca733a926c39903ea4000029d4a6615ccfd31cbf54aa349b64acaea59a752729f56e372c92288b014f0ccd30c34dc0b9dbba0f2087560cca33fa965c59501ea0000029d4a6615cc3d3dcb293c2916b9b7ba9e59d5bc3d9d5b8675bfd61995d3cee43c28f9c2a7e85d9eaebc0895267cc20dcb1cbee1ef7aaa5469305e8c000029d4a6617cc3d4987b6bcc1373ed6fef46bd41a35eeefa86f7d18b7a5eded3b374fefb80f923ea7cae0373b55dadb5606399edf776463a1caa84665200003cf45b2cb965235e635b5acaaf9af00eb7c4529e7a959162154d77febfd85aca4bf3adde758eefbf82655b0706db3119ede26d0afa793800000000791e48b1d93358c6bbb06d1aabdab39e7a974c6e23d8c64f87dca5d05cb204495560ed9da1c83d2110e879d3cf74d2000000000003e6849f0c471fd8d6a3536bbe81b16c757a1ab6c7c2a5709b375aeaddd91d96fd0d2ef40000000a3f0156a000f9087660b0fd9ed39b4c3cf41e8007ffc4003010000006020004040407010100000000000001020304050611122031322122303513142540071015162333432426ffda0008010100010502e552c923e6087cc104ba4afb55af84b2e9f25390aace690fd5ec0860d7a76b5693d97d919e8a7c9e12c8d7c578b40340fc3b51a6f1aedfb25f4b11903667764c9992d8321812382fd9edfb25f4b117a7f5a4248c968d0c2fc2fd9ed33d0b9c9e0d223f70b654d5f7b16d1b43a4637eaafa588bf6c8ee5b25a41b83103faf4ebe8950c5efe204b981d35bce12f8f0b614f42769b3d52042b26a6349737ea2fa588bdf796c6b6b61f7203cf2dc90f127c3e012845f352aa199072208b265553b4f9db4e8625a5d4a57bf497d2c45efbcb60bfb1c2f0ff44f619171403e081f30850365b709e85a0fc5106e66d248a5cd62cf0dc8d823dfa0be9622fbde5b3047fcce1f82bfb52af240a69566b4d7fcbc49701f864cc80cc8e2275a4b8532369d530317b9971e6473da79d7d2c45f7bcb63fd5ce8cc37a648a6c548833009a69f8c1d8da39b48d3c171de846c3bb29aded6eb7a4d17bd46ede75f4b117fef2d832fe4811ca54baba54a50cc54b44690e31b0f450f450f46f2ca6531a63be26f979687df63f6f3afa588bf3faca17a0a3f3631a5ddc74e91f9a91b0ec7131be12b55915828f61f516b1ef36411fb79d7d2c4643afd6d1a1c5a3c45cddf31dbc8be9622d51b9e65a290a222c674ac818ede75f4b1191fbe37b1a50c3527fb818ede4574b11685ff00739db2862c47fb818ede75f4b1191ba45788781bc3117d0d5f30e9688f7c8ae964ad0b192854b5ba4697a490c55ef8990b1dbcebe9623254fd7504093b25b628f3295522a6f635ab28737f96f42defa355b7677f22d5c6980ea744f90c353ffa167b79d7d2c4652d38d5b25c0da8701292a406253f064e3d9fa1f0898826af33b5386b75c7d719bf397912f2c3ca183d5c872cd09d173afa4d471095092ea6cf0f2dbe87a1badc8306b044460d02b24eb1e2491024970c64f9dce9f2ce4855362c852e3472651e818758e20f450f4413aada94dd9622e301c3534a42c118abf1ad268c21b220c17f2b10be32abe9888988e968bd3537b0ec6d87a287a20b2a48f3d3638b498609cd0abf6c29210bd88ebe15c0ba6e32e0cf6a4369737eb2da230ec60f450a89e36b87c4b64220fc857b6e8696623e883bc1c2c4d7a23d4d952652d9738bd632d85b2461517c54d70a2723673f15f866a3534a4af61b7764be1420de242b1ab03b3aff005f41d4ec9f8db0f4513ea9a9699744f430956c2bc4a34154e97550910a27d8adad876307a28762e84ea76a489501d887865368d25a2f4d4e110f8c4097be532d8718d87a307a308b5c4e1c68c88cd737ffc4003511000102040206080505010000000000000102030004051112210613203171c114223034415161b11023243291426281a1f0e1ffda0008010301013f01f853a40d416a4055ac2f0aa02d3faffa879a530e16d5bc767a36ac332ae1ce1c6ef9c5745a73f81d9e8ff78570e71638728af36b72782502e481ce25e88e9eb3d97a44f4d194992df87fd30ccc36f8ea1ec281de15c39c23ed3086d24e3b671ab4931a50e16ea070ff00b330d4e949894aadf273386dd43a2e83b540ef0ae1ce1bdd18d2849528d844fe902124a2573f5f089f9144fab58b3d689ca6ad8fb8434b534bb1892795ad4e13b541ef0ae1cc422f1a44e2fa486ef95b77e7e2a4850c2a89d4844c2d29f02629a6eea388dad1def2ae1cc401d48d23b74c16f21cf627cfd5b83f71f78a627e6a388f7dad1fbf4855bcb9884662d15ba4bb34bd7b5bc0dd0b429b56158b1f84dd45995c8e67ca1f5a5e794e799bc535090f238ed53a77a0bb8ed7be51275369f176cc0712b19c4d52999d1f33f315b99724dcd420f9c3ae754c4ba71ab28a7d356821c772f4db4ad4838926c6252bab4f51ff00cc4b4e36ea6e83711a4c0aa6ee9f5f787126d9c51932011f4df778df7ffb8764d3ce30ac4d9b4551a5bc7596bc3ed6286eec2b2df14b9d5be356eefece6a9ed4c67b8c4d49bb287ae32f38a4b1819d6ab7abdbb4202858c016c86c7fffc4002b110001030204040603010000000000000001000203041105202131123041711013222333511461a1b1ffda0008010201013f01f1bf34b4f31aba276eaca9e9054464f552c12427d6390d4364f6ab05867c6eee9cc6b8594f8683ac5a29237c46cf199a9bb290ae254d56fa7d3a282aa3a81e9299aaa9635d13b8b335376526fe20906e1535cc6d71fa5523da7f6398269d13f7c94bf033b0557f03fb1cdb26b8908dfaf8d2e1f354ea341f699198d8231d1565fc97f6ce3444876c8b4ac2a9629aef93a271d405700713957624c7b4c516bfbe4eab08b70beebb2c43f2b8bdedbf9cbc3e66b096b8dae9a9c01162abe9043eb66dcba7ae969f4dc2a5ab8aa741bfd2c527e397cb6ecdff007980db50b7c9ffc4003e1000010300050708060a03000000000000010002030410111231132130415182b220223240617181b10523525372c11424333442638393a1e16264d1ffda0008010100063f02ebd4cb94895adbc2c0d79d817df27fdc2befd49fdd726b6475ea443cc7db89d87aa9549f0f215c8d073184da3c47552a91e1e42bef89df2eaa552377845599335731d5db4898076a8db9dc7c10f49398ec964c49775d856528d30906b1ac7502a7dde10b36759c287b9de4af52260cd8dd67c118e84dfa3447f19e9ff48bdee323ce25c739423ff547921240f746f1ada508fd20dfd660f308490c8d91875b4e98a9f778454e59680dc90660539f2bdd23ce2e71b4a168a9b17e459fc5582ca51a5730ff000508e9a32127b63a3fd20e6b839a70234854fbbc22a754505b130e3ea8f0ace166ab043e8f29b9ae3767694d64df569b638e63e3a32a7dde11578545040c6cbb1fbc760840493ccb97bc15efb58bda6eaefab6ac10aa1a2e5329039d65d7eaeed1153eef08abc2abb130bbb7504d330cabfb705855991733d4c9b4744f82b256d9b0ea28269aa8bf1e88a9f778454136322f03a90e681dc161c92080e69c41c15c60b1b98d9e09b5517e2d1153eef084135443b0f972ca3dc3c936aa2f79f23a22a7cfecf085d358de508ec77972ca27fc421551b7b84e88aa46ef08ab050dbb1de5cb2b0fc210aa8fbdc27445523778455895097bc34584738f672cacdceb0586c582e8a8059a9de5a22a91bbc239023989a4d1f61e937b96528f2878d6358efe47ad7f3f5306251683928bd86ebefe445f0bbcb4454b216111becb1da8e6afb6a6cb4791d14835b5361f48590c9ef4744ffc4642e1700b6f762317a3c583df3be4117ca4bde71714390295922200d22f9d7a32d7b439a710422fa1bb267ddbb05939e32c7f6f268f16d86cfe2b1558c6da83e61953b0e0801a52c9631237b517d10df6fbb7628b1e0b1e351ab1545f8055ce2858b3e7ec085a166ea164d1da753862117c1f588f60e90aa887f2dab3540ab268f37b4d41d13c3dbb47532e2dc8cfef59f3daa1809bc63606dedbc8c55fa3bcb0a64330c9cc7302303d50be887f49ff00228b1ed2d78c41598ab0ac42b43ac214531c703dbd52c9597b63b5845d1fae8fb311e156751c0c1ce79b14713058d60b075626cc9c9edb7e685f16b2de98c13a98e1d2e6b3bbac58e16b4e20a6b182eb5a2c0397ffc4002910000201030205040301010000000000000001112131415171103061819120a1c1f040b1d1e1f1ffda0008010100013f21f4df0eb9d52c1f8ab99885a58425de2c49dbfb89da236fec321b298d28c9baf74ff162188224addd992c48fc29e606d47fb65afc3bbc270c5cdd445c115ad07b8b3c649e7dfe121d4044da91b2976662e4ec64b626e1de399f01fc9d049f2f0f1183b4d457d8537d5d70152e6dfe130ecc0bea868caad442264ee49b6e3536ee103aa0bcdf1eedc64b999467566d5b1b21622ac4656371f41e3c1664b4c4296e273cbbfc6e1e84536a4518b9c1989519329822045829731e193bacb40e163a310d560cd68125ee2b31ce36cddc2ec04b12988e56ff001b8b45f122a074ef8f3b246f460d165edc24ad15150d46d22f65a8e89173ec863744e29e97d74fe852aa8b5e45fe0318a488182a639420ef19e8766a2112a66450f091c92862f631fa25cc3e836ab49d491d0f85a92a7726b515e47ab040722ff017c4052c174ebb47ec3367d129ed9ee252d04b34193493d50c104ec3e4c3b7826f55d9aec321ac4a84435132da2282cf22ef013c4052a3d0abfc6e282dd2042e404342f12ed0bb4349e4e58746a243398990f084251251f7465be45de022f600a74bc8893a315aaa252a17a12a2da74164515651a630a5688a0559e45d2c12d1a6046b2228a624842e4ffd859f4a56207a45ff0011f260ac1a1e0b0c16f917780c024b2635e5dc459e575167d37f81d60a8a304ddd0b3e2102cf22ef01091540ebc76295c1f7924e052e8442a913e85f149a8aab42c69532c5aa940b274365aa7f49679177812b410702ea8e577a4b43abe1fb0bdb20f4d302544e46970c90c967f689145492a9d591c518bc54416f91778166347b0a9d786d6e0928e0acc617479d50c10b35ee7f4b61055372a65260deb4dfe977e0a9365996f85203ea4b232d678533d3522d722e8f76657a8c99ac33357b3c771894d85bf55a9a8817e46a24835d9f318618a38f4a4b3e5e1115f6b053db3dc4e0942e4a4a122ed0b94341355b6da0e99de969d9e4b924570d0e6aac944d09c3ec30ee8fd4a854137362397d0cb192949612a0969396d48828c0bb42e508c1528a2da64c869ac1ec67b13e1dd6194e0c9ec4d36a26558f4ee1ad049d87aaec32a5c82944e798d4f0196685da1a5341b09abd81caf7ea28a144f061278110abdcb881acdf6acf7593add887f042e724624d089b64d52491c7993e9dc654584e1a1d07d816424453645b9a2534ec22869e5d146546d0adcf8b2924c742ed0abb958a6d3f81db6d7594a5d7e4855f47a961e466d4da2cbec8817eabf05a910a4f342ed0734aa3591b37a66fb322f67a0aab7f3b9bed8c64fcfe8865ccc8f015e9a42312ed046837234884a6283a0430bd7fffda000c03010002000300000010f3ca2ab7cf3cf3cf3cf3ce28a8bf30f3cf3cf3cf28b086fbfb9d3cf3cf3ca3c8578a34bd874f3cf28f6caf667bd2753cf3cf01e86f2043bc7cf3cf3c323ebcf3417bd3cf3cf2f2ec738003cfcf3cf3c695b1c6f07f673cf3cb38e827252d7a3cf3cf3cf3c2136eff008473cf3cf3cf3cf1cd7b4fcf3c73c83c73c83c85ef3cf3ffc400271101000102040505010100000000000000011100213141516120718191f01030a1b1c1d1e1ffda0008010301013f10f4d9ed13986a6b4d447bbfb58e391fc7a97f6d9279850601de9d848ff4f6e37bcc286bd2520d8100ae39281161a31eae07cf4a8493a73c0c7a152cb9a67ec79bb2af0dbf4a4a86498bc194e317c29532a3cd0d6715875a525b6b9ffb57de3cc78979745225caa2882eab01cda14277bbe862fc1cca4102fbe4cab739ae11f94ce1e8983d7f1876a95d6a5ac1287cf14ed5400be634a95896eb4cdd1afaa7011c46e515100ce4285309f04e2135432e7ea802f13c04f337510fe50e20a2542d9147d040649856ceb7c1ef4818188d93d015365fae5f7b5272cb7733fb4f068fbe29771096a5c64ed87c9502aea66733f70d1a46ba628be4313ae9b36a6f18b24c5853a74bef52ae77a4004ae45dac1d9099bae9cb1e5c64d418230d020c9a31ea60f32392d0526b0fde8ecc34d353eea329cd1b727c784766b7f6a75d6d9f3304d9a2073a637670d39530c628914c1b3a52a49248ea6fbfdfb60a39e67cccfe1dea7bb0173be4ecc6d4841987d3be3dbdc7072388e0d01020383fffc400281101000200030704030100000000000000010011213141203051617191f01081b1c1a1d1e1f1ffda0008010201013f10f4702e5378164ad75028de1a4c154f4115a0d72c895ac0e3a6e33c3608424e3c3a587e84448b1d197ad6e1a7f26098ed668aa1b0ae31d1154169b4fd33505c1cfce928a994d8685f7dc04e0f514b491e3aa87b9186aff0da545ce0e2bd816ff2a21af03076ae964ae10dbd5425cd7d71f8e7194ba07684b26af8da1c299656b8406e019444b6a2872edafc4a09912f9283561498b0747b71eb975dbba94748233659cc1f716d0117e26bc63d71dd0d4c6e8157979d622a330b1d1ca361d269383cb77516e4bf4e9f1ca57af533fefb42e5c75d5db2efbc442524555b9ec7ffc400281001000201030304020301010000000000010011213141615171a1308191c120b11040f1d1f0ffda0008010100013f10fc4db553268976d8c528367f51ba554006e817d8001147dadc027b7a9c63fcb1673950a572ab795eff004ee18985432e6f37201aa9999212d2cba804ea7918afb5fd3f126893f244c956eb0d96a1f943ac5cfc6abcdf51df63f9a7594ebebf8134487014a24118c56f074e96ef935d64ba301fa8be183da0894bf836335d8e51204db842aabb0345d63594a6822d8767c9dca76b8299200c3eaf813449a952d67580947bc4a96b1ca75831c826bbdfa87971a6e374ad77aa374836f1c23f067d8b6e08ef84fbae265796031bdc72bea25dab68f8b353870c7d8a50caee7fb915c1c2761e8f51c907540687d3f02689f060c49550147271312b19d6c900974b11eaaa08e5732b4829a2c8e57b0d66bc5513ad37ea5d0be0fdc5436d2ffd99b245fb1e8f83b90ed25642ff0027dd672416fe2e37444c2418a4823a7a3e04d1ef9e240f0b82f2241ed30d0811a095d6144724f745b7a39771008646f586384d7b193e2594ce324332af4202312dfabbbe5d879953b4ff0041b3da8ec5cc186e5a07d0f027df04ec407034ed4fdc4d7aca7dc985b9aa996c10e89e4fb7ba43f4f69c532641cdd5fbef2e6cb9458f97bb3d0c216305ca833aa8d51fbbc6b5028162100baad688bcc8597b7b2e9d34e22b17d0f027df00c71028c1281a35fbc269ed1fe4815d72681db5e90f0832d87e1f961c103604018d2338aea9dd6062fa65d49c5e5f36b2d901bf4fa8e1fd9bd4b91778f107c520311142aa999e317d7b307c7e878934fbff0080464253d432152225a850dea9f31f2942885d83104084e253eb102522cff8cff36155430bdc8efc9936484b0a86c040b9ab5ab9744b035b651475fc3435dbf43c49a7df0648188262bb8da16c150a220bd7650240c7f283ac79611108c6114c741f08475ebbcad2597a4ac8bb5f86fa82bb7e8789fc54a8401beb014460eac6a410aaed0d8852fa4bc0fc41ec4a082f14e45a1a27d47776e18deb34e12366b6691f07d0f12698d87682a023b133a554995417283ae9783f8f89063dd1a8e0722f7990065b422d2b4e8c3d6b6dc0d76fd0f1269859e01b89d14bb21a8d0ad2884e53b330b1755c06f301219637f8789072ed600d59828c830182cde92fa38d494c730cbdb3195958607be911f0fa1e24d3017c97261e56632ebbc3cd9f6956eb1679cea1d8d860cea0bdb3d4e57876583b30062116aa36214d1eded83968e65cc1391f98f61470eb289862a05c45ea8820d3f7a1aecfa1e243882ded6f3021a2c44ad62296b050c778225673de576d4677b7667a8344dc6c624d758e4e3bf9cf2d112952a520b5b4aacdcd43466fc9b4ff00cee8fa52c2feaaeb19c72c5d1749ba4779401c18aa4005ceec983ace083d0f020984117f411b91c31faa14a781edecb1c932b1db803a9a0e4c4455454168f54bed9a6f09b1de1e4864ee1f71ec87988ebb988061ebfa86e868473da03beb821106032ae1797c08175000280f46fc978d5cb7fe3fc0a33169715d56ab911843f64403db3b5a7bc70f14fbba23a41186fa4314da30b8247d930f48bd08572441c2a8565e912d6ef5b1ec7e8f91995831507feebab05095d0815e906a21ee208d47f8b3fc18ae9d0bdbb9f66ce229702a8973b7cfb820202352148ccd8cbc5b11042e9c45051798c8b2455231f45dc84e44e13b5766607e85aa7a26a3c3987a9200c7a8232415c10cd23fc5983cfa4474e58837c1eea7995cb1f44681b5d5c410b962d96a165d02d329945ba5b37021ef13e8981c24186c325d39796f46ce768076e60dfaa06482b04da1e6ea881a8dc7466ac0ab24e1b0f6a3cacb3764cf1dc7497a8bbb636c4b8ced02a88b57bc0d06579436230d392544f9214f9b368687aea3488e08ec6d3fcd95761af07ba72b38964c3547aee9770eb52a6d4ec870b78c0d1961629a59acbc02bda754729506af55d57757fa2273176219a47f9b282a8b061197d673469fc3dc53bb702cdb2bc3bddc51e202c5a69e838bb8aecbac010a03f25afc56a2b4882ef34a6ff1129206d41d2852903aee881e88e181e683a00a03f3ffd9),
('Simran Guriya', 'preetyakanksha8@gmail.com', 6202119227, '2000-02-20', '18-cs-25', '192145', '1852410332', '$2y$10$0uMJMo9xQDeex2qP4ns3dOlcZ8pQKV5X8WyjDKa82HzDir0J4YqTC', 'mfp', 'mfp', 842004, 'Bihar', 'India', '2018-22', 0x89504e470d0a1a0a0000000d4948445200000200000002000803000000c3a624c80000000373424954080808dbe14fe000000009704859730000df570000df5701d54ae4d90000001974455874536f667477617265007777772e696e6b73636170652e6f72679bee3c1a00000300504c5445ffffff0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000b23b7e1000000ff74524e53000102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f202122232425262728292a2b2c2d2e2f303132333435363738393a3b3c3d3e3f404142434445464748494a4b4c4d4e4f505152535455565758595a5b5c5d5e5f606162636465666768696a6b6c6d6e6f707172737475767778797a7b7c7d7e7f808182838485868788898a8b8c8d8e8f909192939495969798999a9b9c9d9e9fa0a1a2a3a4a5a6a7a8a9aaabacadaeafb0b1b2b3b4b5b6b7b8b9babbbcbdbebfc0c1c2c3c4c5c6c7c8c9cacbcccdcecfd0d1d2d3d4d5d6d7d8d9dadbdcdddedfe0e1e2e3e4e5e6e7e8e9eaebecedeeeff0f1f2f3f4f5f6f7f8f9fafbfcfdfeeb08d9350000156c494441541819edc109a04e65fe07f0effbdec5bdb8d7ee8a495cbb284b1b4311192a4524cb1f959aa21a6d9a50a3559649aa6924cb9042a56624d1622d115344768392f55aafb8fbfbfd371a45b67bdff39c739ee739bfcf07b04c911a57777ff4e5f7be5cb97afda62ddb76ecde97b67ef107afbff0589f5b5aa686212c56fa0f03de5b7d906791b162ca5f3a5e180f619b52ad06bcbb95f994bb7eea3d7543109648bcfeb52d2cb0fdef3f7c792c84e9527a4d3fc268fdf8c9805a10e6aa336071840ead1b7c298489ce1bf81faaf1fd4bcd62208c12ba665a0e154a1b7d298431ca3cb289ca2def9d0c6182aba664d11547c65d01a1b950e7d574d1ca7b8b4168acdd4abaecd0d072109a6abd8c1ec81c950aa1a1669fd323b9932f82d0cc159fd24b339b4068a4fa0c7aeda37a109a28f25c16bd1779a312840e6ed9467f648e2805e1b70be7d23f071f4d84f053f2881cfaea879e2108bf847aeca2ef3eab03e18ffa8ba8839ce14521bc57f8e53c6a62db4d105e6bb08e1af93015c24ba17e59d44ac663b1109ea93087da595205c22337eda3860edf06e1852263a8a96925215cd7703db5f5430b087785ff9c4d8d45fe1a0fe1a262b3a9b9e5b5215c53650db577f41e08975cb99726989902e186dbb26886ddd74328171e4673fc3d1142ada2d36992b5f52154aab88266c9b805429dcb77d134914110aab4cda081a6244028d1368b465a520e4281ebb368a8ef2f8670ecba2c1aebf00d100e5d974583e5f58370e4da4c9a6d5c1c44f4da64d2740b4a4144ab7526cdb7a92644745a67d20607af8188c6254769879c3e100557613bad312204514045bea6455e0b431448e83d5a65520c44410ca165a6c541e45f4f5a676602447e35cda27d3e2d02913fa969b4d1e7c910f9516c0dedb4ac24443e4ca3ad56968538a7db69af751520cea1ca615a6c732588b38a5d42ab6dab0e71364fd272bbea409c59e35cda6eefc5106792b499f6db5515e20c263208b6548038ad4e0c86d525214e23653f0362495188538d67607c120ff15b9746181cd3c210270b2d66908c8138597706cb50881315ddce807904e204cf3170ee80f845954c064e6e0788e3a63380b25a42fcac1503e9f06510c7ac6030a5a542fce45a06d5ea6408e07306d6ac1888a60cb097203e6490dd8da0abc740cb6989809bca603b500381562d8f01b7a124826c0c036f6e1c82ab4216c56b08ae6729c8071054e16d1464deb508a85614ff955e07c13499e2982d251144c532287e36338400ba8be2b80108a0c514c7e53643e0d4a4f8d5ce72089a2114279817836089d94e71a267112c2d294e12b916813292e264fb2a2248d653fcc6923804472a2d95fe8f366d7a0ffb84d17811c1710fed343211c73458c428dc8cc098492b0dc77109d35970e9d51010094769a357f1aba4bd2cb8e5f108863fd0463b93718247198561088691b4510f9ca8c81e165cde5508840db4d0b2104e329051d85a0c01904a1b75c5c99a331a931000dd69a11d7138590aa3d209f67b89167a1cbfb597d1d85701d6fb82f6c92c8bdf5ac8a87c1c82e5628fd23e13708a898c4e5f58ee625aa83e4e319ed1c9a80dbbf5a27de6e1546319a5e5f1b0daabb44f739c6a0ca3350456fb37adb310a7319ad1cabb1c162b9445dbe435c5698c66d456c5c15e97d23a4fe37426317a0361af3b699b0531389de98c5e6675586b302df36a619cd63c3ab020045b4da155d26ec0197c4527ee84ad16d326b3cbe14c36d28903e7c1523b698fccbe219cd16e3a320d764aa43d3ebe10679141676e84956ad216dfb4c2d9c4d1a11f9261a336b4c3b69e619c55293af537d8a8376d70a87f22cea1329dcaad0b0b0da3f9b25f2a8d73aa4bc7e6c0426fd37439632b231f2ea273ed609ff9345bceb854e44b1d3ab7291ed6f98a26cb199f8a7caa4d051e817536d25cb913aa20df6a5181f414d866174d953bb12a0a20852a8c836d8ed24cb9af5743c17c4705f21ac02eb13452eea4ea28a8b7a9c22cd8a5044d74a0210aee012a511756a948031d6d8a2814db4e155e8755ead040831095f65421fb7cd8a431cd935916d179972a3c0f9b5c43f3fc03513a2f8d0aa41787455ad23c57225a4db2a8c0a3b048331a27b708a2d6830aec88873d9ad0382be1c0602a703becd188c6190f0742d3e8dc72d8e3521ae7413851f84b3a7721ac519fc6b90b8e945c45c706c31a75699c5be14cb94d746a6b08b6a845e374814395b6d1a9a6b045751aa7039caab9870e8d862d52699c7e70acfe413ab33f1e9648a17126c3b9c647e84c3b58223642d3ac8302d764d19169b0c53e9a26af2814689f4b27328bc112eb689c07a142f7089de8054b2ca4710e94860af7d089b9b0c4bb34cfdfa1447f3a905716767895e6c96d012586d1819eb0c3d334c48efbba1de4ff64dd0e15429319bd776087fb6886efab013537f2b8e55d2ac0b9f8798cdaa13858a1338db0b7327e5272367fb56bddb4d270a8f86a46ad39ac70358dd009c78407e5f117a313e158c5ed8cd6f3b042259a602a8e6b95c69fedb9192ad44b6794d6c10ae14cea6f6729fc22a5df3764ee0737c5418d56398c525558e15beaef7ab8e83646a92facf04f6a6f3c5c3588d1f90456184add7d970c778d6354b28ac206bda8bb1be0b2d8d98c4a7bd8e04a6a6e395c97b49cd118071b94a3e63ac07de7ed611476866083746aeddb103cd081d168081b7c45ad758127a6300a0fc30613a8b3f56178a2d44e16dcfbb0416feaec5678e40616dcfe102cd0801adb1c0bafbcc782ab0b0bc465505f7f84677ecf82bb073658446dfd5818ded9c0027b0b3618416d4d8587fec902db091b74a6b66e828766b0e0aac10295a9abf4047827ee300bae176cb0879a9a090f5dc3284c800d3ea0a606c33bc536320a9b6183fed4546778a6d00c46e577b040036aaa0ebc526f15a3d3151608eda69eaac11b31fdb318a557618349d4531d7822f573466d0d6cd08d7aba045ee8914e07cac0026522d4d24d705fcc443ad20e3658462d0d83ebc26fd299a7618367a8a58570dd483af4216cd0845aca280197a5e6d0a15db041ec416ae951b86c1c1d2b0f1bbc452d6d8f83ab62b3e9d8f5b0417beae9219ca4494728954ae706c1060987a8a59ce6f855a1e1792f43a916746e3aac30917a4aab85e31aae266740a95e746e1bacd09a9aca1e511c3f29dc61720ec95550aa2d15280b1bc4a65157fbe7bffdf27b4779cc7a28553a83ceb586155ea5093e805a4fd3b901b0c25534c108a895b0888e4d8315c2db69805ba158a9f5746a33ecf002f5b72711aaa5eea6532560857ad4df6350efb2a374a805ecb088badb5a1c2ee810a133fd60876ed4dcbe9a70c59fe9cc54d8217e37b576b8115c328d8e6c8025065367cbabc32d55b2e944a408ec503197daca7db110dc33838ed48725a6535339ffa806370da4239d618956d4d2d74f5686bb1ea423836089d006ea2673569ff3e1ba517464326c713f75b273fea80e45e181a2bbe8c857b04591346ae0e877cbde7db6c765c5e09567e8cc8fb0c600fa2477e38cb1cfffa5efad6daf482d0a8ff58ed0a1dfc116c907e88bfd25e19bde113ad502d67892be1808bf841e8ad0b13eb046c974fa20ad287c526f31157811f618421f3c0c7f24bf984b153e823dca1ea1e77626c21fd7afa4125b619117e8b9fbe097d8c7b2a8402411f6289f418f7d5f08feb9682f15b80816798e1efb23fcd42897cedd0c8b24eda2a736c7c157a3e9dce3b0c99df4544ff8ab329d7b03368959490fad8f81cfb6d1b165b04a4b7aa80bfcf63e1d4b875d3ea0675687e1b78fe8dc79b04acd1c7aa5337cb78cce5d0ebbbc4c8fac09c36f71fbe95c07d8a5541abdd119be6b4b05fac2329de9893561f8ee5d2a301cb6f917bdd019bebb8b2a4c816dce3b40f7ad09c367317d72a9c267b0ce6d745f17f8ab4c8f5554630bec339b6e5b13865f2a7578e8e5f757e65195ac10ac53319d2eeb029f8cdf45d552609fde74d7da307cf21e956b08fb84e6d1555de0973a7954ed4658a8421a5db4360cdf8ca56af7c0466d22744f57f8e7826c2af61cac3484ae591b868fc652b149b052ec22baa52bfc949a43b5e6c14ee7efa33bd686e1ab89546b232cd596eee80a7f55cfa3524761abe7e9867561f86c32d52a054bc57d46177483df2e8c50a98b61abd21ba9dcba307cf72f2a751dac557d1f55eb06ff75a75277c15e576551ad7561f8af4c842a3d098bf5a05adda083a554e925d8ec29aab42a0c1d3c49955e87d5dea4426da0852ba9d2fbb05aa10554660ef450952a2d84dd8a7e4e45220da087e25469152c97b4886abc094d8472a8d036d82ee90baa905909bad845850ec37a495f5081bf421b6ba9522cac97bc988eed2f015dc41ea54aa560bfe42574ea6168e3122a551501903c87ce6c2d046ddc47a52e4110c44da023dda08fc954aa258261101df82a047d6ca1521d11103db219b5aba18f4654eb0e0445f3038cd26468e453aaf53002a3f65646657f0af47135157b16c191f231a37107f451fa7b2af60a0224f4680e0b6c4108da08cfa66a6f22501a6d650165d5843662c750b9990896e2efb0609e80364acca17a8b1034771d6501ac8d870a3117d4ae543629060ec476db4417ac41e0d459ca7c8b5c09a7521e7865d6866c1e937560fbc62f678c7db66fe7e617960ea1008addff1d5db103c113be7b3ff3690c1c2a35f408cf2067e78a8f26fdb55fcfd6f52bc4e16c925b0f5d9a4b971c42109599c07cd95d028e147b329df911d9b7f68bd96f8f1df1c48377746addb84e9d868d9ab56adba1ebad77fd69f0d42ff7d04d47104c4d57311f6e811345faefa7f6b21050b10f1fe6b98c8513edf6d000b908ac32cfa5f3ac5624207a3143690604588927f6f3cc0e5543f4cacda72162116449fdf7f04c6e46f49aeea02912106c851fd8ccd3ea8fe83d9443631441d0859a8e3dc4530c47d462dea4418a4120b1cbac5c9e640ca2161a4f939482f8aff31e9e9fc9e3729f0a236a2369941488ff4968f6c4fc4cfee43f8d11bda76896f21027486836e891668988de43344c450885eea4695221d4699b47d3548750a6f46e1aa7168432efd03c752154e94c03d58750a4dc3e1ae852084566d0448d20d4b88d466a02a144e1bd3452330825fad04c2d2154086fa2995a41a870130dd51442852f68a84b2014684c53d58650e03d9aaa12847309d934555908e7aea0b192209cbb8fc68a8170ee759a2a0b42817534d50108e78a4568aa1d10ce35a3b136413877038db512c2b9eb68ac2510ceb5a1b1e642385797c69a09e15c6c264df50e84025fd354132114788aa61a05a1c0057934d40808153ea4a19e8150a1fa119a69008412f7d24cf74328117a9746ba0b428dc4253451670845cafc8706ba1242951afb689eaa10ca34cda4718a40a8d32542c31c8250a93f0db31642a9d7689639104ac5cea6512641a895b48226190aa158856d34485f08d52e4aa7393a4128d72a87c66802a1de1d34462a840b86d01409102e08cfa219f643b8a2f8461ae15b0877d44ea7093e867049fb080d3001c22d4fd200cf41b825f43ef5771f846b92d7527b1d20dc53e32075d708c245d7e551731740b86920f51689877053681ab5b60dc25d45575167b3205c56653f35361cc26dad72a9af9e10aeeb477d358470df14ea2aaf3084fb0a2fa7a6364278e18234eae95f109e689e432d3d03e18dbed45267088f4ca28eea4078a4e846ea273b0ec22b97e5503bdf42786720b53315c23be105d4cd63101eaa78809a6907e1a55ba899aa109e9a40ad1c0d43782a691375f26f088f5d9e438d4c84f0dae3d4483f08afc57c467db481f0dc0507a98df321bc7727757100c207a1cfa8890f21fc503b9b7a1808e18b67a8876610be48d8481de41486f0470bea6029845f5ea7064642f8a5cc5efaef6608dfdc46ff9587f0cf3cfa6d0b848f6a64d2676f40f869107dd61bc24f85d6d15f35217cd58ebeda0ae1b3a5f4d368089fb5a29fda43f86d3efd93930ce1b7dfd33f0b20fcf7217d3300c27f0d22f44b03080d4ca34f76872034502b8ffe781d420b13e98f6e105a48cda61f724b43e86114fd301742131532e8833e10ba184befe59583d0457d7a6f21843e16d3737f82d047777a2d5201421f85d2e8b145103a19428f3d00a193547aac22845696d2535f42e8a51f3df510845e2ad14b39e52034b3941e9a0ea19b7ef4d08d10baa944efec8a85d0ce2a7a6638847e86d233b520f4d38c5e590ca1a1b843f4c89d103a9a466f1c4982d0512f7a63028496cad31bbf87d0d30a7a612984a646d00b9d2034d59b1ed81a03a1a93fd003f743e8aa1add7730094257717974dd30087d6da5dbb27f07a1afb974db1b101a1b4bb7d587d0d800ba6c0e84cebad165cd2174d691eefa14426bede9ae2b20b4d696ae9a01a1b76be9a6483d08bdb5a29bde82d05c0bba28b72684e69ad145132074d784eec9ae0ca1bb4674cf2808edb5a26bd2cb4168af275df32084fefe4cb77c1b0ba1bf91744b3308034ca54b2643986001dd915e1ec2041be88e87208c904e57ac8e85304111baa33984116ad1155320ccd0956ed893026186e7e986f61086984f174c803044e810d5fb2e19c210d5a95ea4398429ba50bd1110c6184ee556274018632e55cb6e00618cf041aaf63884391a53b5053110e678968a6d290d61906fa8d6e1ba1006399f6a456e8430c9dd546b0084513ea05293218c9278942a2d4b8430ca755469470508b38ca1421997419825e93015ea066198bba9d01008d32ca73a6f85210c7339d599130f619af154e6eb2408d3143f425536a54018e73eaab2bb0a8471c26ba8487a0308f374a722592d20f41142fec46fa11a915b20b451f49d8ec89fbe54e44f10daa8fa2d5786901fc96954e319086d54db4bb223f2e329aa310c421ba536f0272b4338b7941fa9c4f310da082fe4311d716ea3a8c40b10fab89b3f5b19c2b9b48850859720f451622fffa723cea1d476aaf00a844606f3b895219cdd3fa9c2a810843ec2dbf88b8e38ab3f5285d742101ab99abfda55016751e30815181b82d0c98b3cc1e2789c51c2d754e0c5108456e6f244afe24c123ea2028f4268660f4f723b4e2ff1533a97732b84669278b2cc4b703a85e7d2b923d742e8a6247fe3bbd2385591f9746eefe510da29c3df5a5f03bf557d319ddb5a03423f25788a83ad71922283b3e8dc37e52174b499a788bc713e7ed5f17b2af06931082d4de2691cfd5bd330feabe4adf3a8c28818083dddcdd3db39e78d51d3bfcea10a19dd21745597aefbbe2184b6c207e9b285652134368bee7a250e42679de9a6ac5e107a0b2da77bd6d687d05d1bba66542284fe16d01d7bda4298a0315d31ab1c8419dea77a197d431086a8994ed596d5853047cb6c2a75a04f18c2245d235468520a8461fa5199b5cd21cc33926a1ce91f0f61a0f0db5420775c450833151a4da72253ab4398abdd5e3a32e36208a395ff94d19b730584e942fdb21895cc899740d8a0c13a16dc0f03cb4258a2f0237b58309f758a85b048e1077732df56f4af02619bc4fffb388ff9b0eaf11a10762adfefeb08cf66e7dbf7d682b059c9f62fad8af03432574fec550d22088ad6eb3470c2fcafd6ff70302763f7c6afe64f7ff1de5695c3b0d7ff037bf9dc11bc7926b10000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `roll` varchar(30) NOT NULL,
  `cgpa` float NOT NULL,
  `sem1` float NOT NULL,
  `sem2` float NOT NULL,
  `sem3` float NOT NULL,
  `sem4` float NOT NULL,
  `sem5` float NOT NULL,
  `sem6` float NOT NULL,
  `sem7` float NOT NULL,
  `sem8` float NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`roll`, `cgpa`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
('18-CS-01', 8.22, 7, 8.7, 8.9, 7.6, 8.9, 8.7, 9, 7),
('18-CS-25', 8.3, 8.6, 8, 6.9, 7.5, 8.8, 9, 8.1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `reg_ibfk_1` FOREIGN KEY (`roll`) REFERENCES `results` (`roll`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
