-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: clothingstore
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblUser`
--

DROP TABLE IF EXISTS `tblUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblUser` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-04 14:23:59
-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: clothingstore
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `tblUser`
--

LOCK TABLES `tblUser` WRITE;
/*!40000 ALTER TABLE `tblUser` DISABLE KEYS */;
INSERT INTO `tblUser` VALUES (1,'Admin User','admin@clothingstore.com','240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9','Admin','Verified'),(2,'John Doe','john@example.com','b041c0aeb35bb0fa4aa668ca5a920b590196fdaf9a00eb852c9b7f4d123cc6d6','Customer','Verified'),(3,'User 3','user3@example.com','5906ac361a137e2d286465cd6588ebb5ac3f5ae955001100bc41577c3d751764','Customer','Verified'),(4,'User 4','user4@example.com','b97873a40f73abedd8d685a7cd5e5f85e4a9cfb83eac26886640a0813850122b','Customer','Verified'),(5,'User 5','user5@example.com','8b2c86ea9cf2ea4eb517fd1e06b74f399e7fec0fef92e3b482a6cf2e2b092023','Customer','Pending'),(6,'User 6','user6@example.com','598a1a400c1dfdf36974e69d7e1bc98593f2e15015eed8e9b7e47a83b31693d5','Customer','Pending'),(7,'User 7','user7@example.com','5860836e8f13fc9837539a597d4086bfc0299e54ad92148d54538b5c3feefb7c','Customer','Pending'),(8,'User 8','user8@example.com','57f3ebab63f156fd8f776ba645a55d96360a15eeffc8b0e4afe4c05fa88219aa','Customer','Verified'),(9,'User 9','user9@example.com','9323dd6786ebcbf3ac87357cc78ba1abfda6cf5e55cd01097b90d4a286cac90e','Customer','Pending'),(10,'User 10','user10@example.com','aa4a9ea03fcac15b5fc63c949ac34e7b0fd17906716ac3b8e58c599cdc5a52f0','Customer','Verified'),(11,'User 11','user11@example.com','53d453b0c08b6b38ae91515dc88d25fbecdd1d6001f022419629df844f8ba433','Customer','Pending'),(12,'User 12','user12@example.com','b3d17ebbe4f2b75d27b6309cfaae1487b667301a73951e7d523a039cd2dfe110','Customer','Pending'),(13,'User 13','user13@example.com','48caafb68583936afd0d78a7bfd7046d2492fad94f3c485915f74bb60128620d','Customer','Pending'),(14,'User 14','user14@example.com','c6863e1db9b396ed31a36988639513a1c73a065fab83681f4b77adb648fac3d6','Customer','Pending'),(15,'User 15','user15@example.com','c63c2d34ebe84032ad47b87af194fedd17dacf8222b2ea7f4ebfee3dd6db2dfb','Customer','Pending'),(16,'User 16','user16@example.com','17a3379984b560dc311bb921b7a46b28aa5cb495667382f887a44a7fdbca7a7a','Customer','Pending'),(17,'User 17','user17@example.com','69bfb918de05145fba9dcee9688dfb23f6115845885e48fa39945eebb99d8527','Customer','Verified'),(18,'User 18','user18@example.com','d2042d75a67922194c045da2600e1c92ff6d87e8fb6e0208606665f2d1dfa892','Customer','Pending'),(19,'User 19','user19@example.com','5790ac3d0b8ae8afc72c2c6fb97654f2b73651c328de0a3b74854ade562dd17a','Customer','Pending'),(20,'User 20','user20@example.com','7535d8f2d8c35d958995610f971287288ab5e8c82a3c4fdc2b6fb5d757a5b9f8','Customer','Verified'),(21,'User 21','user21@example.com','91a9ef3563010ea1af916083f9fb03a117d4d0d2a697f82368da1f737629f717','Customer','Verified'),(22,'User 22','user22@example.com','d23c1038532dc71d0a60a7fb3d330d7606b7520e9e5ee0ddcdb27ee1bd5bc0cd','Customer','Verified'),(23,'User 23','user23@example.com','8b807aa0505a00b3ef49e26a2ade8e31fcd6c700d1a3aeee971b49d73da8e8ff','Customer','Verified'),(24,'User 24','user24@example.com','fc8a9296208a0b281f84690423c5d77785e493f435e6292cc322840f543729d3','Customer','Pending'),(25,'User 25','user25@example.com','0b544d6d8da1d1af25318e97e0ac5f6bc70bba49919463dc0074ede01a49d381','Customer','Pending'),(26,'User 26','user26@example.com','869f2a98b0e3a6ea928ff0542330ea3c1e0ff8591801693350f1fc3f1e57e4c5','Customer','Verified'),(27,'User 27','user27@example.com','9c7568513b9c85e73f3650c8b00e3259501096ccee9d3dbdae6ff5e84aabe3af','Customer','Pending'),(28,'User 28','user28@example.com','6f5ea1c4acc7a563ea8cb3381a55f0183a2394d679ebb7db8312e047bbf87e0d','Customer','Pending'),(29,'User 29','user29@example.com','48a94846b2a7386432b90ad13bcf9c66f1efdd3a97e0e14968c262c412fe22c8','Customer','Pending'),(30,'User 30','user30@example.com','7c682dea8e934e04343374e3d25cd51edce9cbeb47f7034296052cb5cd6bed84','Customer','Verified');
/*!40000 ALTER TABLE `tblUser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-04 14:23:59
