CREATE DATABASE  IF NOT EXISTS `scholarship_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `scholarship_system`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: scholarship_system
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `u_name` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','adminPass');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
INSERT INTO `application` VALUES ('1643877913','bietdvg123','Bussa Guru','123456789012','4bd19cs111',98,'Sanctioned'),('1643881998','bietdvg123','Dinjari','098765432134','4bd19ec001',99,'verified'),('1643885995','bietdvg123','Sohan','341215767451','4bd19cs101',97,'Sanctioned'),('1656445073','bietdvg123','Saraswat Majumder','548550008000','ASDAS',89,'Application Submitted'),('1656472388','bietdvg123','Saraswat Majumder','548550008000','ASDAS',89,'Application Submitted'),('1656477077','bietdvg123','Saraswat Tusher','548550008000','ASDAS',89,'Application Submitted'),('1656571627','bietdvg123','Surjyanee Halder','548550008000','ASDAS21',96,'Application Submitted');
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_aastha_scholarship`
--

DROP TABLE IF EXISTS `application_aastha_scholarship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_aastha_scholarship`
--

LOCK TABLES `application_aastha_scholarship` WRITE;
/*!40000 ALTER TABLE `application_aastha_scholarship` DISABLE KEYS */;
INSERT INTO `application_aastha_scholarship` VALUES ('1656533441','bietdvg123','Saraswat Tusher','548550008000','ASDAS',89,'Sanctioned','9082228609');
/*!40000 ALTER TABLE `application_aastha_scholarship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_janaki_bose_scholarship`
--

DROP TABLE IF EXISTS `application_janaki_bose_scholarship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_janaki_bose_scholarship`
--

LOCK TABLES `application_janaki_bose_scholarship` WRITE;
/*!40000 ALTER TABLE `application_janaki_bose_scholarship` DISABLE KEYS */;
INSERT INTO `application_janaki_bose_scholarship` VALUES ('1656578649','bietdvg123','Saraswat Tusher','548550008000','ASDAS',89,'Application Submitted','9082228609');
/*!40000 ALTER TABLE `application_janaki_bose_scholarship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_national_merit_scholarship`
--

DROP TABLE IF EXISTS `application_national_merit_scholarship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_national_merit_scholarship`
--

LOCK TABLES `application_national_merit_scholarship` WRITE;
/*!40000 ALTER TABLE `application_national_merit_scholarship` DISABLE KEYS */;
INSERT INTO `application_national_merit_scholarship` VALUES ('1656573612','bietdvg123','Surjyanee Halder','548550008000','ASDAS21',96,'verified','7432875290'),('1656573633','bietdvg123','Saraswat Tusher','548550008000','ASDAS',89,'Sanctioned','9082228609');
/*!40000 ALTER TABLE `application_national_merit_scholarship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_ugc_science_scholarship`
--

DROP TABLE IF EXISTS `application_ugc_science_scholarship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_ugc_science_scholarship`
--

LOCK TABLES `application_ugc_science_scholarship` WRITE;
/*!40000 ALTER TABLE `application_ugc_science_scholarship` DISABLE KEYS */;
INSERT INTO `application_ugc_science_scholarship` VALUES ('1656573637','bietdvg123','Saraswat Tusher','548550008000','ASDAS',89,'verified','9082228609');
/*!40000 ALTER TABLE `application_ugc_science_scholarship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_detail`
--

DROP TABLE IF EXISTS `bank_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_detail`
--

LOCK TABLES `bank_detail` WRITE;
/*!40000 ALTER TABLE `bank_detail` DISABLE KEYS */;
INSERT INTO `bank_detail` VALUES ('1643877913','BOB12345','ACC00021','Bank Of Barmuda',NULL),('1643881998','RAT001','ACCNO002','Bank of Palpatine',NULL),('1643885995','SBIN001','445656157','SBI',NULL),('1656445073','ICICI6000','12233232232323','BAnk bAroka',NULL),('1656472388','ICICI6000','12233232232323','BAnk bAroka',NULL),('1656477077','ICICI6000','12233232232323','BAnk bAroka','9082228609'),('1656571627','SBIN0005943','1234432156788765','State Bank of India','7432875290');
/*!40000 ALTER TABLE `bank_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `college` (
  `c_code` varchar(10) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `c_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`c_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `college`
--

LOCK TABLES `college` WRITE;
/*!40000 ALTER TABLE `college` DISABLE KEYS */;
INSERT INTO `college` VALUES ('bietdvg123','Bapuji Institute of Engineering and Technology','bietPass'),('jgidvg1234','Jain Group of Institute','jgiPass'),('sit022','Sohan Institue of Technology','sonyPass');
/*!40000 ALTER TABLE `college` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `app_id` varchar(10) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `ratings` int DEFAULT NULL,
  KEY `fbfkst` (`app_id`),
  CONSTRAINT `fbfkst` FOREIGN KEY (`app_id`) REFERENCES `student` (`app_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `app_id` varchar(10) NOT NULL,
  `ph_no` char(10) DEFAULT NULL,
  `S_password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES ('1643877913','9887624476','pAss123'),('1643881998','9026685598','LastPass'),('1643885995','9876543210','123Pass'),('1656445073','8291415270','27012701'),('1656472388','8291415270','27012701'),('1656477077','9082228609','27012701'),('1656571627','7432875290','27012701');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-30 15:27:34
