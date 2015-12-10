-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 06:47 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`uid`, `first_name`, `last_name`, `address`, `phone_no`, `email`) VALUES
(1, 'Parth', 'Vora', 'MIG-98, shashtrinagar, bhavnagar', 9974048966, 'parth.vora.777@gmail.com'),
(2, 'Robert', 'Downey', '127, Malibu, LA', 8978457862, 'robert.rocks@gmail.com'),
(3, 'Scarlett', 'Johansan', 'D-78, Park avaenue, London', 7878784565, 'blackwidow@yahoo.com'),
(4, 'ppp', 'xxx', 'ppppppppp', 7878787878, 'p@ll.com'),
(5, 'ppp', 'xxx', 'ppppppppp', 7878787878, 'p@ll.comhhhhh'),
(6, 'hilaary', 'duff', 'nothing', 7878784578, 'ppp@ccc.cccc'),
(7, 'Peter', 'parker', 'asd asdask asd', 4545454545, 'ppp@peter.com'),
(8, 'Nick', 'fury', 'tyr rjk sadkl', 1245789865, 'nick@futy.com'),
(9, 'scarlllet', 'witch', 'witch hunter', 124565789, 'which@hunter.com'),
(10, 'alicia', 'vicknder', 'lksadpo asd', 897845879, 'alica@vv.com'),
(11, 'naishu', 'pattt', 'sadk asdj df', 5448315, 'naishu@pp.com'),
(12, 'diksi', 'kaps', 'asd lksd fkdfsd', 45789854, 'dd@pl.cpl'),
(13, 'abc', 'abc', 'abc abc abc', 123456, 'abc@abc.com'),
(14, 'xyz', 'xyz', 'xyz xyz xyz', 123456, 'xyz@xyz.com'),
(15, 'pqr', 'pqr', 'pqr pqr pqr', 123456, 'pqr@pqr.com'),
(16, 'def', 'def', 'def def def', 123456, 'def@def.com'),
(17, 'lmn', 'lmn', 'lmn lmn lmn', 12345678, 'lmn@lmn.com'),
(18, 'danial', 'craig', '4-20, abv', 9878451, 'danial@crieg.com'),
(19, 'robert', 'dnero', '520-keni', 54782212, 'robert@dnero.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
