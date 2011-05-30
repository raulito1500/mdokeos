-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: dokeos_0001
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
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcement` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `content` mediumtext,
  `end_date` date DEFAULT NULL,
  `display_order` mediumint(9) NOT NULL DEFAULT '0',
  `email_sent` tinyint(4) DEFAULT '0',
  `session_id` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcement`
--

LOCK TABLES `announcement` WRITE;
/*!40000 ALTER TABLE `announcement` DISABLE KEYS */;
INSERT INTO `announcement` VALUES (1,'Este es un anuncio de ejemplo','Esto es un ejemplo de anuncio.','2011-05-09',1,0,0);
/*!40000 ALTER TABLE `announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog` (
  `blog_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `blog_name` varchar(250) NOT NULL DEFAULT '',
  `blog_subtitle` varchar(250) DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visibility` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table with blogs in this course';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_attachment`
--

DROP TABLE IF EXISTS `blog_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL COMMENT 'the real filename',
  `comment` text,
  `size` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL COMMENT 'the user s file name',
  `blog_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_attachment`
--

LOCK TABLES `blog_attachment` WRITE;
/*!40000 ALTER TABLE `blog_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comment`
--

DROP TABLE IF EXISTS `blog_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `comment` longtext NOT NULL,
  `author_id` int(11) NOT NULL DEFAULT '0',
  `date_creation` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `blog_id` mediumint(9) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL DEFAULT '0',
  `task_id` int(11) DEFAULT NULL,
  `parent_comment_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table with comments on posts in a blog';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comment`
--

LOCK TABLES `blog_comment` WRITE;
/*!40000 ALTER TABLE `blog_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `full_text` longtext NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `blog_id` mediumint(9) NOT NULL DEFAULT '0',
  `author_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table with posts / blog.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_post`
--

LOCK TABLES `blog_post` WRITE;
/*!40000 ALTER TABLE `blog_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_rating`
--

DROP TABLE IF EXISTS `blog_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL DEFAULT '0',
  `rating_type` enum('post','comment') NOT NULL DEFAULT 'post',
  `item_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `rating` mediumint(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rating_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table with ratings for post/comments in a certain blog';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_rating`
--

LOCK TABLES `blog_rating` WRITE;
/*!40000 ALTER TABLE `blog_rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_rel_user`
--

DROP TABLE IF EXISTS `blog_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_rel_user` (
  `blog_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`blog_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table representing users subscribed to a blog';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_rel_user`
--

LOCK TABLES `blog_rel_user` WRITE;
/*!40000 ALTER TABLE `blog_rel_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_task`
--

DROP TABLE IF EXISTS `blog_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_task` (
  `task_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `blog_id` mediumint(9) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `color` varchar(10) NOT NULL DEFAULT '',
  `system_task` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table with tasks for a blog';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_task`
--

LOCK TABLES `blog_task` WRITE;
/*!40000 ALTER TABLE `blog_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_task_rel_user`
--

DROP TABLE IF EXISTS `blog_task_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_task_rel_user` (
  `blog_id` mediumint(9) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `task_id` mediumint(9) NOT NULL DEFAULT '0',
  `target_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`blog_id`,`user_id`,`task_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Table with tasks assigned to a user in a blog';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_task_rel_user`
--

LOCK TABLES `blog_task_rel_user` WRITE;
/*!40000 ALTER TABLE `blog_task_rel_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_task_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendar_event`
--

DROP TABLE IF EXISTS `calendar_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendar_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text,
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `parent_event_id` int(11) DEFAULT NULL,
  `session_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar_event`
--

LOCK TABLES `calendar_event` WRITE;
/*!40000 ALTER TABLE `calendar_event` DISABLE KEYS */;
INSERT INTO `calendar_event` VALUES (1,'Creación del curso','El curso ha sido creado en esta fecha','2011-05-09 08:36:16','2011-05-09 08:36:16',NULL,0);
/*!40000 ALTER TABLE `calendar_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendar_event_attachment`
--

DROP TABLE IF EXISTS `calendar_event_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendar_event_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `comment` text,
  `size` int(11) NOT NULL DEFAULT '0',
  `agenda_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar_event_attachment`
--

LOCK TABLES `calendar_event_attachment` WRITE;
/*!40000 ALTER TABLE `calendar_event_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendar_event_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendar_event_repeat`
--

DROP TABLE IF EXISTS `calendar_event_repeat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendar_event_repeat` (
  `cal_id` int(11) NOT NULL DEFAULT '0',
  `cal_type` varchar(20) DEFAULT NULL,
  `cal_end` int(11) DEFAULT NULL,
  `cal_frequency` int(11) DEFAULT '1',
  `cal_days` char(7) DEFAULT NULL,
  PRIMARY KEY (`cal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar_event_repeat`
--

LOCK TABLES `calendar_event_repeat` WRITE;
/*!40000 ALTER TABLE `calendar_event_repeat` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendar_event_repeat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calendar_event_repeat_not`
--

DROP TABLE IF EXISTS `calendar_event_repeat_not`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendar_event_repeat_not` (
  `cal_id` int(11) NOT NULL,
  `cal_date` int(11) NOT NULL,
  PRIMARY KEY (`cal_id`,`cal_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendar_event_repeat_not`
--

LOCK TABLES `calendar_event_repeat_not` WRITE;
/*!40000 ALTER TABLE `calendar_event_repeat_not` DISABLE KEYS */;
/*!40000 ALTER TABLE `calendar_event_repeat_not` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat_connected`
--

DROP TABLE IF EXISTS `chat_connected`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_connected` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_connection` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_connected`
--

LOCK TABLES `chat_connected` WRITE;
/*!40000 ALTER TABLE `chat_connected` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat_connected` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_description`
--

DROP TABLE IF EXISTS `course_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_description` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_description`
--

LOCK TABLES `course_description` WRITE;
/*!40000 ALTER TABLE `course_description` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_setting`
--

DROP TABLE IF EXISTS `course_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `variable` varchar(255) NOT NULL DEFAULT '',
  `subkey` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `value` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `comment` varchar(255) DEFAULT NULL,
  `subkeytext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_setting`
--

LOCK TABLES `course_setting` WRITE;
/*!40000 ALTER TABLE `course_setting` DISABLE KEYS */;
INSERT INTO `course_setting` VALUES (1,'email_alert_manager_on_new_doc',NULL,NULL,'work','0','',NULL,NULL),(2,'email_alert_on_new_doc_dropbox',NULL,NULL,'dropbox','0','',NULL,NULL),(3,'allow_user_edit_agenda',NULL,NULL,'agenda','0','',NULL,NULL),(4,'allow_user_edit_announcement',NULL,NULL,'announcement','0','',NULL,NULL),(5,'email_alert_manager_on_new_quiz',NULL,NULL,'quiz','0','',NULL,NULL),(6,'allow_user_image_forum',NULL,NULL,'forum','1','',NULL,NULL),(7,'course_theme',NULL,NULL,'theme','','',NULL,NULL),(8,'allow_learning_path_theme',NULL,NULL,'theme','1','',NULL,NULL),(9,'allow_open_chat_window',NULL,NULL,'chat','0','',NULL,NULL),(10,'email_alert_to_teacher_on_new_user_in_course',NULL,NULL,'registration','0','',NULL,NULL);
/*!40000 ALTER TABLE `course_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document`
--

DROP TABLE IF EXISTS `document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL DEFAULT '',
  `comment` text,
  `title` varchar(255) DEFAULT NULL,
  `filetype` set('file','folder') NOT NULL DEFAULT 'file',
  `size` int(11) NOT NULL DEFAULT '0',
  `readonly` tinyint(3) unsigned NOT NULL,
  `session_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document`
--

LOCK TABLES `document` WRITE;
/*!40000 ALTER TABLE `document` DISABLE KEYS */;
INSERT INTO `document` VALUES (1,'/images',NULL,'Imágenes','folder',0,0,0),(2,'/images/gallery',NULL,'Imágenes por defecto','folder',0,0,0),(3,'/shared_folder',NULL,'Directorio de documentos compartidos','folder',0,0,0),(4,'/audio',NULL,'Audio','folder',0,0,0),(5,'/flash',NULL,'Flash','folder',0,0,0),(6,'/video',NULL,'Video','folder',0,0,0),(7,'/images/gallery/trainer',NULL,'trainer','folder',0,0,0),(8,'/images/gallery/mr_dokeos',NULL,'mr_dokeos','folder',0,0,0),(9,'/images/gallery/mr_dokeos/animated',NULL,'animated','folder',0,0,0),(10,'/images/gallery/diagrams',NULL,'diagrams','folder',0,0,0),(11,'/images/gallery/diagrams/animated',NULL,'animated','folder',0,0,0),(12,'/images/gallery/small',NULL,'small','folder',0,0,0),(13,'/images/gallery/trainer/trainer_face.png',NULL,'trainer_face.png','file',38924,0,0),(14,'/images/gallery/trainer/trainer_join_hands.png',NULL,'trainer_join_hands.png','file',37865,0,0),(15,'/images/gallery/trainer/trainer_glasses.png',NULL,'trainer_glasses.png','file',45939,0,0),(16,'/images/gallery/trainer/trainer_staring.png',NULL,'trainer_staring.png','file',22486,0,0),(17,'/images/gallery/trainer/trainer_join_left.png',NULL,'trainer_join_left.png','file',37600,0,0),(18,'/images/gallery/trainer/trainer_standing.png',NULL,'trainer_standing.png','file',31892,0,0),(19,'/images/gallery/trainer/trainer_chair.png',NULL,'trainer_chair.png','file',53450,0,0),(20,'/images/gallery/trainer/trainer_reads.png',NULL,'trainer_reads.png','file',30209,0,0),(21,'/images/gallery/trainer/trainer_smile.png',NULL,'trainer_smile.png','file',16683,0,0),(22,'/images/gallery/trainer/trainer_case.png',NULL,'trainer_case.png','file',33094,0,0),(23,'/images/gallery/trainer/trainer_points_left.png',NULL,'trainer_points_left.png','file',27068,0,0),(24,'/images/gallery/trainer/trainer_points_right.png',NULL,'trainer_points_right.png','file',26535,0,0),(25,'/images/gallery/emot_wink.jpg',NULL,'emot_wink.jpg','file',21552,0,0),(26,'/images/gallery/pencil.png',NULL,'pencil.png','file',4794,0,0),(27,'/images/gallery/logo_dokeos.png',NULL,'logo_dokeos.png','file',8387,0,0),(28,'/images/gallery/silhouette.png',NULL,'silhouette.png','file',4358,0,0),(29,'/images/gallery/book_highlight.jpg',NULL,'book_highlight.jpg','file',23635,0,0),(30,'/images/gallery/idea.jpg',NULL,'idea.jpg','file',20308,0,0),(31,'/images/gallery/male.jpg',NULL,'male.jpg','file',19132,0,0),(32,'/images/gallery/mr_dokeos/collaborative.png',NULL,'collaborative.png','file',35703,0,0),(33,'/images/gallery/mr_dokeos/teaching.jpg',NULL,'teaching.jpg','file',19512,0,0),(34,'/images/gallery/mr_dokeos/anim_teaching.jpg',NULL,'anim_teaching.jpg','file',34214,0,0),(35,'/images/gallery/mr_dokeos/thinking.jpg',NULL,'thinking.jpg','file',18384,0,0),(36,'/images/gallery/mr_dokeos/anim_thinking.jpg',NULL,'anim_thinking.jpg','file',28710,0,0),(37,'/images/gallery/mr_dokeos/collaborative_big.png',NULL,'collaborative_big.png','file',32541,0,0),(38,'/images/gallery/mr_dokeos/pointing_right.jpg',NULL,'pointing_right.jpg','file',18574,0,0),(39,'/images/gallery/mr_dokeos/writing.jpg',NULL,'writing.jpg','file',18580,0,0),(40,'/images/gallery/mr_dokeos/group.jpg',NULL,'group.jpg','file',20481,0,0),(41,'/images/gallery/mr_dokeos/reading.jpg',NULL,'reading.jpg','file',19006,0,0),(42,'/images/gallery/mr_dokeos/collaborating.jpg',NULL,'collaborating.jpg','file',20052,0,0),(43,'/images/gallery/mr_dokeos/animated/teacherAnim.gif',NULL,'teacherAnim.gif','file',20693,0,0),(44,'/images/gallery/mr_dokeos/animated/thinkerAnim.gif',NULL,'thinkerAnim.gif','file',32847,0,0),(45,'/images/gallery/mr_dokeos/animated/practicerAnim.gif',NULL,'practicerAnim.gif','file',22164,0,0),(46,'/images/gallery/mr_dokeos/animated/readerAnim.gif',NULL,'readerAnim.gif','file',15393,0,0),(47,'/images/gallery/mr_dokeos/animated/creativeAnim.gif',NULL,'creativeAnim.gif','file',15656,0,0),(48,'/images/gallery/mr_dokeos/animated/pointerAnim.gif',NULL,'pointerAnim.gif','file',24349,0,0),(49,'/images/gallery/mr_dokeos/practicing.jpg',NULL,'practicing.jpg','file',20816,0,0),(50,'/images/gallery/mr_dokeos/anim_pointing_left.jpg',NULL,'anim_pointing_left.jpg','file',19489,0,0),(51,'/images/gallery/mr_dokeos/anim_reading.jpg',NULL,'anim_reading.jpg','file',33330,0,0),(52,'/images/gallery/mr_dokeos/anim_writing.jpg',NULL,'anim_writing.jpg','file',32445,0,0),(53,'/images/gallery/mr_dokeos/mr_dokeosleft.png',NULL,'mr_dokeosleft.png','file',6858,0,0),(54,'/images/gallery/mr_dokeos/anim_practicing.jpg',NULL,'anim_practicing.jpg','file',38355,0,0),(55,'/images/gallery/mr_dokeos/anim_pointing_right.jpg',NULL,'anim_pointing_right.jpg','file',29795,0,0),(56,'/images/gallery/mr_dokeos/pointing_left.jpg',NULL,'pointing_left.jpg','file',18391,0,0),(57,'/images/gallery/bookcase.jpg',NULL,'bookcase.jpg','file',26783,0,0),(58,'/images/gallery/note.jpg',NULL,'note.jpg','file',10948,0,0),(59,'/images/gallery/diagrams/dokeos_stones.png',NULL,'dokeos_stones.png','file',95264,0,0),(60,'/images/gallery/diagrams/chainette_formule.jpg',NULL,'chainette_formule.jpg','file',14880,0,0),(61,'/images/gallery/diagrams/top_arrow.png',NULL,'top_arrow.png','file',2806,0,0),(62,'/images/gallery/diagrams/pc.jpg',NULL,'pc.jpg','file',13711,0,0),(63,'/images/gallery/diagrams/spectre.jpg',NULL,'spectre.jpg','file',27391,0,0),(64,'/images/gallery/diagrams/accident_1.png',NULL,'accident_1.png','file',151329,0,0),(65,'/images/gallery/diagrams/coccidioides.jpg',NULL,'coccidioides.jpg','file',27833,0,0),(66,'/images/gallery/diagrams/dokeos_stones_external.png',NULL,'dokeos_stones_external.png','file',218411,0,0),(67,'/images/gallery/diagrams/europecouncilorange200_1.png',NULL,'europecouncilorange200_1.png','file',88995,0,0),(68,'/images/gallery/diagrams/bottom_arrow.png',NULL,'bottom_arrow.png','file',2841,0,0),(69,'/images/gallery/diagrams/elearning_project.png',NULL,'elearning_project.png','file',37981,0,0),(70,'/images/gallery/diagrams/radiograph.png',NULL,'radiograph.png','file',46503,0,0),(71,'/images/gallery/diagrams/europemap.jpg',NULL,'europemap.jpg','file',61208,0,0),(72,'/images/gallery/diagrams/distance.png',NULL,'distance.png','file',2929,0,0),(73,'/images/gallery/diagrams/velocity.jpg',NULL,'velocity.jpg','file',6536,0,0),(74,'/images/gallery/diagrams/waterloo.png',NULL,'waterloo.png','file',41939,0,0),(75,'/images/gallery/diagrams/precession.jpg',NULL,'precession.jpg','file',8319,0,0),(76,'/images/gallery/diagrams/constitution_1.png',NULL,'constitution_1.png','file',50616,0,0),(77,'/images/gallery/diagrams/synapse.jpg',NULL,'synapse.jpg','file',17330,0,0),(78,'/images/gallery/diagrams/matching_electric_1.png',NULL,'matching_electric_1.png','file',11174,0,0),(79,'/images/gallery/diagrams/brain.png',NULL,'brain.png','file',103017,0,0),(80,'/images/gallery/diagrams/barbitursyra.jpg',NULL,'barbitursyra.jpg','file',6811,0,0),(81,'/images/gallery/diagrams/animated/anim_pendul.gif',NULL,'anim_pendul.gif','file',49559,0,0),(82,'/images/gallery/diagrams/animated/anim_japanese.gif',NULL,'anim_japanese.gif','file',11892,0,0),(83,'/images/gallery/diagrams/animated/anim_wave_frequency.gif',NULL,'anim_wave_frequency.gif','file',97141,0,0),(84,'/images/gallery/diagrams/animated/anim_corriolis.gif',NULL,'anim_corriolis.gif','file',151742,0,0),(85,'/images/gallery/diagrams/animated/anim_electrolysis.gif',NULL,'anim_electrolysis.gif','file',49668,0,0),(86,'/images/gallery/diagrams/animated/anim_twostroke.gif',NULL,'anim_twostroke.gif','file',209400,0,0),(87,'/images/gallery/diagrams/animated/anim_rome.gif',NULL,'anim_rome.gif','file',401677,0,0),(88,'/images/gallery/diagrams/animated/anim_yugoslavia.gif',NULL,'anim_yugoslavia.gif','file',44252,0,0),(89,'/images/gallery/diagrams/animated/anim_loco.gif',NULL,'anim_loco.gif','file',87422,0,0),(90,'/images/gallery/diagrams/gearbox.jpg',NULL,'gearbox.jpg','file',31176,0,0),(91,'/images/gallery/diagrams/halleffect.jpg',NULL,'halleffect.jpg','file',49877,0,0),(92,'/images/gallery/diagrams/asus-eee-pc.jpg',NULL,'asus-eee-pc.jpg','file',21133,0,0),(93,'/images/gallery/diagrams/bandgap_dv.jpg',NULL,'bandgap_dv.jpg','file',11121,0,0),(94,'/images/gallery/diagrams/alaska_chart.png',NULL,'alaska_chart.png','file',35312,0,0),(95,'/images/gallery/diagrams/piano.jpg',NULL,'piano.jpg','file',26538,0,0),(96,'/images/gallery/diagrams/yalta_1.png',NULL,'yalta_1.png','file',31706,0,0),(97,'/images/gallery/diagrams/tetralogy.png',NULL,'tetralogy.png','file',75038,0,0),(98,'/images/gallery/diagrams/pythagore.jpg',NULL,'pythagore.jpg','file',6308,0,0),(99,'/images/gallery/diagrams/oilwell.jpg',NULL,'oilwell.jpg','file',23782,0,0),(100,'/images/gallery/diagrams/argandgaussplane.jpg',NULL,'argandgaussplane.jpg','file',7754,0,0),(101,'/images/gallery/diagrams/lightbulb.jpg',NULL,'lightbulb.jpg','file',24030,0,0),(102,'/images/gallery/diagrams/head_olfactory_nerve.png',NULL,'head_olfactory_nerve.png','file',182785,0,0),(103,'/images/gallery/diagrams/receiver.jpg',NULL,'receiver.jpg','file',4745,0,0),(104,'/images/gallery/female.jpg',NULL,'female.jpg','file',20454,0,0),(105,'/images/gallery/emot_neutral.jpg',NULL,'emot_neutral.jpg','file',20766,0,0),(106,'/images/gallery/world.jpg',NULL,'world.jpg','file',22705,0,0),(107,'/images/gallery/science.jpg',NULL,'science.jpg','file',24035,0,0),(108,'/images/gallery/presentation.jpg',NULL,'presentation.jpg','file',20445,0,0),(109,'/images/gallery/time.jpg',NULL,'time.jpg','file',26028,0,0),(110,'/images/gallery/maths.jpg',NULL,'maths.jpg','file',21865,0,0),(111,'/images/gallery/homework.jpg',NULL,'homework.jpg','file',24694,0,0),(112,'/images/gallery/write.jpg',NULL,'write.jpg','file',19862,0,0),(113,'/images/gallery/redlight.jpg',NULL,'redlight.jpg','file',20374,0,0),(114,'/images/gallery/servicesgather.png',NULL,'servicesgather.png','file',19575,0,0),(115,'/images/gallery/tutorial.jpg',NULL,'tutorial.jpg','file',18883,0,0),(116,'/images/gallery/speech.jpg',NULL,'speech.jpg','file',22652,0,0),(117,'/images/gallery/twopeople.png',NULL,'twopeople.png','file',10453,0,0),(118,'/images/gallery/board.jpg',NULL,'board.jpg','file',24054,0,0),(119,'/images/gallery/book.jpg',NULL,'book.jpg','file',21524,0,0),(120,'/images/gallery/computer.jpg',NULL,'computer.jpg','file',22319,0,0),(121,'/images/gallery/newspaper.jpg',NULL,'newspaper.jpg','file',21935,0,0),(122,'/images/gallery/geometry.jpg',NULL,'geometry.jpg','file',27041,0,0),(123,'/images/gallery/emot_sad.jpg',NULL,'emot_sad.jpg','file',21522,0,0),(124,'/images/gallery/mechanism.jpg',NULL,'mechanism.jpg','file',24639,0,0),(125,'/images/gallery/emot_happy.jpg',NULL,'emot_happy.jpg','file',21933,0,0),(126,'/images/gallery/mouse.jpg',NULL,'mouse.jpg','file',20171,0,0),(127,'/images/gallery/interaction.jpg',NULL,'interaction.jpg','file',22036,0,0),(128,'/images/gallery/small/mime_ppt.jpg',NULL,'mime_ppt.jpg','file',13590,0,0),(129,'/images/gallery/small/emot_wink.jpg',NULL,'emot_wink.jpg','file',14074,0,0),(130,'/images/gallery/small/01.png',NULL,'01.png','file',6112,0,0),(131,'/images/gallery/small/mime_publisher.jpg',NULL,'mime_publisher.jpg','file',13665,0,0),(132,'/images/gallery/small/button_ok.jpg',NULL,'button_ok.jpg','file',13817,0,0),(133,'/images/gallery/small/attach.jpg',NULL,'attach.jpg','file',14049,0,0),(134,'/images/gallery/small/save.jpg',NULL,'save.jpg','file',13955,0,0),(135,'/images/gallery/small/mime_visio.jpg',NULL,'mime_visio.jpg','file',13749,0,0),(136,'/images/gallery/small/09.png',NULL,'09.png','file',6343,0,0),(137,'/images/gallery/small/important.jpg',NULL,'important.jpg','file',13929,0,0),(138,'/images/gallery/small/bookcase.jpg',NULL,'bookcase.jpg','file',14038,0,0),(139,'/images/gallery/small/chart.jpg',NULL,'chart.jpg','file',14129,0,0),(140,'/images/gallery/small/emot_neutral.jpg',NULL,'emot_neutral.jpg','file',13672,0,0),(141,'/images/gallery/small/05.png',NULL,'05.png','file',6201,0,0),(142,'/images/gallery/small/search.jpg',NULL,'search.jpg','file',13473,0,0),(143,'/images/gallery/small/talking.jpg',NULL,'talking.jpg','file',13812,0,0),(144,'/images/gallery/small/teacher.jpg',NULL,'teacher.jpg','file',13879,0,0),(145,'/images/gallery/small/speak.jpg',NULL,'speak.jpg','file',13520,0,0),(146,'/images/gallery/small/down.jpg',NULL,'down.jpg','file',13862,0,0),(147,'/images/gallery/small/04.png',NULL,'04.png','file',6147,0,0),(148,'/images/gallery/small/science.jpg',NULL,'science.jpg','file',13851,0,0),(149,'/images/gallery/small/accessibilty.jpg',NULL,'accessibilty.jpg','file',13859,0,0),(150,'/images/gallery/small/07.png',NULL,'07.png','file',6130,0,0),(151,'/images/gallery/small/right.jpg',NULL,'right.jpg','file',13903,0,0),(152,'/images/gallery/small/maths.jpg',NULL,'maths.jpg','file',13756,0,0),(153,'/images/gallery/small/redlight.jpg',NULL,'redlight.jpg','file',13505,0,0),(154,'/images/gallery/small/tutorial.jpg',NULL,'tutorial.jpg','file',13560,0,0),(155,'/images/gallery/small/mime_audio.jpg',NULL,'mime_audio.jpg','file',13709,0,0),(156,'/images/gallery/small/02.png',NULL,'02.png','file',6260,0,0),(157,'/images/gallery/small/mime_zip.jpg',NULL,'mime_zip.jpg','file',13766,0,0),(158,'/images/gallery/small/listen.jpg',NULL,'listen.jpg','file',13727,0,0),(159,'/images/gallery/small/left.jpg',NULL,'left.jpg','file',13974,0,0),(160,'/images/gallery/small/mime_pdf.jpg',NULL,'mime_pdf.jpg','file',14044,0,0),(161,'/images/gallery/small/group.jpg',NULL,'group.jpg','file',13894,0,0),(162,'/images/gallery/small/fish.jpg',NULL,'fish.jpg','file',13768,0,0),(163,'/images/gallery/small/board.jpg',NULL,'board.jpg','file',13913,0,0),(164,'/images/gallery/small/03.png',NULL,'03.png','file',6324,0,0),(165,'/images/gallery/small/collaboration.jpg',NULL,'collaboration.jpg','file',13812,0,0),(166,'/images/gallery/small/button_cancel.jpg',NULL,'button_cancel.jpg','file',14156,0,0),(167,'/images/gallery/small/computer.jpg',NULL,'computer.jpg','file',13673,0,0),(168,'/images/gallery/small/mime_flash.jpg',NULL,'mime_flash.jpg','file',13867,0,0),(169,'/images/gallery/small/help.jpg',NULL,'help.jpg','file',14025,0,0),(170,'/images/gallery/small/06.png',NULL,'06.png','file',6296,0,0),(171,'/images/gallery/small/08.png',NULL,'08.png','file',6351,0,0),(172,'/images/gallery/small/mime_music.jpg',NULL,'mime_music.jpg','file',13763,0,0),(173,'/images/gallery/small/work.jpg',NULL,'work.jpg','file',13827,0,0),(174,'/images/gallery/small/emot_sad.jpg',NULL,'emot_sad.jpg','file',14085,0,0),(175,'/images/gallery/small/annoncement.jpg',NULL,'annoncement.jpg','file',13770,0,0),(176,'/images/gallery/small/arrow.png',NULL,'arrow.png','file',1441,0,0),(177,'/images/gallery/small/mime_movie.jpg',NULL,'mime_movie.jpg','file',13628,0,0),(178,'/images/gallery/small/emot_happy.jpg',NULL,'emot_happy.jpg','file',14110,0,0),(179,'/images/gallery/small/videoconference.jpg',NULL,'videoconference.jpg','file',13700,0,0),(180,'/images/gallery/small/email.jpg',NULL,'email.jpg','file',13682,0,0),(181,'/images/gallery/small/mime_access.jpg',NULL,'mime_access.jpg','file',13681,0,0),(182,'/images/gallery/small/agenda.jpg',NULL,'agenda.jpg','file',14108,0,0),(183,'/images/gallery/small/mouse.jpg',NULL,'mouse.jpg','file',13662,0,0),(184,'/images/gallery/small/00.png',NULL,'00.png','file',6285,0,0),(185,'/images/gallery/small/mime_excel.jpg',NULL,'mime_excel.jpg','file',13595,0,0),(186,'/images/gallery/small/teacher_male.jpg',NULL,'teacher_male.jpg','file',13660,0,0),(187,'/images/gallery/small/quicktime.jpg',NULL,'quicktime.jpg','file',13806,0,0),(188,'/images/gallery/small/mime_word.jpg',NULL,'mime_word.jpg','file',13640,0,0),(189,'/images/gallery/small/up.jpg',NULL,'up.jpg','file',13961,0,0),(190,'/audio/ListeningComprehension.mp3',NULL,'ListeningComprehension.mp3','file',147854,0,0),(191,'/flash/SpinEchoSequence.swf',NULL,'SpinEchoSequence.swf','file',17904,0,0),(192,'/flash/PonderationOfMrSignal.swf',NULL,'PonderationOfMrSignal.swf','file',18825,0,0),(193,'/flash/ArtefactsInRMI.swf',NULL,'ArtefactsInRMI.swf','file',100988,0,0),(194,'/video/flv',NULL,'flv','folder',0,0,0),(195,'/video/painting.mpg',NULL,'painting.mpg','file',2353702,0,0),(196,'/video/flv/example.flv',NULL,'example.flv','file',1093260,0,0);
/*!40000 ALTER TABLE `document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dropbox_category`
--

DROP TABLE IF EXISTS `dropbox_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dropbox_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  `received` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sent` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dropbox_category`
--

LOCK TABLES `dropbox_category` WRITE;
/*!40000 ALTER TABLE `dropbox_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `dropbox_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dropbox_feedback`
--

DROP TABLE IF EXISTS `dropbox_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dropbox_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL DEFAULT '0',
  `author_user_id` int(11) NOT NULL DEFAULT '0',
  `feedback` text NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`feedback_id`),
  KEY `file_id` (`file_id`),
  KEY `author_user_id` (`author_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dropbox_feedback`
--

LOCK TABLES `dropbox_feedback` WRITE;
/*!40000 ALTER TABLE `dropbox_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `dropbox_feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dropbox_file`
--

DROP TABLE IF EXISTS `dropbox_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dropbox_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uploader_id` int(10) unsigned NOT NULL DEFAULT '0',
  `filename` varchar(250) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL,
  `title` varchar(250) DEFAULT '',
  `description` varchar(250) DEFAULT '',
  `author` varchar(250) DEFAULT '',
  `upload_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_upload_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `session_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UN_filename` (`filename`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dropbox_file`
--

LOCK TABLES `dropbox_file` WRITE;
/*!40000 ALTER TABLE `dropbox_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `dropbox_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dropbox_person`
--

DROP TABLE IF EXISTS `dropbox_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dropbox_person` (
  `file_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`file_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dropbox_person`
--

LOCK TABLES `dropbox_person` WRITE;
/*!40000 ALTER TABLE `dropbox_person` DISABLE KEYS */;
/*!40000 ALTER TABLE `dropbox_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dropbox_post`
--

DROP TABLE IF EXISTS `dropbox_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dropbox_post` (
  `file_id` int(10) unsigned NOT NULL,
  `dest_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `feedback_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `feedback` text,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `session_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`file_id`,`dest_user_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dropbox_post`
--

LOCK TABLES `dropbox_post` WRITE;
/*!40000 ALTER TABLE `dropbox_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `dropbox_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_attachment`
--

DROP TABLE IF EXISTS `forum_attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `comment` text,
  `size` int(11) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_attachment`
--

LOCK TABLES `forum_attachment` WRITE;
/*!40000 ALTER TABLE `forum_attachment` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_category`
--

DROP TABLE IF EXISTS `forum_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL DEFAULT '',
  `cat_comment` text,
  `cat_order` int(11) NOT NULL DEFAULT '0',
  `locked` int(11) NOT NULL DEFAULT '0',
  `session_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_category`
--

LOCK TABLES `forum_category` WRITE;
/*!40000 ALTER TABLE `forum_category` DISABLE KEYS */;
INSERT INTO `forum_category` VALUES (1,'Ejemplo de Categoría de Foros','',1,0,0);
/*!40000 ALTER TABLE `forum_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_forum`
--

DROP TABLE IF EXISTS `forum_forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_title` varchar(255) NOT NULL DEFAULT '',
  `forum_comment` text,
  `forum_threads` int(11) DEFAULT '0',
  `forum_posts` int(11) DEFAULT '0',
  `forum_last_post` int(11) DEFAULT '0',
  `forum_category` int(11) DEFAULT NULL,
  `allow_anonymous` int(11) DEFAULT NULL,
  `allow_edit` int(11) DEFAULT NULL,
  `approval_direct_post` varchar(20) DEFAULT NULL,
  `allow_attachments` int(11) DEFAULT NULL,
  `allow_new_threads` int(11) DEFAULT NULL,
  `default_view` varchar(20) DEFAULT NULL,
  `forum_of_group` varchar(20) DEFAULT NULL,
  `forum_group_public_private` varchar(20) DEFAULT 'public',
  `forum_order` int(11) DEFAULT NULL,
  `locked` int(11) NOT NULL DEFAULT '0',
  `session_id` int(11) NOT NULL DEFAULT '0',
  `forum_image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_forum`
--

LOCK TABLES `forum_forum` WRITE;
/*!40000 ALTER TABLE `forum_forum` DISABLE KEYS */;
INSERT INTO `forum_forum` VALUES (1,'Ejemplo de foro','',0,0,0,1,0,1,NULL,0,1,'flat','0','public',1,0,0,'');
/*!40000 ALTER TABLE `forum_forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_mailcue`
--

DROP TABLE IF EXISTS `forum_mailcue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_mailcue` (
  `thread_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_mailcue`
--

LOCK TABLES `forum_mailcue` WRITE;
/*!40000 ALTER TABLE `forum_mailcue` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_mailcue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_notification`
--

DROP TABLE IF EXISTS `forum_notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_notification` (
  `user_id` int(11) DEFAULT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `thread_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_notification`
--

LOCK TABLES `forum_notification` WRITE;
/*!40000 ALTER TABLE `forum_notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_post`
--

DROP TABLE IF EXISTS `forum_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(250) DEFAULT NULL,
  `post_text` text,
  `thread_id` int(11) DEFAULT '0',
  `forum_id` int(11) DEFAULT '0',
  `poster_id` int(11) DEFAULT '0',
  `poster_name` varchar(100) DEFAULT '',
  `post_date` datetime DEFAULT '0000-00-00 00:00:00',
  `post_notification` tinyint(4) DEFAULT '0',
  `post_parent_id` int(11) DEFAULT '0',
  `visible` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`post_id`),
  KEY `poster_id` (`poster_id`),
  KEY `forum_id` (`forum_id`),
  KEY `idx_forum_post_thread_id` (`thread_id`),
  KEY `idx_forum_post_visible` (`visible`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_post`
--

LOCK TABLES `forum_post` WRITE;
/*!40000 ALTER TABLE `forum_post` DISABLE KEYS */;
INSERT INTO `forum_post` VALUES (1,'Ejemplo de tema de debate','Ejemplo de contenido',1,1,1,'','2011-05-09 08:36:16',0,0,1);
/*!40000 ALTER TABLE `forum_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_thread`
--

DROP TABLE IF EXISTS `forum_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_thread` (
  `thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_title` varchar(255) DEFAULT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `thread_replies` int(11) DEFAULT '0',
  `thread_poster_id` int(11) DEFAULT NULL,
  `thread_poster_name` varchar(100) DEFAULT '',
  `thread_views` int(11) DEFAULT '0',
  `thread_last_post` int(11) DEFAULT NULL,
  `thread_date` datetime DEFAULT '0000-00-00 00:00:00',
  `thread_sticky` tinyint(3) unsigned DEFAULT '0',
  `locked` int(11) NOT NULL DEFAULT '0',
  `session_id` int(10) unsigned DEFAULT NULL,
  `thread_title_qualify` varchar(255) DEFAULT '',
  `thread_qualify_max` float(6,2) unsigned NOT NULL DEFAULT '0.00',
  `thread_close_date` datetime DEFAULT '0000-00-00 00:00:00',
  `thread_weight` float(6,2) unsigned NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`thread_id`),
  KEY `idx_forum_thread_forum_id` (`forum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_thread`
--

LOCK TABLES `forum_thread` WRITE;
/*!40000 ALTER TABLE `forum_thread` DISABLE KEYS */;
INSERT INTO `forum_thread` VALUES (1,'Ejemplo de tema de debate',1,0,1,'',0,1,'2011-05-09 08:36:16',0,0,NULL,'',10.00,'0000-00-00 00:00:00',0.00);
/*!40000 ALTER TABLE `forum_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_thread_qualify`
--

DROP TABLE IF EXISTS `forum_thread_qualify`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_thread_qualify` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `thread_id` int(11) NOT NULL,
  `qualify` float(6,2) NOT NULL DEFAULT '0.00',
  `qualify_user_id` int(11) DEFAULT NULL,
  `qualify_time` datetime DEFAULT '0000-00-00 00:00:00',
  `session_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`thread_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_thread_qualify`
--

LOCK TABLES `forum_thread_qualify` WRITE;
/*!40000 ALTER TABLE `forum_thread_qualify` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_thread_qualify` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_thread_qualify_log`
--

DROP TABLE IF EXISTS `forum_thread_qualify_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_thread_qualify_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `thread_id` int(11) NOT NULL,
  `qualify` float(6,2) NOT NULL DEFAULT '0.00',
  `qualify_user_id` int(11) DEFAULT NULL,
  `qualify_time` datetime DEFAULT '0000-00-00 00:00:00',
  `session_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`thread_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_thread_qualify_log`
--

LOCK TABLES `forum_thread_qualify_log` WRITE;
/*!40000 ALTER TABLE `forum_thread_qualify_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_thread_qualify_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `glossary`
--

DROP TABLE IF EXISTS `glossary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `glossary` (
  `glossary_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `display_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`glossary_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `glossary`
--

LOCK TABLES `glossary` WRITE;
/*!40000 ALTER TABLE `glossary` DISABLE KEYS */;
/*!40000 ALTER TABLE `glossary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_category`
--

DROP TABLE IF EXISTS `group_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `doc_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `calendar_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `work_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `announcements_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `forum_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `wiki_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `max_student` smallint(5) unsigned NOT NULL DEFAULT '8',
  `self_reg_allowed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `self_unreg_allowed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `groups_per_user` smallint(5) unsigned NOT NULL DEFAULT '0',
  `display_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_category`
--

LOCK TABLES `group_category` WRITE;
/*!40000 ALTER TABLE `group_category` DISABLE KEYS */;
INSERT INTO `group_category` VALUES (2,'Grupos por defecto','',1,1,1,1,1,1,8,0,0,0,0);
/*!40000 ALTER TABLE `group_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_info`
--

DROP TABLE IF EXISTS `group_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text,
  `max_student` smallint(5) unsigned NOT NULL DEFAULT '8',
  `doc_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `calendar_state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `work_state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `announcements_state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `forum_state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `wiki_state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `secret_directory` varchar(255) DEFAULT NULL,
  `self_registration_allowed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `self_unregistration_allowed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `session_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_info`
--

LOCK TABLES `group_info` WRITE;
/*!40000 ALTER TABLE `group_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_rel_tutor`
--

DROP TABLE IF EXISTS `group_rel_tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_rel_tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_rel_tutor`
--

LOCK TABLES `group_rel_tutor` WRITE;
/*!40000 ALTER TABLE `group_rel_tutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_rel_tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_rel_user`
--

DROP TABLE IF EXISTS `group_rel_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_rel_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `role` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_rel_user`
--

LOCK TABLES `group_rel_user` WRITE;
/*!40000 ALTER TABLE `group_rel_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_rel_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_property`
--

DROP TABLE IF EXISTS `item_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_property` (
  `tool` varchar(100) NOT NULL DEFAULT '',
  `insert_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `insert_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastedit_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ref` int(11) NOT NULL DEFAULT '0',
  `lastedit_type` varchar(100) NOT NULL DEFAULT '',
  `lastedit_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `to_group_id` int(10) unsigned DEFAULT NULL,
  `to_user_id` int(10) unsigned DEFAULT NULL,
  `visibility` tinyint(4) NOT NULL DEFAULT '1',
  `start_visible` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_visible` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `idx_item_property_toolref` (`tool`,`ref`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_property`
--

LOCK TABLES `item_property` WRITE;
/*!40000 ALTER TABLE `item_property` DISABLE KEYS */;
INSERT INTO `item_property` VALUES ('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',2,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',2),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',3,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',3),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',4,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',4),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',5,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',5),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',6,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',6),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',7,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',7),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',8,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',8),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',9,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',9),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',10,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',10),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',11,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',11),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',12,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',12),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',13,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',13),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',14,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',14),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',15,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',15),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',16,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',16),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',17,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',17),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',18,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',18),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',19,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',19),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',20,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',20),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',21,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',21),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',22,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',22),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',23,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',23),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',24,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',24),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',25,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',25),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',26,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',26),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',27,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',27),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',28,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',28),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',29,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',29),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',30,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',30),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',31,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',31),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',32,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',32),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',33,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',33),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',34,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',34),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',35,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',35),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',36,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',36),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',37,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',37),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',38,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',38),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',39,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',39),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',40,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',40),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',41,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',41),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',42,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',42),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',43,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',43),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',44,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',44),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',45,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',45),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',46,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',46),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',47,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',47),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',48,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',48),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',49,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',49),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',50,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',50),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',51,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',51),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',52,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',52),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',53,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',53),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',54,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',54),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',55,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',55),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',56,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',56),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',57,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',57),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',58,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',58),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',59,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',59),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',60,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',60),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',61,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',61),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',62,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',62),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',63,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',63),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',64,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',64),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',65,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',65),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',66,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',66),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',67,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',67),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',68,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',68),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',69,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',69),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',70,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',70),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',71,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',71),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',72,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',72),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',73,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',73),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',74,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',74),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',75,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',75),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',76,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',76),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',77,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',77),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',78,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',78),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',79,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',79),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',80,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',80),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',81,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',81),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',82,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',82),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',83,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',83),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',84,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',84),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',85,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',85),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',86,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',86),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',87,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',87),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',88,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',88),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',89,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',89),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',90,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',90),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',91,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',91),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',92,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',92),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',93,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',93),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',94,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',94),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',95,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',95),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',96,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',96),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',97,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',97),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',98,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',98),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',99,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',99),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',100,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',100),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',101,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',101),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',102,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',102),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',103,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',103),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',104,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',104),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',105,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',105),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',106,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',106),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',107,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',107),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',108,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',108),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',109,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',109),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',110,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',110),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',111,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',111),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',112,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',112),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',113,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',113),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',114,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',114),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',115,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',115),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',116,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',116),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',117,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',117),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',118,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',118),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',119,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',119),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',120,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',120),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',121,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',121),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',122,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',122),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',123,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',123),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',124,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',124),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',125,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',125),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',126,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',126),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',127,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',127),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',128,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',128),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',129,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',129),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',130,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',130),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',131,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',131),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',132,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',132),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',133,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',133),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',134,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',134),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',135,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',135),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',136,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',136),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',137,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',137),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',138,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',138),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',139,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',139),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',140,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',140),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',141,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',141),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',142,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',142),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',143,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',143),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',144,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',144),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',145,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',145),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',146,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',146),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',147,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',147),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',148,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',148),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',149,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',149),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',150,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',150),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',151,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',151),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',152,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',152),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',153,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',153),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',154,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',154),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',155,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',155),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',156,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',156),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',157,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',157),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',158,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',158),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',159,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',159),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',160,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',160),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',161,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',161),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',162,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',162),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',163,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',163),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',164,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',164),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',165,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',165),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',166,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',166),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',167,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',167),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',168,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',168),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',169,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',169),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',170,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',170),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',171,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',171),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',172,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',172),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',173,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',173),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',174,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',174),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',175,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',175),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',176,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',176),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',177,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',177),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',178,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',178),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',179,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',179),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',180,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',180),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',181,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',181),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',182,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',182),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',183,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',183),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',184,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',184),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',185,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',185),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',186,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',186),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',187,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',187),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',188,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',188),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',189,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',189),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',190,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',190),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',191,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',191),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',192,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',192),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',193,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',193),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',194,'DocumentAdded',1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',194),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',195,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',195),('document',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',196,'DocumentAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',196),('calendar_event',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'AgendaAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',197),('link',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'LinkAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',198),('link',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',2,'LinkAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',199),('announcement',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'AnnouncementAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',200),('forum_category',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'ForumCategoryAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',201),('forum',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'ForumAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',202),('forum_thread',1,'2011-05-09 08:36:16','2011-05-09 08:36:16',1,'ForumThreadAdded',1,0,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',203);
/*!40000 ALTER TABLE `item_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `category_id` smallint(5) unsigned DEFAULT NULL,
  `display_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `on_homepage` enum('0','1') NOT NULL DEFAULT '0',
  `target` char(10) DEFAULT '_self',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `link`
--

LOCK TABLES `link` WRITE;
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
INSERT INTO `link` VALUES (1,'http://www.google.com','Google','Potente motor de búsqueda',0,0,'0','_self'),(2,'http://www.wikipedia.org','Wikipedia','Enciclopedia gratuita en línea',0,1,'0','_self');
/*!40000 ALTER TABLE `link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `link_category`
--

DROP TABLE IF EXISTS `link_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `link_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `category_title` varchar(255) NOT NULL,
  `description` text,
  `display_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `link_category`
--

LOCK TABLES `link_category` WRITE;
/*!40000 ALTER TABLE `link_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `link_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lp`
--

DROP TABLE IF EXISTS `lp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lp_type` smallint(5) unsigned NOT NULL,
  `name` tinytext NOT NULL,
  `ref` tinytext,
  `description` text,
  `path` text NOT NULL,
  `force_commit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `default_view_mod` char(32) NOT NULL DEFAULT 'embedded',
  `default_encoding` char(32) NOT NULL DEFAULT 'UTF-8',
  `display_order` int(10) unsigned NOT NULL DEFAULT '0',
  `content_maker` tinytext NOT NULL,
  `content_local` varchar(32) NOT NULL DEFAULT 'local',
  `content_license` text NOT NULL,
  `prevent_reinit` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `js_lib` tinytext NOT NULL,
  `debug` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(255) NOT NULL DEFAULT '',
  `preview_image` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(255) NOT NULL DEFAULT '',
  `session_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lp`
--

LOCK TABLES `lp` WRITE;
/*!40000 ALTER TABLE `lp` DISABLE KEYS */;
/*!40000 ALTER TABLE `lp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lp_item`
--

DROP TABLE IF EXISTS `lp_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lp_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lp_id` int(10) unsigned NOT NULL,
  `item_type` char(32) NOT NULL DEFAULT 'dokeos_document',
  `ref` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `description` tinytext NOT NULL,
  `path` text NOT NULL,
  `min_score` float unsigned NOT NULL DEFAULT '0',
  `max_score` float unsigned NOT NULL DEFAULT '100',
  `mastery_score` float unsigned DEFAULT NULL,
  `parent_item_id` int(10) unsigned NOT NULL DEFAULT '0',
  `previous_item_id` int(10) unsigned NOT NULL DEFAULT '0',
  `next_item_id` int(10) unsigned NOT NULL DEFAULT '0',
  `display_order` int(10) unsigned NOT NULL DEFAULT '0',
  `prerequisite` text,
  `parameters` text,
  `launch_data` text NOT NULL,
  `max_time_allowed` char(13) DEFAULT '',
  `terms` text,
  `search_did` int(11) DEFAULT NULL,
  `audio` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lp_id` (`lp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lp_item`
--

LOCK TABLES `lp_item` WRITE;
/*!40000 ALTER TABLE `lp_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `lp_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lp_item_view`
--

DROP TABLE IF EXISTS `lp_item_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lp_item_view` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lp_item_id` int(10) unsigned NOT NULL,
  `lp_view_id` int(10) unsigned NOT NULL,
  `view_count` int(10) unsigned NOT NULL DEFAULT '0',
  `start_time` int(10) unsigned NOT NULL,
  `total_time` int(10) unsigned NOT NULL DEFAULT '0',
  `score` float unsigned NOT NULL DEFAULT '0',
  `status` char(32) NOT NULL DEFAULT 'not attempted',
  `suspend_data` text,
  `lesson_location` text,
  `core_exit` varchar(32) NOT NULL DEFAULT 'none',
  `max_score` varchar(8) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `lp_item_id` (`lp_item_id`),
  KEY `lp_view_id` (`lp_view_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lp_item_view`
--

LOCK TABLES `lp_item_view` WRITE;
/*!40000 ALTER TABLE `lp_item_view` DISABLE KEYS */;
/*!40000 ALTER TABLE `lp_item_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lp_iv_interaction`
--

DROP TABLE IF EXISTS `lp_iv_interaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lp_iv_interaction` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `lp_iv_id` bigint(20) unsigned NOT NULL,
  `interaction_id` varchar(255) NOT NULL DEFAULT '',
  `interaction_type` varchar(255) NOT NULL DEFAULT '',
  `weighting` double NOT NULL DEFAULT '0',
  `completion_time` varchar(16) NOT NULL DEFAULT '',
  `correct_responses` text NOT NULL,
  `student_response` text NOT NULL,
  `result` varchar(255) NOT NULL DEFAULT '',
  `latency` varchar(16) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `lp_iv_id` (`lp_iv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lp_iv_interaction`
--

LOCK TABLES `lp_iv_interaction` WRITE;
/*!40000 ALTER TABLE `lp_iv_interaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `lp_iv_interaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lp_iv_objective`
--

DROP TABLE IF EXISTS `lp_iv_objective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lp_iv_objective` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lp_iv_id` bigint(20) unsigned NOT NULL,
  `order_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `objective_id` varchar(255) NOT NULL DEFAULT '',
  `score_raw` float unsigned NOT NULL DEFAULT '0',
  `score_max` float unsigned NOT NULL DEFAULT '0',
  `score_min` float unsigned NOT NULL DEFAULT '0',
  `status` char(32) NOT NULL DEFAULT 'not attempted',
  PRIMARY KEY (`id`),
  KEY `lp_iv_id` (`lp_iv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lp_iv_objective`
--

LOCK TABLES `lp_iv_objective` WRITE;
/*!40000 ALTER TABLE `lp_iv_objective` DISABLE KEYS */;
/*!40000 ALTER TABLE `lp_iv_objective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lp_view`
--

DROP TABLE IF EXISTS `lp_view`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lp_view` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lp_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `view_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `last_item` int(10) unsigned NOT NULL DEFAULT '0',
  `progress` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `lp_id` (`lp_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lp_view`
--

LOCK TABLES `lp_view` WRITE;
/*!40000 ALTER TABLE `lp_view` DISABLE KEYS */;
/*!40000 ALTER TABLE `lp_view` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notebook`
--

DROP TABLE IF EXISTS `notebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notebook` (
  `notebook_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `course` varchar(40) NOT NULL,
  `session_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`notebook_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notebook`
--

LOCK TABLES `notebook` WRITE;
/*!40000 ALTER TABLE `notebook` DISABLE KEYS */;
/*!40000 ALTER TABLE `notebook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `online_connected`
--

DROP TABLE IF EXISTS `online_connected`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `online_connected` (
  `user_id` int(10) unsigned NOT NULL,
  `last_connection` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `online_connected`
--

LOCK TABLES `online_connected` WRITE;
/*!40000 ALTER TABLE `online_connected` DISABLE KEYS */;
/*!40000 ALTER TABLE `online_connected` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `online_link`
--

DROP TABLE IF EXISTS `online_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `online_link` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL DEFAULT '',
  `url` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `online_link`
--

LOCK TABLES `online_link` WRITE;
/*!40000 ALTER TABLE `online_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `online_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_group`
--

DROP TABLE IF EXISTS `permission_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `tool` varchar(250) NOT NULL DEFAULT '',
  `action` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_group`
--

LOCK TABLES `permission_group` WRITE;
/*!40000 ALTER TABLE `permission_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_task`
--

DROP TABLE IF EXISTS `permission_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) NOT NULL DEFAULT '0',
  `tool` varchar(250) NOT NULL DEFAULT '',
  `action` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_task`
--

LOCK TABLES `permission_task` WRITE;
/*!40000 ALTER TABLE `permission_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `tool` varchar(250) NOT NULL DEFAULT '',
  `action` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text,
  `sound` varchar(50) DEFAULT NULL,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `random` smallint(6) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `results_disabled` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `access_condition` text,
  `max_attempt` int(11) NOT NULL DEFAULT '0',
  `start_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `feedback_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz`
--

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` VALUES (1,'Ejercicio de ejemplo','<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td width=\"110\" valign=\"top\" align=\"left\"><img src=\"http://localhost/dokeos/main/default_course_document/images/mr_dokeos/thinking.jpg\"></td><td valign=\"top\" align=\"left\">La ironía</td></tr></table>',NULL,1,0,1,0,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_answer`
--

DROP TABLE IF EXISTS `quiz_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz_answer` (
  `id` mediumint(8) unsigned NOT NULL,
  `question_id` mediumint(8) unsigned NOT NULL,
  `answer` text NOT NULL,
  `correct` mediumint(8) unsigned DEFAULT NULL,
  `comment` text,
  `ponderation` float(6,2) NOT NULL DEFAULT '0.00',
  `position` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `hotspot_coordinates` text,
  `hotspot_type` enum('square','circle','poly','delineation') DEFAULT NULL,
  `destination` text NOT NULL,
  PRIMARY KEY (`id`,`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_answer`
--

LOCK TABLES `quiz_answer` WRITE;
/*!40000 ALTER TABLE `quiz_answer` DISABLE KEYS */;
INSERT INTO `quiz_answer` VALUES (1,1,'Ridiculizar al interlocutor para hacerle admitir su error.',0,'No. La ironía socrática no se aplica al terreno de la psicología, sino en el de la argumentación.',-5.00,1,'','',''),(2,1,'Reconocer los propios errores para invitar al interlocutor a hacer lo mismo.',0,'No. No se trata de una estrategia de seducción o de un método por ejemplo.',-5.00,2,'','',''),(3,1,'Forzar  al interlocutor, por medio de una serie de cuestiones y subcuestiones, a que reconozca que no sabe lo que pretende saber.',1,'Correcto. La ironía socrática es un método interrogativo. El término griego \"eirotao\" significa , por otro lado, \"interrogar\".',5.00,3,'','',''),(4,1,'Utilizar el principio de no contradicción para llevar al interlocutor a un callejón sin salida.',1,'Esta respuesta no es falsa. Es exacto que la puesta en evidencia de la ignorancia del interlocutor se realiza poniendo en evidencia las contradicciones en que desembocan sus tesis.',5.00,4,'','','');
/*!40000 ALTER TABLE `quiz_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_question`
--

DROP TABLE IF EXISTS `quiz_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz_question` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `description` text,
  `ponderation` float(6,2) NOT NULL DEFAULT '0.00',
  `position` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `picture` varchar(50) DEFAULT NULL,
  `level` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `position` (`position`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_question`
--

LOCK TABLES `quiz_question` WRITE;
/*!40000 ALTER TABLE `quiz_question` DISABLE KEYS */;
INSERT INTO `quiz_question` VALUES (1,'La ironía socrática consiste en...','(varias respuestas correctas son posibles)',10.00,1,2,'',1);
/*!40000 ALTER TABLE `quiz_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_rel_question`
--

DROP TABLE IF EXISTS `quiz_rel_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz_rel_question` (
  `question_id` mediumint(8) unsigned NOT NULL,
  `exercice_id` mediumint(8) unsigned NOT NULL,
  `question_order` mediumint(8) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`question_id`,`exercice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_rel_question`
--

LOCK TABLES `quiz_rel_question` WRITE;
/*!40000 ALTER TABLE `quiz_rel_question` DISABLE KEYS */;
INSERT INTO `quiz_rel_question` VALUES (1,1,1);
/*!40000 ALTER TABLE `quiz_rel_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resource`
--

DROP TABLE IF EXISTS `resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resource` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source_type` varchar(50) DEFAULT NULL,
  `source_id` int(10) unsigned DEFAULT NULL,
  `resource_type` varchar(50) DEFAULT NULL,
  `resource_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource`
--

LOCK TABLES `resource` WRITE;
/*!40000 ALTER TABLE `resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(250) NOT NULL DEFAULT '',
  `role_comment` text,
  `default_role` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_group`
--

DROP TABLE IF EXISTS `role_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_group` (
  `role_id` int(11) NOT NULL DEFAULT '0',
  `scope` varchar(20) NOT NULL DEFAULT 'course',
  `group_id` int(11) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_group`
--

LOCK TABLES `role_group` WRITE;
/*!40000 ALTER TABLE `role_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL DEFAULT '0',
  `tool` varchar(250) NOT NULL DEFAULT '',
  `action` varchar(50) NOT NULL DEFAULT '',
  `default_perm` tinyint(4) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permissions`
--

LOCK TABLES `role_permissions` WRITE;
/*!40000 ALTER TABLE `role_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(11) NOT NULL DEFAULT '0',
  `scope` varchar(20) NOT NULL DEFAULT 'course',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_publication`
--

DROP TABLE IF EXISTS `student_publication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_publication` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `author` varchar(200) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `accepted` tinyint(4) DEFAULT '0',
  `post_group_id` int(11) NOT NULL DEFAULT '0',
  `sent_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `filetype` set('file','folder') NOT NULL DEFAULT 'file',
  `has_properties` int(10) unsigned NOT NULL DEFAULT '0',
  `view_properties` tinyint(4) DEFAULT NULL,
  `qualification` float(6,2) unsigned NOT NULL DEFAULT '0.00',
  `date_of_qualification` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `qualificator_id` int(10) unsigned NOT NULL DEFAULT '0',
  `session_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_publication`
--

LOCK TABLES `student_publication` WRITE;
/*!40000 ALTER TABLE `student_publication` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_publication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_publication_assignment`
--

DROP TABLE IF EXISTS `student_publication_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_publication_assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expires_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ends_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `add_to_calendar` tinyint(4) NOT NULL,
  `enable_qualification` tinyint(4) NOT NULL,
  `publication_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_publication_assignment`
--

LOCK TABLES `student_publication_assignment` WRITE;
/*!40000 ALTER TABLE `student_publication_assignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_publication_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey` (
  `survey_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `title` text,
  `subtitle` text,
  `author` varchar(20) DEFAULT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `avail_from` date DEFAULT NULL,
  `avail_till` date DEFAULT NULL,
  `is_shared` char(1) DEFAULT '1',
  `template` varchar(20) DEFAULT NULL,
  `intro` text,
  `surveythanks` text,
  `creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `invited` int(11) NOT NULL,
  `answered` int(11) NOT NULL,
  `invite_mail` text NOT NULL,
  `reminder_mail` text NOT NULL,
  `mail_subject` varchar(255) NOT NULL,
  `anonymous` enum('0','1') NOT NULL DEFAULT '0',
  `access_condition` text,
  `shuffle` tinyint(1) NOT NULL DEFAULT '0',
  `one_question_per_page` tinyint(1) NOT NULL DEFAULT '0',
  `survey_version` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL,
  `survey_type` int(11) NOT NULL DEFAULT '0',
  `show_form_profile` int(11) NOT NULL DEFAULT '0',
  `form_fields` text NOT NULL,
  `session_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`survey_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey`
--

LOCK TABLES `survey` WRITE;
/*!40000 ALTER TABLE `survey` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_answer`
--

DROP TABLE IF EXISTS `survey_answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey_answer` (
  `answer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `survey_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `option_id` text NOT NULL,
  `value` int(10) unsigned NOT NULL,
  `user` varchar(250) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_answer`
--

LOCK TABLES `survey_answer` WRITE;
/*!40000 ALTER TABLE `survey_answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_group`
--

DROP TABLE IF EXISTS `survey_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `survey_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_group`
--

LOCK TABLES `survey_group` WRITE;
/*!40000 ALTER TABLE `survey_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_invitation`
--

DROP TABLE IF EXISTS `survey_invitation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey_invitation` (
  `survey_invitation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `survey_code` varchar(20) NOT NULL,
  `user` varchar(250) NOT NULL,
  `invitation_code` varchar(250) NOT NULL,
  `invitation_date` datetime NOT NULL,
  `reminder_date` datetime NOT NULL,
  `answered` int(11) NOT NULL DEFAULT '0',
  `session_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`survey_invitation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_invitation`
--

LOCK TABLES `survey_invitation` WRITE;
/*!40000 ALTER TABLE `survey_invitation` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_invitation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_question`
--

DROP TABLE IF EXISTS `survey_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey_question` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `survey_id` int(10) unsigned NOT NULL,
  `survey_question` text NOT NULL,
  `survey_question_comment` text NOT NULL,
  `type` varchar(250) NOT NULL,
  `display` varchar(10) NOT NULL,
  `sort` int(11) NOT NULL,
  `shared_question_id` int(11) DEFAULT NULL,
  `max_value` int(11) DEFAULT NULL,
  `survey_group_pri` int(10) unsigned NOT NULL DEFAULT '0',
  `survey_group_sec1` int(10) unsigned NOT NULL DEFAULT '0',
  `survey_group_sec2` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_question`
--

LOCK TABLES `survey_question` WRITE;
/*!40000 ALTER TABLE `survey_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_question_option`
--

DROP TABLE IF EXISTS `survey_question_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey_question_option` (
  `question_option_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) unsigned NOT NULL,
  `survey_id` int(10) unsigned NOT NULL,
  `option_text` text NOT NULL,
  `sort` int(11) NOT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`question_option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_question_option`
--

LOCK TABLES `survey_question_option` WRITE;
/*!40000 ALTER TABLE `survey_question_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `survey_question_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tool`
--

DROP TABLE IF EXISTS `tool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tool` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `visibility` tinyint(3) unsigned DEFAULT '0',
  `admin` varchar(200) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `added_tool` tinyint(3) unsigned DEFAULT '1',
  `target` enum('_self','_blank') NOT NULL DEFAULT '_self',
  `category` enum('authoring','interaction','admin') NOT NULL DEFAULT 'authoring',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tool`
--

LOCK TABLES `tool` WRITE;
/*!40000 ALTER TABLE `tool` DISABLE KEYS */;
INSERT INTO `tool` VALUES (1,'course_description','course_description/','info.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(2,'calendar_event','calendar/agenda.php','agenda.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(3,'document','document/document.php','folder_document.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(4,'learnpath','newscorm/lp_controller.php','scorm.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(5,'link','link/link.php','links.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(6,'quiz','exercice/exercice.php','quiz.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(7,'announcement','announcements/announcements.php','valves.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(8,'forum','forum/index.php','forum.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(9,'dropbox','dropbox/index.php','dropbox.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(10,'user','user/user.php','members.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(11,'group','group/group.php','group.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(12,'chat','chat/chat.php','chat.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(13,'student_publication','work/work.php','works.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(14,'survey','survey/survey_list.php','survey.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(15,'wiki','wiki/index.php','wiki.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(16,'gradebook','gradebook/index.php','gradebook.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(17,'glossary','glossary/index.php','glossary.gif',1,'0','squaregrey.gif',0,'_self','authoring'),(18,'notebook','notebook/index.php','notebook.gif',1,'0','squaregrey.gif',0,'_self','interaction'),(19,'blog_management','blog/blog_admin.php','blog_admin.gif',0,'1','squaregrey.gif',0,'_self','admin'),(20,'tracking','tracking/courseLog.php','statistics.gif',0,'1','',0,'_self','admin'),(21,'course_setting','course_info/infocours.php','reference.gif',0,'1','',0,'_self','admin'),(22,'course_maintenance','course_info/maintenance.php','backup.gif',0,'1','',0,'_self','admin');
/*!40000 ALTER TABLE `tool` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tool_intro`
--

DROP TABLE IF EXISTS `tool_intro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tool_intro` (
  `id` varchar(50) NOT NULL,
  `intro_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tool_intro`
--

LOCK TABLES `tool_intro` WRITE;
/*!40000 ALTER TABLE `tool_intro` DISABLE KEYS */;
INSERT INTO `tool_intro` VALUES ('course_homepage','<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td width=\"110\" valign=\"middle\" align=\"left\"><img src=\"/dokeos/main/img/mr_dokeos.png\" alt=\"mr. Dokeos\" title=\"mr. Dokeos\" /></td><td valign=\"middle\" align=\"left\">Bienvenido a este curso</td></tr></table>'),('student_publication','Esta página permite a cualquier usuario o grupo enviar documentos.'),('wiki','<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td width=\"110\" valign=\"top\" align=\"left\"></td><td valign=\"top\" align=\"left\">La palabra Wiki es una abreviatura de WikiWikiWeb. Wikiwiki es una palabra Hawaiana que significa rápido o veloz. En un Wiki sus usuarios pueden escribir páginas conjuntamente. Si una persona escribe algo mal, la siguiente puede corregir esto. Esta última persona también puede añadir nuevos elementos a la página. Así la página va mejorando con sucesivos cambios que quedan registrados en un historial.</td></tr></table>');
/*!40000 ALTER TABLE `tool_intro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo_content`
--

DROP TABLE IF EXISTS `userinfo_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `definition_id` int(10) unsigned NOT NULL,
  `editor_ip` varchar(39) DEFAULT NULL,
  `edition_time` datetime DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo_content`
--

LOCK TABLES `userinfo_content` WRITE;
/*!40000 ALTER TABLE `userinfo_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `userinfo_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo_def`
--

DROP TABLE IF EXISTS `userinfo_def`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo_def` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `comment` text,
  `line_count` tinyint(3) unsigned NOT NULL DEFAULT '5',
  `rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo_def`
--

LOCK TABLES `userinfo_def` WRITE;
/*!40000 ALTER TABLE `userinfo_def` DISABLE KEYS */;
/*!40000 ALTER TABLE `userinfo_def` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wiki`
--

DROP TABLE IF EXISTS `wiki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wiki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL DEFAULT '0',
  `reflink` varchar(255) NOT NULL DEFAULT 'index',
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  `dtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `addlock` int(11) NOT NULL DEFAULT '1',
  `editlock` int(11) NOT NULL DEFAULT '0',
  `visibility` int(11) NOT NULL DEFAULT '1',
  `addlock_disc` int(11) NOT NULL DEFAULT '1',
  `visibility_disc` int(11) NOT NULL DEFAULT '1',
  `ratinglock_disc` int(11) NOT NULL DEFAULT '1',
  `assignment` int(11) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `progress` text NOT NULL,
  `score` int(11) DEFAULT '0',
  `version` int(11) DEFAULT NULL,
  `is_editing` int(11) NOT NULL DEFAULT '0',
  `time_edit` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hits` int(11) DEFAULT '0',
  `linksto` text NOT NULL,
  `tag` text NOT NULL,
  `user_ip` varchar(39) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reflink` (`reflink`),
  KEY `group_id` (`group_id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wiki`
--

LOCK TABLES `wiki` WRITE;
/*!40000 ALTER TABLE `wiki` DISABLE KEYS */;
/*!40000 ALTER TABLE `wiki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wiki_conf`
--

DROP TABLE IF EXISTS `wiki_conf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wiki_conf` (
  `page_id` int(11) NOT NULL DEFAULT '0',
  `task` text NOT NULL,
  `feedback1` text NOT NULL,
  `feedback2` text NOT NULL,
  `feedback3` text NOT NULL,
  `fprogress1` varchar(3) NOT NULL,
  `fprogress2` varchar(3) NOT NULL,
  `fprogress3` varchar(3) NOT NULL,
  `max_size` int(11) DEFAULT NULL,
  `max_text` int(11) DEFAULT NULL,
  `max_version` int(11) DEFAULT NULL,
  `startdate_assig` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `enddate_assig` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delayedsubmit` int(11) NOT NULL DEFAULT '0',
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wiki_conf`
--

LOCK TABLES `wiki_conf` WRITE;
/*!40000 ALTER TABLE `wiki_conf` DISABLE KEYS */;
/*!40000 ALTER TABLE `wiki_conf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wiki_discuss`
--

DROP TABLE IF EXISTS `wiki_discuss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wiki_discuss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publication_id` int(11) NOT NULL DEFAULT '0',
  `userc_id` int(11) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `p_score` varchar(255) DEFAULT NULL,
  `dtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wiki_discuss`
--

LOCK TABLES `wiki_discuss` WRITE;
/*!40000 ALTER TABLE `wiki_discuss` DISABLE KEYS */;
/*!40000 ALTER TABLE `wiki_discuss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wiki_mailcue`
--

DROP TABLE IF EXISTS `wiki_mailcue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wiki_mailcue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wiki_mailcue`
--

LOCK TABLES `wiki_mailcue` WRITE;
/*!40000 ALTER TABLE `wiki_mailcue` DISABLE KEYS */;
/*!40000 ALTER TABLE `wiki_mailcue` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-05-30  8:51:30
