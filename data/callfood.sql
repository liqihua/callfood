/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.26 : Database - callfood
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`callfood` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `callfood`;

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oid` int(10) unsigned NOT NULL,
  `buyid` int(10) unsigned NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `oprice` float NOT NULL,
  `tprice` float NOT NULL,
  `status` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

/*Data for the table `items` */

insert  into `items`(`id`,`oid`,`buyid`,`foodname`,`oprice`,`tprice`,`status`) values (39,19,11,'没有汤的河粉',13,9,0),(40,20,12,'炒河粉',13,9,0),(41,21,10,'枸杞猪肝瘦肉汤饭',15,10,0),(42,21,11,'瘦肉汤河粉',13,8,0),(43,21,3,'白切鸡拼叉烧',15,10,0),(50,22,3,'紫苏鸭饭',13,9,0),(51,22,11,'原味手撕鸡（小份）',13,9,0),(52,22,10,'原味烧鸭腿饭',14,10,0),(53,26,3,'tt',12,32,0),(54,27,11,'纸包鸡茄子饭',13,10,0),(55,27,3,'秘制纸包鸡饭',15,12,0),(56,27,10,'家城三宝饭',14,11,0),(57,28,12,'土豆丝烤肉拌饭',12,9,0),(58,28,10,'辣白菜烤肉拌饭',14,11,0),(59,28,3,'金针菇烤肉拌饭',14,11,0);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `money` float NOT NULL,
  `payid` int(10) unsigned NOT NULL,
  `buyfrom` varchar(30) NOT NULL,
  `timeline` datetime NOT NULL,
  `marktime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `orders` */

insert  into `orders`(`id`,`money`,`payid`,`buyfrom`,`timeline`,`marktime`,`status`) values (19,14,12,'木棉餐饮','2015-08-24 13:36:57','2015-08-24 13:37:10',0),(20,10,11,'木棉餐饮','2015-08-24 13:40:57','2015-08-24 13:41:03',0),(21,28,10,'木棉餐饮','2015-08-24 10:51:35','2015-08-25 10:51:45',0),(22,28,10,'粤式广合原味','2015-08-25 10:53:45','2015-08-25 10:53:54',0),(26,44,3,'test1','2015-08-25 12:39:06','2015-08-25 12:39:07',0),(27,32,10,'家城美食','2015-08-26 10:47:49','2015-08-26 10:47:51',0),(28,31,10,'小馋猫烤肉拌饭','2015-08-27 10:41:05','2015-08-27 10:41:08',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`name`) values (3,'iamliqihua@qq.com','123','李启华'),(10,'297413424@qq.com','qq86199246','关铭超'),(11,'2334321670@qq.com','mx1994','妙宣'),(12,'1151110294@qq.com','WDQZM687157','牧'),(13,'123','123','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
