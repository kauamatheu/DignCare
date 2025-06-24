CREATE DATABASE  IF NOT EXISTS `db_digncare` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_digncare`;
-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: db_digncare
-- ------------------------------------------------------
-- Server version	8.0.42

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
-- Table structure for table `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avaliacao` (
  `avaliacao_id` int NOT NULL,
  `avaliacao_nota` int NOT NULL,
  `avaliacao_data` date NOT NULL,
  `avaliacao_descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`avaliacao_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao`
--

LOCK TABLES `avaliacao` WRITE;
/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localizacao`
--

DROP TABLE IF EXISTS `localizacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `localizacao` (
  `local_id` int NOT NULL,
  `local_cep` int NOT NULL,
  `local_numero` int NOT NULL,
  `local_referencia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`local_id`),
  UNIQUE KEY `local_id_UNIQUE` (`local_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localizacao`
--

LOCK TABLES `localizacao` WRITE;
/*!40000 ALTER TABLE `localizacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `localizacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servico` (
  `servico_id` int NOT NULL AUTO_INCREMENT,
  `user_id_contratante` int NOT NULL,
  `user_id_contratado` int DEFAULT NULL,
  `local_id` int DEFAULT NULL,
  `tipoServico_id` int NOT NULL,
  `servico_data_criado` date DEFAULT NULL,
  `servico_data_realizado` date DEFAULT NULL,
  `avaliacao_id` int DEFAULT NULL,
  `servico_titulo` varchar(45) NOT NULL,
  `servico_descricao` varchar(250) DEFAULT NULL,
  `servico_valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`servico_id`),
  KEY `user_id_contratante_idx` (`user_id_contratante`),
  KEY `user_id_contratado_idx` (`user_id_contratado`),
  KEY `local_id_idx` (`local_id`),
  KEY `tipoServico_id_idx` (`tipoServico_id`),
  KEY `avaliacao_id_idx` (`avaliacao_id`),
  CONSTRAINT `fk_avaliacao_id` FOREIGN KEY (`avaliacao_id`) REFERENCES `avaliacao` (`avaliacao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,22,NULL,NULL,3,'2025-06-22',NULL,NULL,'Faxina em apartamento valparaíso','Limpeza no meu apartamento <3',200.00),(2,22,NULL,NULL,3,'2025-06-22',NULL,NULL,'Faxina na minha casa em Jacaraipe','Preciso de uma limpeza geral na minha casa',250.00);
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposervico`
--

DROP TABLE IF EXISTS `tiposervico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiposervico` (
  `tipoServico_id` int NOT NULL,
  `tipoServico_nome` varchar(45) NOT NULL,
  `tipoServico_desc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`tipoServico_id`),
  UNIQUE KEY `tipoServico_id_UNIQUE` (`tipoServico_id`),
  UNIQUE KEY `tipoServico_nome_UNIQUE` (`tipoServico_nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposervico`
--

LOCK TABLES `tiposervico` WRITE;
/*!40000 ALTER TABLE `tiposervico` DISABLE KEYS */;
INSERT INTO `tiposervico` VALUES (1,'Jardinagem','Manutenção, cuidado e embelezamento de jardins e áreas verdes.'),(2,'Babá','Acompanhamento e cuidado de crianças em ambiente domiciliar.'),(3,'Profissional de Limpeza','Realização de tarefas domésticas como limpeza, organização e cuidados gerais do lar.'),(4,'Profissional de Cozinha','Preparação de refeições, organização e higienização da cozinha.'),(5,'Cuidador de Pessoa Idosa','Auxílio e atenção a idosos em suas atividades diárias.'),(6,'Serviço Geral','Atividades diversas de apoio em residências.'),(7,'Cuidador de Pet','Cuidado e atenção com animais de estimação, incluindo passeios e alimentação.'),(8,'Tutor Educacional','Acompanhamento escolar e reforço educacional personalizado.');
/*!40000 ALTER TABLE `tiposervico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `usr_id` int NOT NULL AUTO_INCREMENT,
  `usr_nome` varchar(50) NOT NULL,
  `usr_cpf` varchar(45) NOT NULL,
  `usr_idade` int DEFAULT NULL,
  `usr_tipo` varchar(45) DEFAULT NULL,
  `usr_email` varchar(45) NOT NULL,
  `usr_senha` varchar(100) NOT NULL,
  `tipoServico_id` int DEFAULT NULL,
  `avaliacao_id` int DEFAULT NULL,
  `usr_descricao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_cpf_UNIQUE` (`usr_cpf`),
  UNIQUE KEY `usr_email_UNIQUE` (`usr_email`),
  KEY `tipoServico_id_idx` (`tipoServico_id`),
  KEY `avaliacao_id_idx` (`avaliacao_id`),
  CONSTRAINT `avaliacao_id` FOREIGN KEY (`avaliacao_id`) REFERENCES `avaliacao` (`avaliacao_id`),
  CONSTRAINT `tipoServico_id` FOREIGN KEY (`tipoServico_id`) REFERENCES `tiposervico` (`tipoServico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (15,'Daniel Rodrigues Fonseca Sousa','00000000001',20,'Prestador','danielrodrigueslg6@gmail.com','$2y$10$ox9eG1ZCoRl3mTZLEdRunO1ZzFWwVp87dqZUM1aGnrX7UBFLGIA4q',NULL,NULL,NULL),(16,'Kauã Matheus dos Santos Costa','00000000002',19,'Contratante','kauamatheu407@gmail.com','$2y$10$Pot8JyotR2cMHiY8IniLVeQtCspWETbxY5Phw/zJupO2DFB.qFAX2',NULL,NULL,NULL),(17,'teste','00000000003',52,'Contratante','teste@gmail.com','$2y$10$RGZIpeYEkyeYEtMN6PbpW.Gv7RbxBSVg1zIuhormh6LoYxETbYpbK',NULL,NULL,NULL),(18,'junior','00000000004',52,'Prestador','teste123@gmail.com','$2y$10$pIskXKlNmqVsIHzNN0i7FebnEVw2mVrQcdaaztYYwXXNH7wYXWzK2',NULL,NULL,NULL),(19,'Cabeça de OVO','00000000000',51,'Contratante','ovo@gmail.com','$2y$10$v9zkLbzOZv1h.HfPrulX7O8pLdLBzjAkYPA6UE.6lzTjMnCKRLRHS',NULL,NULL,NULL),(20,'a','00000000098',51,'Prestador','a@a.a','$2y$10$WqK/EUBl1ILDE82X/CbiuOtt0GfgH8jxKNv4RJuqlwg5mwFlVPX7a',NULL,NULL,NULL),(21,'b','00000000005',44,'Contratante','b@b.b','$2y$10$8Jf2F2vSr2rQxybK/4ttjOcJ2TEYJtYUjcpt27aN2OkhkvJXxBUd.',NULL,NULL,NULL),(22,'contratante','12121212121',69,'Contratante','contratante@teste.com','$2y$10$g5fjvSsVkXVBLkMnckGmru4srwn8BLlgro9KEHfEvk1zlEMFvb9o.',NULL,NULL,NULL),(23,'prestador','21212121212',69,'Prestador','prestador@teste.com','$2y$10$UacHMUWcdeheBhY8PbUalOTwrj.DKigFkjEhgH7AH9.QXjIV29OGe',NULL,NULL,NULL),(24,'teste123','78965432100',34,'Prestador','teste123@teste.com','$2y$10$tPd3hWodw8jLjjAPdQmH9OeJEzhdOTQV8.vjNz7ilgkg7ia9X.ORy',NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-23 21:24:04
