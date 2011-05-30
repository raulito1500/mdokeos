-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: dokeos_main
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.10

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
-- Table structure for table `access_url`
--

DROP TABLE IF EXISTS `access_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_url` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `description` text,
  `active` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_url`
--

LOCK TABLES `access_url` WRITE;
/*!40000 ALTER TABLE `access_url` DISABLE KEYS */;
INSERT INTO `access_url` VALUES (1,'http://localhost/',' ',1,1,'2011-04-20 21:45:46');
/*!40000 ALTER TABLE `access_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `access_url_rel_course`
--

DROP TABLE IF EXISTS `access_url_rel_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_url_rel_course` (
  `access_url_id` int(10) unsigned NOT NULL,
  `course_code` char(40) NOT NULL,
  PRIMARY KEY (`access_url_id`,`course_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_url_rel_course`
--

LOCK TABLES `access_url_rel_course` WRITE;
/*!40000 ALTER TABLE `access_url_rel_course` DISABLE KEYS */;
INSERT INTO `access_url_rel_course` VALUES (1,'0001');
/*!40000 ALTER TABLE `access_url_rel_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `access_url_rel_session`
--

DROP TABLE IF EXISTS `access_url_rel_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_url_rel_session` (
  `access_url_id` int(10) unsigned NOT NULL,
  `session_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`access_url_id`,`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_url_rel_session`
--

LOCK TABLES `access_url_rel_session` WRITE;
/*!40000 ALTER TABLE `access_url_rel_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `access_url_rel_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `access_url_rel_user`
--

DROP TABLE IF EXISTS `access_url_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `access_url_rel_user` (
  `access_url_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`access_url_id`,`user_id`),
  KEY `idx_access_url_rel_user_user` (`user_id`),
  KEY `idx_access_url_rel_user_access_url` (`access_url_id`),
  KEY `idx_access_url_rel_user_access_url_user` (`user_id`,`access_url_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_url_rel_user`
--

LOCK TABLES `access_url_rel_user` WRITE;
/*!40000 ALTER TABLE `access_url_rel_user` DISABLE KEYS */;
INSERT INTO `access_url_rel_user` VALUES (1,3),(1,4);
/*!40000 ALTER TABLE `access_url_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(40) DEFAULT '',
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_user`
--

DROP TABLE IF EXISTS `class_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_user` (
  `class_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`class_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_user`
--

LOCK TABLES `class_user` WRITE;
/*!40000 ALTER TABLE `class_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `code` varchar(40) NOT NULL,
  `directory` varchar(40) DEFAULT NULL,
  `db_name` varchar(40) DEFAULT NULL,
  `course_language` varchar(20) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` text,
  `category_code` varchar(40) DEFAULT NULL,
  `visibility` tinyint(4) DEFAULT '0',
  `show_score` int(11) NOT NULL DEFAULT '1',
  `tutor_name` varchar(200) DEFAULT NULL,
  `visual_code` varchar(40) DEFAULT NULL,
  `department_name` varchar(30) DEFAULT NULL,
  `department_url` varchar(180) DEFAULT NULL,
  `disk_quota` int(10) unsigned DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `last_edit` datetime DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `target_course_code` varchar(40) DEFAULT NULL,
  `subscribe` tinyint(4) NOT NULL DEFAULT '1',
  `unsubscribe` tinyint(4) NOT NULL DEFAULT '1',
  `registration_code` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES ('0001','0001','dokeos_0001','spanish','HTML5','Escriba aquí la descripción que aparecerá en la lista de los cursos','PC',2,0,'Stefany Adarme','0001',NULL,NULL,50000000,'2011-05-09 08:37:20','2011-05-09 08:36:16','2011-05-09 08:36:16','2012-05-08 08:36:14',NULL,1,0,'');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_category`
--

DROP TABLE IF EXISTS `course_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `code` varchar(40) NOT NULL DEFAULT '',
  `parent_id` varchar(40) DEFAULT NULL,
  `tree_pos` int(10) unsigned DEFAULT NULL,
  `children_count` smallint(6) DEFAULT NULL,
  `auth_course_child` enum('TRUE','FALSE') DEFAULT 'TRUE',
  `auth_cat_child` enum('TRUE','FALSE') DEFAULT 'TRUE',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`),
  KEY `tree_pos` (`tree_pos`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_category`
--

LOCK TABLES `course_category` WRITE;
/*!40000 ALTER TABLE `course_category` DISABLE KEYS */;
INSERT INTO `course_category` VALUES (1,'Language skills','LANG',NULL,1,0,'TRUE','TRUE'),(2,'PC Skills','PC',NULL,2,0,'TRUE','TRUE'),(3,'Projects','PROJ',NULL,3,0,'TRUE','TRUE');
/*!40000 ALTER TABLE `course_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_field`
--

DROP TABLE IF EXISTS `course_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_type` int(11) NOT NULL DEFAULT '1',
  `field_variable` varchar(64) NOT NULL,
  `field_display_text` varchar(64) DEFAULT NULL,
  `field_default_value` text,
  `field_order` int(11) DEFAULT NULL,
  `field_visible` tinyint(4) DEFAULT '0',
  `field_changeable` tinyint(4) DEFAULT '0',
  `field_filter` tinyint(4) DEFAULT '0',
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_field`
--

LOCK TABLES `course_field` WRITE;
/*!40000 ALTER TABLE `course_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_field_values`
--

DROP TABLE IF EXISTS `course_field_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_field_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(40) NOT NULL,
  `field_id` int(11) NOT NULL,
  `field_value` text,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_field_values`
--

LOCK TABLES `course_field_values` WRITE;
/*!40000 ALTER TABLE `course_field_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_field_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_module`
--

DROP TABLE IF EXISTS `course_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `row` int(10) unsigned NOT NULL DEFAULT '0',
  `column` int(10) unsigned NOT NULL DEFAULT '0',
  `position` varchar(20) NOT NULL DEFAULT 'basic',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_module`
--

LOCK TABLES `course_module` WRITE;
/*!40000 ALTER TABLE `course_module` DISABLE KEYS */;
INSERT INTO `course_module` VALUES (1,'calendar_event','calendar/agenda.php','agenda.gif',1,1,'basic'),(2,'link','link/link.php','links.gif',4,1,'basic'),(3,'document','document/document.php','documents.gif',3,1,'basic'),(4,'student_publication','work/work.php','works.gif',3,2,'basic'),(5,'announcement','announcements/announcements.php','valves.gif',2,1,'basic'),(6,'user','user/user.php','members.gif',2,3,'basic'),(7,'forum','forum/index.php','forum.gif',1,2,'basic'),(8,'quiz','exercice/exercice.php','quiz.gif',2,2,'basic'),(9,'group','group/group.php','group.gif',3,3,'basic'),(10,'course_description','course_description/','info.gif',1,3,'basic'),(11,'chat','chat/chat.php','chat.gif',0,0,'external'),(12,'dropbox','dropbox/index.php','dropbox.gif',4,2,'basic'),(13,'tracking','tracking/courseLog.php','statistics.gif',1,3,'courseadmin'),(14,'homepage_link','link/link.php?action=addlink','npage.gif',1,1,'courseadmin'),(15,'course_setting','course_info/infocours.php','reference.gif',1,1,'courseadmin'),(16,'External','','external.gif',0,0,'external'),(17,'AddedLearnpath','','scormbuilder.gif',0,0,'external'),(18,'conference','conference/index.php?type=conference','conf.gif',0,0,'external'),(19,'conference','conference/index.php?type=classroom','conf.gif',0,0,'external'),(20,'learnpath','newscorm/lp_controller.php','scorm.gif',5,1,'basic'),(21,'blog','blog/blog.php','blog.gif',1,2,'basic'),(22,'blog_management','blog/blog_admin.php','blog_admin.gif',1,2,'courseadmin'),(23,'course_maintenance','course_info/maintenance.php','backup.gif',2,3,'courseadmin'),(24,'survey','survey/survey_list.php','survey.gif',2,1,'basic'),(25,'wiki','wiki/index.php','wiki.gif',2,3,'basic'),(26,'gradebook','gradebook/index.php','gradebook.gif',2,2,'basic'),(27,'glossary','glossary/index.php','glossary.gif',2,1,'basic'),(28,'notebook','notebook/index.php','notebook.gif',2,1,'basic');
/*!40000 ALTER TABLE `course_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_rel_class`
--

DROP TABLE IF EXISTS `course_rel_class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_rel_class` (
  `course_code` char(40) NOT NULL,
  `class_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`course_code`,`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_rel_class`
--

LOCK TABLES `course_rel_class` WRITE;
/*!40000 ALTER TABLE `course_rel_class` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_rel_class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_rel_user`
--

DROP TABLE IF EXISTS `course_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_rel_user` (
  `course_code` varchar(40) NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '5',
  `role` varchar(60) DEFAULT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `tutor_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `user_course_cat` int(11) DEFAULT '0',
  PRIMARY KEY (`course_code`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_rel_user`
--

LOCK TABLES `course_rel_user` WRITE;
/*!40000 ALTER TABLE `course_rel_user` DISABLE KEYS */;
INSERT INTO `course_rel_user` VALUES ('0001',4,1,'Profesor',0,1,1,0),('0001',1,1,NULL,0,0,1,0);
/*!40000 ALTER TABLE `course_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_category`
--

DROP TABLE IF EXISTS `gradebook_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text,
  `user_id` int(11) NOT NULL,
  `course_code` varchar(40) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `weight` smallint(6) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `certif_min_score` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `document_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_category`
--

LOCK TABLES `gradebook_category` WRITE;
/*!40000 ALTER TABLE `gradebook_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_certificate`
--

DROP TABLE IF EXISTS `gradebook_certificate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_certificate` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `score_certificate` float unsigned NOT NULL DEFAULT '0',
  `date_certificate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `path_certificate` text,
  PRIMARY KEY (`id`),
  KEY `idx_gradebook_certificate_category_id` (`cat_id`),
  KEY `idx_gradebook_certificate_user_id` (`user_id`),
  KEY `idx_gradebook_certificate_category_id_user_id` (`cat_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_certificate`
--

LOCK TABLES `gradebook_certificate` WRITE;
/*!40000 ALTER TABLE `gradebook_certificate` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_certificate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_evaluation`
--

DROP TABLE IF EXISTS `gradebook_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_evaluation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text,
  `user_id` int(11) NOT NULL,
  `course_code` varchar(40) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT '0',
  `weight` smallint(6) NOT NULL,
  `max` float unsigned NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `type` varchar(40) NOT NULL DEFAULT 'evaluation',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_evaluation`
--

LOCK TABLES `gradebook_evaluation` WRITE;
/*!40000 ALTER TABLE `gradebook_evaluation` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_link`
--

DROP TABLE IF EXISTS `gradebook_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_code` varchar(40) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` int(11) DEFAULT NULL,
  `weight` smallint(6) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_link`
--

LOCK TABLES `gradebook_link` WRITE;
/*!40000 ALTER TABLE `gradebook_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_linkeval_log`
--

DROP TABLE IF EXISTS `gradebook_linkeval_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_linkeval_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_linkeval_log` int(11) NOT NULL,
  `name` text,
  `description` text,
  `date_log` int(11) DEFAULT NULL,
  `weight` smallint(6) DEFAULT NULL,
  `visible` tinyint(4) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `user_id_log` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_linkeval_log`
--

LOCK TABLES `gradebook_linkeval_log` WRITE;
/*!40000 ALTER TABLE `gradebook_linkeval_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_linkeval_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_result`
--

DROP TABLE IF EXISTS `gradebook_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `evaluation_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `score` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_result`
--

LOCK TABLES `gradebook_result` WRITE;
/*!40000 ALTER TABLE `gradebook_result` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_result_log`
--

DROP TABLE IF EXISTS `gradebook_result_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_result_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_result` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `evaluation_id` int(11) NOT NULL,
  `date_log` datetime DEFAULT '0000-00-00 00:00:00',
  `score` float unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_result_log`
--

LOCK TABLES `gradebook_result_log` WRITE;
/*!40000 ALTER TABLE `gradebook_result_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_result_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gradebook_score_display`
--

DROP TABLE IF EXISTS `gradebook_score_display`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gradebook_score_display` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` float unsigned NOT NULL,
  `display` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gradebook_score_display`
--

LOCK TABLES `gradebook_score_display` WRITE;
/*!40000 ALTER TABLE `gradebook_score_display` DISABLE KEYS */;
/*!40000 ALTER TABLE `gradebook_score_display` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `original_name` varchar(255) DEFAULT NULL,
  `english_name` varchar(255) DEFAULT NULL,
  `isocode` varchar(10) DEFAULT NULL,
  `dokeos_folder` varchar(250) DEFAULT NULL,
  `available` tinyint(4) NOT NULL DEFAULT '1',
  `parent_id` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_language_dokeos_folder` (`dokeos_folder`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'Arabija (el)','arabic','ar','arabic',0,NULL),(2,'Asturian','asturian','ast','asturian',0,NULL),(3,'Balgarski','bulgarian','bg','bulgarian',0,NULL),(4,'Bosanski','bosnian','bs','bosnian',1,NULL),(5,'Catal&agrave;','catalan','ca','catalan',0,NULL),(6,'Chinese (simplified)','simpl_chinese','zh','simpl_chinese',0,NULL),(7,'Czech','czech','cs','czech',0,NULL),(8,'Dansk','danish','da','danish',0,NULL),(9,'Dari','dari','prs','dari',0,NULL),(10,'Deutsch','german','de','german',1,NULL),(11,'Ellinika','greek','el','greek',0,NULL),(12,'English','english','en','english',1,NULL),(13,'Espa&ntilde;ol','spanish','es','spanish',1,NULL),(14,'Esperanto','esperanto','eo','esperanto',0,NULL),(15,'Euskara','euskera','eu','euskera',0,NULL),(16,'Farsi','persian','fa','persian',0,NULL),(17,'Fran&ccedil;ais','french','fr','french',1,NULL),(18,'Friulian','friulian','fur','friulian',0,NULL),(19,'Galego','galician','gl','galician',0,NULL),(20,'Georgian','georgian','ka','georgian',0,NULL),(21,'Hrvatski','croatian','hr','croatian',0,NULL),(22,'Hebrew','hebrew','he','hebrew',0,NULL),(23,'Indonesia (Bahasa I.)','indonesian','id','indonesian',1,NULL),(24,'Italiano','italian','it','italian',1,NULL),(25,'Korean','korean','ko','korean',0,NULL),(26,'Latvian','latvian','lv','latvian',0,NULL),(27,'Lithuanian','lithuanian','lt','lithuanian',0,NULL),(28,'Macedonian','macedonian','mk','macedonian',0,NULL),(29,'Magyar','hungarian','hu','hungarian',1,NULL),(30,'Melayu (Bahasa M.)','malay','ms','malay',0,NULL),(31,'Nederlands','dutch','nl','dutch',1,NULL),(32,'Nihongo','japanese','ja','japanese',0,NULL),(33,'Norsk','norwegian','no','norwegian',0,NULL),(34,'Pashto','pashto','ps','pashto',0,NULL),(35,'Polski','polish','pl','polish',0,NULL),(36,'Portugu&ecirc;s (Portugal)','portuguese','pt','portuguese',1,NULL),(37,'Portugu&ecirc;s (Brazil)','brazilian','pt-BR','brazilian',1,NULL),(38,'Romanian','romanian','ro','romanian',0,NULL),(39,'Runasimi','quechua_cusco','qu','quechua_cusco',0,NULL),(40,'Russkij','russian','ru','russian',0,NULL),(41,'Slovak','slovak','sk','slovak',0,NULL),(42,'Slovenscina','slovenian','sl','slovenian',1,NULL),(43,'Srpski','serbian','sr','serbian',0,NULL),(44,'Suomi','finnish','fi','finnish',0,NULL),(45,'Svenska','swedish','sv','swedish',0,NULL),(46,'Thai','thai','th','thai',0,NULL),(47,'T&uuml;rk&ccedil;e','turkce','tr','turkce',0,NULL),(48,'Ukrainian','ukrainian','uk','ukrainian',0,NULL),(49,'Vi&ecirc;t (Ti&ecirc;ng V.)','vietnamese','vi','vietnamese',0,NULL),(50,'Swahili (kiSw.)','swahili','sw','swahili',0,NULL),(51,'Yoruba','yoruba','yo','yoruba',0,NULL);
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legal`
--

DROP TABLE IF EXISTS `legal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legal` (
  `legal_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `date` int(11) NOT NULL DEFAULT '0',
  `content` text,
  `type` int(11) NOT NULL,
  `changes` text NOT NULL,
  `version` int(11) DEFAULT NULL,
  PRIMARY KEY (`legal_id`,`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legal`
--

LOCK TABLES `legal` WRITE;
/*!40000 ALTER TABLE `legal` DISABLE KEYS */;
/*!40000 ALTER TABLE `legal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_sender_id` int(10) unsigned NOT NULL,
  `user_receiver_id` int(10) unsigned NOT NULL,
  `msg_status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `send_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_message_user_sender` (`user_sender_id`),
  KEY `idx_message_user_receiver` (`user_receiver_id`),
  KEY `idx_message_user_sender_user_receiver` (`user_sender_id`,`user_receiver_id`),
  KEY `idx_message_msg_status` (`msg_status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `openid_association`
--

DROP TABLE IF EXISTS `openid_association`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `openid_association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idp_endpoint_uri` text NOT NULL,
  `session_type` varchar(30) NOT NULL,
  `assoc_handle` text NOT NULL,
  `assoc_type` text NOT NULL,
  `expires_in` bigint(20) NOT NULL,
  `mac_key` text NOT NULL,
  `created` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `openid_association`
--

LOCK TABLES `openid_association` WRITE;
/*!40000 ALTER TABLE `openid_association` DISABLE KEYS */;
/*!40000 ALTER TABLE `openid_association` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `php_session`
--

DROP TABLE IF EXISTS `php_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `php_session` (
  `session_id` varchar(32) NOT NULL DEFAULT '',
  `session_name` varchar(10) NOT NULL DEFAULT '',
  `session_time` int(11) NOT NULL DEFAULT '0',
  `session_start` int(11) NOT NULL DEFAULT '0',
  `session_value` mediumtext NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `php_session`
--

LOCK TABLES `php_session` WRITE;
/*!40000 ALTER TABLE `php_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `php_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_category`
--

DROP TABLE IF EXISTS `reservation_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_category`
--

LOCK TABLES `reservation_category` WRITE;
/*!40000 ALTER TABLE `reservation_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_category_rights`
--

DROP TABLE IF EXISTS `reservation_category_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_category_rights` (
  `category_id` int(11) NOT NULL DEFAULT '0',
  `class_id` int(11) NOT NULL DEFAULT '0',
  `m_items` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`,`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_category_rights`
--

LOCK TABLES `reservation_category_rights` WRITE;
/*!40000 ALTER TABLE `reservation_category_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_category_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_item`
--

DROP TABLE IF EXISTS `reservation_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `course_code` varchar(40) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `blackout` tinyint(4) NOT NULL DEFAULT '0',
  `creator` int(10) unsigned NOT NULL DEFAULT '0',
  `always_available` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_item`
--

LOCK TABLES `reservation_item` WRITE;
/*!40000 ALTER TABLE `reservation_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_item_rights`
--

DROP TABLE IF EXISTS `reservation_item_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_item_rights` (
  `item_id` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` int(10) unsigned NOT NULL DEFAULT '0',
  `edit_right` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `delete_right` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `m_reservation` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `view_right` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_id`,`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_item_rights`
--

LOCK TABLES `reservation_item_rights` WRITE;
/*!40000 ALTER TABLE `reservation_item_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_item_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_main`
--

DROP TABLE IF EXISTS `reservation_main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_main` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subid` int(10) unsigned NOT NULL DEFAULT '0',
  `item_id` int(10) unsigned NOT NULL DEFAULT '0',
  `auto_accept` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `max_users` int(10) unsigned NOT NULL DEFAULT '1',
  `start_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `subscribe_from` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `subscribe_until` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `subscribers` int(10) unsigned NOT NULL DEFAULT '0',
  `notes` text NOT NULL,
  `timepicker` tinyint(4) NOT NULL DEFAULT '0',
  `timepicker_min` int(11) NOT NULL DEFAULT '0',
  `timepicker_max` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_main`
--

LOCK TABLES `reservation_main` WRITE;
/*!40000 ALTER TABLE `reservation_main` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_subscription`
--

DROP TABLE IF EXISTS `reservation_subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_subscription` (
  `dummy` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `reservation_id` int(10) unsigned NOT NULL DEFAULT '0',
  `accepted` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `start_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`dummy`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_subscription`
--

LOCK TABLES `reservation_subscription` WRITE;
/*!40000 ALTER TABLE `reservation_subscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search_engine_ref`
--

DROP TABLE IF EXISTS `search_engine_ref`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search_engine_ref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(40) NOT NULL,
  `tool_id` varchar(100) NOT NULL,
  `ref_id_high_level` int(11) NOT NULL,
  `ref_id_second_level` int(11) DEFAULT NULL,
  `search_did` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search_engine_ref`
--

LOCK TABLES `search_engine_ref` WRITE;
/*!40000 ALTER TABLE `search_engine_ref` DISABLE KEYS */;
/*!40000 ALTER TABLE `search_engine_ref` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_coach` int(10) unsigned NOT NULL DEFAULT '0',
  `name` char(50) NOT NULL DEFAULT '',
  `nbr_courses` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nbr_users` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `nbr_classes` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `date_start` date NOT NULL DEFAULT '0000-00-00',
  `date_end` date NOT NULL DEFAULT '0000-00-00',
  `nb_days_access_before_beginning` tinyint(3) unsigned DEFAULT '0',
  `nb_days_access_after_end` tinyint(3) unsigned DEFAULT '0',
  `session_admin_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `session_admin_id` (`session_admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_field`
--

DROP TABLE IF EXISTS `session_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_type` int(11) NOT NULL DEFAULT '1',
  `field_variable` varchar(64) NOT NULL,
  `field_display_text` varchar(64) DEFAULT NULL,
  `field_default_value` text,
  `field_order` int(11) DEFAULT NULL,
  `field_visible` tinyint(4) DEFAULT '0',
  `field_changeable` tinyint(4) DEFAULT '0',
  `field_filter` tinyint(4) DEFAULT '0',
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_field`
--

LOCK TABLES `session_field` WRITE;
/*!40000 ALTER TABLE `session_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_field_values`
--

DROP TABLE IF EXISTS `session_field_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_field_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `field_value` text,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_field_values`
--

LOCK TABLES `session_field_values` WRITE;
/*!40000 ALTER TABLE `session_field_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_field_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_rel_course`
--

DROP TABLE IF EXISTS `session_rel_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_rel_course` (
  `id_session` smallint(5) unsigned NOT NULL DEFAULT '0',
  `course_code` char(40) NOT NULL DEFAULT '',
  `id_coach` int(10) unsigned NOT NULL DEFAULT '0',
  `nbr_users` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_session`,`course_code`),
  KEY `course_code` (`course_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_rel_course`
--

LOCK TABLES `session_rel_course` WRITE;
/*!40000 ALTER TABLE `session_rel_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_rel_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_rel_course_rel_user`
--

DROP TABLE IF EXISTS `session_rel_course_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_rel_course_rel_user` (
  `id_session` smallint(5) unsigned NOT NULL DEFAULT '0',
  `course_code` char(40) NOT NULL DEFAULT '',
  `id_user` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_session`,`course_code`,`id_user`),
  KEY `id_user` (`id_user`),
  KEY `course_code` (`course_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_rel_course_rel_user`
--

LOCK TABLES `session_rel_course_rel_user` WRITE;
/*!40000 ALTER TABLE `session_rel_course_rel_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_rel_course_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_rel_user`
--

DROP TABLE IF EXISTS `session_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_rel_user` (
  `id_session` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_session`,`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_rel_user`
--

LOCK TABLES `session_rel_user` WRITE;
/*!40000 ALTER TABLE `session_rel_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `session_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings_current`
--

DROP TABLE IF EXISTS `settings_current`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings_current` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `variable` varchar(255) DEFAULT NULL,
  `subkey` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `selected_value` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `comment` varchar(255) DEFAULT NULL,
  `scope` varchar(50) DEFAULT NULL,
  `subkeytext` varchar(255) DEFAULT NULL,
  `access_url` int(10) unsigned NOT NULL DEFAULT '1',
  `access_url_changeable` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_setting` (`variable`,`subkey`,`category`,`access_url`),
  KEY `access_url` (`access_url`)
) ENGINE=MyISAM AUTO_INCREMENT=174 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings_current`
--

LOCK TABLES `settings_current` WRITE;
/*!40000 ALTER TABLE `settings_current` DISABLE KEYS */;
INSERT INTO `settings_current` VALUES (1,'Institution',NULL,'textfield','Platform','My Organisation','InstitutionTitle','InstitutionComment','platform',NULL,1,1),(2,'InstitutionUrl',NULL,'textfield','Platform','http://www.dokeos.com','InstitutionUrlTitle','InstitutionUrlComment',NULL,NULL,1,1),(3,'siteName',NULL,'textfield','Platform','My campus','SiteNameTitle','SiteNameComment',NULL,NULL,1,1),(4,'emailAdministrator',NULL,'textfield','Platform','henry.stivens@gmail.com','emailAdministratorTitle','emailAdministratorComment',NULL,NULL,1,1),(5,'administratorSurname',NULL,'textfield','Platform','Doe','administratorSurnameTitle','administratorSurnameComment',NULL,NULL,1,1),(6,'administratorName',NULL,'textfield','Platform','John','administratorNameTitle','administratorNameComment',NULL,NULL,1,1),(7,'show_administrator_data',NULL,'radio','Platform','true','ShowAdministratorDataTitle','ShowAdministratorDataComment',NULL,NULL,1,1),(8,'show_tutor_data',NULL,'radio','Platform','true','ShowTutorDataTitle','ShowTutorDataComment',NULL,NULL,1,1),(9,'show_teacher_data',NULL,'radio','Platform','true','ShowTeacherDataTitle','ShowTeacherDataComment',NULL,NULL,1,1),(10,'homepage_view',NULL,'radio','Course','activity','HomepageViewTitle','HomepageViewComment',NULL,NULL,1,0),(11,'show_toolshortcuts',NULL,'radio','Course','false','ShowToolShortcutsTitle','ShowToolShortcutsComment',NULL,NULL,1,0),(12,'allow_group_categories',NULL,'radio','Course','false','AllowGroupCategories','AllowGroupCategoriesComment',NULL,NULL,1,0),(13,'server_type',NULL,'radio','Platform','production','ServerStatusTitle','ServerStatusComment',NULL,NULL,1,0),(14,'platformLanguage',NULL,'link','Languages','spanish','PlatformLanguageTitle','PlatformLanguageComment',NULL,NULL,1,0),(15,'showonline','world','checkbox','Platform','true','ShowOnlineTitle','ShowOnlineComment',NULL,'ShowOnlineWorld',1,0),(16,'showonline','users','checkbox','Platform','true','ShowOnlineTitle','ShowOnlineComment',NULL,'ShowOnlineUsers',1,0),(17,'showonline','course','checkbox','Platform','true','ShowOnlineTitle','ShowOnlineComment',NULL,'ShowOnlineCourse',1,0),(18,'profile','name','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'name',1,0),(19,'profile','officialcode','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'officialcode',1,0),(20,'profile','email','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'Email',1,0),(21,'profile','picture','checkbox','User','true','ProfileChangesTitle','ProfileChangesComment',NULL,'UserPicture',1,0),(22,'profile','login','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'Login',1,0),(23,'profile','password','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'UserPassword',1,0),(24,'profile','language','checkbox','User','true','ProfileChangesTitle','ProfileChangesComment',NULL,'Language',1,0),(25,'default_document_quotum',NULL,'textfield','Course','50000000','DefaultDocumentQuotumTitle','DefaultDocumentQuotumComment',NULL,NULL,1,0),(26,'registration','officialcode','checkbox','User','false','RegistrationRequiredFormsTitle','RegistrationRequiredFormsComment',NULL,'OfficialCode',1,0),(27,'registration','email','checkbox','User','true','RegistrationRequiredFormsTitle','RegistrationRequiredFormsComment',NULL,'Email',1,0),(28,'registration','language','checkbox','User','true','RegistrationRequiredFormsTitle','RegistrationRequiredFormsComment',NULL,'Language',1,0),(29,'default_group_quotum',NULL,'textfield','Course','5000000','DefaultGroupQuotumTitle','DefaultGroupQuotumComment',NULL,NULL,1,0),(30,'allow_registration',NULL,'radio','Platform','true','AllowRegistrationTitle','AllowRegistrationComment',NULL,NULL,1,0),(31,'allow_registration_as_teacher',NULL,'radio','Platform','true','AllowRegistrationAsTeacherTitle','AllowRegistrationAsTeacherComment',NULL,NULL,1,0),(32,'allow_lostpassword',NULL,'radio','Platform','true','AllowLostPasswordTitle','AllowLostPasswordComment',NULL,NULL,1,0),(33,'allow_user_headings',NULL,'radio','Course','false','AllowUserHeadings','AllowUserHeadingsComment',NULL,NULL,1,0),(34,'course_create_active_tools','course_description','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'CourseDescription',1,0),(35,'course_create_active_tools','agenda','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Agenda',1,0),(36,'course_create_active_tools','documents','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Documents',1,0),(37,'course_create_active_tools','learning_path','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'LearningPath',1,0),(38,'course_create_active_tools','links','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Links',1,0),(39,'course_create_active_tools','announcements','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Announcements',1,0),(40,'course_create_active_tools','forums','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Forums',1,0),(41,'course_create_active_tools','dropbox','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Dropbox',1,0),(42,'course_create_active_tools','quiz','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Quiz',1,0),(43,'course_create_active_tools','users','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Users',1,0),(44,'course_create_active_tools','groups','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Groups',1,0),(45,'course_create_active_tools','chat','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Chat',1,0),(46,'course_create_active_tools','online_conference','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'OnlineConference',1,0),(47,'course_create_active_tools','student_publications','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'StudentPublications',1,0),(48,'allow_personal_agenda',NULL,'radio','User','false','AllowPersonalAgendaTitle','AllowPersonalAgendaComment',NULL,NULL,1,0),(49,'display_coursecode_in_courselist',NULL,'radio','Platform','true','DisplayCourseCodeInCourselistTitle','DisplayCourseCodeInCourselistComment',NULL,NULL,1,0),(50,'display_teacher_in_courselist',NULL,'radio','Platform','true','DisplayTeacherInCourselistTitle','DisplayTeacherInCourselistComment',NULL,NULL,1,0),(51,'use_document_title',NULL,'radio','Tools','false','UseDocumentTitleTitle','UseDocumentTitleComment',NULL,NULL,1,0),(52,'permanently_remove_deleted_files',NULL,'radio','Tools','false','PermanentlyRemoveFilesTitle','PermanentlyRemoveFilesComment',NULL,NULL,1,0),(53,'dropbox_allow_overwrite',NULL,'radio','Tools','true','DropboxAllowOverwriteTitle','DropboxAllowOverwriteComment',NULL,NULL,1,0),(54,'dropbox_max_filesize',NULL,'textfield','Tools','100000000','DropboxMaxFilesizeTitle','DropboxMaxFilesizeComment',NULL,NULL,1,0),(55,'dropbox_allow_just_upload',NULL,'radio','Tools','true','DropboxAllowJustUploadTitle','DropboxAllowJustUploadComment',NULL,NULL,1,0),(56,'dropbox_allow_student_to_student',NULL,'radio','Tools','true','DropboxAllowStudentToStudentTitle','DropboxAllowStudentToStudentComment',NULL,NULL,1,0),(57,'dropbox_allow_group',NULL,'radio','Tools','true','DropboxAllowGroupTitle','DropboxAllowGroupComment',NULL,NULL,1,0),(58,'dropbox_allow_mailing',NULL,'radio','Tools','false','DropboxAllowMailingTitle','DropboxAllowMailingComment',NULL,NULL,1,0),(59,'administratorTelephone',NULL,'textfield','Platform','(000) 001 02 03','administratorTelephoneTitle','administratorTelephoneComment',NULL,NULL,1,1),(60,'extended_profile',NULL,'radio','User','true','ExtendedProfileTitle','ExtendedProfileComment',NULL,NULL,1,0),(61,'student_view_enabled',NULL,'radio','Platform','true','StudentViewEnabledTitle','StudentViewEnabledComment',NULL,NULL,1,0),(62,'show_navigation_menu',NULL,'radio','Course','false','ShowNavigationMenuTitle','ShowNavigationMenuComment',NULL,NULL,1,0),(63,'enable_tool_introduction',NULL,'radio','course','false','EnableToolIntroductionTitle','EnableToolIntroductionComment',NULL,NULL,1,0),(64,'page_after_login',NULL,'radio','Platform','user_portal.php','PageAfterLoginTitle','PageAfterLoginComment',NULL,NULL,1,0),(65,'time_limit_whosonline',NULL,'textfield','Platform','30','TimeLimitWhosonlineTitle','TimeLimitWhosonlineComment',NULL,NULL,1,0),(66,'breadcrumbs_course_homepage',NULL,'radio','Course','course_title','BreadCrumbsCourseHomepageTitle','BreadCrumbsCourseHomepageComment',NULL,NULL,1,0),(67,'example_material_course_creation',NULL,'radio','Platform','true','ExampleMaterialCourseCreationTitle','ExampleMaterialCourseCreationComment',NULL,NULL,1,0),(68,'account_valid_duration',NULL,'textfield','Platform','3660','AccountValidDurationTitle','AccountValidDurationComment',NULL,NULL,1,0),(69,'use_session_mode',NULL,'radio','Platform','true','UseSessionModeTitle','UseSessionModeComment',NULL,NULL,1,0),(70,'allow_email_editor',NULL,'radio','Tools','false','AllowEmailEditorTitle','AllowEmailEditorComment',NULL,NULL,1,0),(71,'registered',NULL,'textfield',NULL,'false','',NULL,NULL,NULL,1,0),(72,'donotlistcampus',NULL,'textfield',NULL,'false','',NULL,NULL,NULL,1,0),(73,'show_email_addresses',NULL,'radio','Platform','false','ShowEmailAddresses','ShowEmailAddressesComment',NULL,NULL,1,1),(74,'profile','phone','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'phone',1,0),(75,'service_visio','active','radio',NULL,'false','VisioEnable','',NULL,NULL,1,0),(76,'service_visio','visio_host','textfield',NULL,'','VisioHost','',NULL,NULL,1,0),(77,'service_visio','visio_port','textfield',NULL,'1935','VisioPort','',NULL,NULL,1,0),(78,'service_visio','visio_pass','textfield',NULL,'','VisioPassword','',NULL,NULL,1,0),(79,'service_ppt2lp','active','radio',NULL,'false','ppt2lp_actived','',NULL,NULL,1,0),(80,'service_ppt2lp','host','textfield',NULL,NULL,'Host',NULL,NULL,NULL,1,0),(81,'service_ppt2lp','port','textfield',NULL,'2002','Port',NULL,NULL,NULL,1,0),(82,'service_ppt2lp','user','textfield',NULL,NULL,'UserOnHost',NULL,NULL,NULL,1,0),(83,'service_ppt2lp','ftp_password','textfield',NULL,NULL,'FtpPassword',NULL,NULL,NULL,1,0),(84,'service_ppt2lp','path_to_lzx','textfield',NULL,NULL,'',NULL,NULL,NULL,1,0),(85,'service_ppt2lp','size','radio',NULL,'720x540','',NULL,NULL,NULL,1,0),(86,'wcag_anysurfer_public_pages',NULL,'radio','Platform','false','PublicPagesComplyToWAITitle','PublicPagesComplyToWAIComment',NULL,NULL,1,0),(87,'stylesheets',NULL,'textfield','stylesheets','dokeos_classic_mobile','',NULL,NULL,NULL,1,1),(88,'upload_extensions_list_type',NULL,'radio','Security','blacklist','UploadExtensionsListType','UploadExtensionsListTypeComment',NULL,NULL,1,0),(89,'upload_extensions_blacklist',NULL,'textfield','Security','','UploadExtensionsBlacklist','UploadExtensionsBlacklistComment',NULL,NULL,1,0),(90,'upload_extensions_whitelist',NULL,'textfield','Security','htm;html;jpg;jpeg;gif;png;swf;avi;mpg;mpeg;mov;flv;doc;docx;xls;xlsx;ppt;pptx;odt;odp;ods;pdf','UploadExtensionsWhitelist','UploadExtensionsWhitelistComment',NULL,NULL,1,0),(91,'upload_extensions_skip',NULL,'radio','Security','true','UploadExtensionsSkip','UploadExtensionsSkipComment',NULL,NULL,1,0),(92,'upload_extensions_replace_by',NULL,'textfield','Security','dangerous','UploadExtensionsReplaceBy','UploadExtensionsReplaceByComment',NULL,NULL,1,0),(93,'show_number_of_courses',NULL,'radio','Platform','false','ShowNumberOfCourses','ShowNumberOfCoursesComment',NULL,NULL,1,0),(94,'show_empty_course_categories',NULL,'radio','Platform','true','ShowEmptyCourseCategories','ShowEmptyCourseCategoriesComment',NULL,NULL,1,0),(95,'show_back_link_on_top_of_tree',NULL,'radio','Platform','false','ShowBackLinkOnTopOfCourseTree','ShowBackLinkOnTopOfCourseTreeComment',NULL,NULL,1,0),(96,'show_different_course_language',NULL,'radio','Platform','true','ShowDifferentCourseLanguage','ShowDifferentCourseLanguageComment',NULL,NULL,1,1),(97,'split_users_upload_directory',NULL,'radio','Tuning','false','SplitUsersUploadDirectory','SplitUsersUploadDirectoryComment',NULL,NULL,1,0),(98,'hide_dltt_markup',NULL,'radio','Platform','true','HideDLTTMarkup','HideDLTTMarkupComment',NULL,NULL,1,0),(99,'display_categories_on_homepage',NULL,'radio','Platform','false','DisplayCategoriesOnHomepageTitle','DisplayCategoriesOnHomepageComment',NULL,NULL,1,1),(100,'permissions_for_new_directories',NULL,'textfield','Security','0777','PermissionsForNewDirs','PermissionsForNewDirsComment',NULL,NULL,1,0),(101,'permissions_for_new_files',NULL,'textfield','Security','0666','PermissionsForNewFiles','PermissionsForNewFilesComment',NULL,NULL,1,0),(102,'show_tabs','campus_homepage','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsCampusHomepage',1,1),(103,'show_tabs','my_courses','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsMyCourses',1,1),(104,'show_tabs','reporting','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsReporting',1,1),(105,'show_tabs','platform_administration','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsPlatformAdministration',1,1),(106,'show_tabs','my_agenda','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsMyAgenda',1,1),(107,'show_tabs','my_profile','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsMyProfile',1,1),(108,'default_forum_view',NULL,'radio','Course','flat','DefaultForumViewTitle','DefaultForumViewComment',NULL,NULL,1,0),(109,'platform_charset',NULL,'textfield','Platform','iso-8859-15','PlatformCharsetTitle','PlatformCharsetComment','platform',NULL,1,0),(110,'noreply_email_address','','textfield','Platform','','NoReplyEmailAddress','NoReplyEmailAddressComment',NULL,NULL,1,0),(111,'survey_email_sender_noreply','','radio','Course','coach','SurveyEmailSenderNoReply','SurveyEmailSenderNoReplyComment',NULL,NULL,1,0),(112,'openid_authentication',NULL,'radio','Security','false','OpenIdAuthentication','OpenIdAuthenticationComment',NULL,NULL,1,0),(113,'profile','openid','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'OpenIDURL',1,0),(114,'gradebook_enable',NULL,'radio','Gradebook','false','GradebookActivation','GradebookActivationComment',NULL,NULL,1,0),(115,'show_tabs','my_gradebook','checkbox','Platform','true','ShowTabsTitle','ShowTabsComment',NULL,'TabsMyGradebook',1,1),(116,'gradebook_score_display_coloring','my_display_coloring','checkbox','Gradebook','false','GradebookScoreDisplayColoring','GradebookScoreDisplayColoringComment',NULL,'TabsGradebookEnableColoring',1,0),(117,'gradebook_score_display_custom','my_display_custom','checkbox','Gradebook','false','GradebookScoreDisplayCustom','GradebookScoreDisplayCustomComment',NULL,'TabsGradebookEnableCustom',1,0),(118,'gradebook_score_display_colorsplit',NULL,'textfield','Gradebook','50','GradebookScoreDisplayColorSplit','GradebookScoreDisplayColorSplitComment',NULL,NULL,1,0),(119,'gradebook_score_display_upperlimit','my_display_upperlimit','checkbox','Gradebook','false','GradebookScoreDisplayUpperLimit','GradebookScoreDisplayUpperLimitComment',NULL,'TabsGradebookEnableUpperLimit',1,0),(120,'user_selected_theme',NULL,'radio','Platform','false','UserThemeSelection','UserThemeSelectionComment',NULL,NULL,1,0),(121,'profile','theme','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'UserTheme',1,0),(122,'allow_course_theme',NULL,'radio','Course','true','AllowCourseThemeTitle','AllowCourseThemeComment',NULL,NULL,1,0),(123,'display_mini_month_calendar',NULL,'radio','Tools','true','DisplayMiniMonthCalendarTitle','DisplayMiniMonthCalendarComment',NULL,NULL,1,0),(124,'display_upcoming_events',NULL,'radio','Tools','true','DisplayUpcomingEventsTitle','DisplayUpcomingEventsComment',NULL,NULL,1,0),(125,'number_of_upcoming_events',NULL,'textfield','Tools','1','NumberOfUpcomingEventsTitle','NumberOfUpcomingEventsComment',NULL,NULL,1,0),(126,'show_closed_courses',NULL,'radio','Platform','false','ShowClosedCoursesTitle','ShowClosedCoursesComment',NULL,NULL,1,0),(127,'ldap_main_server_address',NULL,'textfield','LDAP','localhost','LDAPMainServerAddressTitle','LDAPMainServerAddressComment',NULL,NULL,1,0),(128,'ldap_main_server_port',NULL,'textfield','LDAP','389','LDAPMainServerPortTitle','LDAPMainServerPortComment',NULL,NULL,1,0),(129,'ldap_domain',NULL,'textfield','LDAP','dc=nodomain','LDAPDomainTitle','LDAPDomainComment',NULL,NULL,1,0),(130,'ldap_replicate_server_address',NULL,'textfield','LDAP','localhost','LDAPReplicateServerAddressTitle','LDAPReplicateServerAddressComment',NULL,NULL,1,0),(131,'ldap_replicate_server_port',NULL,'textfield','LDAP','389','LDAPReplicateServerPortTitle','LDAPReplicateServerPortComment',NULL,NULL,1,0),(132,'ldap_search_term',NULL,'textfield','LDAP','','LDAPSearchTermTitle','LDAPSearchTermComment',NULL,NULL,1,0),(133,'ldap_version',NULL,'radio','LDAP','3','LDAPVersionTitle','LDAPVersionComment',NULL,'',1,0),(134,'ldap_filled_tutor_field',NULL,'textfield','LDAP','employeenumber','LDAPFilledTutorFieldTitle','LDAPFilledTutorFieldComment',NULL,'',1,0),(135,'ldap_authentication_login',NULL,'textfield','LDAP','','LDAPAuthenticationLoginTitle','LDAPAuthenticationLoginComment',NULL,'',1,0),(136,'ldap_authentication_password',NULL,'textfield','LDAP','','LDAPAuthenticationPasswordTitle','LDAPAuthenticationPasswordComment',NULL,'',1,0),(137,'service_visio','visio_use_rtmpt','radio',NULL,'false','VisioUseRtmptTitle','VisioUseRtmptComment',NULL,NULL,1,0),(138,'extendedprofile_registration','mycomptetences','checkbox','User','false','ExtendedProfileRegistrationTitle','ExtendedProfileRegistrationComment',NULL,'MyCompetences',1,0),(139,'extendedprofile_registration','mydiplomas','checkbox','User','false','ExtendedProfileRegistrationTitle','ExtendedProfileRegistrationComment',NULL,'MyDiplomas',1,0),(140,'extendedprofile_registration','myteach','checkbox','User','false','ExtendedProfileRegistrationTitle','ExtendedProfileRegistrationComment',NULL,'MyTeach',1,0),(141,'extendedprofile_registration','mypersonalopenarea','checkbox','User','false','ExtendedProfileRegistrationTitle','ExtendedProfileRegistrationComment',NULL,'MyPersonalOpenArea',1,0),(142,'extendedprofile_registrationrequired','mycomptetences','checkbox','User','false','ExtendedProfileRegistrationRequiredTitle','ExtendedProfileRegistrationRequiredComment',NULL,'MyCompetences',1,0),(143,'extendedprofile_registrationrequired','mydiplomas','checkbox','User','false','ExtendedProfileRegistrationRequiredTitle','ExtendedProfileRegistrationRequiredComment',NULL,'MyDiplomas',1,0),(144,'extendedprofile_registrationrequired','myteach','checkbox','User','false','ExtendedProfileRegistrationRequiredTitle','ExtendedProfileRegistrationRequiredComment',NULL,'MyTeach',1,0),(145,'extendedprofile_registrationrequired','mypersonalopenarea','checkbox','User','false','ExtendedProfileRegistrationRequiredTitle','ExtendedProfileRegistrationRequiredComment',NULL,'MyPersonalOpenArea',1,0),(146,'ldap_filled_tutor_field_value',NULL,'textfield','LDAP','','LDAPFilledTutorFieldValueTitle','LDAPFilledTutorFieldValueComment',NULL,'',1,0),(147,'registration','phone','textfield','User','false','RegistrationRequiredFormsTitle','RegistrationRequiredFormsComment',NULL,'Phone',1,0),(148,'add_users_by_coach',NULL,'radio','Security','false','AddUsersByCoachTitle','AddUsersByCoachComment',NULL,NULL,1,0),(149,'extend_rights_for_coach',NULL,'radio','Security','false','ExtendRightsForCoachTitle','ExtendRightsForCoachComment',NULL,NULL,1,0),(150,'extend_rights_for_coach_on_survey',NULL,'radio','Security','true','ExtendRightsForCoachOnSurveyTitle','ExtendRightsForCoachOnSurveyComment',NULL,NULL,1,0),(151,'course_create_active_tools','wiki','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Wiki',1,0),(152,'show_session_coach',NULL,'radio','Platform','false','ShowSessionCoachTitle','ShowSessionCoachComment',NULL,NULL,1,0),(153,'course_create_active_tools','gradebook','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Gradebook',1,0),(154,'allow_users_to_create_courses',NULL,'radio','Platform','true','AllowUsersToCreateCoursesTitle','AllowUsersToCreateCoursesComment',NULL,NULL,1,0),(155,'course_create_active_tools','survey','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Survey',1,0),(156,'course_create_active_tools','glossary','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Glossary',1,0),(157,'course_create_active_tools','notebook','checkbox','Tools','true','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Notebook',1,0),(158,'advanced_filemanager',NULL,'radio','Platform','false','AdvancedFileManagerTitle','AdvancedFileManagerComment',NULL,NULL,1,0),(159,'allow_reservation',NULL,'radio','Tools','false','AllowReservationTitle','AllowReservationComment',NULL,NULL,1,0),(160,'profile','apikeys','checkbox','User','false','ProfileChangesTitle','ProfileChangesComment',NULL,'ApiKeys',1,0),(161,'allow_message_tool',NULL,'radio','Tools','false','AllowMessageToolTitle','AllowMessageToolComment',NULL,NULL,1,0),(162,'allow_social_tool',NULL,'radio','Tools','false','AllowSocialToolTitle','AllowSocialToolComment',NULL,NULL,1,0),(163,'allow_students_to_browse_courses',NULL,'radio','Platform','true','AllowStudentsToBrowseCoursesTitle','AllowStudentsToBrowseCoursesComment',NULL,NULL,1,1),(164,'allow_use_sub_language',NULL,'radio','Platform','false','AllowUseSubLanguageTitle','AllowUseSubLanguageComment',NULL,NULL,1,0),(165,'show_glossary_in_documents',NULL,'radio','Course','none','ShowGlossaryInDocumentsTitle','ShowGlossaryInDocumentsComment',NULL,NULL,1,1),(166,'allow_terms_conditions',NULL,'radio','Platform','false','AllowTermsAndConditionsTitle','AllowTermsAndConditionsComment',NULL,NULL,1,0),(167,'show_tutor_data',NULL,'radio','Platform','true','ShowTutorDataTitle','ShowTutorDataComment',NULL,NULL,1,1),(168,'show_teacher_data',NULL,'radio','Platform','true','ShowTeacherDataTitle','ShowTeacherDataComment',NULL,NULL,1,1),(169,'course_create_active_tools','enable_search','checkbox','Tools','false','CourseCreateActiveToolsTitle','CourseCreateActiveToolsComment',NULL,'Search',1,0),(170,'search_enabled',NULL,'radio','Tools','false','EnableSearchTitle','EnableSearchComment',NULL,NULL,1,1),(171,'search_prefilter_prefix',NULL,NULL,'Search','','SearchPrefilterPrefix','SearchPrefilterPrefixComment',NULL,NULL,1,0),(172,'search_show_unlinked_results',NULL,'radio','Search','true','SearchShowUnlinkedResultsTitle','SearchShowUnlinkedResultsComment',NULL,NULL,1,1),(173,'dokeos_database_version',NULL,'textfield',NULL,'1.8.6.1.8225','DokeosDatabaseVersion','',NULL,NULL,1,0);
/*!40000 ALTER TABLE `settings_current` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings_options`
--

DROP TABLE IF EXISTS `settings_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `variable` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `display_text` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `unique_setting_option` (`variable`,`value`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings_options`
--

LOCK TABLES `settings_options` WRITE;
/*!40000 ALTER TABLE `settings_options` DISABLE KEYS */;
INSERT INTO `settings_options` VALUES (1,'show_administrator_data','true','Yes'),(2,'show_administrator_data','false','No'),(3,'show_tutor_data','true','Yes'),(4,'show_tutor_data','false','No'),(5,'show_teacher_data','true','Yes'),(6,'show_teacher_data','false','No'),(7,'homepage_view','activity','HomepageViewActivity'),(8,'homepage_view','2column','HomepageView2column'),(9,'homepage_view','3column','HomepageView3column'),(10,'show_toolshortcuts','true','Yes'),(11,'show_toolshortcuts','false','No'),(12,'allow_group_categories','true','Yes'),(13,'allow_group_categories','false','No'),(14,'server_type','production','ProductionServer'),(15,'server_type','test','TestServer'),(16,'allow_name_change','true','Yes'),(17,'allow_name_change','false','No'),(18,'allow_officialcode_change','true','Yes'),(19,'allow_officialcode_change','false','No'),(20,'allow_registration','true','Yes'),(21,'allow_registration','false','No'),(22,'allow_registration','approval','AfterApproval'),(23,'allow_registration_as_teacher','true','Yes'),(24,'allow_registration_as_teacher','false','No'),(25,'allow_lostpassword','true','Yes'),(26,'allow_lostpassword','false','No'),(27,'allow_user_headings','true','Yes'),(28,'allow_user_headings','false','No'),(29,'allow_personal_agenda','true','Yes'),(30,'allow_personal_agenda','false','No'),(31,'display_coursecode_in_courselist','true','Yes'),(32,'display_coursecode_in_courselist','false','No'),(33,'display_teacher_in_courselist','true','Yes'),(34,'display_teacher_in_courselist','false','No'),(35,'use_document_title','true','Yes'),(36,'use_document_title','false','No'),(37,'permanently_remove_deleted_files','true','YesWillDeletePermanently'),(38,'permanently_remove_deleted_files','false','NoWillDeletePermanently'),(39,'dropbox_allow_overwrite','true','Yes'),(40,'dropbox_allow_overwrite','false','No'),(41,'dropbox_allow_just_upload','true','Yes'),(42,'dropbox_allow_just_upload','false','No'),(43,'dropbox_allow_student_to_student','true','Yes'),(44,'dropbox_allow_student_to_student','false','No'),(45,'dropbox_allow_group','true','Yes'),(46,'dropbox_allow_group','false','No'),(47,'dropbox_allow_mailing','true','Yes'),(48,'dropbox_allow_mailing','false','No'),(49,'extended_profile','true','Yes'),(50,'extended_profile','false','No'),(51,'student_view_enabled','true','Yes'),(52,'student_view_enabled','false','No'),(53,'show_navigation_menu','false','No'),(54,'show_navigation_menu','icons','IconsOnly'),(55,'show_navigation_menu','text','TextOnly'),(56,'show_navigation_menu','iconstext','IconsText'),(57,'enable_tool_introduction','true','Yes'),(58,'enable_tool_introduction','false','No'),(59,'page_after_login','index.php','CampusHomepage'),(60,'page_after_login','user_portal.php','MyCourses'),(61,'breadcrumbs_course_homepage','get_lang','CourseHomepage'),(62,'breadcrumbs_course_homepage','course_code','CourseCode'),(63,'breadcrumbs_course_homepage','course_title','CourseTitle'),(64,'example_material_course_creation','true','Yes'),(65,'example_material_course_creation','false','No'),(66,'use_session_mode','true','Yes'),(67,'use_session_mode','false','No'),(68,'allow_email_editor','true','Yes'),(69,'allow_email_editor','false','No'),(70,'show_email_addresses','true','Yes'),(71,'show_email_addresses','false','No'),(72,'wcag_anysurfer_public_pages','true','Yes'),(73,'wcag_anysurfer_public_pages','false','No'),(74,'upload_extensions_list_type','blacklist','Blacklist'),(75,'upload_extensions_list_type','whitelist','Whitelist'),(76,'upload_extensions_skip','true','Remove'),(77,'upload_extensions_skip','false','Rename'),(78,'show_number_of_courses','true','Yes'),(79,'show_number_of_courses','false','No'),(80,'show_empty_course_categories','true','Yes'),(81,'show_empty_course_categories','false','No'),(82,'show_back_link_on_top_of_tree','true','Yes'),(83,'show_back_link_on_top_of_tree','false','No'),(84,'show_different_course_language','true','Yes'),(85,'show_different_course_language','false','No'),(86,'split_users_upload_directory','true','Yes'),(87,'split_users_upload_directory','false','No'),(88,'hide_dltt_markup','false','No'),(89,'hide_dltt_markup','true','Yes'),(90,'display_categories_on_homepage','true','Yes'),(91,'display_categories_on_homepage','false','No'),(92,'default_forum_view','flat','Flat'),(93,'default_forum_view','threaded','Threaded'),(94,'default_forum_view','nested','Nested'),(95,'survey_email_sender_noreply','coach','CourseCoachEmailSender'),(96,'survey_email_sender_noreply','noreply','NoReplyEmailSender'),(97,'openid_authentication','true','Yes'),(98,'openid_authentication','false','No'),(99,'gradebook_enable','true','Yes'),(100,'gradebook_enable','false','No'),(101,'user_selected_theme','true','Yes'),(102,'user_selected_theme','false','No'),(103,'allow_course_theme','true','Yes'),(104,'allow_course_theme','false','No'),(105,'display_mini_month_calendar','true','Yes'),(106,'display_mini_month_calendar','false','No'),(107,'display_upcoming_events','true','Yes'),(108,'display_upcoming_events','false','No'),(109,'show_closed_courses','true','Yes'),(110,'show_closed_courses','false','No'),(111,'ldap_version','2','LDAPVersion2'),(112,'ldap_version','3','LDAPVersion3'),(113,'visio_use_rtmpt','true','Yes'),(114,'visio_use_rtmpt','false','No'),(115,'add_users_by_coach','true','Yes'),(116,'add_users_by_coach','false','No'),(117,'extend_rights_for_coach','true','Yes'),(118,'extend_rights_for_coach','false','No'),(119,'extend_rights_for_coach_on_survey','true','Yes'),(120,'extend_rights_for_coach_on_survey','false','No'),(121,'show_session_coach','true','Yes'),(122,'show_session_coach','false','No'),(123,'allow_users_to_create_courses','true','Yes'),(124,'allow_users_to_create_courses','false','No'),(125,'breadcrumbs_course_homepage','session_name_and_course_title','SessionNameAndCourseTitle'),(126,'advanced_filemanager','true','Yes'),(127,'advanced_filemanager','false','No'),(128,'allow_reservation','true','Yes'),(129,'allow_reservation','false','No'),(130,'allow_message_tool','true','Yes'),(131,'allow_message_tool','false','No'),(132,'allow_social_tool','true','Yes'),(133,'allow_social_tool','false','No'),(134,'allow_students_to_browse_courses','true','Yes'),(135,'allow_students_to_browse_courses','false','No'),(136,'show_email_of_teacher_or_tutor ','true','Yes'),(137,'show_email_of_teacher_or_tutor ','false','No'),(138,'allow_use_sub_language','true','Yes'),(139,'allow_use_sub_language','false','No'),(140,'show_glossary_in_documents','none','ShowGlossaryInDocumentsIsNone'),(141,'show_glossary_in_documents','ismanual','ShowGlossaryInDocumentsIsManual'),(142,'show_glossary_in_documents','isautomatic','ShowGlossaryInDocumentsIsAutomatic'),(143,'allow_terms_conditions','true','Yes'),(144,'allow_terms_conditions','false','No'),(145,'search_enabled','true','Yes'),(146,'search_enabled','false','No'),(147,'search_show_unlinked_results','true','SearchShowUnlinkedResults'),(148,'search_show_unlinked_results','false','SearchHideUnlinkedResults');
/*!40000 ALTER TABLE `settings_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shared_survey`
--

DROP TABLE IF EXISTS `shared_survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shared_survey` (
  `survey_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `title` text,
  `subtitle` text,
  `author` varchar(250) DEFAULT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `template` varchar(20) DEFAULT NULL,
  `intro` text,
  `surveythanks` text,
  `creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `course_code` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`survey_id`),
  UNIQUE KEY `id` (`survey_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shared_survey`
--

LOCK TABLES `shared_survey` WRITE;
/*!40000 ALTER TABLE `shared_survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `shared_survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shared_survey_question`
--

DROP TABLE IF EXISTS `shared_survey_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shared_survey_question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL DEFAULT '0',
  `survey_question` text NOT NULL,
  `survey_question_comment` text NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT '',
  `display` varchar(10) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `code` varchar(40) NOT NULL DEFAULT '',
  `max_value` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shared_survey_question`
--

LOCK TABLES `shared_survey_question` WRITE;
/*!40000 ALTER TABLE `shared_survey_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `shared_survey_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shared_survey_question_option`
--

DROP TABLE IF EXISTS `shared_survey_question_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shared_survey_question_option` (
  `question_option_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `survey_id` int(11) NOT NULL DEFAULT '0',
  `option_text` text NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`question_option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shared_survey_question_option`
--

LOCK TABLES `shared_survey_question_option` WRITE;
/*!40000 ALTER TABLE `shared_survey_question_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `shared_survey_question_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specific_field`
--

DROP TABLE IF EXISTS `specific_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specific_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_specific_field__code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specific_field`
--

LOCK TABLES `specific_field` WRITE;
/*!40000 ALTER TABLE `specific_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `specific_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specific_field_values`
--

DROP TABLE IF EXISTS `specific_field_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specific_field_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(40) NOT NULL,
  `tool_id` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specific_field_values`
--

LOCK TABLES `specific_field_values` WRITE;
/*!40000 ALTER TABLE `specific_field_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `specific_field_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_announcement`
--

DROP TABLE IF EXISTS `sys_announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_announcement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_start` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_end` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visible_teacher` tinyint(4) NOT NULL DEFAULT '0',
  `visible_student` tinyint(4) NOT NULL DEFAULT '0',
  `visible_guest` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `lang` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_announcement`
--

LOCK TABLES `sys_announcement` WRITE;
/*!40000 ALTER TABLE `sys_announcement` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_calendar`
--

DROP TABLE IF EXISTS `sys_calendar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_calendar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text,
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_calendar`
--

LOCK TABLES `sys_calendar` WRITE;
/*!40000 ALTER TABLE `sys_calendar` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_calendar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_template`
--

DROP TABLE IF EXISTS `system_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_template` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `comment` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_template`
--

LOCK TABLES `system_template` WRITE;
/*!40000 ALTER TABLE `system_template` DISABLE KEYS */;
INSERT INTO `system_template` VALUES (1,'TemplateTitleCourseTitle','TemplateTitleCourseTitleDescription','coursetitle.gif','\n<head>\n            	{CSS}\n            	<style type=\"text/css\">\n            	.gris_title         	{\n            		color: silver;\n            	}            	\n            	h1\n            	{\n            		text-align: right;\n            	}\n				</style>\n  \n            </head>\n            <body>\n			<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n			<tbody>\n			<tr>			\n			<td style=\"vertical-align: middle; width: 50%;\" colspan=\"1\" rowspan=\"1\">\n				<h1>TITULUS 1<br>\n				<span class=\"gris_title\">TITULUS 2</span><br>\n				</h1>\n			</td>			\n			<td style=\"width: 50%;\">\n				<img style=\"width: 100px; height: 100px;\" alt=\"dokeos logo\" src=\"{COURSE_DIR}images/logo_dokeos.png\"></td>\n			</tr>\n			</tbody>\n			</table>\n			<p><br>\n			<br>\n			</p>\n			</body>\n'),(2,'TemplateTitleTeacher','TemplateTitleTeacherDescription','yourinstructor.gif','\n<head>\n                   {CSS}\n                   <style type=\"text/css\">	            \n	            	.text\n	            	{	            	\n	            		font-weight: normal;\n	            	}\n					</style>\n                </head>                    \n                <body>\n					<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n					<tbody>\n					<tr>\n					<td></td>\n					<td style=\"height: 33%;\"></td>\n					<td></td>\n					</tr>\n					<tr>\n					<td style=\"width: 25%;\"></td>\n					<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: right; font-weight: bold;\" colspan=\"1\" rowspan=\"1\">\n					<span class=\"text\">\n					<br>\n					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis pellentesque.</span>\n					</td>\n					<td style=\"width: 25%; font-weight: bold;\">\n					<img style=\"width: 180px; height: 241px;\" alt=\"trainer\" src=\"{COURSE_DIR}images/trainer/trainer_case.png \"></td>\n					</tr>\n					</tbody>\n					</table>\n					<p><br>\n					<br>\n					</p>\n				</body>	\n'),(3,'TemplateTitleLeftList','TemplateTitleListLeftListDescription','leftlist.gif','\n<head>\n	           {CSS}\n	       </head>		    \n		    <body>\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n				<tbody>\n				<tr>\n				<td style=\"width: 66%;\"></td>\n				<td style=\"vertical-align: bottom; width: 33%;\" colspan=\"1\" rowspan=\"4\">&nbsp;<img style=\"width: 180px; height: 248px;\" alt=\"trainer\" src=\"{COURSE_DIR}images/trainer/trainer_reads.png \"><br>\n				</td>\n				</tr>\n				<tr align=\"right\">\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 66%;\">Lorem\n				ipsum dolor sit amet.\n				</td>\n				</tr>\n				<tr align=\"right\">\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 66%;\">\n				Vivamus\n				a quam.&nbsp;<br>\n				</td>\n				</tr>\n				<tr align=\"right\">\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 66%;\">\n				Proin\n				a est stibulum ante ipsum.</td>\n				</tr>\n				</tbody>\n				</table>\n			<p><br>\n			<br>\n			</p>\n			</body> \n'),(4,'TemplateTitleLeftRightList','TemplateTitleLeftRightListDescription','leftrightlist.gif','\n\n<head>\n	           {CSS}\n		    </head>\n			<body>\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; height: 400px; width: 720px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n				<tbody>\n				<tr>\n				<td></td>\n				<td style=\"vertical-align: top;\" colspan=\"1\" rowspan=\"4\">&nbsp;<img style=\"width: 180px; height: 294px;\" alt=\"Trainer\" src=\"{COURSE_DIR}images/trainer/trainer_join_hands.png \"><br>\n				</td>\n				<td></td>\n				</tr>\n				<tr>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: right;\">Lorem\n				ipsum dolor sit amet.\n				</td>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: left;\">\n				Convallis\n				ut.&nbsp;Cras dui magna.</td>\n				</tr>\n				<tr>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: right;\">\n				Vivamus\n				a quam.&nbsp;<br>\n				</td>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: left;\">\n				Etiam\n				lacinia stibulum ante.<br>\n				</td>\n				</tr>\n				<tr>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: right;\">\n				Proin\n				a est stibulum ante ipsum.</td>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 33%; text-align: left;\">\n				Consectetuer\n				adipiscing elit. <br>\n				</td>\n				</tr>\n				</tbody>\n				</table>\n			<p><br>\n			<br>\n			</p>\n			</body> \n\n'),(5,'TemplateTitleRightList','TemplateTitleRightListDescription','rightlist.gif','\n	<head>\n	           {CSS}\n		    </head>\n		    <body style=\"direction: ltr;\">\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n				<tbody>\n				<tr>\n				<td style=\"vertical-align: bottom; width: 50%;\" colspan=\"1\" rowspan=\"4\"><img style=\"width: 300px; height: 199px;\" alt=\"trainer\" src=\"{COURSE_DIR}images/trainer/trainer_points_right.png\"><br>\n				</td>\n				<td style=\"width: 50%;\"></td>\n				</tr>\n				<tr>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; text-align: left; width: 50%;\">\n				Convallis\n				ut.&nbsp;Cras dui magna.</td>\n				</tr>\n				<tr>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; text-align: left; width: 50%;\">\n				Etiam\n				lacinia.<br>\n				</td>\n				</tr>\n				<tr>\n				<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; text-align: left; width: 50%;\">\n				Consectetuer\n				adipiscing elit. <br>\n				</td>\n				</tr>\n				</tbody>\n				</table>\n			<p><br>\n			<br>\n			</p>\n			</body>  \n'),(6,'TemplateTitleDiagram','TemplateTitleDiagramDescription','diagram.gif','\n	<head>\n	                   {CSS}\n				    </head>\n				    \n					<body>\n					<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n					<tbody>\n					<tr>\n					<td style=\"background: transparent url({IMG_DIR}faded_grey.png ) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; text-align: left; height: 33%; width: 33%;\">\n					<br>\n					Etiam\n					lacinia stibulum ante.\n					Convallis\n					ut.&nbsp;Cras dui magna.</td>\n					<td colspan=\"1\" rowspan=\"3\">\n						<img style=\"width: 350px; height: 267px;\" alt=\"Alaska chart\" src=\"{COURSE_DIR}images/diagrams/alaska_chart.png \"></td>\n					</tr>\n					<tr>\n					<td colspan=\"1\" rowspan=\"1\">\n					<img style=\"width: 300px; height: 199px;\" alt=\"trainer\" src=\"{COURSE_DIR}images/trainer/trainer_points_right.png \"></td>\n					</tr>\n					<tr>\n					</tr>\n					</tbody>\n					</table>\n					<p><br>\n					<br>\n					</p>\n					</body>				    \n'),(7,'TemplateTitleDesc','TemplateTitleCheckListDescription','description.gif','\n<head>\n	                   {CSS}\n				    </head>\n					<body>\n						<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n						<tbody>\n						<tr>\n						<td style=\"width: 50%; vertical-align: top;\">\n							<img style=\"width: 48px; height: 49px; float: left;\" alt=\"01\" src=\"{COURSE_DIR}images/small/01.png \" hspace=\"5\"><br>Lorem ipsum dolor sit amet<br><br><br>\n							<img style=\"width: 48px; height: 49px; float: left;\" alt=\"02\" src=\"{COURSE_DIR}images/small/02.png \" hspace=\"5\">\n							<br>Ut enim ad minim veniam<br><br><br>\n							<img style=\"width: 48px; height: 49px; float: left;\" alt=\"03\" src=\"{COURSE_DIR}images/small/03.png \" hspace=\"5\">Duis aute irure dolor in reprehenderit<br><br><br>\n							<img style=\"width: 48px; height: 49px; float: left;\" alt=\"04\" src=\"{COURSE_DIR}images/small/04.png \" hspace=\"5\">Neque porro quisquam est</td>\n							\n						<td style=\"vertical-align: top; width: 50%; text-align: right;\" colspan=\"1\" rowspan=\"1\">\n							<img style=\"width: 300px; height: 291px;\" alt=\"Gearbox\" src=\"{COURSE_DIR}images/diagrams/gearbox.jpg \"><br></td>\n						</tr><tr></tr>\n						</tbody>\n						</table>\n						<p><br>\n						<br>\n						</p>\n					</body>	\n'),(8,'TemplateTitleCycle','TemplateTitleCycleDescription','cyclechart.gif','\n<head>\n	               {CSS}\n	               <style>\n	               .title\n	               {\n	               	color: white; font-weight: bold;\n	               }\n	               </style>                    \n			    </head>\n			    	\n			    	    \n			    <body>\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"8\" cellspacing=\"6\">\n				<tbody>\n				<tr>\n					<td style=\"text-align: center; vertical-align: bottom; height: 10%;\" colspan=\"3\" rowspan=\"1\">\n						<img style=\"width: 250px; height: 76px;\" alt=\"arrow\" src=\"{COURSE_DIR}images/diagrams/top_arrow.png \">\n					</td>				\n				</tr>			\n				<tr>\n					<td style=\"height: 5%; width: 45%; vertical-align: top; background-color: rgb(153, 153, 153); text-align: center;\">\n						<span class=\"title\">Lorem ipsum</span>\n					</td>\n						\n					<td style=\"height: 5%; width: 10%;\"></td>					\n					<td style=\"height: 5%; vertical-align: top; background-color: rgb(153, 153, 153); text-align: center;\">\n						<span class=\"title\">Sed ut perspiciatis</span>\n					</td>\n				</tr>\n					<tr>\n						<td style=\"background-color: rgb(204, 204, 255); width: 45%; vertical-align: top;\">\n							<ul>\n								<li>dolor sit amet</li>\n								<li>consectetur adipisicing elit</li>\n								<li>sed do eiusmod tempor&nbsp;</li>\n								<li>adipisci velit, sed quia non numquam</li>\n								<li>eius modi tempora incidunt ut labore et dolore magnam</li>\n							</ul>\n				</td>			\n				<td style=\"width: 10%;\"></td>\n				<td style=\"background-color: rgb(204, 204, 255); width: 45%; vertical-align: top;\">\n					<ul>\n					<li>ut enim ad minim veniam</li>\n					<li>quis nostrud exercitation</li><li>ullamco laboris nisi ut</li>\n					<li> Quis autem vel eum iure reprehenderit qui in ea</li>\n					<li>voluptate velit esse quam nihil molestiae consequatur,</li>\n					</ul>\n					</td>\n					</tr>\n					<tr align=\"center\">\n					<td style=\"height: 10%; vertical-align: top;\" colspan=\"3\" rowspan=\"1\">\n					<img style=\"width: 250px; height: 76px;\" alt=\"arrow\" src=\"{COURSE_DIR}images/diagrams/bottom_arrow.png \">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;\n				</td>\n				</tr>			\n				</tbody>\n				</table>\n				<p><br>\n				<br>\n				</p>\n				</body>	\n'),(9,'TemplateTitleTimeline','TemplateTitleTimelineDescription','phasetimeline.gif','\n<head>\n               {CSS} \n				<style>\n				.title\n				{				\n					font-weight: bold; text-align: center; 	\n				}			\n				</style>                \n		    </head>	\n		    \n		    <body>\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"8\" cellspacing=\"5\">\n				<tbody>\n				<tr class=\"title\">				\n					<td style=\"vertical-align: top; height: 3%; background-color: rgb(224, 224, 224);\">Lorem ipsum</td>\n					<td style=\"height: 3%;\"></td>\n					<td style=\"vertical-align: top; height: 3%; background-color: rgb(237, 237, 237);\">Perspiciatis</td>\n					<td style=\"height: 3%;\"></td>\n					<td style=\"vertical-align: top; height: 3%; background-color: rgb(245, 245, 245);\">Nemo enim</td>\n				</tr>\n				\n				<tr>\n					<td style=\"vertical-align: top; width: 30%; background-color: rgb(224, 224, 224);\">\n						<ul>\n						<li>dolor sit amet</li>\n						<li>consectetur</li>\n						<li>adipisicing elit</li>\n					</ul>\n					<br>\n					</td>\n					<td>\n						<img style=\"width: 32px; height: 32px;\" alt=\"arrow\" src=\"{COURSE_DIR}images/small/arrow.png \">\n					</td>\n					\n					<td style=\"vertical-align: top; width: 30%; background-color: rgb(237, 237, 237);\">\n						<ul>\n							<li>ut labore</li>\n							<li>et dolore</li>\n							<li>magni dolores</li>\n						</ul>\n					</td>\n					<td>\n						<img style=\"width: 32px; height: 32px;\" alt=\"arrow\" src=\"{COURSE_DIR}images/small/arrow.png \">\n					</td>\n					\n					<td style=\"vertical-align: top; background-color: rgb(245, 245, 245); width: 30%;\">\n						<ul>\n							<li>neque porro</li>\n							<li>quisquam est</li>\n							<li>qui dolorem&nbsp;&nbsp;</li>\n						</ul>\n						<br><br>\n					</td>\n				</tr>\n				</tbody>\n				</table>\n			<p><br>\n			<br>\n			</p>\n			</body>\n'),(10,'TemplateTitleTable','TemplateTitleCheckListDescription','table.gif','\n<head>\n                   {CSS}\n                   <style type=\"text/css\">\n				.title\n				{\n					font-weight: bold; text-align: center;\n				}\n				\n				.items\n				{\n					text-align: right;\n				}	\n  				\n\n					</style>\n  \n			    </head>\n			    <body>\n			    <br />\n			   <h2>A table</h2>\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px;\" border=\"1\" cellpadding=\"5\" cellspacing=\"0\">\n				<tbody>\n				<tr class=\"title\">\n					<td>City</td>\n					<td>2005</td>\n					<td>2006</td>\n					<td>2007</td>\n					<td>2008</td>\n				</tr>\n				<tr class=\"items\">\n					<td>Lima</td>\n					<td>10,40</td>\n					<td>8,95</td>\n					<td>9,19</td>\n					<td>9,76</td>\n				</tr>\n				<tr class=\"items\">\n				<td>New York</td>\n					<td>18,39</td>\n					<td>17,52</td>\n					<td>16,57</td>\n					<td>16,60</td>\n				</tr>\n				<tr class=\"items\">\n				<td>Barcelona</td>\n					<td>0,10</td>\n					<td>0,10</td>\n					<td>0,05</td>\n					<td>0,05</td>\n				</tr>\n				<tr class=\"items\">\n				<td>Paris</td>\n					<td>3,38</td>\n					<td >3,63</td>\n					<td>3,63</td>\n					<td>3,54</td>\n				</tr>\n				</tbody>\n				</table>\n				<br>\n				</body>\n'),(11,'TemplateTitleAudio','TemplateTitleAudioDescription','audiocomment.gif','\n<head>\n               {CSS}                    \n		    </head>\n                   <body>\n					<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n					<tbody>\n					<tr>\n					<td>					\n					<div align=\"center\">\n					<span style=\"text-align: center;\">\n						<embed  type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" width=\"300\" height=\"20\" bgcolor=\"#FFFFFF\" src=\"{REL_PATH}main/inc/lib/mediaplayer/player.swf\" allowfullscreen=\"false\" allowscriptaccess=\"always\" flashvars=\"file={COURSE_DIR}audio/ListeningComprehension.mp3&amp;autostart=true\"></embed>\n                    </span></div>     \n					\n					<br>\n					</td>\n					<td colspan=\"1\" rowspan=\"3\"><br>\n						<img style=\"width: 300px; height: 341px; float: right;\" alt=\"image\" src=\"{COURSE_DIR}images/diagrams/head_olfactory_nerve.png \"><br></td>\n					</tr>\n					<tr>\n					<td colspan=\"1\" rowspan=\"1\">\n						<img style=\"width: 180px; height: 271px;\" alt=\"trainer\" src=\"{COURSE_DIR}images/trainer/trainer_glasses.png\"><br></td>\n					</tr>\n					<tr>\n					</tr>\n					</tbody>\n					</table>\n					<p><br>\n					<br>\n					</p>\n					</body>	\n'),(12,'TemplateTitleVideo','TemplateTitleVideoDescription','video.gif','\n<head>\n            	{CSS}\n			</head>\n			\n			<body>\n			<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 720px; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n			<tbody>\n			<tr>\n			<td style=\"width: 50%; vertical-align: top;\">\n\n 				<div style=\"text-align: center;\" id=\"player810625-parent\">\n					<div style=\"border-style: none; overflow: hidden; width: 320px; height: 240px; background-color: rgb(220, 220, 220);\">\n\n						<div id=\"player810625\">\n							<div id=\"player810625-config\" style=\"overflow: hidden; display: none; visibility: hidden; width: 0px; height: 0px;\">url={REL_PATH}main/default_course_document/video/flv/example.flv width=320 height=240 loop=false play=false downloadable=false fullscreen=true displayNavigation=true displayDigits=true align=left dispPlaylist=none playlistThumbs=false</div>\n						</div>\n\n						<embed\n							type=\"application/x-shockwave-flash\"\n							src=\"{REL_PATH}main/inc/lib/mediaplayer/player.swf\"\n							width=\"320\"\n							height=\"240\"\n							id=\"single\"\n							name=\"single\"\n							quality=\"high\"\n							allowfullscreen=\"true\"\n							flashvars=\"width=320&height=240&autostart=false&file={REL_PATH}main/default_course_document/video/flv/example.flv&repeat=false&image=&showdownload=false&link={REL_PATH}main/default_course_document/video/flv/example.flv&showdigits=true&shownavigation=true&logo=\"\n						/>\n\n					</div>\n				</div>\n\n			</td>\n			<td style=\"background: transparent url({IMG_DIR}faded_grey.png) repeat scroll center top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; vertical-align: top; width: 50%;\">\n			<h3><br>\n			</h3>\n			<h3>Lorem ipsum dolor sit amet</h3>\n				<ul>\n				<li>consectetur adipisicing elit</li>\n				<li>sed do eiusmod tempor incididunt</li>\n				<li>ut labore et dolore magna aliqua</li>\n				</ul>\n			<h3>Ut enim ad minim veniam</h3>\n				<ul>\n				<li>quis nostrud exercitation ullamco</li>\n				<li>laboris nisi ut aliquip ex ea commodo consequat</li>\n				<li>Excepteur sint occaecat cupidatat non proident</li>\n				</ul>\n			</td>\n			</tr>\n			</tbody>\n			</table>\n			<p><br>\n			<br>\n			</p>\n			 <style type=\"text/css\">body{}</style><!-- to fix a strange bug appearing with firefox when editing this template -->\n			</body>\n'),(13,'TemplateTitleFlash','TemplateTitleFlashDescription','flash.gif','\n<head>\n               {CSS}                    \n		    </head>				    \n		    <body>\n		    <center>\n				<table style=\"background: transparent url({IMG_DIR}faded_blue_horizontal.png ) repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; text-align: left; width: 100%; height: 400px;\" border=\"0\" cellpadding=\"15\" cellspacing=\"6\">\n				<tbody>\n					<tr>\n					<td align=\"center\">\n					<embed width=\"700\" height=\"300\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" src=\"{COURSE_DIR}flash/SpinEchoSequence.swf\" play=\"true\" loop=\"true\" menu=\"true\"></embed></span><br /> 				          													\n					</td>\n					</tr>\n				</tbody>\n				</table>\n				<p><br>\n				<br>\n				</p>\n			</center>\n			</body>\n');
/*!40000 ALTER TABLE `system_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `course_code` varchar(40) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ref_doc` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `templates`
--

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(60) DEFAULT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `auth_source` varchar(50) DEFAULT 'platform',
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '5',
  `official_code` varchar(40) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `picture_uri` varchar(250) DEFAULT NULL,
  `creator_id` int(10) unsigned DEFAULT NULL,
  `competences` text,
  `diplomas` text,
  `openarea` text,
  `teach` text,
  `productions` varchar(250) DEFAULT NULL,
  `chatcall_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `chatcall_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `chatcall_text` varchar(50) NOT NULL DEFAULT '',
  `language` varchar(40) DEFAULT NULL,
  `registration_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `expiration_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `openid` varchar(255) DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `hr_dept_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Doe','John','admin','e10adc3949ba59abbe56e057f20f883e','platform','henry.stivens@gmail.com',1,'ADMIN','(000) 001 02 03',NULL,1,NULL,NULL,NULL,NULL,NULL,0,'0000-00-00 00:00:00','','spanish','2011-04-20 16:45:46','0000-00-00 00:00:00',1,NULL,NULL,0),(2,'Anonymous','Joe','','','platform','anonymous@localhost',6,'anonymous',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,0,'0000-00-00 00:00:00','','spanish','2011-04-20 16:45:46','0000-00-00 00:00:00',1,NULL,NULL,0),(3,'Henry','Adarme','henrystivens','e10adc3949ba59abbe56e057f20f883e','platform','henrystivens@gmail.com',5,'','','',1,NULL,NULL,NULL,NULL,NULL,0,'0000-00-00 00:00:00','','spanish','2011-04-21 07:51:54','0000-00-00 00:00:00',1,NULL,NULL,0),(4,'Stefany','Adarme','stefy','e10adc3949ba59abbe56e057f20f883e','platform','stefy@gmail.com',1,'','','',1,NULL,NULL,NULL,NULL,NULL,0,'0000-00-00 00:00:00','','spanish','2011-04-21 09:01:56','0000-00-00 00:00:00',1,NULL,NULL,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_api_key`
--

DROP TABLE IF EXISTS `user_api_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_api_key` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `api_key` char(32) NOT NULL,
  `api_service` char(10) NOT NULL DEFAULT 'dokeos',
  PRIMARY KEY (`id`),
  KEY `idx_user_api_keys_user` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_api_key`
--

LOCK TABLES `user_api_key` WRITE;
/*!40000 ALTER TABLE `user_api_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_api_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_field`
--

DROP TABLE IF EXISTS `user_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_type` int(11) NOT NULL DEFAULT '1',
  `field_variable` varchar(64) NOT NULL,
  `field_display_text` varchar(64) DEFAULT NULL,
  `field_default_value` text,
  `field_order` int(11) DEFAULT NULL,
  `field_visible` tinyint(4) DEFAULT '0',
  `field_changeable` tinyint(4) DEFAULT '0',
  `field_filter` tinyint(4) DEFAULT '0',
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_field`
--

LOCK TABLES `user_field` WRITE;
/*!40000 ALTER TABLE `user_field` DISABLE KEYS */;
INSERT INTO `user_field` VALUES (1,1,'legal_accept','Legal',NULL,NULL,0,0,0,'2011-04-20 21:45:46');
/*!40000 ALTER TABLE `user_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_field_options`
--

DROP TABLE IF EXISTS `user_field_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_field_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `option_value` text,
  `option_display_text` varchar(64) DEFAULT NULL,
  `option_order` int(11) DEFAULT NULL,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_field_options`
--

LOCK TABLES `user_field_options` WRITE;
/*!40000 ALTER TABLE `user_field_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_field_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_field_values`
--

DROP TABLE IF EXISTS `user_field_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_field_values` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `field_id` int(11) NOT NULL,
  `field_value` text,
  `tms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_field_values`
--

LOCK TABLES `user_field_values` WRITE;
/*!40000 ALTER TABLE `user_field_values` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_field_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_friend`
--

DROP TABLE IF EXISTS `user_friend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_friend` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `friend_user_id` int(10) unsigned NOT NULL,
  `relation_type` int(11) NOT NULL DEFAULT '0',
  `last_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_friend_user` (`user_id`),
  KEY `idx_user_friend_friend_user` (`friend_user_id`),
  KEY `idx_user_friend_user_friend_user` (`user_id`,`friend_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_friend`
--

LOCK TABLES `user_friend` WRITE;
/*!40000 ALTER TABLE `user_friend` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_friend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_friend_relation_type`
--

DROP TABLE IF EXISTS `user_friend_relation_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_friend_relation_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_friend_relation_type`
--

LOCK TABLES `user_friend_relation_type` WRITE;
/*!40000 ALTER TABLE `user_friend_relation_type` DISABLE KEYS */;
INSERT INTO `user_friend_relation_type` VALUES (1,'SocialUnknow'),(2,'SocialParent'),(3,'SocialFriend'),(4,'SocialGoodFriend'),(5,'SocialEnemy'),(6,'SocialDeleted');
/*!40000 ALTER TABLE `user_friend_relation_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-05-30  9:33:51
