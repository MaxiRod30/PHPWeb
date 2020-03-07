# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     sincrocombo
# Server version:               5.5.16-log
# Server OS:                    Win64
# Target compatibility:         Same as source (5.5.16)
# Target max_allowed_packet:    1048576
# HeidiSQL version:             4.0
# Date/time:                    19/11/2019 21:59:24
# --------------------------------------------------------

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'sincrocombo'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `sincrocombo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `sincrocombo`;


#
# Table structure for table 'estados'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `estados` (
  `idPAIS` int(5) unsigned NOT NULL,
  `idESTADO` int(5) unsigned NOT NULL,
  `nomESTADO` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idPAIS`,`idESTADO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'estados'
#

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS;*/
REPLACE INTO `estados` (`idPAIS`, `idESTADO`, `nomESTADO`) VALUES
	('1','1','Montevideo'),
	('1','2','Canelones'),
	('1','3','Maldonado'),
	('1','4','Río Negro'),
	('1','5','San José'),
	('2','1','Buenos Aires'),
	('2','2','Córdoba'),
	('2','3','Entre Ríos'),
	('2','4','Corrientes'),
	('2','5','San Juan'),
	('2','6','Río Negro'),
	('2','7','Chubut'),
	('2','8','Mendoza');
/*!40000 ALTER TABLE `estados` ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'paises'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `paises` (
  `idPAIS` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomPAIS` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idPAIS`),
  UNIQUE KEY `idPAIS` (`idPAIS`,`nomPAIS`),
  KEY `idPAIS_2` (`idPAIS`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'paises'
#

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS;*/
REPLACE INTO `paises` (`idPAIS`, `nomPAIS`) VALUES
	('1','Uruguay'),
	('2','Argentina'),
	('3','Brasil'),
	('4','Chile'),
	('5','Paraguay');
/*!40000 ALTER TABLE `paises` ENABLE KEYS;*/
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
