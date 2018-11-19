/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 5.5.62 : Database - nafi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nafi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nafi`;

/*Table structure for table `chozy_user` */

DROP TABLE IF EXISTS `chozy_user`;

CREATE TABLE `chozy_user` (
  `iduser` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Username ID (PK)',
  `username` varchar(25) DEFAULT NULL COMMENT 'Username',
  `password` varchar(50) DEFAULT NULL COMMENT 'Password',
  `name` varchar(50) DEFAULT NULL COMMENT 'Name Of User',
  `isactive` tinyint(1) DEFAULT '1' COMMENT 'Active Status',
  `isdelete` tinyint(1) DEFAULT '0' COMMENT 'Delete Status',
  `createdby` int(9) DEFAULT NULL COMMENT 'User Create By',
  `createddate` datetime DEFAULT NULL COMMENT 'User Date Created',
  `modifiedby` int(9) DEFAULT NULL COMMENT 'User Modified By',
  `modifieddate` datetime DEFAULT NULL COMMENT 'User Date Modified',
  `keterangan` text COMMENT 'Keterangan',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `chozy_user` */

insert  into `chozy_user`(`iduser`,`username`,`password`,`name`,`isactive`,`isdelete`,`createdby`,`createddate`,`modifiedby`,`modifieddate`,`keterangan`) values 
(1,'chozytech','3c1a7f18ff7a1567748b4cd19a201c9a','Chozy Technology',1,0,-1,'1999-01-01 00:00:00',-1,'1999-01-01 00:00:00',''),
(2,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator',1,0,-1,'1999-01-01 00:00:00',-1,'1999-01-01 00:00:00','');

/*Table structure for table `view_user` */

DROP TABLE IF EXISTS `view_user`;

/*!50001 DROP VIEW IF EXISTS `view_user` */;
/*!50001 DROP TABLE IF EXISTS `view_user` */;

/*!50001 CREATE TABLE  `view_user`(
 `iduser` int(9) ,
 `username` varchar(25) ,
 `password` varchar(50) ,
 `name` varchar(50) ,
 `keterangan` text 
)*/;

/*View structure for view view_user */

/*!50001 DROP TABLE IF EXISTS `view_user` */;
/*!50001 DROP VIEW IF EXISTS `view_user` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user` AS select `u`.`iduser` AS `iduser`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`name` AS `name`,`u`.`keterangan` AS `keterangan` from `chozy_user` `u` where ((`u`.`isactive` = 1) and (`u`.`isdelete` = 0)) order by `u`.`iduser` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
