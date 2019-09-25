# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: marcCollection
# Generation Time: 2019-09-25 12:40:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Shoes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Shoes`;

CREATE TABLE `Shoes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `brand` varchar(255) NOT NULL DEFAULT '',
  `primary_colour` varchar(255) NOT NULL DEFAULT '',
  `release_year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Shoes` WRITE;
/*!40000 ALTER TABLE `Shoes` DISABLE KEYS */;

INSERT INTO `Shoes` (`id`, `name`, `brand`, `primary_colour`, `release_year`)
VALUES
	(1,'Yeezy Boost 350 V2','Adidas','Black','2017'),
	(2,'Adapt Huarache','Nike','Yellow','2019'),
	(3,'PW Human \"Breathe Walk Sample\"','Adidas','Orange','2016'),
	(4,'Air Jordan 13 Retro \"Melo Class of 2002 \"B-Grade\"','Air Jordan','Black','2018'),
	(5,'Gel Lyte C3 \"Wale\"','Asics','Gold','2016');

/*!40000 ALTER TABLE `Shoes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
