# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.47)
# Database: lockups
# Generation Time: 2016-04-01 15:52:43 +0000
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

# Dump of table lockup_files
# ------------------------------------------------------------

CREATE TABLE `lockup_files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lockup_id` int(11) DEFAULT NULL,
  `data` longblob,
  `orientation` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `reverse` tinyint(1) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table lockups
# ------------------------------------------------------------

CREATE TABLE `lockups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `organization` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `organization_second_line` varchar(255) DEFAULT NULL,
  `subject_second_line` varchar(255) DEFAULT NULL,
  `acronym` varchar(255) DEFAULT NULL,
  `acronym_subject` varchar(255) DEFAULT NULL,
  `extension_county` varchar(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `preview_svg` text,
  `vert_preview_svg` text,
  `status` varchar(255) DEFAULT 'awaiting_approval',
  `approver_id` int(11) DEFAULT NULL,
  `file_organization` varchar(255) DEFAULT NULL,
  `file_organization_acronym` varchar(255) DEFAULT NULL,
  `file_department` varchar(255) DEFAULT NULL,
  `file_department_acronym` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `organization_acronym` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `users` (`id`, `username`, `date_created`, `role`, `name`, `organization`, `organization_acronym`)
VALUES
  (1, 's-tlembur1', '2016-02-29 19:59:57', 'admin', 'Tyler Lemburg', NULL, NULL),
  (3, 'jbrown14', '2016-03-17 15:07:40', 'approver', 'Jill Brown', 'College of Agricultural Sciences and Natural Resources', 'CASNR & IANR'),
  (4, 'mriese3', '2016-03-17 15:07:40', 'approver', 'Michael Riese', 'Extension', 'EXT'),
  (5, 'kvondrak2', '2016-03-17 15:07:40', 'approver', 'Kerry McCullough-Vondrak', 'College of Architecture', 'ARCH'),
  (6, 'toclock-pieper2', '2016-03-17 15:07:40', 'approver', 'Terri Pieper', 'College of Arts and Sciences', 'CAS'),
  (7, 'sirwingish2', '2016-03-17 15:07:40', 'approver', 'Sheri Irwin Gish', 'College of Business Administration', 'CBA'),
  (8, 'bstauffer2', '2016-03-17 15:07:40', 'approver', 'Brad Stauffer', 'College of Education and Human Sciences', 'CEHS'),
  (9, 'jengebretson2', '2016-03-17 15:07:40', 'approver', 'JS Engebretson', 'College of Engineering', 'ENG'),
  (10, 'sroush2', '2016-03-17 15:07:40', 'approver', 'Sue M. Roush', 'College of Journalism and Mass Communication', 'JMC'),
  (11, 'awolff2', '2016-03-17 15:07:40', 'approver', 'Amber Wolff', 'College of Law', 'LAW'),
  (12, 'kandersen1', '2016-03-17 15:07:40', 'approver', 'Kathe Andersen', 'Hixson-Lied College of Fine and Performing Arts', 'FPA'),
  (14, 'srosso3', '2016-03-17 15:07:40', 'approver', 'Shari Rosso', 'University Housing', 'UH'),
  (15, 'mplioplis2', '2016-03-17 15:07:40', 'creative', 'Marcelo Plioplis', NULL, NULL),
  (16, 'lkliment2', '2016-03-17 15:07:40', 'approver', 'Lonna Kliment', 'Athletics', 'ATH'),
  (17, 'khassler2', '2016-03-17 15:07:40', 'approver', 'Katie Williams', 'Alumni Association', 'ALUM'),
  (18, 'cboe2', '2016-03-17 15:07:40', 'approver', 'Charlotte Boe', 'Business & Finance', 'B&F'),
  (319, 'kblack4', '2016-03-17 12:00:00', 'creative', 'Katie Black', NULL, NULL),
  (320, 'tdemaro2', '2016-03-17 12:00:00', 'creative', 'Taylor DeMaro', NULL, NULL),
  (321, 'azeiler2', NOW(), 'creative', 'Andrea Zeiler', NULL, NULL),
  (322, 'sseverin2', NOW(), 'creative', 'Stephanie Severin', NULL, NULL),
  (323, 'cchapman2', NOW(), 'creative', 'Clint Chapman', NULL, NULL);
