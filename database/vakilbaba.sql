-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 07:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vakilbaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocatedetails`
--

CREATE TABLE `advocatedetails` (
  `Id` int(11) NOT NULL,
  `AdvocateId` varchar(50) DEFAULT NULL,
  `EnrollmentNumber` varchar(200) DEFAULT NULL,
  `AdvocateName` varchar(50) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `EmailState` enum('public','private') NOT NULL,
  `PhoneState` enum('public','private') NOT NULL,
  `Experience` varchar(50) DEFAULT NULL,
  `BankName` varchar(50) DEFAULT NULL,
  `AccountNumber` varchar(50) DEFAULT NULL,
  `IfcsCode` varchar(50) DEFAULT NULL,
  `BranchName` varchar(50) DEFAULT NULL,
  `ConsultantFee` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Pin` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `Expertise` varchar(50) NOT NULL,
  `Court` varchar(50) DEFAULT NULL,
  `Barcode` varchar(50) DEFAULT NULL,
  `TelephoneConsultantFee` varchar(50) DEFAULT NULL,
  `CaseFilingFee` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `about` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocatedetails`
--

INSERT INTO `advocatedetails` (`Id`, `AdvocateId`, `EnrollmentNumber`, `AdvocateName`, `status`, `EmailState`, `PhoneState`, `Experience`, `BankName`, `AccountNumber`, `IfcsCode`, `BranchName`, `ConsultantFee`, `Gender`, `Email`, `Mobile`, `Language`, `Address`, `Pin`, `City`, `State`, `Expertise`, `Court`, `Barcode`, `TelephoneConsultantFee`, `CaseFilingFee`, `Password`, `about`, `image`, `created_at`) VALUES
(2, '2', '45678934', 'ashish anand', '', '', '', '2', '', '', '', '', '3000', '', 'advocateashishanand@gmail.com', '9718551330', '', 'D-43, shakarpur,Delhi 110092 ', '', 'East Delhi', '', 'Civil,Criminal,Tax,Divorce,Service/Labour laws,Mot', '', '', '', '', 'ashish123', NULL, NULL, '2017-10-27 11:37:46'),
(3, '3', 'D/634/2015', 'Ritesh Kumar Thakur', '', '', '', '2', '', '', '', '', '1100', '', 'thakuradhish@gmail.com ', '9911299056', '', 'B-16, Rani garden Extension ', '', 'East Delhi', '', 'Company Law', '', '', '', '', '855376', NULL, NULL, '2017-10-27 11:37:46'),
(4, '4', 'D/2881/2010', 'Akash kiran', 'active', 'public', 'public', '7', '', '', '', '', '', '', 'akashkiran2@gmail.com', '9538513734', '', '#174,1st floor. Esi market road. Rajajinagar ', '', 'Bengaluru Urban District', '', 'Civil,Criminal,Divorce,Service/Labour laws,Motor A', '', '', '', '', 'computer2', NULL, NULL, '2017-10-27 11:37:46'),
(5, '5', 'Kar 988/2012', 'Krishna Murthy Pasupula', '', '', '', '8', '', '', '', '', '', '', 'pasupulaw@gmail.com', '9999374355', '', '9-1-48/7 A, Vysya Bank colony, Hasmathpet, Bowen a', '', 'Hyderabad', '', 'Civil,Criminal,Matrimonial laws,Divorce,Motor Acci', '', '', '', '', 'KM$02081962', NULL, NULL, '2017-10-27 11:37:46'),
(6, '6', 'AP/3354/1999', 'Pooja chauhan', '', 'public', 'private', '18', '', '', '', '', '', '', 'pooja.mits008@gmail.com', '9910938069', '', 'gurgaon', '', 'Gurgaon', '', 'Divorce,Cyber Laws,Property Law', '', '', '', '', 'omsairam12', NULL, NULL, '2017-10-27 11:37:46'),
(7, '7', 'AP/1464/1999', 'Adv Voruganti Bharathi', '', '', '', '20', 'syndicate bank', '2147483647', 'SYNB0008181', 'DLF', '', '', 'kumarvt@yahoo.com', '9848057700', '', 'G-2,shree ramdarshan Apt. Shree ram nagar ,humayun', '', 'Adilabad', 'Haryana', 'Civil,Intelluctual Property,Divorce,Motor Accident', '', '', '', '', '9848057700', NULL, NULL, '2017-10-27 11:37:46'),
(10, '10', 'AP/1464/1999', 'Naseemuddin', '', '', '', '20', '', '', '', '', '', '', 'naseemhighcourt@gmail.com', '9310103979', '', '10B/15 maujpur ', '', 'East Delhi', '', 'Civil,intellectual property,Matrimonial laws,Divor', '', '', '', '', 'welcome1', NULL, NULL, '2017-10-27 11:37:46'),
(102, '102', 'D/980/2012', 'Manish Neware', '', '', '', '5', 'SBI', '2147483647', 'SBIN0000726', 'Tis hazari', '', '', 'Mannht143@gmail.com', '8446765859', '', 'Railtoly. Gondia', '', 'Gondiya', 'Delhi', 'Civil,Criminal,intellectual property,Matrimonial l', '', '', '', '', '8446765859', NULL, NULL, '2017-10-27 11:37:46'),
(107, '107', 'BR/1055/2016', 'Advocate dhiraj kumar dixit', '', '', '', '1', 'Bank of baroda', '2147483647', 'BARB0GONDIA', 'Railtoly', '', '', 'advdheerajdixit@gmail.com', '9452284319', '', 'H.NO: 79,V. GUDHA,PO. RATOSA, JHANSI', '', 'Jhansi', 'Maharashtra', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', 'dheeraj', NULL, NULL, '2017-10-27 11:37:46'),
(108, '108', 'MAH/7018/2015', 'Yogesh chaudhary', '', '', '', '2', '', '', '', '', '', '', 'Yogesh.gnit@gmail.com', '9990506650', '', '4a Shiva awashiya colony, bhur, yamunapuram , Bula', '', 'Bulandshahr', '', 'Civil,Criminal,Tax,Intelluctual Property,Divorce,S', '', '', '', '', 'bander123', NULL, NULL, '2017-10-27 11:37:46'),
(109, '109', 'UP G 07834/14', 'Harish Kumar', '', '', '', '6', '', '', '', '', '', '', 'sabharwal.harish04@gmail.com', '9467359907', '', 'kurukshetra', '', 'Kurukshetra', '', 'Criminal,Divorce,Cheque bounce/fraud', '', '', '', '', 'folderlock', NULL, NULL, '2017-10-27 11:37:46'),
(110, '110', '5258/2001', 'Arpit Jain', '', '', '', '17', '', '', '', '', '', '', 'arpitjainarpitjain@yahoo.co.in', '9811595800', '', '79, Rajdhani Nikunj Appts, I P Ext ', '', 'Kurukshetra', 'Haryana', 'Criminal,Divorce,Motor Accident Laws,Cheque bounce', '', '', '', '', '123123123', NULL, NULL, '2017-10-27 11:37:46'),
(111, '111', 'P/885/2012', 'SMT CHITRA SHRIVASTAVA', '', '', '', '5', '', '', '', '', '', '', 'adv.chitra@gmail.com', '9755544559', '', 'A/307 GHANSHSHYAM HOMES APARTMENT, OPPOSITE UNION ', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Motor Acci', '', '', '', '', 'advchitra', NULL, NULL, '2017-10-27 11:37:46'),
(112, '112', 'D 1803/15', 'Jayashree Patil', '', '', '', '3', '', '', '', '', '', '', 'jayashree.legal512@gmail.com', '9591691075', '', 'Chikkalsandra', '', 'Bangalore Urban District', '', 'Civil,Criminal,Divorce,Cyber Laws,Motor Accident L', '', '', '', '', 'CHAITSJAYU12', NULL, NULL, '2017-10-27 11:37:46'),
(113, '113', 'CG/1705/TR./1992', 'Advocate IMRAN KHAN', '', '', '', '25', 'cosmos bank', '', '', '', '', '', 'advocate.khanimran@gmail.com', '8010133264', '', 'Chikkalsandra', '', 'Bangalore', 'Karnataka', 'Civil,Criminal,Matrimonial laws,Divorce,Service/La', '', '', '', '', 'nokias', NULL, NULL, '2017-10-27 11:37:46'),
(114, '114', 'MAH/607/2014', 'Advocate JAMSYM ANTON', '', '', '', '1', '', '', '', '', '', '', 'jamsymanton@gmail.com', '7094839351', '', 'HUDA PLOT NO. 2009 SECTOR 62 FARIDABAD', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Company La', '', '', '', '', 'jasher23112004 ', NULL, NULL, '2017-10-27 11:37:46'),
(115, '115', 'DEL-2009/H', 'Tvijay kumar', '', '', '', '15', '', '', '', '', '', '', 'vijaykumartadikonda@yahoo.com', '9848051387', '', 'SAKKIRIYAS COMPOUND', '', 'Hyderabad', '', 'Civil,Criminal,Tax,Intelluctual Property,Divorce,S', '', '', '', '', '9848051387', NULL, NULL, '2017-10-27 11:37:46'),
(117, '117', 'Ms.532/2014', 'Netra Mohanchandra Pant', '', '', '', '3', '', '', '', '', '', '', 'netramohan.pant@gmail.com', '9820897884', '', 'Secunderabad', '', 'Mumbai City', 'Andhra Pradesh', 'Civil,Criminal,Tax,Intelluctual Property,Divorce,S', '', '', '', '', 'ustabiaz', NULL, NULL, '2017-10-27 11:37:46'),
(119, '119', 'IT\\44\\15\\1997', 'Adv Ketan Beladiya', '', '', '', '23', '', '', '', '', '', '', 'Advketanbeladiya@gmail.Com', '8488070456', '', 'E-8/15; Sector-48; Nerul; Navi Mumbai-400706', '', '', '', 'Taxation laws,Company Law', '', '', '', '', '9033875408', NULL, NULL, '2017-10-27 11:37:46'),
(120, '120', 'MAH/2851/2006', 'Adv Ankur mishra', '', '', '', '11', '', '', '', '', '', '', 'ankurmishra9999@gmail.com', '9999886099', '', '', '', '', '', 'Civil,Criminal,Intelluctual Property,Divorce,Servi', '', '', '', '', '9999886099', NULL, NULL, '2017-10-27 11:37:46'),
(121, '121', 'G/1592/2016', 'Amrendra Kumar Singh', '', '', '', '3', '', '', '', '', '', '', 'amarips2012@gmail.com', '7388990057', '', '', '', '', '', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', '7388990057', NULL, NULL, '2017-10-27 11:37:46'),
(122, '122', '485/2016', 'ADVOCATE BRIJ BHUSHAN', '', '', '', '1', '', '', '', '', '', '', 'advocatebrijbhushan@yahoo.com', '7579080492', '', '', '', '', '', 'Civil,Criminal,Company Law,Real Estate Law,Cheque ', '', '', '', '', 'miCR248022', NULL, NULL, '2017-10-27 11:37:46'),
(123, '123', 'BR 1130/15', 'Indrajit Chavan', '', '', '', '2', '', '', '', '', '', '', 'indrajitchavan007@gmail.com', '9822012829', '', '', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Motor Acci', '', '', '', '', 'omaara007', NULL, NULL, '2017-10-27 11:37:46'),
(124, '124', 'UK/034/2014', 'Tanu Khattri', '', '', '', '4', '', '', '', '', '', '', 'tanu_khattri@rediffmail.com', '7718968457', '', '', '', '', '', 'Tax,Intelluctual Property,Property Law,Cheque boun', '', '', '', '', 'jaimaa', NULL, NULL, '2017-10-27 11:37:46'),
(125, '125', 'Mah/1503/2000', 'jimmy gonsalves', '', '', '', '17', '', '', '', '', '', '', 'jimmygonsalves@gmail.com', '9960142588', '', '', '', '', '', 'Civil', '', '', '', '', 'jimson2017', NULL, NULL, '2017-10-27 11:37:46'),
(126, '126', 'MAH/387-A/2010', 'ADV BALDEV SINGH', '', '', '', '7', '', '', '', '', '', '', 'vakilbabasocial@gmail.com', '9312792721', '', '', '', '', '', 'Civil,Criminal,Divorce,Company Law,Cheque bounce/f', '', '', '', '', '9312792721', NULL, NULL, '2017-10-27 11:37:46'),
(127, '127', 'Mah/5531/2005', 'Anjali Siddhu', '', '', '', '12', '', '', '', '', '', '', 'anjalisiddhu8@gmail.com', '9555928451', '', '', '', '', '', 'Civil,Criminal,Divorce,Service/Labour laws,Cyber L', '', '', '', '', '11050210', NULL, NULL, '2017-10-27 11:37:46'),
(128, '128', 'p/543/2016', 'Adv Nishant Bhardwaj', '', '', '', '1', '', '', '', '', '', '', 'Bhardwaj150193@gmail.com', '9990212818', '', '', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Cheque bou', '', '', '', '', 'h9990212818h', NULL, NULL, '2017-10-27 11:37:46'),
(129, '129', 'D/3364/2016', 'MUNNA SHARMA', '', '', '', '1', '', '', '', '', '', '', 'swnmunna@gmail.com', '9453142861', '', '', '', '', '', 'Intelluctual Property', '', '', '', '', 'devashish', NULL, NULL, '2017-10-27 11:37:46'),
(130, '130', 'D/1384/2017', 'Syed Nasim Aejaz', '', '', '', '1', '', '', '', '', '', '', 'syednasimaejaz@yahoo.com', '9831006724', '', '', '', '', '', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', 'shaila2006', NULL, NULL, '2017-10-27 11:37:46'),
(131, '131', 'UP04993/13', 'Ranjeet Singh', '', '', '', '1', '', '', '', '', '', '', 'ranjeet2051@gmail.com', '9936342498', '', '', '', '', '', 'Civil,Matrimonial laws,Divorce,Motor Accident Laws', '', '', '', '', '9026302498', NULL, NULL, '2017-10-27 11:37:46'),
(132, '132', 'WB2003/2002', 'Akhil Verma', '', '', '', '3', '', '', '', '', '', '', 'adv.akhilverma@gmail.com', '9999086312', '', '', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Cheque bou', '', '', '', '', '9999086312', NULL, NULL, '2017-10-27 11:37:46'),
(133, '133', 'UP0812/2014', 'ANAND VARDHAN', '', '', '', '14', '', '', '', '', '', '', 'anandvardhan05@gmail.com', '8882627150', '', '', '', '', '', 'Criminal,Matrimonial laws,Divorce', '', '', '', '', 'ANDDIK@92', NULL, NULL, '2017-10-27 11:37:46'),
(134, '134', '3206', 'Mukesh Kumar Singh', '', '', '', '1', '', '', '', '', '', '', 'advocatemukeshkumarsingh@gmail.com', '9560482725', '', '', '', '', '', 'Civil,Criminal,Tax,Divorce,Service/Labour laws,Cyb', '', '', '', '', 'madhu@mukesh', NULL, NULL, '2017-10-27 11:37:46'),
(135, '135', 'BR/1055/2016', 'Adv Datta Doiphode', '', '', '', '10', '', '', '', '', '', '', 'advdattadoiphode@gmail.com', '9552336140', '', '', '', '', '', 'Civil,Criminal,Taxation laws,Matrimonial laws,Divo', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(136, '136', 'D/1174/2007', 'Kumari shyamli', '', '', '', '18', '', '', '', '', '', '', 'shyamly2908@gmail.com', '8447009065', '', '', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Service/La', '', '', '', '', '9552336140', NULL, NULL, '2017-10-27 11:37:46'),
(137, '137', 'MAH 3774 1999', 'MOHAMMAD DANISH', '', '', '', '6', '', '', '', '', '', '', 'legalconsultation_danish@yahoo.co.in, consultdaani', '9350221670', '', '', '', '', '', 'Criminal,Motor Accident Laws,Real Estate Law,Chequ', '', '', '', '', 'shyamli2908', NULL, NULL, '2017-10-27 11:37:46'),
(138, '138', '2918', 'Mohd Zahid', '', '', '', '14', '', '', '', '', '', '', 'zahid_u@rediffmail.com', '9811750070', '', '', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Service/La', '', '', '', '', 'sairar93', NULL, NULL, '2017-10-27 11:37:46'),
(139, '139', 'D/965/03', 'adv yasir choudhary', '', '', '', '14', '', '', '', '', '', '', 'advocatemohdyasir21@gmail.com', '9971883786', '', '', '', '', '', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(140, '140', 'D/687/2003', 'Adv Rajani Agale', '', '', '', '9', '', '', '', '', '', '', 'rajaniagaleadv@gmail.com', '8928253244', '', '', '', '', '', 'Civil,Criminal,Matrimonial laws,Divorce,Cyber Laws', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(141, '141', 'd/646/01', 'Adv Ankit saran', '', '', '', '16', '', '', '', '', '', '', 'ankitsaran25@gmail.com', '9015333306', '', '', '', '', '', 'Civil,Criminal,Divorce,Service/Labour laws,Cyber L', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(142, '142', 'MAH/1953/2003', 'Adv Manish Chandra', '', '', '', '3', '', '', '', '', '', '', 'Manish04chandra@gmail.com', '8877459019', '', '', '', '', '', 'Civil,Matrimonial laws,Divorce,Cheque bounce/fraud', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(143, '143', 'UP09141/2014', 'Adv Dimple Singh', '', '', '', '2', '', '', '', '', '', '', 'singhdimple84@rediffmail.com', '9412807821', '', '', '', '', '', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(144, '144', 'Br/1186/2015', 'Deepa Tiwari', '', '', '', '8', '', '', '', '', '', '', 'deepatiwari16@gmail.com', '8750736140', '', '', '', '', '', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(145, '145', 'Up0714/2009', 'Krishna Prasad', '', '', '', '12', '', '', '', '', '', '', 'advkpg@gmail.com', '', '', '', '', '', '', 'Civil,Criminal,Divorce,Service/Labour laws,Cyber L', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(146, '146', '1362/06', 'aman taneja', '', '', '', '6', '', '', '', '', '', '', 'amantanejaadv@gmail.com', '9483116622', '', '', '', '', '', 'Civil,Criminal,intellectual property,Matrimonial l', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(147, '147', 'KAR 144/2011', 'SANTOSH GAUTAM', '', '', '', '24', '', '', '', '', '', '', 'santoshclc@yahoo.com', '9313359334', '', '', '', '', '', 'Civil,Criminal,Divorce,Service/Labour laws,Cyber L', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(148, '148', 'P/502/1993', 'sakshi arora', '', '', '', '2', '', '', '', '', '', '', 'sakshiarora010@gmail.com', '9891947840', '', '', '', '', '', 'Criminal,Divorce,Service/Labour laws,Motor Acciden', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(149, '149', 'D/1223/2015', 'Sanjeev Mohan', '', '', '', '1', '', '', '', '', '', '', 'Sanjeevmohansaxena1975@gmail.com', '9582973360', '', '', '', '', '', 'Civil,Criminal,Taxation laws,intellectual property', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(150, '150', 'D/2486/2017', 'Gaurav Bhatnagar', '', '', '', '9', '', '', '', '', '', '', 'Gauravadv650@gmail.com', '9410282731', '', '', '', '', '', 'Company Law,Cheque bounce/fraud', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(151, '151', 'Up/7526/2008', 'ANITA KUMARI', '', '', '', '10', '', '', '', '', '', '', 'anita31384@gmail.com', '9837606061', '', '', '', '', '', 'Criminal,Divorce,Motor Accident Laws', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(152, '152', 'Up/6896/2007', 'Nishant Kumar', '', '', '', '10', '', '', '', '', '', '', 'adv.nishantk79@gmail.com', '9501560476', '', '', '', '', '', 'Civil,Matrimonial laws,Divorce,Cheque bounce/fraud', '', '', '', '', '', NULL, NULL, '2017-10-27 11:37:46'),
(153, NULL, NULL, 'amit', 'active', 'public', 'public', 'hjfgjh', NULL, NULL, NULL, NULL, 'sdgsg', 'Male', 'aasff', 'asfadsfdsaf', 'afdagsg', 'dgsgfg', 'dgsg', 'dfghdfhgdf', 'sgfdsgdfg', 'hello', 'district court', 'adfsafsdf', 'fdsfgdf', 'gsgg', '81dc9bdb52d04dc20036dbd8313ed055', 'sgsgg', NULL, '2017-10-27 11:37:51'),
(154, NULL, NULL, 'Anshu', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anshuaditya@outlook.com', NULL, NULL, NULL, NULL, '123', NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, '2017-10-27 18:10:28'),
(155, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anshuaditya@outlook.com', NULL, NULL, NULL, NULL, '123', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 18:10:48'),
(156, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anshuaditya@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '123', NULL, NULL, '2017-10-27 18:12:29'),
(157, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anshuaditya@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '123', NULL, NULL, '2017-10-27 18:12:40'),
(158, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anshuaditya@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '123', NULL, NULL, '2017-10-27 18:19:31'),
(159, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anshuaditya@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '123', NULL, NULL, '2017-10-27 18:20:20'),
(160, NULL, NULL, 'Admin', 'active', 'public', 'public', '1', 'vf', 'f', 'fb', 'fb', 'bf', 'b', 'an@out.com', 'eefe', 'vb@ck.com', 'mjm', NULL, 'dt@g.com', 'nghn', 'hmhgm', 'ght@fr.cpm', 'etet', 'jyj', 'hth@d.vom', 'ght', 'tht', NULL, '2017-10-27 19:12:17'),
(161, NULL, NULL, 'Admin', 'active', 'public', 'public', '1', 'vf', 'f', 'fb', 'fb', 'bf', 'b', 'an@out.com', 'eefe', 'vb@ck.com', 'mjm', NULL, 'dt@g.com', 'nghn', 'hmhgm', 'ght@fr.cpm', 'etet', 'jyj', 'hth@d.vom', 'ght', 'tht', NULL, '2017-10-27 19:13:14'),
(162, NULL, NULL, 'hmm', 'active', 'public', 'public', ',jh,', 'mh', 'gnghn', 'hmh', 'ggfn', 'fb', 'a@d.cpm', 'vrgrt@c.com', 'mym', 'thth@s.com', 'tyhth', 'thh', 'tht@p.com', 'thth', 'trhh', 'thtrh@x.com', 'htrhr', 'htrhtrs', 'hhh@n.com', 'hh', 'hths', NULL, '2017-10-27 19:15:26'),
(163, NULL, NULL, 'aditya', 'active', 'public', 'public', 'abhi@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 19:42:56'),
(164, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@test.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 19:58:25'),
(165, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@test.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 19:58:35'),
(166, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@test.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 20:18:58'),
(167, NULL, NULL, 'Admin', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@test.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 20:19:08'),
(168, NULL, NULL, 'bittu', 'active', 'public', 'public', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bittu@gmail3.com', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 20:24:03'),
(169, NULL, NULL, 'my', 'active', 'public', 'public', '3', '33', '333', '3333', '33333', '33333', '3333333', 'three@test.com', '124t', 'nghnghm', 'nghmgch', 'dvd', 'vgnfgn', 'nfgnx', 'nfgnxfgn', 'gfnxgf', 'fngxnxfgn', 'gnxf', 'xfnxnx', 'fxnxf', 'nfxgnx', NULL, '2017-10-27 20:27:39'),
(170, NULL, NULL, 'final', 'active', 'public', 'public', '3', '33', '333', '3333', '33333', 'final test', '3333333', 'finaltest@impye.com', '12423435', 'hfhd', 'hmhm', 'jhmhj', 'hmgf', 'trhrtjj', 'uykfuy', 'ghuyf', 'fdbdb', 'fbfdbf', 'fdbzf', 'fbz', 'fd', NULL, '2017-10-27 20:32:18'),
(171, NULL, NULL, 'vicky', 'active', 'public', 'public', '4', '4444', '44444', '444444', '44444', '44444', '4444', 'vicky@impye.com', 'fbgbgfghh', 'jytdjdtyjtdt', 'yjytdjdtjdt', 'xtjrjr', 'jdtyjt', 'yjtyjtyk', 'ftjftjrtjd', 'jtyjtjtj', 'rjrtj', 'tjtjtj', 'yjtykyk', 'tjdjtjj', 'jytjt', NULL, '2017-10-27 20:55:24'),
(172, NULL, NULL, 'phir', 'active', 'public', 'public', '1', '22e2', 'efewf', 'grgsre', 'trhtrh', 'rthrt', 'ngn', 'phir@test.com', 'gregerg', 'htht', 'jytyjty', 'yjtjtd', 'thsrt', 'dtjty', 'yjdyt', 'tdjdtj', 'yjdty', 'dytjdtj', 'djdt', 'jtdjtd', 'djtd', NULL, '2017-10-27 20:57:28'),
(173, NULL, NULL, 'phir', 'active', 'public', 'public', '1', '22e2', 'efewf', 'grgsre', 'trhtrh', 'rthrt', 'ngn', 'phir@test.com', 'gregerg', 'htht', 'jytyjty', 'yjtjtd', 'thsrt', 'dtjty', 'yjdyt', 'tdjdtj', 'yjdty', 'dytjdtj', 'djdt', 'jtdjtd', 'djtd', NULL, '2017-10-27 21:10:50'),
(174, NULL, NULL, '123', 'active', 'public', 'public', '233', '444', '444', '444', '444', '444', '444', 'fb@gmail.com', '123', '322', '234', '33', '33', '33', '333', '333', '333', '33', '33', '333', '333', NULL, '2017-10-27 21:12:31'),
(175, NULL, NULL, '123', 'active', 'public', 'public', '233', '444', '444', '444', '444', '444', '444', 'fb@gmail.com', '123', '322', '234', '33', '33', '33', '333', '333', '333', '33', '33', '333', '333', NULL, '2017-10-27 21:15:27'),
(176, NULL, NULL, '321', 'active', 'public', 'public', '321', '321', '321', '321', '321', '321', '321', 't@test.com', '123', '123', '321', '321', '321', '321', '321', '321', '321', '321', '321', '321', '321', NULL, '2017-10-27 21:16:43'),
(177, NULL, NULL, 'my', 'active', 'public', 'public', '3', '33', '333', '3333', '33333', '33333', '3333333', 'three@test.com', '124t', 'nghnghm', 'nghmgch', 'dvd', 'vgnfgn', 'nfgnx', 'nfgnxfgn', 'gfnxgf', 'fngxnxfgn', 'gnxf', 'xfnxnx', 'fxnxf', 'nfxgnx', NULL, '2017-10-28 00:42:13'),
(178, NULL, NULL, 'my', 'active', 'public', 'public', '3', '33', '333', '3333', '33333', '33333', '3333333', 'three@test.com', '124t', 'nghnghm', 'nghmgch', 'dvd', 'vgnfgn', 'nfgnx', 'nfgnxfgn', 'gfnxgf', 'fngxnxfgn', 'gnxf', 'xfnxnx', 'fxnxf', 'nfxgnx', NULL, '2017-10-28 00:43:10'),
(179, NULL, NULL, 'aditya', 'active', 'public', 'public', '2', '258', '0123', '000', 'kamtaul', 'Anshu Aditya', 'wifi@test.com', '12@test.com', '21', '12', 'dvv', 'nhgng', 'nndty', 'ynyt', 'h h', 'h gh ', 'h h d', 'h  hdgnh', 'thtrh', 'htrh', 'dhgn', NULL, '2017-10-28 02:45:29'),
(180, NULL, NULL, 'aditya', 'active', 'public', 'public', '2', '258', '0123', '000', 'kamtaul', 'Anshu Aditya', 'wifi@test.com', '12@test.com', '21', '12', 'dvv', 'nhgng', 'nndty', 'ynyt', 'h h', 'h gh ', 'h h d', 'h  hdgnh', 'thtrh', 'htrh', 'dhgn', NULL, '2017-10-28 02:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `tblaccountservice`
--

CREATE TABLE `tblaccountservice` (
  `Id` int(50) NOT NULL,
  `ServiceId` int(50) DEFAULT NULL,
  `ServiceName` varchar(50) DEFAULT NULL,
  `ShortDescription` longtext,
  `Description` longtext,
  `Benefits` longtext,
  `Operation` longtext,
  `WhatInclude` longtext,
  `RegistrationStep` longtext,
  `DocumentsRequired` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccountservice`
