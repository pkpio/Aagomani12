-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2012 at 07:00 AM
-- Server version: 5.0.77
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inzaak_aagomani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registrations`
--

CREATE TABLE IF NOT EXISTS `tbl_registrations` (
  `reg_id` int(11) NOT NULL auto_increment,
  `reg_event` varchar(15) NOT NULL,
  `reg_leader_email` varchar(50) NOT NULL,
  `reg_member1_email` varchar(50) NOT NULL,
  `reg_member2_email` varchar(50) NOT NULL,
  `reg_member3_email` varchar(50) NOT NULL,
  `reg_time` date NOT NULL,
  PRIMARY KEY  (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_registrations`
--

INSERT INTO `tbl_registrations` (`reg_id`, `reg_event`, `reg_leader_email`, `reg_member1_email`, `reg_member2_email`, `reg_member3_email`, `reg_time`) VALUES
(14, 'image-processin', 'sanathkuppa@gmail.com', '', '', '', '2012-02-01'),
(15, 'pre-event-pune', 'hishubham.jindal@gmail.com', '', '', '', '2012-02-02'),
(16, 'pre-event-pune', 'hishubham.jindal@gmail.com', '', '', '', '2012-02-02'),
(17, 'Voice Control C', 'vivekiitb544@gmail.com', 'rastogihappy@gmail.com', '', '', '2012-02-02'),
(18, 'pre-event-mumba', 'vivekiitb544@gmail.com', 'rastogihappy@gmail.com', '', '', '2012-02-02'),
(19, 'pre-event-mumba', 'vivekiitb544@gmail.com', 'rastogihappy@gmail.com', '', '', '2012-02-02'),
(20, 'pre-event-pune', 'mehboob.mambo@gmail.com', '', '', '', '2012-02-03'),
(21, 'pre-event-pune', 'boraderahul2008@gmail.com', '', '', '', '2012-02-03'),
(22, 'pre-event-pune', 'abhishek.kp.singhi@gmail.com', '', '', '', '2012-02-03'),
(23, 'Controls-worksh', 'sindhu_sonnu2006', 'san_suji26@yahoo.co.in', '', '', '2012-02-04'),
(24, 'pre-event-mumba', 'anishrko@gmail.com', '', '', '', '2012-02-04'),
(25, 'image-processin', 'anishrko@gmail.com', '', '', '', '2012-02-04'),
(26, 'Controls-worksh', 'anishrko@gmail.com', '', '', '', '2012-02-04'),
(27, 'Mumbai Workshop', 'sumitthakur2105@gmail.com', 'kpl2190@gmail.com', '', '', '2012-02-05'),
(28, 'Pune Workshop', 'miki9', 'miki10', '', '', '2012-02-05'),
(29, 'Talent Expo', 'miki9', '', '', '', '2012-02-05'),
(30, 'Image Processin', 'miki9', 'miki10', 'miki', '', '2012-02-05'),
(31, 'Talent Expo', 'miki9', '', '', '', '2012-02-05'),
(32, 'Talent Expo', 'r.phaniraj93@gmail.com', '', '', '', '2012-02-05'),
(33, 'Talent Expo', 'r.phaniraj93@gmail.com', '', '', '', '2012-02-05'),
(34, 'Talent Expo', 'ronak_student@yahoo.com', '', '', '', '2012-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(10) NOT NULL auto_increment,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_email_active` enum('not activated','activated') NOT NULL default 'not activated',
  `user_phone` bigint(10) NOT NULL,
  `user_college` varchar(20) NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_year` varchar(15) NOT NULL,
  `user_registered_time` date NOT NULL,
  `user_last_login` date NOT NULL,
  `user_address` tinytext NOT NULL,
  `user_remarks` tinytext NOT NULL,
  `random_code` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100070067 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_email_active`, `user_phone`, `user_college`, `user_city`, `user_year`, `user_registered_time`, `user_last_login`, `user_address`, `user_remarks`, `random_code`) VALUES
