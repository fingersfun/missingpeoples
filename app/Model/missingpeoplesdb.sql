-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2014 at 10:40 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `missingpeoplesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `relation` varchar(150) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `surname`, `relation`, `phone`, `address`, `city`, `district`, `state`) VALUES
(1, 'CHANDRA', 'SI ', 'Father', 9245678, 'H.NO-C-120, CHUNGI NO-2, LAL KUAN,PUL PRAHLAD PUR NEW DELHI', 'PUL PRAHLAD PUR', 'SOUTH EAST DISTRICT', 'NEW DELHI'),
(2, 'CHANDRA', 'SI ', 'Father', 9245678, 'H.NO-C-120, CHUNGI NO-2, LAL KUAN,PUL PRAHLAD PUR NEW DELHI', 'PUL PRAHLAD PUR', 'SOUTH EAST DISTRICT', 'NEW DELHI'),
(3, 'kk', 'hh', 'hg', 566, 'gh', 'gf', 'fg', 'fgh'),
(4, '234', 'fgs', 'sdf', 4563, 'sdfg', 'sfg', 'sdf', 'sdf'),
(5, 'sdfgs', 'dfgsdfg', 'sdfgsdfg', 7896, 'dfh', 'rtgswe', 'dfgh', 'dfgh'),
(6, 'sgdf', 'sdfgs', 'dfgsd', 3456, 'dfg', 'sdfg', 'sdfgs', 'sdfg'),
(7, 'dfgs', 'dfgsdfg', 'sdfg', 4363, 'sdfgsd', 'fgsdfgs', 'sdgfsd', 'dfgs'),
(8, 'sdfgs', 'sdfg', 'sdfg', 345345, 'sdfs', 'fsdf', 'sfs', 'fsdf'),
(9, 'sdfg', 'sdfgs', 'sdfg', 43, 'dfdfg', 'fgdf', 'gdf', 'dffgd'),
(10, 'sdf', 'sdfsd', 'dfsd', 345, 'dsf', 'sdfsd', 'sdf', 'sdfsd'),
(11, 'gh', 'dfgdg', 'dfghd', 546, 'dgf', 'dfg', 'dgf', 'dfg'),
(12, 'sdfg', 'sdfg', 'sdfg', 25323, 'fsdf', 'xvz', 'xcvz', 'xcv'),
(13, 'dsfg', 'sdfgsdf', 'sdfg', 45634, 'dfbvgxd', 'xdf', 'dfg', 'sdfgd'),
(14, 'dfgh', 'dfgh', 'dfgh', 456, 'fgh', 'bxgf', 'dfgh', 'fghd'),
(15, 'gg', 'gg', 'gg', 44, 'gg', 'gg', 'gg', 'gg'),
(16, 'reg', 'erg', 'erg', 53, 'xdvgx', 'vxcv', 'xcvx', 'cv');

-- --------------------------------------------------------

--
-- Table structure for table `identifications`
--

CREATE TABLE IF NOT EXISTS `identifications` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `height` double(10,2) NOT NULL,
  `weight` double(11,2) NOT NULL,
  `colorofeyes` varchar(100) NOT NULL,
  `colorofheir` varchar(100) NOT NULL,
  `marks` text NOT NULL,
  `type` varchar(40) NOT NULL DEFAULT 'Right Handed',
  `place` text NOT NULL,
  `wearing` text NOT NULL,
  `characteristics` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `identifications`
--

INSERT INTO `identifications` (`id`, `height`, `weight`, `colorofeyes`, `colorofheir`, `marks`, `type`, `place`, `wearing`, `characteristics`) VALUES
(1, 122.00, 47.00, 'Black', 'Black smal', 'Face oval shape, Marks on Chin', 'Right', '', 'SHIRT BLACK, PANT BLACK', 'NO'),
(2, 122.00, 47.00, 'Black', 'Black smal', 'Face oval shape, Marks on Chin', 'Right', '', 'SHIRT BLACK, PANT BLACK', 'NO'),
(3, 557.00, 45.00, 'bl', 'blc', 'mmm', 'Right', '', 'dhdfgh', 'tyetyd'),
(4, 34.00, 34.00, 'rt', 'ret', 'etert', 'Right', '', 'dgfdf', 'dfgsdfg'),
(5, 4.00, 3445.00, 'sdf', 'sgf', 'sgfxcdfgsr', 'Right', '', 'sdfggfsd', 'sgfg'),
(6, 567.00, 645.00, 'erts', 'afds', 'asdfas', 'Right', '', 'asdf', 'asdfsd'),
(7, 45.00, 364.00, 'erta', 'fdsf', 'asdf', 'Right', '', 'sdfgss', 'fgsdfg'),
(8, 34.00, 34.00, 'edfds', 'fasdf', 'asdf', 'Right', '', 'asdfa', 'fasd'),
(9, 546.00, 54.00, 'ss', 'sdf', 'fd', 'Right', '', 'dfg', 'df'),
(10, 34.00, 234.00, 'wer', 'ers', 'erfsdf', 'Right', '', 'sdfds', 'sdf'),
(11, 46.00, 456.00, '45', 'gsdf', 'gsdfg', 'Right', '', 'dfg', 'sdfg'),
(12, 546.00, 34.00, 'sdf', 'sdfs', 'dfsdf', 'Right', '', 'dgf', 'sgfs'),
(13, 456.00, 456.00, 'dfgd', 'fgd', 'fxdf', 'Right', '', 'xcdvfbx', 'dfbgdxs'),
(14, 546.00, 56.00, 'fdgs', 'sdfg', 'sdfg', 'Right', '', 'dfgs', 'dfg'),
(15, 44.00, 4.00, 'gg', 'gg', 'gg', 'Right', '', 'gg', 'gg'),
(16, 546.00, 54.00, 'dgds', 'dfgsd', 'fgd', 'Right', '', 'dfgsd', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `missingdetails`
--

CREATE TABLE IF NOT EXISTS `missingdetails` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `reason` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `district` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `missingdetails`
--

INSERT INTO `missingdetails` (`id`, `date`, `reason`, `city`, `district`, `state`) VALUES
(1, '2014-06-29', 'NO', 'PUL PRAHLAD PUR', 'PUL PRAHLAD PUR', 'NEW DELHI'),
(2, '2014-06-29', 'NO', 'PUL PRAHLAD PUR', 'PUL PRAHLAD PUR', 'NEW DELHI'),
(3, '2014-07-03', 'rteswr', 'sdfg', 'sdfg', 'sdfg'),
(4, '2014-07-03', 'fgsdg', 'sdg', 'gs', 'sdg'),
(5, '2014-07-03', 'sdfgsdf', 'sgfd', 'dfg', 'sdfg'),
(6, '2014-07-03', 'ertfasd', 'dfasd', 'gsdf', 'dfg'),
(7, '2014-07-03', 'sdfg', 'dfgsdg', 'gsdfg', 'sdfg'),
(8, '2014-07-03', 'sdfgsdf', 'sdfg', 'gfsd', 'gsdfg'),
(9, '2014-07-03', 'sdfgsdf', 'sdfgs', 'gfsdf', 'gsdfg'),
(10, '2014-07-03', 'sdfsd', 'sdf', 'sdfsd', 'fsdf'),
(11, '2014-07-03', 'dfgh', 'gfh', 'dfgh', 'dfgh'),
(12, '2014-07-03', 'dfgds', 'dfg', 'dfsg', 'sdfg'),
(13, '2014-07-03', 'ghfd', 'dfgh', 'dfgh', 'dfg'),
(14, '2014-07-03', 'dfgh', 'dfgh', 'dfgh', 'dfg'),
(15, '2014-07-03', 'gg', 'gg', 'gg', 'gg'),
(16, '2014-07-03', 'sedrtg', 'dsfg', 'sdfg', 'sdfg');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `identification_id` bigint(20) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `missingdetail_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `identification_id` (`identification_id`),
  KEY `missingdetail_id` (`missingdetail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `surname`, `sex`, `dob`, `age`, `picture`, `identification_id`, `contact_id`, `missingdetail_id`, `status`, `created`, `modified`) VALUES
(1, 'KADIR', 'MD', 'Male', '2002-07-02', 0, 'missings/default.png', 2, 2, 2, 0, '2014-07-02 04:47:35', '2014-07-02 04:47:35'),
(2, 'Rak', 'Sur', 'Male', '2014-07-03', 0, 'missings/default.png', 3, 3, 3, 0, '2014-07-03 06:46:19', '2014-07-03 06:46:19'),
(3, 'ewr', 'we', 'Male', '2014-07-03', 0, 'missings/default.png', 4, 4, 4, 0, '2014-07-03 06:56:41', '2014-07-03 06:56:41'),
(4, 'dfsgsd', 'fdg', 'Male', '2014-07-03', 0, 'missings/default.png', 5, 5, 5, 0, '2014-07-03 06:59:18', '2014-07-03 06:59:18'),
(5, 'fa', 'wfe', 'Male', '2014-07-03', 0, 'missings/default.png', 6, 6, 6, 0, '2014-07-03 07:04:40', '2014-07-03 07:04:40'),
(6, 'dfsd', 'dsfa', 'Male', '2014-07-03', 0, 'missings/default.png', 7, 7, 7, 0, '2014-07-03 07:08:04', '2014-07-03 07:08:04'),
(7, 'efas', 'fasdfa', 'Male', '2014-07-03', 0, 'missings/default.png', 8, 8, 8, 0, '2014-07-03 07:13:12', '2014-07-03 07:13:12'),
(8, 'sdf', 'sdf', 'Male', '2014-07-03', 0, 'missings/default.png', 9, 9, 9, 0, '2014-07-03 07:46:00', '2014-07-03 07:46:00'),
(9, 'er', 'wer', 'Male', '2014-07-03', 0, 'missings/default.png', 10, 10, 10, 0, '2014-07-03 07:49:15', '2014-07-03 07:49:15'),
(10, 'rer', 'ewrw', 'Male', '2014-07-03', 0, 'missings/default.png', 11, 11, 11, 0, '2014-07-03 07:59:32', '2014-07-03 07:59:32'),
(11, 'hdfg', 'dfgs', 'Male', '2014-07-03', 0, 'missings/default.png', 12, 12, 12, 0, '2014-07-03 08:05:14', '2014-07-03 08:05:14'),
(12, 'dfa', 'asdfas', 'Male', '2014-07-03', 0, 'missings/default.png', 13, 13, 13, 0, '2014-07-03 08:23:25', '2014-07-03 08:23:25'),
(13, 'rew', 'wert', 'Male', '2014-07-03', 0, 'images/missings/default.png', 14, 14, 14, 0, '2014-07-03 08:29:53', '2014-07-03 08:29:53'),
(15, 'ggg', 'gg', 'Male', '2014-07-03', 0, 'images/missings/default.png', 15, 15, 15, 0, '2014-07-03 11:02:43', '2014-07-03 11:02:43'),
(16, 'tyres', 'drt', 'Male', '2014-07-03', 0, 'images/missings/default.png', 16, 16, 16, 0, '2014-07-03 11:24:29', '2014-07-03 11:24:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`identification_id`) REFERENCES `identifications` (`id`),
  ADD CONSTRAINT `persons_ibfk_2` FOREIGN KEY (`missingdetail_id`) REFERENCES `missingdetails` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