--

INSERT INTO `tblaccountservice` (`Id`, `ServiceId`, `ServiceName`, `ShortDescription`, `Description`, `Benefits`, `Operation`, `WhatInclude`, `RegistrationStep`, `DocumentsRequired`) VALUES
(1, 1, 'GST Registration', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'GST Return', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'TDS Return', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Company Registration', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Import Export', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'Trademark Registration', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbllegalservice`
--

CREATE TABLE `tbllegalservice` (
  `Id` int(50) NOT NULL,
  `ServiceId` int(50) DEFAULT NULL,
  `ServiceName` varchar(50) DEFAULT NULL,
  `ShortDescription` longtext,
  `Description` longtext,
  `Benefits` longtext,
  `Operation` longtext,
  `WhatInclude` longtext,
  `RegistrationStep` longtext,
  `DocumentsRequired` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllegalservice`
--

INSERT INTO `tbllegalservice` (`Id`, `ServiceId`, `ServiceName`, `ShortDescription`, `Description`, `Benefits`, `Operation`, `WhatInclude`, `RegistrationStep`, `DocumentsRequired`) VALUES
(1, 1, 'Talk To Lawyer', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Legal Notice', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Email Delivery', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Talk To Justice', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Notary ', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'Make will Online ', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblloanservice`
--

CREATE TABLE `tblloanservice` (
  `Id` int(50) NOT NULL,
  `ServiceId` int(50) DEFAULT NULL,
  `ServiceName` varchar(50) DEFAULT NULL,
  `ShortDescription` longtext,
  `Description` longtext,
  `Benefits` longtext,
  `Operation` longtext,
  `WhatInclude` longtext,
  `RegistrationStep` longtext,
  `DocumentsRequired` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblloanservice`
--

INSERT INTO `tblloanservice` (`Id`, `ServiceId`, `ServiceName`, `ShortDescription`, `Description`, `Benefits`, `Operation`, `WhatInclude`, `RegistrationStep`, `DocumentsRequired`) VALUES
(1, 1, 'Business Loan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Personal Loan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 'Startup Loan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Education Loan', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Smart Cash', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 'Home Loan', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluseradvocate`
--

CREATE TABLE `tbluseradvocate` (
  `id` int(11) NOT NULL,
  `AdvocateId` varchar(250) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocatedetails`
--
ALTER TABLE `advocatedetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluseradvocate`
--
ALTER TABLE `tbluseradvocate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocatedetails`
--
ALTER TABLE `advocatedetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
