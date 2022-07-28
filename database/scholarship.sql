-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2022 at 10:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `u_name` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_name`, `password`) VALUES
('admin', 'adminPass');

-- --------------------------------------------------------

CREATE TABLE `application` (
  `app_id` varchar(10) NOT NULL,
  `c_code` varchar(10) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `aadhar` varchar(12) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `prev_year_perc` decimal(10,0) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `apfkcd` (`c_code`),
  CONSTRAINT `apfkcd` FOREIGN KEY (`c_code`) REFERENCES `college` (`c_code`) ON DELETE CASCADE,
  CONSTRAINT `apfkid` FOREIGN KEY (`app_id`) REFERENCES `student` (`app_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
CREATE TABLE `application_aastha_scholarship` (
  `app_id` varchar(10) NOT NULL,
  `c_code` varchar(10) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `aadhar` varchar(12) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `prev_year_perc` decimal(10,0) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ph_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `apfkcd` (`c_code`),
  CONSTRAINT `apfkcd4` FOREIGN KEY (`c_code`) REFERENCES `college` (`c_code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------

CREATE TABLE `application_janaki_bose_scholarship` (
  `app_id` varchar(10) NOT NULL,
  `c_code` varchar(10) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `aadhar` varchar(12) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `prev_year_perc` decimal(10,0) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ph_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `apfkcd` (`c_code`),
  CONSTRAINT `apfkcd2` FOREIGN KEY (`c_code`) REFERENCES `college` (`c_code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
CREATE TABLE `application_national_merit_scholarship` (
  `app_id` varchar(10) NOT NULL,
  `c_code` varchar(10) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `aadhar` varchar(12) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `prev_year_perc` decimal(10,0) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ph_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `apfkcd` (`c_code`),
  CONSTRAINT `apfkcd1` FOREIGN KEY (`c_code`) REFERENCES `college` (`c_code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
CREATE TABLE `application_ugc_science_scholarship` (
  `app_id` varchar(10) NOT NULL,
  `c_code` varchar(10) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `aadhar` varchar(12) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `prev_year_perc` decimal(10,0) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ph_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `apfkcd` (`c_code`),
  CONSTRAINT `apfkcd3` FOREIGN KEY (`c_code`) REFERENCES `college` (`c_code`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
CREATE TABLE `bank_detail` (
  `app_id` varchar(10) NOT NULL,
  `ifsc` varchar(15) DEFAULT NULL,
  `acc_no` varchar(16) DEFAULT NULL,
  `b_name` varchar(100) DEFAULT NULL,
  `ph_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`app_id`),
  KEY `bkfkid` (`app_id`),
  CONSTRAINT `bkfkid` FOREIGN KEY (`app_id`) REFERENCES `application` (`app_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
CREATE TABLE `college` (
  `c_code` varchar(10) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `c_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`c_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `college` VALUES ('bietdvg123','Bapuji Institute of Engineering and Technology','bietPass'),('jgidvg1234','Jain Group of Institute','jgiPass'),('sit022','Sohan Institue of Technology','sonyPass');

-- --------------------------------------------------------
CREATE TABLE `student` (
  `app_id` varchar(10) NOT NULL,
  `ph_no` char(10) DEFAULT NULL,
  `S_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
