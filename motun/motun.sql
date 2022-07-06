-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2022 at 10:35 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motun`
--

-- --------------------------------------------------------

--
-- Table structure for table `creds`
--

DROP TABLE IF EXISTS `creds`;
CREATE TABLE IF NOT EXISTS `creds` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creds`
--

INSERT INTO `creds` (`email`, `password`) VALUES
('admin@admin.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `decisions`
--

DROP TABLE IF EXISTS `decisions`;
CREATE TABLE IF NOT EXISTS `decisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `minute` varchar(400) NOT NULL,
  `keyarea` varchar(100) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `members` varchar(400) NOT NULL,
  `venue` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decisions`
--

INSERT INTO `decisions` (`id`, `title`, `minute`, `keyarea`, `starttime`, `endtime`, `date`, `status`, `members`, `venue`) VALUES
(12, 'nmnm', 'nn  m', 'mll', '06:16:00', '06:18:00', '2022-04-27', 'open', 'nnnsnsn', 'benson hall'),
(2, 'open one', 'mmmsm', 'msmsmsmms', '13:41:24', '13:43:50', '2022-01-01', 'open', 'tbd', 'science complex'),
(8, '    report 2', '    test', ' key ', '00:10:00', '12:15:00', '2022-03-31', 'open', ' people', 'ict'),
(4, 'new', 'data', 'motun', '15:47:00', '15:49:00', '2022-03-19', 'open', 'Prof. Toyin.', 'ict'),
(5, '  newe', '  datad', '  motunu', '15:51:00', '15:51:00', '2022-03-17', 'closed', 'Dr. Raji.', 'ict'),
(7, 'hhs', 'bsb', 'sb', '00:10:00', '12:15:00', '2022-03-31', 'open', 'Prof. Toyin.Engr. Aiyeneko.Dr. Owate.', 'ict'),
(9, 'bsn', 'letse', 'hssh', '12:25:00', '12:26:00', '2022-03-31', 'closed', 'Prof. Rahman', 'science room'),
(10, 'nxn', 'let em she shei hdcjdskoak s akjajssn', 'nxn', '12:27:00', '12:28:00', '2022-03-31', 'closed', 'Prof. Toyin', 'science complex'),
(11, ' Report 1', '  test ', '  nnmmn', '12:25:00', '00:25:00', '2022-04-20', 'open', ' people', 'science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'regular',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Motunrayo', 'regularuser@project.com', 'password', 'regular'),
(2, 'Admin User', 'admin@admin.com', 'password', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
