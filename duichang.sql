-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: duichang
-- ------------------------------------------------------
-- Server version	5.5.20-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `box`
--

DROP TABLE IF EXISTS `box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `box` (
  `box_num` varchar(32) NOT NULL,
  `box_size` varchar(32) DEFAULT NULL,
  `box_weight` varchar(32) DEFAULT NULL,
  `box_other` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`box_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `box`
--

LOCK TABLES `box` WRITE;
/*!40000 ALTER TABLE `box` DISABLE KEYS */;
INSERT INTO `box` VALUES ('jw00022','25 X 25','450KG','大师傅');
/*!40000 ALTER TABLE `box` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business`
--

DROP TABLE IF EXISTS `business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `bu_num` varchar(64) NOT NULL,
  `bu_box_num` varchar(32) NOT NULL,
  `bu_ruku_time` varchar(32) DEFAULT NULL,
  `bu_ruku_customer` varchar(32) DEFAULT NULL,
  `bu_ruku_add` varchar(256) DEFAULT NULL,
  `bu_ruku_status` varchar(32) DEFAULT NULL,
  `bu_ruku_type` varchar(32) DEFAULT NULL,
  `bu_ruku_cost` float(32,2) DEFAULT NULL,
  `bu_jc_time` varchar(32) DEFAULT NULL,
  `bu_jc_customer` varchar(32) DEFAULT NULL,
  `bu_jc_add` varchar(256) DEFAULT NULL,
  `bu_jc_status` varchar(32) DEFAULT NULL,
  `bu_jc_type` varchar(32) DEFAULT NULL,
  `bu_jc_fixcost` float(32,2) DEFAULT NULL,
  `bu_jc_costrate` float(32,2) DEFAULT NULL,
  `bu_cc_time` varchar(32) DEFAULT NULL,
  `bu_cc_customer` varchar(32) DEFAULT NULL,
  `bu_cc_add` varchar(256) DEFAULT NULL,
  `bu_cc_status` varchar(32) DEFAULT NULL,
  `bu_cc_type` varchar(32) DEFAULT NULL,
  `bu_cc_fixcost` float(32,2) DEFAULT NULL,
  `bu_cc_costrate` float(32,2) DEFAULT NULL,
  `bu_ck_time` varchar(32) DEFAULT NULL,
  `bu_ck_customer` varchar(32) DEFAULT NULL,
  `bu_ck_add` varchar(256) DEFAULT NULL,
  `bu_ck_status` varchar(32) DEFAULT NULL,
  `bu_ck_type` varchar(32) DEFAULT NULL,
  `bu_ck_cost` float(32,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business`
--

LOCK TABLES `business` WRITE;
/*!40000 ALTER TABLE `business` DISABLE KEYS */;
INSERT INTO `business` VALUES (1,'160125023433','','','','','','',0.00,'16-01-25 02:46:09','徐兵','大放大','未进场','售出',1.10,21.00,'16-01-25 02:49:00','徐兵','','未出场','售出',0.00,0.00,'16-01-25 03:12:19','徐兵','是打发点','未出库','售出',23.00),(2,'SHTJ160125024335','jw00022','16-01-25 10:43:18','徐兵1','','','售出',101.00,'','','','','',0.00,0.00,'16-01-25 02:49:05','徐兵','的撒','未出场','售出',11.00,222.00,NULL,NULL,NULL,NULL,NULL,NULL),(3,'SHTJ160125024402','','','','','','',0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'SHTJ160125024419','','','','','','',0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'SHTJ160125024420','','','','','','',0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'SHTJ160125024421','','','','','','',0.00,'16-01-25 02:24:35','徐兵1','打发','正在进场','翻新',22.00,22.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'SHTJ160125024422','','','','','','',0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'SHTJ160125024816','','','','','','',0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'SHTJ160125025013','jw00022','16-01-25 10:49:56','徐兵','的说法是撒旦法','未入库','售出',20.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'SHTJ160125025148','jw00022','16-01-25 10:51:44','徐兵','','未入库','售出',0.00,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'SHTJ160125025250','jw00022','16-01-25 10:51:50','徐兵','到事发地是范德萨发的','未入库','售出',13.44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `customer_name` varchar(32) NOT NULL,
  `customer_phone` int(16) NOT NULL,
  `customer_email` varchar(32) DEFAULT NULL,
  `customer_company` varchar(256) DEFAULT NULL,
  `customer_address` varchar(256) DEFAULT NULL,
  `customer_other` varchar(256) DEFAULT NULL,
  `customer_type` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('徐兵',123,'123@13','','sdfsda','','委托方'),('徐兵1',123,'123@13','上海聚玩是大法师发发呆时','上海延长路多发发大厦是东方','是大法师','营运人');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fee` (
  `fee_num` int(16) NOT NULL,
  `fee_name` varchar(32) NOT NULL,
  `fee_ex` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`fee_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fee`
--

LOCK TABLES `fee` WRITE;
/*!40000 ALTER TABLE `fee` DISABLE KEYS */;
INSERT INTO `fee` VALUES (1,'上车费','上车');
/*!40000 ALTER TABLE `fee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(32) NOT NULL,
  `realname` varchar(16) NOT NULL,
  `phone` int(16) DEFAULT NULL,
  `dc_right` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','',NULL,''),(7,'xubing','1aabac6d068eef6a7bad3fdf50a05cc8','徐兵',123,'管理员'),(8,'xubing','e10adc3949ba59abbe56e057f20f883e','是的',123,'管理员'),(9,'ss','c20ad4d76fe97759aa27a0c99bff6710','是的',123,'管理员'),(10,'test','098f6bcd4621d373cade4e832627b4f6','',0,'管理员');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-25 15:20:03
