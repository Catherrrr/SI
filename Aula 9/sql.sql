-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: agronegocio
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `culturas`
--

DROP TABLE IF EXISTS `culturas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `culturas` (
  `idcultura` int(5) NOT NULL AUTO_INCREMENT,
  `cultura` varchar(60) NOT NULL,
  `variedade` varchar(60) NOT NULL,
  `ciclo` varchar(20) NOT NULL,
  `colheita` varchar(20) NOT NULL,
  PRIMARY KEY (`idcultura`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `culturas`
--

LOCK TABLES `culturas` WRITE;
/*!40000 ALTER TABLE `culturas` DISABLE KEYS */;
INSERT INTO `culturas` (`idcultura`, `cultura`, `variedade`, `ciclo`, `colheita`) VALUES (2,'','','',''),(6,'231','12222','23123','123'),(8,'23','23','23','23');
/*!40000 ALTER TABLE `culturas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipamentos`
--

DROP TABLE IF EXISTS `equipamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipamentos` (
  `idequipe` int(5) NOT NULL AUTO_INCREMENT,
  `equipamento` varchar(60) NOT NULL,
  `localizacao` varchar(50) NOT NULL,
  `custo` decimal(9,2) NOT NULL,
  `marcamodelo` varchar(20) NOT NULL,
  PRIMARY KEY (`idequipe`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamentos`
--

LOCK TABLES `equipamentos` WRITE;
/*!40000 ALTER TABLE `equipamentos` DISABLE KEYS */;
INSERT INTO `equipamentos` (`idequipe`, `equipamento`, `localizacao`, `custo`, `marcamodelo`) VALUES (2,'1123','2123',3123.00,'4123'),(3,'EDU','HESS',123.00,'MATHEUS'),(4,'','',0.00,''),(5,'','',0.00,'');
/*!40000 ALTER TABLE `equipamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propriedades`
--

DROP TABLE IF EXISTS `propriedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propriedades` (
  `idprop` int(5) NOT NULL AUTO_INCREMENT,
  `propriedade` varchar(60) NOT NULL,
  `proprietario` varchar(60) NOT NULL,
  `area` int(6) NOT NULL,
  `cultura` varchar(60) NOT NULL,
  PRIMARY KEY (`idprop`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propriedades`
--

LOCK TABLES `propriedades` WRITE;
/*!40000 ALTER TABLE `propriedades` DISABLE KEYS */;
INSERT INTO `propriedades` (`idprop`, `propriedade`, `proprietario`, `area`, `cultura`) VALUES (4,'','',0,''),(5,'123','123',123,'123');
/*!40000 ALTER TABLE `propriedades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-31 20:37:43
