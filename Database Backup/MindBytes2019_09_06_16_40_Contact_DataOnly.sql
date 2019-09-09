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

/*Data for the table `tbl_contact` */

insert  into `tbl_contact`(`contact_id`,`fullname`,`email`,`email_subject`,`phone`,`message`) values (1,'Pramod Kaushik Mudrakarta','pramodkm@uchicago.edu','Prize winners','9125075747','Hi,\n\nCan you please post the prize winning entries on the website? I did not stay after the poster session and am curious to know who the winners were. (I submitted a poster too!)\n\nThanks,\n\nPramod'),(2,'Kim Lewis Meidenbauer','kimlewis@uchicago.edu','last minute unable to attend','','Hi, I just want to apologize that as of this morning I\'m no longer able to attend today. I may have broken my ankle last night and I\'m going to be at the hospital for a while longer to get an xray. I know attendance is a big deal for this so I just wanted to email and say I would be there if I could! I hope the event goes well!');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
