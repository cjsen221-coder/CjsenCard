-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 nov. 2025 à 11:00
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cjsencard`
--

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES
(1,'OCTOBRE ROSE','En ce mois d’Octobre Rose, Sen Carrefour Jeunesse réaffirme son engagement aux côtés des femmes, jeunes filles et mères dans la lutte contre le cancer du sein.\r\nNous rappelons l’importance de la prévention : se faire dépister régulièrement, consulter son gynécologue à tout âge, doit devenir un réflexe de santé essentiel. Trop souvent, le diagnostic est posé à un stade avancé, faute de suivi régulier. Il est temps d’ancrer dans nos habitudes la culture des visites médicales préventives, car prévenir, c’est sauver des vies.\r\nNous appelons également à faciliter l’accès aux soins pour toutes, et à accorder une attention particulière à la santé mentale, indissociable du bien-être global des femmes.\r\nLa prévention n’est pas une option, c’est une arme silencieuse qui sauve des vies.','blogs/1764316865_16.jpg',NULL,'2025-10-28 08:49:57','2025-11-28 07:01:05');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES
('cjsencard_cache_admin@cjsen.com|102.164.150.192','i:1;',1764861070),
('cjsencard_cache_admin@cjsen.com|102.164.150.192:timer','i:1764861070;',1764861070),
('cjsencard_cache_admin@cjsen.com|185.252.220.121','i:1;',1764672094),
('cjsencard_cache_admin@cjsen.com|185.252.220.121:timer','i:1764672094;',1764672094),
('cjsencard_cache_contact@cjsen.com|155.117.189.31','i:2;',1764598263),
('cjsencard_cache_contact@cjsen.com|155.117.189.31:timer','i:1764598263;',1764598263);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `serial_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `honorMember` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cards_slug_unique` (`slug`),
  UNIQUE KEY `cards_serial_number_unique` (`serial_number`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES
(2,'SEN-CJ-001','Fatimata TALL','Femme','2002-10-10','Sénégalaise','Fass / Colobane','Dakar','Dakar','fatimatatall48@gmail.com','77 045 78 17','77 045 78 17','Etudiante/Entrepreneuse','avatars/1755602513_fatimata-removebg-preview.png','fatimata-tall','Membre simple','2025-08-18 13:19:59','2025-08-19 09:21:53'),
(3,'SEN-CJ-002','Mouhamed Rassoul GUEYE','Homme','2000-09-15','Sénégalais','Sicap Liberté 4','Dakar','Dakar','gueyemouhamed948@gmail.com','78 195 89 92','78 195 89 92','Etudiant','avatars/1755602470_Rassoul_1.png','mouhamed-rassoul-gueye','Membre simple','2025-08-19 08:56:59','2025-08-19 09:21:10'),
(4,'SEN-CJ-003','Mamadou Mounirou TALL','Homme','2000-09-22','Sénégalais','Sicap Foire','Dakar','Dakar','alphamounir6@gmail.com','77 302 39 54','77 302 39 54','Président CJSEN','avatars/1755615255_mounirou.jpeg','mamadou-mounirou-tall','Membre simple','2025-08-19 12:45:00','2025-11-28 09:37:21'),
(5,'SEN-CJ-004','Mame Mbaye NIANG','Homme','1999-08-26','Sénégalais','Dieupeul Derklé','Dakar','Dakar','mamembayeniang16@gmail.com','78 268 09 79','78 268 09 79','C.C IPS','avatars/1755787693_Mame Mbaye OG.jpg','mame-mbaye-niang','Membre simple','2025-08-21 12:46:20','2025-08-21 12:48:13'),
(6,'SEN-CJ-005','Bassirou SOW','Homme','2001-03-10','Sénégalais','Keur Moussa Frontière','Kaolack','Kaolack','bassirousow7700@gmail.com','77 796 86 96','77 796 86 96','Etudiant','avatars/1756495018_bassirou_sow-removebb.png','bassirou-sow','Membre simple','2025-08-29 17:10:20','2025-08-29 17:16:58'),
(7,'SEN-CJ-006','Annie Yvonne BIAGUI','Femme','1996-12-09','Sénégalaise','Dieuppeul 4','Dakar','Dakar','annieyvonnebiagui@gmail.com','78 380 39 30','78 380 39 30','Cheffe de Projet','avatars/1756494918_Yvonne-removebg.png','annie-yvonne-biagui-68b1fc46aafcb','Membre simple','2025-08-29 17:15:18','2025-08-29 17:15:18'),
(8,'SEN-CJ-007','Bassirou TALL','Homme','2007-10-10','Sénégalais','Keur Moussa Frontière','Kaolack','Kaolack','tallbachir88@gmail.com','77 249 97 68','77 249 97 68','Etudiant','avatars/1757712731_bassirou tall n.jpg','bassirou-tall','Membre simple','2025-09-12 19:30:54','2025-09-12 19:32:11'),
(9,'SEN-CJ-008','Ababacar BA','Homme','1991-09-02','Sénégalais','Thiaroye Azur sepco 1','Dakar','Pikine','abubacrsadikh@gmail.com','77 796 15 53','77 796 15 53','Secrétaire Général','avatars/1758242176_ABABACAR.jpg','ababacar-ba-68cca580150fd','Membre simple','2025-09-18 22:36:16','2025-09-18 22:36:16'),
(10,'SEN-CJ-009','Ndèye Fatim SECK','Femme','1988-02-02','Sénégalaise','Zac Mbao','Dakar','Dakar','Ndeyefatimseck@gmail.com','77 278 75 96','77 278 75 96','Coordonnatrice Cellule Communication','avatars/1758242503_FATIM-removebg-preview (1).png','ndeye-fatim-seck-68cca6c79932e','Membre simple','2025-09-18 22:41:43','2025-09-18 22:41:43'),
(11,'SEN-CJ-010','Mariama GAYE','Femme','2003-03-24','Sénégalaise','Guediawaye','Dakar','Dakar','mariamagayemaya@gmail.com','77 875 29 36','77 875 29 36','Etudiante','avatars/1758754032_mariama gaye.jpg','mariama-gaye','Membre simple','2025-09-24 20:45:20','2025-09-24 20:47:12'),
(12,'SEN-CJ-011','Daouda CISSE','Homme','1996-04-06','Sénégalais','Fann','Dakar','Dakar','cissedaouda197@gmail.com','78 315 31 17','78 315 31 17','Commerçant','avatars/1759445012_daoudacisse.jpg','daouda-cisse','Membre simple','2025-10-02 20:26:23','2025-10-06 12:31:46'),
(13,'SEN-CJ-012','Mariane D.F.F  TALL','Femme',NULL,'Sénégalaise','Saint- Louis',NULL,NULL,'rianema94@gmail.com','775885490','775885490','Trésorière et porte-parole','avatars/1759444989_mariane.jpg','mariane-dff-tall','Membre simple','2025-10-02 20:33:36','2025-10-13 17:41:21'),
(14,'SEN-CJ-013','Dialika DIALLO','Femme','2004-06-18','Sénégalaise','Bene barack yeumbeul nord',NULL,NULL,'likadiallo967@gmail.com','763340577','763340577','Eleve','avatars/1759445361_lickadiallo.jpg','dialika-diallo','Membre simple','2025-10-02 20:49:21','2025-10-13 18:13:19'),
(15,'SEN-CJ-014','Aïcha DIAGNE Mme TOP','Femme',NULL,'Sénégalaise','Sherbrooke','QC','Canada','aichadiagne9211@gmail.com','819 919 4377','819 919 4377','Etudiante / Membre CGPP','avatars/1760077290_WhatsApp Image 2025-08-28 à 18.33.11_de87ee27.jpg','aicha-diagne-mme-top-68e8a5ea2e9dd','Membre simple','2025-10-10 04:21:30','2025-10-10 04:21:30'),
(16,'SEN-CJ-015','Ndeye Khady BA','Femme','1999-02-01','Sénégalaise','Centenaire','Dakar','DAKAR','khadyndeye053@gmail.com','77 838 56 12','77 838 56 12','Membre Cellule Suivis et Evaluation','avatars/1760129724_ND KH_.jpg','ndeye-khady-ba','Membre simple','2025-10-10 04:28:00','2025-10-10 18:55:24'),
(17,'SEN-CJ-016','Mariama KOUNDOUL','Femme','1999-09-06','Sénégalaise','Ouest Foire','Dakar','Dakar','mcoun38@gmail.com','78 606 44 78','78 606 44 78','Membre Cellule Suivis et Evaluation','avatars/1760384045_Mariama koundoul.jpg','mariama-koundoul-sen-cj-016','Membre simple','2025-10-13 17:34:05','2025-10-13 17:34:05'),
(18,'SEN-CJ-017','Arénesse Geneviève MENDY','Femme','2001-06-21','Sénégalaise','Guédiawaye Cité COMIKO 2','Dakar','Guédiawaye','arenessegenevieve.mendy@unchk.edu.sn','77 833 52 06','77 833 52 06','Membre Comité Projet','avatars/1760384316_Genevieve 1.jpg','arenesse-genevieve-mendy','Membre simple','2025-10-13 17:38:36','2025-10-13 17:39:48'),
(19,'SEN-CJ-018','Dieynaba NDIAYE','Femme','2003-01-02','Sénégalaise','Hlm ben talli','Dakar','Dakar','ndiayedieynaba318@gmail.com','78 522 58 12','78 522 58 12','Etudiante','avatars/1760563831_Dieynaba O.jpg','dieynaba-ndiaye-sen-cj-018','Membre simple','2025-10-15 19:30:31','2025-10-15 19:30:31'),
(20,'SEN-CJ-019','Vatre FALL','Homme','1990-03-04','Sénégalais','Yoff / Rue Diaraf Thlemo Diop Gueye','Dakar','Dakar','vatrefall90@gmail.com','78 681 79 83','78 681 79 83','Caissier / Senseï Karaté','avatars/1760564009_VATRE O.jpg','vatre-fall','Membre simple','2025-10-15 19:33:29','2025-10-15 20:37:35'),
(21,'SEN-CJ-020','Yaye Adama CISSE','Femme','2004-11-19','Sénégalaise','Golf Sud Villa N 1C','Dakar','Dakar','cisseadama061@gmail.com','77 708 39 34','77 708 39 34','Adjointe Cellule Suivi et Evaluation','avatars/1760564272_YAYE ADAMA.jpg','yaye-adama-cisse-sen-cj-020','Membre simple','2025-10-15 19:37:52','2025-10-15 19:37:52'),
(22,'SEN-CJ-021','Mame Diarra B. CISSE','Femme','2003-01-01','Sénégalaise','Passy','Fatick','Fatick','boussocisse273@gmail.com','77 918 90 72','77 918 90 72','Etudiante','avatars/1760564796_MAME BOUSSO O.jpg','mame-diarra-b-cisse','Membre simple','2025-10-15 19:46:36','2025-10-15 19:47:12'),
(23,'SEN-CJ-022','Omar NDOUR','Homme','1986-05-31','Sénégalais','Golf Sud','Dakar','Dakar','billomar31@gmail.com','77 424 41 02','77 424 41 02','Responsable Commercial','avatars/1760569558_oumar.jpg','omar-ndour-sen-cj-022','Membre simple','2025-10-15 21:05:58','2025-10-15 21:05:58'),
(24,'SEN-CJ-023','Oumoul Khayri KEITA','Femme','2011-09-11','Sénégalaise','Mbour','THIES','Mbour','oumoulkhayri4@gamil.com','77 289 30 36','77 289 30 36','Elève','avatars/1760571530_OUMOU KHAYRI O.jpg','oumoul-khayri-keita-sen-cj-023','Membre simple','2025-10-15 21:38:50','2025-10-15 21:38:50'),
(25,'SEN-CJ-024','Arame THIANE','Femme','1999-01-09','Sénégalaise','Parcelles Assainies - Soprim','Dakar','Dakar','thianearame99@gmail.com','78 500 54 05','78 500 54 05','2ème Adj. Secrétaire Général','avatars/1760642250_ARAME o.jpg','arame-thiane','Membre simple','2025-10-16 17:17:30','2025-10-16 17:18:01'),
(26,'SEN-CJ-025','Bassirou NIANG','Homme','2004-02-03','Sénégalais','Ngor','Dakar','Dakar','niangbassirou009@gmail.com','77 502 94 86','77 502 94 86','Etudiant','avatars/1760959941_BASS NIANG à.jpg','bassirou-niang','Membre simple','2025-10-20 09:32:21','2025-10-20 09:32:47'),
(28,'SEN-CJ-027','Bara NDIAYE','Homme','2004-12-09','Sénégalais','Diamaguene','Saint- Louis','Dakar','barandiaye79@icloud.com','77 392 14 03','77 392 14 03','Etudiant','avatars/1764064178_BARA NDIAYE.jpg','bara-ndiaye','Membre simple','2025-11-25 07:34:22','2025-11-25 08:49:38'),
(29,'SEN-CJ-028','Idrissa NDIAYE','Homme','2008-09-04','Sénégalais','Thiaroye','Dakar','Dakar','idy5@gmail.com','78 890 92 86','78 890 92 86','Elève','avatars/1764064280_idrissa ndiayen.jpg','idrissa-ndiaye','Membre simple','2025-11-25 08:23:03','2025-11-25 08:51:20'),
(30,'SEN-CJ-029','Ndeye Diabou KEITA','Femme','1999-10-02','Sénégalaise','Mbour, 11 novembre','Thiès','Mbour','Keitandeyediabou@gmail.com','77 116 74 89','77 116 74 89','Elève','avatars/1764071159_NDEYE_DIABOU_K.jpg','ndeye-diabou-keita','Membre simple','2025-11-25 10:43:16','2025-11-25 10:45:59'),
(31,'SEN-CJ-030','Bara SALL','Homme','2006-12-21','Sénégalais','Thiaroye','Dakar','Dakar','juniorsall2112@gmail.com','76 024 81 02','76 024 81 02','Elève','avatars/1764452890_junior.jpg','bara-sall','Membre simple','2025-11-25 10:57:14','2025-11-29 20:48:10'),
(32,'SEN-CJ-031','Ndeye Marième TALL','Femme','2006-08-22','Sénégalaise','Thiaroye','Dakar','Dakar','ndeyemareime22@gmai.com','76 947 60 73','76 947 60 73','Elève','avatars/1764071999_Ndeye marieme.jpg','ndeye-marieme-tall-sen-cj-031','Membre simple','2025-11-25 10:59:59','2025-11-25 10:59:59'),
(33,'SEN-CJ-032','Mbaye BA','Homme','2000-12-18','Sénégalais','Pikine','Dakar','Dakar','thiawlayeba193@gmail.com','78 525 31 58','78 525 31 58','Elève','avatars/1764078281_Mbaye BA.jpg','mbaye-ba','Membre simple','2025-11-25 12:44:41','2025-11-25 12:48:20'),
(34,'SEN-CJ-033','Ibrahima SY','Homme','2006-02-12','Sénégalais','Fann','Dakar','Dakar','ibrahima83.sy@ucad.edu.sn','77 417 31 46','77 417 31 46','Etudiant','avatars/1764098542_Ibrahima SY.jpg','ibrahima-sy','Membre simple','2025-11-25 18:20:19','2025-11-25 18:22:22'),
(35,'SEN-CJ-034','Alimatou Sadiya NDIAYE','Femme','2000-09-08','Sénégalaise','RUfisque','Dakar','Dakar','AlimatouSadiyandiaye84@gmail.com','77 259 54 14','77 259 54 14','Etudiante','avatars/1764099877_sadiya.jpg','alimatou-sadiya-ndiaye','Membre simple','2025-11-25 18:41:27','2025-11-25 18:45:53'),
(36,'SEN-CJ-035','Raymond Thiathie TINE','Homme','1997-05-13','Sénégalais','Mbao Ville neuve','Dakar','Dakar','raymondthiathietine@gmail.com','78 528 69 12','78 528 69 12','Délégué médical et maître de cérémonie','avatars/1764264039_Raymond.jpg','raymond-thiathie-tine','Membre simple','2025-11-27 16:20:39','2025-11-29 10:12:58'),
(37,'SEN-CJ-036','Baila DIENG','Homme','1997-04-03','Sénégalais','Yeumbeul Ben Baraque','Dakar','Dakar','papadieng483@gmail.com','76 566 52 85','76 566 52 85','Soudeur Métallique','avatars/1764265525_bara dieng.jpg','baila-dieng-sen-cj-036','Membre simple','2025-11-27 16:45:25','2025-11-27 16:45:25'),
(38,'SEN-CJ-037','Marie Sarr TINE','Femme','2002-10-17','Sénégalaise','Jet d\'Eau','Dakar','Dakar','mariesarrtine@gmail.com','77 109 83 96','77 109 83 96','Adjointe Coord. C.I.P.S','avatars/1764266063_maries-r.png','marie-sarr-tine','Membre simple','2025-11-27 16:54:23','2025-11-27 16:54:35'),
(39,'SEN-CJ-038','Ablaye DIOP','Homme','2002-06-10','Sénégalais','Thiaroye Gare','Dakar','Dakar','layemysterio@gmail.com','76 867 60 74','76 867 60 74','Etudiant','avatars/1764403906_Ablaye diop.jpg','ablaye-diop-sen-cj-038','Membre simple','2025-11-29 07:11:46','2025-11-29 07:11:46'),
(40,'SEN-CJ-039','Aminata DIOP','Femme','2000-05-16','Sénégalaise','Thiaroye Gare','Dakar','Dakar','minadiop51@gmail.com','78 570 32 46','78 570 32 46','Etudiante','avatars/1764404045_amainata diop.jpg','aminata-diop','Membre simple','2025-11-29 07:14:05','2025-11-29 09:23:57'),
(41,'SEN-CJ-040','Thiébo NDIAYE','Homme','1992-06-05','Sénégalais','Keur Moussa Frontière','Kaolack','Kaolack','falllampmagal@gmail.com','78 883 86 69','77 945 28 83','Gendarme','avatars/1764412402_Thiebo.jpg','thiebo-ndiaye-sen-cj-040','Membre simple','2025-11-29 09:33:22','2025-11-29 09:33:22'),
(42,'SEN-CJ-041','Aida NDIAYE SY','Femme','2002-03-29','Sénégalaise','Diamaguene Sicap Mbao','Dakar','Dakar','aidandiayesy37@gmail.com','78 918 96 35','78 918 96 35','Etudiante','avatars/1764429372_aida ndiaye.jpg','aida-ndiaye-sy-sen-cj-041','Membre simple','2025-11-29 14:16:12','2025-11-29 14:16:12'),
(43,'SEN-CJ-042','Aminata TALL','Femme','1991-01-27','Sénégalaise','Thiaroye','Dakar','Dakar','fatousow1974@gmail.com','77 649 88 61','77 649 88 61','Elève','avatars/1764445916_aminata tall.jpg','aminata-tall','Membre simple','2025-11-29 14:51:32','2025-11-29 18:51:56'),
(44,'SEN-CJ-043','Daddé DIALLO','Femme','2002-01-21','Sénégalaise','Ndiapto','Kaolack','Kaolack','daddediallo33@gmail.com','77 710 40 25','77 710 40 25','Etudiante','avatars/1764431619_daddé.jpg','dadde-diallo-sen-cj-043','Membre simple','2025-11-29 14:53:39','2025-11-29 14:53:39'),
(45,'SEN-CJ-044','Fatoumata Mamadou BOUSSO','Femme','1999-05-22','Sénégalaise','Keur Massar Boune','Dakar','Dakar','boussofatoumatamamadou@gmail.com','78 365 83 81','78 365 83 81','Etudiante','avatars/1764446791_fatoumata.jpg','fatoumata-mamadou-bousso','Membre simple','2025-11-29 19:06:31','2025-11-29 19:12:59'),
(46,'SEN-CJ-045','Diatou DIA','Femme','1998-10-02','Sénégalaise','Gueul Tapé','Dakar','Dakar','diatoudia98@gmail.com','76 958 99 79','77 980 90 17','Etudiante','avatars/1764449143_diatou.jpg','diatou-dia-sen-cj-045','Membre simple','2025-11-29 19:45:43','2025-11-29 19:45:43'),
(47,'SEN-CJ-046','Pascal MENDY','Homme','2003-12-17','Sénégalais','Thiaroye','Dakar','Dakar','paulmendy510@gmail.com','78 322 35 36','78 322 35 36','Etudiant','avatars/1764453043_pascal.jpg','pascal-mendy-sen-cj-046','Membre simple','2025-11-29 20:50:43','2025-11-29 20:50:43'),
(48,'SEN-CJ-047','Athia DIOP','Femme','2006-12-04','Sénégalaise','Yeumbeul','Dakar','Dakar','athia7919@gmail.com','78 913 73 84','78 913 73 84','Etudiante','avatars/1764453151_athia.jpg','athia-diop-sen-cj-047','Membre simple','2025-11-29 20:52:31','2025-11-29 20:52:31'),
(49,'SEN-CJ-048','Abdou MBOW','Homme','2002-12-25','Sénégalais','Keur Diébel Sène','Fatick','Fatick','mbowa696@gmail.com','77 073 33 54','77 073 33 54','Etudiant','avatars/1764610259_abdou.jpg','abdou-mbow-sen-cj-048','Membre simple','2025-12-01 16:30:59','2025-12-01 16:30:59'),
(50,'SEN-CJ-049','Ousmane Andji BA','Homme','2001-01-01','Sénégalais','Grand Mbour 2','Thiès','Mbour','ousmaneandjiba@gmail.com','76 300 15 50','76 300 15 50','Etudiant','avatars/1764861312_Ousmane.jpg','ousmane-andji-ba-sen-cj-049','Membre simple','2025-12-04 14:15:12','2025-12-04 14:15:12'),
(51,'SEN-CJ-050','Kadia Abdoulaye BA','Femme','2001-09-19','Sénégalaise','Fass','Dakar','Dakar','Kadiaabdoulayeba@gmail.com','78 151 19 33','78 151 19 33','Etudiante','avatars/1764861825_Kadia.jpg','kadia-abdoulaye-ba-sen-cj-050','Membre simple','2025-12-04 14:23:45','2025-12-04 14:23:45'),
(52,'SEN-CJ-051','Oulimata DIALLO','Femme','2001-12-31','Sénégalaise','Fass','Dakar','Dakar','diallooulimata433@gmail.com','78 015 76 12','78 015 76 12','Etudiante','avatars/1764864399_Oulimata.jpg','oulimata-diallo-sen-cj-051','Membre simple','2025-12-04 15:06:39','2025-12-04 15:06:39'),
(53,'SEN-CJ-052','Elhadji KEBE','Homme','1999-06-20','Sénégalais','Afia Thiamène','Kaolack','Nioro du Rip','elhadjikebe007@gmail.com','78 126 51 48','78 126 51 48','Etudiant','avatars/1764871416_elage kebe.jpg','elhadji-kebe-sen-cj-052','Membre simple','2025-12-04 17:03:36','2025-12-04 17:03:36'),
(54,'SEN-CJ-053','Aminata BA','Femme','2000-01-04','Sénégalaise','Fass','Dakar','Dakar','baminata752@gmail.com','77 169 82 71','77 169 82 71','Etudiante','avatars/1765052650_Aminata.jpg','aminata-ba','Membre simple','2025-12-06 19:22:56','2025-12-06 19:24:10'),
(56,'SEN-CJ-055','Fatima BA','Femme','1995-11-28','Sénégalaise','Golf Nord Cité SHS','Dakar','Dakar','fatima2895@gmail.com','77 120 14 17','77 120 14 17','Cheffe Pâtissière','avatars/1765116606_fatima.jpg','fatima-ba-sen-cj-055','Membre simple','2025-12-07 13:10:06','2025-12-07 13:10:06'),
(57,'SEN-CJ-056','Layine NDIAYE','Homme','2001-11-26','Sénégalais','Porokhane','Kaolack','Nioro du Rip','layinendiaye1101@gmail.com','77 184 39 78','77 184 39 78','Etudiant','avatars/1765117370_LAYINE.jpg','layine-ndiaye-sen-cj-056','Membre simple','2025-12-07 13:22:50','2025-12-07 13:22:50'),
(58,'SEN-CJ-057','Ndeye Fatou CISSE','Femme','2003-12-21','Sénégalaise','Thyssé Kaymor','Kaolack','Nioro du Rip','ndeyefatoucisse6193@icloud.com','77 107 61 93','77 107 61 93','Etudiante','avatars/1765117509_NDEYE FATOU.jpg','ndeye-fatou-cisse-sen-cj-057','Membre simple','2025-12-07 13:25:09','2025-12-07 13:25:09'),
(59,'SEN-CJ-058','Khadim SARR','Homme','2000-11-17','Sénégalais','Parcelles Assainies','Dakar','Dakar','sarrkhadim692@gmail.com','78 234 02 46','78 234 02 46','Etudiant','avatars/1765200044_KHADIM.jpg','khadim-sarr-sen-cj-058','Membre simple','2025-12-08 12:20:44','2025-12-08 12:20:44'),
(60,'SEN-CJ-059','Moussa DIATTA','Homme','2001-08-25','Sénégalais','Keur-Massar - Sante Yallah 4','Dakar','Dakar','diattamoussa0608@gmail.com','78 164 07 86','78 164 07 86','Etudiant','avatars/1765800540_moussa.jpg','moussa-diatta-sen-cj-059','Membre simple','2025-12-15 11:09:00','2025-12-15 11:09:00'),
(61,'SEN-CJ-060','Samba DRAME','Homme','2000-05-22','Sénégalais','Colobane','Dakar','Dakar','dramembasa2000@gmail.com','77 487 23 93','77 487 23 93','Coord. CNID','avatars/1765800704_438A6912-removebg-preview.png','samba-drame-sen-cj-060','Membre simple','2025-12-15 11:11:44','2025-12-15 11:11:44'),
(62,'SEN-CJ-061','KHADIDIATOU DIASSE','Homme','1998-01-14','Sénégalaise','Ouakam','Dakar','Dakar','diassekhadidiatou14@gmail.com','77 900 59 57','77 900 59 57','Adjointe Coord. CNID','avatars/1765808986_khadidiatou.jpg','khadidiatou-diasse','Membre simple','2025-12-15 13:18:02','2026-01-20 08:16:23'),
(63,'SEN-CJ-062','Dieynaba BARRY','Femme','2000-03-20','Sénégalaise','Ouakam','Dakar','Dakar','dieynaba2122@gmail.com','77 481 20 34','77 481 20 34','Assistante','avatars/1766568314_dieyna.jpeg','dieynaba-barry-sen-cj-062','Membre simple','2025-12-24 08:25:14','2025-12-24 08:25:14'),
(64,'SEN-CJ-063','Alpha Yaya BA','Homme',NULL,'Sénégalais','Dakar','Dakar','Dakar','alphayayab987@gmail.com','77 746 83 25','77 746 83 25','Etudiant','avatars/1768913291_alpha.png','alpha-yaya-ba-sen-cj-063','Membre simple','2026-01-20 11:48:11','2026-01-20 11:48:11'),
(65,'SEN-CJ-064','Seydina Mohamed DIOP','Homme',NULL,'Sénégalais','Castor','Dakar','Dakar','seydinaseydinamouhameddiop@gmail.com','76 748 69 43','76 748 69 43','Etudiant','avatars/1768913462_SEYDINA_MOHAMED_DIOP-removebg.png','seydina-mohamed-diop-sen-cj-064','Membre simple','2026-01-20 11:51:02','2026-01-20 11:51:02'),
(66,'SEN-CJ-065','Assane BITEYE','Homme','2001-10-20','Sénégalais','Kaolack','Kaolack','Kaolack','biteyeassne99@gmail.com','77 258 37 11','77 258 37 11','Etudiant','avatars/1768913670_Assane_BITEYE-removebg-preview.png','assane-biteye-sen-cj-065','Membre simple','2026-01-20 11:54:30','2026-01-20 11:54:30'),
(67,'SEN-CJ-066','Baye Makhtar DIASSE','Homme','2001-04-01','Sénégalais','Zac Mbao','Dakar','Dakar','bayemakhtardiasse73@gmail.com','77 365 48 04','77 365 48 04','Etudiant','avatars/1768913822_BAYE_MATAR_DIASSE-removebg-preview.png','baye-makhtar-diasse-sen-cj-066','Membre simple','2026-01-20 11:57:02','2026-01-20 11:57:02'),
(68,'SEN-CJ-067','Bineta TALL','Femme','1994-09-30','Sénégalaise','Thiaroye','Dakar','Dakar','binetatall4@icloud.com','77 981 78 06','77 981 78 06','Vendeuse','avatars/1768914049_BINETA_BARA_TALL-removebg-preview.png','bineta-tall-sen-cj-067','Membre simple','2026-01-20 12:00:49','2026-01-20 12:00:49'),
(69,'SEN-CJ-068','DIAMPATHE SALL','Homme','1993-09-19','Sénégalais','Tivaoune Peulh','Dakar','Dakar','diampathe19sall@gmail.com','77 619 75 41','77 619 75 41','Commissaire au compte','avatars/1768914293_Diam Pathe.jpg','diampathe-sall-sen-cj-068','Membre simple','2026-01-20 12:04:53','2026-01-20 12:04:53'),
(70,'SEN-CJ-069','Mame Fatou MBAYE','Femme','1992-05-14','Sénégalaise','Sicap Foire','Dakar','Dakar','mamefatoum63@gmail.com','77 169 29 19','77 169 29 19','Coord. CGPP','avatars/1768914596_MAME_FATOU.png','mame-fatou-mbaye-sen-cj-069','Membre simple','2026-01-20 12:09:56','2026-01-20 12:09:56'),
(71,'SEN-CJ-070','Mody SAKHO',NULL,'1990-12-09','Sénégalais','Guediawaye','Dakar','Dakar','atawbatousidikh@gmail.com','77 244 11 86','77 244 11 86','Adjoint Coord. CCV','avatars/1768914853_MODY_SAKho.png','mody-sakho-sen-cj-070','Membre simple','2026-01-20 12:14:13','2026-01-20 12:14:13'),
(72,'SEN-CJ-071','Ngoné  DIAME','Femme','2001-02-02','Sénégalaise','Keur-Massar','Dakar','Dakar','lougalo2001@gmail.com','76 183 94 99','76 183 94 99','Etudiante','avatars/1768915046_NGONE_DIAME.png','ngone-diame-sen-cj-071','Membre simple','2026-01-20 12:17:26','2026-01-20 12:17:26'),
(73,'SEN-CJ-072','Serigne Abdou Akim SYLLA','Homme','2001-02-10','Sénégalais','Passy','Fatick','Passy','syllaakim18@gmail.com','76 264 44 32','76 264 44 32','Membre CFEL','avatars/1768915221_Akim_SYLLA-removebg-preview.png','serigne-abdou-akim-sylla-sen-cj-072','Membre simple','2026-01-20 12:20:21','2026-01-20 12:20:21'),
(74,'SEN-CJ-073','TAFSIR ABDOULAHI DRAME','Homme','2002-11-27','Sénégalais','Guediawaye','Dakar','Dakar','tafsirdramee75@gmail.com','78 632 61 52','78 632 61 52','Membre CFEL','avatars/1768915397_Tafsir-removebg-preview.png','tafsir-abdoulahi-drame-sen-cj-073','Membre simple','2026-01-20 12:23:17','2026-01-20 12:23:17'),
(75,'SEN-CJ-074','Thierno Abou TALL','Homme','1996-10-24','Sénégalais','Sicap Foire','Dakar','Dakar','thiernoaboutall56@gmail.com','78 141 65 59','78 141 65 59','Coord. CSE','avatars/1768915535_THIERNO-.png','thierno-abou-tall-sen-cj-074','Membre simple','2026-01-20 12:25:35','2026-01-20 12:25:35'),
(76,'SEN-CJ-075','Youssoupha FALL','Homme','1991-05-15','Sénégalais','Sicap Foire','Dakar','Dakar','youssou120@gmail.com','78 164 87 81','78 164 87 81','Coord. CFEL','avatars/1768915918_Youssoupha_FALL.png','youssoupha-fall-sen-cj-075','Membre simple','2026-01-20 12:31:58','2026-01-20 12:31:58'),
(77,'SEN-CJ-076','Moustapha NDIAYE','Homme',NULL,'Sénégalais','Colobane','Dakar','Dakar','moustaphandiayeww@gmail.com','78 374 11 61','78 374 11 61','Adjoint SG','avatars/1768917022_438A6935.jpg','moustapha-ndiaye-sen-cj-076','Membre simple','2026-01-20 12:50:22','2026-01-20 12:50:22'),
(78,'SEN-CJ-077','Mbacké NDIAYE','Homme',NULL,'Sénégalais','Thiaroye','Dakar','Dakar','ndiayembacke2456@icloud.com','76 195 56 67','76 195 56 67','Maçon','avatars/1769252554_MBACKE NDIAYE.jpeg','mbacke-ndiaye-sen-cj-077','Membre simple','2026-01-24 10:02:34','2026-01-24 10:02:34'),
(79,'SEN-CJ-078','Souadou SAM','Femme','2000-08-23','Sénégalaise','Yeumbeul','Dakar','Dakar','suadusam01@gmail.com','78 574 50 93','78 574 50 93','Fondatrice Univers Evénementiel','avatars/1770376730_1000713145.jpg','souadou-sam','Membre simple','2026-02-06 10:18:50','2026-02-06 10:27:44'),
(80,'SEN-CJ-079','Kadidiatou SIMA','Femme','2002-09-24','Sénégalaise','Almadies','Dakar','Dakar','khadysima436@gmail.com','76 457 89 84','76 457 89 84','Membre SG','avatars/1770378022_1000713158.jpg','kadidiatou-sima','Membre simple','2026-02-06 10:26:20','2026-02-06 10:40:22'),
(81,'SEN-CJ-080','Ousmane NIA','Homme','1997-06-12','Sénégalais','Medina','Dakar','Dakar','ousmanenia20@gmail.com','77 074 72 02','77 074 72 02','Entrepreneur','avatars/1772387897_d726832a-56de-401e-bbe9-8905e3b9c7a1.jpeg','ousmane-nia','Membre simple','2026-03-01 16:58:17','2026-03-01 17:05:15'),
(82,'SEN-CJ-081','Coumba Amadou Ely BA','Femme',NULL,'Sénégalaise','Tivaoune Peulh','Dakar','Dakar','coumbaamadouely@gmail.com','78 480 19 92','78 480 19 92','Etudiante','avatars/1772388229_acb8c921-6f9d-4b06-a1c7-f412fdcd4100.jpeg','coumba-amadou-ely-ba-sen-cj-081','Membre simple','2026-03-01 17:03:49','2026-03-01 17:03:49'),
(83,'SEN-CJ-082','Ndeye khady SECK','Femme','2006-10-04','Sénégalaise','Keur Massar','Dakar','Dakar','ndeyekhadyseck851@gmail.com','77 186 21 09','77 186 21 09','Etudiante','avatars/1773269519_NDEYE KHADY SECK.jpeg','ndeye-khady-seck-sen-cj-082','Membre simple','2026-03-11 21:51:59','2026-03-11 21:51:59'),
(84,'SEN-CJ-083','Cheikh Tidiane DIENG','Homme','1993-05-12','Sénégalais','Guia','Saint-Louis','Podor','amadoudieng1293@gmail.com','77 249 33 20','77 249 33 20','Chauffeur','avatars/1773356232_cheikh tidiane.jpeg','cheikh-tidiane-dieng-sen-cj-083','Membre simple','2026-03-12 21:57:12','2026-03-12 21:57:12'),
(85,'SEN-CJ-084','Ndeye Coumba TALL','Femme','2002-07-15','Sénégalaise','Cité Fadia Guentaba 3','Dakar','Dakar','koumbatall041@gmail.com','77 587 83 02','77 587 83 02','Étudiante','avatars/1773681714_f74f48b3-686d-4818-8ff3-a2384fcdff2d.jpeg','ndeye-coumba-tall-sen-cj-084','Membre simple','2026-03-16 16:21:54','2026-03-16 16:21:54'),
(86,'SEN-CJ-085','Aly NDAO','Homme','2001-01-01','Sénégalais','Gueule Tapé','Dakar','Dakar','ndaoaly560@gmail.com','77 712 79 76','77 712 79 76','Étudiant','avatars/1773839648_3341a811-182c-4505-b93a-25321b70e6e0.jpeg','aly-ndao-sen-cj-085','Membre simple','2026-03-18 12:14:08','2026-03-18 12:14:08'),
(87,'SEN-CJ-086','Bafode KONTA','Homme','2001-02-16','Sénégalais','Marandan','Dakar','Dakar','Kont25.mo@gmail.com','76 381 37 39','76 381 37 39','Étudiant','avatars/1774882308_d2be1254-f47e-4771-9676-47f13c6bd9ce.jpeg','bafode-konta-sen-cj-086','Membre simple','2026-03-30 12:51:48','2026-03-30 12:51:48'),
(88,'SEN-CJ-087','Sokhna FALL','Femme','2010-11-28','Sénégalaise','Thiaroye','Dakar','Thiaroye','sokhnafall2010@gmail.com','780147524','780147524','Elève','avatars/1783436258_7aae1f32-f625-401e-9099-fb36d9ebed50.jpeg','sokhna-fall','Membre simple','2026-07-07 12:57:38','2026-07-07 13:04:38'),
(89,'SEN-CJ-088','Papa Makhtar KEBE','Homme','2003-05-08','Sénégalais','THIENABA','THIES','THIES','papamakhtark@gmail.com','777028771','777028771','Etudiant','avatars/1784300248_WhatsApp Image 2026-07-13 at 22.03.59.jpeg','papa-makhtar-kebe-sen-cj-088','Membre simple','2026-07-17 12:57:28','2026-07-17 12:57:28'),
(90,'SEN-CJ-089','Cheikh FAYE','Homme','2006-12-25','Sénégalais','Diofior','Fatick','Fatick','faye62377@gmail.com','771348264','771348264','Etudiant','avatars/1784300417_WhatsApp Image 2026-07-16 at 15.32.46.jpeg','cheikh-faye-sen-cj-089','Membre simple','2026-07-17 13:00:17','2026-07-17 13:00:17');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `domaines` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

LOCK TABLES `domaines` WRITE;
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES
(1,'Atelier de Sensibilisation','sensibilisation','Un atelier de sensibilisation est un espace d’échange, d’écoute et de partage qui vise à informer, éduquer et mobiliser les jeunes autour de thématiques essentielles pour leur épanouissement personnel et collectif.\r\nC’est un moment d’apprentissage participatif où chaque voix compte, permettant de déconstruire les préjugés, de renforcer la conscience citoyenne et de susciter des actions concrètes en faveur du changement social.','domaines/LrevaHEHAlrPTl5g94ms7EYIdMOwSua7s999qq1k.jpg','2025-10-30 09:46:42','2025-11-04 13:18:01'),
(2,'Formation en Leadership','formation','Développez vos compétences en leadership et gestion d’équipe.','domaines/XXmHA2Z00GRtVWzdQTEM4ToXPzvh27ABstqo8FOj.jpg','2025-11-04 13:02:23','2026-01-05 11:22:01'),
(3,'Formation en Communication','formation','Améliorez vos capacités de communication interpersonnelle.','domaines/ZnI3QwSKm7wMF05RG3ErpO6FsdC0087PXxylIowL.jpg','2025-11-04 13:02:23','2026-01-05 11:22:11'),
(4,'Formation en Gestion de Projet','formation','Apprenez à planifier et gérer efficacement vos projets.','domaines/U51Ao3IJ2bZmL6Od3XRnFtKQ9MSNeSWHzJZhefMm.jpg','2025-11-04 13:02:23','2026-01-05 11:22:19'),
(5,'Formation en Développement Personnel','formation','Atelier pour mieux se connaître et exploiter son potentiel.','domaines/c7ywaFL3peMsyrDWqH09SS7ZjAlXq3vPzNsCQc4a.jpg','2025-11-04 13:02:23','2026-01-05 11:22:28'),
(6,'Formation en Numérique','formation','Acquérir les compétences essentielles dans le numérique.','domaines/UiPJBPZoVHW0wnxXrElwo1tFEPL2sAmLG4tAYJTj.jpg','2025-11-04 13:02:23','2026-01-05 11:22:39'),
(7,'Causerie Motivation','causerie','Discussion inspirante pour booster la motivation.','domaines/pd3hYVGOHZL0h7gl9qPcZiNKtu2hMNvHkMsZmIYe.jpg','2025-11-04 13:02:23','2025-11-04 13:05:04'),
(8,'Causerie Innovation','causerie','Échanges sur l’innovation et l’entrepreneuriat.','domaines/PkFypXAL3XOdkZuKsc8CWB4AbSaN9YxDSSK0ZCae.jpg','2025-11-04 13:02:23','2025-11-04 13:05:19'),
(9,'Causerie Bien-être','causerie','Discussion sur le bien-être mental et physique.','domaines/FmDXHDYZnJupGfZlSpzPNjnf0DUw5uKDNXkDZyIn.jpg','2025-11-04 13:02:23','2025-11-04 13:05:32'),
(10,'Causerie Éducation','causerie','Échanges autour des nouvelles méthodes pédagogiques.','domaines/Bno5Wj7b3glaqDkPJEgFnlGNajbZgc2xKcT8PSbI.jpg','2025-11-04 13:02:23','2025-11-04 13:05:49'),
(11,'Causerie Leadership','causerie','Partage d’expériences de leaders inspirants.','domaines/xAbdyHvOhtfSU2EmF2vtzdan57MNJyrkuqaAiFDY.jpg','2025-11-04 13:02:23','2025-11-04 13:06:13'),
(12,'Team Building','cohesion','Activité ludique pour renforcer la cohésion d’équipe.','domaines/iPYLOlBPRjEg8DmZHSJDSOBHLJeOo6ueCHWwmNpC.jpg','2025-11-04 13:02:23','2025-11-04 13:06:42'),
(13,'Jeux Collaboratifs','cohesion','Jeux et challenges pour encourager le travail collectif.','domaines/11s28j3VhnmpUBL6EaD4Lu8HecM2or1MxLnKAg94.jpg','2025-11-04 13:02:23','2025-11-04 13:06:58'),
(14,'Sortie Nature','cohesion','Sortie en plein air pour renforcer les liens.','domaines/SI0bsLaJAxFyTnkjrBd4MN5mG8rlMAbDrRYPjy8t.jpg','2025-11-04 13:02:23','2025-11-04 13:08:33'),
(15,'Atelier Créatif','cohesion','Atelier artistique pour stimuler la créativité collective.','domaines/mpNaLrpwmDSc3BubzwhEX5sG4OxFkhfVnj1NkogK.jpg','2025-11-04 13:02:23','2025-11-04 13:07:42'),
(16,'Challenge Solidaire','cohesion','Défis en groupe pour développer l’entraide et la solidarité.','domaines/Tz9r9cawC7gsQzGSix4fEDyLU86SzukG7OTJaoqa.jpg','2025-11-04 13:02:23','2025-11-04 13:10:20'),
(17,'Sensibilisation sur l\'Environnement','sensibilisation','Atelier sur la protection de l’environnement.','domaines/OAYpobAtGMct0gRQSdpr4oTk2IBCylKJiyzGt9t2.jpg','2025-11-04 13:02:23','2026-01-05 11:23:48'),
(18,'Sensibilisation  sur la Santé','sensibilisation','Actions pour promouvoir la santé et l’hygiène.','domaines/lgmrx8wO5W8NnkPuzwsTbHbpyjFJ2WKipNwML9oM.jpg','2025-11-04 13:02:23','2026-01-05 11:23:36'),
(19,'Sensibilisation sur les Droits Humains','sensibilisation','Éducation aux droits et devoirs des citoyens.','domaines/GPdjNusPyWpARMtERhX070DqKZatawj3H0ui66ag.jpg','2025-11-04 13:02:23','2026-01-05 11:24:02'),
(20,'Sensibilisation sur la Sécurité','sensibilisation','Campagne de sensibilisation sur la sécurité au travail.','domaines/wG4xiaVNAglAbHi5j3nlhHgPheiiPwPeAmJbG7m8.jpg','2025-11-04 13:02:23','2026-01-05 11:24:13'),
(21,'Sensibilisation sur le Numérique','sensibilisation','Atelier pour une utilisation responsable du numérique.','domaines/sevUj6Q0L8YMNp307JE7M6qjHQzzHFfXr8NuhbIh.jpg','2025-11-04 13:02:23','2026-01-05 11:24:26'),
(22,'Action Communautaire Quartier','action','Nettoyage et embellissement de l’espace public.','domaines/wO8iMz5xURVsEB6dI1cd6Nsl9nvxJ5JGcECrOdsZ.jpg','2025-11-04 13:02:23','2025-11-04 13:14:16'),
(23,'Collecte de Dons','action','Organisation d’une collecte pour les familles dans le besoin.','domaines/Qbp3ijqYGUQXKyiW2qQWhSa1s411nx8R8xLmdjxb.jpg','2025-11-04 13:02:23','2025-11-04 13:14:31'),
(24,'Distribution Alimentaire','action','Distribution de repas et denrées alimentaires.','domaines/DatVnw2RL7cNOzSdbUnNSpcbKleUZJxDLbZvixES.jpg','2025-11-04 13:02:23','2025-11-04 13:14:53'),
(25,'Plantation d’Arbres','action','Reboisement et sensibilisation à l’écologie.','domaines/5t5YA9UdlvkrxhpNzPWONA5C0UBKCAdVtaNNs6ju.jpg','2025-11-04 13:02:23','2025-11-04 13:15:20'),
(26,'Campagne Vaccination','action','Participation à des campagnes de santé publique.','domaines/TBfvOmwF64f8FyF5GZxfZPSTjQTmLfgO0Bs24rPY.jpg','2025-11-04 13:02:23','2025-11-04 13:15:40'),
(27,'Projet Éducation Numérique','projet','Création d’espaces numériques pour l’apprentissage.','domaines/ZbpZB067Pd8VwfsmCky3CO4EaYdwB2U6M1tzH3XC.jpg','2025-11-04 13:02:23','2025-11-04 13:16:00'),
(28,'Projet Sports et Loisirs','projet','Mise en place d’activités sportives pour les jeunes.','domaines/tz3WLELC1GMVPXIekcxM1yrBePtEvBur5WMZjI0E.jpg','2025-11-04 13:02:23','2025-11-04 13:16:19'),
(29,'Projet Culturel','projet','Organisation de festivals et ateliers culturels.','domaines/C8dE6tIUsMCNyueNFnDal7GLCKDXbaOdiugLIJ0e.jpg','2025-11-04 13:02:23','2025-11-04 13:16:48'),
(30,'Projet Santé','projet','Actions pour améliorer l’accès aux soins dans la communauté.','domaines/FbMiIlMRYTfZmj0bOpsvJ4CWPuAC8XYL5ubVNZQE.jpg','2025-11-04 13:02:23','2025-11-04 13:17:15'),
(31,'Projet Innovation Sociale','projet','Initiatives pour résoudre des problèmes sociaux locaux.','domaines/m2lxiLbstmNcbiW1rok2DjNUpdm0tMV2BcR6OAUx.jpg','2025-11-04 13:02:23','2025-11-04 13:17:36');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES
(2,'Journée de Don de Fournitures à Keur Moussa Frontière','Le 27 septembre 2025, Sen Carrefour Jeunesse a organisé une Journée de Don de Fournitures à Keur Moussa Frontière (KMF). Cet événement solidaire avait pour objectif de soutenir la communauté locale en offrant des fournitures essentielles, contribuant ainsi à améliorer les conditions d’éducation et le quotidien des habitants. Une initiative qui reflète l’engagement de Sen Carrefour Jeunesse en faveur du partage et de la solidarité.','2025-12-01 17:58:16','2025-12-01 17:58:16'),
(3,'Le Lancement officiel d\'Élan Pro 2025-2026','Sen Carrefour Jeunesse a lancé officiellement le programme Élan Pro 2025-2026, lors d’une journée riche en échanges et en perspectives.\r\nL’évènement a débuté par la présentation de notre site CJSEN, véritable hub dédié à l’accompagnement des jeunes.\r\nNous avons ensuite accueilli nos partenaires et invités d’honneur, dont les allocutions inspirantes ont marqué les esprits.\r\n\r\nLe clou de l\'événement ? \r\nLa présentation de notre tout nouveau projet : Élan Pro 2025-2026 ! Un programme conçu pour catalyser le potentiel de chaque jeune, les équiper des outils nécessaires pour leur épanouissement professionnel et personnel.\r\n\r\nNous sommes particulièrement fiers d\'avoir scellé deux partenariats stratégiques :\r\n- Avec Monsieur Malick Souleymane Kouyaté, co-fondateur de l\'institut de formation en art oratoire Fassaha, pour renforcer les compétences en communication de nos jeunes.\r\n- Avec Monsieur Ballé Dieng du 2DCG Dieng Diop Consulting Groupe, pour faciliter l’accès au permis de conduire.\r\n\r\nAprès une pause déjeuner bien méritée et conviviale, nous avons eu le plaisir de vous présenter notre nouvelle équipe marketing et commerciale, prête à porter haut les couleurs de Sen Carrefour Jeunesse !\r\n\r\nLe président a clôturé la séance avec un discours de haute facture. \r\nUn grand merci pour votre soutien indéfectible ! \r\nL\'aventure Élan Pro est lancée !','2025-12-02 10:20:32','2025-12-02 10:20:32'),
(4,'Randonnée Pédestre','Ce dimanche 28 juin 2026, dans une ambiance conviviale, Sen Carrefour Jeunesse (CJSEN) a organisé la deuxième édition de sa randonnée pédestre. Fidèle à son engagement en faveur des actions citoyennes et de l’épanouissement des jeunes, CJSEN a une nouvelle fois fait preuve d’une mobilisation exceptionnelle pour promouvoir la santé et le bien-être.','2026-07-03 08:22:14','2026-07-03 08:22:14'),
(5,'Discours du Président','Célébration du 08 mars: Discours du président de sen carrefour jeunesse (CJSEN), à l’occasion de cette journée internationale des droits des femmes. Un grand hommage rendu aux femmes.','2026-07-03 08:32:23','2026-07-03 08:32:23'),
(6,'Éducation financière : Mme NDIAYE, Money Coach - 8 Mars 2026','Éducation financière : Mme NDIAYE, Money Coach  invite les femmes à  oser occuper leur place et bien gérer les dépenses : Oser, gérer et négocier ! Intervention enrichissante de madame Ndiaye sur l’éducation financière !','2026-07-03 08:34:42','2026-07-03 08:34:42'),
(7,'Discours du Président - 08 Mars 2026','Célébration du 08 Mars 2026 : Discours du président de sen carrefour jeunesse (CJSEN), à l’occasion de cette journée internationale des droits des femmes. Un grand hommage rendu aux femmes.','2026-07-03 08:36:47','2026-07-03 08:36:47'),
(8,'Prestation théâtrale des  Espoirs de la banlieue - 8 Mars 2026','Prestation théâtrale des  Espoirs de la banlieue. CJSEN c’est aussi allier l’utile à l’agréable !\r\nLe public a eu droit à une belle démonstration artistique portant sur les thématiques abordées ainsi que sur les valeurs qui caractérisent CJSEN.','2026-07-03 08:38:35','2026-07-03 08:38:35'),
(9,'Randonnée Pédestre du 28 juin 2026','Ce dimanche 28 juin 2026, dans une ambiance conviviale, Sen Carrefour Jeunesse (CJSEN) a organisé la deuxième édition de sa randonnée pédestre. Fidèle à son engagement en faveur des actions citoyennes et de l’épanouissement des jeunes, CJSEN a une nouvelle fois fait preuve d’une mobilisation exceptionnelle pour promouvoir la santé et le bien-être.','2026-07-03 08:41:29','2026-07-03 08:41:29');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint(20) unsigned NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_event_id_index` (`event_id`),
  CONSTRAINT `media_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES
(1,2,'medias/1764615496_MAT07751.jpg','2025-12-01 17:58:16','2025-12-01 17:58:16'),
(2,2,'medias/1764615496_MAT07754.jpg','2025-12-01 17:58:16','2025-12-01 17:58:16'),
(6,2,'medias/1764672865_MAT07711.jpg','2025-12-02 09:54:25','2025-12-02 09:54:25'),
(7,2,'medias/1764672865_MAT07755.jpg','2025-12-02 09:54:25','2025-12-02 09:54:25'),
(8,2,'medias/1764672865_MAT07761.jpg','2025-12-02 09:54:25','2025-12-02 09:54:25'),
(9,3,'medias/1764674432_IMG-20251201-WA0106.jpg','2025-12-02 10:20:32','2025-12-02 10:20:32'),
(10,3,'medias/1764675279__DSC4063.jpg','2025-12-02 10:34:39','2025-12-02 10:34:39'),
(11,3,'medias/1764675316__DSC4062.jpg','2025-12-02 10:35:16','2025-12-02 10:35:16'),
(12,4,'medias/1783074134_photo_1_2026-07-01_15-30-57.jpg','2026-07-03 08:22:14','2026-07-03 08:22:14'),
(13,4,'medias/1783074134_photo_3_2026-07-01_15-30-57.jpg','2026-07-03 08:22:14','2026-07-03 08:22:14'),
(14,4,'medias/1783074134_photo_5_2026-07-01_15-30-57.jpg','2026-07-03 08:22:14','2026-07-03 08:22:14'),
(15,4,'medias/1783074134_photo_6_2026-07-01_15-30-57.jpg','2026-07-03 08:22:14','2026-07-03 08:22:14'),
(16,4,'medias/1783074134_photo_21_2026-07-01_15-36-40.jpg','2026-07-03 08:22:14','2026-07-03 08:22:14'),
(17,5,'medias/1783074743_WhatsApp_Image_2026-07-03_at_10.27.51__2_.jpeg','2026-07-03 08:32:23','2026-07-03 08:32:23'),
(18,5,'medias/1783074743_WhatsApp_Image_2026-07-03_at_10.28.08__2_.jpeg','2026-07-03 08:32:23','2026-07-03 08:32:23'),
(19,6,'medias/1783074882_WhatsApp_Image_2026-07-03_at_10.28.06__1_.jpeg','2026-07-03 08:34:42','2026-07-03 08:34:42'),
(20,7,'medias/1783075007_WhatsApp_Image_2026-07-03_at_10.27.42__1_.jpeg','2026-07-03 08:36:47','2026-07-03 08:36:47'),
(21,7,'medias/1783075007_WhatsApp_Image_2026-07-03_at_10.27.57__2_.jpeg','2026-07-03 08:36:47','2026-07-03 08:36:47'),
(22,7,'medias/1783075007_WhatsApp_Image_2026-07-03_at_10.28.08__2_.jpeg','2026-07-03 08:36:47','2026-07-03 08:36:47'),
(23,8,'medias/1783075115_WhatsApp_Image_2026-07-03_at_10.28.06__4_.jpeg','2026-07-03 08:38:35','2026-07-03 08:38:35'),
(24,8,'medias/1783075115_WhatsApp_Image_2026-07-03_at_10.28.07__3_.jpeg','2026-07-03 08:38:35','2026-07-03 08:38:35'),
(25,9,'medias/1783075289_photo_1_2026-07-01_15-30-57.jpg','2026-07-03 08:41:29','2026-07-03 08:41:29'),
(26,9,'medias/1783075289_photo_3_2026-07-01_15-30-57.jpg','2026-07-03 08:41:29','2026-07-03 08:41:29'),
(27,9,'medias/1783075289_photo_5_2026-07-01_15-30-57.jpg','2026-07-03 08:41:29','2026-07-03 08:41:29'),
(28,9,'medias/1783075289_photo_6_2026-07-01_15-30-57.jpg','2026-07-03 08:41:29','2026-07-03 08:41:29'),
(31,9,'medias/1783075289_photo_16_2026-07-01_15-30-57.jpg','2026-07-03 08:41:29','2026-07-03 08:41:29'),
(32,9,'medias/1783075289_photo_16_2026-07-01_15-36-40.jpg','2026-07-03 08:41:29','2026-07-03 08:41:29');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'2025_06_20_180141_create_cards_table',1),
(4,'2025_10_28_075358_create_newsletters_table',2),
(5,'2025_10_28_080909_create_blogs_table',3),
(6,'2025_10_28_080943_create_media_table',3),
(7,'2025_10_28_081008_create_videos_table',3),
(8,'2025_10_30_092625_create_domaines_table',4),
(9,'2025_11_04_120851_create_temoignages_table',5),
(10,'2025_12_01_180815_create_events_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsletters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
INSERT INTO `newsletters` VALUES
(1,'maisonzahra1@gmail.com','2025-10-28 07:59:09','2025-10-28 07:59:09'),
(2,'khadim.drame@univ-zig.sn','2025-11-07 12:37:01','2025-11-07 12:37:01'),
(3,'dramembasa2000@gmail.com','2025-11-28 08:21:54','2025-11-28 08:21:54');
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('1jQAHFRmnBI6a6zLvXxwNs4rUxLL90mYfYMIsSQF',NULL,'51.195.183.70','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoicDlja0FNbDQyRjg2anBWb1BVaW9QR2E2ZlNlODlra0RndjJzWEs3SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787297151),
('4GnMut206wjXFeDmzAeHbqLDvo8mMRfdUaY9hmuK',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFdITXJybUlYamswVGlUbVhFaUNsd1pCWDhRRDVzZ0M3YVhCa0R2MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787329535),
('4K4VaRGnP6md7fPkEpSwbDSaUjoTYedXqEdqeQVH',NULL,'34.225.164.177','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/117.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiV211TEc5QkFsam5KVnAzbVN5bnVYMDNveE5ZSlhGT0xCOWpZcGtSdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787334545),
('5RINLRwQLU3seB3FHXgQOS5UXokv002B0R3bFZEP',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVM4a2FvTUxtdVQ4YTA0WjlQRWhJNmpKb21FRGVjUVFYa0ZHUzFkdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzI1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787329596),
('81tdSqRRxryshcKOYmQkcX3HL1kGHv8OQBg9eeV0',NULL,'85.208.96.203','Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmNOMFZMeFp5RzdSczNmN3BidGlnMkpCZE5neVhxN01rcG13UkFSRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9janNlbi5jb20vZG9tYWluZS9hY3Rpb24vMjQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787295296),
('8trrahDHWQivZAVhA02a9YJOTEcXLGUT1e5fCXoV',NULL,'5.39.1.224','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjJiQTVJUjJjWmtYSDlUY0Y3RnB1NXh0eVg3dllodk43dnNIQ2sxVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787312106),
('9JxW369688op5R6sXxyOGdg9cwqS1JUN0aPbVxrg',NULL,'51.195.215.204','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoib1FtOVFMWlAxUEwyOGE5b2R1TWJkbHdZcXFtMURXbHFwZ3oxU1dxQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787293608),
('9zm8jU5K1O9BuxZ2tM8Fci7WmnloHk0uy9MrnCgf',NULL,'49.51.73.183','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiblpsYndCUlVDYzEwbkp1SHhQQUJlT3JZdTFuam5hQUdKNnJtQkhMdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787330208),
('appMAal5mInNiW7HeCowaJYPKBsi6e2XerS2yCbh',NULL,'198.244.183.14','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVTUzZGZlS1lsbUo5eG9XT0JJWktoM1V2d2tNVHBnWkZ0UTF6TWZuSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787293707),
('BLljPZ6x5pXdNIgV5lSUB0BWK64HGKNPFTAl3kqa',NULL,'85.208.96.201','Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)','YTozOntzOjY6Il90b2tlbiI7czo0MDoibGk5Z1pTV1ZMRlU5UzI5WXcyaU96a2Q3ZXU5RUtrckFtOHRITmxIWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbS9kb21haW5lL2NvaGVzaW9uLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787316064),
('bqiWkMyqZzKCCCe5oIgUo7hDSbXHXsfUbnEmfr0A',NULL,'43.166.240.231','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlROWTVIMzhPSE9DaEpRdUJGUkc1Yk1mS1o1Qll3amd1cFJPTUR2NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787334201),
('c0oaKH4CBAl12gJlnacf4bXRSTSRz09AAXTvafq4',NULL,'51.195.215.191','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2psb2Nmdkl2cm4yRUs5c3ZCb2Z0N0Ruc0MybmVCQXdxUklzWDFpViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzMxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787297307),
('CFvVVNNiQqvZ1J8XGpE4DzyxGRuF9SvbumbVvgYx',NULL,'51.75.236.157','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNldmWXlESXhXeFZoTzdLMlozdVpPU09QTEdQZlA0cHNhdzA1Q0JOTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9janNlbi5jb20vbWVkaWF0aGVxdWUvMTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787298974),
('EB3asrJGGS6a4hj6ID0giHjkUptPLB8CUPADBYdX',NULL,'51.68.247.219','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFYxYXlKRTltd1o5WVRNUDYzVWZYZnBIRzVJc21LZTBRd3pxY2xaMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9janNlbi5jb20vZG9tYWluZS9zZW5zaWJpbGlzYXRpb24vMTciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787295487),
('EbDVgceG2ZWGJcbCcuA43vXe7Qnc6iJpiurhIiVW',NULL,'43.130.12.43','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnkxcUpXc3EzZ3ZzbEh1cjRUbGtuNXBxZTJwVnd2R3p2VkN1RFhtOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbS9lcXVpcGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787333278),
('Ep8l3srmWu2pLeMkQktWzMcLX3J8UplCu2kbAZlc',NULL,'101.33.81.73','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWtXRmVGM3ZpSXh5alg4Nm9VdUlld3dRNHFEa1c4WW5tTFF3QVc0WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2Jsb2ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787328890),
('ez2tqoiiMGml0s3mHXskNEZ9gnwuQObiVFIGqmvu',NULL,'45.142.69.20','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHFvUHpTNGU1WDBHVW5QRWdaYWs3cFhPcTFJMUhQQXNaNUpuU2dSbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9janNlbi5jb20vZG9tYWluZS9jb2hlc2lvbi8xMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787335049),
('F5eUwDJEM36dRsfU6yuuhzDGskaHaYhjyaumjQIW',NULL,'43.160.241.129','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoieW5xUnRvbm03R3NGN3JTRGljNk1xSHpuUFJRUVhvc2pQM3hTS0ZQYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787330774),
('ffHk5Crh6kf8pGa7ium3eQEizV9ADf5IMmbGDKe1',NULL,'43.135.142.37','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoidnV5NlkzdVNZaEo0YmlYeHhaZG5TdmJQdDFTd29XRENvTkRiZFR5MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly93d3cuY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787311444),
('fSB3CEMOP6ue4HRCPiodPgGZtgd95OHdERJ95ViX',NULL,'198.244.226.77','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoia01tVTAyempweWRnaFRoSGNOaTFzUjdDUk9KTExLTDJVVkFDSG9IWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzEyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787295512),
('fUildCZ8MNZ6HDw2Qxd25S93tPI0P6FZ5DHW1Vuf',NULL,'37.59.204.128','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoia21ieUN3MEw4UXJqdUtHOTRhQ2lUMzM3V1VJUHNhbUpadHpjVGtMWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9janNlbi5jb20vYmxvZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787300370),
('HnOfs1uspm8YQb7Qix2TD0XClY7i6TlTcv0frwXY',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoieGw0WTdiSFVOblBoN3BySlhydkdabEJGTzRiMFJ1MEpMTGhrVVpiOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmVzP3BhZ2VfZm9ybWF0aW9ucz0yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787295764),
('hOcIExNrPu0VQhOBsJBczizknsr6UUm6YfNcAqw4',NULL,'43.130.102.223','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoicnJ4b0VOTEYwTDB5azk1N2Y1U0lIQ0pOcWE1cGZvU3c4Y2tqSldJdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbS9hcHJvcG9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787332653),
('hPZXebxN7GOMtaYEnsfoidy3lzm9OiLU3eWEvnPk',NULL,'43.165.195.234','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoidkdoWXNnUG1GaXdacjBOeWFwWGcxWm1DODczMXJscjJCczZWNXNCcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmVzL3NlbnNpYmlsaXNhdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787333874),
('i5SnzL32D7cjZzY0oS1oFvNgE4scFiGL29hsRmBZ',NULL,'2602:fb54:7e8::','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidFR1bFhlREtxeUxOeUQxaWJibnFJa3FuQzUySFBYaW1pdDNwVENFSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9janNlbi5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787329081),
('Ibs5fKgmWGnegwYvTIVnnpRwGc3MhZJXjhOC4xo0',NULL,'54.38.147.27','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0hIMFdvdkhrbUJXbUkwOFVEd01ISWJVZzUyQUNtb1JSSlVoZlJ3TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzI4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787299161),
('iPTVr6mweXBE8UEFeu0j2atCiGAfcwIFoWvTjXWp',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFkxa1JjcTRlRjVOQ215aUw0cUVlWUdMWGJMQXZTVGhyMjQ5WEg2eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmUvY29oZXNpb24vMTUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787332049),
('iUisFc7bno44aMlvZjx6eLXfUjuOqR6Kkl9wJdnY',NULL,'51.75.236.134','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUFmSXVqbEpTRVpqd05qc0EzS0hlNWU0bUJsTDRGMWMzd294NU15eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9janNlbi5jb20vZG9tYWluZS9jYXVzZXJpZS84Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787306426),
('j45poAtjn5jCOWQvAjhldBQbttIleMpCMVWeWxeU',NULL,'198.244.240.150','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZk5KVFpQanNHbWpEU2xIOFZVeWkwZ0RlM0x0MXJpWnNpeEc1c0xxaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787297088),
('jByuy7ef0V4R12ycf8dpLk0gT9xUHphvjrdIGQU2',NULL,'101.32.49.171','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXVIWUNjWFpCdGVmZG0zTTVsMGQzRXVTaHJUbnBrQXkwRDU4MkFRdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmUvY2F1c2VyaWUvOSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787334950),
('KepO6e0zxEz6K3KjL6MJn9Ob4hGfY6cHMY8fIZPk',NULL,'2602:fb54:7e8::','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidzBQYTdDYU5pd3Fkc29YUEdlckV2ZDIwN3hoMDFBVGt3aHFwbEhncSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9janNlbi5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787329080),
('kKLa826DSJydtGFUhmFCZ7MeEaxmtRJyG6rNPmUs',NULL,'51.68.111.241','Mozilla/5.0 (compatible; MJ12bot/v2.0.5; http://mj12bot.com/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3owVG5KYnJOZkJUSHFEaHVOSTJqR2N5dG5HRlZkdXVzMndjVDRpTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9janNlbi5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787321413),
('kyAPNFEoece3YOEjSBff0GA22azh82isCfjkK80I',NULL,'37.59.204.144','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkxUbGZpWElyNWlpTHdWVnhWYUMzMFAxY3lKa3ZTWUdBaFBjZlhCSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9janNlbi5jb20vbWVkaWF0aGVxdWUvMTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787299161),
('l4BRg0VgyYcCVrdPNN5EECxUNuguIGN8lO72bQGi',NULL,'43.159.152.187','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmcwS3dxaWNvOWJKMW9hc2UzdlpsWDdlQ2c1SVR3NEF1cmVvOW1mTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2VxdWlwZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787328296),
('LlqiSmhJOduilBwyzBE5hUfCwukNpyN01u3qxvlo',NULL,'43.157.172.39','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoid0ZrRW44QkY5cHBzREhlVjZSc1lFTklUQ2pXaTFhNlJGdzFOTzRCSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly93d3cuY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787295561),
('LwTy26viTjpwVYNqMvoTTakNJ5jR4ZB9PlPsHYxz',NULL,'129.28.84.30','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ01yOU80Q0owRVQ3V1JJUzlndGxmSDl1RzFWVE1hWE9pWE8wbGVycyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9janNlbi5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787307201),
('LZuwEobDyWZumh98YIJ6N0AXPp6Q959cZ71lfj4R',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0U0S01YbVJoYUpHNzVHcHQzcnV0ZFhldlhCUzJoVllCUzFmcGw3WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzIwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787300932),
('me77Pql5Ooby8Nb2yWKBKGLdMH59bW2nAZyKYiYs',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjFudDFTSmdyYzQ0c3owRzFIZW93V1RpZkhFdGpoUEZuWllrcWFtYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787327188),
('NbbgeyhyakeQKJWAaSn350cQMJQ51xdmsFL08Zb5',NULL,'49.51.166.228','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2lCRWRtTlBIU3QzZkQweTdnTjNnWE90SGU2MDBTNGU5N3FDN2xzMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787329509),
('nG81GpBguhn0owaKWAJxV0UJM8fZTf2v2Lg70DTo',NULL,'43.130.3.122','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXhwVkxRQUI4UDFYQWVJbUNJWGd4bFJtbGk5UnN6czNQTklkVjRkcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbS9lcXVpcGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787335646),
('nHb8o4wpobJFNhWwjNkgzg0R3IFJxLKAk643Lrc1',NULL,'47.254.47.156','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3hRQkFzaUpwVGU2TVNhQmZUNmFxMGgwcTZOOGZJUmEwcFJreGl5eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmUvc2Vuc2liaWxpc2F0aW9uLzIxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787337416),
('nlL1G1ubEfhH1VzTHba05xv6zAZZ0DdW2IVUqgqT',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXdLSDB2dlNqZ21PN0JackJ0blZvNk1XbzZqZFRjb2JrbVdMMjRYdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmUvY2F1c2VyaWUvOSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787337115),
('nnIpZIaz8ycbU9P1t8FoZCLvl969y4gG2MrQLasb',NULL,'91.203.60.139','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTVSRGZ0ZVR4V0FVWkhhMXRWNFJRbFkzTTJSY0w3aVF3cTVlTVRWTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHBzOi8vY2pzZW4uY29tL2Jsb2cvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787314665),
('NvaEFN7w1c80SH6S80UcWUw1kl3XCpcglzcrxGcO',NULL,'198.244.183.193','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1kyT2t2V3RTZXBQUjY5b1pwakNKT3RtNTA0dG9sbzRvNzg3T2Q4MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzI4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787299407),
('pdfRL7uVW4V2qA0ijziYFxGXiVrfM7JqtuSMzhjs',NULL,'101.42.46.71','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaEV2M3M2akdIam9OSE1qUzVxODFESTRLVEJTblZjQlcxMmlzOU5weiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly93d3cuY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787328068),
('QOiJBWkWsBuUEfhVoS6vR70DsMkxAAae7EYA7MHP',NULL,'104.199.6.180','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM254ejRuamJhaHJhcGllZG9UZFUxZjJQRldLOHMwaG9XdUNkUmM5ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHBzOi8vY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787311686),
('qRCtacF18jmdJJJrLxJH3zJOl7UOQ7RbLchPPC9U',NULL,'51.89.129.155','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoicFpoMVpPS3BvSzdSbDU3TFhZQ3Z2Y09DRmoyS0pjdkwwc2FVNzhlUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzEyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787295336),
('qwThOaGDqsWpNvNdWYDFLmpzwxHJntgg3pCikt9p',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlZyR3plSmFaTGpLS05JZUJyT2xLUkRMcjRLYXVRV3JHUHRsRFNCeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmUvY2F1c2VyaWUvNyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787329460),
('RkFLTRlGkyaBXvSNPKmguWvrOCJebyxBuE6Qhwod',NULL,'43.165.197.116','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDRrcWNMTXBad3haNm1yVng0ZFpWTGNNTTBnUmt5Yk45RHNNWHJYRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9janNlbi5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787323875),
('s9URgG9zzrdx1BqEghrfmzUVgGz7w2cTEH9aIANn',NULL,'101.32.15.141','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1hJVHJRa1lkTEo2dHVEYUFDR2JXNzN6RnQ4M2dqUTh1OENSVDRjcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9janNlbi5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787308291),
('spMbjvV0lyyhGV886KUNcH0hINa8g0cfD7T7OsyX',NULL,'43.159.34.167','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUtMR1N4bTgzaWloanV2SjJqUzlJWmVRN01xRHFtanBCZW1zallaZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787331335),
('t511rBlEdJcTCQvo9rGRxU1siuSO061vvQBt4dP5',NULL,'172.71.159.50','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36 CloudflareWebScanner/1.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMG1Zd3AzUjNDMDkzeXZEc2dOaGJJclNWcE5NUzRsdzdWenBIUGFqViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHBzOi8vY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787296263),
('TITdssc6JnRKuSxBgadJGpIEzLegNa6ClUYkW1a3',NULL,'43.159.152.4','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVnQyelgzMjl2QWI3bXVoS1oxall2ZVB4TnA2WmJEVHVqaGlYYk5tdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9janNlbi5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787292476),
('tv6H5paEjxjzu9Tu4YvmLZIRjrS6dIp5IS5QiKKj',NULL,'38.186.160.21','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRk9HQ2dSMEduVlNZM0tWZmt0bWJNYXpZWW5qbUpNUmhaR3N1RmFSbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHBzOi8vY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787297186),
('U71XLYA8UceBn0hgWwsR7hreOl75PfVU4gJjWxHX',NULL,'198.244.240.21','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0l0VUdzQU16VW1HSmZhTVpuR2pRdzF6azE3d3ZMMDB5RmxlR3B2RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787296904),
('UsAKkF1uq4pn6mEcG3zFNzTZkQcBrrQDaDYaJrk8',NULL,'51.89.129.104','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoibFM3RU9KcVVnb3pCTXdERDR5eWFEZXN1Y29FR0xkTlJlYmtiS0RxcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787297360),
('vg6o6axq8mE1qPoTuAVJ9DXqdQGm9ySBkN7HR422',NULL,'51.195.244.64','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEVHUHlDYmFGM29jR1VlamxNOEo2TkVYQ1FqOVFnVVd4Q2g5d0EydCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vY2pzZW4uY29tL21lZGlhdGhlcXVlLzMxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787297273),
('W2cBHKEBSMdsk3lXTjSHKgyMFMMP9grmDEk9Mujr',NULL,'198.244.168.45','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3g5YkZUUGlpYjVBYVZBNEgxZmdXTHRTcmg0cDFieWVWN0lveWM2WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHBzOi8vY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787322886),
('w9DgYLqdmDRbhrBVK2hTvWVNKUsVyQ644B1NQV7a',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3U0S2lXNlE0R2NPU3VZWWpiMERVV2JpR0tCWUxoSjRBN3FhR2h5OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly93d3cuY2pzZW4uY29tL2RvbWFpbmVzP3BhZ2VfZm9ybWF0aW9ucz0xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787335848),
('wBFI2rmMzN9QLaz1NQ8GEZYlYRJvESi35nttVX1s',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoia0ZsdmFJTko1MFVBQlRlOXR6OXlhbUVjcmVteFEwTVV0MWVzOEdzcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787316380),
('X2dR0sVdnMPufo06qnix1RcZa7ZW0pwsL6iMHS5y',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoidHZTN1FrdkJZQzNsMEwyaENRMDNNc1FVZEQydGZuNnBQSjdyQzVUcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly93d3cuY2pzZW4uY29tL21lZGlhdGhlcXVlLzExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787332173),
('XgsTNwJQ2wH4pjBmzmWnnTzbE1Na2J83uZqf0D6F',NULL,'43.155.27.244','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjB6WGhOZjdTZlVFZkRmaU1wUTVSMFp6MlFQUDFsQkh1QlhRd1M1byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly93d3cuY2pzZW4uY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1787327290),
('Y48IxOkPpx18ap71ORRo600nPqlznNA7JjGtzLb3',NULL,'129.226.146.146','Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR2JmbDdTdXlJMGFqREhjdGRSVk51WHVuVHRmbTREbkpVWVoxRkpGVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vd3d3LmNqc2VuLmNvbS9tZWRpYXRoZXF1ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1787336777),
('zHzJjB4KfvKAr33Z9B88WzTbGYivevwps2hPkapF',NULL,'216.244.66.235','Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkFGbW85dUplNjZnYURKcUN2SDM3cUx6TXMyNjVZSHBnRU92c2pQdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9janNlbi5jb20vbWVkaWF0aGVxdWUvMTIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787300862),
('zq8lUtAjKL3KZdlnOP1ll2znvVCMBFuIjTXeuhJ5',NULL,'94.23.188.196','Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXREM0RNd1E2WUl3MnV6a1VZVDYwWUFDWm1mNm81WUY2ZGVyVkhIViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9janNlbi5jb20vZG9tYWluZS9wcm9qZXQvMjciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1787295413);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temoignages`
--

