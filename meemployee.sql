-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2023 at 01:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `age`, `gender`, `email`, `password`, `status`, `image`) VALUES
(1, 'Sethu', 'ram', 22, 'male', 'sethu22@gmail.com', 'Sethu@22', 'Active', 's.png'),
(2, 'Yuva', 'nathan', 21, 'male', 'yuva21@gmail.com', 'Yuva@21', 'Active', 'y.png'),
(3, 'Hari', 'krishnan', 20, 'male', 'hari20@gmail.com', 'Hari@20', 'Active', 'h.png'),
(4, 'Ram', 'kumar', 21, 'male', 'ram21@gmail.com', 'Ram@21', 'Active', 'r.png'),
(5, 'Raja', 'pandi', 21, 'male', 'raja21@gmail.com', 'Raja@21', 'Active', 'r.png'),
(6, 'Senthil', 'kumar', 22, 'male', 'senthil22@gmail.com', 'Senthil@22', 'Active', 's.png'),
(7, 'Arun', 'kumar', 20, 'male', 'arun20@gmail.com', 'Arun@20', 'Active', 'a.png'),
(8, 'Ajith', 'kumar', 21, 'male', 'ajith21@gmail.com', 'Ajith@21', 'Active', 'a.png'),
(9, 'Bala', 'kumaran', 22, 'male', 'bala22@gmail.com', 'Bala@22', 'Active', 'b.png'),
(10, 'Dinesh', 'kumar', 20, 'male', 'dinesh20@gmail.com', 'Dinesh@20', 'Active', 'd.png'),
(11, 'Gopi', 'krishnan', 22, 'male', 'gopi22@gmail.com', 'Gopi@22', 'Active', 'g.png'),
(12, 'Jeya', 'surya', 20, 'male', 'jeya20@gmail.com', 'Jeya@20', 'Active', 'j.png'),
(13, 'Karthik', 'kumar', 23, 'male', 'karthik23@gmail.com', 'Karthik@23', 'Active', 'k.png'),
(14, 'Maari', 'muthu', 22, 'male', 'maari22@gmail.com', 'Maari@22', 'Active', 'm.png'),
(15, 'Naga', 'nathan', 20, 'male', 'naga20@gmail.com', 'Naga@20', 'Active', 'n.png'),
(16, 'Ram', 'sekar', 22, 'male', 'ram22@gmail.com', 'Ram@22', 'Inactive', 'r.png'),
(17, 'Krishna', 'kumar', 22, 'male', 'krishna22@gmail.com', 'Krishna@22', 'Inactive', 'k.png'),
(18, 'Rama', 'nathan', 23, 'male', 'rama23@gmail.com', 'Rama@23', 'Inactive', 'r.png'),
(19, 'Krithvik', 'saran', 21, 'male', 'krithvik21@gmail.com', 'Krithvik@21', 'Inactive', 'k.png'),
(20, 'suresh', 'kannan', 21, 'male', 'suresh21@gmail.com', 'Suresh@21', 'Inactive', 's.png'),
(21, 'Ramesh', 'kannan', 22, 'male', 'ramesh22@gmail.com', 'Ramesh@22', 'Active', 'r.png'),
(22, 'Vishnu', 'varthan', 21, 'male', 'vishnu21@gmail.com', 'Vishnu@21', 'Active', 'v.png'),
(23, 'Raj', 'gobal', 20, 'male', 'raj20@gmail.com', 'Raj@20', 'Active', 'r.png'),
(24, 'Prabu', 'ram', 22, 'male', 'prabu22@gmail.com', 'Prabu@22', 'Active', 'p.png'),
(25, 'Ragu', 'nathan', 22, 'male', 'ragu22@gmail.com', 'Ragu@22', 'Active', 'r.png'),
(26, 'Naga ', 'arjun', 22, 'male', 'naga22@gmail.com', 'Naga@22', 'Active', 'b.png'),
(27, 'Bala', 'sekar', 20, 'male', 'bala20@gmail.com', 'Bala@20', 'Deleted', 'b.png'),
(28, 'Krish', 'karthik', 20, 'Male', 'krish20@gmail.com', 'Krish@20', 'Deleted', 'k.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
