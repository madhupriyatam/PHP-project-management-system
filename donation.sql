-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 03:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_login`
--

CREATE TABLE `bb_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `bb_roll` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bb_login`
--

INSERT INTO `bb_login` (`username`, `password`, `bb_roll`) VALUES
('bb1', 'bb1', 1),
('bb2', 'bb2', 2),
('bb3', 'bb3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bb_no` int(10) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` text NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bb_no`, `name`, `contact`, `address`, `city`, `zip`) VALUES
(1, 'BORIVALI BLOOD BANK', '8108857333', 'Ground floor,Vitthal apartments,Mandpeshwar road,Borivali(w)', 'Mumbai', 400103),
(2, 'PRABODHAN BLOOD BANK', '02228797586', 'Siddharth hospital building,Shastri nagar,Goregaon(w)', 'Mumbai', 400104),
(3, 'NAVJIVAN BLOOD BANK', '02228921727', 'Abilasha 11,Shop no. 1,Punjabi lane,Borivali', 'Mumbai', 400092);

-- --------------------------------------------------------

--
-- Table structure for table `don_b`
--

CREATE TABLE `don_b` (
  `name` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `donation_blood` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `don_b`
--

INSERT INTO `don_b` (`name`, `contact`, `pin_code`, `donation_blood`, `gender`) VALUES
('plogin_1', 2147483647, 500072, 'A-', 'Male'),
('plogin_1', 2147483647, 500072, 'A-', 'Male'),
('madhu', 2147483647, 400069, 'A+', 'female'),
('plogin_2', 2147483647, 400069, 'A+', 'Male'),
('plogin_3', 2147483647, 111001, 'B-', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `don_o`
--

CREATE TABLE `don_o` (
  `name` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `pin_Code` int(10) NOT NULL,
  `donation_organ` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `don_o`
--

INSERT INTO `don_o` (`name`, `contact`, `pin_Code`, `donation_organ`, `gender`) VALUES
('plogin_1', 2147483647, 500072, 'heart', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `eyebank`
--

CREATE TABLE `eyebank` (
  `eye_no` int(10) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` text NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `eyebank`
--

INSERT INTO `eyebank` (`eye_no`, `name`, `contact`, `address`, `city`, `zip`) VALUES
(1, 'COMFORT EYE CARE', '022228659797', 'Shop no.1,7,Sundaram Gitanjali nagar,sai baba nagar,Borivali', 'Mumbai', 400092),
(2, 'ARPAN EYE BANK', '02225130897', '2,Poonam,160 R B Mehta marg, Ghatkopar(e)', 'Mumbai', 400077),
(3, 'NAVNIT SHAH EYE BANK', '02223671011', 'Grant road Emporium,3/4 Mahavir building,Parel', 'Mumbai', 400007);

-- --------------------------------------------------------

--
-- Table structure for table `eye_login`
--

CREATE TABLE `eye_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `eye_roll` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eye_login`
--

INSERT INTO `eye_login` (`username`, `password`, `eye_roll`) VALUES
('eye1', 'eye1', 1),
('eye2', 'eye2', 2),
('eye3', 'eye3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hos_no` int(10) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` text NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hos_no`, `name`, `contact`, `address`, `city`, `zip`) VALUES
(1, 'S.L RAHEJA HOSPITAL', '02266529999', 'Police colony,Mahim', 'Mumbai', 400069),
(2, 'HOLY FAMILY', '02230610555', 'ST.Andrew\'s road,Bandra(w)', 'Mumbai', 400050),
(3, 'KARUNA', '02228934698', 'Jeevan Bima Nagar,near Bhagwati hospital,Borivali(w)', 'Mumbai', 500072);

-- --------------------------------------------------------

--
-- Table structure for table `hos_login`
--

CREATE TABLE `hos_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `hos_roll` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hos_login`
--

INSERT INTO `hos_login` (`username`, `password`, `hos_roll`) VALUES
('hos1', 'hos1', 1),
('hos2', 'hos2', 2),
('hos3', 'hos3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `en_roll` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `dob` date NOT NULL,
  `contact` varchar(12) NOT NULL,
  `e_id` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` text NOT NULL,
  `zipcode` int(6) NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`en_roll`, `fname`, `lname`, `dob`, `contact`, `e_id`, `address`, `city`, `zipcode`, `gender`) VALUES
(1, 'Renita ', 'Fernandes', '1997-10-20', '9619992093', 'renitafernandes2097@gmail.com', '220/43 ajinkya hsg, sector-2,charkop kandivali(w)', 'Mumbai', 500072, 'Female'),
(2, 'Elvita', 'Fernandes', '1997-07-27', '8779279352', 'elvitapple@gmail.com', 'B-302 Prathamesh Bldg, Vrishi Complex, I.C. Colony, Borivali', 'Mumbai', 400069, 'Female'),
(3, 'Ruana', 'Jadhav', '1997-05-15', '8291206180', 'jadhavruana357@gmail.com', 'C-605 Bhakti Complex, Kandarpada, Link Road, Dahisar West', 'Mumbai', 400068, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `p_login`
--

CREATE TABLE `p_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `en_no` int(10) NOT NULL,
  `credit` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_login`
--

INSERT INTO `p_login` (`username`, `password`, `en_no`, `credit`) VALUES
('plogin_1', 'plogin_1', 1, 10),
('plogin_2', 'plogin_2', 2, 10),
('plogin_3', 'plogin_3', 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `requirement` text NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`fname`, `lname`, `username`, `contact`, `requirement`, `bloodgrp`, `age`) VALUES
('Elvita', 'Fernandes', 'elvitapple', '8779279352', 'blood', 'A+', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`bb_no`);

--
-- Indexes for table `eyebank`
--
ALTER TABLE `eyebank`
  ADD PRIMARY KEY (`eye_no`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_no`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`en_roll`);

--
-- Indexes for table `p_login`
--
ALTER TABLE `p_login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `bb_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eyebank`
--
ALTER TABLE `eyebank`
  MODIFY `eye_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hos_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `en_roll` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
