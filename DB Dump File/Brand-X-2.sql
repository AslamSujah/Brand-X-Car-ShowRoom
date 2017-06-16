-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2017 at 09:15 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brandx`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE IF NOT EXISTS `request_form` (
  `first_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `selected_model` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_form`
--

INSERT INTO `request_form` (`first_name`, `email`, `contact_no`, `selected_model`) VALUES
('Joseph Charles', 'Jspcharles@gmail.com', 770370315, 'Audi-A4'),
('Mariyadhas Janotheepan', 'Janotheepan143@gmail.com', 777820899, 'volksWagen-Tiguar'),
('Senthan Prasanth', 'Senthanprasanth007@gmail.com', 770721234, 'Audi-Rolls Royce-Swaptail'),
('Aslam Sujah', 'Ameersujah@gmail.com', 755662229, 'BMW-i8'),
('Dr.Samantha Kumara', 'Samanthakumara@gmail.com', 771234567, 'Toyota-Aqua');
