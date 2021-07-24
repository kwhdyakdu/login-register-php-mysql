/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.8-MariaDB : Database - sac
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sac` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sac`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `anrede` text NOT NULL,
  `vorname` tinytext NOT NULL,
  `nachname` tinytext NOT NULL,
  `email_user` tinytext NOT NULL,
  `pwhash` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`no`,`anrede`,`vorname`,`nachname`,`email_user`,`pwhash`,`create_date`) values 
(25,'Herr','a','a','a@mail.ru','$2y$10$ara4w6fRyLPnxUS2xdSxnObWUBYd9XGL2PBNrnnsTxIHK9p2G5Ti.','2021-07-13 21:47:56'),
(26,'Herr','a','a','ba@mail.ru','$2y$10$coL8zRFWatix/NjzbcGX4urjUrBjpyFObVp5Nl07KByWEq108plWe','2021-07-13 21:48:18'),
(27,'Herr','b','b','c@mail.ru','$2y$10$s4fGHiSqh7eBMI55kLLm9e8vmWW1azwq45sLroeHkl.zm6Sebll7G','2021-07-13 21:49:00'),
(28,'Herr','b','b','d@mail.ru','$2y$10$XqeYQ0MwRgGBp8n/hlzkX.1izxY.3f5suYXbEQiikzjUMhOEDAuDW','2021-07-13 21:49:24'),
(29,'Frau','David','John','titanic41900@protonmail.com','$2y$10$hnJfXoWNHsM4drLJtBkifeH0NGGzcC6c6ErC4vsGf4aOxb13hT9rK','2021-07-14 00:06:39');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
