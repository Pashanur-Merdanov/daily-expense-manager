-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-jeyhunahmadov.alwaysdata.net
-- Generation Time: Dec 10, 2019 at 09:07 AM
-- Server version: 10.2.22-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeyhunahmadov_pw4`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `gender` text NOT NULL,
  `username` text NOT NULL,
  `adress` text NOT NULL,
  `date` date NOT NULL,
  `phone` int(20) NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`gender`, `username`, `adress`, `date`, `phone`, `email`, `city`, `password`) VALUES
('mr', 'k;jihugyt', 'lpkohuf', '2019-11-07', 554440830, 'c@gmail.com', 'kjihugy', '111111'),
('mr', 'k;jihugyt', 'lpkohuf', '2019-11-07', 554440830, 'c@gmail.com', 'kjihugy', '111111'),
('mr', 'jeyhun_ahmadov', 'lkjihugy', '2019-11-25', 554440830, 'ceyhunehmedov2000@gmail.com', 'oihgfd', '698d51a19d8a121ce581499d7b701668'),
('mr', 'jeyhun_ahmadov', 'okihgf', '2019-11-25', 554440830, 'ceyhunehmedov2000@gmail.com', 'oihgfd', 'bcbe3365e6ac95ea2c0343a2395834dd'),
('', '12@gmail.com', 'qs', '2019-12-07', 554440830, 'ceyhunehmedov2000@gmail.com', 'Bakı', '698d51a19d8a121ce581499d7b701668'),
('', '12@gmail.com', 'kjhg', '2019-12-07', 554440830, 'ceyhunehmedov2000@gmail.com', 'kojihugyt', '698d51a19d8a121ce581499d7b701668'),
('mr', 'jeyhun', 'poiuyt', '2019-12-07', 554440830, 'ceyhun@gmail.com', 'lpkojhuy', '698d51a19d8a121ce581499d7b701668'),
('mrs', '12@gmail.com', 'kjkhjg', '2019-12-07', 554440850, 'c@mail.az', 'BAkkugy', '698d51a19d8a121ce581499d7b701668'),
('mr', '12@gmail.com', 'kjhg', '2019-12-07', 554440830, 'c@gmail.com', 'Baku', 'b0baee9d279d34fa1dfd71aadb908c3f'),
('mr', '12@gmail.com', 'lkjbh', '2019-12-07', 554440305, 'c@gmail.com', 'Baku', '698d51a19d8a121ce581499d7b701668'),
('mr', 'c@gmail.com', 'ce', '2019-12-07', 554440830, 'ceyhunehmedov2000@gmail.com', 'Jihugytfr', '912ec803b2ce49e4a541068d495ab570'),
('mr', 'c@gmail.com', 'ce', '2019-12-07', 554440830, 'ceyhunehmedov2000@gmail.com', 'Jihugytfr', '912ec803b2ce49e4a541068d495ab570'),
('mr', 'c@gmail.com', 'ce', '2019-12-07', 554440830, 'ceyhunehmedov2000@gmail.com', 'Jihugytfr', '912ec803b2ce49e4a541068d495ab570'),
('mr', 'c@gmail.com', 'ce', '2019-12-07', 554440830, 'ceyhunehmedov2000@gmail.com', 'Jihugytfr', 'bf083d4ab960620b645557217dd59a49'),
('mr', '12@gmail.com', 'wd', '2019-12-10', 554440805, 'ceyhunehmedov2000@gmail.com', 'kojihugyf', 'c8837b23ff8aaa8a2dde915473ce0991');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