(100070032, 'Nikhil Kumar', 'nikhilgoyal@ee.iitb.ac.in', 'try123', 'not activated', 9819489904, 'IIT Bombay', 'Mumbai', '5th year', '2012-02-01', '2012-02-01', 'Powai Campus', '', 'uqm4hxxmpqehvfyi0rq09e9le'),
(100070034, 'Prince Arya', 'prince.iitb.ee@gmail.com', '2311', 'not activated', 9833437482, 'IIT Bombay', 'Mumbai', '3rd', '2012-02-01', '2012-02-01', 'IITb', '', '0bvjc5f2uykjupg05yx8tv0m0'),
(100070035, 'Sanath ', 'sanathkuppa@gmail.com', '1123581321', 'not activated', 9820721545, 'IIT Bombay', 'Bombay', 'Sophomore', '2012-02-01', '2012-02-01', '', '', 'ww3n2q7opnhb0k4w1utesk55d'),
(100070036, 'Shubham Jindal', 'hishubham.jindal@gmail.com', 'Jind8rule', 'not activated', 9975642450, 'Bharati Vidyapeeth D', 'Pune', '2012', '2012-02-02', '2012-02-02', 'A-9, Ratan Garden Society,\r\nAmbegaon, Katraj,\r\nPune - 411046', '', '9df3ise67s5os5kcq3hjau1ii'),
(100070037, 'Vivek Kumar', 'vivekiitb544@gmail.com', 'vivekabhi', 'not activated', 7208255419, 'IIT Bombay', 'Mumbai', '2nd year B.tech', '2012-02-02', '2012-02-02', 'IIT Bombay, Powai, Mumbai-400076', '', 'evhqllx65kf095zm1ik8z94qd'),
(100070038, 'Abhinav Kumar Rastogi', 'rastogihappy@gmail.com', 'vivekabhi', 'not activated', 7208242940, 'IIT Bombay', 'Mumbai', '2nd Year ', '2012-02-02', '2012-02-02', 'IIT Bombay, Powai, Mumbai-400076', '', 's0tx8wdbopvr0mbxpwvfpcydj'),
(100070039, 'fgfg', 'ffgfgf', 'f', 'not activated', 0, 'fgfgf', 'fgfg', 'gfgfg', '2012-02-03', '2012-02-03', 'fg', 'fgfgfg', '48rmvrqq2gtkmjae1pwd14u89'),
(100070040, 'ghgh', 'ghgh', 'g', 'not activated', 0, 'ghgh', 'ghgh', 'ghg', '2012-02-03', '2012-02-03', 'hghgh', 'gh', 'ym8hyd89p8bmbds2z0f1zwctw'),
(100070041, 'tyty', 'ytyty', 'y', 'not activated', 0, 'tyt', 'tyty', 'tyt', '2012-02-03', '2012-02-03', 'ytyty', 'tyty', 'v3uasv2hf3dgavq3jvipv61ky'),
(100070042, 'hhh', 'hi', 'h', 'not activated', 0, 'ghgh', 'ghgh', 'ghgh', '2012-02-03', '2012-02-03', 'ghghgh', 'hghghgh', 'ujh3iwi1ae8hf7t9y4pxo3qys'),
(100070043, 'fgfg', 'fgfgfg', 'f', 'not activated', 0, 'fgfg', 'ffffgfg', 'fgfg', '2012-02-03', '2012-02-03', 'fgfgfg', 'fgfgfg', '22ztfrbk7hfd4uq8ry7oudvpy'),
(100070044, 'Mehboob Kothiwale', 'mehboob.mambo@gmail.com', 'mattinny', 'not activated', 8793352746, 'COE, Pune', 'Pune', 'TY', '2012-02-03', '2012-02-03', 'Pune', '', '7eftcw1jyak0yt0g8dkwqbpkk'),
(100070045, 'Rahul', 'boraderahul2008@gmail.com', 'rahul1291', 'not activated', 7387131173, 'coep', 'pune', '2012', '2012-02-03', '2012-02-03', 'coep hostel', '', 'r268blzw2r96blyq2368vxj6p'),
(100070046, 'Abhishek', 'abhishek.kp.singhi@gmail.com', 'yamahafzs', 'not activated', 7798308669, 'CoEP', 'Pune', '2009', '2012-02-03', '2012-02-03', 'Nigdi pune', 'CoEP Electrical', '5r678ull4qa4ljpspscgudfly'),
(100070047, 'rasaputra sindhurika', 'sindhu_sonnu2006', 'shantisin', 'not activated', 8985147702, 'p.v.p.siddartha inst', 'vijayawada', '3rd year', '2012-02-04', '2012-02-04', 'h-no:60-19-3/1,sunnapubattelu centre,ashok nagar,2nd lane,vijayawada-10.', '', 'msbw29bn0u2wjs40kvuk0pyzh'),
(100070048, 'monojit nath', 'monojit100887@gmail.com', 'bultinath', 'not activated', 9983772332, 'suresh gyan vihar un', 'jaipur', '3', '2012-02-04', '2012-02-04', 'A-351, malviya nagar, jaipur, rajasthan', '', 'r0oral4nczsv0fzlx4n6ygyzy'),
(100070049, 'gaurav kanthaliya', 'gaurav.kanthaliya@gmail.com', 'robot', 'not activated', 9461140098, 's.k.i.t. jaipur', 'jaipur', '1', '2012-02-04', '2012-02-04', 'gaurav kanthaliya, radha krishna hostel,\r\nskit jagatpura jaipur.', 'gaurav kanthaliya, radha krishna hostel,skit jagatpura jaipur.', 'lhho4u5fwzo1tbz9t6fm33pn7'),
(100070050, 'sandeep', 'san_suji26@yahoo.co.in', 'sinnusunny', 'not activated', 9441791033, 'p.v.p siddartha inst', 'vijayawada', '2009-2013', '2012-02-04', '2012-02-04', '54-18-59/2,\r\nlic colony vijayawada', '', '27m4pq42whqtxolt3923vguws'),
(100070051, 'anish', 'anishrko@gmail.com', 'ak080292', 'not activated', 9172334834, 'KJ Somaiya institute', 'mumbai', '3rd', '2012-02-04', '2012-02-04', '90,latif building, ambedkar road dadar east', 'are we going to be certified for the workshop ?', 'fuum7lsp486ye2z7h03xg8ic6'),
(100070052, 'Sreekiran', 'kiran.alwaysmile@gmail.com', 'cannizaro', 'not activated', 9030581297, 'MVSR College of Engi', 'HYDERABAD', '2012', '2012-02-04', '2012-02-04', '13-23-136,sony sai kutter apt,Thyagaraya nagar,Kothapet ,Hyderabad ,Andhrapradesh.\r\npin-500035', 'I had an innovative project and i want to produce it before you.', '3ari6pbt8dxt1m3js2t67gmxe'),
(100070053, 'Miki', 'miki1', 'miki', 'not activated', 0, 'bkjb', 'nkjb', '2nd year UG', '2012-02-04', '2012-02-04', 'jb', 'kjb', '9r2z8rq28j00irp0octzfz0mw'),
(100070054, 'miki', 'test', 'miki', 'not activated', 0, 'jlk', 'kjl', '2nd year UG', '2012-02-04', '2012-02-04', 'kjbhkbkb', 'kbkj', 'yn3f7ey529e6o8mjns17c1vwx'),
(100070055, 'miki', 'test55', 'miki', 'not activated', 0, 'jlk', 'kjl', '2nd year UG', '2012-02-04', '2012-02-04', 'kjbhkbkb', 'kbkj', '7vb0w3eorgc4avvtchhx63xim'),
(100070056, 'miki', 'test555', 'miki', 'not activated', 0, 'jlk', 'kjl', '2nd year UG', '2012-02-04', '2012-02-04', 'kjbhkbkb', 'kbkj', '02rmn2nveo1sqk2xsjgc5shdu'),
(100070057, 'thakur', 'sumitthakur2105@gmail.com', 'sneha123', 'not activated', 8976798605, 'MGM college of engin', 'Navi Mumbai', '4th year UG', '2012-02-05', '2012-02-05', '', '', 'fn7t6gd4yeozttav99ykw64i0'),
(100070058, 'Kishor ', 'kpl2190@gmail.com', 'kplkplkpl', 'not activated', 9029041520, '', 'Navi Mumbai', '4th year UG', '2012-02-05', '2012-02-05', '', '', 'tyfj2mdta6wb7xehfndm4teuz'),
(100070059, 'hbh', 'miki9', 'miki', 'not activated', 0, 'jhb', 'hb', '5th year UG', '2012-02-05', '2012-02-05', 'jhbj', 'hb', '5xfofwx460rv422er5w4ylij8'),
(100070060, 'R.Phani Raj', 'r.phaniraj93@gmail.com', '', 'not activated', 0, '', '', 'Not selected', '2012-02-05', '2012-02-05', '', '', 'ptlt3cyfsw110v4knhaz3s9m5'),
(100070061, 'R.Phani Raj', 'r.phaniraj93@gmail.com', 'samantha', 'not activated', 8121797104, 'MVSR Engineering col', 'hyderabad', '1st year UG', '2012-02-05', '2012-02-05', 'plot no.777,h.no 12-101-365/4, seethafalmandi , sec-bad-061', '', 'yptgdvcbu9zz2bng36gamdn3b'),
(100070062, 'pankaj singh kushwah', 'pankajrocks.singh@gmail.com', '9425776510', 'not activated', 9425776510, 'Bhartiya vidya mandi', 'gwalior,m.p.', '2nd year UG', '2012-02-05', '2012-02-05', '42,sindhi colony lashkar,  gwalior,\r\n M. P.', '', '8fqq01k60uj8whgle1fbce81m'),
(100070063, 'prashant.garje', 'pgarje@ymail.com', '28JANUARY1993', 'not activated', 7208599104, 'Vidyalankar Institut', 'MUMBAI', '2nd year UG', '2012-02-05', '2012-02-05', 'Commissioner of police compound, A/91, 2nd floor, L. T. Marg, Mumbai:400001', 'nothing', 'mkkdqujyidym8ijv5e07j3oxd'),
(100070064, 'tushar', 'gawadetv10.elec@coep.ac.in', '9420346332', 'not activated', 7387791702, 'coep', 'pune', '3rd year UG', '2012-02-06', '2012-02-06', 'b11 akashwani hadapsar pune', 'xyz', 'q2thobv41kaer9aada7262l1o'),
(100070065, 'srideep', 'srideep14350@gmail.com', '8019850298143', 'not activated', 8019850298, 'kluniversity', 'vijayawada', '3rd year UG', '2012-02-06', '2012-02-06', 'bejjala meda street kothapet d-no 6-17-23 kothapeta vijayawada', '', 'ji4qje3x0hrzk52tsyon24ygn'),
(100070066, 'N.VENKATASIVA', 'sarayuram81@gmail.com', 'hariom314', 'not activated', 7382514515, 'A.V.R&S.V.R COLLEGE ', 'kurnool', '3rd year UG', '2012-02-06', '2012-02-06', 'H.NO.8-5-57/2;KADAPA ROAD ,ALLAGADDA,  KURNOOL DISTRICT,ANDHRA PRADESH', 'WORKSHOP ON IMAGE PROCESSING', '1aa0lfc4q5d7ltgjgc79gjvx2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
