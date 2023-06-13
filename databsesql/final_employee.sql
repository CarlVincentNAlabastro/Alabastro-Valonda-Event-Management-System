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
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` text,
  `last_name` text,
  `job_title` text,
  `email` text,
  `mobile_number` text,
  `address` text,
  `city` text,
  `postal_code` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'Carminaspogi','Landrick','Paralegal','clandrick0@webmd.com','915-768-0428','3467 Macpherson Pass','El Paso','79999'),(2,'Tracee','Jeanon','Payment Adjustment Coordinator','tjeanon1@posterous.com','124-285-0898','2 Karstens Junction','Ferreira do ZÃªzere','2240-340'),(4,'Florida','Leyden','Graphic Designer','fleyden3@spotify.com','336-508-2606','10196 Kingsford Junction','Lovisa','94800'),(5,'Frasco','Wybron','','fwybron4@umn.edu','7322682147','','Neuville','T9M'),(6,'Allyn','Ephgrave','Analyst Programmer','aephgrave5@fema.gov','666-642-2926','908 Oak Valley Terrace','Gunung Talang',''),(7,'Eb','Ferrolli','Developer I','eferrolli6@flickr.com','755-885-0837','0 Bultman Trail','Walakeri',''),(8,'Roseann','Paffley','Nuclear Power Engineer','rpaffley7@loc.gov','859-120-0319','0829 David Lane','Jimo',''),(9,'Ethel','Favell','Senior Sales Associate','efavell8@oakley.com','209-251-1508','583 Glendale Trail','Azua','10607'),(10,'Beth','Cristofvao','Analyst Programmer','bcristofvao9@freewebs.com','987-602-9471','72 Golf Circle','PoÃ§os de Caldas','37700-000'),(11,'Aldous','Tommasuzzi','Desktop Support Technician','atommasuzzia@furl.net','675-742-1638','074 Kinsman Circle','Aqqan',''),(12,'George','Maddocks','Engineer I','gmaddocksb@time.com','884-634-8994','529 Paget Center','Zhongzi',''),(13,'Wanids','Safont','Executive Secretary','wsafontc@baidu.com','733-199-1749','7951 Mifflin Court','Kladovo',''),(14,'Elbertina','Warsop','Quality Control Specialist','ewarsopd@bloglines.com','423-486-0153','74393 Fair Oaks Alley','Kopidlno','507 32'),(15,'Elwyn','Hagart','Programmer Analyst III','ehagarte@oracle.com','698-240-4466','25784 Duke Point','Mmathubudukwane',''),(16,'Delmer','Seide','Administrative Assistant I','dseidef@list-manage.com','972-503-3391','21328 Barby Pass','Castanheira','4820-781'),(17,'Ainslie','Lewtey','Payment Adjustment Coordinator','alewteyg@tiny.cc','880-418-2108','712 Saint Paul Pass','Tanjung',''),(18,'Jorie','Menendez','Statistician I','jmenendezh@biglobe.ne.jp','248-770-7581','07 Meadow Vale Place','Gornje Å½ivinice',''),(19,'Rosabella','Grundle','Senior Editor','rgrundlei@oaic.gov.au','665-921-5386','055 Schiller Court','Shiogama','987-0058'),(20,'Brian','Cella','Analog Circuit Design manager','bcellaj@lulu.com','942-170-0263','97688 Golden Leaf Avenue','Kalimati',''),(21,'Ardine','Tett','Sales Associate','atettk@behance.net','832-596-2258','80 Parkside Pass','LÃ¼xiang',''),(22,'Lenee','Gonin','Analog Circuit Design manager','lgoninl@simplemachines.org','424-245-8718','39 Harper Avenue','Medalem',''),(23,'Tod','Flannigan','Nurse Practicioner','tflanniganm@time.com','981-163-0176','72 Mariners Cove Junction','Saipan','96950'),(24,'Paquito','McKeran','Senior Editor','pmckerann@google.com.hk','420-971-0409','80 Texas Terrace','KorolÃ«v Stan',''),(25,'Alexander','de Clerq','VP Sales','adeclerqo@dot.gov','749-861-0185','366 Larry Parkway','Burgos','8424'),(26,'Elbert','Blainey','Computer Systems Analyst IV','eblaineyp@linkedin.com','610-892-2122','41319 4th Trail','Usolâ€™ye','618460'),(27,'Kessiah','Lafflin','Senior Financial Analyst','klafflinq@360.cn','178-990-9657','83 Erie Terrace','Affery',''),(28,'Mab','Coie','Nurse Practicioner','mcoier@sciencedaily.com','127-248-6235','6113 Bartillon Road','Pulopaya',''),(29,'Bucky','Boakes','Junior Executive','bboakess@china.com.cn','776-454-2749','28688 Melody Way','Loppi','12701'),(30,'Selia','Utting','Project Manager','suttingt@networkadvertising.org','426-356-7796','960 Fisk Avenue','Troyes','10081 CEDEX'),(31,'Marten','Barnewell','Nurse Practicioner','mbarnewellu@harvard.edu','428-288-8903','23 Brentwood Center','Lattes','34975 CEDEX'),(32,'Brenda','Marcam','Staff Scientist','bmarcamv@theglobeandmail.com','619-717-1522','198 Dayton Point','San Diego','92165'),(33,'Kerwinn','Twentyman','General Manager','ktwentymanw@slashdot.org','944-141-6106','33957 Cody Avenue','Allacapan','3523'),(34,'Samuel','Parris','Safety Technician III','sparrisx@howstuffworks.com','799-208-4957','29 Novick Parkway','Ratnapura','70000'),(35,'Tyson','Verbruggen','Geological Engineer','tverbruggeny@narod.ru','181-898-6520','89 Erie Court','Podgornaya','357815'),(36,'Joshua','Boycott','Desktop Support Technician','jboycottz@chron.com','945-201-9425','326 Golf View Point','Pires do Rio','75200-000'),(37,'Perceval','Laydon','Accountant III','playdon10@google.it','162-370-2657','7178 Kipling Street','Talpe','80615'),(38,'Harli','Mainds','Software Test Engineer II','hmainds11@google.com','704-173-6980','50679 Lindbergh Parkway','Beni Khiar',''),(39,'Rosanna','Inder','Food Chemist','rinder12@ucoz.com','595-828-2020','3 Erie Parkway','Malabago','2419'),(40,'Cassaundra','Michelin','Accountant IV','cmichelin13@apple.com','424-627-4192','20 Fieldstone Avenue','Rennes','35076 CEDEX 9'),(41,'Jessi','Codman','Automation Specialist I','jcodman14@youku.com','740-808-5462','19 David Circle','Portelinha','4950-850'),(42,'Thelma','Brissard','Senior Cost Accountant','tbrissard15@a8.net','336-523-5192','119 Jay Parkway','Liutao',''),(43,'Davy','Raimbauld','Research Assistant I','draimbauld16@skype.com','260-835-5000','46987 Butterfield Point','Guangping',''),(44,'Isak','Tripett','Quality Control Specialist','itripett17@ucoz.ru','144-441-7651','5 Brickson Park Way','Tuanfeng',''),(45,'Feodor','Laverack','Graphic Designer','flaverack18@blogger.com','918-522-9123','95 Cordelia Trail','Vnorovy','696 61'),(46,'Richart','Lawes','Assistant Professor','rlawes19@yolasite.com','285-542-1976','614 Hayes Parkway','Sancha',''),(47,'Jordon','Harbour','Biostatistician I','jharbour1a@tumblr.com','139-310-9288','4411 Towne Crossing','KoupÃ©la',''),(48,'Neill','Giroldi','Account Representative II','ngiroldi1b@scribd.com','147-678-0054','42721 Homewood Place','Krasnofarfornyy','174214'),(49,'Sallyanne','Crummy','Software Test Engineer I','scrummy1c@cam.ac.uk','621-880-1575','7088 Eastlawn Parkway','Al MaÅŸdÅ«r',''),(50,'Isadora','Biasioni','Administrative Assistant IV','ibiasioni1d@wiley.com','126-399-9396','7 Sheridan Alley','Pali',''),(51,'Basile','Gatch','Occupational Therapist','bgatch1e@reference.com','935-780-3913','48 Manitowish Point','Cisownica','43-450'),(52,'Abbey','Jupe','Analog Circuit Design manager','ajupe1f@constantcontact.com','528-302-7724','08 Vermont Lane','Huanuni',''),(53,'Mellisent','Jozwiak','Software Engineer I','mjozwiak1g@facebook.com','568-423-4552','088 Eagle Crest Place','Casalinho','2540-170'),(54,'Trixi','Knapman','Biostatistician II','tknapman1h@bing.com','160-532-5911','6150 Kim Terrace','Solok',''),(55,'Aldon','Wrout','Environmental Tech','awrout1i@baidu.com','393-259-4904','30 Chive Plaza','DiÃ³ni',''),(56,'Esmaria','Harradine','Pharmacist','eharradine1j@ftc.gov','732-826-7325','3486 Graedel Place','Itaberaba','46880-000'),(57,'Porty','Layfield','Associate Professor','playfield1k@youtube.com','312-322-2136','6250 Chinook Alley','Veruela','8509'),(58,'Berty','Skillicorn','Assistant Media Planner','bskillicorn1l@apache.org','228-708-8726','4 Hoffman Circle','Poretskoye','429020'),(59,'Kyle','Thebeaud','Geologist III','kthebeaud1m@sun.com','579-405-6500','1906 Thierer Crossing','Yujiaâ€™ao',''),(60,'Adriana','Macilhench','Registered Nurse','amacilhench1n@zimbio.com','903-945-8353','82149 Florence Terrace','Ketapang',''),(61,'Helenka','Belch','Technical Writer','hbelch1o@usda.gov','367-463-8812','85008 Prairie Rose Terrace','Babana',''),(62,'Carolynn','Crowest','Biostatistician IV','ccrowest1p@hhs.gov','683-970-1102','61 Autumn Leaf Circle','Niandui',''),(63,'Mallory','McCrorie','Health Coach IV','mmccrorie1q@google.ca','921-155-8038','669 Swallow Court','Lapa do Lobo','3525-606'),(64,'Jay','Walmsley','Electrical Engineer','jwalmsley1r@earthlink.net','824-337-1748','81449 Arkansas Plaza','Pouzauges','85708 CEDEX'),(65,'Arel','Lomax','Research Associate','alomax1s@illinois.edu','832-372-0688','97 Michigan Alley','ShkodÃ«r',''),(66,'Hinze','Fanning','Analyst Programmer','hfanning1t@princeton.edu','565-730-7083','46 6th Road','Anping',''),(67,'Brianne','Benettini','Financial Advisor','bbenettini1u@digg.com','578-817-3853','959 Moose Lane','Quá»‘c Oai',''),(68,'Rochell','Spaduzza','Administrative Officer','rspaduzza1v@aboutads.info','336-890-7262','766 Mockingbird Trail','Basel','4010'),(69,'Scotty','Lynde','Web Developer II','slynde1w@behance.net','173-193-4382','211 Pine View Trail','Kokaj',''),(70,'Ted','Edgeon','Tax Accountant','tedgeon1x@howstuffworks.com','698-404-9809','8006 Briar Crest Street','Carpentras','84204 CEDEX'),(71,'Geoffrey','Hoodlass','Analog Circuit Design manager','ghoodlass1y@dion.ne.jp','475-614-0108','60 Reindahl Hill','Huayacundo Arma',''),(72,'Karlis','O\'Crotty','Financial Advisor','kocrotty1z@techcrunch.com','129-490-5687','06 Hayes Alley','Maksatikha','171939'),(73,'Pippy','McDill','Senior Financial Analyst','pmcdill20@uol.com.br','582-732-8314','64095 Pond Street','Huangcun',''),(74,'Venus','Malafe','General Manager','vmalafe21@noaa.gov','704-995-8994','8 Columbus Road','Altos','64290-000'),(75,'Hermia','Dunsford','Registered Nurse','hdunsford22@pbs.org','332-346-3693','8991 Summer Ridge Center','Halle','06126'),(76,'Marvin','Suart','Recruiter','msuart23@discovery.com','525-312-1069','5 Main Street','Carhuamayo',''),(77,'franz ','pgoi','adas','2a@dasdasasm,dkasdlas','09998989898','dasdad','sjdhajs','dasdasd'),(78,'franz ','pgoi','adas','sdasdasa','dadada','dasdad','asdda','dasd'),(79,'adasd','adadasd','adada','dasdada','dadad','adad','adadasd','ada');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
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
