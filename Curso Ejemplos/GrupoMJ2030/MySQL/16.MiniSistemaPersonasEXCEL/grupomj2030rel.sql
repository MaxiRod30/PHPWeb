# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     grupomj2030rel
# Server version:               5.5.16-log
# Server OS:                    Win64
# Target compatibility:         Same as source (5.5.16)
# Target max_allowed_packet:    1048576
# HeidiSQL version:             4.0
# Date/time:                    2019-10-08 22:22:13
# --------------------------------------------------------

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'grupomj2030rel'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `grupomj2030rel` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `grupomj2030rel`;


#
# Table structure for table 'departamentos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `departamentos` (
  `idDTO` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomDTO` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idDTO`),
  UNIQUE KEY `idDTO` (`idDTO`),
  KEY `idDTO_2` (`idDTO`,`nomDTO`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'departamentos'
#

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS;*/
REPLACE INTO `departamentos` (`idDTO`, `nomDTO`) VALUES
	('1','Montevideo'),
	('2','Canelones'),
	('3','Maldonado'),
	('4','Paysandú'),
	('5','Salto'),
	('6','Rocha'),
	('7','Artigas');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'personas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `personas` (
  `idPERS` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `nomPERS` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dirPERS` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telPERS` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dtoPERS` int(5) unsigned NOT NULL,
  PRIMARY KEY (`idPERS`),
  UNIQUE KEY `idPERS` (`idPERS`),
  KEY `idPERS_2` (`idPERS`,`nomPERS`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



#
# Dumping data for table 'personas'
#

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS;*/
REPLACE INTO `personas` (`idPERS`, `nomPERS`, `dirPERS`, `telPERS`, `dtoPERS`) VALUES
	('1','Bob Esponja','Deep SEa 789','29029285','1'),
	('2','Calamardo','Tottem 8989','29058585','1'),
	('3','Don Cangrejo','Kangreburger 3456','78059545','3'),
	('4','Patricio','Star 38349','40585385','2'),
	('5','Don Gato','Close Street 567','98989890','3'),
	('6','Cucho','Calle cerrada 456','78945685','2'),
	('7','Demóstenes','Callejón 567','45784585','2'),
	('8','Pedro Picapiedra','Stone 6798','8522345','1'),
	('9','Pablo Mármol','Stone 7800','852285','2'),
	('10','Dino','Saurio 6776','457895','2'),
	('11','Pepe Trueno','Storm 888','9089785','1'),
	('14','Pato Lucas','Yaguarón 7676','777777','8'),
	('16','José Pérez','Río Negro 7897989','8898989898','4'),
	('19','nuevo dato','alguna parte 787878','989898989','7'),
	('20','dato cambiado','18 de julio 8888','777777','2');
/*!40000 ALTER TABLE `personas` ENABLE KEYS;*/
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