DROP TABLE IF EXISTS `temoignages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `temoignages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temoignages`
--

LOCK TABLES `temoignages` WRITE;
/*!40000 ALTER TABLE `temoignages` DISABLE KEYS */;
INSERT INTO `temoignages` VALUES
(1,'Mounirou Sène','Étudiant en informatique','CJSEN m’a permis de découvrir des opportunités que je n’aurais jamais imaginées. Grâce à eux, j’ai pu participer à des ateliers enrichissants et rencontrer des personnes inspirantes.','temoignages/4Ha407cSR7yKy6OBhhNfkLMi9oYLfaMPhJfymeUo.jpg',1,'2025-11-04 12:28:00','2025-11-04 12:39:19'),
(2,'Aissatou Diop','Jeune entrepreneure','Participer aux activités de CJSEN m’a donné confiance pour lancer mon projet communautaire. Leurs conseils et leur réseau sont incroyables.','temoignages/9MVtHcktMCTCJcayB5JHcIL3L0I31hdLWEnoVWWS.jpg',1,'2025-11-04 12:48:23','2025-11-04 12:48:23'),
(3,'Cheikh Fall','Consultant en communication','J’ai été impressionné par l’organisation et la qualité des causeries. Les échanges avec les jeunes sont riches et motivants. Une expérience à renouveler !','temoignages/U2a429SA4WQqtwdsRYB93LDYsfc5stUzcgDnCibM.jpg',1,'2025-11-04 12:49:06','2025-11-04 12:49:06'),
(4,'Fatoumata Ndiaye','Étudiante en sciences sociales','Les ateliers de sensibilisation de CJSEN sont très pertinents. Ils permettent de mieux comprendre les enjeux de la jeunesse et de participer activement à la société.','temoignages/CTeRWHRq3inxgZbitdZbBvI64uSSf2DHmwx1Hv7b.jpg',1,'2025-11-04 12:49:54','2025-11-04 12:49:54'),
(5,'Thierno Abou TALL','Étudiant en informatique','plokijuhygtfrezedrftgyhujkilomù','temoignages/kMwEcQvVZ1JaV2Q1Rz58v1B7JTxXL85nVDAr1xZ6.jpg',0,'2025-11-07 10:10:26','2025-11-07 11:56:56'),
(6,'Samba DRAME','Étudiant en informatique','Ceci est mon témoignage.','temoignages/1764069550_IMG-20250804-WA0030.jpg',0,'2025-11-25 10:13:44','2025-11-25 10:19:49');
/*!40000 ALTER TABLE `temoignages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'CJSEN','contact@cjsen.com',NULL,'$2y$12$xurFsyrAeB.k4PvIM8NkNONKzxRG27akDO7BTg4rIEhKv3EmVNBPa','C7XCHvHYBtYhcX2KPygJlnRDLgaFJbVRmPRyyrdMJ1wwEwcHBpZbUVfsMSI8','2025-08-19 13:56:20','2025-12-01 13:10:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES
(1,'Allocution du Président CJSEN Mounirou TALL','https://youtu.be/0GXlg8saaOA?si=GxDLC0TgoCYP6ESc','2025-10-28 09:44:39','2025-10-28 09:45:51'),
(2,'Reportage CJSEN 1er partie Keur Moussa','https://youtu.be/WOoWiBAQgOY?si=NsTN_OPGZnY8GsaH','2025-10-28 09:56:12','2025-10-28 09:56:12'),
(3,'Témoignages des membres de CJSEN sur la distribution de kids scolaires','https://youtu.be/kOHwDTWs9uo?si=XNgY3ZB_-FIMCX6A','2025-10-28 09:57:04','2025-10-28 09:59:16'),
(5,'Elan Pro 2025-2026','https://youtu.be/gu_fxCsxylY?si=PW0JSaSp0bg8eVIw','2026-07-03 08:44:56','2026-07-03 08:44:56'),
(6,'La Voix du Colibri – Épisode 1 Avec Mme Ndeye Yacine DIAGNE (CEO AGRIMAGE).','https://youtu.be/Zu8Q3KaG9iw?si=V0cHVUfIKu-fD9sJ','2026-07-03 08:46:22','2026-07-03 08:46:22'),
(7,'Sen Carrefour Jeunesse célèbre la Journée Internationale de la Jeunesse 🌍✨','https://youtu.be/zzOQzB_dm8M?si=u5A8hbp0d-axNC6C','2026-07-03 08:47:27','2026-07-03 08:47:27'),
(8,'Sen Carrefour Jeunesse : L’immobilier, une opportunité d’orientation pour les jeunes.','https://youtu.be/ZndIlyZiNb0?si=ghAHcF03e7pEgkyA','2026-07-03 09:04:38','2026-07-03 09:04:38'),
(9,'2ème édition Randonnée Pédestre - Sen Carrefour Jeunesse (CJSEN)','https://youtu.be/YqLUiS1BMes','2026-07-03 09:20:53','2026-07-03 09:20:53');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-06  3:17:00
