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
  `avaliacao_id` int NOT NULL AUTO_INCREMENT,
  `avaliacao_nota` int DEFAULT NULL,
  `avaliacao_data` date DEFAULT NULL,
  `avaliacao_descricao` varchar(500) DEFAULT NULL,
  `user_id_avaliado` int DEFAULT NULL,
  `user_id_avaliando` int DEFAULT NULL,
  PRIMARY KEY (`avaliacao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao`
--

LOCK TABLES `avaliacao` WRITE;
/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
INSERT INTO `avaliacao` VALUES (1,2,'2025-06-29',NULL,15,26);
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
  `servico_titulo` varchar(45) NOT NULL,
  `servico_descricao` varchar(250) DEFAULT NULL,
  `servico_valor` decimal(10,2) NOT NULL,
  `servico_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`servico_id`),
  KEY `user_id_contratante_idx` (`user_id_contratante`),
  KEY `user_id_contratado_idx` (`user_id_contratado`),
  KEY `local_id_idx` (`local_id`),
  KEY `tipoServico_id_idx` (`tipoServico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
INSERT INTO `servico` VALUES (1,22,23,NULL,3,'2025-06-22','2025-07-04','Faxina em apartamento valparaíso','Limpeza no meu apartamento <3',200.00,'Em atendimento'),(2,22,23,NULL,3,'2025-06-22','2025-07-04','Faxina na minha casa em Jacaraipe','Preciso de uma limpeza geral na minha casa',250.00,'Em atendimento'),(3,22,23,NULL,2,'2025-06-28','2025-07-04','Cuidar dos meus filhos','Preciso apenas que cuidem dos meus filhos durante uma tarde',150.00,'Em atendimento'),(4,22,23,NULL,7,'2025-06-28','2025-07-04','Cuidar do meu cachorro','Preciso de alguém pra cuidar do meu cachorro',100.00,'Em atendimento'),(5,16,NULL,NULL,1,'2025-06-29','2025-07-04','Corte de grama urgente','Preciso de ajuda para cortar a grama do meu quintal ainda hoje.',80.00,'Em aberto'),(6,17,15,NULL,1,'2025-06-29','2025-07-04','Manutenção do jardim','Alguém com experiência em podar plantas e cuidar de canteiros.',120.00,'Em atendimento'),(7,19,NULL,NULL,1,'2025-06-29','2025-07-04','Poda de árvores pequenas','Tenho algumas árvores que precisam ser podadas com segurança.',150.00,'Em aberto'),(8,21,NULL,NULL,1,'2025-06-29','2025-07-04','Capina e limpeza externa','Quero alguém para capinar e limpar a área externa da casa.',90.00,'Em aberto'),(9,22,23,NULL,1,'2025-06-29','2025-07-04','Flores e irrigação','Preciso de alguém para organizar minhas flores e montar um sistema de irrigação simples.',110.00,'Em atendimento'),(10,16,NULL,NULL,1,'2025-06-29','2025-07-04','Reforma de jardim','Quero mudar o visual do jardim. Preciso de ideias e execução.',200.00,'Em aberto'),(11,17,NULL,NULL,1,'2025-06-29','2025-07-04','Plantio de mudas','Comprei mudas novas e preciso de ajuda para plantar e adubar.',70.00,'Em aberto'),(12,19,NULL,NULL,1,'2025-06-29','2025-07-04','Jardim vertical','Preciso de alguém para montar um jardim vertical na varanda.',180.00,'Em aberto'),(13,21,NULL,NULL,1,'2025-06-29','2025-07-04','Limpeza do quintal','Meu quintal está com folhas e sujeira acumulada. Preciso de limpeza geral.',100.00,'Em aberto'),(14,22,NULL,NULL,1,'2025-06-29','2025-07-04','Ajuda semanal com jardinagem','Procuro alguém para cuidar do jardim uma vez por semana.',130.00,'Em aberto'),(15,16,NULL,NULL,2,'2025-06-29','2025-07-04','Babá meio período','Preciso de alguém para cuidar do meu filho das 13h às 17h.',200.00,'Em aberto'),(16,17,NULL,NULL,2,'2025-06-29','2025-07-04','Cuidar de bebê à noite','Procuro babá para me ajudar durante algumas noites por semana.',250.00,'Em aberto'),(17,19,NULL,NULL,2,'2025-06-29','2025-07-04','Levar e buscar na escola','Preciso de alguém responsável para levar e buscar meu filho.',180.00,'Em aberto'),(18,21,NULL,NULL,2,'2025-06-29','2025-07-04','Cuidar de criança especial','Meu filho tem necessidades especiais, procuro babá com experiência.',300.00,'Em aberto'),(19,22,NULL,NULL,2,'2025-06-29','2025-07-04','Fins de semana e feriados','Procuro babá disponível em horários alternativos.',220.00,'Em aberto'),(20,16,NULL,NULL,2,'2025-06-29','2025-07-04','Auxílio nas tarefas escolares','Quero alguém que cuide e ajude com as lições de casa.',190.00,'Em aberto'),(21,17,NULL,NULL,2,'2025-06-29','2025-07-04','Babá para dois irmãos','Tenho dois filhos pequenos e preciso de ajuda em tempo integral.',350.00,'Em aberto'),(22,19,NULL,NULL,2,'2025-06-29','2025-07-04','Cuidar durante eventos','Preciso de babá para ocasiões especiais e eventos.',170.00,'Em aberto'),(23,21,NULL,NULL,2,'2025-06-29','2025-07-04','Babá com habilidades recreativas','Quero alguém que brinque e ensine ao mesmo tempo.',210.00,'Em aberto'),(24,22,NULL,NULL,2,'2025-06-29','2025-07-04','Revezamento com mãe','Ajuda para alternar cuidados com o bebê durante o dia.',160.00,'Em aberto'),(25,16,NULL,NULL,3,'2025-06-29','2025-07-04','Faxina geral','Preciso de uma faxina completa no apartamento de 2 quartos.',180.00,'Em aberto'),(26,17,NULL,NULL,3,'2025-06-29','2025-07-04','Limpeza pós-obra','Acabei uma reforma e preciso de limpeza pesada.',300.00,'Em aberto'),(27,19,NULL,NULL,3,'2025-06-29','2025-07-04','Limpeza semanal','Procuro alguém para limpar minha casa toda semana.',200.00,'Em aberto'),(28,21,NULL,NULL,3,'2025-06-29','2025-07-04','Limpar vidros e janelas','Preciso de alguém para limpar todos os vidros da casa.',130.00,'Em aberto'),(29,22,NULL,NULL,3,'2025-06-29','2025-07-04','Limpeza de armários','Meus armários estão com mofo e precisam de limpeza profunda.',150.00,'Em aberto'),(30,16,NULL,NULL,3,'2025-06-29','2025-07-04','Organização de cômodos','Quero ajuda para organizar e limpar a despensa e o escritório.',190.00,'Em aberto'),(31,17,NULL,NULL,3,'2025-06-29','2025-07-04','Faxina rápida','Apenas uma limpeza básica na sala e banheiro.',100.00,'Em aberto'),(32,19,NULL,NULL,3,'2025-06-29','2025-07-04','Limpeza de piso encardido','Piso da cozinha precisa de limpeza especializada.',170.00,'Em aberto'),(33,21,NULL,NULL,3,'2025-06-29','2025-07-04','Limpeza com produtos próprios','Procuro alguém que traga os próprios produtos.',210.00,'Em aberto'),(34,22,NULL,NULL,3,'2025-06-29','2025-07-04','Limpeza com pets em casa','Tenho dois cães, então a pessoa precisa gostar de animais.',160.00,'Em aberto'),(35,16,NULL,NULL,4,'2025-06-29','2025-07-04','Cozinheira para almoço diário','Procuro alguém para preparar almoço de segunda a sexta.',250.00,'Em aberto'),(36,17,NULL,NULL,4,'2025-06-29','2025-07-04','Comida fitness','Quero ajuda para preparar marmitas saudáveis para a semana.',180.00,'Em aberto'),(37,19,NULL,NULL,4,'2025-06-29','2025-07-04','Cozinhar para idoso','Preciso de alguém para preparar refeições simples e saudáveis.',200.00,'Em aberto'),(38,21,NULL,NULL,4,'2025-06-29','2025-07-04','Eventos familiares','Preciso de uma cozinheira para um evento com 15 pessoas.',350.00,'Em aberto'),(39,22,NULL,NULL,4,'2025-06-29','2025-07-04','Comida vegetariana','Procuro alguém com experiência em comida vegetariana.',220.00,'Em aberto'),(40,16,NULL,NULL,4,'2025-06-29','2025-07-04','Café da manhã e almoço','Ajuda para preparar as refeições da manhã e do meio-dia.',270.00,'Em aberto'),(41,17,NULL,NULL,4,'2025-06-29','2025-07-04','Congelar marmitas','Quero alguém que cozinhe e congele marmitas para o mês.',320.00,'Em aberto'),(42,19,NULL,NULL,4,'2025-06-29','2025-07-04','Refeições infantis','Preciso de alguém que cozinhe comida leve para meus filhos.',210.00,'Em aberto'),(43,21,NULL,NULL,4,'2025-06-29','2025-07-04','Cozinheira experiente','Procuro cozinheira com bom tempero e organização.',290.00,'Em aberto'),(44,22,NULL,NULL,4,'2025-06-29','2025-07-04','Cozinhar aos domingos','Preciso de refeições especiais aos domingos.',230.00,'Em aberto'),(45,16,NULL,NULL,5,'2025-06-29','2025-07-04','Acompanhamento de idoso','Preciso de ajuda para cuidar do meu pai durante o dia.',300.00,'Em aberto'),(46,17,NULL,NULL,5,'2025-06-29','2025-07-04','Cuidados com medicação','Procuro cuidadora que administre remédios corretamente.',280.00,'Em aberto'),(47,19,NULL,NULL,5,'2025-06-29','2025-07-04','Companhia noturna','Preciso de companhia e cuidados durante a noite.',350.00,'Em aberto'),(48,21,NULL,NULL,5,'2025-06-29','2025-07-04','Higiene e alimentação','Ajuda com banho e alimentação do meu avô.',320.00,'Em aberto'),(49,22,NULL,NULL,5,'2025-06-29','2025-07-04','Cuidadora carinhosa','Alguém com paciência e bom humor para lidar com idosos.',270.00,'Em aberto'),(50,16,NULL,NULL,5,'2025-06-29','2025-07-04','Atividades cognitivas','Preciso de alguém que estimule o raciocínio da minha mãe.',230.00,'Em aberto'),(51,17,NULL,NULL,5,'2025-06-29','2025-07-04','Ajuda com locomoção','Minha tia precisa de ajuda para se locomover dentro de casa.',250.00,'Em aberto'),(52,19,NULL,NULL,5,'2025-06-29','2025-07-04','Cuidados paliativos','Preciso de alguém com experiência para cuidados delicados.',400.00,'Em aberto'),(53,21,NULL,NULL,5,'2025-06-29','2025-07-04','Visitas semanais','Quero alguém que visite minha avó duas vezes por semana.',180.00,'Em aberto'),(54,22,NULL,NULL,5,'2025-06-29','2025-07-04','Cuidadora por turnos','Turnos de 6 horas para acompanhar e cuidar do idoso.',260.00,'Em aberto'),(55,16,NULL,NULL,6,'2025-06-29','2025-07-04','Montagem de móveis','Comprei móveis novos e preciso que sejam montados.',150.00,'Em aberto'),(56,17,NULL,NULL,6,'2025-06-29','2025-07-04','Pequenos reparos','Ajuda com vazamentos e tomadas soltas.',180.00,'Em aberto'),(57,19,NULL,NULL,6,'2025-06-29','2025-07-04','Pintura de parede','Preciso pintar dois cômodos.',300.00,'Em aberto'),(58,21,NULL,NULL,6,'2025-06-29','2025-07-04','Instalar prateleiras','Ajuda para furar e instalar prateleiras na sala.',100.00,'Em aberto'),(59,22,NULL,NULL,6,'2025-06-29','2025-07-04','Conserto de porta','A porta do quarto está emperrando.',120.00,'Em aberto'),(60,16,NULL,NULL,6,'2025-06-29','2025-07-04','Desentupimento de pia','Ajuda com pia entupida na cozinha.',90.00,'Em aberto'),(61,17,NULL,NULL,6,'2025-06-29','2025-07-04','Troca de lâmpadas','Preciso de ajuda para trocar lâmpadas e revisar fiação.',130.00,'Em aberto'),(62,19,NULL,NULL,6,'2025-06-29','2025-07-04','Limpeza de caixa d\'água','Alguém com experiência em limpar caixas d\'água.',200.00,'Em aberto'),(63,21,NULL,NULL,6,'2025-06-29','2025-07-04','Fixar suportes na parede','Preciso instalar suportes de TV e quadros.',160.00,'Em aberto'),(64,22,NULL,NULL,6,'2025-06-29','2025-07-04','Serviços variados','Ajuda para diversos pequenos reparos em casa.',180.00,'Em aberto'),(65,16,NULL,NULL,7,'2025-06-29','2025-07-04','Passear com cachorro','Preciso de alguém para passear com meu cachorro 3x na semana.',90.00,'Em aberto'),(66,17,NULL,NULL,7,'2025-06-29','2025-07-04','Cuidar de gato no fim de semana','Vou viajar e preciso de cuidados para meu gato.',120.00,'Em aberto'),(67,19,NULL,NULL,7,'2025-06-29','2025-07-04','Banho e tosa em casa','Procuro profissional que venha em casa para tosa.',150.00,'Em aberto'),(68,21,NULL,NULL,7,'2025-06-29','2025-07-04','Hospedagem para cão','Vou viajar e preciso de quem cuide do meu cachorro por 5 dias.',300.00,'Em aberto'),(69,22,NULL,NULL,7,'2025-06-29','2025-07-04','Alimentar e brincar','Apenas vir em casa e alimentar meus dois pets.',80.00,'Em aberto'),(70,16,NULL,NULL,7,'2025-06-29','2025-07-04','Aplicar remédio','Meu gato precisa tomar um remédio e eu não consigo dar.',70.00,'Em aberto'),(71,17,NULL,NULL,7,'2025-06-29','2025-07-04','Pet sitter noturno','Preciso de companhia para meu cachorro à noite.',250.00,'Em aberto'),(72,19,NULL,NULL,7,'2025-06-29','2025-07-04','Cuidar de aves','Tenho calopsitas que precisam de atenção especial.',100.00,'Em aberto'),(73,21,NULL,NULL,7,'2025-06-29','2025-07-04','Ajuda com filhotes','Preciso de ajuda para cuidar de filhotes recém-nascidos.',200.00,'Em aberto'),(74,22,NULL,NULL,7,'2025-06-29','2025-07-04','Treinamento básico','Quero que alguém ensine comandos simples ao meu cachorro.',220.00,'Em aberto'),(75,19,NULL,NULL,8,'2025-06-29','2025-07-04','Tutoria de matemática','Preciso de alguém para ensinar minha filha matemática básica.',150.00,'Em aberto'),(76,21,NULL,NULL,8,'2025-06-29','2025-07-04','Reforço de português','Ajuda com gramática e ortografia para o 6º ano.',130.00,'Em aberto'),(77,22,NULL,NULL,8,'2025-06-29','2025-07-04','Preparação para ENEM','Procuro tutor para ajudar com simulados e revisão.',300.00,'Em aberto'),(78,16,NULL,NULL,8,'2025-06-29','2025-07-04','Ajuda com leitura','Meu filho tem dificuldade de leitura e precisa de apoio.',140.00,'Em aberto'),(79,17,NULL,NULL,8,'2025-06-29','2025-07-04','Revisão de redação','Quero ajuda com redações para concursos.',170.00,'Em aberto'),(80,19,NULL,NULL,8,'2025-06-29','2025-07-04','Aulas de ciências','Apoio escolar nas matérias de ciências e biologia.',180.00,'Em aberto'),(81,21,NULL,NULL,8,'2025-06-29','2025-07-04','Inglês básico','Quero que alguém ensine inglês básico para minha filha.',200.00,'Em aberto'),(82,22,NULL,NULL,8,'2025-06-29','2025-07-04','História e geografia','Ajuda com matérias de humanas para o ensino fundamental.',160.00,'Em atendimento'),(83,16,NULL,NULL,8,'2025-06-29','2025-07-04','Apoio em casa','Procuro um tutor que venha em casa duas vezes por semana.',190.00,'Em aberto'),(84,17,NULL,NULL,8,'2025-06-29','2025-07-04','Preparação para provas','Apoio intensivo antes das provas do trimestre.',220.00,'Em aberto'),(85,22,NULL,NULL,3,'2025-06-28','2025-06-30','Faxina do meu quintal','Quero uma limpeza completa no meu quintal.',50.00,'Em atendimento'),(86,22,NULL,NULL,2,'2025-06-29','2025-07-05','Babá para criança autista','Preciso de uma babá que saiba cuidar de uma criança com autismo durante as tardes da semana, pago semanalmente.',599.00,'Em atendimento'),(87,26,15,NULL,1,'2025-06-29','2025-06-30','AAAAAAAAAAAAA','AAAAAAAAAAAA',0.01,'Em atendimento'),(88,26,NULL,NULL,1,'2025-06-29','2025-08-29','AAAAAAAAAAAAA','aaaaaaaaaaaaaaaaaaa',0.01,NULL),(89,26,NULL,NULL,1,'2025-06-29','2025-06-30','AAAAAAAAAAAAA3','aaaaaaaaa',0.01,NULL),(90,26,NULL,NULL,1,'2025-06-29','2025-06-30','AAAAAAAAAAAAA','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',0.01,NULL),(91,26,NULL,NULL,1,'2025-06-29','2025-06-30','AAAAAAAAAAAAA','aaa',0.01,NULL),(92,26,NULL,NULL,1,'2025-06-29','2025-06-30','AAAAAAAAAAAAA','aaaaaa',0.01,'Em aberto');
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
  `usr_descricao` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`usr_id`),
  UNIQUE KEY `usr_cpf_UNIQUE` (`usr_cpf`),
  UNIQUE KEY `usr_email_UNIQUE` (`usr_email`),
  KEY `tipoServico_id_idx` (`tipoServico_id`),
  CONSTRAINT `tipoServico_id` FOREIGN KEY (`tipoServico_id`) REFERENCES `tiposervico` (`tipoServico_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (15,'Daniel Rodrigues Fonseca Sousa','00000000001',20,'Prestador','danielrodrigueslg6@gmail.com','$2y$10$ox9eG1ZCoRl3mTZLEdRunO1ZzFWwVp87dqZUM1aGnrX7UBFLGIA4q',NULL,NULL),(16,'Kauã Matheus dos Santos Costa','00000000002',19,'Contratante','kauamatheu407@gmail.com','$2y$10$Pot8JyotR2cMHiY8IniLVeQtCspWETbxY5Phw/zJupO2DFB.qFAX2',NULL,NULL),(17,'Thiago Oliveira','00000000003',52,'Contratante','teste@gmail.com','$2y$10$RGZIpeYEkyeYEtMN6PbpW.Gv7RbxBSVg1zIuhormh6LoYxETbYpbK',NULL,NULL),(18,'Daniel Rodrigues Junior','00000000004',52,'Prestador','teste123@gmail.com','$2y$10$pIskXKlNmqVsIHzNN0i7FebnEVw2mVrQcdaaztYYwXXNH7wYXWzK2',NULL,NULL),(19,'Matheus Rodrigues','00000000000',51,'Contratante','ovo@gmail.com','$2y$10$v9zkLbzOZv1h.HfPrulX7O8pLdLBzjAkYPA6UE.6lzTjMnCKRLRHS',NULL,NULL),(20,'Alberto Pereira','00000000098',51,'Prestador','a@a.a','$2y$10$WqK/EUBl1ILDE82X/CbiuOtt0GfgH8jxKNv4RJuqlwg5mwFlVPX7a',NULL,NULL),(21,'Bruno Giraldelli','00000000005',44,'Contratante','b@b.b','$2y$10$8Jf2F2vSr2rQxybK/4ttjOcJ2TEYJtYUjcpt27aN2OkhkvJXxBUd.',NULL,NULL),(22,'Carlos Henrique','12121212121',69,'Contratante','contratante@teste.com','$2y$10$g5fjvSsVkXVBLkMnckGmru4srwn8BLlgro9KEHfEvk1zlEMFvb9o.',NULL,'Sou um contratante teste'),(23,'Pablo Arnaldo','21212121212',69,'Prestador','prestador@teste.com','$2y$10$UacHMUWcdeheBhY8PbUalOTwrj.DKigFkjEhgH7AH9.QXjIV29OGe',NULL,'Sou um prestador teste, presto serviços de teste'),(24,'Thiffany Araujo','78965432100',34,'Prestador','teste123@teste.com','$2y$10$tPd3hWodw8jLjjAPdQmH9OeJEzhdOTQV8.vjNz7ilgkg7ia9X.ORy',NULL,NULL),(25,'Ricardo','78945187521',19,'Prestador','kaua@gmail.com','$2y$10$6sl5cFbg471kCTeqYU7KzObSRRyUiskX3fOu7UXC0oSHfY/opqC7e',NULL,NULL),(26,'Contratante','11111111112',20,'Contratante','danielrodrigueslg7@gmail.com','$2y$10$X1aJDftgyxG.AXzCFGO3U.JCO4QahkM1IE9botnQhoTVV7PLQR4QO',NULL,NULL);
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

-- Dump completed on 2025-06-29 18:39:55
