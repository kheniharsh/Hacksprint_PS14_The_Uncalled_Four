-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 06:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `tempo` varchar(30) NOT NULL,
  `energy` varchar(30) NOT NULL,
  `danceability` varchar(30) NOT NULL,
  `loudness` varchar(30) NOT NULL,
  `valence` varchar(30) NOT NULL,
  `acousticness` varchar(30) NOT NULL,
  `mood` varchar(30) NOT NULL,
  `fmood` varchar(30) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `title`, `tempo`, `energy`, `danceability`, `loudness`, `valence`, `acousticness`, `mood`, `fmood`, `file`) VALUES
(1, 'PJ Harvey', '50 Ft Queenie', '126.366', '0.667', '0.382', '-16.077', '0.718', '0.000652', 'Angry', 'Sad', ''),
(2, 'PJ Harvey', '50 Ft Queenie', '126.366', '0.667', '0.382', '-16.077', '0.718', '0.000652', 'Angry', 'sad', ''),
(3, 'PJ Harvey', '50 Ft Queenie', '126.366', '0.667', '0.382', '-16.077', '0.718', '0.000652', 'Sad', '', 0x302e6d7033);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `re_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `pass`, `re_pass`) VALUES
('Darpan', 'pdarpan321@gmail.com', 'darpan2310', 'darpan2310'),
('Darpan', 'darpanpatel2310@yaho', 'e67bfd33acefa88268ab', 'e67bfd33acefa88268ab'),
('Darpan', 'darpan@gmail.com', '638f293bd70feca7a65f', '638f293bd70feca7a65f'),
('Darpan', 'pdarpan321@gmail.com', 'e67bfd33acefa88268ab', 'e67bfd33acefa88268ab'),
('Dp', 'pdarpan321@gmail.com', 'e67bfd33acefa88268ab', 'e67bfd33acefa88268ab'),
('Dp', 'pdarpan321@gmail.com', 'e67bfd33acefa88268ab', 'e67bfd33acefa88268ab'),
('Megh', 'meghpatel@gmail.com', '8cb2237d0679ca88db64', '8cb2237d0679ca88db64'),
('Darpan', 'darpan@gmail.com', 'e67bfd33acefa88268ab', 'e67bfd33acefa88268ab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
