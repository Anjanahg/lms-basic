-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 06:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(6) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isavailable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookname`, `author`, `isavailable`) VALUES
(14, 'aa', 'aa', 0),
(15, 'aa', 'aa', 0),
(16, 'qwe', 'qqq', 0),
(17, 'eee', 'eee', 1),
(18, 'rrr', 'rrr', 1),
(19, 'ttt', 'ttt', 0),
(20, 'yyy', 'yyy', 1),
(21, 'uuu', 'uuu', 1),
(22, 'aaa', 'aaa', 1),
(23, 'ccc', 'ccc', 0),
(24, 'bbb', 'bbb', 1),
(25, 'nnn', 'nnn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `address`, `is_admin`, `phone`, `password`, `email`) VALUES
(1, 'Sandun', '', 'Rajagiriya, Colombo.', 1, '07544848', 'admin', 'admin'),
(2, '11111', '11111', '11111', 0, '11111', '11111', '11111'),
(3, 'Amal', 'Kumara', 'moratuwa,Srilanka.', 0, '071545485', '111', 'amal@gmail.com'),
(4, '222', '222', '222', 0, '222', '222', '222'),
(5, '333', '333', '3333', 0, '333', '333', '333'),
(6, '444', '444', '444', 0, '444', '444', '444'),
(7, '555', '555', '555', 0, '555', '555', '555'),
(8, '666', '666', '666', 0, '666', '666', '666'),
(9, '555', '555', '555', 0, '555', '555', '555'),
(10, 'Mila', 'Wijekoon', 'mila', 0, '0721456485', '111111', 'mila@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
