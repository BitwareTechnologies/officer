-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 08:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `officer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contract`
--

CREATE TABLE IF NOT EXISTS `tbl_contract` (
  `contract_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_copy` varchar(255) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(2) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`contract_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contract`
--

INSERT INTO `tbl_contract` (`contract_id`, `office_id`, `user_id`, `contact_copy`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 0, 0, 'website.docx', 0, '2017-06-24 13:24:45', 0, '0000-00-00 00:00:00'),
(2, 0, 0, 'website1.docx', 0, '2017-06-24 13:25:46', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_features`
--

CREATE TABLE IF NOT EXISTS `tbl_features` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `feature_name` varchar(255) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(6) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nearby_services`
--

CREATE TABLE IF NOT EXISTS `tbl_nearby_services` (
  `nb_services_id` int(11) NOT NULL AUTO_INCREMENT,
  `nb_services_name` varchar(100) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(6) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`nb_services_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office`
--

CREATE TABLE IF NOT EXISTS `tbl_office` (
  `office_id` int(11) NOT NULL AUTO_INCREMENT,
  `building_name` varchar(255) NOT NULL,
  `office_address1` varchar(255) NOT NULL,
  `office_address2` varchar(255) NOT NULL,
  `office_area` varchar(100) NOT NULL,
  `office_city` varchar(100) NOT NULL,
  `office_state` varchar(100) NOT NULL,
  `office_country` varchar(100) NOT NULL,
  `office_price` decimal(7,2) NOT NULL,
  `office_surface_area` int(11) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(2) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office_features`
--

CREATE TABLE IF NOT EXISTS `tbl_office_features` (
  `office_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `features_id` int(11) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(2) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`office_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_id` smallint(2) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(2) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_role_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'Dhruvit', 'Patel', 'dhruvit@gmail.com', 'Dhruvit@123', 0, '2017-06-06 17:24:05', 0, '2017-06-06 17:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE IF NOT EXISTS `tbl_user_role` (
  `user_role_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `user_role_name` varchar(10) NOT NULL,
  `created_by` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_by` smallint(2) NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
