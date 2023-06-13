CREATE DATABASE  IF NOT EXISTS `final` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `final`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: final
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manager` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile_number` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `postal_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` VALUES (1,'Langsdon','Spino','lspino0@eventbrite.com','4832539613','Ocote Paulino',''),(2,'Hedvig','Diggin','hdiggin1@cbslocal.com','6933685954','Tiglauigan','7305'),(3,'Daune','Pawlicki','dpawlicki2@google.com.hk','7385539422','Fengshan',''),(4,'Carlin','Pedracci','cpedracci3@blogspot.com','3453980961','Aurora','7020'),(5,'Frasco','Wybron','fwybron4@umn.edu','7322682147','Neuville','T9M'),(6,'Kassi','Peart','kpeart5@diigo.com','2055353614','Liangshui',''),(7,'Huey','Kenrat','hkenrat6@va.gov','4431556224','Sumberejo',''),(8,'Beatrice','Ollivierre','bollivierre7@bbb.org','9122131538','Segezha','186424'),(9,'Dorothee','Jacob','djacob8@shutterfly.com','6468391444','Haozigang',''),(10,'Lilian','Simmonds','lsimmonds9@sbwire.com','4688219091','Saint Louis','63131'),(11,'Matty','Light','mlighta@discovery.com','3868671295','BaranÃ³w','96-314'),(12,'Louis','Peche','lpecheb@home.pl','6943122051','Sebulu',''),(13,'Ford','Kempster','fkempsterc@hc360.com','6933595475','Rego','4635-637'),(14,'Aldis','Kilfedder','akilfedderd@twitpic.com','7017540771','Huidong',''),(15,'Lora','Verlander','lverlandere@t.co','3525030690','GuayaramerÃ­n',''),(16,'Pattie','Kibard','pkibardf@ucoz.ru','4191018138','QuibdÃ³','270009'),(17,'Tessi','Prichard','tprichardg@gov.uk','5919325761','Cienfuegos',''),(18,'Marlo','Yusupov','myusupovh@cnbc.com','9553375877','Latowicz','05-334'),(19,'Julietta','Pellington','jpellingtoni@blog.com','9613931567','Vale de Figueira','5120-463'),(20,'Seana','Stygall','sstygallj@wunderground.com','3849175791','Phu Kradueng','42180'),(21,'dasdasd','adad','adasdada','sdasdad','asdasdad','asdasd');
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-13 18:01:16
