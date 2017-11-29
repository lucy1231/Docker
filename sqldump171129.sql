-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: db_suj
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Current Database: `db_suj`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `db_suj` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_suj`;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `num` int(10) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(40) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL,
  `content` varchar(3000) DEFAULT NULL,
  `lookup` varchar(10) DEFAULT NULL,
  `date1` varchar(15) DEFAULT NULL,
  `date2` varchar(15) DEFAULT NULL,
  `modified_date1` varchar(15) DEFAULT NULL,
  `modified_date2` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'룻씨','글을 쓸 수 있어요','   이렇게요\r\n\r\n미트볼 미트볼',NULL,'2017-11-09','15:48:13','2017-11-09','16:06:44'),(2,'세미클론쓰면오류남','오류를 내보자',' ',NULL,'2017-11-14','09:46:00','2017-11-14','09:46:22'),(3,'aa','aa',' aa',NULL,'2017-11-29','11:39:37','2017-11-29','11:39:37');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ripple`
--

DROP TABLE IF EXISTS `ripple`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ripple` (
  `key_no` int(20) NOT NULL AUTO_INCREMENT,
  `num` int(10) DEFAULT NULL,
  `nickname` varchar(40) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`key_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ripple`
--

LOCK TABLES `ripple` WRITE;
/*!40000 ALTER TABLE `ripple` DISABLE KEYS */;
INSERT INTO `ripple` VALUES (3,1,'룻씨','헤헤헤','2017-11-09'),(4,1,'웅-탁','나는 웅탁','2017-11-09'),(5,1,'ABC','ABC','2017-11-09'),(6,1,'버섯소','안녕 얘들아 ㅎㅎ 룻씨도안녕','2017-11-23');
/*!40000 ALTER TABLE `ripple` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(10) DEFAULT NULL,
  `nickname` varchar(16) NOT NULL DEFAULT '',
  `pass_q` varchar(100) DEFAULT NULL,
  `pass_a` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`num`,`email`,`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'lucy@naver.com','1234','룻씨','당신의 가장 중요한것?','돈'),(2,'abc@abc.com','abc','ABC','abc','abc'),(3,'xkr@naver.com','1234','웅-탁','당신의 가장 소중한것?','홈페이지'),(4,'ttt@ttt.com','1234','세미클론쓰면오류남','문제','문제'),(5,'lucy','1234','lucy','1234','1234'),(6,'kimjohn@nate.com','john789','버섯소','버섯소<< 이게비밀번호입니다.','버섯소'),(7,'aa','aa','aa','aa','aa');
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

-- Dump completed on 2017-11-29 13:55:20
