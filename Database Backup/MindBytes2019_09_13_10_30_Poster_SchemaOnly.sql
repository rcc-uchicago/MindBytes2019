/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.1.73-log : Database - mindbytes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `mindbytes`;

USE `mindbytes`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tbl_poster` */

DROP TABLE IF EXISTS `tbl_poster`;

CREATE TABLE `tbl_poster` (
  `poster_id` int(11) NOT NULL AUTO_INCREMENT,
  `files_upload` varchar(256) NOT NULL,
  `fullname` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) NOT NULL,
  `academic_title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `division` varchar(128) NOT NULL,
  `department` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rcc_resources` varchar(256) DEFAULT NULL,
  `principal_investigator` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_of_poster` varchar(256) NOT NULL,
  `project_abstract` text NOT NULL,
  `award_category` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `is_winner` tinyint(1) NOT NULL DEFAULT '0',
  `award_winner_category` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` varchar(4) NOT NULL,
  PRIMARY KEY (`poster_id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
